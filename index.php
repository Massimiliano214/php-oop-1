<?php

    class Movie {
        public $name;
        public $score;
        public $length;    
        public $genres;

        public function __construct($name, $score, $length, $producer, array $genres)
        {
            $this->name = $name;
            $this->score = $score;
            $this->length = $length;
            $this->producer = $producer;
            $this->$genres = $genres;

            
            foreach ($genres as $genre) {
                if (!$genre instanceof Genre) {
                    echo 'Ogni genere deve essere una instanza della classe Genre!';
                    die();
                }
            }
            
        }

        public function getInfo() {
            return $this->name . " " . $this->score . " " . $this->length . " " . $this->producer;
        }
        
        public function getGenre() {
            $generi = '';

            foreach($this->genres as $genre) {
                $generi .= $genre->type;
            }

            return $generi;
        }
        
    }
    
    require __DIR__ . '/Genre.php';

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

    var_dump($avengers);

    echo $avengers->getInfo();
    echo $genreAvengers->getGenre();
    ?>
    <br>
    <?php
    echo $avatar->getInfo();
    echo $genreAvatar->getGenre();
    ?>
    <br>
    <?php
    echo $pirates_of_the_caribbean->getInfo();
    echo $genreCaribbean->getGenre();