<?php
session_start();

    if (!isset($_SESSION['client']) || $_SESSION['client'] != 'ok')
    {
        Header ("location:index.php");
        die();
    }
?>  