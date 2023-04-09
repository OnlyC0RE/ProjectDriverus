<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<title>Project Driverus</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="masonry.pkgd.min.js"></script>
		<!--<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>-->
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->


		<script>	function popup(){
						window.open('success.html', '_blank')
						window.open('success.html', '_blank')
					}

					function uncheckElements(){
						var uncheck=document.getElementsByTagName('input');
						for(var i=0;i<uncheck.length;i++){if(uncheck[i].type=='checkbox'){uncheck[i].checked=false;}}
					}
					function checkElements(){
						var uncheck=document.getElementsByTagName('input');
						for(var i=0;i<uncheck.length;i++){if(uncheck[i].type=='checkbox'){uncheck[i].checked=true;}}
					}
		</script>

	</head>

	<body>

			<ul class="navbar">
				<a href="/"><img src="images/logov2.png" style="width: 350px; height: 70px; bottom: 0px;cursor: pointer;"></a>
				<li class="float_right"><a onclick="document.getElementById('supportmodal').style.display='block'" class="navbar_right">Support PD</a></li>
                <li class="float_right"><a onclick="document.getElementById('feedbackmodal').style.display='block'" class="navbar_right">Feedback</a></li>
				<li class="float_right"><a onclick="document.getElementById('comingsoonmodal').style.display='block'" class="navbar_right">Coming soon</a></li>
				<li class="float_right"><a onclick="document.getElementById('newsmodal').style.display='block'" class="navbar_right">News</a></li>
				<li class="float_right"><a onclick="document.getElementById('aboutmodal').style.display='block'" class="navbar_right">About</a></li>
				<li class="float_right" style="margin-top: 21px; margin-right: 30px"><a href="https://twitter.com/ProjectDriverus?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="large" data-lang="en" data-show-count="false">Follow @ProjectDriverus</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></li>
			</ul>


		<div class="container text-center">
			<br>
			<h2>1. Allow Pop-ups in your browser</h2>
			<button class="button" title="This will trigger po-pup blocker in your browser so you can easily disable it" onclick="popup(); document.getElementById('chromemodal').style.display='block'">Trigger pop-up blocker</button>
			<!--<button class="button" onclick="document.getElementById('edgemodal').style.display='block'">MS Edge</button>-->
		</div>

	<div>
		<div class="container">
			<br>
			<h2 class="text-center">2. Select apps you want</h2>
		</div>
        
	<!--Výběr-->
		<ul class="list-unstyled center-block js-masonry" data-masonry-options='{"fitWidth": true}'>

		<?php include 'apps.php'; ?>

		</ul>

	</div>
	
	<!--Generate-->	
		<div class="container text-center">
			<h2>3. Generate links for selected apps</h2>
			<button class="button" onclick="generate();uncheckElements();">Generate</button>
			<button class="button" onclick="checkElements();">CHECK ALL</button>
			<button class="button" onclick="uncheckElements();">UNCHECK ALL</button>
			<br><br>
		</div>
		<div class="beta">
			<a>BETA v1.1</a>
			<br>
			<a>09/04/2023</a>
		</div>

	<!--Edge modal-->
	<div id="edgemodal" class="w3-modal text-center">
    	<div class="w3-modal-content w3-animate-zoom">
      		<div class="w3-container" style="background-image: url(images/backgroundlight.jpg); color: black">
        		<span onclick="document.getElementById('edgemodal').style.display='none'" class="w3-button w3-display-topright" style="border-left: 1px solid;border-bottom: 1px solid; border-color: black">&times;</span>
    			<H4>You'll need to go to the settings and disable blocking pop-ups.</H4>
    			<p><img src="images/threedots.png" style="width: 36px;height: 36px">-> <img src="images/settings.png" style="width: 94px;height: 36px">-> <img src="images/security.png" style="width: 151px;height: 36px">-> <img src="images/block.png" style="width: 112px;height: 57px"></p>
     		</div>
   	 	</div>
 	 </div>

	<!--Chrome modal-->
	<div id="chromemodal" class="w3-modal text-center">
    	<div class="w3-modal-content w3-animate-zoom">
      		<div class="w3-container" style="background-image: url(images/backgroundlight.jpg); color: black">
        		<span onclick="document.getElementById('chromemodal').style.display='none'" class="w3-button w3-display-topright" style="border-left: 1px solid;border-bottom: 1px solid; border-color: black">&times;</span>
    			<p><img id="chromegif" src="images/video.gif" style="width: 449px;height: 320px"></p>
     		</div>
   	 	</div>
 	 </div>

	<!--About modal-->
	<div id="aboutmodal" class="w3-modal">
    	<div class="w3-modal-content w3-animate-zoom text-center">
      		<div class="w3-container" style="background-image: url(images/backgroundlight.jpg); color: black">
        		<span onclick="document.getElementById('aboutmodal').style.display='none'" class="w3-button w3-display-topright" style="border-left: 1px solid;border-bottom: 1px solid; border-color: black">&times;</span>
        		<h2>About Project Driverus</h2>
    			<p>Project Driverus is clean and fast way to access download pages of apps you need when setting up a PC</p>
    			<p>You simply select all the drivers and apps you want and PD will open download pages in new tabs</p>
    			<p>NO automatic downloads.</p>
    			<p>NO need to install another SW on your PC</p>
    			
    			<h2>About me</h2>
    			<p>Hi, my name is CORE and I am a mechanical engineering student from Czech Republic. I created this site to help myself and others to easily setup my new or reinstalled PC</p>
    			<h2>History</h2>
    			<p>TL:DR: v1 bad, v2 bad, v3 good</p>
    			<p>An idea to create PD was born way back in 2017. I used Visual Studio (I had no idea on how to code) to create an app that opens links to download drivers and other SW. This had one fatal flaw - It's a .exe app. A year later I created version 2 (still .exe) which I never completed. Now in 2020 I gave myself a goal of finally making PD usable and easily accesible for everyone -> moving to web! I didn't want to download a template and call it a day so instead I started to learn HTML. Thanks to my friend WinHawk who helped me whenever I hit the wall I created a website I am proud of and happy to share with everyone! I learned a lot just in the last month or two and I don't plan to stop making PD better every day!</p>
     		</div>
   	 	</div>
 	 </div>

	<!--Support modal-->
	<div id="supportmodal" class="w3-modal text-center">
    	<div class="w3-modal-content w3-animate-zoom">
      		<div class="w3-container" style="background-image: url(images/backgroundlight.jpg); color: black">
        		<span onclick="document.getElementById('supportmodal').style.display='none'" class="w3-button w3-display-topright" style="border-left: 1px solid;border-bottom: 1px solid; border-color: black">&times;</span>
        		<h2>Support this page</h2>
        		<p>Money will be used for damain name and running a server</p>
    			<p>Coming soon</p>
    			<p></p>

     		</div>
   	 	</div>
 	 </div>

	<!--Coming soon modal-->
	<div id="comingsoonmodal" class="w3-modal text-center">
    	<div class="w3-modal-content w3-animate-zoom">
      		<div class="w3-container" style="background-image: url(images/backgroundlight.jpg); color: black">
        		<span onclick="document.getElementById('comingsoonmodal').style.display='none'" class="w3-button w3-display-topright" style="border-left: 1px solid;border-bottom: 1px solid; border-color: black">&times;</span>
        		<h2>What's coming soon?</h2>
    			<p>- More apps </p>
    			<p>- Tips and tricks</p>
    			<p>- registry scripts to clean and customize Windows</p>

     		</div>
   	 	</div>
 	 </div>

	<!--News modal-->
	<div id="newsmodal" class="w3-modal text-center">
    	<div class="w3-modal-content w3-animate-zoom">
      		<div class="w3-container" style="background-image: url(images/backgroundlight.jpg); color: black">
        		<span onclick="document.getElementById('newsmodal').style.display='none'" class="w3-button w3-display-topright" style="border-left: 1px solid;border-bottom: 1px solid; border-color: black">&times;</span>
        		<h2>What's new?</h2>
    			<p>NEW - Moved to database! Better scaling!</p>
				<p>NEW - Added more apps</p>

    		</div>
   	 	</div>
 	 </div>

    <!--Feedback modal-->
    <div id="feedbackmodal" class="w3-modal text-center">
        <div class="w3-modal-content w3-animate-zoom">
            <div class="w3-container" style="background-image: url(images/backgroundlight.jpg); color: black">
                <span onclick="document.getElementById('feedbackmodal').style.display='none'" class="w3-button w3-display-topright" style="border-left: 1px solid;border-bottom: 1px solid; border-color: black">&times;</span>
                <h2>Send Feedback</h2>
                <p>What youd you add/change/remove? Did you find a bug?</p>
                <form action="feedback.php" method="post">
                    Your Nickname:<br>
                    <input type="text" name="field1"><br>
                    Your feedback:<br>
                    <input type="text" name="field2" size="70"><br><br>
                    <input type="submit" value="Submit">
                    <h1></h1>
                 </form>

            </div>
        </div>
     </div>

	</body>

</html>

