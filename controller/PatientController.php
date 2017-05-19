<?php

require(ROOT . "model/PatientModel.php");

function index(){

$patients = getAllPatients();

render('patients/front', array('patients' => $patients));

}


function edit($patient_id){

	render("patients/edit", array('patients' => getPatient($patient_id)));

}

function updateSave(){

	if (!updatePatient()){
	    header("Location:" . URL . "error/index");
	    exit();
    } 
    else {
    	header("Location:" . URL . "patient/index");
    }
}

function create(){

render("patients/create");

}

function createSave(){

    if (!createPatient()){
	    header("Location:" . URL . "error/index");
	    exit();
    }
    else {
    	header("Location:" . URL . "patient/index");

    }
}

function delete($patient_id){

    if (!deletePatient($patient_id)){
	    header("Location:" . URL . "error/index");
	    exit();
    }
    else {
        header("Location:" . URL . "patient/index");

    }
}