var registracija = document.getElementById("reg");
var login = document.getElementById("log");
var imekorisnika = document.getElementById("ime");
var prezimekorisnika = document.getElementById("prezime");
var emailkorisnika = document.getElementById("email");
var sifrakorisnika1 = document.getElementById("pass1");
var sifrakorisnika2 = document.getElementById("pass2");


//PROVERA VALIDACIJE KOD REGISTRACIJE KORISNIKA
function registracijaKorisnika(){
	if(imekorisnika.value.length == 0 || prezimekorisnika.value.length == 0 || emailkorisnika.value.length == 0 || sifrakorisnika1.value.length == 0 || sifrakorisnika2.value.length == 0){

		imekorisnika.style.outline = "1px solid red";
		prezimekorisnika.style.outline = "1px solid red";
		emailkorisnika.style.outline = "1px solid red";
		sifrakorisnika1.style.outline = "1px solid red";
		sifrakorisnika2.style.outline = "1px solid red";
		return false;
	}if(sifrakorisnika1.value != sifrakorisnika2.value){
			alert("Niste uneli iste sifre");
			sifrakorisnika1.focus();
			return false;
	}else{
		imekorisnika.style.outline = "none";
		prezimekorisnika.style.outline = "none";
		emailkorisnika.style.outline = "none";
		sifrakorisnika1.style.outline = "none";
		sifrakorisnika2.style.outline = "none";


	}

};
//PROVERA VALIDACIJE KOD LOGOVANJA KORISNIKA
function loginKorisnika(){
	if(emailkorisnika.value.length == 0 || sifrakorisnika1.value.length == 0 ){

		emailkorisnika.style.outline = "1px solid red";
		sifrakorisnika1.style.outline = "1px solid red";
		return false;
	}if(sifrakorisnika1.value != TRUE){
			alert("Niste uneli dobru sifru");
			sifrakorisnika1.focus();
			return false;
	}else{
		emailkorisnika.style.outline = "none";
		sifrakorisnika1.style.outline = "none";
	}

};

//MODAL SETTINGS

var modal = document.getElementById('myModal');
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
