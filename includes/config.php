<?php

/*-------------------------------------------------------+
| Content Management System 
| http://www.phphelptutorials.com/
+--------------------------------------------------------+
| Author: David Carr  Email: dave@daveismyname.co.uk
+--------------------------------------------------------+*/

ob_start();
session_start();

// db properties
define('DBHOST','host');
define('DBUSER','database username');
define('DBPASS','password');
define('DBNAME','database name');

// make a connection to mysql here
$conn = @mysql_connect (DBHOST, DBUSER, DBPASS);
$conn = @mysql_select_db (DBNAME);
if(!$conn){
	die( "Sorry! There seems to be a problem connecting to our database.");
}

// define site path
define('DIR','http://www.domain.com/');

// define admin site path
define('DIRADMIN','http://www.domain.com/admin/');

// define site title for top of the browser
define('SITETITLE','Simple CMS');

//define include checker
define('included', 1);

include('functions.php');
?>
