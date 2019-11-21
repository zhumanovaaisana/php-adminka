<?php
$pdo = new PDO('mysql:host=localhost;port=3360;dbname=ais','root','');

$param = $_GET['id'];

$sql = $pdo -> query('SELECT * FROM users WHERE `id`=' . $param);

$user = $sql -> fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style >
		body{
			background-image: url(/kvadratiki.jpg);
			padding-top: 12px;
			opacity: 0.9;
		}
		table {
			background-color: #34ADEE;
		}


	</style>
</head>
<body >
		<div class="container"  >
		<h1>Изменение данных о пользователе</h1>
		<div class="row">
			<div class="col-md-6">
				<form method="post" action="up.php">
					<div class="form-group">
						<input type="hidden" name="id" class="form-control"  value=" <?php echo $user['id']; ?>" >
					</div>
					<div class="form-group">
						<input type="text" name="name" class="form-control" value=" <?php echo $user['name']; ?>" >
					</div>
					<div class="form-group">
						<input type="text" name="email" class="form-control" value="<?php echo $user['email'];  ?>">
					</div>
					<div class="form-group">
						<input type="text" name="date" class="form-control" value="<?php echo $user['date'];  ?>">
					</div>
					<div class="form-group">
						<input type="text" name="status" class="form-control" value="<?php echo $user['status']  ?>">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>

