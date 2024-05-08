<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Page inscription">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Contact</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="Assets/css/contact.css">
    <link href="Assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merienda+One&family=Nunito+Sans&display=swap" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
    <ul class="liste-nav">
        <li class="item-nav">
            <a href="index.php #home">Accueil</a>
        </li>
        <li class="item-nav">
            <a href="index.php #asym">Que Faire ?</a>
        </li>
        <li class="item-nav">
            <a href="A propos.php">A propos</a>
        </li>
        <li class="item-nav">
            <a href="contact.php">Contact</a>
        </li>
        <li class="item-nav"><a href="inscription.php" class="btn-accueil">S'inscrire</a></li>
        <li class="item-nav"><a href="login.php" class="btn-accueil">Se connecter</a></li>
    </ul>
    </nav>

    <!-- Form Container -->
    <div class="form-container">
        <h2 id="titre">Nous contacter</h2>
        <form id="registration-form">
            <div class="form-group">
                <label for="username">Nom d'utilisateur :</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="email">Adresse e-mail :</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="message">Message :</label>
                <input type="message" id="message" name="message">
            </div>
            <div class="form-group1">
            <button type="submit" class="btn-formulaire" id="btn1">Envoyer</button>
            </div>

        </form>
    </div>

    <footer>
        Tous Droits Réservés
    </footer>

   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="Assets/js/bootstrap.min.js"></script>
  <script src="Assets/js/inscri.js"></script>
</body>
</html>