<?php
$pdo = new PDO('mysql:host=localhost;port=3360;dbname=ais','root','');
$param = $_GET['id'];
$sql = "DELETE FROM `users` WHERE `id` = $param";
$statment = $pdo -> prepare($sql);
$statment -> execute($_GET);

header("Location: /");

?>