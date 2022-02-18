<?php 
session_start();

if(!$con = mysqli_connect("localhost","root","","iludothèque"))
{

    die("N'a pas réussi à se connecter!");
}
function check_login($con)
{

    if(isset($_SESSION['email']))
    {

        $email = $_SESSION['email'];
        $query = "select * from utilisateurs where email = '$email' limit 1";

        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result) > 0)
        {

            $email = mysqli_fetch_assoc($result);
        return $email;
        }
    }

    header("Location: acceuil1.php");
    die;

}

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password))
		{

			$query = "insert into utilisateurs (prénom,nom,email,password) values ('$fname','$lname','$email','$password')";

			mysqli_query($con, $query);

			header("Location: login1.php");
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
    <title>Création de compte</title>
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
        <form method="post">
        <div class="row">
            <div class="col-10">
                <label for="fname">Prénom:</label>
            </div>
            <div class="col-90">
                <input type="text" id="fname" name="fname" placeholder="Entrer votre prénom">
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <label for="lname">Nom:</label>
            </div>
            <div class="col-90">
                <input type="text" id="lname" name="lname" placeholder="Entrer votre Nom">
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <label for="email">Email:</label>
            </div>
            <div class="col-90">
                <input type="email" id="email" name="email" placeholder="Entrer votre adresse mail">
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <label for="password">Mot de passe:</label>
            </div>
            <div class="col-90">
                <input type="password" id="password" name="password" maxlength="16" placeholder="Entrer un mot de passe">
            </div>
        </div>
        <div class="row">
            <div>
            <input type="submit" value="Créer votre compte" onclick="SaveDetails()">
            </div>
            <div>
                <a href="login1.php" class="ins">Vous êtes déjà inscrit?</a>
            </div>
        </div> 
        </form>
    </div> 
</body>
</html>