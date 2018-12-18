<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
try {
$bdd = new PDO('mysql:host=localhost;dbname=hacking_connexion;charset=utf8', 'root', '');
 }
 catch (Exception $e) {
die('Erreur : ' . $e->getMessage());
}
session_start();
if ($_POST['mdp']==$_POST['mdpConfirm'])
{
$pass_hache=sha1($_POST['pass']);
$req = $bdd->prepare('UPDATE membres SET pass=? WHERE pseudo = ?');
$req->execute(array(
$pass_hache,
$_SESSION['pseudo']
));

echo '<p>La modification de mot de passe a été prise en compte ! Déconnectez-vous et reconnectez-vous afin de valider ce changement.</p><br/>';
?>
<a href="membres_icd.php">Retour à la page membre</a>
<?php
}
else{
echo'Vous n\'avez pas tapé deux fois le même mot de passe';

}
