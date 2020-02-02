<?
/*
* This library for database connection 
* by DannikInfo (23.07.2016)
*/
$connect = mysqli_connect($config['db']['host'],$config['db']['user'],$config['db']['password'],$config['db']['database']);//conecting to mysql host

if(!$connect){
    print($config['db']['errhost']);
    print(":error");
    exit();
}
?>