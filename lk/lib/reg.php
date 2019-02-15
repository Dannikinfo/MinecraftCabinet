<?
/*
* This library for authentication by Invision Power Board
* by DannikInfo (15.09.2017)
*/
session_start();
if(!isset($config)){
    require '../config.php';
}
require 'db_conection.php';
$user = $_POST['username'];
$getPass = $_POST['password'];
$rePass = $_POST['password2'];
$email = $_POST['email'];
//if($config['auth']['saltC'] != 'nil')
//    $salt = $result[$config['auth']['saltC']];
$query = "SELECT * FROM ".$config['auth']['table']." WHERE ".$config['auth']['nameC']." = '".$user."' ";
$stmt = mysqli_query($connect, $query) or die("mysql ошибка - ".mysqli_error($connect).":error");
$result = mysqli_fetch_assoc($stmt);
if($result['id'] == ""){
    if($getPass == $rePass && $user != "" && $email != ""){
        $type = $config['auth']['type'];
        if($type == 0)
            $hashPass = md5(md5($salt).md5($getPass));
        if($type == 3){
            $hashPass = sha1(md5(md5($getPass)));
            $query = "INSERT INTO ".$config['auth']['table']." (".$config['auth']['nameC'].", ".$config['auth']['passC'].", ".$config['auth']['emailC'].") VALUES ('".$user."', '".$hashPass."', '".$email."')";
            $stmt = mysqli_query($connect, $query) or die("mysql ошибка -  ".mysqli_error($connect).":error");
            $query2 = "INSERT INTO ".$config['money']['table']." (".$config['money']['userName'].", ".$config['money']['iConomyBalance'].", ".$config['money']['realBalance'].") VALUES ('".$user."', '0', '0')";
            $stmt2 = mysqli_query($connect, $query2) or die("mysql ошибка -  ".mysqli_error($connect).":error");
            if($stmt && $stmt2){
    	        $_SESSION['authorized'] = 1;
    	        $_SESSION['user'] = $user;
                print($config['general']['mainPage']);
    	        print(":success");
            }else{
            	print $config['auth']['wrongBase'];
                print(":error");
            }
        }
    }else{
        print $config['auth']['wrongReg'];
        print(":error");
    }
}else{
    print $config['auth']['wrongUser'];
    print(":error");  
}
?>