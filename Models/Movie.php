<?php

class Movie
{

    // Dichiarazione VARIABILI D'ISTANZA
    public $title;
    public $director;
    public $year;
    public $genres;
    public $country;
    public $rating;

    // COSTRUTTORE con i primi 4 campi 
    function __construct($_title, $_director, $_year, $_genres)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->genres = $_genres;
    }

    // METODO per stammpare i dettagli del film
    public function printMovieDetails()
    {
        echo "TITOLO: " . $this->title . "<br>";
        echo "REGISTA: " . $this->director . "<br>";
        echo "ANNO: " . $this->year . "<br>";

        // IMPLODE per inserire più generi (concatena elementi ARRAY)
        echo "GENERI: " . implode(", ", $this->genres)  . "<br>";
    }
}
