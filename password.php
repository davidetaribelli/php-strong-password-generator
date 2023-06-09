<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <?php
    session_start();
    $_SESSION["password"];
    ?>

    <div class="container py-5 bg-success">
        <div class="row">
            <div class="col-12">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Passord Generata</h5>
                        <p class="w-100 rounded-3 border-3 bg-white text-black"> La tua password è: <?php echo $_SESSION["password"] ?> </p>
                        <a class="text-black" href="index.php">Torna alla pagina precedente</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>