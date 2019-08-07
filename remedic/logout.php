<?php
session_start();
session_destroy();
echo "Cerraste Sesion";
header('Location: login.php');

?>
