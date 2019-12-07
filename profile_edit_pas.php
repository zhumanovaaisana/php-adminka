<?php
session_start();

$pdo = new PDO('mysql:host=localhost;port=3360;dbname=ais','root','');

$sql =  "SELECT  * FROM `markup` WHERE `user_id`= :id ";

$statment = $pdo -> prepare($sql);

$statment -> execute(['id'	=> $_POST['id']]);

$result = $statment -> fetch(PDO::FETCH_ASSOC);

$sel = $pdo -> query("SELECT * FROM markup WHERE user_email = '".$_POST['email']."'");
$res = $sel -> fetch(PDO::FETCH_ASSOC);


	if($result['user_password'] == $_POST['current'] ){
		if ($_POST['password'] == $_POST['password_confirmation']) {


			$sql2 = "UPDATE `markup` SET `user_password`=:password WHERE user_id='".$_POST['id']."'";
			$statment2 = $pdo -> prepare($sql2);

			$statment2 -> execute(['password' => $_POST['password']]);

			$msg = 'Изменение пароля прошло успешно!';
            $_SESSION ['message1'] = $msg;
            $_SESSION['result']['user_password'] = $_POST['password'];

           header("Location: https://markup/profile_form.php");


		}

	}
	else  {
		echo "Ne pravilniy parol!";
		exit();
	}

	?>