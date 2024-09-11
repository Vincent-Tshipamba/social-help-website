<?php
// Create a PHP session to store data
session_start();

require_once 'database.php' ;

$db = new Database();
$connexion = $db->getConnection();

$query = "SELECT * FROM donateurs ORDER BY iddonat DESC";
$donateurs = $connexion->query($query)->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des donateurs</title>
    <link rel="stylesheet" href="output.css">
    <link rel="shortcut icon" href="favicon.png">
    <link href="public/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="">
    <div>
        <h1 class="text-center">Liste des donateurs enregistrés</h1>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Noms</th>
                    <th scope="col">Téléphone</th>
                    <th scope="col">Profession</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($donateurs)) : ?>
                    <?php $i = 0; ?>
                    <?php foreach($donateurs as $key => $donateur) : ?>
                        <tr>
                            <?php $key++; ?>
                            <th scope="row"><?= $key++; ?></th>
                            <td><?= $donateur['nomsdonat'] ?></td>
                            <td><?= $donateur['telephone'] ?></td>
                            <td><?= $donateur['profess'] ?></td>
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