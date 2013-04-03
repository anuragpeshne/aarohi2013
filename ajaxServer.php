<?php
session_start();
$request = $_GET['request'];
if($request == "events"){
	$event = $_GET['event'];

	$content = array('purpleHaze' => "<p>Hobbes: Mozart could play piano and violin at the age of four, and he composed a symphony at the age of five. That’s amazing.<br />Calvin : When I was four, I think I was toilet trained.<br /></p><hr />
<p><div style=\"text-align:center\" style=\"font-size:25px;\"><h2><b><u>Purple Haze</u></b></h2></div>Over 90000 watts of electrifying music, it’s a treat for the artists as well as the audience. Come get addicted to the mind numbing music, and enjoy the head banging. Test your mettle as a contestant or be a part of the crowd and just take a seat back and enjoy the awe-inspiring experience…<br/></p>
<div style=\"text-align:right\"><h4><div style=\"float:left; padding:20px; font-size:30px; text-decoration:underline;\"><a href=\"https://docs.google.com/document/d/1XtUMhYfgL3ZOUmZtPD9cKtk5cJN-gfSHvDOM0-q72ik/edit\" target=\"_blank\">Rules</a></div><b><u>Contact</u></b></h4> <a href=\"https://facebook.com/amol.kelkar.3\" target=\"_blank\">Amol Kelkar </a> : +91 9422 442 613<br /> <a href=\"https://facebook.com/tanmay.rabade\" target=\"_blank\">Tanmay Rabade </a> : +91 8806 091 695<br /></div><hr />
<p><div style=\"text-align:center\" style=\"font-size:25px;\"><h2><b><u>Rhythm Divine</u></b></h2></div>Not all of us get the recognition and respect we deserve as the prodigies in music. But still, there’s a musician in most of us, and we enter another world while playing our favourite instrument. So whether it be piano, guitar, violin or drums, enthral the audience with your talents and make this musical night, a night to remember!</p>
<div style=\"text-align:right\"><h4><div style=\"float:left; padding:20px; font-size:30px; text-decoration:underline;\"><a href=\"https://docs.google.com/document/d/1VZtZ7fqaw8FKyXBEu2hXusJXQxpkWkzG5LozkIUCR0M/edit\" target=\"_blank\">Rules</a></div><b><u>Contact</u></b></h4> <a href=\"https://facebook.com/ameya.chandrayan\" target=\"_blank\"> Ameya Chandrayaan </a> : +91 9960 271 036<br /> <a href=\"https://facebook.com/gaurang.dhume\" target=\"_blank\"> Gaurang Dhume </a>: +91 8149 086 364<br /></div>",

					 'dramatics' => "<p>Calvin : Hey, I got a part in the class play! It’s a great dramatic role!<br />Hobbes: That’s wonderful. What’s the play about? What are you playing?<br />Calvin : My act will have everyone in tears at the end. The play is “The four food groups” and I am playing Onion.<br /></p><hr />
<p><div style=\"text-align:center\" style=\"font-size:25px;\"><h2><b><u>Dramatics</u></b></h2></div>Drama is like life with the dull bits cut out. Drama is theatre, life, an escape from life, happiness, and sadness all rolled into one. So Aarohi 2013 brings to you two facets of dramatics. One is the traditional Abhivyakti - Stage Plays. And other is the more non conventional Halla – Bol, Street Plays. <br />
Various social issues are depicted and the whole audience gets entertained and educated through and through by the performance of the contestants.
‘Kab tak sahenge, kucch to bol... HALLA BOL! HALLA BOL!!!’</p>
<div style=\"text-align:right\"><div style=\"float:left; padding:20px; font-size:30px; text-decoration:underline;\"><a href=\"https://docs.google.com/document/d/19b35dw7R_uQOfN_lhzbPdZJcPR6zjYQUOS9BGKeB_MY/edit\" target=\"_blank\">Rules</a></div><h4><b><u>Contact</u></b></h4> <a href=\"https://facebook.com/shiv.chaturvedi.9\" target=\"_blank\"> Shiv Chaturvedi </a> : +91 8055 155 908<br /> <a href=\"https://facebook.com/akashkumarindia\" target=\"_blank\"> Akash Kumar </a>: +91 8087 208 056<br /></div>",

					 'aLaDanse' => "<p>Calvin : I'm killing time while I wait for life to shower me with meaning and happiness...<br />Hobbes: Life may not be the party we hoped for, but while we're here we might as well dance.<br />Calvin : That's more mature than I ever care to be!<br />Hobbes: I had resolved to be less offended by human nature, but I think I blew it already.<br /></p><hr />
<p><div style=\"text-align:center\" style=\"font-size:25px;\"><h2><b><u>A la Danse</u></b></h2></div>If you think you can dance, prepare yourself for the ultimate dance showdown! Don’t let the thoughts about the dance styles hassle you. Right from folk to classical to hip hop, just groove your way to the top!</p>
<div style=\"text-align:right\"><div style=\"float:left; padding:20px; font-size:30px; text-decoration:underline;\"><a href=\"https://docs.google.com/document/d/1uY2IjhLtRgOE09Cabk9N0JR1vKy_FvahvD-tXF_drYQ/edit\" target=\"_blank\">Rules</a></div><h4><b><u>Contact</u></b></h4> <a href=\"https://facebook.com/wazupatharva\" target=\"_blank\"> Atharva Purohit </a> : +91 8237 573 025<br /> <a href=\"https://facebook.com/jayesh.dhodapkar\" target=\"_blank\"> Jayesh Dhodapkar </a>: +91 9158 368 177<br /></div>",

					 'debate' => "<p>Calvin : Yesterday Moe, the class bully called me a ‘twinky’ and took my ball.<br />Hobbes: Why didn’t you fight for it?<br />Calvin : My policy is to never fight with a six year old who shaves.<br />Hobbes: Since you can’t fight him, maybe you should try talking to him. If you reasoned with him, he’ll see your side.<br />Calvin : Well, I cannot let the biggest guy make the rules all the time! Might is not always right!<br />Hobbes: I’ll bet your autopsy reveals that your mouth was too big.<br /></p><hr />
<p><div style=\"text-align:center\" style=\"font-size:25px;\"><h2><b><u>Debate</u></b></h2></div>Ever had long, heated discussions with friends about “apparently trivial” topics? Could you convince the others to see things your way? If you have experienced such situations, then this is a fresh avenue for you to speak your heart out to a broad-spectrum of people!</p>
<div style=\"text-align:right\"><div style=\"float:left; padding:20px; font-size:30px; text-decoration:underline;\"><a href=\"https://docs.google.com/document/d/1JZC_u6doHaSuR1ZOg87o9UvIII4_NlKTNfLmYcSh0kw/edit\" target=\"_blank\">Rules</a></div><div style=\"float:left; padding:20px; font-size:30px; text-decoration:underline;\"><a href=\"https://docs.google.com/document/d/1h4FzJ2Y74zQIsRdQwkTaPt42Trb5oXvrynH6LWzwanc/edit\" target=\"_blank\">Questionnaire</a></div><h4><b><u>Contact</u></b></h4> <a href=\"https://facebook.com/sudhanshu.narkhede\" target=\"_blank\"> Sudhanshu Narkhede </a> : +91 9766 354 040<br /> <a href=\"https://facebook.com/priyank.s.jain\" target=\"_blank\"> Priyank Jain </a>: +91 9404 078 674<br /></div>",

					 'pentathlon' => "<p>Calvin : Life is like topography, Hobbes. There are summits of happiness and success, flat stretches of boring routine, and valleys of frustration and failure.<br />Hobbes: When was the last time we had fun?  It’s something I just can’t remember!<br />Calvin : I have been thinking, Hobbes.<br />Hobbes: On a weekend?<br />Calvin : Well, it wasn’t on purpose!<br /></p><hr />
					 <p><div style=\"text-align:center\" style=\"font-size:25px;\"><h2><b><u>Pentathlon</u></b></h2></div>Pentathlon is a fast – paced, wholesome entertainer. All you have to do is collect a few likeminded friends, form a team and we’ll test your spontaneity, creativity and co-ordination. The event comprises of the weirdest and wackiest rounds. There won’t be a single uninteresting moment throughout the duration of this event.</p>
<div style=\"text-align:right\"><h4><div style=\"float:left; padding:20px; font-size:30px; text-decoration:underline;\"><a href=\"https://docs.google.com/document/d/1HIiNTIsKBYiD5eYwNJX9AFK_bv9NZTBdXBfyYQRO_0c/edit\" target=\"_blank\">Rules</a></div><b><u>Contact</u></b></h4> <a href=\"https://facebook.com/Nihit91\" target=\"_blank\"> Nihit Agrawal </a> : +91 8087 187 939<br /> <a href=\"https://facebook.com/saurabh.kurjekar.9\" target=\"_blank\"> Saurabh Kurjekar </a>: +91 9665 758 298<br /></div>",

					 'swarManzar' => "<p>Calvin : Today, I burst forth in rapturous melody in the middle of the class!<br />Hobbes: Is that why you were sent home early from school?<br />Calvin : I am a genius who isn’t appreciated in his own time.<br />Hobbes: Some cause happiness wherever they go; others whenever they go.<br /></p>
<hr />
<p><div style=\"text-align:center\" style=\"font-size:25px;\"><h2><b><u>Swar Manzar</u></b></h2></div>Every one of us loves music in one form or the other. Keeping this thought foremost in our minds, Aarohi 2013 brings to you ‘Swar Manzar’</p>
<div style=\"text-align:right\"><h4><div style=\"float:left; padding:20px; font-size:30px; text-decoration:underline;\"><a href=\"https://docs.google.com/document/d/1CvF4_PE2zjP90n0ef4bB0R3qDFcV4MiO65vza5111Ek/edit\" target=\"_blank\">Rules</a></div><b><u>Contact</u></b></h4> <a href=\"https://facebook.com/chutyapa\" target=\"_blank\"> Atharva Joshi </a> : +91 7798 185 617<br /> <a href=\"https://facebook.com/adarsh.a.kumar.3\" target=\"_blank\"> Adarsh Kumar </a>: +91 9503 522 973<br /></div>",

					 'cynosure' => "<p>Calvin : Don’t you agree, Hobbes? I serve as a focal point of attention and admiration for the entire universe.<br />Hobbes: There's more to this world than just people, you know.<br />Calvin : People think it must be fun to be a super genius, but they don’t realize how hard it is to put up with the idiots of the world.<br />Hobbes: Isn’t your pants zipper supposed to be in the front?<br /></p><hr />
<p><div style=\"text-align:center\" style=\"font-size:25px;\"><h2><b><u>Cynosure</u></b></h2></div>If you are a person who is OOZING with loads of personality, here is an opportunity for you to compete against the other Alpha Males and Females…
All you have to do to win Aarohi 2013’s personality contest is prove that you are the ‘Cynosure of all eyes’.</p>
<div style=\"text-align:right\"><div style=\"float:left; padding:20px; font-size:30px; text-decoration:underline;\"><a href=\"https://docs.google.com/document/d/1fb_zKjHk8A8D68Zr5dal06Obq2McS-_IceR-uUS_yeM/edit\" target=\"_blank\">Rules</a></div><div style=\"float:left; padding:20px; font-size:30px; text-decoration:underline;\"><a href=\"https://docs.google.com/a/aarohiworld.com/spreadsheet/viewform?formkey=dHZVaVVzck1ScHVIU29QOHZ2STVaMVE6MQ\" target=\"_blank\">Form</a></div><h4><b><u>Contact</u></b></h4> <a href=\"https://facebook.com/raunaq.lala\" target=\"_blank\"> Raunaq Lala </a> : +91 9503 525 080<br /> <a href=\"https://facebook.com/siddharth.shah.7\" target=\"_blank\"> Siddharth Shah </a>: +91 9823 038 127<br /></div>",

					 'literary' => "<p>Calvin : You can’t just turn on creativity like a faucet. You have to be in the right mood.<br />Hobbes: What mood is that?<br />Calvin : Last-minute panic!<br /></p><hr />
<p><div style=\"text-align:center\" style=\"font-size:25px;\"><h2><b><u>Literary</u></b></h2></div>‘Creative Writing’ is open to anyone who loves expressing innermost thoughts and feelings into the beautiful art of poetry or writing a short story that is worth telling everyone! And to all who have the ability to dream… Dreaming is an act of pure imagination, if only you can make your creativity come alive, then this is the place for you!</p>
<div style=\"text-align:right\"><div style=\"float:left; padding:20px; font-size:30px; text-decoration:underline;\"><a href=\"https://docs.google.com/document/d/10NN-ykY3O9rMnUZAuw-XKV0GpebAkrq3DIzwHRFwGaQ/edit\" target=\"_blank\">Rules</a></div><h4><b><u>Contact</u></b></h4> <a href=\"https://facebook.com/ketan.lanjewar.7\" target=\"_blank\"> Ketan Lanjewar </a> : +91 8237 576 613<br /> <a href=\"http:s//facebook.com/himanshu.gajbhiye.71\" target=\"_blank\"> Himanshu Gajbhiye </a>: +91 9730 370 418<br /></div>",

					 'artConoscenza' => "<p>Hobbes: Susie drew a tidy little domestic scene in art class today. A house in a yard with flowers. What a piece of art!<br />Calvin : How typically female. No wonder it’s men who change the world!<br />Hobbes: But you drew a picture of her!<br />Calvin : It takes an uncommon and ingeniously creative mind to think of these things, Hobbes.<br />Hobbes: There are times for me, when it’s a source of personal pride to not be human.<br /></p><hr />
<p><div style=\"text-align:center\" style=\"font-size:25px;\"><h2><b><u>Art Conoscenza</u></b></h2></div>Let the artist in you catch your heart’s aspiration! Aarohi 2013 brings you the opportunity to unravel your masterpieces in our gallery and make people realize the concealed Da Vinci, Van Gogh, and Tagore’s of our generation. Try your hand at Street art, Tattoo making, Graffiti, Face painting, Charcoal painting, T shirt painting. This world is but a canvas to our imagination, so create your own magical wonderland!</p>
<div style=\"text-align:right\"><h4><div style=\"float:left; padding:20px; font-size:30px; text-decoration:underline;\"><a href=\"https://docs.google.com/document/d/1CPbqhPHYvOw2KVQPNN08yvkf1q5r-8aaOI-3-nPvzqk/edit\" target=\"_blank\">Rules</a></div><b><u>Contact</u></b></h4><a href=\"https://facebook.com/ajinkyajoshi212\" target=\"_blank\"> Ajinkya Joshi </a> : +91 9923 599 727<br /> <a href=\"https://facebook.com/gunjan.dokrimare\" target=\"_blank\"> Gunjan Dokrimare </a>: +91 9665 989 665<br /></div>",

					 'photography' => "<p>Calvin : Dad said you don’t take a photograph, you make it.<br />Hobbes: What I like about photographs is that they capture a moment that’s gone forever; impossible to reproduce.<br />Calvin : I would like to make a documentary about tigers.<br />Hobbes: Tigers are fierce! Tigers have teeth and claws that pierce!<br />Calvin : Why do tigers always walk in circles before they lie down?<br />Hobbes: Sorry. Privileged information.<br /></p><hr />
<p><div style=\"text-align:center\" style=\"font-size:25px;\"><h2><b><u>Photography</u></b></h2></div>Focus your lens on anything ranging from a dazzling smile to a picturesque scene. <div style=\"text-align:center\" style=\"font-size:20px;\"><h3><b>Theme: Landscape Photography</b></h3></div> </p>
<div style=\"text-align:right\"><h4><div style=\"float:left; padding:20px; font-size:30px; text-decoration:underline;\"><a href=\"https://docs.google.com/document/d/12AY2mPC0CK9im4Z5h_t4zo652YOeEkpaQIxNaCAqTk8/edit\" target=\"_blank\">Rules</a></div><h4><b><u>Contact</u></b></h4> <a href=\"https://facebook.com/ajinkya.gohad\" target=\"_blank\"> Ajinkya Gohad </a> : +91 9096 338 381<br /> <a href=\"https://facebook.com/warun.harhare\" target=\"_blank\"> Warun Harhare </a>: +91 8087 731 775 <br /></div><hr />
<p><div style=\"text-align:center\" style=\"font-size:25px;\"><h2><b><u>Film making</u></b></h2></div>Use this opportunity to bring out the hidden director in you. Fiction, non-fiction, mystery, choose your favourite genre, and create magic on the silver screen with your blockbuster! </p> 
<div style=\"text-align:right\"><h4><div style=\"float:left; padding:20px; font-size:30px; text-decoration:underline;\"><a href=\"https://docs.google.com/document/d/1wYOd7VyohvRH3uJZh0hf45QLcKCy7z7iIYe0DqG3MxU/edit\" target=\"_blank\">Rules</a></div><h4><b><u>Contact</u></b></h4> <a href=\"https://facebook.com/pratik.murkute\" target=\"_blank\"> Pratik Murkute </a> : +91 9665 525 961<br /> <a href=\"https://facebook.com/abhijeet57\" target=\"_blank\"> Abhijeet Tayade </a>: +91 8149 424 579 <br /></div>");
	?>

	<div class="content" <?php if($event == 'purpleHaze' || $event == 'photography')
						 	echo "style=\"font-size:22px;top:10%\"";
						 elseif ($event == 'dramatics')
						 		echo "style=\"font-size:24px;\"";
						 elseif ($event == "artConoscenza")
						 		echo "style=\"font-size:23px\"";
						 ?>><?php echo $content[$event]?>

						 <div class="registerButtonContainer">
						 	<?php echo "<span id=\"loginButton\">Login to Register</span>";
						 	/* if($_SESSION['loggedIn'] == true)
						 			echo "<span id=\"registerButton\">Register</span>";
						 		else 
						 			echo "<span id=\"loginButton\">Login to Register</span>";*/
						 			?>
				 			</div>
	</div>        
    <div><img src="images/<?php echo $event?>.png" ></div>
	<?php
}
elseif ($request == "sponsors") {
	?>
	<h4 style="text-align:center">Aarohi'13 Sponsors</h4>
	<table>
		<tr>
			<td colspan="6"><a href="http://www.true-education.org/" target="_blank"><img src="images/sponsorLogos/iitHome.jpg"><br>Title Sponsor</a></td>
		</tr>
		<tr>
			<td colspan="3"><a href="http://www.tatadocomo.com/" target="_blank">Powered by<br><img src="images/sponsorLogos/docomo.jpg"></a></td>
			<td colspan="3"><a href="http://spykar.com/" target="_blank">Styled by<br><img src="images/sponsorLogos/spykar.jpg"></a></td>
		</tr>
		<tr>
			<td><a href="http://studies-overseas.com/" target="_blank"><img src="images/sponsorLogos/krishna.jpg"><br>KRISHNA CONSULTANTS</a></td>
            <td><a href="http://www.wockhardt.com/" target="_blank"><img src="images/sponsorLogos/wockhardt.jpg"><br>Social Initiative Partner</a></td>
            <td><a href="http://www.nagpurtrade.com/" target="_blank"><img src="images/sponsorLogos/nagpurTrade.jpg"><br>Website Partner</a></td>
			<td><a href="http://www.myfmindia.com/" target="_blank"><img src="images/sponsorLogos/radio.jpg"><br>Radio Partner</a></td>
			<td><a href="http://www.thinstrokes.com/" target="_blank"><img src="images/sponsorLogos/thinstrokes.jpg"><br>Merchandise Partner</a></td>
			<td><a href="http://www.petaindia.com/about/petaDishoom.aspx" target="_blank"><img src="images/sponsorLogos/peta.png"><br>Prize Partner</a></td>
		</tr>
		<tr>
			<td><a ><img title="Shop no.3, Pritam Palace, Shraddhanand peth,South Ambazari road,Nagpur" src="images/sponsorLogos/fashionZone.jpg"><br>Prize Partner</a></td>
			<td><a href="http://www.vibgyormedia.net/" target="_blank"><img src="images/sponsorLogos/vibgyor.jpg"><br>Print Media Partner</a></td>
			<td><a href="http://ediots.in/" target="_blank"><img src="images/sponsorLogos/ediots.jpg"><br>Prize Partner</a></td>
			<td><a href="http://www.dhl.co.in/" target="_blank"><img src="images/sponsorLogos/dhl.jpg"><br>Express Delivery Partner</a></td>
			<td><a href="http://www.idealtours.in/" target="_blank"><img src="images/sponsorLogos/ideal.jpg"><br>Travelling Partner</a></td>
            <td><a href="http://www.smartphotography.in/" target="_blank"><img src="images/sponsorLogos/smartPhotography.jpg"><br>Photography event Sponsor</a></td>
        </tr>
        <tr>
        	<td><a href="http://www.hitbullseye.com/" target="_blank"><img src="images/sponsorLogos/bullseye.jpg"><br>Education Partner</a></td>
            <td><a href="http://mh-31.com/" target="_blank"><img src="images/sponsorLogos/mh31.jpg"><br>Online Media Partner</a></td>
            <td><a href="http://www.knowafest.com/" target="_blank"><img src="images/sponsorLogos/knwAFest.jpg"><br>Online Media Partner</a></td>
            <td><a href="http://www.freecharge.in/" target="_blank"><img src="images/sponsorLogos/freecharge.jpg"><br>Online Recharge Partner</a></td>
			<td><a href="http://www.faadooengineers.com/" target="_blank"><img src="images/sponsorLogos/fadoo.jpg"><br>Online Media Partner</a></td>
			<td><a href="http://collegecampi.com/" target="_blank"><img src="images/sponsorLogos/cc_logo.png"><br>Online Media Partner</a></td>
		</tr>
		<tr>
			<td><a href="http://www.desihiphop.com/" target="_blank"><img src="images/sponsorLogos/desihiphop.jpg"><br>Online Media Partner</a></td>
		</tr>
	</table>
	<?php
}
?>