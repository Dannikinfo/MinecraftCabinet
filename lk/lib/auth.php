<?
/*
* This library for authentication by Invision Power Board
* by DannikInfo (23.07.2016)
*/
session_start();
if(!isset($config)){
    require '../config.php';
}
require 'db_conection.php';
$user = $_POST['username'];
$getpass = $_POST['password'];
$query = "SELECT * FROM ".$config['auth']['table']." WHERE ".$config['auth']['nameC']." = '$user' ";

$stmt = mysqli_query($connect, $query) or die("ошибка".mysqli_error($connect));
$result = mysqli_fetch_assoc($stmt);
$realUser = $result['name'];
$salt = $result[$config['auth']['saltC']];
$realPass = $result[$config['auth']['passC']];
if($stmt){
    $gethashpass = md5(md5($salt).md5($getpass));
    if($user == $realUser && $gethashpass == $realPass){
        $_SESSION['authorized'] = 1;
        $_SESSION['user'] = $realUser;
        header("Location:../index.php");
    }else{
        $_SESSION['error'] = $config['auth']['wrongauth'];
        header("Location:../index.php");
    }
}else{
    $_SESSION['error'] = $config['auth']['wrongbase'];
    header("Location:../index.php");
}
?>