<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


</head>
<body>
<h2 class = "centro">Registro de Usuarios</h2>

<div class = "general">
<form name="nombre_formulario" method="POST" action="/api.peopleapp.com/express/usuarios/adduser/">
    
    <fieldset>
           
            <div>
                <input type="text" name="nombre" placeholder="Nombre">
            </div>
            <div>
                <input type="password" name="contrasena" placeholder="Contraseña"/>
            </div>
            <div>
                <input type="email" name="correo" placeholder="Correo"/>
            </div>
            <div>
                <input type="text" name="sexo" placeholder="Sexo"/>
            </div>
           
            <div>
                <input type="text" name="fechaNacimiento" placeholder="Fecha de nacimiento"/>
            </div>
            <input type="submit" name="submit" value="Guardar"/>
        </fieldset>  
   
</form>    
</body>
</html>