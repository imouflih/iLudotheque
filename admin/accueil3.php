<?php
session_start();
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
        <a href="accueil3.php" class="logo"><span>i</span>Ludothèque</a>
        <ul class="barre">
            <li><a href="decouvrir3.php">Liste des jeux</a></li>
            <li><a href="historique3.php">Historique</a></li>
            <li><a href="contact3.php">Messages</a></li>
            <li><a href="logout3.php">Se déconnecter</a></li>
            <a href="nvjeu3.php" class="panier">Nouveau jeu</a>
        </ul>
    </header>
    <section class="banniere" id="banniere">
        <div class="contenu">
            <h2>Bonjour <?php echo $_SESSION['nom'];?></h2>
            <h2>iLudothèque</h2>
            <p style="color:#FFF">Votre planet des jeux</p>
            <a href="historique3.php" class="btn1">Historique</a>
            <a href="nvjeu3.php" class="btn2">Ajouter un jeu?</a>
        </div>
    </section>
</body>
</html>