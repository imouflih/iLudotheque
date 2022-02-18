<?php
session_start();
if(!$con = mysqli_connect("localhost","root","","iludothèque"))
    {

	    die("N'a pas réussi à se connecter!");
    }
if(isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $age = $_POST['age'];
    $description = $_POST['description'];
    $nombre = $_POST['nombre'];
    $type = $_POST['type'];
    $req = "INSERT INTO listejeux (nom, age, type, description) VALUES ('".$nom."', ".$age.", '".$type."', '".$description."')";
    $con->query($req);
    $id = "SELECT id_game FROM listejeux WHERE nom ='".$nom."'";
    $result = mysqli_query($con, $id);
    $ligne = mysqli_fetch_array($result);
    $req = "INSERT INTO stock VALUES (".$ligne['id_game'].", ".$nombre.", ".$nombre.")";
    $con->query($req);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de compte</title>
    <link rel="stylesheet" href="../css.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;0,700;1,400&display=swap" rel="stylesheet"> 
    <script src="../js.js"></script>
</head>
<body class="bdy">
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
    <div class="container">
        <form method="post">
        <div class="row">
            <div class="col-10">
                <label for="age">Nom du jeu: </label>
            </div>
            <div class="col-90">
                <input type="text" id="nom" name="nom" placeholder="Entrer le nom du jeu">
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <label for="age">Age:</label>
            </div>
            <div class="col-90">
                <input type="number" id="age" name="age" placeholder="Entrer l'age">
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <label for="type">Catégorie:</label>
            </div>
            <div class="col-90">
                <select name="type">
                    <option>Jeu de société</option>
                    <option>Jeu de carte</option>
                    <option>Jeu de role</option>
                    <option>Jeu de classic</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <label for="description">Description : </label>
            </div>
            <div class="col-90">
                <input type="text" id="description" name="description" placeholder="Entrer la description du jeu">
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <label for="image">Image du jeu:</label>
            </div>
            <div class="col-90">
                <input type="file" id ="image" name="image" accept=".jpg, .jpeg, .png">
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <label for="nombre">Nombre:</label>
            </div>
            <div class="col-90">
                <input type="number" id="nombre" name="nombre" placeholder="Entrer nombre de pièces">
            </div>
        </div>
        <div>
            <input type="submit" name="submit" value="Ajouter un jeu">
        </div>
        </form>
    </div> 
</body>
</html>