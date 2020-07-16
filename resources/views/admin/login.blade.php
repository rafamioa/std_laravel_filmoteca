<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="estilo.css">

</head>


<body class="bg-dark">
	<div class="col-md-4 offset-md-4">

		<form action="{{ route('logar') }}" method="POST" >
			@csrf
			<h1 class="text-center my-5 laranja">FILMOTECA</h1>

			<div class="form-group">
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fa fa-envelope-o px-2"></i>
						</div>
					</div>
					<input type="email" name="email" class="form-control" placeholder="Email">
				</div>
			</div>


			<div class="form-group">
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fa fa-unlock-alt px-2"></i>
						</div>
					</div>
					<input type="password" name="password" class="form-control" placeholder="Senha">
				</div>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-danger w-100 text-white border-warning font-weight-bold">Login</button>
			</div>
		</form>
	</div>
</body>


</html>