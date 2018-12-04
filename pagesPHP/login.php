<?php include("header.php");?>

<?php include("login_verif.php");?>
<?php include("menu.php") ?>

<form action="login.php" method="get">
  Login<br>
  <input type="text" placeholder="Username" name="user" value="<?php if(isset($user)){echo $user;}?>"/><br>
  Password<br>
  <input type="password" placeholder="Password" name="pwd" />
  <input type="submit" name="submit" value="Se connecter" />
</form>




<?php include("footer.php");?>
