<?
require 'lib/minecraft_player.php';
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="template/styles/Styles.css">
        <script src="template/js/jquery-2.1.0.min.js"></script>
        <script src="template/js/main.js"></script>
        <script src="template/js/ajax.js"></script>
        <title>Cabinet</title>
    </head>
    <body>
        <div class="container">
            <div class="col-md-6 col-md-offset-3 col-lg-6  col-sm-10 col-sm-offset-1 col-xs-12  block">
                <div class="col-md-6 col-lg-6 col-sm-6 side">
                    <div class="center">
                        <img src="lib/skin.php?user=<?=$_SESSION['user'];?>&mode=1" alt="Skin" >
                    </div>
                    <br>
                    <div class="side-group load-skin">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <input type="file" title=" Skin" name="skin">
                                <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-cloud-upload"></span></button>
                                <button class="btn btn-warning"><span class="glyphicon glyphicon-remove-sign"></span></button>
                            </span>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-btn">
                                <input type="file" title=" Cloack" name="cloack">
                                <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-cloud-upload"></span></button>
                                <button class="btn btn-warning"><span class="glyphicon glyphicon-remove-sign"></span></button>
                            </span>
                        </div>
                    </div>
                </div>
                <button type="button" class="close pull-right exit" data-dismiss="modal" aria-label="Close" onclick="exit('<?=$user?>')">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="col-md-6 col-lg-6 col-sm-6 side">
                    <h3>Player information:</h3>
                    <div class="side-group">
                        <div><b>Nickname:</b> <?=$_SESSION['user'];?></div>
                        <div><b>Group:</b> <?=$prefix?></div>
                        <div><b>Cash:</b> <?=$realBalance;?> RUB</div>
                        <div><b>iConomy:</b> <?=$iCBalance;?></div>
                    </div>
                    <h3>Improvements:</h3>
                    <div class="title">Fill up balance:</div>
                    <div class="side-group">
                        <div class="input-group">
                            <input type="number" class="form-control" placeholder="Fill up cash!" id="fillUpInput">
                            <span class="input-group-btn">
                                <input type="submit" class="btn btn-default" value="Fill up!" id="fillUpButton">
                            </span>
                        </div>
                    </div>
                    <div class="title">Set Group!</div>
                    <div class="side-group">
                        <div class="input-group">
                            <select class="form-control" id="setGroup">
                                <option value="<?=array_keys($config['groups'])[0];?>">Helper - 100 RUB</option>
                                <option value="<?=array_keys($config['groups'])[1];?>">Vip - 200 RUB</option>
                                <option value="<?=array_keys($config['groups'])[2];?>">Moderator - 500 RUB</option>
                                <option value="<?=array_keys($config['groups'])[3];?>">Admin - 1000 RUB</option>
                                <option value="<?=array_keys($config['groups'])[4];?>">Creative - 1500 RUB</option>
                            </select>
                            <span class="input-group-btn">
                                <input type="submit" class="btn btn-default" value="Get!" id="setGroupButton">
                            </span>
                        </div>
                    </div>
                    <div class="title">Set up prefix! - 100 RUB</div>
                    <div class="side-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="<?=$info['prefix'];?>" id="setPrefix">
                            <span class="input-group-btn">
                                <input type="submit" class="btn btn-default" value="Set up!" id="setPrefixButton">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="template/js/common.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>