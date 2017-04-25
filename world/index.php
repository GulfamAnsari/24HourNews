<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="/24HourNews/bootstrap/css/bootstrap.min.css">
	<!--Main Css -->
	<link rel="stylesheet" href="/24HourNews/style.css">
	<!--Icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--Non JavaScript Tag-->
	<noscript>
		JavaScript is Not Enable.
		For full functionality of this site it is necessary to enable JavaScript.
		Here are the <a href="http://www.enable-javascript.com/" target="_blank">
		instructions how to enable JavaScript in your web browser</a>.
	</noscript>
	<style>
	.mainBody
	{
		padding:50px;
	}
	#column
	{
		background-color:white;
		padding:10px;
		box-shadow:5px 0px 5px  #888888;
		border:solid #f0ede9 10px;
		height:500px;
		width:350px;
	}
	@media (max-width: 768px) 
	{
		.mainBody
		{
			margin:70px;
			padding:0px;
		}
	}
	</style>

</head>
<body style="background-color: #f0ede9;">
<!--Header--->
<div class="container header">
	<div>
		<div class="col-sm-2">
			<a href="/24HourNews/"><img src="http://www.news24nepal.tv/wp-content/themes/news24desktop/images/logo.png" height="50px" style="margin-top:-15px"></img></a>
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
				<li><a  class="navHeading" href="/24HourNews/world/">world</a></li>
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
<!----------Body---------- -->
<div class="container mainBody">
	<?php
	$xml=simplexml_load_file("http://indiatoday.intoday.in/rss/article.jsp?sid=36") or die("Error: Cannot create object");
		foreach($xml->channel->item as $item) 
		{ 
		echo "<div class=\"col-lg-4\" id=\"column\"><p class=\"heading\"> ".$item->title."</p><p class=\"para\">".$item->description."</p></div>";
		} 	
	?>

	
</div>
<!----------Footer---------- -->
<div class="footer " >
	<div class="container">
		<div class="col-sm-4">
			<p class="para">CONTACT US</p>
			<p class="para">CALL <span >+91-000-0000</span></p>
			<p class="para">EMAIL<span>abcxyz@gmail.com</span></p>
		</div>
		<div class=" col-sm-4 ">
				<p class="para" style="color:white;text-align:center;" >FOLLOW US</p>
				<div class="social ">
					<ul class="list-inline text-center" >
						<li><a href="#" style="background: #375593"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" style="background: #0eb6f6"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" style="background: #dd4b39"><i class="fa fa-youtube"></i></a></li>
						<li><a href="#" style="background: #e32c26"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
				
		</div>
		<div class="col-sm-4">
			<p class="para"  >NEWSLETTER</p>
			<p class="para" >Subscribe  to our newslater to receive news and updates from our websites</p>
			<input type="text" name="subscribe"  placeholder="Enter Email" />
			<button type="button" class="btn btn-success">Subscribe</button>
		</div>
	</div>
</div >



	
<!--------------------------------
||	JavaScript					||
---------------------------------->	
<!--Bootstrap jQuery library -->
<script src="/24HourNews/bootstrap/jquery/jquery.min.js"></script>
<!--Bootstrap JavaScript -->
<script src="/24HourNews/bootstrap/js/bootstrap.min.js"></script>
<!--
		<script>
		
		  var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			  var i;
		  var xmlDoc = this.responseXML;
		  var x = xmlDoc.getElementsByTagName("item");
		  var arr= ["http://media1.s-nbcnews.com/i/newscms/2017_14/1956546/170406-world-syria-trump-rose-garden-0913_f4a4aa9002e0001281409949eb228328.jpg"
		  ,"http://media2.s-nbcnews.com/i/newscms/2017_16/1921251/170303-sessions-0534_0_161946dd782c5884efbfb0db26a72cd7.jpg",
		  "http://media1.s-nbcnews.com/i/newscms/2017_16/1973796/obit_erin_moran_65335-jpg-cde79_379d03749fa02ecd0d4b04b05b0064ea.jpg",
		  "http://media2.s-nbcnews.com/i/newscms/2017_16/1973831/pencekangaroo_a2c4d35a4214ed58ec3902a58e13daab.jpg",
		  "http://media4.s-nbcnews.com/i/newscms/2017_16/1972486/170421-marine-le-pen-rally-france-ew-1034a_aa4b377aedc310772dddf35a6186aa63.jpg",
		  "http://media3.s-nbcnews.com/i/MSNBC/Components/Video/201704/2017-04-23T13-17-48-166Z--1280x720.jpg",
		  "http://media3.s-nbcnews.com/i/newscms/2017_01/1776536/161031-capitol-senate-2245_ede32a8d6f1c975229585379459b248a.jpg",
		  "http://media3.s-nbcnews.com/i/newscms/2017_16/1974156/170423-osce-car-explosion-1153a-rs_f8b1df96dc01f7bd3b668656a5fddd9a.JPG",
		  "http://media1.s-nbcnews.com/i/newscms/2017_16/1973821/election_18c611862afb8eed43f6b4cb0b8e174e.jpg",
		  "http://media4.s-nbcnews.com/i/newscms/2016_34/1685836/airlines_3257e1beb1c66c6ad600a40c96531def.jpg",
		  "http://media2.s-nbcnews.com/i/newscms/2017_16/1973581/170422-cecilia-alvear-1138-sg_68a81f1dc678ffaa7ca2797a1f66acf1.jpg",
		  "http://media2.s-nbcnews.com/i/newscms/2017_12/1942381/jcc-ejo-032317_3e076b1e8e8864bfcb39e592dad803dd.jpg",
		  "http://media3.s-nbcnews.com/i/newscms/2017_15/1966171/170415-world-northkorea-soldiers-parade-0704_9cb003b266a34bb5012e02e681457dea.jpg",
		  "http://media3.s-nbcnews.com/i/newscms/2017_16/1973961/170423-hash-browns-943a-rs_copy_ed98d73d198c01f74a8b9cf9f79d3c0b.jpg",
		  "http://media4.s-nbcnews.com/i/newscms/2017_16/1973711/170422-science-march-maggie-3-539p-rs_cb1ac093eb9f19482965a725fc9a186f.jpg",
		  "http://media2.s-nbcnews.com/i/newscms/2017_16/1970946/170420-jaguar-los-angeles-ew-935a_6d1dca4537d6d268e0e3a48a9afc03cb.jpg",
		  "http://media1.s-nbcnews.com/i/newscms/2017_15/1966161/170415-world-northkorea-missile-submarine-0701_f5a84a50a9dc79e896b9febee485b307.jpg",
		  "http://media1.s-nbcnews.com/i/newscms/2017_15/1966871/ss-170416-tax-day-protest-2-423p-rs_2035538aacd696abafe52451c67f6f11.JPG"];
		  for (i = 0; i <x.length; i++) { 
		   
		   var title= x[i].getElementsByTagName("title")[0].childNodes[0].nodeValue;
		   var des= x[i].getElementsByTagName("description")[0].childNodes[0].nodeValue;
		   
		   
		  var a= document.createElement("div");
			a.id = 'column';
			a.className = 'col-lg-4';
			
			var image=document.createElement("img");
			image.src=arr[i];
			image.style.height='250px';
			image.className='img img-responsive';
			
		var head= document.createElement("h1");  
		var para= document.createElement("p");       
		  var t = document.createTextNode(title);    
		  var d = document.createTextNode(des); 
		  head.appendChild(t); 
			head.className='heading';
			para.appendChild(d);    
			para.className='para';
			a.appendChild(image); 
		a.appendChild(head); 
			
		a.appendChild(para);  	
		  document.getElementById("a1").appendChild(a);      

		  
		  }
		  
			}
		  };
		  xhttp.open("GET", "cd_catalog.xml", true);
		  xhttp.send();
		

		</script>
-->
		
</body>
</html>