<?
/*
* This library for get Minecraft Player information of DataBase(Special for LK)
* by DannikInfo (24.07.2016)
*/
session_start();
if(!isset($config)){
    require 'http://dmn/lk/config.php';
}
require 'db_conection.php';
require 'uuid.php';
$user = $_SESSION['user'];
$uuid = uuidConvert($user);
//Money selecting database
$query_money = "SELECT * FROM ".$config['money']['iConomyTable']." WHERE username = '$user' ";
$stmt_money = mysqli_query($connect, $query_money);
$result_money = mysqli_fetch_assoc($stmt_money);
$iCBalance = $result_money[$config['money']['iConomyBalance']];
$realBalance = $result_money[$config['money']['iConomyRealBalance']];
//Permissions selecting database
    //pex main
$query_pex_main = "SELECT * FROM ".$config['pex']['pexMainTable']." WHERE name = '$uuid' ";
$stmt_pex_main = mysqli_query($connect, $query_pex_main);
$result_pex_main = mysqli_fetch_assoc($stmt_pex_main);
if($result['permissions'] == prefix){
    $prefix = $result['value'];
}
    //pex inheritance for user
$query_pex_inh = "SELECT * FROM ".$config['pex']['pexInhTable']." WHERE child = '$uuid' ";
$stmt_pex_inh = mysqli_query($connect, $query_pex_inh)or die(mysqli_error($connect));
$result_pex_inh = mysqli_fetch_assoc($stmt_pex_inh);
?>