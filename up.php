<?php

//connectdb
//sql
//redirect index.php
$pdo = new PDO('mysql:host=localhost;port=3360;dbname=ais','root','');
$sql = 'UPDATE  `users`  SET  `name`=:name, `email`=:email, `date`=:date,`status`=:status WHERE `id`=:id';
$statment = $pdo -> prepare($sql);

$statment -> execute($_POST);


header("Location: /");




?>