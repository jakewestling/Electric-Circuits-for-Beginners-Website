<!DOCTYPE html>
<html class="h-100">
<head>
  <title class="lessons" id="title">Ohm's Law - E.C.B. - Lessons</title>
  <meta name="description" content="What is Ohm's Law? Ohm's law states that V = IR.">
  <link rel="stylesheet" href="style/lessons.css" type="text/css">
  <link rel="stylesheet" href="style/sub_lesson.css" type="text/css">
</head>
<?php
  require 'header.php';
  require 'navbar.php';
?>

<body class="h-100 d-flex flex-column bg-gray">
  <div class="main container p-3 text-center">    
    <h1>What is Ohm's Law?</h1>
    <p>Ohm's law states that V = IR.</p>
    <h2>What do each of these parameters (letters) mean?</h2>
    <table class="table">
      <tr class="top-row">
        <td>Unit Name</td><td>Symbol</td><td>Quantity</td>
      </tr>
          <tr>
        <td>Volt</td><td>V</td><td>Voltage (V, E)</td>
      </tr>
      <tr>
        <td>Ampere</td><td>A</td><td>Electric Current (I)</td>
      </tr>
      <tr>
        <td>Ohm</td><td>Ω</td><td>Resistance (R)</td>
      </tr>
    </table>
    <h2>How is Ohm's law used in circuits?</h2>
    <p>Here is an example of a basic DC circuit using Ohm's law.</p>
    <h2>Example</h2>
    <h3>Given:</h3>
    <p>Let V<sub>1</sub> = 12V and R<sub>1</sub> = 6kΩ.</p>
    <img src="img/cir1.gif" class="pic-circuit">
    <h3>Problem:</h3>    
    <p class="pb-2">Find the value of current, I<sub>1</sub>, through the resistor R<sub>1</sub>.</p>

    <div class="button-list mt-2" id="button-span">
      <button class="font-white lesson-button bg-gray2 p-2" type="button" onclick="answerClick('solution')">Reveal Solution</button>
    </div>

    <span id="solution">
      <h3>Solution:</h3>
      <p>Use Ohm's law, V = IR. </p>
      <p>Rearrange for I.</p>
      <p>I = V/R.</p>
      <p>Substitute in values for V and R.</p>
      <p>I<sub>1</sub> = (12V)/(6kΩ)</p>
      <p>Solve for I.</p>
      <p>I<sub>1</sub> = 2 mA</p>
    </span>     
  </div>
  <?php
    require 'footer.php';
  ?>
  <script src="script/sub_lessons.js"></script>   
</body>
</html>