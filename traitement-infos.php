<?php
session_start();
// Include the database configuration file
require_once 'database.php';

// Create a new instance of the Database class
$db = new Database();

// Get the connection to the database
$conn = $db->getConnection();

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $nomsdonat = $_POST["nomsdonat"];
    $adresse = $_POST["adresse"];
    $telephone = $_POST["telephone"];
    $profession = $_POST["profess"];

    // Check if the donator already exists
    $query = "SELECT iddonat FROM donateurs WHERE nomsdonat = :noms";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":noms", $nomsdonat);
    $stmt->execute();
    $existingDonator = $stmt->fetch();

    if (!$existingDonator) {
        // Insert the data into the donateurs table
        $query = "INSERT INTO donateurs (nomsdonat, adresse, telephone, profess) VALUES (:noms, :adresse, :telephone, :profess)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":noms", $nomsdonat);
        $stmt->bindParam(":adresse", $adresse);
        $stmt->bindParam(":telephone", $telephone);
        $stmt->bindParam(":profess", $profession);
        $stmt->execute();
        $iddonat = $conn->lastInsertId();
        $_SESSION['iddonat'] = $iddonat;
        $_SESSION['message'] = 'Donateur enregistré avec succès !';
        $_SESSION['message_type'] = 'success';
    } else {
        // Donator already exists, use the existing ID
        $_SESSION['iddonat'] = $existingDonator['iddonat'];
        $_SESSION['message'] = 'Ce donateur existe déjà, nul besoin de l\'enregistrer à nouveau, faites votre don s\'il vous plait.';
        $_SESSION['message_type'] = 'info';
    }

    // Redirect the user to the paiement.php page
    header("Location: paiement.php");
    exit;
} else {
    // If the form hasn't been submitted, redirect the user back to the form page
    header("Location: index.php"); // assuming the form is on index.php
    exit;
}
