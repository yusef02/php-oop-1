<?php


class Movie extends Production
{
  public $profit;
  public $duration;

  function __construct(
    string $title,
    string $lang,
    int $vote,
    Genre $genre,
    float $profit,
    int $duration
  ) {
    parent::__construct(
      $title,
      $lang,
      $vote,
      $genre
    );

    $this->profit = $profit;
    $this->duration = $duration;
  }
};
