<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create</title>
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
		<h1>Добавление пользователя</h1>
		<div class="row">
			<div class="col-md-6">
				<form method="post" action="store.php">
					<div class="form-group">
						<input type="text" name="name" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" name="email" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" name="date" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" name="status" class="form-control">
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
