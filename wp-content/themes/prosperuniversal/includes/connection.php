<?php
error_reporting (E_ERROR | E_WARNING | E_PARSE);
ini_set('display_errors', 0);
$db_username = "biguamkl_prosperunivarsal_user";  
$db_password = "3rS%{E!XF2Q[Up.oQ3";  
$db_name = "biguamkl_prosper_universal";   
$db_host = "localhost";
$page_title = "Prosper Universal Pvt.Ltd";

$con_website=mysqli_connect($db_host, $db_username, $db_password) or die ('cannot connect to database');
mysqli_select_db($con_website,$db_name) or die ('cannot connect to database'.mysqli_error($con_website));
mysqli_query($con_website,"SET CHARACTER SET utf8");
mysqli_query($con_website,"SET NAMES utf8");

$sitepath="https://www.prosperuniversal.com/";
$datapath="https://www.prosperuniversal.com/";
?>