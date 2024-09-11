<?php
// Create a PHP session to store data
session_start();

require_once 'database.php';

$db = new Database();
$connexion = $db->getConnection();

$query = "
    SELECT p.*, d.nomsdonat AS nom_donateur
    FROM participers p
    JOIN donateurs d ON p.iddonat = d.iddonat
    ORDER BY p.id DESC";
$participers = $connexion->query($query)->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des paiements</title>
    <link rel="stylesheet" href="output.css">
    <link rel="shortcut icon" href="favicon.png">
    <link href="public/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="">
    <div>
        <h1 class="text-center">Liste des paiements</h1>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date de paiement</th>
                    <th scope="col">Heure</th>
                    <th scope="col">Montant</th>
                    <th scope="col">Donateur</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($participers)) : ?>
                    <?php $i = 0; ?>
                    <?php foreach ($participers as $key => $participer) : ?>
                        <tr>
                            <?php $key++; ?>
                            <th scope="row"><?= $key++; ?></th>
                            <td><?= $participer['datcontribu'] ?></td>
                            <td><?= $participer['heure'] ?></td>
                            <td><?= $participer['montantcontr'] ?></td>
                            <td><?= $participer['nom_donateur'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <div class="container my-4 p-4">
        <a href="index.php">Retourner à la page d'accueil</a>
    </div>
</body>