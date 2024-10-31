<!DOCTYPE html>

<html> 
<head> <title>User-defined Functions</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <style>
        body{
            background-color: #1A120B;
            color: #FFF0D1;
            background-image: url(https://images.unsplash.com/photo-1714924969684-b9d76c6030b8?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8ZGFyayUyMGJyb3dufGVufDB8fDB8fHww);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .bi-arrow-left-circle{ color: #FFF0D1;}

        .item-container {
            display: flex;
            gap: 25px; /* Add space between items */
            justify-content: center;
            color: #152A38;
        }

        .item4 {
            background-color: #54473F; 
            height: 100%;
            width: 100%;
            max-width: 500px;
            font-size: 20px;
            justify-content: center;
            text-align: center;
            border-radius: 10px;
            color: whitesmoke;
            box-shadow: 1px 2px 8px 6px #FAEED1;
            overflow: auto;
        }

        .item3{
            background-color: #3B3030;
            height: 100%;
            width: 100%;
            max-width: 500px;
            font-size: 20px;
            text-align: center;
            border-radius: 10px;
            color: #FFF0D1;
            box-shadow: 1px 2px 8px 6px #FAEED1;
            overflow: auto;
        }
        .item2 {
            background-color: #76453B; 
            height: 100%;
            width: 100%;
            max-width: 500px;
            font-size: 20px;
            justify-content: center;
            text-align: center;
            border-radius: 10px;
            color: wheat;
            box-shadow: 1px 2px 8px 6px #FAEED1;
            overflow: auto;
        }
        .item1 {
            background-color: #664343; 
            height: 100%;
            width: 100%;
            max-width: 500px;
            font-size: 20px;
            justify-content: center;
            text-align: center;
            overflow: auto;
            border-radius: 10px;
            color: #EDDFE0;
            box-shadow: 1px 2px 8px 6px #FAEED1;
            overflow: auto;
        }

        table {
            width: 90%;
            margin: 0 auto;
        }

        td {
            padding: 8px;
            border: 1.9px solid #F5F5F7;
            align-items: center;
        }

        .problem, .functions, li, .sttmnt{
            padding-left: 90px;
            padding-right: 80px;
            font-size: larger;
            padding-bottom: 20px;
            color: wheat;
        }

        h2{
            color:#A87C7C;
            text-shadow: 1px 0.5px 1px wheat;
        }
        span{
            color: #FDAF7B;
            font-weight: bold;
        }

        h3{color: #D8D2C2;}

    </style>
</head>

<body><br>&nbsp;
<a href="mainPage.php"><i title="Back" class="bi-arrow-left-circle" style="font-size: 40px"></i></a>

<h1><center>User-defined Functions</center></h1>

<?php

    // Sample data: array of students with their scores
    $students = [
        ["name" => "Fyang", "math" => 85, "science" => 90, "english" => 88],
        ["name" => "Rain", "math" => 70, "science" => 75, "english" => 80],
        ["name" => "Kollette", "math" => 95, "science" => 85, "english" => 92],
        ["name" => "Kai", "math" => 60, "science" => 65, "english" => 70]
    ];

    // 1. Display student list with scores
    function displayStudents($students) {
        
        foreach ($students as $student) {
            echo "<tr>";

            echo "<td>" . $student['name'] . "</td> 
                <td>" . $student['math'] . "</td> 
                <td>" . $student['science'] . "</td> 
                <td>" . $student['english'] . "</td>";

            echo "</tr>";
        }
        
    }

    // 2. Calculate average score for each student
    function calculateAverage($student) {
        return ($student['math'] + $student['science'] + $student['english']) / 3;
    }

    // 3. Find the highest score for each student
    function getHighestScore($student) {
        return max($student['math'], $student['science'], $student['english']);
    }

    // 4. Find the lowest score for each student
    function getLowestScore($student) {
        return min($student['math'], $student['science'], $student['english']);
    }

    // 5. Calculate the class average for each subject
    function calculateClassAverage($students, $subject) {
        $total = 0;
        foreach ($students as $student) {
            $total += $student[$subject];
        }
        return $total / count($students);
    }

    // 6. Determine the highest score in a subject
    function getHighestInSubject($students, $subject) {
        $highest = 0;
        foreach ($students as $student) {
            if ($student[$subject] > $highest) {
                $highest = $student[$subject];
            }
        }
        return $highest;
    }

    // 7. Determine the lowest score in a subject
    function getLowestInSubject($students, $subject) {
        $lowest = 100;
        foreach ($students as $student) {
            if ($student[$subject] < $lowest) {
                $lowest = $student[$subject];
            }
        }
        return $lowest;
    }

    // 8. Assigns a grade to each student based on their average score
    function assignGrade($average) {
        if ($average >= 90) {
            return 'A';
        } elseif ($average >= 80) {
            return 'B';
        } elseif ($average >= 70) {
            return 'C';
        } elseif ($average >= 60) {
            return 'D';
        } else {
            return 'F';
        }
    }

    // 9. Find the top-performing student
    function getTopStudent($students) {
        $topStudent = null;
        $highestAverage = 0;
        foreach ($students as $student) {
            $average = calculateAverage($student);
            if ($average > $highestAverage) {
                $highestAverage = $average;
                $topStudent = $student['name'];
            }
        }
        return $topStudent;
    }

    // 10. Display all results
    function displayResults($students) {
        foreach ($students as $student) {
            $average = calculateAverage($student);
            $highest = getHighestScore($student);
            $lowest = getLowestScore($student);
            $grade = assignGrade($average);
            
            echo "<tr>";
                echo "<td>" . $student['name'] . "</td>";
                echo "<td>" . number_format($average, 2) . "</td>";
                echo "<td> $highest</td>";
                echo "<td> $lowest</td>";
                echo "<td> $grade </td>";
            echo "</tr>";
        }
    }
    
?>

<br><br><br>
       
       <div class="problem"> 
           <h2>Problem: </h2>  
                <span class="sttmnt">Managing the score of Students and performing operations such 
                as finding averages, highest/lowest scores, and grades. </span>
          
       </div> <br><br>

       <div class="functions">
            <h2> The following User-defined Functions are used:</h2>
        
            <p>
                <ol>
                    <li> <span class="func">displayStudents($students)</span>: Displays the list of students along with their scores in each subject.</li>
                    <li> <span>calculateAverage($student)</span>: Computes the average score for a student by summing up the scores in all subjects and dividing by 3.</li>
                    <li> <span>getHighestScore($student)</span>: Finds the highest score a student achieved across all subjects.</li>
                    <li> <span>getLowestScore($student)</span>: Finds the lowest score a student achieved across all subjects.</li>
                    <li> <span>calculateClassAverage($students, $subject)</span>: Calculates the average score for a specific subject (Math, Science, or English) for the entire class.</li>
                    <li> <span>getHighestInSubject($students, $subject)</span>: Finds the highest score in a specific subject for the entire class.</li>
                    <li> <span>getLowestInSubject($students, $subject)</span>: Finds the lowest score in a specific subject for the entire class.</li>
                    <li> <span>assignGrade($average)</span>: Assigns a letter grade (A, B, C, D, or F) based on the student’s average score.<br>
                            <ul>
                                <li> A if Average >= 90</li>
                                <li> B if Average >= 80</li>
                                <li> C if Average >= 70</li>
                                <li> D if Average >= 60</li>
                                <li> F if Average < 60</li>
                            </ul>
                        </li>
                    <li> <span>getTopStudent($students)</span>: Finds the student with the highest average score and returns their name.</li>
                    <li> <span>displayResults($students)</span>: Displays the average score, highest and lowest scores, and assigned grade for each student.</li>

                </ol>
            </p>
       </div>
    

<br> <br> <br> <br>
<div class="container">
    
    <!-- container for items -->
    <div class="item-container"> 
       
        <div class="item1"> 
            <h3>Student Scores</h3>  
                <table>
                   <tr bgcolor="C5705D" style="color: #FFDBB5; font-weight: bold;">
                        <td>Names</td>
                        <td>Math</td>
                        <td>Science</td>
                        <td>English</td>
                   </tr>

                   <?php displayStudents($students); ?>

                </table><br>
        </div>
        
        <div class="item2"> 
            <h3>Class Average for each Subject</h3> 
                <table>
                    <tr bgcolor="674636">
                        <td>Subject</td>
                        <td>Average</td>
                   </tr>

                   <tr>
                        <td>Math</td>
                        <td><?php echo number_format(calculateClassAverage($students, 'math'), 2) ?></td>
                   </tr>

                   <tr bgcolor="674636">
                        <td>Science</td>
                        <td><?php echo number_format(calculateClassAverage($students, 'science'), 2) ?></td>
                   </tr>

                   <tr>
                        <td>English</td>
                        <td><?php echo number_format(calculateClassAverage($students, 'english'), 2)?></td>
                   </tr>

                </table><br>
        </div>
        
        <div class="item3"> 
	      <h3>Highs and Lows of each Subject</h3> 
          <table>
                   
               <tr>
                    <td>Subject</td></td>
                    <td>Highest Score</td>
                    <td>Lowest Score</td>
               </tr>

               <tr bgcolor="C8A1E0" style="color: #3B3030; font-weight: bold;">
                    <td>Math</td>
                    <td><?php echo getHighestInSubject($students, 'math')?></td>
                    <td><?php echo getLowestInSubject($students, 'math')?></td>
                </tr>

                <tr>
                    <td>Science</td>
                    <td><?php echo getHighestInSubject($students, 'science')?></td>
                    <td><?php echo getLowestInSubject($students, 'science')?></td>
                </tr>

                <tr bgcolor="C8A1E0" style="color: #3B3030; font-weight: bold;">
                    <td>English</td>
                    <td><?php echo getHighestInSubject($students, 'english')?></td>
                    <td><?php echo getLowestInSubject($students, 'english')?></td>
                </tr>
          </table> <br>

        </div>

        <div class="item4"> 
	      <h3> Results</h3> 
          <table>
                <tr bgcolor="493628">
                    <td>Names</td>
                    <td>Average</td>
                    <td>Highest Score</td>
                    <td>Lowest Score</td>
                    <td>Grade</td>
                </tr>

                <?php displayResults($students) ?>

          </table> <br>

          <table> 
            <tr bgcolor="6F4E37">
                <td> Top Student</td>
                <td>
                    <?php echo getTopStudent($students) ?> 
                </td>
            </tr>
        </table><br>

        </div>
        
    </div>
</div><br><br>

<br><br>
<div class="myName">
    <center>
            <b> &copy; Angela S. Matugas | October 28, 2024</b><br> <br>8
    </center>
</div><br><br><br>

</body>
</html>

