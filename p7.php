<!DOCTYPE html>

<html>
<head> <title>Loop Statements</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <style type="text/css">
        body{
            background-color: #071C21;
            background-image: url(https://t4.ftcdn.net/jpg/07/42/20/79/360_F_742207929_7Jd7UxcLijq5PnjQkMvdSi6VU7WSzMVM.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            color: #84C69B;
            font-family: monospace;
        }
        .bi-arrow-left-circle{color: #84C69B;}

        .item-container {
            display: flex;
            gap: 25px; /* Add space between items */
            justify-content: center;
            color: #152A38;
        }

        h3{color: #84C69B;}

        .item3{
            background-color: #3B5249;
            height: 100%;
            width: 100%;
            max-width: 500px;
            font-size: 20px;
            text-align: center;
            border-radius: 10px;
            color: #D8E9A8;
            box-shadow: 1px 2px 8px 6px #D8E9A8;
            overflow: auto;
        }
        .item2 {
            background-color: #02383C; 
            height: 100%;
            width: 100%;
            max-width: 500px;
            font-size: 20px;
            justify-content: center;
            text-align: center;
            border-radius: 10px;
            color: #62A388;
            box-shadow: 1px 2px 8px 6px #84C69B;
            overflow: auto;
        }
        .item1 {
            background-color: #1A4D2E; 
            height: 100%;
            width: 100%;
            max-width: 500px;
            font-size: 20px;
            justify-content: center;
            text-align: center;
            overflow: auto;
            border-radius: 10px;
            color: black;
            box-shadow: 1px 2px 8px 6px #D8E9A8;
        }

        table {
            width: 90%;
            margin: 0 auto;
        }

        td {
            padding: 8px;
            border: 1.9px solid #B6FFA1;
            font-family: monospace;
            align-items: center;
        }

        .myName{
            text-shadow: 2px 2px 3px red, -2px -2px 3px blue;
            font-size: 15px;
        }

    </style>

</head>

<body><br>&nbsp;
<a href="mainPage.php"><i title="Back" class="bi-arrow-left-circle" style="font-size: 40px"></i></a>
<h1><center>Loop Statements</center></h1><br><br><br>

<?php
    // Declare whole number variables n and m
    $n = 8;  // Example value for n
    $m = 4;  // Example value for m

    // 1. Display n x m multiplication table using for loop
    function multiplication($n, $m){
        for ($i = 1; $i <= $n; $i++) {
            
            if($i%2 == 0)
             echo '<tr bgcolor="#798645" style="color: #1A4D2E; font-weight: bolder;">';
            else 
                echo '<tr bgcolor="#31511E" style="color: #859F3D; font-weight: bolder;">';

            for ($j = 1; $j <= $m; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
    }

    // 2. Display n Fibonacci series and m Fibonacci series using while loop

    // Function to generate Fibonacci series
    function fibonacci($limit) {
        $curr1 = 0;
        $curr2 = 1;
        $count = 0;

        while ($count < $limit) {
            echo "<td>".$curr1 ."</td> ";
            $next = $curr1 + $curr2;
            $curr1 = $curr2;
            $curr2 = $next;
            $count++;
            
        }
        echo "<br>";
    }


    // 3. Compute the factorial of n and summation of m using do...while loop

    // Factorial of n
    function factorial($n){
        $factorial = 1;
        $num = $n;
        do {
            $factorial *= $num;
            $num--;
        } while ($num > 0);

        echo "<td colspan=\"$n\"> $factorial </td>";
    }
    
    // Summation of m (sum of numbers from 1 to m)
    function summation($m){
        $summation = 0;
        $num = 1;  // Start from 1
        do {
            $summation += $num;
            $num++;
        } while ($num <= $m);

        echo "<td colspan=\"$m\"> $summation </td>";
    }
?>

<br> <br>
<div class="container">
    <!-- container for items -->
    <div class="item-container"> 
       
        <div class="item1"> 
            <h3>Multiplication Table of <?php echo"$n and $m";?></h3>  
                <table>
                    <?php multiplication($n, $m);?>
                </table><br>
        </div>
        
        <div class="item2"> 
            <h3> Fibonacci Series of <?php echo"$n and $m";?></h3> 
                <table>
                    <tr bgcolor="1A3636">
                        <td colspan="<?php echo"$m"; ?>">
                            <p>
                                First <?php echo"$m"; ?> Fibonacci numbers:
                            </p>
                        </td>
                    </tr>

                    <tr bgcolor="708871" bgcolor="1A3636" style="color:#071C21; font-weight: bolder;">
                        <?php fibonacci($m); ?>
                    </tr>
                </table><br>

                <table>
                    <tr bgcolor="1A3636">
                        <td colspan="<?php echo"$n"; ?>">
                            <p>
                                First <?php echo"$n"; ?> Fibonacci numbers:
                            </p>
                        </td>
                    </tr>

                    <tr bgcolor="708871" bgcolor="1A3636" style="color:#071C21; font-weight: bolder;">
                        <?php fibonacci($n); ?>
                    </tr>
                </table><br>
            
        </div>
        
        <div class="item3"> 
	      <h3> Factorial of <?php echo"$n";?> and Summation of <?php echo"$m";?> </h3> 
          <table>
            <tr bgcolor="071C21">
                <td colspan="<?php echo"$n"; ?>">
                    <p>
                        Factorial of <?php echo"$n";?>
                    </p>
                </td>
            </tr>

            <tr rowspan="2" bgcolor="629584" style="color:#071C21; font-weight: bolder">
                <?php factorial($n); ?>
            </tr>

          </table> <br><br>

          <table>
            <tr bgcolor="071C21">
                <td colspan="<?php echo"$m"; ?>">
                    </p>
                        Summation of <?php echo"$m";?>
                    </p>
                </td>
            </tr>

            <tr rowspan="2" bgcolor="629584" style="color:#071C21; font-weight: bolder">
                <?php summation($n)?>
            </tr>
          </table> <br>

        </div>
        
    </div>
</div><br><br><br><br><br><br>


<div class="myName"> 
    <center>
        <b> &copy; Angela S. Matugas | October 27, 2024</b><br> <br>7
    </center>
</div>

</body>
</html>

