<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['lang']))
    $_SESSION['lang'] = "az";
else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
    if ($_GET['lang'] == "en")
        $_SESSION['lang'] = "en";
    else if ($_GET['lang'] == "az")
        $_SESSION['lang'] = "az";
}

require_once "languages/" . $_SESSION['lang'] . ".php";


$currentLang='az';
$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
if (isset( $_SESSION['lang'])){
    $currentLang = $_SESSION['lang'];
}

?>