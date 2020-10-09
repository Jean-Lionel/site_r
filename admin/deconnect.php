<?php
require_once("pages/headerAdmin.php");
require_once("pages/connect.php");
$_SESSION['user'] = null;
header("Location:../index.php");

