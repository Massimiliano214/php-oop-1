<?php

    
    require __DIR__ . '/Models/Movie.php';
    require __DIR__ . '/Models/Genre.php';

    $genreAvengers = [
        new Genre('SuperHeros'),
        new Genre('Action'),
        new Genre('Fighter')
    ];

    $avengers = new Movie('Avengers', 3.5, '3 hours', 'Marvel Studios', $genreAvengers);

    $genreAvatar = [
        new Genre('Exploration'),
        new Genre('Research'),
        new Genre('Simulator')
    ];

    $avatar = new Movie('Avatar', 4.5, '2.5 hours', 'James Cameron', $genreAvatar);

    $genreCaribbean = [
        new Genre('Pirates'),
        new Genre('Journey'),
        new Genre('Research')
    ];

    $pirates_of_the_caribbean = new Movie('Pirates of the Caribbean', 5, '1.5 hours', 'Jerry Bruckheimer', $genreCaribbean);

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Film List</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="tyle.css">
    </head>
    <body class="bg-dark">
        <main>
            <div class="container-fluid">

                <div class="container py-5 text-center">
                
                    <div class="py-5 fs-2 ">
                        <div class="fs-1 text-info-emphasis">
                            <?php
                                echo $avengers->getInfo();
                            ?>
                        <div>
                        
                        <div class="fs-3 text-warning">
                            <?php
                                echo $avengers->getGenre();
                            ?>
                        <div>
                    </div>
    
                    <div class="py-5 fs-2 ">
                        <div class="fs-1 text-success">
                            <?php
                                echo $avatar->getInfo();
                            ?>
                        <div>
                        
                        <div class="fs-3 text-primary">
                            <?php
                                echo $avatar->getGenre();
                            ?>
                        <div>
                    </div>
    
                    <div class="py-5 fs-2 ">
                        <div class="fs-1 text-warning">
                            <?php
                                echo $pirates_of_the_caribbean->getInfo();
                            ?>
                        <div>
                        
                        <div class="fs-3 text-danger">
                            <?php
                                echo $pirates_of_the_caribbean->getGenre();
                            ?>
                        <div>
                    </div>
                </div>
            </div>
        </main>
    </body>
    </html>

    