<?php

$url = $_SERVER['REQUEST_URI'];
$parseUrl = parse_url($url)['query'];
$idUser = explode('=',$parseUrl)[1];
$idNumber = intval($idUser);


$mysqli = new mysqli('db', 'root','root', 'projet-docker');
$sql = "DELETE FROM `user` WHERE id=$idNumber;";
$mysqli->query($sql);

header("Location: index.php"); /* Redirect browser */


?>