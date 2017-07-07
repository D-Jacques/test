<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		//partie articles visiteurs
		['GET|POST', '/news/[:article_type]', 'Default#getArticlesByTypes', 'default_news'],
		// ['GET|POST', '/[:article_type]', 'Default#home', 'default_sorties'],
		// ['GET|POST', '/[:idType]', 'Default#home', 'default_event'],
		// ['GET|POST', '/[:idType]', 'Default#home', 'default_miseajour'],
		// ['GET|POST', '/[:idType]', 'Default#home', 'default_dossier'],

		//partie utilisateurs
		['GET|POST', '/inscription', 'Admin#inscription', 'admin_inscription'],
		['GET|POST', '/connection', 'Admin#connection', 'admin_connection'],
		['GET', '/deconnection', 'Admin#disconnect', 'admin_deconnection'],

		//partie articles admin
		['GET|POST', '/article/creation', 'Article#create', 'article_create'],
		['GET|POST', '/article/list', 'Article#list', 'article_list'],
		['GET|POST', '/article/delete', 'Article#delete', 'article_delete'],
		['GET|POST', '/article/update/[:id]', 'Article#update', 'article_update']
	);