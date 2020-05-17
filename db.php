<?php
ob_start();
//define(DB_SERVER,"localhost");
//define(DB_USERNAME,"root");
//define(DB_PASSWORD,"");
//define(DB_DATABASE,"wdt");
$connection=mysqli_connect("localhost","root","")or die(mysqli_error($connection));
$db_c=mysqli_select_db($connection,"project_sem6")or die(mysqli_error());





?>
