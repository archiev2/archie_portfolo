<div class="container-fluid" id="navbar_container">
	<nav class="navbar navbar-default container" id="arc_navbar">
		<div class="container3">
		<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top_menu" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="top_menu">
				<ul class="nav navbar-nav" >
					<li class="active"><a href="#Home"><span class="fa fa-home"></span>&nbsp;&nbsp;Home</a></li>
					<li ><a href="#About"><span class="fa fa-info"></span>&nbsp;&nbsp;About</a></li>
					<!--<li ><a href="#Skills"><span class="fa fa-codepen"></span>&nbsp;&nbsp;Skills</a></li>-->
					<li ><a href="#Service"><span class="fa fa-cogs"></span>&nbsp;&nbsp;Service</a></li>
					<li ><a href="#Projects"><span class="fa fa-bar-chart"></span>&nbsp;&nbsp;Projects</a></li>
					<li ><a href="#Contact"><span class="fa fa-envelope-square"></span>&nbsp;&nbsp;Contact</a></li>
				</ul>
				<div class="navbar-right fix_top_button" id="top_fix_button">
					
				</div>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
</div>
<style>
	#top_menu a:hover{
		background: #20b9eb;
		color: #fff;
	}
	#top_menu .active a{
		background: #20b9eb;
		color: #fff;
	}
	#navbar_container{
		height: 50px;
		border: 0px solid red;	
		background-color:transparent;
	}
	
	#arc_navbar{
		
		display: block;
		font-weight: bold;
		padding: 5px;
		background-color:transparent;
		border: 0px;
	
	}
	.navbar_fix{
		position: fixed;
		top: 5px;
		z-index: 9999;
		display: block;
		width: 100%;
		left: 0;
		
		
	}
	.navbar_static{
		background: #fff!important;
	}
	#top_menu a{
		border: 1px solid #20b9eb;
		padding: 7px 15px;
		font-size: 15px;
		display: inline-block;
		margin: 0px 5px;
		border-radius: 10px;
		color: #20b9eb;
		background: #fff;
	}
	
</style>