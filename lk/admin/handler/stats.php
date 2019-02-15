<?
	//count skin users
	function skinCount(){
		$dir = opendir('skins/');
		$count = 0;
		while($file = readdir($dir)){
		    if($file == '.' || $file == '.DS_Store' || $file == '..' || is_dir('skins/' . $file)){
		        continue;
		    }
		    $count++;
		}
		return $count--;
	}
	//count cloak users
	function cloakCount(){
		$dir = opendir('cloaks/');
		$count = 0;
		while($file = readdir($dir)){
		    if($file == '.' || $file == '..' || is_dir('cloaks/' . $file)){
		        continue;
		    }
		    $count++;
		}
		return $count;
	}
	//count registerd users
	function userCount(){
		require 'config.php';
		require 'lib/db_conection.php';
		$query = "SELECT * FROM ".$config['auth']['table'];
		$stmt = mysqli_query($connect, $query);
		$result = mysqli_fetch_assoc($stmt);
		$count = 0;
		do{
			$count++;
		}while($result = mysqli_fetch_assoc($stmt));
		return $count;
	}
	//Money iConomy
	function iConomyCount(){
		require 'config.php';
		require 'lib/db_conection.php';
		$query = "SELECT * FROM ".$config['money']['table'];
		$stmt = mysqli_query($connect, $query);
		$result = mysqli_fetch_assoc($stmt);
		$count = 0.00;
		do{
			$count += $result[$config['money']['iConomyBalance']];
		}while($result = mysqli_fetch_assoc($stmt));
		return $count;
	}
	//Money Cash
	function cashCount(){
		require 'config.php';
		require 'lib/db_conection.php';
		$query = "SELECT * FROM ".$config['money']['table'];
		$stmt = mysqli_query($connect, $query);
		$result = mysqli_fetch_assoc($stmt);
		$count = 0;
		do{
			$count += $result[$config['money']['realBalance']];
		}while($result = mysqli_fetch_assoc($stmt));
		return $count;
	}

?>