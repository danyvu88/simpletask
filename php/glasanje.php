<html>
<head>
	<title>Glasanje - vicomanija</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/mojstil.css">
</head>
<body>
<div class="container">
	<div class="col-md-12">
		<div class="row">
			<div id="regLog"><h1>Glasanje - vicomanija</div>
			<form method="POST" action="glasanje.php">
			<?php


				if(isset($_POST['btnglasanje'])){


				####### db config ##########
				$dbhost = "localhost";
				$dbuser = "root";
				$dbpass = "";
				$dbbase = "users";
				####### db config end ##########

				$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbbase);

				//$Id =  $_POST['idkorisnika1'];

				//$Idkorisnika = $_POST['id'];

				$korisnici = mysqli_query($conn, " SELECT Ime, Prezime, id FROM registrationusers ");

				
				while ($prikazkorisnika = mysqli_fetch_array($korisnici)){
					echo  "Ime i Prezime: " . "<td>" ."<strong>". $prikazkorisnika['Ime']. " " . $prikazkorisnika['Prezime'] ."  "."</strong>". " <input type='radio' name='1poen' value='1' class='click-tracking' id='1' onclick='jedan(this);'>". " <input type='radio' name='2poen' value='2' class='click-tracking' id='2' onclick='dva(this);'> " ." <input type='radio' name='3poen' value='3' class='click-tracking' id='3' onclick='tri(this);'> ".  "</td>" . "<br>"."<hr>";
				}

				  
				 	//if($prikazkorisnika['id'] === $Id )


				 echo '<script type="text/javascript"> 

				 	var jedanbod = document.getElementById("1");
				 	var kliktanje = document.getElementsByClassName("click-tracking");
				 	var kliktanje = 0;

				 	kliktanje.addEventListener("click", pracenjekliktanja);

				 	function pracenjekliktanja(){
				 		kliktanje += 1;
				 		alert("kliknuli ste" + kliktanje + " puta");

				 	}

				 	function jedan(obj){
				 		alert("Dali ste 1 bod");
				 		obj.style.color = "red";
				 		obj.disabled = true;

				 	}
				 	function dva(obj2){
				 		alert("Dali ste 2 boda");
				 		obj2.style.color = "blue";
				 		obj2.disabled = true;
				 	}
				 	function tri(obj3){
				 		alert("Dali ste 3 boda");
				 		obj3.style.color = "brown";
				 		obj3.disabled = true;
				 	}

				  </script>'; 
				
				};
			?>
		
			</form>
		</div>
	</div>
</div>


<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>