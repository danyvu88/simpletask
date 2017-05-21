<?php
####### db config ##########
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbbase = "users";
####### db config end ##########

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbbase);

$username = mysqli_real_escape_string ($conn, $_POST['ime1']);
$lastname = mysqli_real_escape_string ($conn, $_POST['prezime1']);
$email = mysqli_real_escape_string ($conn, $_POST['email1']);
$password = mysqli_real_escape_string ($conn, $_POST['sifra1']);
$repassword = mysqli_real_escape_string ($conn, $_POST['sifra2']);

//$epassword = md5($password); //sigurnosni protokol MD5 - NE RADI IZ NEPOZNATIH RAZLOGA

if(!$conn){
	echo "Nazalost niste se povezali na bazu podataka" . mysql_errno();
}else{

	if(!empty($_POST['ime1']) OR !empty($_POST['prezime1']) OR !empty($_POST['email1'])) { 

		$query = mysqli_query($conn, " SELECT * FROM registrationusers WHERE Ime = '$_POST[ime1]' AND Prezime = '$_POST[prezime1]' AND Email = '$_POST[email1]' ") or die(mysql_error()); 

		//UKOLIKO KORISNIK NE POSTOJI U BAZI, DOZVOLI REGISTRACIJU
		if(!$row = mysqli_fetch_array($query)){ 

				mysqli_query($conn, "INSERT INTO registrationusers (Ime,Prezime,Email,Sifra1,Sifra2)
				VALUES ('$username','$lastname','$email','$password','$repassword') ");


					echo '<script type="text/javascript">

						var potvrdi = confirm("Uspesna registracija! Sada se mozete ulogovati i postaviti Vas vic :)");
						if(potvrdi == true){
							window.location.assign("../index.php");
						}else{
							window.location.assign("../index.php");
						}
						</script>'; 

				 }else{
						
					echo '<script type="text/javascript">

						var potvrdi = confirm("Registracija nije uspesna! Korisnik vec postoji, proverite svoje podatke koje ste uneli!");
						if(potvrdi == true){
							window.location.assign("../index.php");
						}else{
							window.location.assign("../index.php");
						}
						</script>'; 
			 	}
			 }
		};

?>

