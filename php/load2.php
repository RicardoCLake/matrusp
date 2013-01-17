<?php
//Script para carregar um plano armazenado no servidor. Redireciona para
//o identificador correspondente

if(!$_GET['q']){
        header("HTTP/1.0 404 Not Found");
        exit;
}

$query = preg_replace('/[^\w]/', '', $_GET['q']);

/* Redirect to a different page in the current directory that was requested */
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'data/' . $query . '.txt';
header("Location: http://$host$uri/$extra");
exit;
?>

