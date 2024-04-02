<?php
// creo la classe movie con le proprietà che dovrà avere ogni oggetto
class Movie {
    public $title;
    public $director;
    public $year;

// aggiungo una funzione costruttore per "montare" l'oggetto con le proprietà
    function __construct($_title, $_director, $_year) {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
    }

    public function getMovieDetails() {
        return $this->title . ', diretto da ' . $this->director . ', uscito nel ' . $this->year;
    }
}

// aggiungo qui i film
$movie1 = new Movie("Harry Potter e la pietra filosofale", "Chris Columbus", 2001);
$movie2 = new Movie("Harry Potter e la camera dei segreti", "Chris Columbus", 2002);

// creo un array di oggetti film
$movies = [
    $movie1,
    $movie2
];



?>

<!DOCTYPE html>
<html lang="it" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-oop-1</title>
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    
    <div class="container">
        <div class="row my-5">
            <h1 class="col-12">PHP-oop-1</h1>
            <ul class="col">
            <?php
            foreach($movies as $movie) {
                echo "<li>" . $movie->getMovieDetails() . "</li>";
            }
            ?>
            </ul>
        </div>
    </div>


    <!-- link bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>