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
        <a href="accueil2.php" class="logo"><span>i</span>Ludothèque</a>
        <ul class="barre">
            <li><a href="accueil2.php">Accueil</a></li>
            <li><a href="decouvrir2.php">Découvrir</a></li>
            <li><a href="contact2.php">Contacter nous</a></li>
            <li><a href="logout2.php">Se déconnecter</a></li>
            <a href="historique2.php" class="panier">Mes réservations</a>
        </ul>
    </header>
<div class="containerr">
<div class="container">
    <p><br/><br/><br/></p>
<?php
    session_start();
    $con = mysqli_connect('localhost','root','','iludothèque');
    if(isset($_GET['page']))
    {
        $query = 'SELECT * FROM listejeux WHERE id_game = "'.$_GET['page'].'"';
        $result = mysqli_query($con,$query);
        while($ligne = mysqli_fetch_array($result)) {
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
                <div><a href="decouvrir2.php">Réserver</a></div>
            </div></div>';
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
        }
    }


?>
<?php
    $req = 'SELECT * from stock WHERE id_game = "'.$_GET['page'].'"';
    $bdd = mysqli_query($con,$req);
    $valable=mysqli_fetch_array($bdd);
    $idgame = $_GET['page'];
    $iduser = $_SESSION['id'];
    if($valable['valable'] == 0)
    {
        echo '<script type = "text/javascript">';
        echo 'alert("Le jeux indisponible");';
        echo 'window.location.href = "lejeu2.php" ';
        echo '</script>';
        header("Location : decouvrir2.php");
        die;
    }
    else{
        $mois = date('y-m');
        $arr = "SELECT * from booking where id_g = '$idgame' AND returndate like '$mois%'";
        $resultat = mysqli_query($con,$arr);
        if(mysqli_num_rows($resultat)>3){
            echo '<script type = "text/javascript">';
            echo 'alert("vous avez dépaser le nombre des jeux autorisé");';
            echo 'window.location.href = "decouvrir2.php" ';
            echo '</script>';
        }else{
        $date = date('Y-m-d');
        $returndate = date('Y-m-d', strtotime($date. ' + 60 days'));
        $req = "INSERT INTO `booking`(`id_u`, `id_g`, `date`,`returndate`) VALUES ('$iduser','$idgame',' $date','$returndate')";
        $resultat= mysqli_query($con,$req);
        $returnd = "UPDATE stock SET valable = valable-1 WHERE id_game = '$idgame'";
        $result= mysqli_query($con,$returnd);}

    }

?>
</div>
</div>
</body>
</html>