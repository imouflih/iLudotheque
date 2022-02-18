<?php

session_start();

if(isset($_SESSION['Email']))
{
	unset($_SESSION['Email']);

}

header("Location: ../principale/login1.php");
die;
?>