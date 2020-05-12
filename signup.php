<html>

  <head>
	<meta charset="utf-8">
  	<title></title>
	<link rel="stylesheet" href="css/style-signup.css">
  </head>

  <body>	  

	  <div class="login-box">
	  	<img class="avatar" src="img/avatar.png" alt="Logo On">
		  <h1>Crear Nueva Cuenta</h1><br>
		  <form action="signup.php" method="POST">

		  	<label for="Correo">Correo</label>
            <input type="text" name="mail" placeholder="Introduce Tu Correo">
            
            <label for="Nombre">Nombre</label>
			<input type="text" name="name" placeholder="Introduce Tu Nombre">
			
			<label for="Contraseña">Contraseña</label>
            <input type="password" name="pass" placeholder="Introduce Tu Contraseña">
            
            <label for="Contra">Repetir Contraseña</label>
			<input type="password" placeholder="Introduce Tu Contraseña">
			
			<input type="submit" value="Crear">
			  
			  
			<a href="#">¿Olvidaste tu contraseña?</a><br>
			<a href="index.php">¿Ya tienes una cuenta?</a>
		  </form>
		</div>
	<?php 
		$host = "localhost";
		$user = "root";
		$pass = "";
		$bd = "practicas";

		$conn = new mysqli($host, $user, $pass, $bd);

		if ($conn->connect_error) {
			die ("Error de conexión" . $conn->connect_error);
		}

        if (isset($_POST['mail'])) {

            $mail = $_POST['mail'];
            $name = $_POST['name'];
            $pass = $_POST['pass'];
            //$passr = $_POST['passr'];

            $sql = "INSERT INTO users(id_user, mail, name_user, pass)
                                VALUES(0,'$mail','$name','$pass')";

            if ($conn->query($sql) === true ) {
                echo '<div><form action=""><p>Datos agregados correctamente</p></form></div>';
            } else {
                die ("Error al insertar los datos: " . $conn->error);
            }
		}
		
		$sql = "SELECT * FROM users";

        $conn->close();


      ?>
      
  </body>

</html>