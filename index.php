<?php
// creo la classe movie con le proprietà che dovrà avere ogni oggetto
class Movie {
    public $title;
    public $director;
    public $year;
    // Bonus 1:
    // Modificare la classe Movie in modo che accetti piú di un genere.
    public $genres;

// aggiungo una funzione costruttore per "montare" l'oggetto con le proprietà
    function __construct($_title, $_director, $_year, $genres) {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->genres = $genres;
    }

    public function getMovieDetails() {
        // la funzione implode converte l'array in una stringa e viene separato dalla virgola
        $genres = implode(", ", $this->genres);
        return '<strong>Titolo: </strong>' . $this->title . '<br>' .
       '<strong>Diretto da: </strong>' . $this->director . '<br>' .
       '<strong>Uscito nel: </strong>' . $this->year . '<br>' .
       '<strong>Generi: </strong>' . $genres;
    }
}

// aggiungo qui i film
$movie1 = new Movie("Harry Potter e la pietra filosofale", "Chris Columbus", 2001, ["Fantasy", "Avventura", "Famiglia"]);
$movie2 = new Movie("Harry Potter e la camera dei segreti", "Chris Columbus", 2002, ["Fantasy", "Avventura", "Famiglia"]);
$movie3 = new Movie("Harry Potter e il prigioniero di Azkaban", "Alfonso Cuarón", 2004, ["Fantasy", "Avventura", "Mistero"]);
$movie4 = new Movie("Harry Potter e il calice di fuoco", "Mike Newell", 2005, ["Fantasy", "Avventura", "Azione"]);
$movie5 = new Movie("Harry Potter e l'Ordine della Fenice", "David Yates", 2007, ["Fantasy", "Avventura", "Azione", "Drammatico"]);
$movie6 = new Movie("Harry Potter e il principe mezzosangue", "David Yates", 2009, ["Fantasy", "Avventura", "Mistero", "Romance"]);
$movie7 = new Movie("Harry Potter e i doni della morte - Parte 1", "David Yates", 2010, ["Fantasy", "Avventura", "Azione", "Drammatico"]);
$movie8 = new Movie("Harry Potter e i doni della morte - Parte 2", "David Yates", 2011, ["Fantasy", "Avventura", "Azione", "Drammatico"]);


// creo un array di oggetti film
$movies = [
    $movie1,
    $movie2,
    $movie3,
    $movie4,
    $movie5,
    $movie6,
    $movie7,
    $movie8,
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
            <h1 class="col-12 text-center">PHP-oop-1</h1>
            <h2 class="mb-5 px-4">Film Harry Potter</h2>
            <ul class="col d-flex flex-wrap list-unstyled row-gap-3 ">
            <?php
            foreach($movies as $movie) {
                echo '<li class="col-12 col-md-6 col-lg-3 px-3">' . $movie->getMovieDetails() . '</li>';
            }
            ?>
            </ul>
        </div>
    </div>


    <!-- link bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>