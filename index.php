<?php

require_once __DIR__ . "/Models/Movie.php";
require_once __DIR__ . "/db.php";

$avatar = new Movie($movies[0]["title"], $movies[0]["genres"], $movies[0]["cast"], $movies[0]["publication_date"], $movies[0]["original_language"], $movies[0]["plot"]);
$tre_uomini_e_una_gamba = new Movie($movies[1]["title"], $movies[1]["genres"], $movies[1]["cast"], $movies[1]["publication_date"], $movies[1]["original_language"], $movies[1]["plot"]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php oop 1</title>
</head>

<body>
    <ul><?php echo $avatar->printMovieInfo() ?></ul>
    <br>
    <ul><?php echo $tre_uomini_e_una_gamba->printMovieInfo() ?></ul>
</body>

</html>