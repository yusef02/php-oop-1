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

// creo un array produzioni contenente istanze del genere production
$productions = [
  new Production('Il signore degli anelli', 'en', 9),
  new Production('Harry Potter', 'en', 8),
  new Production('One Piece', 'ja', 9),
]


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php oop</title>
</head>

<body>

  <h1>the movies</h1>

  <?php foreach ($productions as $production) : ?>
    <ul>
      <li><strong>Titolo:</strong> <?= $production->title ?> </li>
      <li><strong>Lingua:</strong> <?= $production->lang ?> </li>
      <li><strong>Voto:</strong> <?= $production->vote ?> </li>


    </ul>
  <?php endforeach; ?>
</body>

</html>