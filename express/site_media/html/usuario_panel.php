

<!-- if(isset($_SESSION['nombre'])) {-->
    <?php
        session_start();
        include 'Conexion.php';
       
        if(isset($_SESSION['nombre'])) {?>

<!DOCTYPE html>
<html>
  <head>
      <title>Dashboard</title>
      <meta charset="utf-8">
      <style>
          .tabla{
            width: 850px;
            text-align: center;
            margin: 40px auto;
        }

        table{
            width: 100%;
        }

        #button {
        padding: 0;
        padding-left: 250px;
        
         }
     
        #button li {
            display: inline;
            }

        #button li a {
            font-family: Arial;
            font-size: 15px;
            text-decoration: none;
            float: left;
            padding: 10px;
            background-color: #2175bc;
            color: #fff;
            width: 150px;
            text-align: center;
            }

    
        .centrado{
            text-align: center;
        }

        .admin{
            padding-left: 265px;
        }
    </style>
  </head>
  <body>
        <ul id="button">
            <li><a href="">Inicio</a></li>
            <li><a href="../formulario/">Nuevo usuario</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Productos</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
        <br>
        <br>
        <br>
       <div class = "admin">
        <?php
            echo "Administrador: " .$_SESSION['nombre'] . "<p/>";
            ?> 
            <a href="../cerrarsesion/"><button>Salir</button></a> 
       </div>
          
          
          <h1 style = "text-align: center">Servicio Express</h1>
          <hr width=900>

          <h3 style = "text-align: center">Usuarios Registrados</h3>
         
         

      <div class = "tabla">
        <table>
            <tr>
                <th>Usuario</th>
                <th>Nombre</th>
                <th>Correo electronico</th>
                <th>Sexo</th>
                <th>Fecha de nacimiento</th>
            </tr>
            <?php 
            $url='http://localhost/api.peopleapp.com/api.mvc/solicitud/obtenerUsuarios';
            $data=file_get_contents($url);
            $prueba = json_decode($data);      
            ?>

            <?php foreach($prueba->datos as $dato) : ?> 
            <tr>
                <td><?php echo ($dato->idUsuario);?></td> 
                <td><?php echo ($dato->nombre);?></td>
                <td><?php echo ($dato->correo);?></td>  
                <td><?php echo ($dato->sexo);?></td>   
                <td><?php echo ($dato->fechaNacimiento);?></td> 
                  
            </tr>
           <?php endforeach;?> 
        </table>
      </div>
    
    
  </body>
</html>
<?php
}else{
	echo '<script> window.location="usuario_login.php"; </script>';
}
?>