<?php
$movies = [
    [
        'img' => 'https://m.media-amazon.com/images/M/MV5BNGVjNWI4ZGUtNzE0MS00YTJmLWE0ZDctN2ZiYTk2YmI3NTYyXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg',
        'name' => 'Joker',
        'director' => 'Todd Phillips',
        'year' => '2019',
        'genres' => [
            'comedy',
            'thriller',
        ],
        'actors' => [
            'Joaquin Phoenix',
            'Robert De Niro',
            'Zazie Beetz',
        ]
    ],
    [
        'img' => 'https://upload.wikimedia.org/wikipedia/en/thumb/3/39/Borat_ver2.jpg/220px-Borat_ver2.jpg',
        'name' => 'Borat',
        'director' => 'Larry Charles',
        'year' => '2006',
        'genres' => [
            'comedy',
            'nesamonation',
        ],
        'actors' => [
            'Sacha Baron Cohen',
            'Ken Davitian',
            'Luenell',
        ],
    ],
    [
        'img' => 'https://m.media-amazon.com/images/M/MV5BMTg4NDgxMmEtZWI1ZC00MDg3LTgyMDEtNTgwODU2YTVhN2RmXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg',
        'name' => 'Borat Subsequent Moviefilm',
        'director' => 'Todd Phillips',
        'year' => '2020',
        'genres' => [
            'comedy',
            'drama',
        ],
        'actors' => [
            'Sacha Baron Cohen',
            'Maria Bakalova',
            'Tom Hanks',
        ]
    ]
];


function years_filter($movies, $year)
{
    $filtered_movies = [];
    foreach ($movies as $movie)
        if ($movie['year'] > $year) {
            $filtered_movies[] = $movie;
        }
    return $filtered_movies;
}

$movie_filter = years_filter($movies, 2010);

function actors_filter(&$array, $movie, $actor)
{
    foreach ($array as &$film) {
        if ($film['name'] === $movie) {
            $film['actors'][] = $actor;
        }
    }
}

actors_filter($movies, 'Joker', 'Aiste Rutkauskaite');


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Functions</title>
</head>
<style>
    body {
        margin: 0 auto;
    }

    .container {
        display: flex;
        flex-wrap: wrap;
    }

    .card {
        display: flex;
        flex-direction: column;
        width: 300px;
        border: 1px solid black;
        margin: 20px;
        text-align: center;
    }

    img {
        height: 400px;
    }


</style>
<body>
<section class="container">
    <?php foreach ($movies as $movie): ?>
        <div class="card">
            <img src="<?php print $movie['img']; ?>" alt="jOKER">
            <h1><?php print $movie['name']; ?></h1>
            <h3><?php print $movie['director']; ?></h3>
            <h3><?php print $movie['year']; ?></h3>
            <h3><?php print implode(', ', $movie['genres']); ?></h3>
            <h3><?php print implode(', ', $movie['actors']); ?></h3>
        </div>
    <?php endforeach; ?>
</section>
</body>
</html>
