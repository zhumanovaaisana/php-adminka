<?php

$pdo = new PDO('mysql:host=localhost;port=3360;dbname=ais','root','');
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT  * FROM `users` WHERE `email`= '".$email."' AND `password`= '".$password."' ";

$sql = $pdo -> query($sql);


if ($sql == false){
	echo "OSHIBKA! Net zadannogo email";
}

else{

$user = $sql -> fetch(PDO::FETCH_ASSOC);


if ($user['password'] == $_POST['password'] )  {
	header("Location: https://mysite/page.php");
}
else echo "NET!";

}
?>