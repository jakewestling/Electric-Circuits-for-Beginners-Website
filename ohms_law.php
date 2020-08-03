<!DOCTYPE html>
<html class="h-100">
<head>
  <title class="lessons" id="title">Ohm's Law - E.C.B. - Lessons</title>
  <meta name="description" content="Check out our lessons on Ohm's Law and Series Circuits on E.C.B. E.C.B. makes it easy by putting all of the resources you need to learn the basics in one convienient place.">
  <link rel="stylesheet" href="style/electricstyle.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php
  require 'header.php';
  require 'navbar.php';
?>

<body class="h-100 d-flex flex-column bg-gray">
  <div class="main container p-3 text-center">    
    <h1 class="heading">What is Ohm's Law?</h1>
    <p class="">Ohm's law states that V = IR.</p>
    <h2 class="heading">What do each of these parameters (letters) mean?</h2>
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
    <h2 class="heading">How is Ohm's law used in circuits?</h2>
    <p>Here is an example of a basic DC circuit using Ohm's law.</p>
    <img src="img/cir1.gif" class="pic-circuit">
    <p>Given: Let V<sub>1</sub> = 12V and R<sub>1</sub> = 6kΩ.</p>
    <p> Problem: Find the value of current, I<sub>1</sub>, through the resistor R<sub>1</sub>.</p>
    <p>Solution: Use Ohm's law, V = IR. </p>
    <p>Rearrange for I. I = V/R.</p>
    <p>Substitute in values for V and R.</p>
    <p>I<sub>1</sub> = (12V)/(6kΩ)</p>
    <p>Solve for I. I<sub>1</sub> = 2 mA</p>     
  </div>
  <?php
    require 'footer.php';
  ?>   
</body>
</html>