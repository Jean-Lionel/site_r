<?php
require_once("Connect.php");
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $del=$pdo->query("DELETE from article where idart=$id");
    header("Location:../index.php");
}
if(isset($_GET['ide']))
{
    $ide=$_GET['ide'];
    $del=$pdo->query("DELETE from admin where id=$ide");
    header("Location:../gallery.php");
}
if(isset($_GET['mod']))
{
    $mod=$_GET['mod'];
    $del=$pdo->query("DELETE from personnel where id=$mod");
    header("Location:../personnel.php");
}
?>