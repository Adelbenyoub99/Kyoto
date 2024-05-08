<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Application web pour une chaine de restaurant">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Paiement</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="Assets/css/cartedecredit.css">
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

    <div class="container">

        <div class="contMontant">
            <p>1 <strong>Mug blanc</strong> : 5€</p>
        </div>

        <form>

            <div class="inpFull">
                <label for="nom">Titulaire</label>
                <input type="text" id="nom" name="titulaire" required maxlength="30" placeholder="Entrez le titulaire de la carte">
            </div>

            <div class="inpFull">
                <label for="num">Numéros</label>
                <input type="text" id="num" name="numeros" required placeholder="8888-8888-8888-8888" pattern="[0-9\s]+">
            </div>

            <div class="contExSecu">

                <div class="inpExp">

                    <label for="expiration">Expiration</label>
                    <select name="moisexp" id="expiration" class="select1">
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        <option value="4">04</option>
                        <option value="5">05</option>
                        <option value="6">06</option>
                        <option value="7">07</option>
                        <option value="8">08</option>
                        <option value="9">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                    <span>/</span>
                    <select name="anexp" class="select2">
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                    </select>
                </div>


                <div class="inpSecu">
                    <label for="crypto">Cryptogramme</label>
                    <input type="text" name="crypto" id="crypto" required maxlength="3" placeholder="XXX" pattern="[0-9]{3}">
                </div>

            </div>

            
            <div class="contBtn">
                <button>Confirmer et payer</button>
            </div>
        </form>

    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="Assets/js/bootstrap.min.js"></script>
  <script src="Assets/js/catredecredit.js"></script>
</body>
</html>