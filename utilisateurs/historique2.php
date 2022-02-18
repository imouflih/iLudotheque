<?php
session_start();
$con = mysqli_connect("localhost","root","","iludothèque");
$id = $_SESSION['id'];
$req = "SELECT * FROM booking WHERE id_u=".$id."";
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
        <a href="accueil2.php" class="logo"><span>i</span>Ludothèque</a>
        <ul class="barre">
            <li><a href="accueil2.php">Accueil</a></li>
            <li><a href="decouvrir2.php">Découvrir</a></li>
            <li><a href="contact2.php">Contacter nous</a></li>
            <li><a href="logout2.php">Se déconnecter</a></li>
            <a href="historique2.php" class="panier">Mes réservations</a>
        </ul>
    </header>
    <p><br/><br/><br/></p>
    <section class="banniere" id="banniere">
        <div class="contenu">
        <?php
        echo "<table><tr>
            <th>ID d'adhérent</th>
            <th>ID du game</th>
            <th>Date de réservation</th>
            <th>Date de return</th>
            </tr>
            <tbody>";
        while ($ligne = $resultat -> fetch_assoc()) {
            echo "<tr>
                <td>".$ligne['id_u']."</td>
                <td>".$ligne['id_g']."</td>
                <td>".$ligne['date']."</td>
                <td>".$ligne['returndate']."</td>
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