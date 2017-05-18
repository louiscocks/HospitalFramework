<?php

require(ROOT . "model/ClientModel.php");

function index(){

$clients = getAllClients();

render('clients/front', array('clients' => $clients));

}


function edit($client_id){

	render("clients/edit", array('clients' => getClient($client_id)));

}

function updateSave(){

	if (!updateClient()){
	    header("Location:" . URL . "error/index");
	    exit();
    }

	header("Location:" . URL . "clients/index");
}

function create(){

render("clients/create");

}

function createSave(){

    if (!createClient()){
	    header("Location:" . URL . "error/index");
	    exit();
    }

    header("Location:" . URL . "clients/index");
}

function delete($client_id){

    if (!deleteClient($client_id)){
	    header("Location:" . URL . "error/index");
	    exit();
    }

    header("Location:" . URL . "clients/index");


}