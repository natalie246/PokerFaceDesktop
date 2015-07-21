<?php
	include('db.php');
	
	$sql = "SELECT * FROM tbl_users_104";
	$result = mysqli_query($connection,$sql);
	
	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
			$name = $row["name"];
			$score = $row["score"];
			$status_player = $row["status_player"];
			$date = $row["date"];
			
			if($status_player=='1')
			$good_player = "had a good player";	
	    }
	} else {
	    echo "0 results";
	}
	
	$sql1 = "SELECT * FROM tbl_hands_104 WHERE  cards = 'Royal Flush'";
	$result1 = mysqli_query($connection,$sql1);
	
	if (mysqli_num_rows($result1) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result1)) {
			$description = $row["description"];
	
	    }
	} else {
	    echo "0 results";
	}
	
	$sql2 = "SELECT * FROM tbl_hands_104 WHERE  cards = 'Three of a kind'";
	$result2 = mysqli_query($connection,$sql2);
	
	if (mysqli_num_rows($result2) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result2)) {
			$Three = $row["cards"];
			$description1=$row["description"];
	
	    }
	} else {
	    echo "0 results";
	}

?> 





<!DOCTYPE html>
<html> 
	<head>
		<link rel ="stylesheet" href="includes/style.css">
		<script src="includes/jquery-1.11.2.min.js"></script>
		<script src="includes/scriptsMyProfile.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Fontdiner+Swanky' rel='stylesheet' type='text/css'>
		
	</head> 
	<body>	       
		<div id="wrapper">	
			<header>
				<a id="logo" href="#"></a>
				<aside>
					<article id="crown"><img src="images/little_crown.png"><br></article>
					<a href="MyProfile.html" id="user"><img src="images/tomer36.png"></a>
					<p>1400</p> 
					<section></section>
					<nav>
						<ul class="social">
							<li><a href="#"><img src="images/facebook.png" /></a></li>
							<li><a href="#"><img src="images/twitter.png" /></a></li>
							<li><a href="#"><img src="images/g+.png" /></a></li>
						</ul>
					</nav>
				</aside>
				<nav >
					<ul class="topMenu" >
						<li class="active"><a href="#">My Timeline</a></li>
						<li><a href="MyInvitation.html">My Invitations</a></li>
						<li><a href="#">My Gallery</a></li>
						<li><a href="#">My Friends</a>	</li>
						<form><input type="search" id="search" placeholder="search" /></form>
					</ul>
					<div class="clear"></div>					 
				</nav>
			</header>			
			<main id="MyTimeline">				
				<h1>My Timeline</h1>
				<article id="art1">
					<section class="top">	
						<section class="Acrown"><img src="images/little_crown.png"></section>				
						<section class="Auser"><img src="images/tomer31.png"></section>
						<p class="Ascore">	1400 </p>
						<section class="Adollars"><img src="images/dollars.png" ></section>
						<section class="Aclock"><img src="images/clock.png"></section>
						<p class="Adate">	December 22, 2014 at 2:16 pm</p>
						<section class="Ahome"><img src="images/home.png"></section>
						<p class="Aaddress"> Rishon lezion</p>						
						<nav>
							<ul class="social">
								<li><a href="#"><img src="images/Wfacebook .png" /></a></li>
								<li><a href="#"><img src="images/Wtwitter.png" /></a></li>
								<li><a href="#"><img src="images/Wg+.png" /></a></li>
							</ul>
						</nav>
					</section>
					<a>	<?php echo "$description "?></a>
					<section class="sideImages">
						<img src="images/joker-crown-1c.png">
						<img src="images/RF.png">
						<h4>
							1000
							<img src="images/dollars.png">
						</h4>
					</section>
				</article>
				
				<section id="space"></section>
				
				<article id="art2">
					<section class="top">	
						<section class="Auser"><img src="images/tomer31.png"></section>
						<p class="Ascore">	400 </p>
						<section class="Adollars"><img src="images/dollars.png" ></section>
						<section class="Aclock"><img src="images/clock.png"></section>
						<p class="Adate">	December 22, 2014 at 2:16 pm</p>
						<section class="Ahome"><img src="images/home.png"></section>
						<p class="Aaddress"> Rishon lezion</p>						
						<nav>
							<ul class="social">
								<li><a href="#"><img src="images/Wfacebook .png" /></a></li>
								<li><a href="#"><img src="images/Wtwitter.png" /></a></li>
								<li><a href="#"><img src="images/Wg+.png" /></a></li>
							</ul>
						</nav>
					</section>
					<a>Yon reported that : <?php echo "$name "  ?><?php echo "$good_player"  ?></a>
					<section class="sideImages">
						<img src="images/reut36A.png">
						<h4>
							200
							<img src="images/dollars.png">
						</h4>
					</section>
				</article>
				
				<section id="space"></section>
				
				<article id="art3">
					<section class="top">	
						<section class="Auser"><img src="images/tomer31.png"></section>
						<p class="Ascore">	400 </p>
						<section class="Adollars"><img src="images/dollars.png" ></section>
						<section class="Aclock"><img src="images/clock.png"></section>
						<p class="Adate">	December 22, 2014 at 2:16 pm</p>
						<section class="Ahome"><img src="images/home.png"></section>
						<p class="Aaddress"> Rishon lezion</p>						
						<nav>
							<ul class="social">
								<li><a href="#"><img src="images/Wfacebook .png" /></a></li>
								<li><a href="#"><img src="images/Wtwitter.png" /></a></li>
								<li><a href="#"><img src="images/Wg+.png" /></a></li>
							</ul>
						</nav>
					</section>
				<a>you took 2 photos</a>
					<section class="sideImages">
						<img src="images/img1.jpg">
						<img src="images/img2.jpg">					
					</section>
				</article>
				
<section id="space"></section>

				<article id="art4">
					<section class="top">	
						<section class="Auser"><img src="images/tomer31.png"></section>
						<section class="A4star"><img src="images/4star.png"></section>				
						<p class="Ascore">	400 </p>
						<section class="Adollars"><img src="images/dollars.png" ></section>
						<section class="Aclock"><img src="images/clock.png"></section>
						<p class="Adate">	December 22, 2014 at 2:16 pm</p>
						<section class="Ahome"><img src="images/home.png"></section>
						<p class="Aaddress"> Rishon lezion</p>						
						<nav>
							<ul class="social">
								<li><a href="#"><img src="images/Wfacebook .png" /></a></li>
								<li><a href="#"><img src="images/Wtwitter.png" /></a></li>
								<li><a href="#"><img src="images/Wg+.png" /></a></li>
							</ul>
						</nav>
					</section>
					<a><?php echo "$description1"  ?></a>
					<section class="sideImages">
						<img src="images/4star.png">
						<img src="images/TOK.png">
							<h4>
							400
							<img src="images/dollars.png">
						</h4>					
					</section>
				</article>
				
				<section id="space"></section>
			
			</main>
			<footer>
				<nav>
					<ul>
						<li><a href="#">About</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Information</a></li>
						<li><a href="#">Search Terms</a></li>
					</ul>		
				</nav>
				<p>@2015 PokerFace. All rights reserved</p>
			</footer>
		</div>
	</body> 
</html>  