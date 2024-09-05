<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chapelle des Vainqueurs</title>
    <link rel="stylesheet" href="output.css">
    <link rel="shortcut icon" href="favicon.png">
    <link href="public/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php if (isset($_SESSION['message'])): ?>
        <div class="alert alert-<?php echo $_SESSION['message_type']; ?>" role="alert">
            <?php echo $_SESSION['message']; ?>
        </div>
        <?php unset($_SESSION['message']); ?>
    <?php endif; ?>
<div class="row justify-content-center align-items-center" style="height: 100vh;">
        <div class="card text-center col-md-6 col-12 mb-4 mb-md-0">
            <div class="card-header text-uppercase text-center fs-1 fw-bold mb-4">
                Aide sociale
            </div>
            <div class="card-body">
                <h5 class="card-title fs-2">Faire une donation</h5>
                <p class="card-text fs-3">Ensemble, venons en aide avec amour à ceux qui sont dans le besoin.</p>
                <div class="d-grid gap-3">
                    <a href="./creer-donateur.php?type=orphelins" class="btn btn-primary p-2 fs-5">Aide aux orphelins</a>
                    <a href="./creer-donateur.php?type=demunis" class="btn btn-primary p-2 fs-5">Soutien aux démunis</a>
                    <a href="./creer-donateur.php?type=refugies" class="btn btn-primary p-2 fs-5">Aide aux réfugiés</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12">
            <img src="./-170927-aide-social.png" alt="Illustration de l'aide sociale" class="img-fluid rounded">
        </div>
    </div>
    <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
    <script src="public/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>