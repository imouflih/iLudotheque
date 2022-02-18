<?php
        session_start();
		$con = mysqli_connect("localhost","root","","iludothèque");
		$req = "SELECT * FROM listejeux";
        if(isset($_GET['search']) || isset($_GET['age']) || isset($_GET['catégorie'])){
            $recherche = htmlspecialchars($_GET['search']);
            $age = htmlspecialchars($_GET['age']);
            $categorie = htmlspecialchars($_GET['catégorie']);
            $req = 'SELECT * FROM listejeux WHERE nom LIKE "%'.$recherche.'%" AND age <= '.$age.' AND type LIKE "%'.$categorie.'%";';
        }
		$resultat = $con -> query($req);
        $nbresultats = mysqli_num_rows($resultat);
        $pgresultats = 10;
        $pgnombre = ceil($nbresultats/$pgresultats);
        if (!isset($_GET['page'])) {
            $page = 1;
        } else {
            $page = $_GET['page'];
        }
        $nbsql = ($page-1)*$pgresultats;
        $sql='SELECT * FROM listejeux LIMIT ' . $nbsql . ',' .  $pgresultats;
        if(isset($_GET['search']) || isset($_GET['age']) || isset($_GET['catégorie'])){
            $recherche = htmlspecialchars($_GET['search']);
            $age = htmlspecialchars($_GET['age']);
            $categorie = htmlspecialchars($_GET['catégorie']);
            $sql = 'SELECT * FROM listejeux WHERE nom LIKE "%'.$recherche.'%" AND age <= '.$age.' AND type LIKE "%'.$categorie.'%" LIMIT ' . $nbsql . ',' .  $pgresultats;
        }
        $resultat = $con -> query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos jeux</title>
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
    <div class="containerr">
    <div class="container">
        <form method="form">
        <div class="row">
            <div class="col-10">
                <label for="recherche">Rechercher un jeu:</label>
            </div>
            <div class="col-90">    
                <input type="text" name="search" placeholder="Rechercher">
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <label for="age">Age:</label>
            </div>
            <div class="col-90">    
                <input type="number" name="age" min="0" max="19" value=18 placeholder="Age">
            </div>    
        </div>
        <div class="row">
            <div class="col-10">
                <label for="catégorie">Catégorie:</label>
            </div>
            <div class="col-90">
                <select name="catégorie">
                    <option></option>
                    <option>Jeu de société</option>
                    <option>Jeu de carte</option>
                    <option>Jeu de role</option>
                    <option>Jeu de classic</option>
                </select>
            </div>
        </div>
        <div>
            <button>filtrer</button>
        </div>
        </form>
    </div>
        <?php
        while ($ligne = $resultat -> fetch_assoc()) {
        echo '
        <div class="box">
        <div class="imbox">
            <img src="../image/'.$ligne['image'].'">
        </div>
        <div class="text">
            <h3>'.$ligne['nom'].'</h3>
            <h5 class="desc"><span class="aer">AGE</span> : '.$ligne['age'].'</h5>
            <h5 class="desc"><span class="aer">Catégorie</span> :'.$ligne['type'].'</h5>
            <h5 class="desc"><span class="aer">DESCRIPTION</span> : '.$ligne['description'].'</h5>
        </div></div>';
        echo '<br/>';
        }
        echo '<style>*{
            font-family: "poppins",sans-serif;
        }
        .desc{
            text-align: justify;
            text-transform: capitalize;
        }
        .aer{
            background-color:rgb(17, 183, 224);
        }

        .containerr{
            background-image:  url(../background.JPG);
        }
        .box{
            width: 350px;
            margin: 20px;
            border: 20px solid #fff;
            box-shadow: 20px 15px 35px rgba(0,0,0, 0.8);
        }
        .imbox{
            position: relative;
            width: 100%;
            height: 300px;
        }
        img{
            position: relative;
            top: 0;
            left: 0;
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
        .text{
            text-align: center;
            font-weight: 300px;
            color: #111;
            background: #FFF;
        }
        h3{
            font-weight: 400;
        }</style>';
    for ($page=1;$page<=$pgnombre;$page++) {
        echo '<a class="pagi" href="decouvrir3.php?page=' . $page . '">' . $page . '</a> ';
    }
    ?>
    </div>



</body>
</html>