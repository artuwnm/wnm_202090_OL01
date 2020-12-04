<?php


function MYSQLIAuth() {
	return [
		
			"localhost", // mysql host
			"ashleyyeo825", // mysql user name
			"ashleyyeo825", // mysql password
			"WNM608_Ashley_Yeo" //mysql database name

		];
} 

function PDOAuth() {
	return [	
			"mysql:host=localhost;dbname=WNM608_Ashley_Yeo", // host and database name
			"ashleyyeo825", // mysql user name
			"ashleyyeo825", // mysql password
			[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]

		];
} 