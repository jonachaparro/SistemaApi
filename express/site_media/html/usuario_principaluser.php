<?php
        session_start();
        include 'Conexion.php';
       
        if(isset($_SESSION['nombre'])) {?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
            *{
                margin: 0;
                padding: 0;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

            body{
                background: ;
            }

            header{
                width: 100%;
            }

            .navegacion{
                width: 1000px;
                margin: 30px auto;
                background: #EE5433;
            }

            .navegacion ul{
                list-style: none;
            }

            .menu > li{
                position: relative;
                display: inline-block;
            }

            .menu > li > a{
                display: block;
                padding: 15px 20px;
                color: white;
                font-family: 'Open sans';
                text-decoration: none;
            }

            .menu li a:hover{
                color: black;
                transition: all .3s;
            }

            /* Submenu*/

            .submenu{
                position: absolute;
                background: #EE9133;
                width: 120%;
                visibility: hidden;
                opacity: 0;
                transition: opacity 1.5s;
            }

            .submenu li a{
                display: block;
                padding: 15px;
                color: #fff;
                font-family: 'Open sans';
                text-decoration: none;
            }

            .menu li:hover .submenu{
                visibility: visible;
                opacity: 1;
            }

            .admin{
                padding-left: 265px;
            }

            .tabla{
                width: 850px;
                text-align: center;
                margin: 40px auto;               
            }

            table{
            width: 100%;
            }

            .centro{
            text-align: center; 
            }

            .contenedor{
                background: yellow;
                width: 50%;
            }

            div {
                 font-family: Vegur, 'PT Sans', Verdana, sans-serif;
            }
    </style>
</head>
<body>

<nav class="navegacion">
			<ul class="menu">
				<li><a href="#">Inicio</a></li>
				<!-- <li><a href="#">Usuarios</a>
                <ul class="submenu">
						<li><a href="../formulario/">Registrar</a></li>
						<li><a href="../editar/">Actualizar</a></li>
						<li><a href="../eliminar/">Eliminar</a></li>
					</ul> -->
                </li>
				<li><a href="../repartidor/">Repartidores</a>
					<ul class="submenu">
						<li><a href="../addrepartidor/">Registrar</a></li>
					</ul>
				</li>
                <!-- <li><a href="../servicio/">Servicios</a></li> -->
				<li><a href="../sugerencias/">Sugerencias</a></li>
			</ul>
		</nav>
    <h2 class = "admin">Bienvenido</h2>
    <div class = "admin">
        <?php
            echo $_SESSION['nombre'] . "<p/>";
            ?> 
            <a href="../cerrarsesion/"><button>Salir</button></a> 
       </div>
            <br>
       <h1 style = "text-align: center">Servicio de traslado de productos</h1>
            <br>
            <br>
            <br>
        <div class = "">
            <h2 style = "text-align: center">Unete a nuestro equipo de repartidores</h2>
        </div>
</body>
</html>
<?php
}else{
	header("Location:../sesionprueba/");
}
?>