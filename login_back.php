<?php
session_start();

include("config.php");
if(isset($_SESSION['login_user']))
{
    header("location:home.php");
}
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $myusername = $_POST['name'];
    $myusercont = $_POST['cont'];
    $mypassword = $_POST['password'];
    $password = md5($mypassword);   //Encrypted Password
    $sql = "SELECT s_id FROM signup WHERE s_cont='$myusercont' AND s_pass='$password' ";

    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);

    $count = mysql_num_rows($result);

    if($count == 1){
        $_SESSION['login_user'] = $myusername;
        header("location:home.php");
    }
    else{
        echo "<center>"."Your Login name or Password is invalid"."<center>";
    }
}
?>