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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Faire un paiement</title>
    <link rel="stylesheet" href="output.css">
    <link rel="shortcut icon" href="favicon.png">
    <link href="public/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


    <div class="row justify-content-center align-items-center" style="height: 100vh;"">

        <div style=" width: 100vh;">
        <?php if (isset($_SESSION['message'])): ?>
            <div class=" alert alert-<?php echo $_SESSION['message_type']; ?>" role="alert">
                <?php echo $_SESSION['message']; ?>
            </div>
            <?php unset($_SESSION['message']); ?>
        <?php endif; ?>
        <h1 class="text-center fs-2 mb-5">Formulaire de paiement</h1>

        <form id="donators-payment-form" action="traitement-paiement.php" method="post">
            <div class="form-group">
                <input type="hidden" name="_token" value="token">
                <input type="hidden" name="iddonat" id="iddonat" value="<?php echo $_SESSION['iddonat']; ?>">
                <input type="hidden" name="numaid" id="numaid" value="1">
                <input type="hidden" name="motifcontr" id="motifcontr" value="motif">
                <input type="hidden" name="observation" id="observation" value="">
                <input type="hidden" name="datcontribu" id="datcontribu" value="date">
                <input type="hidden" name="heure" id="heure" value="<?php echo date('H:i:s'); ?>">
            </div>
            <div class="form-group mb-4">
                <div class="row">
                    <div class="col-md-6">
                        <label for="type1" class="form-check-label">
                            <input type="radio" class="form-check-input" name="modeparticipat" id="type1" value="credit-card" checked>
                            <img src="https://leadershipmemphis.org/wp-content/uploads/2020/08/780370.png" class="w-50">
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label for="nom" class="form-label">Nom sur la carte</label>
                <input type="text" class="form-control" id="nom" placeholder="Jean Dupont" required>
            </div>
            <div class="form-group mb-4">
                <label for="numero" class="form-label">Numéro de carte</label>
                <input type="text" class="form-control" id="numero" placeholder="0000 0000 0000 0000" required>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="code" class="form-label">Code de sécurité</label>
                        <input type="password" class="form-control" id="code" placeholder="0000" required>
                    </div>
                    <div class="col-md-6">
                        <label for="montant" class="form-label">Montant (US)</label>
                        <input type="text" class="form-control" id="montant" name="montantcontr" placeholder="10, 20, ... 1000000" required>
                    </div>
                </div>
            </div>
            <div class="flex align-items-center">
                <button type="submit" id="btn-submit-second" class="btn btn-primary btn-block mt-5">Valider le paiement</button>
                <a class="mt-5 ms-3" href="donateurs.php">Voir tous les donateurs</a>
            </div>
        </form>
    </div>
</body>

</html>