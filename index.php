<?php
///soed s bd  +
///select * from users
///prisvoit dannye massivu

//PHP DATA OBJECT  soed bd
//PDO

$pdo = new PDO('mysql:host=localhost;port=3360;dbname=ais','root','');
    
$result = $pdo -> query('SELECT * FROM users');
$users = $result -> fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
<?php
$mass = [
	[
		'id'=> '1',
		'name' =>'Deni Targariyen',
		'email' => 'deni@got.com',
		'date' => '14/10/2019',
		'status' =>'1'
	],
	[
		'id'=> '2',
		'name' =>'Johny Snow',
		'email' => 'johny@got.com',
		'date' => '10/09/2019',
		'status' =>'1'
	],
    [
		'id'=> '3',
		'name' =>'Ti Lanister',
		'email' => 'ti@got.com',
		'date' => '14/08/2019',
		'status' =>'1'
	],
	[
		'id'=> '4',
		'name' =>'Ari Stark',
		'email' => 'ari@got.com',
		'date' => '09/09/2019',
		'status' =>'1'
	]];

?>
	<div class="container"  >
		<a href="create.php" class="btn btn-success">Добавить пользователя</a>
		<a href="authorization.php" class="btn btn-success">Авторизироваться</a>
		<div class="row">
			<div class="col-md-12">
				<table class="table" >
					<thead>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Date</th>
						<th>Status</th>
						<th>Action</th>
					</thead>
<?php
foreach ($users as  $chel)
{ 
	if ($chel['status']==1)
	{

?>
					<tbody>
						<tr>
							<td><?php echo $chel['id'] ?></td>	
							<td><?php echo $chel['name'] ?></td>
							<td><?php echo $chel['email'] ?></td>
							<td><?php echo $chel['date'] ?></td>
							<td><?php echo $chel['status']?></td>
							<td><a href="update.php?id=<?php echo $chel['id'] ?>" class="btn btn-warning">Изменить</a>
								<a href="delete.php?id=
								<?php echo $chel['id'] ?>"
								class="btn btn-danger">Удалить</a></td>
						</tr>
					</tbody>
				<?php    } }    ?>
				</table>
			</div>
		</div>
	</div>

</body>
</html>

