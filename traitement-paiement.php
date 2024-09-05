<?php
session_start();
require_once 'database.php'; // Include the database connection file

$db = new Database();
$conn = $db->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $iddonat = $_POST['iddonat'];
    $numaid = $_POST['numaid'];
    $motifcontr = $_POST['motifcontr'];
    $observation = $_POST['observation'];
    $datcontribu = date('Y-m-d');
    $heure = $_POST['heure'];   
    $modeparticipat = $_POST['modeparticipat'];
    $montantcontr = $_POST['montantcontr'];

    // Insert the data into the participers table
    $query = "INSERT INTO participers (iddonat, numaid, motifcontr, observation, datcontribu, heure, modeparticipat, montantcontr) 
               VALUES (:iddonat, :numaid, :motifcontr, :observation, :datcontribu, :heure, :modeparticipat, :montantcontr)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":iddonat", $iddonat);
    $stmt->bindParam(":numaid", $numaid);
    $stmt->bindParam(":motifcontr", $motifcontr);
    $stmt->bindParam(":observation", $observation);
    $stmt->bindParam(":datcontribu", $datcontribu);
    $stmt->bindParam(":heure", $heure);
    $stmt->bindParam(":modeparticipat", $modeparticipat);
    $stmt->bindParam(":montantcontr", $montantcontr);
    $stmt->execute();
    if ($stmt->execute()) {
        $_SESSION['message'] = 'Paiement effectué avec succès ! Merci beaucoup pour votre aide.';
        $_SESSION['message_type'] = 'success';
    } else {
        $_SESSION['message'] = 'Erreur lors de l\'envoi de l\'argent. Nous nous excusons du désagrément.';
        $_SESSION['message_type'] = 'danger';
    }

    // Redirect the user to a success page or display a success message
    header("Location: index.php");
    exit;
}
