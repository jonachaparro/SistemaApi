<?php
       $ruta = "../../fotos/";
       opendir($ruta);
       $destino = $ruta.$_FILES['foto']['name'];
       copy($_FILES['foto']['tmp_name'],$destino);
       $nombre=$_FILES['foto']['name'];
        
       header("Location:../addrepartidor/"); 

?>