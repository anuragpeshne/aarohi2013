<hmtl>
<head>
	<meta property="og:title" content="Aarohi" />
	<meta property="og:type" content="non_profit" />
	<meta property="og:url" content="http://aarohiworld.com/" />
	<meta property="og:image" content="http://aarohiworld.com/fbThumbnail.jpg" />
	<meta property="og:site_name" content="Aarohi" />
	<meta property="fb:admins" content="1676997165" />
	<meta property="fb:app_id" content="177623132306080" /> 
	<meta property="og:description"
            content="Silver Jubille edition,
                    Visvesvaraya National Institute Of Technology, Nagpur"/>
	<?php include('includes/header.php');?>

	<style type="text/css">
		@font-face { font-family: handFont; src: url('../fonts/RobinsHand-Regular.ttf'); } 
		body{
			font-family: handFont;
			background:#ffffff url('images/wallBck.jpg') repeat fixed;
		}
		#container{
			width: 720px;
			margin: 0 auto;
			background-color: white;
			padding: 10px;
		}
		#overlay{
			width: 100%;
			height: 100%;
			position: fixed;
			z-index: -1;
			background-color: rgba(90,90,90,0.4);
		}
		h1{
			text-align: center;
			font-size: 100px;
		}
			h1 img{
				height: 150px;
			}
	</style>
</head>
<body>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=177623132306080";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="overlay"></div>
<div id="container">
	<h1><img src="images/aarohi13Logo.jpg"><br>Wall</h1>
	<div class="fb-comments" data-href="http://aarohiworld.com" data-width="700" data-num-posts="10"></div>
</div>
</body>
</html>