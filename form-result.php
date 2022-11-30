<?php
$name = $_POST['nome'];
$lastname = $_POST['cognome'];
// $lastname_explode= explode('',$lastname);

// $censored = str_replace($lastname, '***', $lastname);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Form Result</title>
</head>
<body>

    <div class="main">
        <div class="container">
            <h1 class="text-capitalize py-5 text-center">
                Ciao <?php echo $name ?> <?php echo str_replace($lastname, '***', $lastname) ?>
            </h1>
            <h2 class="text-capitalize">
                il tuo cognome è lungo <span class="fs-1"><?php echo strlen($lastname) ?></span> lettere
            </h2>
            <p class="w-50 my-3 py-2 px-4">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt laboriosam ipsam perspiciatis doloremque sequi consequuntur odio dolore dolor laudantium accusamus Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad rerum, pariatur ut natus delectus eos consequuntur odio dolor. Iure laboriosam <?php echo $lastname?> consectetur quidem maiores animi impedit? Facilis tempore reprehenderit accusamus veritatis tempora, soluta enim voluptate numquam voluptatum, earum odio atque asperiores aut obcaecati sapiente eum labore dicta, quod minus sint accusantium.
            </p>
        </div>
    </div>
</body>
</html>