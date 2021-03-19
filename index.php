<?php 
$title = "Welcome";
require_once "Includes/Header.php";

?>

 <div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Mercy's School Project</h1>
  <p>Electrical and Elecronic Engineering</p> 
  </div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="http://localhost/SchoolProject/Includes/CircuitDiagram.php#">Connection</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/SchoolProject/Includes/Tables.php">Results</a>
    </li>
  </ul>
</nav>


<div class="container" style="margin-top:30px">
<div class="row">
  <div class="col-sm-4">
    <h2>About Me</h2>
    <h5>Photo of me:</h5>
    <div class="fakeimg">
    <img src="Images/me.jpg" alt="Image of me"width="300" height="300" style="margin-bottom:10px">
    </div>
    <p>Some text about me. My Name is Mercy and I am a fifth Year student of Electrical
    and Electronic Enginneting at the University of Nairobi.I look foward to entering the workplace and adding value
    to my country.</p>
        <p></p>
    <hr class="d-sm-none">
  </div>
  <div class="col-sm-8">
    <h2>Incident Security Database</h2>
    <h5>About the Project, Jan 29, 2021</h5>
    <div class="fakeimg">
    <img src="Images/arduinoPj.jpg" alt="design picture"width="700" height="300" style="margin-bottom:10px">
    </div>
    <p></p>
    <p>The ISD is vital in storing network subscriber information at certain instancees of triggering for security 
    purposes eg in a GSM cell boundary. The database can be used to secure buildings.</p>
  </div>
</div>
</div>




<?php require_once "Includes/Footer.php";?>