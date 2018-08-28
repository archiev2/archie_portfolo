<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
	body {
		position: relative; 
		font-size: 25px;
	}
	.con{
		padding-top:50px;
		height:650px;
		color: #fff;
		padding: 50px;
	}
	#con1 { 
		background-color: #1E88E5; 
		
		}
	#con2 { background-color: #673ab7; }
	#con3 { background-color: #ff9800; }
	#my_pic{
		width: 200px; 
		height: 200px;
		border: 1px solid red;
		background: #c2c2c2;
		float: right;
		margin: 10px;
	}
	.clr{ clear: both; }
	h1{ margin: 50px; }
	p { padding: 10px; }
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>                        
		</button>
		<a class="navbar-brand" href="#">Hi I'm Archie</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#con1">About</a></li>
          <li><a href="#con2">Skills</a></li>
          <li><a href="#con3">Experience</a></li>
          <li><a href="#con4">Service</a></li>
          <li><a href="#con5">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>    

<div id="con1" class="container-fluid con">
	<div id="my_pic"></div>
	
  <h1>ABOUT ME</h1>
  <div class="clr"></div>
	<p>
	I'm a full stack php developer with over 7 years of experience in web development, project management, Q&A, technical support, debugging, and training staff within eCommerce technologies and user interface application. Proven ability in optimizing web functionality that improve data retrieval and workflow efficiencies.
	</p>
	<p>
	I am a very hard working and extremely results-oriented individual and proactive in finding cost-effective solutions and I'm confident that i can work with my future clients well. 
	</p>
</div>

<div id="con2" class="container-fluid con">
	<script src="https://cdn.jsdelivr.net/npm/jqplot@1.0.9/jqplot.cursor.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jqplot@1.0.9/jqplot.donutRenderer.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jqplot@1.0.9/jqplot.highlighter.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jqplot@1.0.9/jquery.jqplot.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jqplot@1.0.9/jquery.jqplot.min.js"></script>


	<h1>Skills and Tools</h1>
	<p></p>
</div>
<div id="con3" class="container-fluid con">
  <h1>Section 3</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>
<div id="con4" class="container-fluid con">
  <h1>Section 4 Submenu 1</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>
<div id="con5" class="container-fluid con">
  <h1>Section 4 Submenu 2</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>

</body>
</html>
