<?php
session_start();
if(!isset($_SESSION['login_user']))
{
    header("location: login.php");
}
include('config.php');
$user_check = $_SESSION['login_user'];

$ses_sql= mysql_query("select * from hackxspirit.signup where s_cont= '$user_check' ");

$row = mysql_fetch_array($ses_sql);

// echo "<center>"."<b>"."WELCOME ".$data = $row['a_name'] ."</b>"."</center>";

?>