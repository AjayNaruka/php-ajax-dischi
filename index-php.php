<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/style-php.css">
  <title>PHP</title>
</head>
<body>
  <?php 
    include __DIR__ . '/data/db.php';
  ?>
  <header>
  <div class="header">
      <i class="fab fa-spotify"></i>
    </div>
  </header>
  <div class="container">
  <div class="row">
    <?php 
      foreach ($database as $disco) {
        ?>
        <div class="album col-md-6 col-lg-2">
      <div class="album-container">
        <img class="img-fluid" src="<?php echo $disco['poster']?>" alt="">
      <h4 class="white"><?php echo $disco['title']?></h4>
      <h6><?php echo $disco['author']?></h6>
      <h6><?php echo $disco['year']?></h6>
      </div>
    </div>
      <?php
    }
    ?>
    
  </div>
  </div>
  
  
</body>
</html>