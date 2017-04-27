<?php
$host='localhost';
$user='root';
$pass='';
@mysql_connect($host,$user,$pass)or die("cant connect to MySql".mysql_error());
@mysql_select_db('FoodCourt') or die("cant connect to database".mysql_error());
#echo("connected");


 ?>
