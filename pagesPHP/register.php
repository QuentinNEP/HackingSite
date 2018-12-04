<?php include("header.php");?>

<?php include("register_verif.php")?>
<?php include("menu.php") ?>

<form action="register.php" method="get">
  Login<br>
  <input type="text" placeholder="Username" name="user" value="<?php if(isset($user)){echo $user;}?>"><br>
  Password<br>
  <input type="password" placeholder="Password" name="pwd"  />
  Confirm password
  <input type="password" placeholder="Confirm Password" name="pwdConf" />
  <input type="submit"  name="submit" value="S'inscrire" />
</form>



<?php include("footer.php");?>
