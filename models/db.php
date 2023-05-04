<?php

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