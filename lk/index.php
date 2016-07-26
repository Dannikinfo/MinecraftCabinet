<?
session_start();
if(!isset($_SESSION['authorized']) or $_SESSION['authorized'] != 1){
    include 'template/auth.tpl';
}else{
    include 'template/main.tpl';
}
?>