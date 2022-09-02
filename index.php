<?php 

    class Movie {
        private ?string $name;
        private ?string $producer;
        private ?int $year;
        private ?array $genres = [];

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

        public function getGenres() {
            return $this->genres;
        }

        public function addGenre($genre) {
            $this->genres[] = $genre;
        }

    };

    $movies = [];

    $harryPotter = new Movie("Harry Potter", "J.K. Rowling", 1997);
    $harryPotter->addGenre("Fantasy");
    $harryPotter->addGenre("Adventure");

    $rockyBalboa = new Movie("Rocky Balboa", "John G. Avildsen", 1976);
    $rockyBalboa->addGenre("Sport");
    $rockyBalboa->addGenre("Drama");

    $hungerGames = new Movie("Hunger Games", "Gary Ross", 2012);
    $hungerGames->addGenre("Adventure");
    $hungerGames->addGenre("Action");
    $hungerGames->addGenre("Drama");

    array_push($movies, $harryPotter, $rockyBalboa, $hungerGames);

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

    <h1>Films:</h1>
    <ol>
        <?php foreach ($movies as $movie) { ?>
            <li>
                <?php echo "Name: " . $movie->getName() . " - " . "Produced by: " . $movie->getProducer() . " in the year " . $movie->getYear() ?>
                <br> Genres: 
                <ul>
                    <?php foreach ($movie->getGenres() as $genre) { ?>
                        
                        <li>
                            <?php echo $genre ?>
                        </li>
                        
                    <?php } ?>
                </ul>
            </li>
            <br>
        <?php }?>
    </ol>
    <?php 
    
    ?>
</body>
</html>