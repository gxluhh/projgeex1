<!DOCTYPE html>

<html>
<head><title>Using Constants</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <style type="text/css">
        body{
            background-color: #000000;
            background-image: url(https://wallpaper-house.com/data/out/8/wallpaper2you_246754.png);
            background-position: center;
            background-repeat: repeat;
            background-size: cover;
            font-family: 'Courier New', Courier, monospace;
            font-size: large;

        }
        .bi-arrow-left-circle, h1, .myName{
            color: bisque;
        }

        span{
            font-style: italic;
            font-weight: bold;
        }

        td{
            padding: 20px;
            background-color: #1E0411;
            border-radius: 15px;
            border: 1.9px solid #FDADC7;
        }

        th{
            background-color: #1E0411;
            border-radius: 15px;
            padding: 20px;
            border-width: 5px;

        }

        table{
            color:white;
            backdrop-filter: blur(5px);
            border-radius: 20px;
        }
    </style>

</head>

<body><br>&nbsp;
<a href="mainPage.php"><i title="Back" class="bi-arrow-left-circle" style="font-size: 40px"></i></a>

<h1><center>Using Constants</center></h1><br><br>

<?php
    // 1. Mathematical constant for Pi
    define("PI", 3.14159265359);

    // 2. Speed of light (in m/s)
    define("SPEED_OF_LIGHT", 299792458);

    // 3. Gravitational constant (in m^3 kg^-1 s^-2)
    define("GRAVITATIONAL_CONSTANT", 6.67430e-11);

    // 4. Avogadro's number (particles per mole)
    define("AVOGADRO_NUMBER", 6.02214076e23);

    // 5. Boltzmann constant (in J/K)
    define("BOLTZMANN_CONSTANT", 1.380649e-23);

    // 6. Planck's constant (in J·s)
    define("PLANCK_CONSTANT", 6.62607015e-34);

    // 7. Golden ratio
    define("GOLDEN_RATIO", 1.61803398875);

    // 8. Earth’s gravity (in m/s²)
    define("EARTH_GRAVITY", 9.80665);

    // 9.  Freezing Point of Water in Kelvin (K)
    define("FREEZING_POINT_OF_WATER", 273.15);

    // 10. Euler's number (e)
    define("EULER_NUMBER", 2.71828182846);
?>

<table align="center" width="75%"  border="7" cellpadding="5" cellspacing="9">
    <tr>
        <th colspan="2">
        <h3>The following are the list of Constants with its Examples:</h3>
        </th>
    </tr>

    <tr align="center">
        <td>
            <h4> Constants</h4>
        </td>

        <td> <h4> Examples </h4></td>
    </tr>

    <tr>
        <td>
            <?php  echo "<p><strong>1. Pi: </strong> " . PI . "</p>"; ?>
        </td>

        <td> <?php echo "<p>The circumference of a circle with radius 5 is <span>" . (2 * PI * 5) . "</span> using the formula 2πR.</p>";?></td>
    </tr>

    <tr>
        <td>
            <?php echo "<p><strong>2. Speed of Light:</strong> " . SPEED_OF_LIGHT . " m/s</p>";?>
        </td>

        <td>
            <?php echo "<p>Light travels in one second which is equivalent to <span>" . SPEED_OF_LIGHT . "</span> meters</p>";?>
        </td>
    </tr>

    <tr>
        <td>
            <?php echo "<p><strong>3. Gravitational Constant:</strong> " . GRAVITATIONAL_CONSTANT . " m^3/kg/s²</p>";?>
        </td>

        <td>
            <?php  echo "<p>Force of gravity can be calculated using this constant.</p>";?>
        </td>
    </tr>

    <tr>
        <td>
            <?php echo "<p><strong>4. Avogadro's Number:</strong> " . AVOGADRO_NUMBER . " particles/mole</p>";?>
        </td>

        <td>
            <?php echo "<p>It is used to calculate the number of atoms or molecules in a substance.</p>";?>
        </td>
    </tr>

    <tr>
        <td>
            <?php echo "<p><strong>5. Boltzmann Constant:</strong> " . BOLTZMANN_CONSTANT . " J/K</p>";?>
        </td>

        <td>
            <?php echo "<p>It relates temperature to energy in statistical mechanics.</p>";?>
        </td>
    </tr>

    <tr>
        <td>
            <?php echo "<p><strong>6. Planck's Constant:</strong> " . PLANCK_CONSTANT . " J·s</p>";?>
        </td>

        <td>
            <?php echo "<p>Planck's constant is used to calculate energy in quantum mechanics.</p>";?>
        </td>
    </tr>

    <tr>
        <td>
            <?php echo "<p><strong>7. Golden Ratio:</strong> " . GOLDEN_RATIO . "</p>";?>
        </td>

        <td>
            <?php echo "<p>It appears in art, architecture, and nature.</p>";?>
        </td>
    </tr>

    <tr>
        <td>
            <?php echo "<p><strong>8. Earth's Gravity:</strong> " . EARTH_GRAVITY . " m/s²</p>";?>
        </td>

        <td>
            <?php echo "<p>It is used to calculate the weight of objects on Earth.</p>";?>
        </td>
    </tr>

    <tr>
        <td>
            <?php echo "<p><strong>9.  Freezing Point of Water in Kelvin:</strong> " . FREEZING_POINT_OF_WATER . " K</p>";?>
        </td>

        <td>
            <?php echo "<p>The freezing point of water in kelvin is a constant representing the temperature at which water freezes.</p>";?>
        </td>
    </tr>

    <tr>
        <td>
            <?php echo "<p><strong>10. Euler's Number:</strong> " . EULER_NUMBER . "</p>";?>
        </td>

        <td>
            <?php echo "<p>It is used in natural logarithms and complex growth models.</p>";?>
        </td>
    </tr>

</table><br><br>

<div class="myName"><small> <center><b> &copy; Angela S. Matugas | October 16, 2024</b><br> <br>5</center></small></div><br><br>
</body>
</html>
