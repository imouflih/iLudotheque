<?php

    if(!$con = mysqli_connect("localhost","root","","iludothèque"))
    {

	    die("N'a pas réussi à se connecter!");
    }

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
		$subject = $_POST['subject'];

		if(!empty($fname) && !empty($lname) && !empty($email) && !empty($subject))
		{

			$query = "insert into contact (prénom,nom,email,sujet) values ('$fname','$lname','$email','$subject')";

			mysqli_query($con, $query);

			header("Location: accueil11.php");
			die;
		}else
		{
			echo "Entrer des informations valides";
		}
	}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacter nous</title>
    <link rel="stylesheet" href="../css.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;0,700;1,400&display=swap" rel="stylesheet"> 
    <script src="../js.js"></script>
</head>
<body class="bdy">
<header>
        <a href="accueil1.php" class="logo"><span>i</span>Ludothèque</a>
        <ul class="barre">
            <li><a href="accueil1.php">Accueil</a></li>
            <li><a href="decouvrir1.php">Découvrir</a></li>
            <li><a href="contact1.php">Contacter nous</a></li>
            <li><a href="login1.php">Se connecter</a></li>
            <a href="login11.php" class="panier">Mes réservations</a>
        </ul>
    </header>
    <div class="container">
        <form method="POST">
        <div class="row">
            <div class="col-10">
                <label for="fname">Prénom:</label>
            </div>
            <div class="col-90">
                <input type="text" id="fname" name="firstname" placeholder="Entrer votre prénom">
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <label for="lname">Nom:</label>
            </div>
            <div class="col-90">
                <input type="text" id="lname" name="lastname" placeholder="Entrer votre Nom">
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <label for="email">Email:</label>
            </div>
            <div class="col-90">
                <input type="email" id="email" name="email" placeholder="Ce mail sera utilisé pour vous répondre">
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <label for="subject">Sujet:</label>
            </div>
            <div class="col-90">
                <textarea name="subject" id="subject" cols="30" rows="10" placeholder="Ecrire.."></textarea>
            </div>
        </div>
        <div class="row">
            <input type="submit" value="Envoyer le message" onclick="SaveDetails2()">
        </div>
        </form>
    </div>
</body>
</html>