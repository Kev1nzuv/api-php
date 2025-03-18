<?php
/**
*@file index.php
*@brief API PHP que retorna un missatge de prova en format JSON
*
*@author Kevin Moreno
*@version 1.0
*@package ApiTestUF4
*@return JSON amb el missatge
*/
header('Content-Type: application/json');
echo json_encode(["missatge" => "Hola, api test uf4 m08"]);

?>
