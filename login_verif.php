<?php

session_start();

$bdd = new PDO('mysql:host=localhost;dbname=hacking_connexion;charset=utf8', 'root', '');

if(isset($_POST['submit']))
{
	$user = htmlspecialchars($_POST['user']);
	$pwd = md5($_POST['pwd']);
	if(!empty($user) AND !empty($pwd))
	{
		$requser = $bdd->prepare("SELECT * FROM membres WHERE user = ? AND pwd = ?");
		$requser->execute(array($user, $pwd));
		$userexist = $requser->rowCount();
		if($userexist == 1)
		{
			$userinfo = $requser->fetch();
      $_SESSION['id'] = $userinfo['id'];
      $_SESSION['user'] = $userinfo['user'];
      header("Location: membre.php?id=".$_SESSION['id']);
		}
		else{
			echo ": Incorrect password or username";
		}
	}
	else{
		echo ": Veuillez remplir tous les champs";
	}
}

?>
