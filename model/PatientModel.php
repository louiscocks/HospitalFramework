<?php

function getAllPatients(){
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM patients";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;
	
	return $query->fetchAll();
}

function getPatient($patient_id){

	$db = openDatabaseConnection();
	$sql = "SELECT * FROM patients WHERE patient_id = :patient_id";
	$query = $db->prepare($sql);
	$query->execute(array(":patient_id" => $patient_id));

	$db = null;

	return $query->fetch();
}

function createPatient(){
	$patient_name = isset($_POST['patient_name']) ? $_POST['patient_name'] : null;
	$species_description = isset($_POST['species_description']) ? $_POST['species_description'] : null;
	$client_firstname = isset($_POST['client_firstname']) ? $_POST['client_firstname'] : null;
	$client_lastname = isset($_POST['client_lastname']) ? $_POST['client_lastname'] : null;
	$patient_status = isset($_POST['patient_status']) ? $_POST['patient_status'] : null;

	if (strlen($patient_name) == 0 && strlen($species_description) == 0 && strlen($client_firstname) == 0 && strlen($client_lastname) == 0 && strlen($patient_status) == 0) {
		return false;
    }

	$db = openDatabaseConnection();

	$sql = "INSERT INTO patients (patient_name, species_description, client_firstname, client_lastname, patient_status) VALUES (:patient_name, :species_description, :client_firstname, :client_lastname, :patient_status)";
	$query = $db->prepare($sql);
	$query->execute(array( ':patient_name' => $patient_name, ':species_description' => $species_description, ':client_firstname' => $client_firstname, ':client_lastname' => $client_lastname, ':patient_status' => $patient_status));

	$db = null;

	return true;
}

function updatePatient(){
	$patient_name = isset($_POST['patient_name']) ? $_POST['patient_name'] : null;
	$species_description = isset($_POST['species_description']) ? $_POST['species_description'] : null;
	$client_firstname = isset($_POST['client_firstname']) ? $_POST['client_firstname'] : null;
	$client_lastname = isset($_POST['client_lastname']) ? $_POST['client_lastname'] : null;
	$patient_status = isset($_POST['patient_status']) ? $_POST['patient_status'] : null;
	$patient_id = isset($_POST['patient_id']) ? $_POST['patient_id'] : null;

	if (strlen($patient_name) == 0 && strlen($species_description) == 0 && strlen($client_firstname) == 0 && strlen($client_lastname) == 0 && strlen($patient_status) == 0) {
		return false;
    }

	$db = openDatabaseConnection();
	$sql = "UPDATE patients SET patient_name = :patient_name, species_description = :species_description, client_firstname = :client_firstname, client_lastname = :client_lastname, patient_status = :patient_status WHERE patient_id = :patient_id";
	$query = $db->prepare($sql);
	$query->execute(array(':patient_name' => $patient_name,':species_description' => $species_description, 'client_firstname' => $client_firstname, 'client_lastname' => $client_lastname, ':patient_status' => $patient_status, ':patient_id' => $patient_id));

	$db = null;
	
	return true;
}

function deletePatient($patient_id){
	
	if (!$patient_id) {
		return false;
	}
	
	$db = openDatabaseConnection();
	$sql = "DELETE FROM patients WHERE patient_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(':patient_id' => $patient_id));

	$db = null;
	
	return true;
}