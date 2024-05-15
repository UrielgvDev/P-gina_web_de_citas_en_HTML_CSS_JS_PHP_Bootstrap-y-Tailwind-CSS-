<?php  
    session_start();
    include 'conexion.php';

   

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    
    //creamos una variable que mediante esa variable vamos a poder validad el usuario que se ponga en el inicio de sesion
    //la cual es una funcion que obtiene los numeros de renglones validados desde un SELECT
    $validar_login = mysqli_query($conexion, "SELECT correo, contrasena FROM usuarios WHERE correo='$correo' and contrasena='$contrasena'");
    $columnas = mysqli_fetch_array($validar_login);

    if($columnas){//si encuentra un dato que sea valido nos redijira a otra pagina
      $_SESSION['usuario'] = $correo;
    	header("location: ../PerfilUsuario.html");
    	exit;
    }else{
    	echo '
             <script>
                alert("correo no existe verifique los datos");
                window.location = "../inde.php.html";
             </script>
    	';
        exit;
    }









?>