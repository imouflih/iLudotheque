<?php
    session_start();

    if(!$con = mysqli_connect("localhost","root","","iludothèque"))
    {

	    die("N'a pas réussi à se connecter!");
    }

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

		$subject = $_POST['subject'];

		if(!empty($subject))
		{
            $fname = $_SESSION['prénom'];
            $lname = $_SESSION['nom'];
            $email = $_SESSION['email'];
			$query = "insert into contact (prénom,nom,email,sujet) values ('$fname','$lname','$email','$subject')";

			mysqli_query($con, $query);

			header("Location: accueil22.php");
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
        <a href="accueil2.php" class="logo"><span>i</span>Ludothèque</a>
        <ul class="barre">
            <li><a href="accueil2.php">Accueil</a></li>
            <li><a href="decouvrir2.php">Découvrir</a></li>
            <li><a href="contact2.php">Contacter nous</a></li>
            <li><a href="logout2.php">Se déconnecter</a></li>
            <a href="historique2.php" class="panier">Mes réservations</a>
        </ul>
    </header>
    <div class="container">
        <form method="POST">
        <div class="row">
            <div class="col-10">
                <label for="subject">Sujet:</label>
            </div>
            <div class="col-90">
                <textarea name="subject" id="subject" cols="30" rows="10" placeholder="Ecrire.."></textarea>
            </div>
        </div>
        <div class="row raw">
            <input type="submit" value="Envoyer le message" onclick="SaveDetails2()">
        </div>
        </form>
    </div>
</body>
</html>