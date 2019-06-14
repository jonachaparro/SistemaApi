

<!-- if(isset($_SESSION['nombre'])) {-->


    <!DOCTYPE html>
<html>
  <head>
      <title>Dashboard</title>
      <meta charset="utf-8">
      <style>

*{
	margin: 0;
	padding: 0;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

        .barra{
            background: #EE5433;
            width: 1000px;
            height: 50px;
            margin: 40px auto;
        }


        header{
            width: 100%;
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

        .letra{
            padding: 10px;
        }
         
    </style>
  </head>
  <body>
  
       <div class = "barra">
        <h2 class = "centro letra">Servicios en linea</h2>
       </div>

      <div class = "tabla">
        <table>
            <tr>
                <th>Servicio</th>
                <th>Usuario</th>
                <th>Repartidor</th>
                <th>Producto</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Direccion de compra</th>
                <th>Direccion de entrega</th>
            </tr>
            <?php 
            $url='http://localhost/api.peopleapp.com/api.mvc/solicitud/obtenerServicios/';
            $data=file_get_contents($url);
            $prueba = json_decode($data);      
            ?>

            <?php foreach($prueba->servicios as $servicio) : ?> 
            <tr>
                <td><?php echo ($servicio->idServicio);?></td> 
                <td><?php echo ($servicio->idUsuario);?></td>
                <td><?php echo ($servicio->idRepartidor);?></td>  
                <td><?php echo ($servicio->nombreProducto);?></td>   
                <td><?php echo ($servicio->descripcionProducto);?></td> 
                <td><?php echo ($servicio->precioProducto);?></td>  
                <td><?php echo ($servicio->direccionCompra);?></td>
                <td><?php echo ($servicio->direccionEntrega);?></td>    
            </tr>
            <?php endforeach;?>  
        </table>
      </div>
    
    
  </body>
</html>
