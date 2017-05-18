<?php

function getAllSpecies(){
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM species";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;
	
	return $query->fetchAll();
}

function getSpecies($species_id){

	$db = openDatabaseConnection();
	$sql = "SELECT * FROM species WHERE species_id = :species_id";
	$query = $db->prepare($sql);
	$query->execute(array(":species_id" => $species_id));

	$db = null;

	return $query->fetch();
}

function createSpecies(){
	$species_description = isset($_POST['species_description']) ? $_POST['species_description'] : null;

	if (strlen($species_description) == 0 && strlen($species_description) == 0 && strlen($species_description) == 0) {
		return false;
    }

	$db = openDatabaseConnection();

	$sql = "INSERT INTO species (species_description) VALUES (:species_description)";
	$query = $db->prepare($sql);
	$query->execute(array( ':species_description' => $species_description));

	$db = null;

	return true;
}

function updateSpecies(){
	$species_description = isset($_POST['species_description']) ? $_POST['species_description'] : null;
	$species_id = isset($_POST['species_id']) ? $_POST['species_id'] : null;

	if (strlen($species_description) == 0 && strlen($species_description) == 0 && strlen($species_description) == 0) {
		return false;
    }

	$db = openDatabaseConnection();
	$sql = "UPDATE species SET species_description = :species_description WHERE species_id = :species_id";
	$query = $db->prepare($sql);
	$query->execute(array(':species_description' => $species_description, ':species_id' => $species_id));

	$db = null;
	
	return true;
}

function deleteSpecies($species_id){
	
	if (!$species_id) {
		return false;
	}
	
	$db = openDatabaseConnection();
	$sql = "DELETE FROM species WHERE species_id = :sepcies_id";
	$query = $db->prepare($sql);
	$query->execute(array(':species_id' => $species_id));

	$db = null;
	
	return true;
}