<?php

include 'config.php';
include 'autoload.php';
include 'rotas.php';


$cidades = ['Jaú','Bariri','Itapui','Dois Corregos'];
 
//var_dump($cidades); 

use APICEP\Controller;

include 'Controller/Controller.php';

\APICEP\Controller\Controller::getResponseAsJSON($cidades);

?>



