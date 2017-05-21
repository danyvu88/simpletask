<?php

	if(isset($_POST['login'])){

	####### db config ##########
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbbase = "users";
	####### db config end ##########

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbbase);

	$email = mysqli_real_escape_string ($conn, $_POST['email1']);
	$password =  mysqli_real_escape_string ($conn, $_POST['sifra1']);
	//$userId = mysqli_real_escape_string($conn, $_POST['Id']);

	$result = mysqli_query($conn, "SELECT * FROM registrationusers WHERE Email = '$email' AND Sifra1 = '$password' ") or die("Ne mozemo napraviti upit" . mysql_error());

	$row = mysqli_fetch_array($result);

	if($row['Email'] == $email && $row['Sifra1'] == $password ){
			echo "Uspesna prijava, dobrodosli: " .$row['id']." ". $row['Ime'] ." ". $row['Prezime'] ;
			echo "<hr>";
			echo "
				<html>
				<head>
					<title>Unos viceva</title>
					<link rel='stylesheet' type='text/css' href='../css/bootstrap.min.css'>
					<link rel='stylesheet' type='text/css' href='../css/mojstil.css'>
				</head>
				<body>
				<div class='container'>
					<div class='col-md-12'>
						<div class='row'>
							<div id='regLog'><h1>Dobrodosli, mozete uneti svoj vic</h1></div>
								<form id='registacijakorisnika' method='POST' action='showVicevi.php'>
									  <div class='form-group'>
									    <label for='email' >Unesite Vas vic:</label>
									    <textarea rows='5' cols='33' name= 'vic'></textarea>
									    <input type='text' name='id' value='". $row['id']. "' style='display: none;'>
									  </div>
									  <button type='submit' class='btn btn-default' id='log' name='sacuvajVic'>SACUVAJ</button>
								</form>
							</div>
						</div>
					</div>


				<script type='text/javascript' src='../js/script.js'></script>
				<script type='text/javascript' src='../js/jquery-3.2.1.min.js'></script>
				<script type='text/javascript' src='../js/bootstrap.min.js'></script>
				</body>
				</html>
			";
	}else{
		echo "Nazalost niste se uspeli ulogovati!";
		echo "<hr>";
		echo "<a href='login.php'><h3>Vrati me na Login</h3></a>";
	}

};
?>


