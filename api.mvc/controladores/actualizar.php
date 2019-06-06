<?php
    require 'modelos/actualizarm.php';
    class Usuario{
        private $userModel;

        public function __construct(){
            
        }

        public function index(){
			echo 'index desde UsuarioController';
		}

        public function get($parametros){
            
        }

        public function post($parametros){
            $this->userModel = new usuarioM();
            /*
                Se obtiene el JSON
            */
            $cuerpo = file_get_contents('php://input');
            //Se decodifica el JSON para volverlo como una arreglo
            $array = json_decode($cuerpo);
            //echo $array['user'];
            //Se busca el recurso pedido por el usuario
    
            switch($parametros[0]){

                case 'actualizarUsuario':
                return $this->userModel->actualizarUsuario($array);
                break;
                default:
                echo 'Error';
                break;
         
            }
        }
    }
?>
