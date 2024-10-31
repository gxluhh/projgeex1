<!DOCTYPE html>
<html>
<head>
    <title>Selection Statements</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
        * {
            box-sizing: border-box;
        }
        .bi-arrow-left-circle, h1{
            color:#F6C90E;
        }

        h2{
            color: whitesmoke; 
            font-family: 'Courier New', Courier, monospace;
            text-shadow: 
                -1px -1px 0 #000, /* Top-left shadow */
                1px -1px 0 #000, /* Top-right shadow */
                -1px  1px 0 #000, /* Bottom-left shadow */
                1px  1px 0 #000; /* Bottom-right shadow */
        }
        h3{color: #FEEE91; font-family: 'Courier New', Courier, monospace;}

        body{
            background-color: #181C14;
            color:#FFCF9D;
            background-image: url(https://wallpapers.com/images/hd/black-and-yellow-background-1920-x-1200-net3lntrc9yzs74c.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Courier New', Courier, monospace;
        }

        table {
            width: 100%;
            padding: 4px;
            align-items: center;
            border: 3px solid whitesmoke;
            border-radius: 30px;
        }

        td {
            padding: 3px;
            border: 1.6px solid #F6C90E;
            color: #FFCF9D;
            font-family: monospace;
            font-size: large;
        }

        .column{
            float: left;
            width: 25%;
            padding: 0 10px;
        }

        .row{
            margin: 0 -5px;
        }

        .row:after{
            content: "";
            display:table;
            clear: both
        }

        .card{
            padding: 16px;
            text-align: center;
            background-color: #262525;
            overflow: auto;
            border: 5px solid #000000;
            border-radius: 15px;
        }

         .myName {
            text-align: center;
            color: #F6C90E;
            margin-top: 30px;
            clear: both;
        }
       

    </style>


</head>

<body><br> &nbsp;
    <a href="mainPage.php"><i title="Back" class="bi-arrow-left-circle" style="font-size: 40px"></i></a>
    <h1 align="center">Selection Statements</h1><br>

    <?php 

    // Initialize five string variables
    $strings = array("Banana", "Apple", "Tangerine", "Strawberry", "Pineapple");

    // Initialize five integer variables
    $numbers = array(60, 4, 9, 20, 38);

    #sorts the values in ascending order
    function bubbleSortAsc(&$array){
        for($counter = 0 ; $counter < count($array) - 1; $counter++){
            for($i = 0; $i < count($array) - 1 - $counter;$i++){
                if($array[$i] > $array[$i+1]){
                    //perform swap
                    $temp = $array[$i];
                    $array[$i] = $array[$i+1];
                    $array[$i+1] = $temp;
                }
            }
        }
    }

    #sorts values in descending order
    function bubbleSortDesc(&$array){
        for($counter = 0; $counter < count($array) - 1; $counter++){
            for($i = 0; $i < count($array)-1-$counter; $i++){
                if($array[$i] < $array[$i+1]){
                    //Perform Swap
                    $temp = $array[$i];
                    $array[$i] = $array[$i+1];
                    $array[$i+1] = $temp;
                }
            }
        }
    }

    function displaySorted(&$array){
        
        for($counter = 0; $counter < count($array); $counter++){
            echo"<tr>";
            echo "<td><h4>$array[$counter]</h4></td>";
            echo"</tr>";
        }
        
    }

    function displayVariables(&$strings, &$numbers){
        for($c=0; $c < count($strings); $c++){
            echo"
            <tr>
                <td><h4>$strings[$c]<h4></td>

                <td><h4> $numbers[$c]<h4></td>
            </tr>";
        }
    }

    ?>

    <p>
    <div class="row">
        <div class="column">
            <div class="card">
                <h2>Initialized Variables</h2>
                <table>
                    <tr>
                        <td><h3> Strings </h3></td>
                        <td><h3> Integers </h3></td>
                    </tr>

                    <?php displayVariables($strings, $numbers); ?>
                    
                </table>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <h2>Strings in Ascending Order</h2>
                <table>
                    <?php 
                        bubbleSortAsc($strings);
                        displaySorted($strings); ?>
                </table>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <h2>Strings in Descending Order</h2>
                <table>
                    <?php 
                        bubbleSortDesc($strings);
                        displaySorted($strings); ?>
                </table>
            </div>
        </div>

        <?php
         if($numbers[0] % $numbers[4] == 0){
            $sum = 0;
            $product = 1;
            for($c=0; $c < count($numbers); $c++){
                $sum += $numbers[$c];
                $product = $product * $numbers[0];
            }
            $average = $sum / count($numbers);

            echo"
                <div class=\"column\">
                    <div class=\"card\">
                        <h2>Sum, Product & Average of the numbers</h2>
                        <table>
                            <tr>
                                <td> Sum </td>
                                <td> $sum </td>
                            </tr>

                            <tr>
                                <td> Product </td>
                                <td> $product </td>
                            </tr>

                            <tr>
                                <td> Average </td>
                                <td> $average </td>
                            </tr>

                        </table>
                    </div>
                </div>
            ";

         }else{
            
            echo"
                <div class=\"column\">
                    <div class=\"card\">
                        <h2>Numbers in Ascending Order</h2>
                        <table>";
                            bubbleSortAsc($numbers);
                            displaySorted($numbers);
                        echo"</table>
                    </div>
                </div>
            ";
         }

        ?>
    </div>  </p> <br>


    <div style="clear:both;"></div>
        <div class="myName">
            <small> 
                <center>
                    <b> &copy; Angela S. Matugas | October 24, 2024</b><br> <br>6
                </center>
            </small>
        </div>
    <br><br>

    

</body>
</html>