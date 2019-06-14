

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
        <h2 class = "centro letra">Repartidores</h2>
       </div>

      <div class = "tabla">
        <table>
            <tr>
                <th>Repartidor</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Correo electronico</th>
                <th>Sexo</th>
                <th>Motocicleta</th>
            </tr>
            <?php 
            $url='http://localhost/api.peopleapp.com/api.mvc/solicitud/obtenerRepartidor/';
            $data=file_get_contents($url);
            $prueba = json_decode($data);      
            ?>

            <?php foreach($prueba->repartidores as $repartidor) : ?> 
            <tr>
                <td><?php echo ($repartidor->idRepartidor);?></td> 
                <td><?php echo ($repartidor->nombre);?></td>
                <td><?php echo ($repartidor->telefono);?></td>  
                <td><?php echo ($repartidor->correo);?></td>   
                <td><?php echo ($repartidor->sexo);?></td> 
                <td><?php echo ($repartidor->modeloMotocicleta);?></td>  
            </tr>
            <?php endforeach;?>  
        </table>
      </div>
    
    
  </body>
</html>
