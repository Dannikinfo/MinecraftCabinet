<?
/*
* This library for authentication via IPB, Hota CMS
* by DannikInfo (23.07.2016)
*/
session_start();
if(!isset($config)){
    require '../config.php';
}

    if(isset($_POST['user']) && $_POST['user'] != ''){
        Uexit($_POST['user']);
    }
    if(isset($_POST['username'])){
        login($_POST['username'], $_POST['password']);
    }

    function Uexit($user){
        global $config;
        if($_SESSION['user'] == $user){
            $_SESSION['authorized'] = 0;
            print($config['general']['mainPage']);
            print(":success");
        }else{
            print ("System Error!");
            print(":error");   
        }
    }
    function login($user, $getPass){
        global $config;
        require 'db_conection.php';
        $query = "SELECT * FROM ".$config['auth']['table']." WHERE ".$config['auth']['nameC']." = '".$user."' ";
        $stmt = mysqli_query($connect, $query) or die("mysql ошибка - ".mysqli_error($connect).":error");
        $result = mysqli_fetch_assoc($stmt);
        $realUser = $result['name'];
        if($config['auth']['saltC'] != 'nil')
            $salt = $result[$config['auth']['saltC']];
        $realPass = $result[$config['auth']['passC']];
        $userStatus = $result[$config['auth']['adminC']];
        if($stmt){
            $type = $config['auth']['type'];
            if($type == 0)
                $getHashPass = md5(md5($salt).md5($getPass));
            if($type == 3)
                $getHashPass = sha1(md5(md5($getPass)));
            if($user == $realUser && $getHashPass == $realPass){
                $_SESSION['authorized'] = 1;
                $_SESSION['user'] = $realUser;
                $_SESSION['userStatus'] = $userStatus;
                print($config['general']['mainPage']);
                print(":success");
            }else{
                print $config['auth']['wrongAuth'];
                print(":error");
            }
        }else{
            print $config['auth']['wrongBase'];
            print(":error");
        }
    }
?>