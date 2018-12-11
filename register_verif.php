<?php

$bdd = new PDO('mysql:host=localhost;dbname=hacking_connexion;charset=utf8', 'root', '');

$list_nom = $bdd->query('SELECT pseudo FROM membres');
$list_nom->fetch()['pseudo'];

$new_name = false;

if (isset($_POST['submit']))
{
	$user = htmlspecialchars($_POST['user']);
	if(!empty($_POST['user']) AND !empty($_POST['pwd']) AND !empty($_POST['pwdConf']) AND !empty($_POST['email']))
	{
		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		{
			$email = $_POST['email'];
			if($_POST['pwd'] == $_POST['pwdConf'])
			{
				if($_POST['pwd'] != $_POST['user'])
				{
					$longueurPwd = strlen($_POST['pwd']);

					$pwd = md5($_POST['pwd']);

					$longueurPseudo = strlen($user);
					if ($longueurPseudo <= 20)
					{
						if ($longueurPseudo >= 3)
						{
							if ($longueurPwd >= 2)
							{
								if ($longueurPwd <= 30)
								{
									$requser = $bdd->prepare("SELECT * FROM membres WHERE pseudo = ? AND email = ?");
	                $requser->execute(array($user, $email));
	                $userExist = $requser->rowCount();

									if($userExist == 0) {

										$insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, password, email) VALUES(?, ?, ?)");
	                	$insertmbr->execute(array($user, $pwd, $email));
	                	echo "Votre compte a bien été créé ! <a href=\"loginpage.php\">Me connecter</a>";
									}
									else{
										echo "Username ou adresse email déja utilisé";
									}
								}
								else{
									echo "Votre mot de passe est trop long";
								}
							}
							else{
								echo "Votre mot de passe est trop court";
							}
						}
						else{
							echo "Votre pseudo est trop court";
						}
					}
					else{
						echo "Votre pseudo est trop long";
					}
				}
				else{
					echo "Le mot de passe doit être différent du pseudo.";
				}
			}
			else{
				echo "Les mots de passe doivent être identiques.";
		 }
	 }
		 else{
			 echo "Le format de l'adresse email n'est pas valide";
		}
	}
	else {
		echo "Veuillez remplir tous les champs";

	}
}

 ?>
