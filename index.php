<?php

    class Movie {
        public $name;
        public $score;
        public $length;
        public $producers;

        public function __construct($name, $score, $length, $producer)
        {
            $this->name = $name;
            $this->score = $score;
            $this->length = $length;
            $this->producer = $producer;
        }

        public function getInfo() {
            return $this->name . " " . $this->score . " " . $this->length . " " . $this->producer;
        }
        
        
    }
    /*
    require __DIR__ . '/Producer.php';

    $genre = [
        new Genre(),
        new Genre(),
        new Genre()
    ];
    */
    $avengers = new Movie('Avengers', 3.5, '3 hours', 'Marvel Studios');

    $avatar = new Movie('Avatar', 4.5, '2.5 hours', 'James Cameron');

    $pirates_of_the_caribbean = new Movie('Pirates of the Caribbean', 5, '1.5 hours', 'Jerry Bruckheimer');

    var_dump($avengers);

    echo $avengers->getInfo();
    ?>
    <br>
    <?php
    echo $avatar->getInfo();
    ?>
    <br>
    <?php
    echo $pirates_of_the_caribbean->getInfo();