<?php
require_once __DIR__ . '/db/data.php'

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
      <li><strong>Genere:</strong> <?= $production->genre->name ?> </li>
      <li><strong>Descrizione:</strong> <?= $production->genre->desc ?> </li>

      <?php if ($production instanceof Movie) : ?>
        <li><strong>Profit:</strong><?= $production->profit ?></li>
        <li><strong>Duration:</strong><?= $production->duration ?></li>
      <?php endif ?>
      <?php if ($production instanceof TVSerie) : ?>
        <li><strong>Seasons:</strong><?= $production->seasons ?></li>
      <?php endif ?>




    </ul>
  <?php endforeach; ?>
</body>

</html>