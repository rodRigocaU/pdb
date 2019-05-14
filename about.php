<!DOCTYPE html>
<html>
	<head>
		<title>Chatbot</title>
		<meta charset="UTF-8">
		
                <link href = "css/bootstrap.min.css" rel = "stylesheet">
                <link rel="stylesheet" href="css/styles2.css">
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
                <script type="text/javascript" src="java/bootstrap.js"></script>
                <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
                <script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
                </head>	

        <body>
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
		<header id="encabezado">
			<h1 id="titulo">BIENVENIDO A CHATBOT</h1>	
		</header>
	
		<section>
            <article id="text1">
                <div id="caja1">
                <p><b>
                        <div id="card"> 
                                <div class="front"> 
                                        <img src="imagenes/elon.png" alt="logo" height="200" width="200" style="margin-left:200px;">
                                   </div>
                                <div class="back">
                                        <h2>Mulkes Efron.</h2>
                                        <p>
                                            Mulkes es un vicionario con ganas de eneseñar a toda persona a programar
                                            ya que hoy por hoy es fundamental por el uso de los computadores
                                        </p>
                                  </div>
                        </div>
                </div>
                <br>
            </article>
		</section>
        <script>
                $("#card").flip({trigger: 'hover'});
        </script>	  	
	</body>
</html>