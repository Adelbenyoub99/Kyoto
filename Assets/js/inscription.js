var mdp = document.getElementById("mdp");
var mdpspan = document.getElementById("mdpspan");




const input_fields = document.querySelectorAll('input');

for (let i = 0; i < input_fields.length; i++) {

  let field = input_fields[i];

  field.addEventListener('input', function(e){

	if(e.target.value != ""){
	  e.target.parentNode.classList.add('animation');
	} else if (e.target.value == "") {
	  e.target.parentNode.classList.remove('animation');
	}

  })

}

mdp.addEventListener("input", function () {
	/* body... */
	if (mdp.value.length<4) {
		mdpspan.textContent = " Faible";
		mdpspan.style.color = "red";
		mdp.style.color= "red"; 
	} else if(mdp.value>=4 && mdp.value.length<8){
		mdpspan.textContent = " Moyen";
		mdpspan.style.color = "Orange";
		mdp.style.color= "Orange"; 
	} else {
		mdpspan.textContent = " Fort";
		mdpspan.style.color = "green";
		mdp.style.color= "green"; 
	}

});

// Validation de l'email
var mail = document.getElementById("maili");
var mailspan = document.getElementById("mailspan");

mail.addEventListener("input", function () {
	/* body... */


	if (mail.value.indexOf("@")!=-1) {
		mailspan.textContent=" E-mail valide";
		mailspan.style.color = 'green';
	} else {
		mailspan.textContent=" E-mail non valide";
		mailspan.style.color = 'red';
	}
});
var nominput = document.getElementById("nomi");
var nomspan = document.getElementById("validnom");


// programmer le focus 
nominput.addEventListener("focus", function () {
	/* body... */
	nomspan.textContent = "Veuillez saisir le nom. " ;
	nomspan.style.color = 'blue';

});
// programmer l'evenement perte de focus 

nominput.addEventListener("blur" , function () {
	/* body... */
	if (nominput.value=="") {
		nomspan.textContent=" Nom obligatoire. ";
		nomspan.style.color = 'red';
	} else {
		nominput.value =nominput.value.toUpperCase();
		nomspan.textContent=" Nom validé";
		nomspan.style.color = 'green';
	}

});

var prenominput = document.getElementById("prenomi");
var prenomspan = document.getElementById("validprenom");


// programmer le focus 
prenominput.addEventListener("focus", function () {
	/* body... */
	prenomspan.textContent = " Veuillez saisir le prénom. " ;
	prenomspan.style.color = 'blue';

});
// programmer l'evenement perte de focus 

prenominput.addEventListener("blur" , function () {
	/* body... */
	if (prenominput.value=="") {
		prenomspan.textContent=" Prénom obligatoire. ";
		prenomspan.style.color = 'red';
	} else {
		prenominput.value = prenominput.value.substring(0,1).toUpperCase() + prenominput.value.substring(1).toLowerCase();
		prenomspan.textContent=" Prénom validé";
		prenomspan.style.color = 'green';
	}

});








