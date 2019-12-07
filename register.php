<?php
session_start();

$mass = [
	'name' => $_POST['name'],
	'email' => $_POST['email'],
    'password' => $_POST['password']
];

$pdo = new PDO('mysql:host=localhost;port=3360;dbname=ais','root','');


$sel = $pdo -> query("SELECT * FROM markup WHERE user_email = '".$_POST['email']."'");
$res = $sel -> fetch(PDO::FETCH_ASSOC); 



if ($res)
{
	$_SESSION['error_message'] = 'Такой E-Mail уже существует. Попробуйте другой.';
	header("Location: http://markup/register_form.php");

}
else {

	if ($_POST['password'] == $_POST['password_confirmation'])
	{

			$sql = 'INSERT INTO `markup` ( `user_name`, `user_email`, `user_password`) VALUES (:name, :email, :password)';

			$statment = $pdo -> prepare($sql);

			$statment -> execute($mass);

			$select = $pdo -> query("SELECT * FROM markup WHERE user_email = '".$_POST['email']."'");
            $_SESSION['result']=$select -> fetch(PDO::FETCH_ASSOC);

			header("Location: http://markup/profile_form.php");
	}
	else {
		$_SESSION['error_message2'] = 'Oshibka';


	}
}


?>

