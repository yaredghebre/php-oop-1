<?php

require_once __DIR__ . "/Models/Movie.php";
require_once __DIR__ . "/db.php";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/styles.css">
    <title>OOP-1</title>
</head>
<body>
    <div class="container my-5">
        <h1 class="text-warning">La mia watchlist:</h1>

        <?php foreach ($movies as $movie) { ?>
            <div class="card my-3 w-50">
                <div class="card-body bg-info">
                    <h4 class="card-title"><?php echo $movie->title; ?></h4>
                    <p class="card-text"><span class="fw-bold">Regista:</span> <?php echo $movie->director; ?></p>
                    <p class="card-text"><span class="fw-bold">Anno:</span> <?php echo $movie->year; ?></p>
                    <p class="card-text"><span class="fw-bold">Generi:</span> <?php echo implode(", ", $movie->genres); ?></p>
                </div>
            </div>
        <?php } ?>

    </div>



</body>
</html>
