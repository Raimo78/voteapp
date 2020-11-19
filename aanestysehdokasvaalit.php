<!DOCTYPE html>
<html>

<head> 

    <meta charset="utf-8" > 
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Raimo Voting System</title>
	<link rel="stylesheet" type="text/css" href="vote.css"/>
	<script language="javascript">
	     function setVote(voteName)
	     {
	      	document.getElementById("votefor").value = voteName;
	     }
	     function confirmSubmit() 
	     { 
		if (document.getElementById("votefor").value == "")
		{
		     var agree=confirm("Please select an entry before voting."); 
		     return false; 
		}
	     } 
	</script>
</head>

	<FORM id="frmVote" action="results.php" method="POST">
	     <table id="tblMain" align="center">
	       	<tr>
			<td class="header">Simple Vote App</td>
	     	</tr>
		<tr>
			<td>
			     <?php
				include "loadvote.php";
			     ?>
			</td>
		</tr>
		<tr>
			<td>
			     <input name="votefor" type="hidden"/>
			</td>
		</tr>
 		<tr>
			<td class="button">
			     <INPUT id="btnVote" onclick="return confirmSubmit()" type="submit" value="Vote"/>
			</td>
		</tr>
		<tr>

<style>

* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: blue;
  padding: 20px 10px;
}

.header a {
  float: center;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>


<div class="header">
  <a href="#default" class="logo">Vote System App Municipal Elections Finland 2021</a>
  <div class="header-right">
    <a class="active" href="#home">Home</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>
</div>

<title>Vote Kuntavaalit 2021</title>

<body>

<style>

body  {
  background-image: url("votesystem.jpg");
  background-repeat: no-repeat, repeat;
  background-color: #cccccc;
}
  #loader {
    position: absolute;
    left: 50%;
    top: 50%;
    z-index: 1;
    width: 150px;
    height: 150px;
    margin: -75px 0 0 -75px;
    border: 16px solid #f3f3f3;
    border-radius: 50%;
    border-top: 16px solid #3498db;
    width: 120px;
    height: 120px;
    -webkit-animation: spin 2s linear infinite;
    animation: spin 2s linear infinite;
  }
  
  @-webkit-keyframes spin {
    0% { -webkit-transform: rotate(0deg); }
    100% { -webkit-transform: rotate(360deg); }
  }
  
  @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }
  
  .animate-bottom {
    position: relative;
    -webkit-animation-name: animatebottom;
    -webkit-animation-duration: 3s;
    animation-name: animatebottom;
    animation-duration: 3s
  }
  
  @-webkit-keyframes animatebottom {
    from { bottom:-100px; opacity:0 } 
    to { bottom:0px; opacity:1 }
  }
  
  @keyframes animatebottom { 
    from{ bottom:-100px; opacity:0 } 
    to{ bottom:0; opacity:1 }
  }
  
  #myDiv {
    display: none;
    text-align: center;
  }
  </style>
  
  <body onload="myFunction()" style="margin:0;">
  
  <div id="loader"></div>
  
  <div style="display:none;" id="myDiv" class="animate-bottom">
    <h2>Thank you so much!</h2>
  </div>
  
  <script>
  var myVar;
  
  function myFunction() {
    myVar = setTimeout(showPage, 3000);
  }
  
  function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("myDiv").style.display = "block";
  }
  </script>

<div style="background-color:blue">
<h2 style="color: white">Äänestys app</h2>
</div>
<div>
<button id="myBtn">&emsp;+ Add Poll &emsp;</button>
</div>
<div>
<table id="tasksTable">
<thead>
  <tr style="background-color:blue">
    <th style="width: 150px;">Name</th>
    <th style="width: 250px;">Desc</th>
    <th style="width: 120px">Date</th>
    <th style="width: 120px class=fa fa-trash"></th>
  </tr>

</thead>
<tbody></tbody>
</table>
</div>

<div id="myModal" class="modal">

<div class="modal-content">

<div class="modal-header">

  <span class="close">&times;</span>
  <h3> Add Task</h3>
</div>

<div class="modal-body">
  <table style="padding: 28px 50px">
    <tr>
      <td style="width:150px">Name:</td>
      <td><input type="text" name="name" id="taskname" style="width: -webkit-fill-available"></td>
    </tr>
    <tr>
      <td>
        Desc:
      </td>
      <td>
        <textarea name="desc" id="taskdesc" cols="60" rows="10"></textarea>
      </td>
    </tr>
  </table>
</div>

<div class="modal-footer">
  <button type="submit" value="submit" style="float: centre;" onclick="addTasks()">SUBMIT</button>
  <br>
  <br>
  <br>
</div>

</div>
</div>

<div class="hero-image">
<div class="hero-text">
<h1 style="font-size:20px">I am Vote System</h1>
</div>
</div>

<style>
  h1 {text-align: center;}
  p {text-align: center;}
  div {text-align: center;}
  </style>
  
<h1 style="color:Tomato;">VOTE 2021 Kuntavaalit</h1>

<div class="card">
  <img src="ehdokas1.jpg" alt="ehdokas1" style="width:50%">
  <h1>Ehdokas1</h1>
  <p class="title">Datanomi opiskelija</p>
  <p>Esedu</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>

  <div class="card">
  <img src="ehdokas1.jpg" alt="ehdokas2" style="width:50%">
  <h1>Ehdokas2</h1>
  <p class="title">Datanomi opiskelija</p>
  <p>Esedu</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>

<h2>Vote Here</h2>

<h3 id="results">
    total: 0
    ehdokas1: 0
    ehdokas2: 0
    ehdokas3: 0
    ehdokas4: 0
    ehdokas5: 0
    ehdokas6: 0
    ehdokas7: 0
    ehdokas8: 0
    ehdokas9: 0
    ehdokas10: 0

</h3>

  <button type="button" id="ehdokas1-button">Click to vote for ehdokas1</button>
  <button type="button" id="ehdokas2-button">Click to vote for ehdokas2</button>
  <button type="button" id="ehdokas3-button">Click to vote for ehdokas3</button>
  <button type="button" id="ehdokas4-button">Click to vote for ehdokas4</button>
  <button type="button" id="ehdokas5-button">Click to vote for ehdokas5</button>
  <button type="button" id="ehdokas6-button">Click to vote for ehdokas6</button>
  <button type="button" id="ehdokas7-button">Click to vote for ehdokas7</button>
  <button type="button" id="ehdokas8-button">Click to vote for ehdokas8</button>
  <button type="button" id="ehdokas9-button">Click to vote for ehdokas9</button>
  <button type="button" id="ehdokas10-button">Click to vote for ehdokas10</button>


<script src="myvotingsystem.js" type="text/javascript"></script>

<style>

  .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}
  .footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 4%;
    background-color:blue;
    color: white;
    text-align: center;
  }
</style>

  <div class="footer">
    <p>By Raimo Jämsén Data2019C</p>
  </div>
  
<div class="main">
  <div class="circle"></div>
</div>

</body> 
</html>