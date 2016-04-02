<?php
error_reporting(0);
if(!mysql_connect("localhost","restles6_12345","12345"))
{
	die('oops connection problem ! --> ');
}
if(!mysql_select_db("restles6_1"))
{
	die('oops database problem ! --> ');
}

?>
