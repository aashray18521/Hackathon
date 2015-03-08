<?php
session_start();
$_SESSION['mail'] = null;
header('Location:index.php');

?>