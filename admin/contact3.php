<?php
session_start();
if(!$con = mysqli_connect("localhost","root","","iludothèque"))
    {

	    die("N'a pas réussi à se connecter!");
    }
$req = "SELECT * FROM contact";
$resultat = $con -> query($req);
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
    <p><br/><br/><br/></p>
    <section class="banniere" id="banniere">
        <div class="contenu">
        <?php
        echo "<table><tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Sujet</th>
            </tr>
            <tbody>";
        while ($ligne = $resultat -> fetch_assoc()) {
            echo "<tr>
                <td>".$ligne['prénom']."</td>
                <td>".$ligne['nom']."</td>
                <td>".$ligne['email']."</td>
                <td>".$ligne['sujet']."</td>
                </tr>";
        }
        echo "</tbody></table>
        <style>
        table{
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            background: #FFF;
        }
        th{
            border: 1px solid black;
            background:  rgb(163, 163, 163);
        }
        </style>";
        ?>
        </div>
    </section>
</body>
</html>