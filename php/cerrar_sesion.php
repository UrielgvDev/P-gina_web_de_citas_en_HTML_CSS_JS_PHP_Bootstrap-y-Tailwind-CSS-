<?php 

session_start();
session_unset(); //session_unser - Libera todas las variables de sesión
session_destroy(); //session_destroy - Destruye toda la informacion registrada de una sesión 
header("Location: ../inde.php.html");


?>