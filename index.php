<?php

require_once("config.php");

$clarice = new Usuario();

$clarice->loadbyId(2);

echo $clarice;

?>