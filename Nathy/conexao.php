<?php

$host    = "localhost";
$usuario = "root";
$senha   = "";
$banco   = "mural";

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro ao conectar: " . mysqli_connect_error());
}

mysqli_set_charset($conexao, "utf8");

$cloud_name = "djuynjhcv";
$api_key    = "183711527228398"; 
$api_secret = "Pade8fOGtd0qKhtXYi_hfBoFsPY"; 

?>