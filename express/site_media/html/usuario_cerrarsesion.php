<?php
session_start();
session_destroy();
echo 'Cerraste sesión';
header ("Location: ../logeo/");
?>
