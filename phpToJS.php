<?php

session_name('a'); 
session_id('b'); 
session_start(); 
$a = $_SESSION['key'];
$arrayCount = $_GET["index"];
$_SESSION[$arrayCount] = $arrayCount;  


session_write_close(); 


echo json_encode($_SESSION);


session_name('a'); 
session_id('b'); 
session_start(); 
$_SESSION['key']=$a; 
session_write_close(); 




?>