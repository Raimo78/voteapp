<html>

<header>

<div class="header">
  <a href="#default" class="logo">Vote System App</a>
  <div class="header-right">
    <a class="active" href="#home">Home</a>
  </div>
</div>

</header>

<head>

<meta charset="UTF-8">
<meta name="description" content="Free Vote System App">
<meta name="keywords" content="HTML, CSS, JavaScript">
<meta name="author" content="Raimo Jämsén">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>My Vote System App</title>

<link rel="stylesheet" type="text/css" href="vote.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<svg id="animated" viewbox="0 0 100 100">
  	<circle cx="50" cy="50" r="45" fill="#FDB900"/>
  	<path fill="none" stroke-linecap="round" stroke-width="5" stroke="#fff"
        stroke-dasharray="251.2,0"
        d="M50 10
           a 40 40 0 0 1 0 80
           a 40 40 0 0 1 0 -80">
<animate attributeName="stroke-dasharray" from="0,251.2" to="251.2,0" dur="5s"/>           
</path>
<text id="count" x="50" y="50" text-anchor="middle" dy="7" font-size="20">100%</text>
</svg>

<script>

var count = $(('#count'));
$({ Counter: 0 }).animate({ Counter: count.text() }, {
  duration: 5000,
  easing: 'linear',
  step: function () {
    count.text(Math.ceil(this.Counter)+ "%");
  }
});

</script>

<style>

* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color:blue;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 10px;
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

@media screen and (max-width: 450px) {
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
</head>

<style>

body  {
  background-image: url("vaaliuurna.webp");
  background-repeat: no-repeat, repeat;
  background-color: #cccccc;
}

body{text-align:center;font-family: 'Open Sans', sans-serif;}
svg{width:25%;}

</style>

<body>

	<table id="tblResultsMain" align="center">
	     <tr>
		<td class="header">Result of the vote. Äänestys tulokset</td>
	     </tr>
	     <tr>
		<td>
		     <?php
			include "savevote.php";
		     ?>
		</td>
	     </tr>
	     <tr>
	     </tr>
	</table>

<style>

	.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 3%;
    background-color:blue;
    color: white;
    text-align: center;
  }

</style>

  <div class="footer">
    <p>&copy; 2020 By Raimo Jämsén Data2019C</p>
  </div>

</body>
</html>