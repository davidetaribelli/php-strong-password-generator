<?php
include './functions.php';
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
                    <?php
                        session_start();
                        $_SESSION["password"] = $generatePassword;
                    ?>
                    <a class="text-white" href="password.php">Clicca qui per Password</a>
                    <br>
                    <label class="my-3" for="length">Scegli la lunghezza:</label>
                    <input type="number" id="length" name="length" min="8" max="15">
                    <br>
                    <label for="upperCase">Lettere maiuscole:</label>
                    <input type="checkbox" id="upperCase" name="upperCase">
                    <br>
                    <label for="smallCase">Lettere minuscole:</label>
                    <input type="checkbox" id="smallCase" name="smallCase">
                    <br>
                    <label for="numbers">Numeri:</label>
                    <input type="checkbox" id="numbers" name="numbers">
                    <br>
                    <label for="symbols">Simboli:</label>
                    <input type="checkbox" id="symbols" name="symbols">
                    <br>
                    <button class="border-0 bg-light rounded-3" type="submit">GENERATE</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>