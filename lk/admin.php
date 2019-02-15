<?
	session_start();
	require_once 'config.php';
	if(isset($_SESSION['userStatus'])){
		if($_SESSION['userStatus'] != 1){
			header('Location:'.$config['general']['mainPage']);
		}else{

				$page = $_GET['page'];
				if($page != "" && file_exists("admin/pages/".$page.".php")){
					require "admin/pages/header.php";
					require "admin/pages/".$page.".php";
					require "admin/pages/footer.php";
				}else{
					header('Location:'.$config['general']['mainPage'].'/adm/main');
				}
		}
	}else{
		header('Location:'.$config['general']['mainPage']);
	}

?>