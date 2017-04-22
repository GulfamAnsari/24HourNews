<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!--Main Css -->
	<link rel="stylesheet" href="style.css">
	<!--Icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 
   <link href='rangeSlider.css' rel='stylesheet'> 
	<!--Non JavaScript Tag-->
	<noscript>
		JavaScript is Not Enable.
		For full functionality of this site it is necessary to enable JavaScript.
		Here are the <a href="http://www.enable-javascript.com/" target="_blank">
		instructions how to enable JavaScript in your web browser</a>.
	</noscript>
	<style>
		.heading
		{
		font-family:Comic Sans MS;
		font-size:20px;
		font-weight:bold;
		}
		.para
		{
		font-family:Euphemia;
		font-size:15px;
		}
		.navHeading
		{
		font-size:16px;
		font-family:Microsoft JhengHei;
		text-transform: uppercase;
		line-height:2px;
		word-spacing:1px;
		}
		.navbar-custom
		{
		position:relative;
		background-color:#378DFF;
		}
		.navbar-custom #smallMenu ul li a
		{
		color:white;
		}
		.navbar-custom #smallMenu ul li a:hover
		{
		background-color:#D6EFED;
		color:#535857;
		}
		
		
		
		.header
		{
			padding:20px 0px 20px 0px;
			background-color:white;
		}
		
		.header .header-search #s
		{
			border:none;
			background: #EFEBE7;
			width:80%;
			padding:10px;
			
		}
		.header .sbutton
		{
			border:none;
			background-color: #f47555;
			color:white;
			width: 40px;
			height: 40px;
			font-size:20px;
			
		}
		.header .social
		{
			text-align:right;
			margin-top:20px;
			
		}
		.header .social ul li a
		{
			color:white;
			padding:15px;
			
		}
		@media (max-width: 768px) 
		{
		.header .col-sm-2,.header .col-sm-4
		{
			text-align:center;
		}
		}
		
	</style>
</head>
<body style="background-color: #f0ede9;">
<!--Header--->
<div class="container header">
	<div>
		<div class="col-sm-2">
			<a><img src="http://www.news24nepal.tv/wp-content/themes/news24desktop/images/logo.png" height="50px" style="margin-top:-15px"></img></a>
		</div>
		<div class="col-sm-6 header-search text-center" >
			<form method="get" id="searchform" class="search-form" >
				<fieldset>
					<input type="text" name="s" id="s" value="" placeholder="What are you looking for?"  />
					<button id="search-image" class="sbutton" type="submit" value="">
							<i class="fa fa-search"></i>
					</button>
				</fieldset>
			</form>
		</div>

		<div class="social col-sm-4">
			<ul class="list-inline ">
				<li><a href="#" style="background: #375593"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#" style="background: #0eb6f6"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#" style="background: #dd4b39"><i class="fa fa-youtube"></i></a></li>
				<li><a href="#" style="background: #e32c26"><i class="fa fa-google-plus"></i></a></li>
			</ul>
		</div>
	</div>
</div>

<!----------Navigation bar---------- -->
<div class="container navbar navbar-default navbar-custom navbar-fixed-top " >
	<div >
		<div class="navbar-header" >
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#smallMenu">
				<i class="fa fa-bars" style="color:white">Menu</i>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="smallMenu" >
			<ul class="nav navbar-nav navbar-left">
				<li><a  class="navHeading" href="#"><i class="fa fa-home" style="padding-right:5px"></i>Top Stories</a></li>
				<li><a  class="navHeading" href="#">World</a></li>
				<li><a  class="navHeading" href="#">India</a></li>
				<li><a  class="navHeading" href="#">City</a></li>
				<li><a  class="navHeading" href="#">Technology</a></li>
				<li><a  class="navHeading" href="#">Sports</a></li>
				<li><a  class="navHeading" href="#">Entertainment</a></li>
				<li><a  class="navHeading" href="#">Bussiness</a></li>
				<li><a  class="navHeading" href="#">Politics</a></li>
			</ul>
		</div>
	</div>
</div>

	
		<!--------------------------------
		||	JavaScript					||
		---------------------------------->	
		<!--Bootstrap jQuery library -->
		<script src="bootstrap/jquery/jquery.min.js"></script>
		<!--Bootstrap JavaScript -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>