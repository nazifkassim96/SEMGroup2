<?php

//include UserController file
require_once '../Controller/subjectRegistrationController.php';



?>




<!DOCTYPE html>
<html>
<head>
  <title>CHOOSE CLASS</title>
  <link rel="stylesheet" type="text/css" href="staff_subjectRegistration.css">
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
</head>

<body style="background-color:hsl(0, 100%, 100%);" width="100%" height="100%">
<!--CONTAINER TABLE-->
<header>
  <h3>SUBJECT REGISTRATION</h3>
<div class="navbar">
  <a href="HomepageStaff.php">Home</a>

    <div class="dropdown">
    <button class="dropbtn">Profile 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="ManageUserStaffs.php">User Profile</a>
     
    </div>
  </div> 

    <div class="dropdown">
    <button class="dropbtn">Subject 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
       <a href="addTimetable.php">TimeTable</a>
      <a href="chooseclass(staff).php">Attendance</a>
      <a href="chooseclassSR.php">Subject Registration</a>
      <a href="staffchooseclass.php">Student Performance</a>
    </div>
  </div> 

  <a href="payment2.php">Financial</a> 
</div>
</header>

<section>
  <nav>
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
  						<a href="AddMath.php">Additional Mathematics</a>
  						<a href="Biology.php">Biology</a>
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