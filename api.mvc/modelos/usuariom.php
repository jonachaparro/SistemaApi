<?php
    require_once('core/db_abstract_model.php');
    class UsuarioM extends DBAbstractModel{

        public function __construct(){

        }

        function agregarUsuario($array){  
            if(!empty($array)){
                $consulta = "INSERT INTO `usuario` (`nombre`, `contrasena`, `correo`, `sexo`, `fechaNacimiento`)
                 VALUES (
                     '$array->nombre',
                      '$array->contrasena', 
                      '$array->correo',
                      '$array->sexo', 
                      '$array->fechaNacimiento');"; 
            }

            $this->query = $consulta;
            // Ejecutar sentencia preparada
            $result = $this->execute_single_query();
                if ($result['mensaje'] == "Registrado"){
                    return [
                        "datos" =>"Se ha registrado el usuario"
                    ];
                
            }else{
                return [
                    "error"=>"Error en el JSON"
                ];
            }
    }

 }

?>
