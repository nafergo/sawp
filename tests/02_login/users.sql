INSERT INTO `user` (`id`, `username`, `passwordHash`, `mailAddress`, `authKey`, `accessToken`, `createdat`, `status`, `gravatarMailAddress`) VALUES (1, '&amp;amp;<>*?&%$§!°^@"''`#{}()[];:&ouml;öäüßǆ Ǉ ǈ ǉ ǊϮ࿊※⌨僀&amp;', '$2y$13$tHzWCiJxnwRxbaiYghRojeJ3jfqIOEjE54nQfNlsYT2gf7rLWb.Sq', 'test@screenwr.acamar.uberspace.de', 'uZfqf_cQ6lLvvOJYFFz0htJgr0xuvtmx', 'Vz34B1d04p6aKmGIKz1LnfkGFaArvDZi', '2014-09-04 13:31:12', 1, NULL), (2, 'test02', '$2y$13$RY6/Tnj0nsKIAmwvAFSrZ.9JfM/YLfAjpD1o0CNeEgeaJuckd3xf.', 'test02@screenwr.acamar.uberspace.de', 'OPQ5oRG7MHnqLv-mQ66w8BS6xe_ZHwhG', 'A-vj8LBNYufCl27mYD4Diwinj-EMTsao', '2014-09-04 13:31:15', 1, NULL), (3, 'test03', '$2y$13$RY6/Tnj0nsKIAmwvAFSrZ.9JfM/YLfAjpD1o0CNeEgeaJuckd3xf.', 'test03@screenwr.acamar.uberspace.de', 'OPQ5oRG7MHnqLv-mQ66w8BS6xe_ZHwhG', 'A-vj8LBNYufCl27mYD4Diwinj-EMTsao', '2014-09-04 13:31:15', 0, NULL), (4, 'test04', '$2y$13$RY6/Tnj0nsKIAmwvAFSrZ.9JfM/YLfAjpD1o0CNeEgeaJuckd3xf.', 'test04@screenwr.acamar.uberspace.de', 'OPQ5oRG7MHnqLv-mQ66w8BS6xe_ZHwhG', 'A-vj8LBNYufCl27mYD4Diwinj-EMTsao', '2014-09-04 13:31:15', 2, NULL),(5, 'test05', '$2y$13$RY6/Tnj0nsKIAmwvAFSrZ.9JfM/YLfAjpD1o0CNeEgeaJuckd3xf.', 'test05@screenwr.acamar.uberspace.de', 'OPQ5oRG7MHnqLv-mQ66w8BS6xe_ZHwhG', 'A-vj8LBNYufCl27mYD4Diwinj-EMTsao', '2014-09-04 13:31:15', 3, NULL),(6, 'test06', '$2y$13$RY6/Tnj0nsKIAmwvAFSrZ.9JfM/YLfAjpD1o0CNeEgeaJuckd3xf.', 'test06@screenwr.acamar.uberspace.de', 'OPQ5oRG7MHnqLv-mQ66w8BS6xe_ZHwhG', 'A-vj8LBNYufCl27mYD4Diwinj-EMTsao', '2014-09-04 13:31:15', 1, NULL);
INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES ('user', '2', NULL),('user', '6', NULL);