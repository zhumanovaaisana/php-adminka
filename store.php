<?php

//connectdb
//sql
//redirect index.php
$pdo = new PDO('mysql:host=localhost;port=3360;dbname=ais','root','');
$sql = 'INSERT INTO `users` ( `name`, `email`, `date`,`status`) VALUES (:name, :email, :date, :status)';
$statment = $pdo -> prepare($sql);

$statment -> execute($_POST);

header("Location: /");




?>