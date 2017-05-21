

<html>
<head>
	<title>Administrator</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/mojstil.css">
</head>
<body>
<div class="container">
	<div class="col-md-12">
		<div class="row">
			<div id="regLog"><h1>Administator - vicomanija</div>
				<form id="registacijakorisnika" method="POST" action="insertVicevi.php">
					  <div class="form-group">
					    <label for="email">Unesite Vas E-mail:</label>
					    <input type="name" class="form-control" placeholder="Vas Email..." id="email" name="email1">
					  </div>
					  <div class="form-group">
					    <label for="sifra">Unesite sifru:</label>
					    <input type="password" placeholder="Unesite Vasu sifru..." class="form-control" id="pass1" name="sifra1">
					  </div>
					  <button type="submit" class="btn btn-default" id="log" name="login">Login</button>
					  <button type="submit" class="btn btn-default" id="log" formaction="../index.php">Registracija</button>
				</form>
			</div>
		</div>
	</div>

<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>