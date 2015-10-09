<!DOCTYPE html>

<?php
	$timestart=microtime(true);
?>

<html lang="en">
<head>
<?php
	include "constants.php";
?>
<!-- To ensure proper rendering and touch zooming for mobiles -->
<!-- Desactivation of the zooming capabilities -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" charset="ISO-8859-1">
<title><?php echo TITLE; ?></title>

<!-- Latest compiled and minified CSS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- The CSS of the page -->
<link rel="stylesheet" href="style/main.css">
<!-- The JS of the page -->
<script src="js/main.js"></script>
</head>
<body>
    <!-- TOP BAR -->
    <nav class="navbar navbar-default navbar-static-top hidden-sm hidden-md hidden-lg">
        <div class="container-fluid">
        	<div class="row">	
        	<div class="col-xs-12 navbar-brand">
		        <div class="dropdown">
		        	        		  	<ul class="nav nav-tabs" style="width:100%;">
						  <li role="presentation" class="dropdown text-center" style="width:100%;">
						    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
						      Menu <span class="caret"></span>
						    </a>
		   <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
		      <li class="text-center"><a tabindex="-1" href="#">Account</a></li>
		      <li class="text-center"><a tabindex="-1" href="#">Profil</a></li>
		      <li class="text-center"><a tabindex="-1" href="#">Logout</a></li>
		      <li class="divider"></li>
		      <li class="text-center"><a tabindex="-1" href="#">About us</a></li>
		    </ul>
		    </li>
		    </ul>
		  </div>
        </div>
      		</div>
        </div>
    </nav>    
    
    <nav class="navbar navbar-default navbar-static-top hidden-xs">
        <div class="container">    
        		<div class="col-sm-12 col-md-12 col-lg-12">
       	        	<div class="pull-left">
        				<strong class="navbar-brand">Latsuj</strong>
        		  	</div>
        		  	<div class="pull-right navbar-brand">
	        		  	<ul class="nav nav-tabs">
						  <li role="presentation" class="dropdown text-right">
						    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
						      Menu <span class="caret"></span>
						    </a>
						    <ul class="dropdown-menu" >
						      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Account</a></li>
						      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Profil</a></li>
						      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Logout</a></li>
						      <li role="presentation" class="divider"></li>
						      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
						    </ul>
						  </li>
						</ul>
					</div>
        		</div>
        	</div>
        </div>
    </nav>
    <!-- END TOP BAR -->
    
    
    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">		
  <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
      </div>
		<div class="modal-footer">
			<div class="btn-group btn-group-justified" role="group" aria-label="group button">
				<div class="btn-group" role="group">
					<button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
				</div>
				<div class="btn-group btn-delete hidden" role="group">
					<button type="button" id="delImage" class="btn btn-default btn-hover-red" data-dismiss="modal"  role="button">Delete</button>
				</div>
				<div class="btn-group" role="group">
					<button type="button" id="saveImage" class="btn btn-default btn-hover-green" data-action="save" role="button">Save</button>
				</div>
			</div>
		</div>
		</div>
	</div>
	</div>
   
    <div class="container-fluid black">
    
    	<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">

  		<!-- Wrapper for slides -->
  		<div class="carousel-inner" role="listbox">
  		
    		<div class="item active" >
    			<div class="container">
	    			<div class="row">
	      				<div class="col-md-12">
	      					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="z-index:1000;width:5%;height:90%;">
    							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    							<span class="sr-only">Previous</span>
  							</a> 
					  		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="z-index:1000;width:5%;height:90%;">
					    		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    		<span class="sr-only">Next</span>
					  		</a>
	          				<div id="aze" class="embed-responsive embed-responsive-16by9">
	          					<iframe class="movie embed-responsive-item" src="https://www.youtube.com/embed/RgKAFK5djSk?rel=0&loop=1&hd=1&vq=hd1080&playlist=RgKAFK5djSk&modestbranding=1"></iframe>
			  				</div>
	      				</div>
					</div>
	    		</div>
	    		
	    		<!-- AFFICHAGE --> 
				<div class="title text-center">
					<strong>See you again</strong>
				</div>
				<div class="row lyric" style="padding-bottom:10px;">
					<div class="col-md-12 col-lg-6">
						<br />
						<div class="row">
							<div class="hidden-xs hidden-sm col-md-6 col-lg-6 text-center pagination-centered" style="position:relative;vertical-align:middle;min-height:300px;">
								<img src="https://upload.wikimedia.org/wikipedia/en/0/08/Wiz_Khalifa_Feat._Charlie_Puth_-_See_You_Again_%28Official_Single_Cover%29.png" class="img-responsive" alt="Responsive image">
							</div>
							<div class="col-md-6 col-lg-6 text-center pagination-centered center-block" style="display: flex;justify-content: center;min-height: 300px;">
							<div style="align-self: center;width:100%;">
								  <table class="table table-bordered">
								    <tbody>
								      <tr>
								        <td>Studio</td>
								        <td>Atlantic Records</td>
								      </tr>
								      <tr>
								        <td>Singer</td>
								        <td>Wiz Khalifa</td>
								      </tr>
								      <tr>
								        <td>Duration</td>
								        <td>3:49</td>
								      </tr>
								      <tr>
								        <td>Genre</td>
								        <td>Hip-hop/Pop</td>
								      </tr>
								      <tr>
								        <td>Publication</td>
								        <td>17 mars 2015</td>
								      </tr>
								    </tbody>
								  </table>
								  	<a href="ddl/WizKhalifa-SeeYouAgain.mp3" class="btn btn-success btn-sm full" download>DOWNLOAD</a>
								  </div>
							</div>
						</div>
				</div>
	      		<div class="col-md-12 col-lg-6">
	      			<br />
						<div class="text-center write">
							<h2>It's been a long day without you, my friend<br />
							And I'll tell you all about it when I see you again<br />
							We've come a long way from where we began<br />
							Oh, I'll tell you all about it when I see you again<br />
							When I see you again<br /><br />
							
							Damn, who knew?<br />
							All the planes we flew<br />
							Good things we've been through<br />
							That I'll be standing right here talking to you<br />
							'Bout another path<br />
							I know we loved to hit the road and laugh<br />
							But something told me that it wouldn't last<br />
							Had to switch up<br />
							Look at things different, see the bigger picture<br />
							Those were the days<br />
							Hard work forever pays<br />
							Now I see you in a better place <br /><br />
							
							How can we not talk about family when family's all that we got?<br />
							Everything I went through you were standing there by my side<br />
							And now you gon' be with me for the last ride<br /><br />
							
							It's been a long day without you, my friend<br />
							And I'll tell you all about it when I see you again<br />
							We've come a long way (yeah, we came a long way) from where we began<br />
							Oh, I'll tell you all about it when I see you again<br />
							When I see you again<br /><br />
							
							First you both go out your way<br />
							And the vibe is feeling strong<br />
							And what's small turn to a friendship<br />
							A friendship turn to a bond<br />
							And that bond will never be broken<br />
							The love will never get lost<br />
							And when brotherhood come first<br />
							Then the line will never be crossed<br />
							Established it on our own<br />
							When that line had to be drawn<br />
							And that line is what we reach<br />
							So remember me when I'm gone<br /><br />
							
							How can we not talk about family when family's all that we got?<br />
							Everything I went through you were standing there by my side<br />
							And now you gon' be with me for the last ride<br />
							
							So let the light guide your way, yeah<br />
							Hold every memory as you go<br />
							And every road you take, will always lead you home, home<br /><br />
							
							It's been a long day without you, my friend<br />
							And I'll tell you all about it when I see you again<br />
							We've come a long way from where we began<br />
							Oh, I'll tell you all about it when I see you again<br />
							When I see you again<br /></h2>
						</div>
					</div>
				</div>
    		</div>

    		<!-- END AFFICHAGE --> 

    		<div class="item">
        		<div class="container">
	    			<div class="row">
	      				<div class="col-md-12">
		      					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="z-index:1000;width:5%;">
	    							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    							<span class="sr-only">Previous</span>
	  							</a> 
						  		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="z-index:1000;width:5%;">
						    		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    		<span class="sr-only">Next</span>
						  		</a>
	          				<div class="embed-responsive embed-responsive-16by9">
	    						<iframe class="movie embed-responsive-item" src="https://www.youtube.com/embed/j3CaHeakZF4?rel=0&loop=1&hd=1&vq=hd1080&playlist=j3CaHeakZF4&modestbranding=1"></iframe>
			  				</div>
	      				</div>
					</div>
	    		</div>
	    		
	    		<!-- AFFICHAGE --> 
				<div class="title text-center">
					<strong>Five more hours</strong>
				</div>
				<div class="row lyric" style="padding-bottom:10px;">
					<div class="col-md-12 col-lg-6">
						<br />
						<div class="row">
							<div class="hidden-xs hidden-sm col-md-6 col-lg-6 text-center pagination-centered" style="position:relative;vertical-align:middle;min-height:300px;">
								<img src="http://paroles-et-traduction.com/wp-content/uploads/2015/03/deorro-five-more-hours-chris-brown.jpg" class="img-responsive" alt="Responsive image">
							</div>
							<div class="col-md-6 col-lg-6 text-center pagination-centered center-block" style="display: flex;justify-content: center;min-height: 300px;">
							<div style="align-self: center;width:100%;">
								  <table class="table table-bordered">
								    <tbody>
								      <tr>
								        <td>Studio</td>
								        <td>LE7ELS</td>
								      </tr>
								      <tr>
								        <td>Singer</td>
								        <td>Chris Brown</td>
								      </tr>
								      <tr>
								        <td>Duration</td>
								        <td>5:26</td>
								      </tr>
								      <tr>
								        <td>Genre</td>
								        <td>Electro house</td>
								      </tr>
								      <tr>
								        <td>Publication</td>
								        <td>7 April 2014</td>
								      </tr>
								    </tbody>
								  </table>
								  <br />
								  <button type="button" class="btn btn-success btn-sm full" data-toggle="modal" data-target="#myModal" download>DOWNLOAD</button>
								  </div>
							</div>
						</div>
				</div>
	      		<div class="col-md-12 col-lg-6">
	      			<br />
						<div class="text-center write">
							<h2>What you wanna do baby? Where you wanna go?<br />
							I'll take you to the moon baby, I'll take you to the floor<br />
							I'll treat you like a real lady, no matter where you go<br />
							Just give me some time baby, cause you know<br />
							Even when we're apart I know my heart is still there with you<br />
							5 more hours till the night is ours and I'm in bed with you<br /><br />
							
							This right here is my type of party<br />
							5 more hours, we're just getting started<br />
							This right here is my type of party<br />
							5 more hours, we're just getting started<br />
							(5 more hours, we're just getting started)<br />
							
							How you wanna feel baby? What you wanna know?<br />
							Just pour another drink baby, come on pour a little more<br />
							I'll treat you like a real lady, I'll keep you out the cold<br />
							I'll give you all my time baby, you know even when we're apart<br />
							I know my heart is still there with you<br />
							5 more hours till the night is ours and I'm in bed with you<br /><br />
							
							This right here is my type of party<br />
							5 more hours, we're just getting started<br />
							This right here is my type of party<br />
							5 more hours, we're just getting started<br /><br />
							
							I follow the sound of your heartbeat<br />
							How it always calls me, finding my way back to you<br />
							I'm feeling it more now than ever<br />
							I'll do this forever, just to spend a night with you<br />
							
							This right here is my type of party<br />
							5 more hours, we're just getting started<br />
							This right here is my type of party<br />
							5 more hours, we're just getting started<br /><br /></h2>
						</div>
					</div>
				</div>
    		</div>
    		<!-- END AFFICHAGE --> 	    		

    		<div class="item">
            	<div class="container">
	    			<div class="row">
	      				<div class="col-md-12">
		      					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="z-index:1000;width:5%;">
	    							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    							<span class="sr-only">Previous</span>
	  							</a> 
						  		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="z-index:1000;width:5%;">
						    		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    		<span class="sr-only">Next</span>
						  		</a>
	          				<div class="embed-responsive embed-responsive-16by9">
	    						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5dN3JV6sE9Q?rel=0&loop=1&hd=1&playlist=5dN3JV6sE9Q"></iframe>
			  				</div>
	      				</div>
					</div>
	    		</div>
	    		
	    		<!-- AFFICHAGE --> 
				<div class="title text-center">
					<strong>My Jam</strong>
				</div>
				<div class="row lyric" style="padding-bottom:10px;">
					<div class="col-md-12 col-lg-6">
						<br />
						<div class="row">
							<div class="hidden-xs hidden-sm col-md-6 col-lg-6 text-center pagination-centered" style="position:relative;vertical-align:middle;min-height:300px;">
								<img src="http://ecx.images-amazon.com/images/I/612e4seyGML._SY300_.jpg" class="img-responsive" alt="Responsive image">
							</div>
							<div class="col-md-6 col-lg-6 text-center pagination-centered center-block" style="display: flex;justify-content: center;min-height: 300px;">
							<div style="align-self: center;width:100%;">
								  <table class="table table-bordered">
								    <tbody>
								      <tr>
								        <td>Studio</td>
								        <td>Tycoon</td>
								      </tr>
								      <tr>
								        <td>Singer</td>
								        <td>Boddy Brackins</td>
								      </tr>
								      <tr>
								        <td>Duration</td>
								        <td>3:50</td>
								      </tr>
								      <tr>
								        <td>Genre</td>
								        <td>Hip-hop/Pop</td>
								      </tr>
								      <tr>
								        <td>Publication</td>
								        <td>8 February 2015</td>
								      </tr>
								    </tbody>
								  </table>
								  <br />
								  <button type="button" class="btn btn-success btn-sm full" data-toggle="modal" data-target="#myModal" download>DOWNLOAD</button>
								  </div>
							</div>
						</div>
				</div>
	      		<div class="col-md-12 col-lg-6">
	      			<br />
						<div class="text-center write">
							<h2>Made another hit for the radio station<br /><br />

								It's alright<br />
								Ooh baby it's alright<br />
								Do a movin' like a long flight<br />
								Turn up, yeah I just might<br />
								Get it poppin' I'ma have some fun<br />
								Yeah baby think you are the one<br />
								On replay like my favorite song<br />
								Do you, don't take too long<br />
								I was mobbin' to the bay with my J's on<br />
								Vibing to the beat, I'm in my zone<br />
								Movin' in like it was a dance song<br /><br />
								
								I think I hear my jam coming in<br />
								Whoa, whoa, whoa, whoa<br />
								This my jam coming in<br />
								Whoa, whoa, whoa, whoa<br />
								I hear the 808 kicking in<br />
								Whoa, whoa, whoa<br />
								This my jam coming in<br />
								Whoa, whoa, whoa, whoa<br />
								
								Made another hit, it's way past the sequel<br />
								Catch me in trafffic turnin' up with my people<br />
								May be in the East End, double d's regal<br />
								She wanna find me, she ain't trippin' off Nemo<br />
								Bat to LA, I built a new bridge<br />
								Take you to the crib, show you how a boss live<br />
								Gonna stay mobbin' with a Fairfax fit<br />
								Turn up, boo thang cause that's my ish<br />
								I was mobbin' to the bay, A's hat on<br />
								Vibing to the beat, I'm in my zone<br />
								Mobbin' hard, yeah I get my jam on<br />
								Turn up<br /><br />
								
								I think I hear my jam coming in<br />
								Whoa, whoa, whoa, whoa<br />
								This my jam coming in<br />
								Whoa, whoa, whoa, whoa<br />
								I hear the 808 kicking in<br />
								Whoa, whoa, whoa<br />
								This my jam coming in<br />
								Whoa, whoa, whoa, whoa<br />
								
								It ain't loud enough, I wanna hear my jam bang<br />
								Keep it on blast, don't you think about changing<br />
								Still going hard darling, please be patient<br />
								More slaps coming and they all is amazing<br />
								We could hit the function or play slaps and stay in<br />
								Hotel, motel, or the Holiday Inn<br />
								Girl keep my jams on heavy rotation<br />
								Made another hit for the radio station<br /><br />
								
								I was mobbin' in LA in my Lambo<br />
								Vibing to the beat in my zone<br />
								Swaggin' out like it was a dance song<br />
								
								I think I hear my jam coming in<br />
								Whoa, whoa, whoa, whoa<br />
								This my jam coming in<br />
								Whoa, whoa, whoa, whoa<br />
								I hear the 808 kicking in<br />
								Whoa, whoa, whoa<br />
								This my jam coming in<br />
								Whoa, whoa, whoa, whoa<br /><br />
								
								Oh, yeah that's my shit<br />
								Sittin' shotgun yeah that's my chick<br />
								Leave it out front, don't move my whip<br />
								Oh, I just raised my price<br />
								Hands in the air I just raised my ice<br />
								Looking for a young Holly that'll spend one night<br /><br />
								
								I was mobbin' in LA in my Lambo<br />
								Vibing to the beat in my zone<br />
								Swaggin' out like it was a dance song<br /><br />
								
								I think I hear my jam coming in<br />
								Whoa, whoa, whoa, whoa<br />
								This my jam coming in<br />
								Whoa, whoa, whoa, whoa<br />
								I hear the 808 kicking in<br />
								Whoa, whoa, whoa<br />
								This my jam coming in<br />
								Whoa, whoa, whoa, whoa<br /><br /></h2>
						</div>
					</div>
				</div>
    		</div>
    		<!-- END AFFICHAGE --> 	    		

    		<div class="item">
            	<div class="container">
	    			<div class="row">
	      				<div class="col-md-12">
		      					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="z-index:1000;width:5%;">
	    							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    							<span class="sr-only">Previous</span>
	  							</a> 
						  		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="z-index:1000;width:5%;">
						    		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    		<span class="sr-only">Next</span>
						  		</a>
	          				<div class="embed-responsive embed-responsive-16by9">
	    						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/YqeW9_5kURI?rel=0&loop=1&hd=1&playlist=YqeW9_5kURI"></iframe>
			  				</div>
	      				</div>
					</div>
	    		</div>
	    		
	    		<!-- AFFICHAGE --> 
				<div class="title text-center">	
					<strong>Lean on</strong>
				</div>
				<div class="row lyric" style="padding-bottom:10px;">
					<div class="col-md-12 col-lg-6">
						<br />
						<div class="row">
							<div class="hidden-xs hidden-sm col-md-6 col-lg-6 text-center pagination-centered" style="position:relative;vertical-align:middle;min-height:300px;">
								<img src="http://img.allformusic.fr/pochette/300/m/major-lazer/lean-on-single.jpg" class="img-responsive" alt="Responsive image">
							</div>
							<div class="col-md-6 col-lg-6 text-center pagination-centered center-block" style="display: flex;justify-content: center;min-height: 300px;">
							<div style="align-self: center;width:100%;">
								  <table class="table table-bordered">
								    <tbody>
								      <tr>
								        <td>Studio</td>
								        <td>Mad Decent</td>
								      </tr>
								      <tr>
								        <td>Singer</td>
								        <td>Major Lazer</td>
								      </tr>
								      <tr>
								        <td>Duration</td>
								        <td>2:56</td>
								      </tr>
								      <tr>
								        <td>Genre</td>
								        <td>EDM</td>
								      </tr>
								      <tr>
								        <td>Publication</td>
								        <td>2 mars 2015</td>
								      </tr>
								    </tbody>
								  </table>
								  <br />
								  <button type="button" class="btn btn-success btn-sm full" data-toggle="modal" data-target="#myModal" download>DOWNLOAD</button>
								  </div>
							</div>
						</div>
				</div>
	      		<div class="col-md-12 col-lg-6">
	      			<br />
						<div class="text-center write">
							<h2>Do you recall, not long ago<br />
									We would walk on the sidewalk<br />
									Innocent, remember?<br />
									All we did was care for each other<br /><br />
									
									But the night was warm<br />
									We were bold and young<br />
									All around the wind blows<br />
									We would only hold on to let go<br /><br />
									
									Blow a kiss, fire a gun<br />
									We need someone to lean on<br />
									Blow a kiss, fire a gun<br />
									All we need is somebody to lean on<br /><br />
									
									What will we do when we get old?<br />
									Will we walk down the same road?<br />
									Will you be there by my side?<br />
									Standing strong as the waves roll over<br /><br />
									
									When the nights are long<br />
									Longing for you to come home<br />
									All around the wind blows<br />
									We would only hold on to let go<br /><br />
									
									Blow a kiss, fire a gun<br />
									We need someone to lean on<br />
									Blow a kiss, fire a gun<br />
									All we need is somebody to lean on<br /><br />
									
									All we need is somebody to lean on<br />
									All we need is somebody to lean on<br />
									Lean on, lean on, lean on, lean on...<br /><br />
									
									Blow a kiss, fire a gun<br />
									We need someone to lean on<br />
									Blow a kiss, fire a gun<br />
									All we need is somebody to lean on<br /><br /></h2>
						</div>
					</div>
				</div>
    		</div>
    		<!-- END AFFICHAGE --> 	    		
	      </div>
		</div>
	    </div>   
    <br />  
    
<nav class="navbar navbar-default navbar-static-bottom">
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-xs-push col-sm-6 col-md-6 col-lg-3">
          <h2><strong>Say So</strong></h2>
          <div class="embed-responsive embed-responsive-16by9">
    		<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/WjK0n57Hwb0"></iframe>
		  </div><br />
       	</div>
        <div class="col-xs-push col-sm-6 col-md-6 col-lg-3">
          <h2><strong>Lit</strong></h2>
          <div class="embed-responsive embed-responsive-16by9">
    		<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/WZ3pkBM7j0M"></iframe>
		  </div><br />
       	</div>
        <div class="hidden-xs col-sm-6 col-md-6 col-lg-3">
          <h2><strong>The Play</strong></h2>
          <div class="embed-responsive embed-responsive-16by9">
    		<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Z6uCHtXWxqY"></iframe>
		  </div><br />
       	</div>
       	<div class="hidden-xs col-sm-6 col-md-6 col-lg-3">
          <h2><strong>No Permission</strong></h2>
          <div class="embed-responsive embed-responsive-16by9">
    		<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Lmxcp_i9T3s"></iframe>
		  </div><br />
       	</div>
      </div>
	</div>
</nav>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


    <nav class="navbar navbar-default " style="bottom: 0;border-top: 1px solid #000000;background: #82d0ff;min-height: 0px;border-radius:none;">
        <div class="container">
        	<div class="row">	
        		<div class="col-xs-12">
        			<?php 
        				$timeend=microtime(true);
        				$time=$timeend-$timestart;
        			?>
		        	<?php echo gethostname()." Temps de chargement : ".$page_load_time = number_format($time, 3)." | Memoire alloué : ".round(memory_get_usage()/1024,2)." ko";?>
        		</div>
      		</div>
        </div>
    </nav>   
     
</body>
</html>