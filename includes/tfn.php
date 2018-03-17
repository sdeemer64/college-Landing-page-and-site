<?php
ob_start();
session_start();
if(isset($_GET['Lead_Source']))
        $_SESSION['Lead_Source'] = strtolower($_GET['Lead_Source']) == 'Direct Mail' ? 104 : $_GET['Lead_Source'];


if(isset($_GET['TFN']))
        $_SESSION['TFN'] = $_GET['TFN'];
$lead_source = empty($_SESSION['Lead_Source']) ? 578 : $_SESSION['Lead_Source'];
$tfn = empty($_SESSION['TFN']) ? "855-929-0550" : $_SESSION['TFN'];
?>
