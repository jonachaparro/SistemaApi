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

            .orientacion{
             padding-left: 600px;
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


            .boton_personalizado{
                text-decoration: none;
                padding: 10px;
                font-weight: 600;
                font-size: 20px;
                color: #ffffff;
                background-color: #1883ba;
                border-radius: 6px;
                border: 2px solid #0016b0;
            }
    </style>
</head>
<body>
<div class = "">
		<div class = "">
			<br>
            <br>
            <br>
            <br>
            <h1 class = "centro">SESION</h1>
			<br>
		<div class = "orientacion">
			<form method="post" action= "../login/">
				<br><br>
				<input type="submit" class="boton_personalizado" name="Usuario" value="Administrador">
			</form>
            <br>
            <br>
            <form method="post" action= "../sesionprueba/">
				<input type="submit" class="boton_personalizado" name="Administrador" value="     Usuario      ">
			</form>
        </div>	
		</div>
	</div>
</body>
</html>