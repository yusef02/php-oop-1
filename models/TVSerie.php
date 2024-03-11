<?php


class TVSerie extends Production
{
  public $seasons;

  function __construct(
    string $title,
    string $lang,
    int $vote,
    Genre $genre,
    int $seasons
  ) {
    parent::__construct(
      $title,
      $lang,
      $vote,
      $genre
    );

    $this->seasons = $seasons;
  }
};
