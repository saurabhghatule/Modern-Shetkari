<?php

include("config.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $a = $_POST['fullname'];
    $b = $_POST['address'];
    $c = $_POST['State'];
    $d = $_POST['dist'];
    $e = $_POST['acr'];
    $f = $_POST['cont'];
    $g = md5($_POST['pass']);
    $h = $_POST['type'];
    
 
$qry = mysql_query("INSERT INTO hackxspirit.signup (s_name, s_addr, s_state, s_dist, s_acr, s_cont, s_pass, s_type) VALUES ('$a' , '$b' , '$c' , '$d' , '$e' , '$f' , '$g' , '$h')");

    if($qry == true){
        header("location:login.php");
    }
    else{
        echo "Not Inserted".mysql_error();
    }
}
else{
    echo "Request method is not POST";
}
?>