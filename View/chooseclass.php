<?php


//include AttendanceController file
require_once '../Controller/AttendanceController.php';
// if form is submitted



?>

<!DOCTYPE html>
<html>

	<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CHOOSE CLASS</title>


    <link rel="stylesheet" type="text/css" href="attendancecss.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">


</head>
<body style="background-color:hsl(0, 100%, 100%);" width="100%" height="100%">
<!--CONTAINER TABLE-->
<header>
  <h3>A T T E N D A N C E</h3>
<div class="navbar">
  <a href="HomepageTeacher.php">Home</a>

    <div class="dropdown">
    <button class="dropbtn">Profile 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="ManageUserTeachers.php">User Profile</a>

    </div>
  </div> 

    <div class="dropdown">
    <button class="dropbtn">Subject 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="addAnnouncement.php">TimeTable</a>
      <a href="chooseclass.php">Attendance</a>
      <a href="chooseclassP.php">Student Performance</a>
    </div>
  </div> 

  <a href="#financial">Financial</a> 
</div>
</header>

<section>
  <nav >
    <form method="POST" action="">
    <table>


        <tr>
            <td>
            </td><td>
            </td><td>
            </td><td>
            </td><td>
            </td><td>
            </td><td>
            </td><td>
            </td><td>
            </td><td>
            </td><td>
            


              <div class="dropdown">
              <button onclick="myFunction()" class="dropbtn"><p><font color="purple" size="5">Choose Class</font></p></button>
              <div id="myDropdown" class="dropdown-content">
                <a href="AddMathA.php">Additional Mathematics (Section A)</a>
                <a href="AddMathA.php">Additional Mathematics (Section A)</a>
                <a href="MathA.php">Mathematics (Section A)</a>
                <a href="MathB.php">Mathematics (Section B)</a>
                <a href="PhysicsA.php">Physics (Section A)</a>
                <a href="PhysicsB.php">Physics (Section B)</a>
                <a href="BiologyA.php">Biology (Section A)</a>
                <a href="BiologyB.php">Biology (Section B)</a>
                <a href="ChemistryA.php">Chemistry (Section A)</a>
                <a href="ChemistryB.php">Chemistry (Section B)</a>
                <a href="SejarahA.php">Sejarah (Section A)</a>
                <a href="SejarahB.php">Sejarah (Section B)</a>
                <a href="Eng.php">English</a>
                <a href="Bm.php">Bahasa Melayu</a>

 
              </div>
            </div>

    
        </tr>
    </table>
    
</form>

        
  </nav>
  
  <article>
    <p align="center" ><font color="white" size="6"><b>Announcement</b></font></p>
    <div style="height:150px;width:270px;background-color: white;border:1px solid #ccc;font:12px/20px Georgia, Garamond, Serif;overflow:auto;" >
        Additional Mathematics class on Sunday morning has been cancelled.
        <br>
        -----------------------------------------
        <br>
        Physics class on Sunday night has been cancelled.
        <br>
        -----------------------------------------
        <br>
        Biology class on Saturday morning has been cancelled.
        <br>
        -----------------------------------------
        <br>
        Mathematics class on Saturday night has been cancelled.
        <br>
        -----------------------------------------
        <br>

        </div>

  </article>
</section>

<footer>
  <p>Copyright 2018 A-Prime Learning Centre. All right reserved.</p>
</footer>
</body>
</html>