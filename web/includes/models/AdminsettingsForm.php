<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 */
class AdminsettingsForm extends Model
{
    public $pageTitle;
    public $pagehomeurl;
    public $emailActivation;
    public $activationMailBody;
    public $activationMailSubject;
    public $activationMailSender;
    public $language;
    public $defaultCategories;
    public $frontPage;
    public $contactmail;
    public $mailhost;
    public $mailport;
    public $mailusername;
    public $mailpassword;
    public $mailencryption;
    
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name is required
            [['pageTitle','pagehomeurl','emailActivation','activationMailBody',
            'activationMailSubject','activationMailSender','frontPage',
            'defaultCategories','contactmail',
            'mailhost','mailport','mailusername','mailpassword'], 'required'],
            [['language','mailencryption'], 'dummy'],
            [['mailport'],'numeric'],

        ];
    }
    
    public function dummy() {}
    
    public function numeric() {
        if(!ctype_digit($this->mailport))
        $this->addError('mailport', \Yii::t('app', 'only digits allowed!'));
    }
    
    public function __construct() {
        $this->pageTitle=Setting::findSetting("pagetitle")->getValue();
        $this->pagehomeurl=Setting::findSetting("pagehomeurl")->getValue();
        $this->emailActivation=Setting::findSetting("emailActivation")->getValue();
        $this->activationMailBody=Setting::findSetting("activationMailBody")->getValue();
        $this->activationMailSubject=Setting::findSetting("activationMailSubject")->getValue();
        $this->activationMailSender=Setting::findSetting("activationMailSender")->getValue();
        $this->frontPage=Setting::findSetting("frontPage")->getValue();
        $this->defaultCategories=Setting::findSetting("defaultCategories")->getValue();
        $this->contactmail=Setting::findSetting("contactmail")->getValue();
        $this->language = \Yii::$app->language;
        
        $this->mailhost = \Yii::$app->mail->transport->getHost();
        $this->mailport = \Yii::$app->mail->transport->getPort();
        $this->mailusername = \Yii::$app->mail->transport->getUsername();
        $this->mailpassword = \Yii::$app->mail->transport->getPassword();
        $this->mailencryption = \Yii::$app->mail->transport->getEncryption();

    }

    /**
     * Registers a user using the provided username, password and emailadress.
     * @return boolean whether the user is registered successfully
     */
    public function set()
    {
        if ($this->validate()) {
            Setting::findSetting("pagetitle")->setValue($this->pageTitle);
            Setting::findSetting("pagehomeurl")->setValue($this->pagehomeurl);
            Setting::findSetting("emailActivation")->setValue($this->emailActivation==1);
            Setting::findSetting("activationMailBody")->setValue($this->activationMailBody);
            Setting::findSetting("activationMailSubject")->setValue($this->activationMailSubject);
            Setting::findSetting("activationMailSender")->setValue($this->activationMailSender);
            Setting::findSetting("frontPage")->setValue($this->frontPage);
            Setting::findSetting("defaultCategories")->setValue($this->defaultCategories);
            Setting::findSetting("contactmail")->setValue($this->contactmail);

            $languagefile = '<?php return "'.$this->language.'";';
            $byteswritten = file_put_contents(Yii::getAlias('@app')."/config/language.php", $languagefile);
            if(!$byteswritten) throw new ErrorException(\Yii::t('app', 'no Bytes written'));
            
            $installer = new Installer();
            $installer->setMailConfig("Swift_SmtpTransport", $this->mailhost, $this->mailusername, $this->mailpassword, $this->mailport, $this->mailencryption);
                
            return true;
        } else {
            return false;
        }
    }
}
