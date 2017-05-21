<html>
<head>
	<title>SimpleTask - zadatak</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mojstil.css">
</head>
<body>
<div class="container">
	<div class="col-md-12">
		<div class="row">
			<div id="regLog"><h1>Simple task - vicomanija</div>
				<form id="registacijakorisnika" method="POST" action="php/register.php">
					  <div class="form-group">
					    <label for="ime">Unesite Vase ime:</label>
					    <input type="name" class="form-control" placeholder="Vase ime..." id="ime" name="ime1">
					  </div>
					  <div class="form-group">
					    <label for="prezime">Unesite Vase prezime:</label>
					    <input type="name" class="form-control" placeholder="Vase prezime..." id="prezime" name="prezime1">
					  </div>
					  <div class="form-group">
					    <label for="email">Unesite Vas E-mail:</label>
					    <input type="email" class="form-control" placeholder="Vas Email..." id="email" name="email1">
					  </div>
					  <div class="form-group">
					    <label for="sifra">Unesite sifru:</label>
					    <input type="password" placeholder="Unesite Vasu sifru..." class="form-control" id="pass1" name="sifra1">
					  </div>
					  <div class="form-group">
					    <label for="ponovisifru">Ponovi sifru:</label>
					    <input type="password" placeholder="Ponovite Vasu sifru..." class="form-control" id="pass2" name="sifra2">
					  </div>
					  <button type="submit" class="btn btn-default" id="reg" onclick="return registracijaKorisnika();" >Registracija</button>
					  <button type="submit" class="btn btn-default" id="log" formaction="php/login.php">Login</button>
				</form>
			</div>
		</div>
	</div>

<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>