<?php
    session_start();
    $_SESSION['entry'] = true;
    $useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/android.+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
header('Location: http://m.aarohiworld.com/');
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
    <?php include('includes/header.php'); ?>
    

	<script type="text/javascript" src="JS/jquery-css-transform.js"></script>
	<script type="text/javascript" src="JS/jquery-animate-css-rotate-scale.js"></script>

    <link rel="stylesheet" type="text/css" href="css/preLoaderStyle.css">

	<script type="text/javascript">
	 $(document).ready(function() {
        var ctrl=!1;$(document).keydown(function(a){if(ctrl&&(187==a.keyCode||189==a.keyCode||107==a.keyCode||109==a.keyCode))return!1;17==a.keyCode&&(ctrl=!0,$(document).bind("scroll",function(){if(ctrl)return!1}))});$(document).keyup(function(a){17==a.keyCode&&(ctrl=!1,$(document).unbind("scroll"))});
            var calvinPadding = $('#calvinContainer').height() - $('#calvinContainer img').height();
            $('#calvinContainer img').css('margin-top',calvinPadding);
            var rotation = 35;
            var swingtime = 1800;
 
            function init() {
                $('#calvinContainer').animate({rotate: rotation}, 0, function () {
                    rotation *= -1;
                    calvinSwing();
                });
            }
 
            function calvinSwing() {
                $('#calvinContainer').animate({rotate: rotation},swingtime, "swing", function(){
                     rotation *= -1;
                     calvinSwing();
                });
            }
 
            $('#calvinContainer img').attr('src','images/preloaderCalvin.png').load(function(){
                init();
            });
            loggedIn = false;
            name = "dummyName";
            email = "dummyEmail";
    });
	</script>
</head>
<body>
    <div id="fb-root"></div>
    <script type="text/javascript">
        nxtPage = "home.php";
        window.fbAsyncInit = function() {
            if(typeof FB != "undefined" && FB != null){
                FB.init({
                    appId      : '177623132306080', 
                    channelUrl : 'WWW.aarohiworld.COM/channel.html',
                    status     : true, 
                    cookie     : true, 
                    xfbml      : true  
                });
                FB.getLoginStatus(function(response) {
                    if (response.status === 'connected') {
                        FB.api('/me', function(response) {
                            loggedIn = true;
                            loginPopUp = "<div style=\"font-family: 'handFont', sans-serif; font-size:30px; padding-top:60px\">Welcome " + response.name+"</div>";
                            name = response.name;
                            email = response.email;
                        });
                    }
                });
            }
        };

        (function(d){
            var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement('script'); js.id = id; js.async = true;
            js.src = "//connect.facebook.net/en_US/all.js";
            ref.parentNode.insertBefore(js, ref);
        }(document));
    </script>
	<div id="treeContainer"> <img src="images/preloaderTree.png"></div>
	<div id="calvinContainer" ><img src="images/preloaderCalvin.png"></div>

    <div id="vnitLogoContainer">
        <div id="vnitLogo"><img src="images/vnitLogo.png"></div>
        <div>visvesvaraya national institute of technology <br><br><a target="_blank" href="http://www.true-education.org/"><img src="images/sponsorLogos/iitHomeLogo.jpg"></a><br><span style="font-size:10px;vertical-align:text-top">Presents</span></div>
    </div>
    <div id="largeCloudContainer">
        <img src="images/largeCloud.png">
        <div style="position:absolute; top: 15%; left:25%; width:45%" ><img src="images/teaserTypo.png"></div>
    </div>
    <?php
            $quotes = array("\"Childhood is short and maturity is forever\"",
                            "\"Things are never quite as scary when you've got a best friend\"",
                            "\"Weekends don't count unless you spend them doing something completely pointless\"",
                            "\"You know, Hobbes, some days even my lucky rocket ship underpants don’t help\"",
                            "\"Happiness isn’t good enough for me! I demand euphoria!\"",
                            "\"The world bores you when you’re cool\"",
                            "\"It’s a magical world, Hobbes, ol’ buddy…Let’s go exploring!\"");
    ?>
    <div id="quoteContainer"><?php echo $quotes[rand(0, count($quotes)-1)]?></div>
    <div id="loginContainer">
        <img src="images/cloud1.png">
        <div style="position:absolute; top: 26%; left:26%;font-size:40px" id="enterButton">enter</div>
    </div>
    <script type="text/javascript">
        function login() {
            if(typeof FB != "undefined" && FB != null){
                FB.login(function(response) {
                    if (response.authResponse) {
                        FB.api('/me', function(response) {
                            $('#loginPopUp').html("<div style=\"font-family: 'handFont', sans-serif; font-size:30px; padding-top:60px\">Welcome " + response.name+"</div>");
                            $.ajax({
                                type: "POST",
                                url: "backend/loginProcessor.php?request=logVisitors",
                                data: { name: response.name, email: response.email },
                            });
                            setTimeout(function(){ window.location = nxtPage; }, 3000);
                        });
                    } else {
                        alert("Some Problem in logging in.\nTry again or continue without logging in");
                        $('#loginPopUp').parent().html(loginPopUp);
                    }
                }, {scope: 'email'});
            }
            else {
                alert("Some Problem in logging in.\nTry again or continue without logging in");
                $('#loginPopUp').parent().html(loginPopUp);
            }
        }
        $(document).ready(function(){
            var width = $('#loginContainer').width();
            $('#loginContainer div').css('font-size',1.8*width/10 + 'px');
            if(!loggedIn){
                loginPopUp = "<div id=\"loginPopUp\">\
                                    <div id=\"fConnectButton\" style=\"border-right: solid 1px #aaa;\">FB - Connect</div>\
                                    <div style=\"line-height:0.7\"><a href=\""+nxtPage+"\">Continue<br/><span style=\"font-size:15px;\">Without Logging-in</div>\
                                </div>";
            }
            $('#enterButton').click(function(){
                TINY.box.show({html:loginPopUp, animate:true, fixed:false, boxid:'frameless', width:600, height:160});
                if(loggedIn){ 
                    $.ajax({
                        type: "POST",
                        url: "backend/loginProcessor.php?request=logVisitors",
                        data: { name: name, email: email },
                    });
                    setTimeout(function(){ window.location = nxtPage; }, 3000);
                }
            });
            $('#fConnectButton').live("click", function(){
                login();
                $('#loginPopUp').html("<div>Loading...</div>")
            });
        });
    </script>
</body>
</html>