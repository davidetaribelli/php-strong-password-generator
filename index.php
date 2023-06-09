<?php
function generatePassword($length)
{
    $chars = 'ABCDEFFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!@#$%^&*()-_=+0123456789';
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        // Seleziono un carattere casuale dalla lista dei caratteri disponibili
        $randomChars = rand(0, strlen($chars));
        // Passo i caratteri selezionati a password
        $password .= $chars[$randomChars];
    }
    return $password;
}

// $lowercase = '';
// $symbols = '';
// $numbers = '';
// $password = '';
if (isset($_GET['length'])) {
    $generatePassword = generatePassword($_GET['length']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generator Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container p-3">
        <div class="row justify-content-center">
            <div class="col-7 bg-primary text-white rounded-3 d-flex flex-column p-3">
                <form action="index.php" method="GET">
                    <p class="w-100 rounded-3 border-3 bg-white text-black"> La tua password è: <?php echo $generatePassword; ?> </p>
                    <br>
                    <label class="my-3" for="length">Scegli la lunghezza:</label>
                    <input type="number" id="length" name="length" min="8" max="15">
                    <br>
                    <button class="border-0 bg-light rounded-3" type="submit">GENERATE</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>