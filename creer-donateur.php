<?php
// Create a PHP session to store data
session_start();

// Define the CSRF token
$csrf_token = bin2hex(random_bytes(32));

// Store the CSRF token in the session
$_SESSION['csrf_token'] = $csrf_token;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faire une donation</title>
    <link rel="stylesheet" href="output.css">
    <style>
        @import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="row justify-content-center align-items-center" style="height: 100vh;">
        <div style="width: 100vh;">
            <h1 class="text-center fs-2 mb-5">Informations personnelles du donateur</h1>
            <form action="traitement-infos.php" method="post">
                <!-- Noms Donat input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="nomsdonat">Noms</label>
                    <input type="text" id="nomsdonat" name="nomsdonat" class="form-control" required />
                </div>

                <!-- Adresse input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="adresse">Adresse</label>
                    <input type="text" id="adresse" name="adresse" class="form-control" />
                </div>

                <!-- Telephone input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="telephone">Telephone</label>
                    <input type="tel" id="telephone" name="telephone" class="form-control" required />
                </div>

                <!-- Profession input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="profession">Profession</label>
                    <input type="text" id="profession" name="profess" class="form-control" required />
                </div>

                <!-- Submit button -->
                <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Enregistrer</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="node_modules/flowbite/dist/flowbite.min.js"></script>



    <!-- Counter Up CDN JS -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

    <!-- Main application script -->
    <script src="public/js/main.js"></script>

</body>

</html>