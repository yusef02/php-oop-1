<?php

require_once __DIR__ . '/Genre.php';


// inizializzo una nuova classe production che gestisce titolo lingua e voto di prodotti multimediali
class Production
{
  public $title;
  public $lang;
  public $vote;
  public $genre;

  function __construct(
    string $title,
    string $lang,
    int $vote,
    Genre $genre,
  ) {
    $this->title = $title;
    $this->lang = $lang;
    $this->vote = $vote;
    $this->genre = $genre;
  }
};
