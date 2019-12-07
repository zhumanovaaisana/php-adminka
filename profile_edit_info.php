<?php
session_start();


$img =$_FILES['image']['tmp_name'];


$pdo = new PDO('mysql:host=localhost;port=3360;dbname=ais','root','');

$sql = "UPDATE  `markup`  SET  `user_name`=:name, `user_email`=:email, `avatar_src`='".$img."'  WHERE `user_id`=:id"; 



$statment = $pdo -> prepare($sql);

$statment -> execute($_POST);

$sel = $pdo -> query("SELECT * FROM markup WHERE user_email = '".$_POST['email']."'");
$res = $sel -> fetch(PDO::FETCH_ASSOC); 



if ($res)
{
	$_SESSION['error_message'] = 'Такой E-Mail уже существует. Попробуйте другой.';
	var_dump($_POST);
	header("Location: http://markup/profile_form.php");

}
else {

	if ($statment == false)
	{
		echo "PROIZOSHLA OSHIBKA V $sql";
		exit();
	}
	else {
		$msg = "Личные данные изменены успешно!";

		$_SESSION ['message'] = $msg;

		header("Location: http://markup/profile_form.php");
	}

}

?>