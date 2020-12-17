<?php include __DIR__ . '/src/script/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-ajax-dischi</title>
  <!-- Style -->
  <link rel="stylesheet" href="./dist/css/main.css">
</head>
<body class="flex fd-col">
  <!-- HEADER -->
  <header class="flex ai-center">
    <div class="container">
      <div class="logo">
        <a href="./">
          <img src="./img/logo.png" alt="Spotify">
        </a>
      </div>
    </div>
  </header>

  <!-- MAIN CONTENT -->
  <main>
    <div class="container flex jc-center f-wrap">
      <?php foreach($database as $cd) { ?>
        <div class="cd-wrapper">
          <div class="cd-img-wrapper">
            <img src="<?php echo $cd['poster'] ?>" alt="">
          </div>
          <h2><?php echo $cd['title'] ?></h2>
          <span><?php echo $cd['author'] ?></span>
          <p><?php echo $cd['year'] ?></p>
          <span><?php echo $cd['genre'] ?></span>
        </div>
      <?php  } ?>
    </div>
  </main>

  <!-- JS -->
  <script src="./dist/js/main.js"></script>
</body>
</html>