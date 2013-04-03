<?php //session_start();
//require_once( dirname(__FILE__)."/../backend/dbConnection.php");?>
<script type="text/javascript">
$(document).ready(function(){
	userId = name = email = "undefined";

	loggedIn = false;//<?php /*echo json_encode($_SESSION['loggedIn']);*/?>;
	registeredUser = false;//<?/*php echo json_encode($_SESSION['registeredUser']);*/?>;
	<?php
	/*
	if($_SESSION['loggedIn'] == true){
		echo "email = '".$_SESSION['user']['email']."';name = '".$_SESSION['user']['name']."';";
	}
	if($_SESSION['registeredUser'] == true)
		$email = $_SESSION['user']['email'];
		$srchQuery = "SELECT * FROM registeredUsers WHERE email = '$email'";
		$result = mysql_query($srchQuery) or trigger_error(mysql_error()." in ".$srchQuery);
		$row = mysql_fetch_array($result);
		$_SESSION['user']['id'] = $row['userId'];
		echo "userId = '".$_SESSION['user']['id']."';";
		*/
	?>

	teamContent = '<input required="required" type="text" placeholder="Team Name" maxlength="20" id="teamName"><br><br>';
	function regFun(){
		if(registeredUser == true){
			var bandContent = '<input required="required" type="text" placeholder="Band Name" maxlength="20" id="bandName"><br><br>';
			var danceContent = '<div id="selectContainer"><select id="danceType"><option>Select type</option><option value="solo">Solo</option><option value="group">Group</option></select></div>';
			var singingContent = '<div id="selectContainer"><select id="singingType"><option>Select type</option><option value="solo">Solo</option><option value="duet">Duet</option></select></div>';
			var artConContent = '<div id="selectContainer"><select id="artConType"><option>Select type</option><option value="tattoo">Tattoo Making</option><option value="face painting">Face Painting</option><option value="charcoal">Charcoal</option><option value="graffiti">Graffiti</option><option value="chalk/street art">Chalk/Street Art</option><option value="T-shirt painting">T Shirt Painting</option></select></div>';
			var photoContent = '<div id="selectContainer"><select id="photoType"><option>Select type</option><option value="photography">Photography</option><option value="filmMaking">Film Making</option></select></div>';
			var submitContent = '<br><span id="finalButton">Register</span>';
			if(eventClicked == "purpleHaze")
				$('#eventContentContainer').hide().html('<div class="regContainer">'+bandContent+submitContent+'</div>').fadeIn(1000);
			else if(eventClicked == "pentathlon" || eventClicked == "dramatics")
				$('#eventContentContainer').hide().html('<div class="regContainer">'+teamContent+submitContent+'</div>').fadeIn(1000);
			else if(eventClicked == "aLaDanse")
				$('#eventContentContainer').hide().html('<div class="regContainer">'+danceContent+submitContent+'</div>').fadeIn(1000);
			else if(eventClicked =="swarManzar")
				$('#eventContentContainer').hide().html('<div class="regContainer">'+singingContent+submitContent+'</div>').fadeIn(1000);
			else if(eventClicked =="artConoscenza")
				$('#eventContentContainer').hide().html('<div class="regContainer">'+artConContent+submitContent+'</div>').fadeIn(1000);
			else if(eventClicked =="photography")
				$('#eventContentContainer').hide().html('<div class="regContainer">'+photoContent+submitContent+'</div>').fadeIn(1000);
			else
				finalFun();
		}
		else if(loggedIn == true){
			var registerContent = '<div class="regContainer">'+name+'<br/>'+email+'<br><input required="required" type="text" id="collegeName" maxlength="50" placeholder="College Name" tabindex="1"><br><input required="required" type="text" id="contactNum" placeholder="Contact Number" maxlength="10" tabindex="2"><br><input required="required" type="text" id="cityName" placeholder="City" maxlength="20" tabindex="3"><br><br><br><span id="cancelReg" tabindex="4">cancel</span><span id="goReg" tabindex="5">Go</span></div>';
			$('#eventContentContainer').hide().html(registerContent).fadeIn(1000);
		}
	}
	$("#registerButton").live("click",function(){regFun();});
	$('#loginButton').live("click", function(){
		var loginContent = '<div class="regContainer"><div id="fbConButton" style="cursor:pointer">FB-Connect</div><br><div><a target="_blank" href="googleReg.php">Problem with Facebook servers?</a></div></div>';//<div>Username: <input type="text"><br/>Password: <input required="required" type="password"></div></div>';
		$('#eventContentContainer').hide().html(loginContent).fadeIn(1000);
	});
	$('#fbConButton').live("click",function(){
		if(typeof FB != "undefined" && FB != null){
            FB.login(function(response) {
                if (response.authResponse) {
                    FB.api('/me', function(response) {
                    	$('.regContainer').html("<img src=\"images/loading.gif\"/>");
                    	name = response.name;
                    	email = response.email;
                    	$.ajax({
                            type: "POST",
                            url: "backend/loginProcessor.php?request=logVisitors",
                            data: { name: response.name, email: response.email },
                        }).done(function(msg){
                        	loggedIn = true;
                        	if(msg == "1")
                        		registeredUser = true;
                        	regFun();
                        }).fail(function(jqXHR, textStatus) {
							alert( "Request failed: " + textStatus );
						});
                    });
                } else {
                    alert("Some Problem in logging in.\nTry again or continue without logging in");
                }
            }, {scope: 'email'});
        }
        else {
            alert("Some Problem in logging in.\nTry again or continue without logging in");
        }
	});
	$('#cancelReg').live("click", function(){
		$('#eventContentContainer').hide().html(eventContent).fadeIn(1000);
	});
	$('#goReg').live("click", function(){
		var collegeName = $('#collegeName').val();
		var contactNum = $('#contactNum').attr("value");
		var cityName = $('#cityName').val();
		$('.regContainer').html("<img src=\"images/loading.gif\"/>");
		$.ajax({
			url: "backend/loginProcessor.php?request=RegisterUser",
			type: "POST",
			data: {clgName : collegeName, contactNum: contactNum, city: cityName},
			dataType: "html"
		}).done(function(msg) {
			userId = msg;
			registeredUser = true;
			regFun();
		}).fail(function(jqXHR, textStatus) {
			alert( "Request failed: " + textStatus );
		});
	});
	$('#finalButton').live("click", function(){	finalFun()});
	function finalFun(){
		var subType = 0;
		var teamName = 0;
		if(eventClicked == "purpleHaze")
			teamName = $('#bandName').val();
		else if(eventClicked == "pentathlon" || eventClicked == "dramatics")
			teamName = $('#teamName').val();
		else if(eventClicked == "aLaDanse"){
			subType = $('#danceType').val();
			if(subType == "group")
				teamName = $('#teamName').val();
		}
		else if(eventClicked =="swarManzar"){
			subType = $('#singingType').val();
			if(subType == "duet")
				teamName = $('#partnerName').val();		//teamname used as partner name to save few KB (and then wrote this comment which almost nullified the savings:D)
		}
		else if(eventClicked == "artConoscenza"){
			subType = $('#artConType').val();
		}
		else if(eventClicked == "photography"){
			subType = $('#photoType').val();
		}
		$('.regContainer').html("<img src=\"images/loading.gif\"/>");
		var request = $.ajax({
			url: "backend/loginProcessor.php?request=registerEvent",
			type: "POST",
			data: {Event : eventClicked, userId : userId, type:subType, teamName:teamName},
			dataType: "html"
		});
		request.done(function(msg) {
			$('#eventContentContainer').html(eventContent);
			if(msg == "success")
				$(".registerButtonContainer").html("Registered");
			else
				alert("It seems you are already registered for "+eventClicked+". If you think this is a mistake, Please contact us.");
		});
		request.fail(function(jqXHR, textStatus) {
			alert( "Request failed: " + textStatus );
		});
	}
	
	$('#danceType').live("change",function(){
		if($('#danceType').val()=="group")
			$('#selectContainer').append(teamContent);
		else
			$("#teamName").remove();
	});
	$('#singingType').live("change",function(){
		if($('#singingType').val()=="duet")
			$('#selectContainer').append('<input required="required" type="text" placeholder="Partner Name" maxlength="20" id="partnerName">');
		else
			$("#partnerName").remove();
	});
	
})
</script>