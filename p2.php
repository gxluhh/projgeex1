<!DOCTYPE html>

<html>
<head> <title>The Use of Variables</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <style type="text/css">
        .bi-arrow-left-circle{
            color: #FFB38E;
            font-size: 40px;
        }

        body{
            background-image: url(https://images.hdqwalls.com/wallpapers/grid-lines-web-5k-uc.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Courier New', Courier, monospace;
            backdrop-filter: blur(3px);
        }

        table{
            border-radius: 6px;
            box-shadow: 3px 5px 5px red, -3px -5px 5px red;
        }
        th{background-color: #3D0000;}
        td{background-color: #a52a2a; color: aliceblue;}
    </style>
</head>

<body bgcolor = "black"><br>&nbsp;
<a href="mainPage.php"><i title="Back" class="bi-arrow-left-circle"></i></a>

<br>
<h1><center><font color="#FFB38E"> The Use of Variables</font> </center></h1>
<br><br>

<center><p>
<?php
    # Declaring whole numbers (integers) representing item quantities
    $item1_quantity = 5;
    $item2_quantity = 10;
    $item3_quantity = 15;
    $item4_quantity = 20;
    $item5_quantity = 25;

    # Declaring floating-point numbers representing item prices
    $item1_price = 19000.99;
    $item2_price = 2900.49;
    $item3_price = 1500.75;
    $item4_price = 450.30;
    $item5_price = 100.99;

    # Declaring strings representing item descriptions
    $item1 = "Laptop";
    $item2 = "Smartphone";
    $item3 = "Tablet";
    $item4 = "Headphones";
    $item5 = "Charger";

    # Declaring characters representing item categories (e.g., E for electronics, A for accessories)
    $item1_category = 'A';
    $item2_category = 'B';
    $item3_category = 'C';
    $item4_category = 'D';
    $item5_category = 'E';
 
?>  

    <table width="60%" bordercolor="8a3324" border="4" cellpadding="20" cellspacing="5">
        <tr align="center">
            <th><font color="ffbf00"> Item Description</th>
            <th><font color="ffbf00"> Quantity</th>
            <th><font color="ffbf00"> Price</th>
            <th><font color="ffbf00"> Category</th>
        </tr>

        <tr align="center">
            <td> <?php echo "$item1"; ?></td>
            <td> <?php echo "$item1_quantity"; ?></td>
            <td> Php<?php echo " $item1_price"; ?></td>
            <td> <?php echo "$item1_category"; ?></td>
        </tr>

        <tr align="center">
            <td> <?php echo "$item2"; ?></td>
            <td> <?php echo "$item2_quantity"; ?></td>
            <td> Php<?php echo " $item2_price"; ?></td>
            <td> <?php echo "$item2_category"; ?></td>
        </tr>

        <tr align="center">
            <td> <?php echo "$item3"; ?></td>
            <td> <?php echo "$item3_quantity"; ?></td>
            <td> Php<?php echo " $item3_price"; ?></td>
            <td> <?php echo "$item3_category"; ?></td>
        </tr>

        <tr align="center">
            <td> <?php echo "$item4"; ?></td>
            <td> <?php echo "$item4_quantity"; ?></td>
            <td> Php<?php echo " $item4_price"; ?></td>
            <td> <?php echo "$item4_category"; ?></td>
        </tr>

        <tr align="center">
            <td> <?php echo "$item5"; ?></td>
            <td> <?php echo "$item5_quantity"; ?></td>
            <td> Php <?php echo " $item5_price"; ?></td>
            <td> <?php echo "$item5_category"; ?></td>
        </tr>
    </table>

</p>
</center>

<br><br>
<p><small><font color="#FFB38E"><center><b> &copy; Angela S. Matugas | October 14, 2024</b><br> <br>2</center></font> </small></p>
<br><br>
</body>
</html>

