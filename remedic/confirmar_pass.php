<?php
include("conexion.php");
?>
<form action="validar_token.php" method="get">
  <p><input type="email" name="email" placeholder="Gmail"></p>
  <p><input type="password" name="token" placeholder="Token"></p>
  <p><input type="password" name="newpssw" placeholder="Nueva contraseña"></p>
  <p><input type="submit" value="Cambiar Contraseña">
</form>
