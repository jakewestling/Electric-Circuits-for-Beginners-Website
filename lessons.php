<!DOCTYPE html>
<html class="h-100">
<head>
  <title class="lessons" id="title">E.C.B. - Lessons - Learn about Circuits</title>
  <meta name="description" content="Check out our lessons on Ohm's Law and Series Circuits on E.C.B. E.C.B. makes it easy by putting all of the resources you need to learn the basics in one convienient place.">
  <link rel="stylesheet" href="style/lessons.css">
</head>
<?php
  require 'header.php';
  require 'navbar.php';
?>

<body class="h-100 d-flex flex-column bg-gray main">
  <div class="container p-2 text-center">
    <h1>Electric Circuit Lessons</h1>
    <img class="pic-index" src="img/sign.gif" alt="Warning Electric Sign">
    <p>Our current lessons are listed below.</p>
    <p>Unsure where to start? <a class="font-green" href="ohms_law.php">Start here.</a></p>
    <div class="button-list mt-2">
      <a class="font-white" href="ohms_law.php"><div class="lesson-button bg-gray2 p-2">Ohm's Law</div></a>
      <a class="font-white" href="series_circuits.php"><div class="lesson-button bg-gray2 p-2">Series Circuits</div></a>
    </div>
    
    
  </div>
  <?php
    require 'footer.php';
  ?> 
</body>
</html>