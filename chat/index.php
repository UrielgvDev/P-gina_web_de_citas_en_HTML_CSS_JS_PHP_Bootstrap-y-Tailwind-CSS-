<?php
    include "db.php";

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chat</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chats</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
   
    <script src="index.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    
    <script type="text/javascript">
    	function ajax(){
    		var req = new XMLHttpRequest

    		req.onreadystatechange = function(){
    			if (req.readyState == 4 && req.status == 200) {
    				document.getElementById('chat').innerHTML = req.responseText;
    			}
    		}

    		req.open('GET', 'chat.php', true);
    		req.send();
    	}

    	setInterval(function(){ajax();}, 1000);
    </script>



</head>
<body onload="ajax();">

    
</head>



    <section class="h-screen flex overflow-hidden">
        <div class="bg-white w-3/12 p-6">
            <a href="../PerfilUsuario.html"class="btnbtn">Volver</a> <br><br><h3 class="text-2xl mb-8">Chats </h3>
            <style>
  .btnbtn{
    background: #f5353d;
    padding: 5px 10px;
    color: white;
    border-radius: 20px;
    position: relative;
    left: 5px;
  }
</style>



            <div class="flex overflow-auto w-full mb-8">
            <div class="self-center text-center mr-4">
                <div class="relative w-10 mb-2">  
                    <img src="img/imagen8.jfif" class="rounded-full">
                    <div class="absolute bg-green-300 p-1 rounded-full bottom-0 right-0 border-gray-800 border-2"></div>
                </div>
                <small class="font-light">Angelica</small>
            </div>
            <div class="self-center text-center mr-4">
                <div class="relative w-10 mb-2">  
                    <img src="img/imagen1.jfif"  class="rounded-full">
                    <div class="absolute bg-green-300 p-1 rounded-full bottom-0 right-0 border-gray-800 border-2"></div>
                </div>
                <small class="font-light">Maria</small>
            </div>
            <div class="self-center text-center mr-4">
                <div class="relative w-10 mb-2">  
                    <img src="img/imagen7.jfif" class="rounded-full">
                    <div class="absolute bg-red-300 p-1 rounded-full bottom-0 right-0 border-gray-800 border-2"></div>
                </div>
                <small class="font-light">Lisa</small>
            </div>
            <div class="self-center text-center mr-4">
                <div class="relative w-10 mb-2">  
                    <img src="img/imagen5.jfif"  class="rounded-full">
                    <div class="absolute bg-green-300 p-1 rounded-full bottom-0 right-0 border-gray-800 border-2"></div>
                </div>
                <small class="font-light">Cristina</small>
            </div>
            
            </div>
            <div class="overflow-auto">
                <div class="flex bg-gray-100 rounded p-4 mb-4">
                    <img src="img/imagen4.jfif" class="rounded-full w-10 mr-4">
                    <div class="w-full overflow-hidden">
                        <div class="flex mb-1">
                    <p class="flex-grow">Ana</p>
                    <small class="font-light text-gray-500">1:55 pm</small>
                    </div>
                    <small class="overflow-ellipsis overflow-hidden whitespace-nowrap block font-light text-gray-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim alias ab aliquam consequuntur exercitationem vitae eos modi rem quaerat ipsum, est quia voluptatem, asperiores ipsam! Excepturi consequatur culpa esse magnam.</small>
                    </div>
                </div>
                <div class="flex bg-gray-100 rounded p-4 mb-4">
                    <img src="img/imagen1.jfif" class="rounded-full w-10 mr-4">
                    <div class="w-full overflow-hidden">
                        <div class="flex mb-1">
                    <p class="flex-grow">Maria</p>
                    <small class="font-light text-gray-500">09:55 pm</small>
                    </div>
                    <small class="overflow-ellipsis overflow-hidden whitespace-nowrap block font-light text-gray-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim alias ab aliquam consequuntur exercitationem vitae eos modi rem quaerat ipsum, est quia voluptatem, asperiores ipsam! Excepturi consequatur culpa esse magnam.</small>
                    </div>
                </div>
                <div class="flex bg-gray-100 rounded p-4 mb-4">
                    <img src="img/imagen7.jfif" class="rounded-full w-10 mr-4">
                    <div class="w-full overflow-hidden">
                        <div class="flex mb-1">
                    <p class="flex-grow">Lisa</p>
                    <small class="font-light text-gray-500">09:55 am</small>
                    </div>
                    <small class="overflow-ellipsis overflow-hidden whitespace-nowrap block font-light text-gray-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim alias ab aliquam consequuntur exercitationem vitae eos modi rem quaerat ipsum, est quia voluptatem, asperiores ipsam! Excepturi consequatur culpa esse magnam.</small>
                    </div>
                </div>
                <div class="flex bg-gray-100 rounded p-4 mb-4">
                    <img src="img/imagen5.jfif" class="rounded-full w-10 mr-4">
                    <div class="w-full overflow-hidden">
                        <div class="flex mb-1">
                    <p class="flex-grow">Cristina</p>
                    <small class="font-light text-gray-500">09:55 am</small>
                    </div>
                    <small class="overflow-ellipsis overflow-hidden whitespace-nowrap block font-light text-gray-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim alias ab aliquam consequuntur exercitationem vitae eos modi rem quaerat ipsum, est quia voluptatem, asperiores ipsam! Excepturi consequatur culpa esse magnam.</small>
                    </div>
                </div>
                <div class="flex bg-gray-100 rounded p-4 mb-4">
                    <img src="img/imagen8.jfif" class="rounded-full w-10 mr-4">
                    <div class="w-full overflow-hidden">
                        <div class="flex mb-1">
                    <p class="flex-grow">Angelica</p>
                    <small class="font-light text-gray-500">09:55 am</small>
                    </div>
                    <small class="overflow-ellipsis overflow-hidden whitespace-nowrap block font-light text-gray-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim alias ab aliquam consequuntur exercitationem vitae eos modi rem quaerat ipsum, est quia voluptatem, asperiores ipsam! Excepturi consequatur culpa esse magnam.</small>
                    </div>
                </div>
                <div class="flex bg-gray-100 rounded p-4 mb-4">
                    <img src="img/R.jfif" class="rounded-full w-10 mr-4">
                    <div class="w-full overflow-hidden">
                        <div class="flex mb-1">
                    <p class="flex-grow">Alondra</p>
                    <small class="font-light text-gray-500">09:55 am</small>
                    </div>
                    <small class="overflow-ellipsis overflow-hidden whitespace-nowrap block font-light text-gray-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim alias ab aliquam consequuntur exercitationem vitae eos modi rem quaerat ipsum, est quia voluptatem, asperiores ipsam! Excepturi consequatur culpa esse magnam.</small>
                    </div>
                </div>
                <div class="flex bg-gray-100 rounded p-4 mb-4">
                    <img src="img/imagen9.jfif" class="rounded-full w-10 mr-4">
                    <div class="w-full overflow-hidden">
                        <div class="flex mb-1">
                    <p class="flex-grow">Isabella</p>
                    <small class="font-light text-gray-500">09:55 am</small>
                    </div>
                    <small class="overflow-ellipsis overflow-hidden whitespace-nowrap block font-light text-gray-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim alias ab aliquam consequuntur exercitationem vitae eos modi rem quaerat ipsum, est quia voluptatem, asperiores ipsam! Excepturi consequatur culpa esse magnam.</small>
                    </div>
                </div>
                
                

            </div>
        </div>
        <div class="bg-gray-100 w-9/12">
            <div class="px-20 py-6 border-b">
                <div class="flex">
                <div class="flex flex-grow">
                <div class="relative w-10 mr-4">  
                    <img src="img/perfil1.jpg"  class="rounded-full">
                    <div class="absolute bg-green-300 p-1 rounded-full bottom-0 right-0 border-gray-800 border-2"></div>
                </div>
                <div class="self-center">
                 <p class="font-medium">Nayeli Rodriguez</p>

                 <small class="text-gray-500 font-light">En linea</small>

                 </div>
                 </div>

                 <div class="flex">
                    <svg class="w-6 text-gray-500 mr-4" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                      </svg>

                      
                      </svg>

                 </div>

                 </div>
            </div>

<div id="contenedor">
		<div id="caja-chat">
			<div id="chat"></div>
		</div>
		<form method="POST" action="index.php">
			<input type="text" name="nombre" placeholder="Ingresa tu nombre">
			<textarea name="mensaje" placeholder="Ingresa tu mensaje"></textarea>
			<input type="submit" name="enviar" value="Enviar">
			
		</form>
		<?php
		    if (isset($_POST['enviar'])) {
		    	$nombre = $_POST['nombre'];
		    	$mensaje = $_POST['mensaje'];

		    	$consulta = "INSERT INTO chatt (nombre, mensaje) VALUES ('$nombre', '$mensaje')";
				$ejecutar = $conexion->query($consulta);

                //esta parte es la del sonido cuando enviamos un mensaje 
				if ($ejecutar) {
					echo "<embed loop='false' src='whatsapp-campana.mp3' hidden='true' autoplay='true>'";
					
				}



		    }

		?>
	</div>

</body>
</html>