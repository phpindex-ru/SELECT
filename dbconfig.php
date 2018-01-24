<?php

$DB_host = "localhost";
$DB_user = "host1645986";
$DB_pass = "RF92w0pC";
$DB_name = "host1645986";

try
{
	$DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
	$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	$e->getMessage();
}