<?php

class Movie
{
    public $title;
    public $genres;
    public $cast;
    public $publication_date;
    public $original_language;
    public $plot;

    function __construct(String $title, array $genres, array $cast, String $publication_date = "", String $original_language = "", String $plot = "")
    {
        $this->title = $title;
        $this->genres = $genres;
        $this->cast = $cast;
        $this->publication_date = $publication_date;
        $this->original_language = $original_language;
        $this->plot = $plot;
    }

    public function printMovieInfo()
    {
        $movie_info = "<li><strong>Titolo: </strong>$this->title</li>";

        $genres_info = "<li><strong>Generi: </strong><ul>";
        foreach ($this->genres as $key => $value) {
            $genres_info .= "<li> $value </li>";
        }
        $genres_info .= "</ul></li>";

        $cast_info = "<li><strong>Cast: </strong><ul>";
        foreach ($this->cast as $key => $value) {
            $cast_info .= "<li> $value </li>";
        }
        $cast_info .= "</ul></li>";

        $movie_info .= $genres_info . $cast_info;

        if ($this->publication_date) {
            $movie_info .= "<li><strong>Data di pubblicazione: </strong>$this->publication_date</li>";
        }

        if ($this->original_language) {
            $movie_info .= "<li><strong>Lingua originale: </strong>$this->original_language</li>";
        }

        if ($this->plot) {
            $movie_info .= "<li><strong>Trama: </strong>$this->plot</li>";
        }

        return $movie_info;
    }
}
