<?
    require 'admin/handler/stats.php';
?>
<h3><span class="glyphicon glyphicon-stats"></span> Stats:</h3>
<h4>Registered users: <?=userCount()?></h4>
<h4>Money in iConomy: <?=iConomyCount()?></h4>
<h4>Money in Cash: <?=cashCount()?></h4>
<h4>Users have skin: <?=skinCount()?></h4>
<h4>Users have cloak: <?=cloakCount()?></h4>
