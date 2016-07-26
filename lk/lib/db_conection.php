<?
/*
* This library for database connection 
* by DannikInfo (23.07.2016)
*/
session_start();
if(!isset($config)){
    include '../config.php'; //including config files
}
$connect = mysqli_connect($config['db']['host'],$config['db']['user'],$config['db']['password'],$config['db']['database']);//conecting to mysql host

if(!$connect){
    $_SESSION['error'] = $config['db']['errhost'];
    header("Location:../index.php");
}
?>