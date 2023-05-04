<?php

    class Movie {
        public $name;
        public $score;
        public $length;
        public $autor;

        public function __construct($name, $score, $length, $autor)
        {
            $this->name = $name;
            $this->score = $score;
            $this->length = $length;
            $this->autor = $autor;
        }
    }

    $avengers = new Movie('Avengers', 3.5, '3 hours', 'Marvel Studios');

    var_dump($avengers);