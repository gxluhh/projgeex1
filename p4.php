<!DOCTYPE html>

<html>
<head>
    <title>Using Math Functions</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <style>
        .bi-arrow-left-circle, h1{
            color: #DDF2FD;
        }

        body{
            background-color: #001C30;
            background-image: url(https://wallpaperset.com/w/full/2/9/c/8748.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color:aliceblue;     
        }
        th{color: #B9D4F1;}
       
         th{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            padding: 16px;
            background-color: #000000;
            backdrop-filter: blur(5px);
            border-radius: 12px;
            border: 2px solid #E1F7F5;
            color: #5BBCFF;
        }

        td{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            background-color:#021526 ;
            padding: 15px;
            border: 2px solid #BBE1FA;
            border-radius: 10px;
            color: #CAF4FF;
        }

         span{
            color: #0A81AB;
            font-size: larger;
         }

         table{
            box-shadow: 1px 2px 8px 6px #BBE1FA;
            padding: 5px;
            border-radius: 15px;
         }

    </style>

</head>

<body><br>&nbsp;
    <a href="mainPage.php"><i title="Back" class="bi-arrow-left-circle" style="font-size: 40px;"></i></a>

    <h1 align="center">Using Math Functions</h1><br>

    <?php
        $f1 = 3.1415;
        $f2 = 4.915;
        $f3 = 9.8256;
        $f4 = -7.4321;
        $f5 = 2.724;

        $i1 = 40;
        $i2 = 25;
        $i3 = -60;
        $i4 = -7;
        $i5 = 100;
                
    ?>
    
    <table align="center" width="80%"  cellpadding="3" cellspacing="10">
        <tr align="center">
            <th width="25%"> <h2>Math Functions</h2></th>
            <th width="38%"> <h2>Uses</h2></th>
            <th> <h2>Example</h2></th>
        </tr>

        <tr>
            <td><?php echo "<p>1. Absolute value [abs()] </p>"?></td>
            <td> <?php echo"Returns the absolute (positive) value."?> </td>
            <td> <?php echo"The Absolute value of $i3 is <span>" . abs($i3). "</span>."?> </td>
        </tr>

        <tr>
            <td><?php echo "<p>2. Square root [sqrt()] </p>"?></td>
            <td> <?php echo"Returns the square root of a number."?> </td>
            <td> <?php echo"The Square root of $f3 is <span>" .sqrt($f3) ."</span>."?> </td>
        </tr>

        <tr>
            <td><?php echo "<p>3. Power [pow(]) </p>"?></td>
            <td> <?php echo"Returns the result of a number raised to a power."?> </td>
            <td> <?php echo"$f5 raised to the power of $i2 is <span>" . pow($f5, $i2) ."</span>."?> </td>
        </tr>

        <tr>
            <td><?php echo "<p>4. Round [round()] </p>"?></td>
            <td> <?php echo"Rounds a floating-point number to the nearest integer."?> </td>
            <td> <?php echo"The Rounded value of $f2 is <span>" . round($f2) ."</span>."?> </td>
        </tr>

        <tr>
            <td><?php echo "<p>5. Ceil [ceil()] </p>"?></td>
            <td> <?php echo"Rounds a floating-point number up to the nearest integer."?> </td>
            <td> <?php echo"The Ceil value of $f3 is <span>" . ceil($f3) . "</span>."?> </td>
        </tr>

        <tr>
            <td><?php echo "<p>6. Floor [floor()] </p>"?></td>
            <td> <?php echo"Rounds a floating-point number down to the nearest integer."?> </td>
            <td> <?php echo"The Floor value of $f3 is <span>". floor($f3) ."</span>."?> </td>
        </tr>

        <tr>
            <td><?php echo "<p>7. Maximum [max()] </p>"?></td>
            <td> <?php echo"Returns the largest of given values."?> </td>
            <td> <?php echo"The maximum value between $i1, $i2, $i4 is <span>". max($i1, $i2, $i4) ."</span>."?> </td>
        </tr>

        <tr>
            <td><?php echo "<p>8. Minimum [min()] </p>"?></td>
            <td> <?php echo"Returns the smallest of given values."?> </td>
            <td> <?php echo"The minimum value between $i3, $i5, $f4 is <span>". min($i3, $i5, $f4) ."</span>."?> </td>
        </tr>

        <tr>
            <td><?php echo "<p>9. Cosine [cos()] </p>"?></td>
            <td> <?php echo"Returns the cosine of a number (angle in radians)."?> </td>
            <td> <?php echo"The Cosine of $f1 (in radians) is <span>". cos($f1) ."</span>."?> </td>
        </tr>

        <tr>
            <td><?php echo "<p>10. Sine [sin()] </p>"?></td>
            <td> <?php echo"Returns the sine of a number (angle in radians)."?> </td>
            <td> <?php echo"The Sine of $f1 (in radians) is <span>". sin($f1) ."</span>."?> </td>
        </tr>

        <tr>
            <td><?php echo "<p>11. Tangent [tan()] </p>"?></td>
            <td> <?php echo"Returns the tangent of a number (angle in radians)."?> </td>
            <td> <?php echo"The Tangent of $f1 (in radians) is <span>". tan($f1) ."</span>."?> </td>
        </tr>

        <tr>
            <td><?php echo "<p>12. Logarithm [log()] </p>"?></td>
            <td> <?php echo"Returns the natural logarithm (base e)."?> </td>
            <td> <?php echo"The Natural logarithm of $f2 is <span>". log($f2) ."</span>."?> </td>
        </tr>

        <tr>
            <td><?php echo "<p>13. Exponential [exp()] </p>"?></td>
            <td> <?php echo"Returns Euler’s number raised to the power of a number."?> </td>
            <td> <?php echo"Exponential (e^$f5): <span>". exp($f5) ."</span>."?> </td>
        </tr>

        <tr>
            <td><?php echo "<p>14. Random number [rand()] </p>"?></td>
            <td> <?php echo"Generates a random number within a specified range."?> </td>
            <td> <?php echo"Random number between $f4 and $i5: <span>". rand($f4, $i5) ."</span>."?> </td>
        </tr>

        <tr>
            <td><?php echo "<p>15. Hypotenuse [hypot()] </p>"?></td>
            <td> <?php echo"Returns the length of the hypotenuse of a right-angled triangle."?> </td>
            <td> <?php echo"Hypotenuse with sides $i1 and $i2: <span>". hypot($i1, $i2) ."</span>."?> </td>
        </tr>

    </table>

    <br><br>
    <p><small> <center><b> &copy; Angela S. Matugas | October 17, 2024</b><br> <br>4</center></small></p>
    <br><br>
</body>
</html>

