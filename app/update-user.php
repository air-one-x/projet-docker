<?php

$mysqli = new mysqli('db', 'root','root', 'projet-docker');
$sql = "UPDATE `user` SET `prenom`=?, `nom`=?, `email`=?, `age`=?, `color`=?, `gender`=? WHERE prenom=?;";
$stmt = $mysqli->prepare($sql);

$stmt->bind_param('sssssss', $prenom,$nom,$email,$age,$color,$gender,$testPrenom);
$nom = $_POST['Lastname'];
$prenom = $_POST['Name'];
$email = $_POST['E-mail'];
$age = $_POST['Brithday'];
$color= $_POST['favcolor'];
$gender = $_POST['Gender'];
$testPrenom = $_POST['Name'];
$stmt->execute();
$stmt->close();

header("Location: index.php"); /* Redirect browser */


?>