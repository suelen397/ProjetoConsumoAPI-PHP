<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      <?php echo $title ?> - 
      <?php echo $sitename ?> | 
    </title>
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
  </head>
  <body>
    <header class="header">
    <h1>
      <?php echo $sitename ?>
    </h1>
    <p>
      <small>
        <?php echo $tagline ?>
      </small>
    </p>
    <form action="search.php" method="get">
      <input type="text" name="search" placeholder="Insira o Título Aqui" required>
      
      <button type="submit">Buscar
      </button>
    </form>
  </header>
   