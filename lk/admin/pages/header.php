<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="../admin/js/main.js"></script>
        <link rel="stylesheet" href="../admin/styles/Styles.css">
        <title>Admin||Cabinet</title>
    </head>
    <body>
    	<div class="container">
    		<div class="col-md-10 col-lg-10 col-sm-10 col-sm-offset-1 col-xs-12 block">
    			<div class="col-md-4 col-lg-4 col-sm-4 side">
    				<h4>Welcome to admin panel, <?=$_SESSION['user']?>!</h4>
    				<a href="<?=$config['general']['mainPage']?>/adm/main"><h1><span class="glyphicon glyphicon-home"></span> Main</h1></a>
    				<a href="<?=$config['general']['mainPage']?>/adm/accounts"><h1><span class="glyphicon glyphicon-user"></span> Accounts</h1></a>
    				<a href="<?=$config['general']['mainPage']?>/adm/settings"><h1><span class="glyphicon glyphicon-cog"></span> Settings</h1></a>
                    <a href="<?=$config['general']['mainPage']?>/adm/system"><h1><span class="glyphicon glyphicon-info-sign"></span> System</h1></a>
    			</div>
                <div class="all"></div>
    			<div class="col-md-8 col-lg-8 col-sm-8 side">