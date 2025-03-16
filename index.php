<?php
/**
*@file index.php
*@brief API PHP que retorna un missatge de prova en format JSON
*
*@return JSON amb el missatge
*/
header('Content-Type: application/json');
echo json_encode(["missatge" => "Hola, api test uf4 m08"]);

?>
