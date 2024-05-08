<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Application web pour une chaine de restaurant">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mon site</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="style.css">
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
    
    <!-- Navigation -->

    <?php 
    include("pagenav.php")
    ?>


    <!-- Accueil -->

    <div class="accueil" id="home">
        <img src="ressources/logo-porte-japon.jpg" alt="logo porte japon" class="logo-kyoto">
        <h1>Découvrez Kyoto</h1>
        <a href="#asym" class="btn-accueil">En savoir plus</a>
    </div>

    <!-- Section Asymétrique -->

    <section class="section-asymetrique" id="asym">

        <h2>Que faire à Kyoto ?</h2>

        <div class="bloc bloc-left bloc-1">
            <div class="bloc-txt-left">
                <h3>Visitez des temples</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis ullam autem voluptatibus quia maiores voluptatem nesciunt inventore neque exercitationem, iste repellendus! Earum dicta animi alias nostrum officiis illo quibusdam illum sed sequi error. Optio, quidem placeat. Beatae aut cum aliquam quidem? Soluta quo temporibus aut repudiandae nulla pariatur facilis neque.</p>
                <button class="btn-bloc-left">En savoir plus</button>
            </div>
       
            <img src="ressources/kyoto-temple.jpg" alt="couloir d'un temple de kyoto" class="img-grid img-grid-1">
        </div>


        <div class="bloc bloc-right bloc-2">
            <div class="bloc-txt-2">
                <h3>Visitez des châteaux</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis ullam autem voluptatibus quia maiores voluptatem nesciunt inventore neque exercitationem, iste repellendus! Earum dicta animi alias nostrum officiis illo quibusdam illum sed sequi error. Optio, quidem placeat. Beatae aut cum aliquam quidem? Soluta quo temporibus aut repudiandae nulla pariatur facilis neque.</p>
                <button >En savoir plus</button>
            </div>
        
        <img src="ressources/chateau-kyoto.jpg" alt="château de kyoto" class="img-grid img-grid-2">
        </div>





        <div class="bloc bloc-left bloc-3">
            <div class="bloc-txt-left">
                <h3>Découvrez les cultures</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis ullam autem voluptatibus quia maiores voluptatem nesciunt inventore neque exercitationem, iste repellendus! Earum dicta animi alias nostrum officiis illo quibusdam illum sed sequi error. Optio, quidem placeat. Beatae aut cum aliquam quidem? Soluta quo temporibus aut repudiandae nulla pariatur facilis neque.</p>
                <button class="btn-bloc-left">En savoir plus</button>
            </div>
        
        <img src="ressources/geisha.jpg" alt="geisha" class="img-grid img-grid-3">
       </div>
        <div class="ligne-gauche"></div>
        <div class="ligne-droite"></div>
    </section>


    <!-- Section parallax -->

    <section class="parallax">
        <p>冒険に行く</p>
        <span>Partez à l'aventure</span>
    </section>




    <!-- Section tarifs -->

    <section class="section-tarifs" id="tarifs">
        <h3>Laissez-vous guider...</h3>
        <hr>
    <div class="container-tarifs">

        <div class="cartes-tarifs">
            <h4>Classique</h4>
            <span>100€</span>
            <p>✔️ Visite des châteaux</p>
            <p>✔️ Visite de la ville</p>
            <p>✔️ Spectacle folklorique</p>
            <p>❌ Restaurant typique d'exception</p>
            <p>❌ Visite culturelle sur plusieurs jours</p>
            <p>❌ Accès privé à des lieux grandioses</p>
   
            <a href="reservation.php">Réservez un guide</a>
   
        </div>

        <div class="cartes-tarifs">
            <h4>Découverte</h4>
            <span>250€</span>
            <p>✔️ Visite des châteaux</p>
            <p>✔️ Visite de la ville</p>
            <p>✔️ Spectacle folklorique</p>
            <p>✔️ Restaurant typique d'exception</p>
            <p>❌ Visite culturelle sur plusieurs jours</p>
            <p>❌ Accès privé à des lieux grandioses</p>

            <a href="reservation.php">Réservez un guide</a>

        </div>


        <div class="cartes-tarifs">
            <h4>Exception</h4>
            <span>500€</span>
            <p>✔️ Visite des châteaux</p>
            <p>✔️ Visite de la ville</p>
            <p>✔️ Spectacle folklorique</p>
            <p>✔️ Restaurant typique d'exception</p>
            <p>✔️ Visite culturelle sur plusieurs jours</p>
            <p>✔️ Accès privé à des lieux grandioses</p>

            <a href="reservation.php">Réservez un guide</a>
     
        </div>



    </div>
    </section> 

    <?php 
    include("pagefooter.php");
    ?>
   
   
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="Assets/js/bootstrap.min.js"></script>
  <script src="app.js"></script>


</body>
</html>