<?php

require(ROOT . "model/SpeciesModel.php");

function index(){

$species = getAllSpecies();

render('species/front', array('species' => $species));

}


function edit($species_id){

	render("species/edit", array('species' => getSpecies($species_id)));

}

function updateSave(){

	if (!updateSpecies()){
	    header("Location:" . URL . "error/index");
	    exit();
    }

	header("Location:" . URL . "species/index");
}

function create(){

render("species/create");

}

function createSave(){

    if (!createSpecies()){
	    header("Location:" . URL . "error/index");
	    exit();
    }

    header("Location:" . URL . "species/index");
}

function delete($species_id){

    if (!deleteSpecies($species_id)){
	    header("Location:" . URL . "error/index");
	    exit();
    }

    header("Location:" . URL . "species/index");


}