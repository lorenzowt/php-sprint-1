<?php

    require_once "Cinema.php";
    require_once "Movie.php";

    $cinemas = [

    new Cinema("Cinesa Diagonal", "Barcelona"),

    new Cinema("Yelmo", "Madrid"),

    new Cinema("Phenomena", "Barcelona")

    ];

    $movies = [
    new Movie("Inception", 148, "Christopher Nolan"),
    new Movie("Pulp Fiction", 154, "Quentin Tarantino"),
    new Movie("Kill Bill Vol. 1", 111, "Quentin Tarantino"),
    new Movie("The Godfather", 175, "Francis Ford Coppola"),
    new Movie("Fight Club", 139, "David Fincher"),
    new Movie("Pulp Fiction", 154, "Quentin Tarantino"),
    new Movie("The Shawshank Redemption", 142, "Frank Darabont"),
    new Movie("The Social Network", 120, "David Fincher"),
    new Movie("Gladiator", 155, "Ridley Scott"),
    new Movie("Interstellar", 169, "Christopher Nolan"),
    new Movie("Titanic", 195, "James Cameron")
    ];

    function assignMoviesRandom(array $cinemas, array $movies) {
        $numbers = (range(0, count($movies) - 1));
        shuffle($numbers);
        $cinemaIndex = 0;

        foreach ($numbers as $number) {
            if ($cinemaIndex > 2) $cinemaIndex = 0;
            $cinemas[$cinemaIndex]->addMovie($movies[$number]);
            $cinemaIndex++;
        }
    }

    function showMoviesPerCinema(array $cinemas) {
        foreach($cinemas as $cinema){
            echo "\n" . $cinema->showMovieCatalogue() . "\n";
        }
    }

    function showLongestMoviePerCinema(array $cinemas) {
        foreach($cinemas as $cinema) {
            echo "\nLongest movie in " . $cinema->getName() . " : " . $cinema->getLongestMovie() . "\n";
        }
    }

    function showMovieByDirector(array $cinemas, string $director) {
        
        $listOfMatches = [];
        foreach ($cinemas as $cinema) {
            $listOfMatches= array_merge($listOfMatches, $cinema->getMovieByDirector($director));
        }


        $listOfUniqueMatches = [];
        foreach ($listOfMatches as $cinema => $movie) {
            $uniqueMovieTitle = true;
            if (count($listOfUniqueMatches) === 0 ) {
                $listOfUniqueMatches[$cinema] = $movie;
                continue;
            }
            foreach($listOfUniqueMatches as $uniqueMovie) {
                if ($uniqueMovie->getTitle() === $movie->getTitle()) {
                    $uniqueMovieTitle = false;
                    continue;
                }
            }
            if($uniqueMovieTitle) {
                $listOfUniqueMatches[$cinema] = $movie;
            }
        }
        echo "\nMovies by $director:";
        foreach ($listOfUniqueMatches as $movie) {
            echo $movie;
            }

    }

    assignMoviesRandom($cinemas, $movies);
    foreach ($cinemas as $cinema) {
        $cinema->addMovie($movies[1]);
    }
    showMoviesPerCinema($cinemas);
    showLongestMoviePerCinema($cinemas);
    showMovieByDirector($cinemas, "Quentin Tarantino");


?>