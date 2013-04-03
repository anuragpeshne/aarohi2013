<?php
session_start();
require_once('dbConnection.php');

$request = $_GET['request'];

if($request == "logVisitors"){
	$name = mysql_real_escape_string($_POST['name']);
	$email = mysql_real_escape_string($_POST['email']);

	$_SESSION['loggedIn'] = true;
	$_SESSION['user']['name'] = $name;
	$_SESSION['user']['email'] = $email;

	$srchQuery = "SELECT * FROM registeredUsers WHERE email = '$email'";
	$srchResult = mysql_query($srchQuery) or trigger_error(mysql_error());
//tc of user id
	if(mysql_num_rows($srchResult) > 0){
		$_SESSION['registeredUser'] = true;
		echo "1";
	}
	else{
		$_SESSION['registeredUser'] = false;
		echo "0";
	}

	$insQuery = "INSERT IGNORE INTO visitors (name, email) VALUES ('$name', '$email');";
	mysql_query($insQuery) or trigger_error(mysql_error()." in ".$insQuery);
}
elseif($request == 'RegisterUser'){
	$clg = mysql_real_escape_string($_POST['clgName']);
	$contactNum = $_POST['contactNum'];
	$email = $_SESSION["user"]["email"];
	$name = $_SESSION["user"]["name"];
	$city = $_POST["city"];

	$insQuery = "INSERT INTO registeredUsers (name, email, contactNumber, college, city) VALUES ('$name', '$email', '$contactNum', '$clg', '$city');";
	mysql_query($insQuery) or trigger_error(mysql_error()." in ".$insQuery);

	$searchQuery = "SELECT userId from registeredUsers WHERE email = '$email'";
	$sResult = mysql_query($searchQuery) or trigger_error(mysql_error()." in ".$searchQuery);;
	$row = mysql_fetch_array($sResult);
	$_SESSION['user']['id'] = $row["userId"];
	$_SESSION['registeredUser'] = true;

	echo $_SESSION['user']['id'];//success
}
elseif ($request == "registerEvent") {
	$event = $_POST['Event'];
	$userId = $_SESSION['user']['id'];
	if($event == "purpleHaze"){
		$bandName = mysql_real_escape_string($_POST["teamName"]);
		$insQuery = "INSERT INTO purpleHaze (userId, bandName) VALUES ('$userId', '$bandName');";
	}
	else if($event == "pentathlon"){
		$teamName = mysql_real_escape_string($_POST['teamName']);
		$insQuery = "INSERT INTO pentathlon (userId, teamName) VALUES ('$userId', '$teamName');";
	}
	else if($event == "dramatics"){
		$teamName = mysql_real_escape_string($_POST['teamName']);
		$insQuery = "INSERT INTO dramatics (userId, teamName) VALUES ('$userId', '$teamName');";
	}
	else if($event == "aLaDanse"){
		$subType = mysql_real_escape_string($_POST['type']);
		if($subType == "group")
			$teamName = mysql_real_escape_string($_POST['teamName']);
		else
			$teamName = Null;
		$insQuery = "INSERT INTO aLaDanse (userId, type, groupName) VALUES ('$userId','$subType','$teamName');";
	}
	else if($event =="swarManzar"){
		$subType = mysql_real_escape_string($_POST['type']);
		if($subType == "duet")
			$partnerName = mysql_real_escape_string($_POST['teamName']);
		else
			$partnerName = Null;
		$insQuery = "INSERT INTO swarManzar (userId, type, partnerName) VALUES ('$userId','$subType','$partnerName');";
	}
	else if($event =="artConoscenza"){
		$subType = mysql_real_escape_string($_POST['type']);
		$insQuery = "INSERT INTO artConoscenza (userId, event) VALUES ('$userId','$subType');";
	}
	else if($event =="photography"){
		$subType = mysql_real_escape_string($_POST['type']);
		$insQuery = "INSERT INTO singleEvents (userId, eventName) VALUES ('$userId','$subType');";
	}
	else
		$insQuery = "INSERT INTO singleEvents (userId, eventName) VALUES ('$userId','$event');";

	mysql_query($insQuery) or trigger_error(mysql_error()." in ".$insQuery);	

	echo "success";
}
?>