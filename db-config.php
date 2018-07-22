<?php

define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'aplication_db');

/** $dbconnect : database connection */
$dbconnect = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

/** Error handling - massage  */
if ($dbconnect->connect_error) {
	die('Database Not Connect. Error : ' . $dbconnect->connect_error);
}
