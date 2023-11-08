<?php 
session_start();

$_SESSION=[];
session_unset();
session_destroy();
header("location:login.php");

setcookie("key","", time()-3600);
setcookie("id","", time()-3600);

?>