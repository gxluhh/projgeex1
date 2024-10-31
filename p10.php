<!DOCTYPE html>

<html>
<head><title>Two-dimensional Array</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <style>
        body{
            background-color: black;
            background-image: url(https://freedesignfile.com/upload/2020/10/Black-background-vector-280x235.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            color: whitesmoke;
            font-family:'Courier New', Courier, monospace;
            text-shadow: 
                -1px -1px 0 #000, /* Top-left shadow */
                1px -1px 0 #000, /* Top-right shadow */
                -1px  1px 0 #000, /* Bottom-left shadow */
                1px  1px 0 #000; /* Bottom-right shadow */
        }
        .bi-arrow-left-circle{color: whitesmoke;}

        .item-container {
            display: flex;
            gap: 70px; /* Add space between items */
            justify-content: center;
            color: #152A38;
            padding: 70px;
        }
        .item2 {
            /**343131 */
            height: 100%;
            width: 90%;
            font-size: 20px;
            justify-content: center;
            text-align: center;
            border-radius: 10px;
            color: #FBECB2;
            overflow: auto;
            backdrop-filter: blur(7px);

            text-shadow: 
                -1px -1px 0 #000, /* Top-left shadow */
                1px -1px 0 #000, /* Top-right shadow */
                -1px  1px 0 #000, /* Bottom-left shadow */
                1px  1px 0 #000; /* Bottom-right shadow */
        }
        .item1 {
            height: 100%;
            width: 90%;
            font-size: 20px;
            justify-content: center;
            text-align: center;
            border-radius: 10px;
            color: #D8E9A8;
            overflow: auto;
            backdrop-filter: blur(7px);

            text-shadow: 
                -1px -1px 0 #000, /* Top-left shadow */
                1px -1px 0 #000, /* Top-right shadow */
                -1px  1px 0 #000, /* Bottom-left shadow */
                1px  1px 0 #000; /* Bottom-right shadow */

        }

        table {
            width: 80%;
            margin: 0 auto;
        }

        td, th{
            padding: 8px;
            border: 1.9px solid #F3C623;
            font-family: 'Courier New', Courier, monospace;
            align-items: center;
            text-align: center;
        }

        h1, h2,h3{
            color: black;
            text-shadow: 
                -1px -1px 0 whitesmoke, /* Top-left shadow */
                1px -1px 0 whitesmoke, /* Top-right shadow */
                -1px  1px 0 whitesmoke, /* Bottom-left shadow */
                1px  1px 0 whitesmoke; /* Bottom-right shadow */
        }

        .myName{
            font-size: 15px;
            text-shadow: 
                -1px -1px 0 #000, /* Top-left shadow */
                1px -1px 0 #000, /* Top-right shadow */
                -1px  1px 0 #000, /* Bottom-left shadow */
                1px  1px 0 #000; /* Bottom-right shadow */
        }

    </style>
</head>

<body><br>&nbsp;
<a href="mainPage.php"><i title="Back" class="bi-arrow-left-circle" style="font-size: 40px"></i></a>
<h1><center>Two-dimensional Array</center></h1>

<?php

    // the size of the NxN array
    $N = 7;  

    // Initializing the NxN array with random integers (1 to 100)
    $array = [];
    for ($i = 0; $i < $N; $i++) {
        for ($j = 0; $j < $N; $j++) {
            $array[$i][$j] = rand(1, 100);
        }
    }

    // Function to display the NxN array
    function displayArray($array, $N) {
        for ($i = 0; $i < $N; $i++) {
            echo"<tr>";
                for ($j = 0; $j < $N; $j++) {
                   echo"<td>";
                    echo $array[$i][$j] . "\t";
                   echo"</td>";
                }
            echo "</tr>";
        }
    }


    // 1. Sum and average of each row and column
    $rowSums = [];
    $colSums = array_fill(0, $N, 0);  // Initialize column sums to 0
    $overallSum = 0;

    for ($i = 0; $i < $N; $i++) {
        $rowSums[$i] = 0;
        for ($j = 0; $j < $N; $j++) {
            $rowSums[$i] += $array[$i][$j];  // Sum of rows
            $colSums[$j] += $array[$i][$j];  // Sum of columns
            $overallSum += $array[$i][$j];   // Overall sum
        }
    }

    function displayRowSum($rowSums, $N){
        for ($i = 0; $i < $N; $i++) {
            echo"<tr>";
            echo "<td>" .($i+1)."</td> <td>" . $rowSums[$i] . " </td> <td>" . number_format(($rowSums[$i] / $N), 2) . "</td>";
            echo"</tr>";
        }
    }
    
    function displayColSum($colSums, $N){
        for ($j = 0; $j < $N; $j++) {
            echo"<tr>";
            echo "<td>".($j+1). "</td> <td>" . $colSums[$j] . "</td> <td>" . number_format(($colSums[$j] / $N), 2) . "</td>";
            echo"</tr>";
        }
    }

    // 2. Sum and average of diagonals
    function displayDiagonal($array, $N){
        $diagonalSum1 = 0;
        $diagonalSum2 = 0;

        for ($i = 0; $i < $N; $i++) {
            $diagonalSum1 += $array[$i][$i];  // 1st diagonal
            $diagonalSum2 += $array[$i][$N - $i - 1];  //2nd diagonal
        }

        echo"<tr>";
        echo"<td> 1 </td>";
        echo"<td>$diagonalSum1</td>
            <td>".number_format(($diagonalSum1/$N), 2)."</td>";
        echo"</tr>";

        echo"<tr>";
        echo"<td> 2 </td>";
        echo"<td>$diagonalSum2</td>
            <td>".number_format(($diagonalSum2/$N), 2)."</td>";
        echo"</tr>";
    }


    // 3. Smallest and largest number in each row
    function displayRowSmallLarge($array, $N){
        for ($i = 0; $i < $N; $i++) {
            $minRow = $array[$i][0];
            $maxRow = $array[$i][0];

            echo"<tr>";
            for ($j = 0; $j < $N; $j++) {
                if ($array[$i][$j] < $minRow) {
                    $minRow = $array[$i][$j];
                }
                if ($array[$i][$j] > $maxRow) {
                    $maxRow = $array[$i][$j];
                }
            }
            echo "<td>".($i+1)."</td> <td>" . $minRow . "</td> <td>" . $maxRow . "</td>";

            echo"</tr>";
        }
    }

    //Smallest and largest number in each column
    function displayColSmallLarge($array, $N){
        for ($j = 0; $j < $N; $j++) {
            $minCol = $array[0][$j];
            $maxCol = $array[0][$j];

            echo"<tr>";
            for ($i = 0; $i < $N; $i++) {
                if ($array[$i][$j] < $minCol) {
                    $minCol = $array[$i][$j];
                }
                if ($array[$i][$j] > $maxCol) {
                    $maxCol = $array[$i][$j];
                }
            }
            echo "<td>".($j+1)."</td> <td>" . $minCol . "</td> <td>" . $maxCol . "</td>";
            echo"</tr>";
        }
    }

    // 5. Overall smallest and largest numbers
    $overallMin = $array[0][0];
    $overallMax = $array[0][0];

    for ($i = 0; $i < $N; $i++) {
        for ($j = 0; $j < $N; $j++) {
            if ($array[$i][$j] < $overallMin) {
                $overallMin = $array[$i][$j];
            }
            if ($array[$i][$j] > $overallMax) {
                $overallMax = $array[$i][$j];
            }
        }
    }
?>
        <br><br>
        <table>
             <tr style="font-size: 24px; color:White;" bgcolor="FFC947">
                <th colspan="<?php echo $N ?>"> Random Array of Numbers</th>
            </tr>
                    
            <?php displayArray($array, $N);  ?>
        </table>
        <br>

<div class="item-container"> 
        <div class="item1"> 
                <h3> Sum and Average of each Rows,<br> Columns and Diagonals</h3> 
                <table>
                    <tr bgcolor="FF8F00">
                        <th colspan="3"> ROWS</th>
                    </tr>

                    <tr bgcolor="232323">
                        <td>Row #</td>
                        <td>Sum</td>
                        <td>Average</td>
                    </tr>

                    <?php displayRowSum($rowSums, $N); ?>

                </table><br>

                <table>
                    <tr bgcolor="FF8F00">
                        <th colspan="3"> COLUMNS</th>
                    </tr>

                    <tr bgcolor="232323">
                        <td>Column #</td>
                        <td>Sum</td>
                        <td>Average</td>
                    </tr>

                    <?php displayColSum($rowSums, $N); ?>
                </table> <br>

                <table>
                    <tr bgcolor="FF8F00">
                        <th colspan="3"> Diagonals</th>
                    </tr>

                    <tr bgcolor="232323">
                        <td>Diagonal #</td>
                        <td>Sum</td>
                        <td>Average</td>
                    </tr>

                    <?php displayDiagonal($array, $N); ?>
                </table> <br>
        </div>

        <div class="item2"> 
            <h3> Smallest and Largest Numbers <br>in Each Row and Column</h3>  
                <table>
                    <tr bgcolor="FF8F00">
                        <th colspan="3"> ROWS</th>
                    </tr>

                    <tr bgcolor="232323">
                        <td>Row #</td>
                        <td>Smallest</td>
                        <td>Largest</td>
                    </tr>

                    <?php  displayRowSmallLarge($array, $N); ?>
                </table><br>

               <h3> </h3>  
                <table>
                    <tr bgcolor="FF8F00">
                        <th colspan="3"> COLUMNS</th>
                    </tr>

                    <tr bgcolor="232323">
                        <td>Column #</td>
                        <td>Smallest</td>
                        <td>Largest</td>
                    </tr>

                    <?php displayColSmallLarge($array, $N); ?>
                </table><br>

                <table>
                    <tr bgcolor="FF8F00">
                        <th colspan="3"> OVERALL ARRAY</th>
                    </tr>

                    <tr>
                        <td> Sum </td>
                        <td> <?php  echo $overallSum ?> </td>
                    </tr>

                    <tr>
                        <td> Average </td>
                        <td> <?php  echo number_format($overallSum/($N*$N), 2) ?> </td>
                    </tr>

                    <tr>
                        <td> Smallest </td>
                        <td> <?php echo $overallMin ?> </td>
                    </tr>

                    <tr>
                        <td> Largest </td>
                        <td> <?php  echo $overallMax ?> </td>
                    </tr>
                    
                </table><br>
             
        </div>
    </div>



<div class="myName"> 
    <center>
        <b> &copy; Angela S. Matugas | October 30, 2024</b><br> <br>10<br>
    </center>
</div>

</body>
</html>

