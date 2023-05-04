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
        $this->genres = $genres;

        
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
            $generi .= ' ' . $genre->type . ', ';
        }

        return $generi;
    }
    
}

