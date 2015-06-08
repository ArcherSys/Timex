<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/includes/View.php";

require_once $_SERVER["DOCUMENT_ROOT"]."/includes/jQueryManager.php";
use ArcherSys\Viewer\Contrib\View;
use ArcherSys\Viewer\jQueryManager;

$clock = new View("Current Time",function(){
    jQueryManager::addjQuery();
    ?>
    
    <script src="/core/js/archersysos.js"></script>
    <script src="/core/js/archersysos-timex.js"></script>
    <script>$(function(){
    var canvas = document.getElementsByTagName("canvas")[0];
var ctx = canvas.getContext("2d");
var radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.90
setInterval(function(){
ArcherSysOS.drawFace(ctx, radius);
  ArcherSysOS.drawNumbers(ctx, radius);
  ArcherSysOS.drawTime(ctx, radius);
}, 1000);
});</script>
    <?php
},function(){
    ?>
    <canvas id="canvas" width="400" height="400"
style="background-color:#333">
</canvas>
<?php
})
?>