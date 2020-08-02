<!DOCTYPE html>
<html class="h-100">
<head>
  <title class="lessons" id="title">E.C.B. - Lessons - Learn about circuits</title>
  <meta name="description" content="Have you ever wanted to learn about electric circuits but never had the time or resources? E.C.B. makes it easy by putting all of the resources you need to learn the basics in one convienient place.">
  <link rel="stylesheet" href="<?php echo $dir;?>style/lessons.css">
</head>
<?php
  require 'header.php';
  require 'navbar.php';
?>

<body class="h-100 d-flex flex-column bg-gray">
  <div class="container p-2 text-center">
    <h2>Electric Circuit Lessons</h2>
    <p>Our current lessons are listed below.</p>
    <p>Unsure where to start? <a class="font-green" href="ohms_law.php">Start here.</a></p>
    <div class="button-list">
      <div>div1</div>
      <div>div2</div>
    </div>
    <a class="font-white" href="ohms_law.php"><div class="lesson-button bg-green p-2">Ohm's Law</div></a>
      <a class="font-white" href="series_circuits.php"><div class="lesson-button bg-green p-2">Series Circuits</div></a>
    
  </div>
  <?php
    require 'footer.php';
  ?> 
</body>
</html>