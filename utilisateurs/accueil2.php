<?php
session_start();

if($_SESSION['email']=='sobi@gmail.com'){
    header("location:../admin/accueil3.php");
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iLudothèque</title>
    <link rel="stylesheet" href="../css.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;0,700;1,400&display=swap" rel="stylesheet"> 
</head>
<body>
    <header>
        <a href="accueil2.php" class="logo"><span>i</span>Ludothèque</a>
        <ul class="barre">
            <li><a href="accueil2.php">Accueil</a></li>
            <li><a href="decouvrir2.php">Découvrir</a></li>
            <li><a href="contact2.php">Contacter nous</a></li>
            <li><a href="logout2.php">Se déconnecter</a></li>
            <a href="historique2.php" class="panier">Mes réservations</a>
        </ul>
    </header>
    <section class="banniere" id="banniere">
        <div class="contenu">
            <h2>Bonjour <?php echo $_SESSION['nom'];?></h2>
            <h2>iLudothèque</h2>
            <p style="color:#FFF">Votre planet des jeux</p>
            <a href="decouvrir2.php" class="btn1">Nos jeux</a>
            <a href="historique2.php" class="btn2">Reservation</a>
        </div>
    </section>
</body>
</html>