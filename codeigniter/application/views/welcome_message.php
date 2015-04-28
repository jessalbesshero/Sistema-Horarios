<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sistema administración  horarios</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	/* CSS de sistema*/
	*{
    font-size: 16px;
	}
	body{
	background:#ddd;
	}

	form.login {
    	background: none repeat scroll 0 0 #F1F1F1;
    	border: 1px solid #DDDDDD;
    	font-family: sans-serif;
    	margin: 150 auto;
    	padding: 30px;
    	width: 300px;
    	box-shadow:0px 0px 20px black;
    	border-radius:10px;
	}


form.login div {
    margin-bottom: 20px;
    overflow: hidden;
    }

form.login div label {
    display: block;
    float: left;
    line-height: 25px;
    }



form.login div input[type="text"], form.login div input[type="password"] {
    border: 1px solid #DCDCDC;
    float: right;
    padding: 4px;
    }

form.login div input[type="submit"] {
    background: none repeat scroll 0 0 #DEDEDE;
    border: 1px solid #C6C6C6;
    float: right;
    font-weight: bold;
    padding: 8px 20px;
}


.error{
    color: red;
    font-weight: bold;
    margin: 10px;
    text-align: center;
}
	/*css de sistema*/
	</style>
</head>
<body>

<div id="container">
	<h1>Bienvenido a sistema horarios</h1>

	

<form action="principal.php" method="post" class="login">
    <title> INICIO</title>
    <h1>Iniciar sesión</h1>
    <footer>&copy; Sistema</footer>
    <div><label>Usuario:</label><input name="user" type="text" ></div>
    <div><label>Contraseña:</label><input name="password" type="password"></div>
    <div><input name="login" type="submit" value="Ingresar"></div>
    <div><a href=registrar.php>Registrarse</a></div>
    <a href=Invitado.php>Invitado</a>
 
</form>

<div id="body">
		<p>Sistema creado en la UV por estudiantes de la Licenciatura en Informática:</p>
		<p>@Sirio</p>
		<p>@Beatriz</p>
		<p>@Julián</p>
		<p>@Jesús</p>
	</div>

	<p></p>
</div>

</body>
</html>

<?php
session_start();
                    if(isset($_SESSION['errorLogeo'])){
                        $error = "";
                        switch ($_SESSION['errorLogeo']) {
                            case 1:
                            echo"<script>alert('Usted no ha ingresado datos')</script>";
                               
                                break;
                            case 2:
                            echo"<script>alert('Los datos de la cuenta no son correctos')</script>";
                        
                                break;
                            case 3:
                                echo"<script>alert('Verifique su conexión')</script>";
                                break;
                            default:
                                echo "<label>  </label>";
                                break;
                        }
                        session_destroy();
                    }

  

?>