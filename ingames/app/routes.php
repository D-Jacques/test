<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET', '/quisommesnous', 'Default#whoAreWe', 'default_quisommesnous'],
		['GET', '/informationlegales', 'Default#informations', 'default_infolegales'],
		['GET', '/faq', 'Default#faq', 'default_faq'],
		['GET', '/contact', 'Default#contactPage', 'default_contact'],
		//partie articles visiteurs
		['GET|POST', '/type/[:article_type]', 'Default#getArticlesByTypes', 'default_news'],
		
		//partie utilisateurs
		['GET|POST', '/inscription', 'Admin#inscription', 'admin_inscription'],
		['GET|POST', '/connection', 'Admin#connection', 'admin_connection'],
		['GET', '/deconnection', 'Admin#disconnect', 'admin_deconnection'],

		//partie articles admin
		['GET|POST', '/article/creation', 'Article#create', 'article_create'],
		['GET|POST', '/article/list', 'Article#list', 'article_list'],
		['GET|POST', '/article/delete', 'Article#delete', 'article_delete'],
		['GET|POST', '/article/update/[:id]', 'Article#update', 'article_update'],

		['GET|POST', '/admin/admin_home', 'Admin#home', 'admin_adminhome']
	);