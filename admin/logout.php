<?php 
session_start();  
if(isset($_SESSION['client']))
    unset($_SESSION['client']);
    Header ("location:index.php"); 
?>