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

	    header("Location: ../utilisateurs/acceuil2.php");
	    die;

    }


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($email) && !empty($password))
		{

	
			$query = "select * from utilisateurs where email = '$email' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['prénom'] = $user_data['prénom'];
                        $_SESSION['nom'] = $user_data['nom'];
                        $_SESSION['email'] = $user_data['email'];
                        $_SESSION['id'] = $user_data['id'];
                       
						header("Location: ../utilisateurs/accueil2.php");
						die;
					}
				}
			}
			
			echo "Erreur";
            header("Location: login111.php");
						die;
		}else
		{
			echo "Erreur";
            header("Location: login111.php");
						die;
		}
	}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
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
    <form method="POST">
    <div class="container">
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
                <input type="password" id="password" name="password" maxlength="16" placeholder="Entrer votre mot de passe">
            </div>
        </div>
        <div class="row">
            <div>
            <input type="submit" value="Se connecter" onclick="SaveDetails3()">
            </div>
            <div>
                <a href="signup1.php" class="ins" target="_blank">Vous n'êtes pas encore inscrit?</a>
            </div>
        </div>
    </div> 
    </form>
</body>
</html>