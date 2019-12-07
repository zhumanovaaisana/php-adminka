<?php
session_start(); 

$pdo = new PDO('mysql:host=localhost;port=3360;dbname=ais','root','');
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT  * FROM `markup` WHERE `user_email`=:email AND `user_password`= :password ";

 $statment = $pdo -> prepare($sql);

 $statment -> execute($_POST);

 $result = $statment -> fetch(PDO::FETCH_ASSOC);


if ($result == false ||is_null($result))   {
	$_SESSION['login_error_message']='Введен неверный логин или пароль';
	header("Location: https://markup/login_form.php");
}

else{

$_SESSION['result'] = $result;

header("Location: https://markup/profile_form.php");

}
?>