<?php
require_once('constants.php');
require_once('model.php');
require_once('view.php');

function handler()
{
    $event = VIEW_LOGIN_USER;
    $uri = $_SERVER['REQUEST_URI'];
    
    $peticiones = array(GET_USER, EDIT_USER,
        VIEW_SET_USER, VIEW_GET_USER, VIEW_DELETE_USER,
        VIEW_EDIT_USER,VIEW_LOGIN_USER,VIEW_FORMULARIO_USER,
        
        VIEW_FORMULARIO_PRINCIPAL,ADD_USER,FORMULARIO_CERRAR_SESION, 
        FORMULARIO_VALIDAR, FORMULARIO_EDITAR, FORMULARIO_ELIMINAR, DELETE_USER,
        FORMULARIO_REPARTIDOR, FORMULARIO_SESIONES, FORMULARIO_SERVICIOS,FORMULARIO_REPARTIDOR_ADD,ADD_REP,
        FORMULARIO_REPARTIDOR_ARCHIVO, FORMULARIO_SESION_PRUEBA, FORMULARIO_VALIDAR_PRUEBA, 
        FORMULARIO_PRINCIPAL_USER, FORMULARIO_SUGERENCIAS_USER, FORMULARIO_ENVIAR_SUGERENCIA, FORMULARIO_LOGEO);
    
    foreach ($peticiones as $peticion) {
    
        $uri_peticion = MODULO . $peticion . '/';
       
        if (strpos($uri, $uri_peticion) == true) {
            $event = $peticion;
           
        }
    }

    
    $user_data_repartidor = helper_repartidor_data();
    $user_data = helper_user_data();
    $usuario = set_obj();

    switch ($event) {
        case ADD_USER:
            //cho var_dump($user_data);
            $resultado = $usuario->set($user_data);
            // $data = array('mensaje' =>$resultado);
            retornar_vista(VIEW_FORMULARIO_PRINCIPAL);
        break;
        case EDIT_USER:
            //cho var_dump($user_data);
            //var_dump($user_data);
            $resultado = $usuario->edit($user_data);
            //echo $resultado;
            //$data = array('mensaje' =>$resultado);
            retornar_vista(VIEW_FORMULARIO_PRINCIPAL);
        break;
        case DELETE_USER:
            $resultado = $usuario->delete($user_data);
            retornar_vista(VIEW_FORMULARIO_PRINCIPAL);
        break;
        
        //-------REPARTIDOR-------
        
        case ADD_REP:
            $resultado = $usuario->add($user_data_repartidor);
            retornar_vista(FORMULARIO_REPARTIDOR);
            break;
        // case DELETE_USER:
        //     $usuario->delete($user_data['email']);
        //     $data = array('mensaje' => $usuario->mensaje);
        //     retornar_vista(VIEW_DELETE_USER, $data);
        //     break;
            case EDIT_USER:
            $usuario->edit($user_data);
            $data = array('mensaje' => $usuario->mensaje);
            retornar_vista(VIEW_GET_USER, $data);
            break;
        default:
            retornar_vista($event);
    }
}
function set_obj() {
    $obj = new Usuario();
    return $obj;
}

function helper_user_data(){
    $user_data = array();
    if ($_POST) {
        if (array_key_exists('idUsuario', $_POST)) {
            $user_data['idUsuario'] = $_POST['idUsuario'];
        }
        if (array_key_exists('nombre', $_POST)) {
            $user_data['nombre'] = $_POST['nombre'];
        }
        if (array_key_exists('contrasena', $_POST)) {
            $user_data['contrasena'] = $_POST['contrasena'];
        }
        if (array_key_exists('correo', $_POST)) {
            $user_data['correo'] = $_POST['correo'];
        }
        if (array_key_exists('sexo', $_POST)) {
            $user_data['sexo'] = $_POST['sexo'];
        }

        if (array_key_exists('fechaNacimiento', $_POST)) {
            $user_data['fechaNacimiento'] = $_POST['fechaNacimiento'];
        }
    } 
    return $user_data;
}




function helper_repartidor_data(){
    $user_data_repartidor = array();
    if ($_POST) {
        if (array_key_exists('idRepartidor', $_POST)) {
            $user_data_repartidor['idRepartidor'] = $_POST['idRepartidor'];
        }
        if (array_key_exists('nombre', $_POST)) {
            $user_data_repartidor['nombre'] = $_POST['nombre'];
        }
        if (array_key_exists('telefono', $_POST)) {
            $user_data_repartidor['telefono'] = $_POST['telefono'];
        }
        if (array_key_exists('correo', $_POST)) {
            $user_data_repartidor['correo'] = $_POST['correo'];
        }
        if (array_key_exists('sexo', $_POST)) {
            $user_data_repartidor['sexo'] = $_POST['sexo'];
        }

        if (array_key_exists('modeloMotocicleta', $_POST)) {
            $user_data_repartidor['modeloMotocicleta'] = $_POST['modeloMotocicleta'];
        }
    } 
    return $user_data_repartidor;
}

handler();

?>