<?php  


include 'conexion.php';


//variable en donde almacenaremos los datos que nosotros escribamos en la casilla nombre completo del formulario registro
$nombre_completo = $_POST['nombre_completo'];
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$hombre = $_POST['hombre'];
$mujer = $_POST['mujer'];
//encriptamiento de contraseñas con el algoritmo sha512 
//$contrasena = hash('sha512', $contrasena);

//Creamos query para que los datos se almacenen en la base de datos de xampp
$query = "INSERT INTO usuarios(nombre_completo, usuario, correo, contrasena, hombre, mujer)  VALUES('$nombre_completo', '$usuario', '$correo', '$contrasena','$hombre', '$mujer')";

//ejecutamos query y verificamos que el correo no se repita en la base de datos
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");
//Asemos para que me verifique si existe lo que es una fila con el mismo nombre del correo
if(mysqli_num_rows($verificar_correo) > 0){
	echo '
	     <script>
              alert("Este correo no es valido ya es registrado");
              window.location = "../inde.php.html";
	     </script>

	';
	//la instruccion exit implime un mensaje y termina el script actual asiendo que los datos ya no se repitan en la base de datos
	exit();
    
}
//verificamos que no se repita el nombre de usuario no se repita 
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");
//Asemos para que me verifique si existe lo que es una fila con el mismo nombre del correo
if(mysqli_num_rows($verificar_usuario) > 0){
	echo '
	     <script>
              alert("Este usuario no es valido ya existe");
              window.location = "../inde.php.html";
	     </script>

	';
	//la instruccion exit implime un mensaje y termina el script actual asiendo que los datos ya no se repitan en la base de datos
	exit();
    
}








	


$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
	echo '
        <script>
            alert("Usuario almacenado exitosamente");
            window.location = "../inde.php.html";
        </script>    


	';
}else{
	echo '
       
       <script>
            alert("Usuario almacenado no fue registrado");
            window.location = "../inde.php.html";
        </script>    




	';
}

/*seramos el siclo para que nos deje estar en la pagina principal nuevamente*/
mysqli_close($conexion);


?>