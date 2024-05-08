document.getElementById("inscription-form").addEventListener("submit", function (e) {
    e.preventDefault();
    
    // Récupérer les valeurs du formulaire
    var nom = document.getElementById("nom").value;
    var email = document.getElementById("email").value;
    var motDePasse = document.getElementById("mot-de-passe").value;
    
    // Vous pouvez ajouter ici votre logique de traitement des données
    
    // Exemple : Affichage des valeurs dans la console
    console.log("Nom: " + nom);
    console.log("Email: " + email);
    console.log("Mot de passe: " + motDePasse);
    
    // Rediriger l'utilisateur vers une page de confirmation, par exemple
    // window.location.href = "confirmation.html";
});