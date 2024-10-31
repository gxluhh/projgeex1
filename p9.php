<!DOCTYPE html>

<html>
<head><title>Single-dimensional Array</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <style>
        body{
            background-color: #000000;
            background-image: url(https://wallpaper-mania.com/wp-content/uploads/2018/09/High_resolution_wallpaper_background_ID_77700338562.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            color: #B5C18E; 
            font-family: 'Courier New', Courier, monospace;
        }
        .bi-arrow-left-circle{color:#A0D683;}

        .item-container {
            display: flex;
            gap: 50px; /* Add space between items */
            justify-content: center;
            color: #152A38;
            padding: 50px;
        }

        .item2 {
            background-color: #181C14; 
            height: 100%;
            width: 100%;
            font-size: 20px;
            justify-content: center;
            text-align: center;
            border-radius: 10px;
            color: #E7F6F2;
            box-shadow: 1px 2px 8px 6px #A0D683;
            overflow: auto;
        }
        .item1 {
            background-color: #181C14; 
            height: 100%;
            width: 100%;
            font-size: 20px;
            justify-content: center;
            text-align: center;
            border-radius: 10px;
            color: #E2DCC8;
            box-shadow: 1px 2px 8px 6px #D3EE98;
            overflow: auto;
        }

        table {
            width: 90%;
            border-collapse: collapse;
            margin: 0 auto;
        }

        td, th{
            padding: 8px;
            border: 1.9px solid #3C3D37;
            font-family: 'Courier New', Courier, monospace;
            align-items: center;
        }
        
        th{
            color: #7EAA92;
        }

        h3{color: #5C8374;}

    </style>
</head>

<body><br>&nbsp;
<a href="mainPage.php"><i title="Back" class="bi-arrow-left-circle" style="font-size: 40px"></i></a>
<h1><center>Single-dimensional Array</center></h1>


<?php
    // 1. Parallel array with 10 people's information (name, age, sex, nationality)
    $people = [
        ["name" => "Rodrigo", "age" => 25, "sex" => "Female", "nationality" => "Filipino"],
        ["name" => "Langston", "age" => 30, "sex" => "Male", "nationality" => "American"],
        ["name" => "George", "age" => 22, "sex" => "Male", "nationality" => "Canadian"],
        ["name" => "Diana", "age" => 28, "sex" => "Female", "nationality" => "British"],
        ["name" => "Emory", "age" => 35, "sex" => "Female", "nationality" => "Australian"],
        ["name" => "Clyde", "age" => 27, "sex" => "Male", "nationality" => "German"],
        ["name" => "Miles", "age" => 24, "sex" => "Female", "nationality" => "Mexican"],
        ["name" => "Athena", "age" => 32, "sex" => "Male", "nationality" => "Japanese"],
        ["name" => "Geia", "age" => 21, "sex" => "Female", "nationality" => "Korean"],
        ["name" => "James", "age" => 29, "sex" => "Male", "nationality" => "Indian"]
    ];

    // 2. Function to display the array
    function displayPeople($people) {
        foreach ($people as $person) {
            echo"<tr>";

            echo "<td>" . $person['name'] . "</td> 
                <td>" . $person['age'] . "</td> 
                <td>" . $person['sex'] . "</td> 
                <td>" . $person['nationality'] . "</td>";

            echo"</tr>";
        }
        
    }

    // 3. Function to sort the array by name (ascending) using bubble sort (custom sort function)
    function sortByName(&$people) {
        $n = count($people);
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if (strcasecmp($people[$j]['name'], $people[$j + 1]['name']) > 0) {
                    // Swap if current name is greater than the next name (case-insensitive)
                    $temp = $people[$j];
                    $people[$j] = $people[$j + 1];
                    $people[$j + 1] = $temp;
                }
            }
        }
    }

?>
    <div class="item-container"> 
        <div class="item1"> 
            <h3>Unsorted List of People</h3>  
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Sex</th>
                        <th>Nationality</th>
                    </tr>

                    <?php displayPeople($people);?>
                </table><br>
        </div>

        <div class="item2"> 
            <h3>Sorted List of People</h3>  
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Sex</th>
                        <th>Nationality</th>
                    </tr>

                    <?php 
                        sortByName($people);
                        displayPeople($people);
                    ?>

                </table><br>
        </div>
    </div>

<div class="myName"> 
    <center>
        <b> &copy; Angela S. Matugas | October 28, 2024</b><br> <br>9<br>
    </center>
</div>

</body>
</html>

