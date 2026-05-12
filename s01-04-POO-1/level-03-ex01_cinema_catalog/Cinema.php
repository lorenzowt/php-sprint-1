<?php

require_once "Movie.php";

class Cinema{
    private $name;
    private $location;
    private $movieCatalogue = [];
    
    public function __construct(string $name, string $location) {
        $this->name = $name;
        $this->location = $location;
    }

    public function getName(): string {
        return $this->name;
    }

    public function showMovieCatalogue(): string {
        $cinemaInfo = $this->name . " Movie Catalogue:\n";
        foreach($this->movieCatalogue as $movie) {
            $cinemaInfo .= $movie;
        }
        return $cinemaInfo;
    }

    public function addMovie(Movie $movie) {
        $this->movieCatalogue[] = $movie;
    }

    public function getLongestMovie(): movie {
        $maxLength = $this->movieCatalogue[0]->getLength();
        $longestMovie = $this->movieCatalogue[0];

        foreach($this->movieCatalogue as $movie) {
            if ($movie->getLength() > $maxLength) {
                $maxLength = $movie->getLength();
                $longestMovie = $movie;
            }
        }
        return $longestMovie;
    }

    public function getMovieByDirector(string $director): array {
        $listOfMatches = [];
        foreach ($this->movieCatalogue as $movie) {
            if ($movie->getDirector() === $director) {
                $listOfMatches[] = $movie;
            }
        }
        return $listOfMatches;
    }

}