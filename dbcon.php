<?php
$DB_HOST = 'lionfoot.dk.mysql';
$DB_USER = 'lionfoot_dk';
$DB_PASS = 'dziz9jkD';
$DB_NAME = 'lionfoot_dk';

$link = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
//$link = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT);
if ($link->connect_error) { 
   die('Connect Error ('.$link->connect_errno.') '.$link->connect_error);
}
$link->set_charset('utf8'); 
?>
