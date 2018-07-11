<?php 

require_once 'controllers/ClientController.php';

if(isset($_GET['index'])){
	$client = new ClientController();
	$instanceClient = $client->Index();
	require_once 'views/Client/index.phtml';
}else if(isset($_GET['create'])){
	require_once 'views/Client/create.phtml';
}