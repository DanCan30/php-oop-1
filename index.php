<?php 

    class Movie {
        private ?string $name;
        private ?string $producer;
        private ?int $year;
        private ?array $genre = [];

        function __construct($_name, $_producer, $_year)
        {
            $this->setName($_name);
            $this->setProducer($_producer);
            $this->setYear($_year);
        }

        public function getName() {
            return $this->name;
        }

        private function setName($name) {
            $this->name = $name;
        }

        public function getProducer() {
            return $this->producer;
        }
        private function setProducer($producer) {
            $this->producer = $producer;
        }

        public function getYear() {
            return $this->year;
        }
        private function setYear($year) {
            $this->year = $year;
        }

        public function setGenre($genre) {
            $this->genre[] = $genre;
        }

    };

    $movies = [];

    $harryPotter = new Movie("Harry Potter", "J.K. Rowling", 1997);
    $harryPotter->setGenre("Fantasy");
    $harryPotter->setGenre("Adventure");

    $rockyBalboa = new Movie("Rocky Balboa", "John G. Avildsen", 1976);
    $rockyBalboa->setGenre("Sport");
    $rockyBalboa->setGenre("Drama");

    $hungerGames = new Movie("Hunger Games", "Gary Ross", 2012);
    $hungerGames->setGenre("Adventure");
    $hungerGames->setGenre("Action");
    $hungerGames->setGenre("Drama");

    array_push($movies, $harryPotter, $rockyBalboa, $hungerGames);
    var_dump($movies);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php OOP</title>
</head>
<body>
    
</body>
</html>