<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Php-badwords</title>
</head>
<body>
    <?php 
    // DICHIARO LA VARIABILE
    // $nome = $_GET['name'] . ' ' . $_GET['lastname'];
    ?>

    <div class="container py-5 m-auto">
    <form action="./form-result.php" method="POST">
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="First name" name="nome">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="cognome">
            </div>
            <div class="col">
                <button type='submit' class="btn btn-outline-primary" reset="input">INVIA</button>
            </div>
        </div>
    </form>
    </div>
            
</body>
</html>