<!DOCTYPE html>

<html>
<head><title>Manipulating Numbers</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #200F21;
            margin: 20px;
            background-image: url(https://images3.alphacoders.com/830/83067.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color:aliceblue;
        }

        .myName, .pTitle{
            color: #F3CCFF;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        h2,h1{
            text-align: center;
        }

        h3{
            color: #ddd;
            text-align: center;
            font-size: larger;
        }

        * {
            box-sizing: border-box;
            margin: 0 auto;
        }

        .card{
            background-color: #3E001F;
            padding: 20px;
            font-family: monospace;
            overflow: auto;
            border-radius: 15px;
        }

        .column{
            float:left;
            width: 50%;
            padding: 0 10px;
        }

        .column2{
            float:left;
            width: 95%;
            padding: 0 10px;
        }

        .row {
            display: flex;
            justify-content: center;
             /* Optional, adds space between the cards */
            margin: 20px auto;
        }


        .row:after{
            content: "";
            display: table;
            clear: both;
        }

        table {
            width: 90%;
            border-radius: 12px;
        }

        td, th{
            padding: 8px;
            border: 1px solid #ddd;
            text-align: center;
            border-radius: 10px;
        }

        h2{color: #F8BDEB;}
        th{
            background-color: #200F21;
        }
    </style>

</head>

<body ><br>&nbsp;

    <a href="mainPage.php"><i title="Back" class="bi-arrow-left-circle" style="font-size: 40px;"></i></a>
    <div class="pTitle">
        <h1 align="center">Manipulating Numbers</h1>
    </div> <br> <br>

    
    <?php
        //Midterm quizzes
        $Mq1 = 60;
        $Mq2 = 75;
        $Mq3 = 80;
        $Mq4 = 90;
        $MQaverage = ($Mq1 + $Mq2 + $Mq3 + $Mq4)/4;
        //Midterm Projects
        $Mp1 = 90;
        $Mp2 = 98;
        $MPaverage = ($Mp1+$Mp2)/2;
        //Midterm Major Exam
        $mExam = 80;

        //Midterm grade
        $midtermGrade = ($MQaverage * 0.30) + ($MPaverage * 0.20) + ($mExam * 0.50);
        
        //Tentative Final Quiz
        $TFq1 = 75;
        $TFq2 = 90;
        $TFq3 = 82;
        $TFq4 = 94;
        $TFQaverage = ($Mq1 + $Mq2 + $Mq3 + $Mq4)/4;
        //tentative project
        $TFp1 = 100;
        $TFp2 = 95;
        $TFPaverage = ($Mp1+$Mp2)/2;
        //tentative exam 
        $tfExam = 90;

        //tentative final grade
        $tFinalGrade = ($TFQaverage * 0.30) + ($TFPaverage * 0.20) + ($tfExam * 0.50);

        //Final-final Grade
        $FFinalGrade = ($midtermGrade + $tFinalGrade)/2;
        
    ?>

    <div class="row">
        <div class="column">
            <div class="card">
                <h2>MIDTERM GRADE</h2><br><hr>
                    <table>
                        <tr>
                            <th width="40%">
                                Quiz #
                            </th>

                            <th>
                                Score
                            </th>
                        </tr>

                        <tr>
                            <td>
                                1
                            </td>
                                
                            <td>
                                <?php echo"$Mq1"?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                2
                            </td>
                                
                            <td>
                                <?php echo"$Mq2"?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                3
                            </td>
                                
                            <td>
                                <?php echo"$Mq3"?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                4
                            </td>
                                
                            <td>
                                <?php echo"$Mq4"?>
                            </td>
                        </tr>

                        <tr bgcolor="#FFB38E" style="color: #200F21; font-weight: bolder;">
                            <td>
                                Average
                            </td>
                                
                            <td>
                                <?php echo"$MQaverage"?>
                            </td>
                        </tr>
                    </table><br><br>
                    <hr>
                    <table>
                        <tr>
                            <th width="40%">
                                Project #
                            </th>

                            <th>
                                Score
                            </th>
                        </tr>

                        <tr>
                            <td>
                                1
                            </td>
                                
                            <td>
                                <?php echo"$Mp1"?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                2
                            </td>
                                
                            <td>
                                <?php echo"$Mp2"?>
                            </td>
                        </tr>

                        <tr bgcolor="#FFB38E" style="color: #200F21; font-weight: bolder;">
                            <td>
                                Average
                            </td>
                                
                            <td>
                                <?php echo"$MPaverage"?>
                            </td>
                        </tr>
                    </table> <br><br>
                    <hr>
                    <table>
                        <tr>
                            <th width="40%">
                                Major Exam
                            </th>

                            <th>
                                Score
                            </th>
                        </tr>

                        <tr bgcolor="#FFB38E" style="color: #200F21; font-weight: bolder;">
                            <td width="40%">
                                Midterm Exam
                            </td>
                                
                            <td>
                                <?php echo"$mExam"?>
                            </td>
                        </tr>
                    </table><br><br>

                    <table>
                        <tr>
                            <td bgcolor="#750E21">
                                <h3>MIDTERM GRADE: <?php echo"$midtermGrade"?></h3>
                            </td>
                        </tr>
                    </table>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <h2>TENTATIVE FINAL GRADE</h2><br><hr>
                <table>
                        <tr>
                            <th width="40%">
                                Quiz #
                            </th>

                            <th>
                                Score
                            </th>
                        </tr>

                        <tr>
                            <td>
                                1
                            </td>
                                
                            <td>
                                <?php echo"$TFq1"?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                2
                            </td>
                                
                            <td>
                                <?php echo"$TFq2"?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                3
                            </td>
                                
                            <td>
                                <?php echo"$TFq3"?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                4
                            </td>
                                
                            <td>
                                <?php echo"$TFq4"?>
                            </td>
                        </tr>

                        <tr bgcolor="#FFB38E" style="color: #200F21; font-weight: bolder;">
                            <td>
                                Average
                            </td>
                                
                            <td>
                                <?php echo"$TFQaverage"?>
                            </td>
                        </tr>
                    </table><br><br>
                    <hr>
                    <table>
                        <tr>
                            <th width="40%">
                                Project #
                            </th>

                            <th>
                                Score
                            </th>
                        </tr>

                        <tr>
                            <td>
                                1
                            </td>
                                
                            <td>
                                <?php echo"$TFp1"?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                2
                            </td>
                                
                            <td>
                                <?php echo"$TFp2"?>
                            </td>
                        </tr>

                        <tr bgcolor="#FFB38E" style="color: #200F21; font-weight: bolder;">
                            <td>
                                Average
                            </td>
                                
                            <td>
                                <?php echo"$TFPaverage"?>
                            </td>
                        </tr>
                    </table> <br><br>
                    <hr>
                    <table>
                        <tr>
                            <th width="40%">
                                Major Exam
                            </th>

                            <th>
                                Score
                            </th>
                        </tr>

                        <tr bgcolor="#FFB38E" style="color: #200F21; font-weight: bolder;">
                            <td width="40%">
                                Midterm Exam
                            </td>
                                
                            <td>
                                <?php echo"$tfExam"?>
                            </td>
                        </tr>
                    </table><br><br>

                    <table>
                        <tr>
                            <td bgcolor="750E21">
                                <h3>TENTATIVE FINAL GRADE: <?php echo"$tFinalGrade"?></h3>
                            </td>
                        </tr>
                    </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="column2">
            <div class="card"><hr>
                <table>
                    <tr>
                        <td width="50%" bgcolor="#750E21">
                            <h1><?php echo"FINAL-FINAL GRADE"?></h1>
                        </td>

                        <td bgcolor="#750E21">
                            <h1><?php echo"$FFinalGrade"?></h1>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <br><br><br>
        <div class="myName">
            <p><small> <center><b> &copy; Angela S. Matugas | October 22, 2024</b><br> <br>3</center></small></p>
        </div>
    <br><br>

</body>
</html>

