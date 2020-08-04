<!DOCTYPE html>
<html class="h-100">
<head>
  <title class="lessons" id="title">Series Circuits - E.C.B. - Lessons</title>
  <meta name="description" content="What is a Series Circuit? A series circuit is defined by having only a single path through which current can flow.">
  <link rel="stylesheet" href="style/lessons.css" type="text/css">
  <link rel="stylesheet" href="style/sub_lessons.css" type="text/css">  
</head>
<?php
  require 'header.php';
  require 'navbar.php';
?>

<body class="h-100 d-flex flex-column bg-gray">
  <div class="main container p-3 text-center">    
    <h1>What is a Series Circuit?</h1>
    <p>A series circuit is defined by having only a single path through which current can flow.</p>
    <h2>3 Rules of Series Circuits</h2>    
    <p>1. <b>Current</b> flowing through all components is equal.</p>
    <p>2. Total <b>resistance</b> equals the sum of individual resistances.</p>
    <p>3. <b>Voltage</b> supplied equals the sum of voltage drops</p>	    
    <h2>Example</h2>
    <h3>Given:</h3>
    <p>Let V<sub>s</sub> = 12V, R<sub>1</sub> = 6kΩ, and R<sub>2</sub> = 12kΩ.</p>
    <img src="img/series_cir1.gif" class="pic-circuit">

    <h3>Problem:</h3>
    <p>Find the values of currents I<sub>1</sub> and I<sub>2</sub> through the two resistors.</p>
    <p>Find the total resistance, R<sub>T</sub>.</p>
    <p class="pb-2">Find the total voltage drop, V<sub>T</sub>, V<sub>1</sub>, and V<sub>2</sub>.</p> 

    <div class="button-list mt-2" id="button-span">
      <button class="font-white lesson-button bg-gray2 p-2" type="button" onclick="answerClick('solution')"><h3>Reveal Solution<h3></button>
    </div>

    <span id="solution">
      <h3>Solution:</h3>
      <p>First, find the total resistance, R<sub>T</sub>.</p>
      <p>R<sub>T</sub> = R<sub>1</sub> + R<sub>2</sub></p>
      <p>= 6kΩ + 12kΩ = 18kΩ</p>

      <p class="pt-2">Next, find the currents, I<sub>1</sub> and I<sub>2</sub>.</p>
      <p>Because this is a series circuit, the current through every component is equal.</p>
      <p>Also, supply voltage equals the total voltage drop. V<sub>s</sub> = V<sub>T</sub> = 12V</p>
      <p>I<sub>T</sub> = V<sub>T</sub> / R<sub>T</sub></p>
      <p>= 12V / 18kΩ = 0.67mA</p>
      <p>I<sub>1</sub> = I<sub>2</sub> = I<sub>T</sub> = 0.67mA</p>

      <p class="pt-2">From above, V<sub>T</sub> = 12V</p>
      <p>Using Ohm's Law: V = IR</p>
      <p>V<sub>1</sub> = 0.67mA * 6kΩ = 4V</p>
      <p class="pb-2">V<sub>2</sub> = 0.67mA * 12kΩ = 8V</p>    
    </span>
    
        <!--Next & Previous Lesson Nav-->
    <div class="grid-container2 pt-3">
      <a href="ohms_law.php" class="previous-next font-white pt-2 pb-2 bg-gray2 lesson-button">
        <div>Previous</div>
        <div><i class="fas fa-arrow-alt-circle-left"></i></div>
      </a>
      <a class="previous-next font-white pt-2 pb-2 bg-gray2 lesson-button disabled-button">
        <div>Next</div>        
        <div><i class="fas fa-arrow-alt-circle-right"></i></div>
      </a>      
    </div>
  </div>
  <?php
    require 'footer.php';
  ?>
  <script src="script/sub_lessons.js"></script>
</body>
</html>