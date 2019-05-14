<?php
include_once("java/func.php");
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Chatbot</title>
		<meta charset="UTF-8">
		<link href = "css/bootstrap.min.css" rel = "stylesheet">
		<link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script type="text/javascript" src="java/bootstrap.js"></script>
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
		
		<script src="java/jquery-3.3.1.min.js"></script>
   		<script src="java/funciona.js"></script> 

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>	
	<body style=" background-color:#cc00cc ">
		<nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="main.php">
        <img src="imagenes/front.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
        MULKES EFRON
        </a>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <span class="navbar-brand mb-0 h1">Tool Board</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
                <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
                <a class="nav-link" href="about.php">Acerca de mi</a>
        </li>
        <li class="nav-item">
                <a class="nav-link" href="chat.php">Chat Bot</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Unete
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Inicia sesion</a>
          <a class="dropdown-item" href="#">Registrate</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Reportar problemas</a>
        </div>
      </li>
        </ul>
        </div>
		</nav>
		
		<section>
			<img id="imagen1" src="imagenes/el.jpeg" alt="Yo Robot" width="450" height="300">		
			<br>
			<p>
			<input  id="texto" type="text" name="pregunta" placeholder="Escriba algo">
			<button type='button' id="boton" onclick= 'EnviarBot()'  >Respuesta</button>
			</p>
			<p id="respuesta"></p>
			<img  id="gif2" src="http://www.gifsanimados.org/data/media/118/robot-imagen-animada-0014.gif" border="0" alt="robot-imagen-animada-0014" />
		</section>
		<footer id="piePagina">  
			<address id="datos">
				<p><b>EFRON</b></p>
				<p><b>Ghana - Africa</b></p>
			</address>
		</footer>	 
		<script>
	 function EnviarBot(){
    var palabraC = document.getElementById("texto").value;
    var temp1 = resolverMensaje(palabraC); 
    document.getElementById("respuesta").innerHTML =  temp1;   
}
	 </script> 	
	</body>
</html>