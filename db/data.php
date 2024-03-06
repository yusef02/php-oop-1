<?php

require_once __DIR__ . '/../models/Production.php';
require_once __DIR__ . '/../models/Genre.php';

// creo un array produzioni contenente istanze del genere production
$productions = [
  new Production('Il signore degli anelli', 'en', 9, new Genre('nome', 'descrizione')),
  new Production('Harry Potter', 'en', 8, new Genre('nome', 'descrizione')),
  new Production('One Piece', 'ja', 9, new Genre('nome', 'descrizione')),
];
