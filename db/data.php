<?php

require_once __DIR__ . '/../models/Production.php';
require_once __DIR__ . '/../models/Genre.php';
require_once __DIR__ . '/../models/Movie.php';
require_once __DIR__ . '/../models/TVSerie.php';

// creo un array produzioni contenente istanze del genere production
$productions = [
  new Movie('Il signore degli anelli', 'en', 9, new Genre('nome', 'descrizione'), 3698456.52, 100),
  new Movie('Harry Potter', 'en', 8, new Genre('nome', 'descrizione'), 3698456.52, 100),
  new Movie('One Piece', 'ja', 9, new Genre('nome', 'descrizione'), 3698456.52, 100),
  new TVSerie('One punch man', 'ja', 9, new Genre('nome', 'descrizione'), 2),
  new TVSerie('Breaking bad', 'ja', 9, new Genre('nome', 'descrizione'), 5),
  new TVSerie('La casa di carta', 'ja', 9, new Genre('nome', 'descrizione'), 3),
];
