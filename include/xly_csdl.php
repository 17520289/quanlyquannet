<?php
function Doc_Bang($sql)
{
	$options = array(
PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
$dbh = new PDO('mysql:host=localhost;dbname=quanlyquannet', 'root', '',$options);
$bang=$dbh->query($sql);
	
return $bang;
}
function get_Last_Id()
{
	$options = array(
PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
$dbh = new PDO('mysql:host=localhost;dbname=quanlyquannet', 'root', '',$options);
$lastid=$dbh->query("SELECT MAX(`sodh`) FROM donhang");
	
return $lastid;
}
function Ghi_Du_Lieu($sql)
{
	
	$options = array(
PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);

$dbh = new PDO('mysql:host=localhost;dbname=quanlyquannet', 'root', '',$options);
try{
	$dbh->beginTransaction();
	$dbh->exec($sql);
	
	$dbh->commit();

}
catch(PDOExecption $e){
	$dbh->rollBack();
	return -1;
	}
}

