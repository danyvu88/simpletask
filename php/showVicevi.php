<?php

	####### db config ##########
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbbase = "users";
	####### db config end ##########

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbbase);

	$joke = $_POST['vic'];
	$Id =  $_POST['id'];

	if(isset($_POST['sacuvajVic'])){


	$saveVic = mysqli_query($conn, " UPDATE registrationusers SET Vicevi = '$joke' WHERE Id = '$Id' ") or die ("Ne mozemo napraviti upit" . mysql_error());

	$resultVic = mysqli_query($conn, " SELECT Ime, Prezime, Vicevi FROM registrationusers ") or die ("Ne mozemo napraviti upit" . mysql_error());

	//MODAL settings 
	$resultVicModal = mysqli_query($conn, " SELECT * FROM registrationusers  WHERE Id = '$Id' ");

	$modalshow = mysqli_fetch_array($resultVicModal);


		//PRIKAZ IME, PREZIME, VIC od korisnika koji je ulogovan i koji je postavio VIC
		echo "<html>
			  <head>
			  	<link rel='stylesheet' type='text/css' href='../css/bootstrap.min.css'>
			  	<link rel='stylesheet' type='text/css' href='../css/mojstil.css'>
			  </head>
			  <body>
			  	<div class='container'>
			  		<div id='showVicevi'><h1>Vicevi registrovanih korisnika<a href='#'><span class='glasanje' id='myBtn' name='glasanje'>Moj nalog</span></a>
			  			<a href='../index.php'><span class='glasanje'>Pocetna</span></a>
			  		</div>
			  			<form method='POST' action='glasanje.php'>
			  				<button name='btnglasanje'>Glasanje</button>
			  				<input type='text' name='idkorisnika1' value='". $modalshow['id']. "' style='display: none;'>
			  			</form>
			  		<!-- The Modal -->
					<div id='myModal' class='modal'>
					  <!-- Modal content -->
					  <div class='modal-content'>
					    <div class='modal-header'>
					      <span class='close'>&times;</span>
					      <p>Glasate sa svojim korisnickim nalogom, mozete dati 1 bod, 2 boda ili 3 boda, glasanje je ograniceno samo jednom za jedan korisnicki racun</p>
					    </div>
					    <div class='modal-body'><h3>Vasi korisnicki podaci: </h3>
					    Ime i Prezime: <strong>" .$modalshow['Ime'].' '.$modalshow['Prezime']."</strong>
					    <br>
					    E-mail: <strong>".$modalshow['Email']."	</strong>
					    <br>
					    <hr>
					    Vic koji ste postavili: <br><strong> ".$modalshow['Vicevi']."  </strong>

					    </div>
					    <div class='modal-footer'>
					      <h3>Vas korisnicki nalog!</h3>
					    </div>
					  </div>

					</div>
			  	</div>
			  	<div class='container'>
					  <table border='1' cellpadding='10' class='table table-bordered'>
					  <tr class='info'>
					  <th>Ime</th>
					  <th>Prezime</th>
					  <th>Vicevi</th>
					  </tr>
				</div>
				<script type='text/javascript' src='../js/script.js'></script>
				<script type='text/javascript' src='../js/jquery-3.2.1.min.js'></script>
				<script type='text/javascript' src='../js/bootstrap.min.js'></script>
			  </body>
			  </html>";

	while ($numrows = mysqli_fetch_array($resultVic)) {
		echo "<tr>";
		echo "<td>" . $numrows['Ime'] . "</td>";
		echo "<td>" . $numrows['Prezime'] . "</td>";
		echo "<td>" . $numrows['Vicevi'] . "</td>";
		echo "</tr>";
	}
		echo "</table>";


	};

?>


