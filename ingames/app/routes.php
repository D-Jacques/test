<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],

		//partie utilisateurs
		['GET|POST', '/inscription', 'Admin#inscription', 'admin_inscription'],
		['GET|POST', '/connection', 'Admin#connection', 'admin_connection'],
		['GET', '/deconnection', 'Admin#disconnect', 'admin_deconnection'],

		//partie articles
		['GET|POST', '/article/creation', 'Article#create', 'article_create']
	);