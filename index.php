<?php
include './functions.php';
if (isset($_GET['length'])) {
    $repetition = $_GET['repetition'];
    $upperChars = $_GET['upperCase'];
    $lowerChars = $_GET['lowerCase'];
    $numbersChars = $_GET['numbers'];
    $symbolsChars = $_GET['symbols'];

    $generatePassword = generatePassword($_GET['length'], $repetition, $upperChars, $lowerChars, $numbersChars, $symbolsChars);
    
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
                    <input type="number" id="length" name="length" min="8" max="32" value="10">
                    <br>
                    <label for="repetition">Consenti ripetizioni di caratteri</label>
                    <select name="repetition" id="repetition" class="form-select">
                        <option selected value="1">Si</option>
                        <option value="0">No</option>
                    </select>
                    <br>
                    <label for="upperCase">Lettere maiuscole:</label>
                    <input type="checkbox" id="upperCase" name="upperCase" value="1" checked>
                    <br>
                    <label for="lowerCase">Lettere minuscole:</label>
                    <input type="checkbox" id="lowerCase" name="lowerCase" value="1" checked>
                    <br>
                    <label for="numbers">Numeri:</label>
                    <input type="checkbox" id="numbers" name="numbers" value="1">
                    <br>
                    <label for="symbols">Simboli:</label>
                    <input type="checkbox" id="symbols" name="symbols" value="1">
                    <br>
                    <button class="border-0 bg-light rounded-3" type="submit">GENERATE</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>