<?php


// inizializzo una nuova classe production che gestisce titolo lingua e voto di prodotti multimediali
class Production
{
  public $title;
  public $lang;
  public $vote;

  function __construct(
    string $title,
    string $lang,
    int $vote,
  ) {
    $this->title = $title;
    $this->lang = $lang;
    $this->vote = $vote;
  }
};
