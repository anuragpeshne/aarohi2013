<?php
	session_start();
	if(!isset($_SESSION['entry']))
		header("Location: index.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta property="og:title" content="Aarohi" />
	<meta property="og:type" content="non_profit" />
	<meta property="og:url" content="http://aarohiworld.com/" />
	<meta property="og:image" content="http://aarohiworld.com/fbThumbnail.jpg" />
	<meta property="og:site_name" content="Aarohi" />
	<meta property="fb:admins" content="1676997165" />
	<meta property="fb:app_id" content="177623132306080" /> 
	<meta property="og:description"
            content="Silver Jubilee edition,
                    Visvesvaraya National Institute Of Technology, Nagpur"/>
	<?php include('includes/header.php');?>

	<link rel="stylesheet" type="text/css" href="css/homeStyle.css">

	<script type="text/javascript" src="JS/jquery-ui.js"></script>
	<script type="text/javascript" src="JS/mainPg.js"></script>
	<?php require_once 'JS/dynamicJS.php';?>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=177623132306080";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="overlay"></div>
<div id="dreamLand" class="page">
	<div id="sky">
		<div id="downButton" class="backButtons"><img src="images/downArrow.png"><br>back</div>
		<div id="moonContainer"><img src="images/moon.png"></div>
		<div id="satelliteContainer"><img src="images/satellite.png"></div>
		<div id="saturnContainer"><img src="images/saturn.png"></div>
		<div id="saturnContainer1"><img src="images/saturn1.png"></div>
		<div id="saturnContainer2"><img src="images/saturn2.png"></div>
		<div id="planetContainer"><img src="images/planet.png"></div>
		<div id="spaceShip1Container"><img src="images/spaceship1.png"></div>
		<div id="spaceShip2Container"><img src="images/spaceship2.png"></div>
		<div id="asteroidContainer"><img src="images/asteroid1.png"></div>
		<div id="eventContainer">
			<div id="purpleHaze" class="eventsButton">purple haze</div>
			<div id="dramatics" class="eventsButton">dramatics</div>
			<div id="aLaDanse" class="eventsButton">a la danse</div>
			<div id="debate" class="eventsButton">debate</div>
			<div id="pentathlon" class="eventsButton">pentathlon</div>
			<div id="swarManzar" class="eventsButton">swar manzar</div>
			<div id="literary" class="eventsButton">literary</div>
			<!--<div id="cynosure" class="eventsButton">cynosure</div>-->
			<div id="artConoscenza" class="eventsButton">Art&nbsp;Conoscenza</div>
			<div id="photography" class="eventsButton">Film&nbsp;Making & Photography</div>
		</div>
		<div id="thoughtCloudContainer" class="cloudContainer">
			<img src="images/thoughtCloud.png">
			<div class="contentContainer" id="eventContentContainer"><!--dynamically load--></div>
			<div class="closeButton"><img src="images/cross.png"></div>
		</div>
		<div id="proShowCloudContainer" class="cloudContainer">
			<img src="images/thoughtCloud.png">
			<div class="contentContainer" id="proShowCon">
				<div style="padding-top:10%;text-align:center;cursor:pointer;font-size:70px" id="pariButton">Parikrama Live In Concert</div>
				<div style="padding-top:10%;font-size:40px">
					<div style="float:left;width:49%;text-align:center;cursor:pointer;" id="jugButton">Fire Juggling</div>
					<div style="float:left;width:49%;text-align:center;cursor:pointer;" id="comButton">Stand-up Comedy Show</div></div>
				</div>
			<div class="closeButton"><img src="images/cross.png"></div>
		</div>
		<script type="text/javascript">
			$(document).ready(function(){
				var firecatContent = '<div><img src="images/jayFirecat.png" style="width: 30%; right:23%; top:34%"></div><div class="content" style="top:20%; left: 10%"><p><u><b> Jay Firecat performing in Aarohi </b></u><hr />Jay Firecat was born in France in a family where art was a part of everyday life. After extensive travels around the world, Jay discovered in Thailand the power of fire and meditated deep within the art of spinning and twirling, using it as a way to bring magic and rhythm into his own life as well as the lives of those he performs for. For the past few years he has expanded into the juggling discipline of contact crystal ball manipulation, seemingly out of a fairy tale, and also Buugeng, a new Japanese s-shaped double staff that highlights the grace and flow of the curved line. This discovery has opened many doors for Jay to perform in large festivals and collaborate with a diverse panel of artists inside the International Juggling industry.</p><br /> <a href="http://kamaraticreations.yolasite.com/" target="_blank"> (Click here for further info...)</a><div id="temp1" style="cursor:pointer">Back</div></div>';
				var menuCon = '<div style="padding-top:10%;text-align:center;cursor:pointer;font-size:70px" id="pariButton">Parikrama Live In Concert</div><div style="padding-top:10%;font-size:40px"><div style="float:left;width:49%;text-align:center;cursor:pointer;" id="jugButton">Fire Juggling</div><div style="float:left;width:49%;text-align:center;cursor:pointer;" id="comButton">Stand-up Comedy Show</div></div></div>';
				var pariContent = '<div style="text-align:center; "><img src="images/parikrama.jpg" style="width:600px;position:static;margin-top:140px"><div style="margin-top:30px;"><h2 style="font-size:50px">PARIKRAMA</h2><br>17<sup>th</sup> Feb 6:30 P.M. VNIT Auditorium.<br>Limited passes available at SAC @ Rs. 100/- FCFS basis.<div id="temp1" style="cursor:pointer;margin-top:40px">Back</div></div>';
				$('#jugButton').live("click",function(){
					$('#proShowCon').html(firecatContent);
				});
				$('#comButton').live("click",function(){
					$('#proShowCon').html(comCon);
				});
				$('#temp1, #proShowBillboard').live("click",function(){
					$('#proShowCon').html(menuCon);
				});
				$('#pariButton').live("click",function(){
					$('#proShowCon').html(pariContent);
				});
				var comCon = "<div><img src=\"images/standUp.jpg\" style=\"width: 25%; right:30%; top:20%\"></div><div class=\"content\" style=\"top:15%; left: 10%\"><p><u><b>Stand-up Comedy Show - Avinash Agrawal</b></u><hr />Well, guys, what you're about to see next is the result of India's failed system of education. He is a living example. After studying science, commerce and arts he realized very late that it's going to get him nowhere in life. So he gave it up and began studying other colorful things around - and now, everything is just a big joke for him. He is a writer by profession and his fabulous ambitions but zero IQ took him to yet another profession which doesn't pay- standup comedy. He's here today all the way from Mumbai to ensure that you have a great time laughing your guts out. So just sit back, relax and enjoy.  (NOW, however you want to call me onstage).... AVINASH AGARWAL</p><hr /><div id=\"temp1\" style=\"cursor:pointer\">Back</div></div>";
			})
		</script>
		<div id="workshopCloudContainer" class="cloudContainer">
			<img src="images/thoughtCloud.png">
			<div class="contentContainer"><div class="content" style="left:20%; top: 15%; font-size: 35px; text-align:center;">Aarohi presents International Film Festival in collaboration with  पर्यंता (Paryantaa)<hr /></div><div class="content" style="top:35%; left: 20%; text-align:center;"><b><u><p>On 16th, 17th Feb 2013 from 11:00 am to 5:00 pm
at V.N.I.T., Nagpur.</p><br/></u></b>

<p>Unpredictable characterizations and stories from unfamiliar cultures and regions,<br/>
Unconventional and remarkably different narrative styles,<br/>
Diverse themes, uncommon issues,<br/>
All spurring out of a different insight and sensibility of film makers<br/>
From different parts of the world like China, Iran, France, Israel, Spain,<br/>
A Cinema with such distinguishing characteristics and so closer to life,<br/>
You might not have experienced it before.<br/><br/>
(All films subtitled in English).</p><hr /> </div></div>
			<div class="closeButton"><img src="images/cross.png"></div>
		</div>
	</div>
</div>
<div id="home" class="page">
	<div id="adminContainer"><img src="images/admin.png"></div>
	<a href="http://vnit.ac.in" target="_blank"><div id="vnitLandMarkContainer"><img src="images/vnitLandMark.png"></div></a>
	<div id="cnhContainer"><img src="images/cnhHomePage.png"></div>
	<div id="fenceContainer"><img src="images/fence.png"></div>
	<div id="fenceRContainer"><img src="images/fenceR.png"></div>
	<div id="eventsBillboard" class="billboard"><img src="images/eventsBillboard.png"></div>
	<div id="proShowBillboard" class="billboard"><img src="images/proShowBillboard.png"></div>
	<div id="workshopBillboard" class="billboard"><img src="images/highlightsBillboard.png"></div>
	<div id="aboutUsBillboard" class="billboard"><img src="images/aboutUsBillboard.png"></div>
	<div id="plane"><img src="images/plane.png">
		<div class="updates" id="update1">Updates: <a href="wall.php" style="color:#F48896">Pro Show Details Updated</a></div>
		<div class="updates" id="update2">Updates: <a href="schedule.php" style="color:#F48296">Schedule Updated</a></div>
	</div>
    <div id="balloon"><img src="images/balloon.png"></div>
	<div id="linksPoleContainer"><img src="images/linksPole.png"></div>
	<a href="cn/" target="_blank"><div class="linkPlate" id="cnPlate"><img src="images/plateCN.png"></div></a>
	<a href="gallery/" target="_blank"><div class="linkPlate" id="galleryPlate"><img src="images/plateGallery.png"></div></a>
	<a href="http://aarohiworld.com/archives/" target="_blank"><div class="linkPlate" id="archivesPlate"><img src="images/plateArchives.png"></div></a>
	<a href="http://aarohiworld.com/family/" target="_blank"><div class="linkPlate" id="familyPlate"><img src="images/plateFamily.png"></div></a>
	<!--<a href="http://aarohiworld.com/downloads/" target="_blank"><div class="linkPlate" id="dnldPlate"><img src="images/plateDownloads.png"></div></a>-->
	<!--<a href="http://aarohiworld.com/PIO/" target="_blank"><div class="linkPlate" id="PIOPlate"><img src="images/platePIO.png"></div></a>-->
	<a href="http://aarohiworld.com/family/" target="_blank"><div class="linkPlate" id="familyPlate"><img src="images/plateFamily.png"></div></a>
	<!--<a href=""><div class="linkPlate" id="resultsPlate"><img src="images/plateResults.png"></div></a>-->
	<a href="http://aarohiworld.com/wall.php" target="_blank"><div class="linkPlate" id="wallPlate"><img src="images/plateWall.png"></div></a>
	<a href="http://aarohiworld.com/schedule.php" target="_blank"><div class="linkPlate" id="schedulePlate"><img src="images/plateSchedule.png"></div></a>
	<div id="sponsorContainer"><img src="images/sponsorsRock.png"></div>

	<div id="footer">
		<span style="margin-left:20px" id="contactUsButton">Contact Us</span><span style="margin-left:20px"><div class="fb-like" data-href="http://aarohiworld.com" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false"></div></span><span style="margin-left:20px; vertical-align:top"><a href="http://creativecommons.org/licenses/by-sa/3.0/deed.en_US" target="_blank"><img src="images/cc-logo.png" width="18px"></a><a target="_blank" href="creativeTeam.php"> Creative Team</a></span>
	</div>
</div>
<div id="sponsorPage" class="page">
	<div id="sponsorTable"></div>
	<div id="backButton" class="backButtons"><img src="images/backArrow.png"><br>back</div>
</div>
<audio autoplay="autoplay" id="audioPlayer" loop="loop">
  <source src="https://dl.dropbox.com/u/14380020/aarohi%20soundtracks/AToyTrainInSpace.ogg" type="audio/ogg">
  <source src="https://dl.dropbox.com/u/14380020/aarohi%20soundtracks/AToyTrainInSpace.mp3" type="audio/mpeg">
</audio>
<div id="toggleMusic"><img src="images/soundMute.png" id="playerIcon"></div>
</body>
</html>