<?php


// inizializzo una nuova classe genere che gestisce nome del genere e descrizione
class Genre
{
  public $name;
  public $desc;

  function __construct(
    string $name,
    string $desc,
  ) {
    $this->name = $name;
    $this->desc = $desc;
  }
};
