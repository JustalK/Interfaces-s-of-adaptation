<!DOCTYPE html>

<?php
	$timestart=microtime(true);
?>

<html lang="en">
<head>
<?php
	include "inc/constants.php";
	include "inc/sql.php";
?>
<!-- To ensure proper rendering and touch zooming for mobiles -->
<!-- Desactivation of the zooming capabilities -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" charset="ISO-8859-1">
<title><?php echo TITLE; ?></title>

<!-- Latest compiled and minified CSS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!--  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- The CSS of the page -->
<link rel="stylesheet" href="style/main.css">
<!-- The JS of the page -->
<script src="js/main.js"></script>

    <!-- Custom CSS -->
    <link href="style/simple-sidebar.css" rel="stylesheet">
</head>
<body>
<div id="content" style="width:100%;height:auto;float: left;">
	
    <!-- TOP BAR LOW RESOLUTION -->
    <nav class="navbar navbar-default navbar-static-top hidden-xs hidden-sm hidden-md hidden-lg">
        <div class="container-fluid">
        	<div class="row">	
        		<div class="col-xs-12 navbar-brand">
        			<div class="btn btn-default menu-toggle">Menu Hide/Show</div>
        		</div>
      		</div>
        </div>
    </nav>    
    <!-- END TOP BAR LOW RESOLUTION -->
    
    <!-- TOP BAR HIGH RESOLUTION -->
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">    
        	<div class="col-sm-12 col-md-12 col-lg-12">
       	        <div class="pull-left">
        			<strong class="navbar-brand">Latsuj</strong>
        		  </div>
        		  <div class="pull-right navbar-brand">
        		  	<div class="menu-toggle btn btn-default">Menu Hide/Show</div>
				</div>
        	</div>
        </div>
    </nav>
    <!-- END TOP BAR HIGH RESOLUTION -->
   
			   <!-- START CAROUSEL -->
			    <div class="container-fluid black">
			    	<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
			
			  			<!-- Wrapper for slides -->
			  			<div class="carousel-inner" role="listbox">
  		
				  		<?php 
							$rsl = select("MOVIES");
							$rows = count($rsl);
				  			for ($i = 1; $i <= $rows; $i++) {
				  				$movie = select("MOVIES","*","ID=".$i);
				  			
				  				if($i==1) {
				  					echo '<div class="item active" >';	
				  				} else {
				  					echo '<div class="item" >';
				  				}
				  		?>
	  			
				  		<!-- START CONTAINER FOR THE MOVIE -->
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
				          				<iframe class="movie embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $movie[0]['CODE']; ?>?rel=0&loop=1&hd=1&vq=hd1080&playlist=<?php echo $movie[0]['CODE']; ?>&modestbranding=1&showinfo=0"></iframe>
						  			</div>
				      			</div>
							</div>
				    	</div>
				    	<!-- END CONTAINER FOR THE MOVIE -->
	    		
				    	<!-- START MENU --> 
						<div class="title text-center">
							<strong><?php echo $movie[0]['TITLE']; ?></strong>
						</div>
						<!-- START ROW1 -->
						<div class="row lyric" style="padding-bottom:10px;">
							<!-- START COL1 -->
							<div class="col-md-12 col-lg-6"><br />
							
								<!-- START ROW2 -->
								<div class="row">
									<div class="hidden-xs hidden-sm col-md-6 col-lg-6 text-center pagination-centered" style="position:relative;vertical-align:middle;min-height:300px;">
										<img src="<?php echo $movie[0]['IMG']; ?>" class="img-responsive" alt="Responsive image">
									</div>
									
									<!-- START COL2 -->
									<div class="col-md-6 col-lg-6 text-center pagination-centered center-block" style="display: flex;justify-content: center;min-height: 300px;">
										<!-- START ALIGN -->
										<div style="align-self: center;width:100%;">
											
											<table class="table table-bordered">
												<tbody>
													<tr>
														<td>Studio</td>
														<td><?php echo $movie[0]['STUDIO']; ?></td>
													</tr>
													<tr>
														<td>Singer</td>
														<td><?php echo $movie[0]['SINGER']; ?></td>
													</tr>
													<tr>
														<td>Duration</td>
														<td><?php echo $movie[0]['DURATION']; ?></td>
													</tr>
													<tr>
														<td>Genre</td>
														<td><?php echo $movie[0]['GENRE']; ?></td>
													</tr>
													<tr>
														<td>Publication</td>
														<td><?php echo $movie[0]['PUBLICATION']; ?></td>
													</tr>
												</tbody>
											</table>
											
											<a href="ddl/<?php echo $movie[0]['CODE']; ?>.mp3" class="btn btn-success btn-sm full" download>DOWNLOAD</a>
										
										<!-- END ALIGN -->
										</div>
									<!-- END COL2 -->
									</div>
								<!-- END ROW2 -->
								</div>
							<!-- END COL1 -->
							</div>
							<!-- START COL1 -->
				      		<div class="col-md-12 col-lg-6"><br />
								<div class="text-center write">
									<h2><?php echo $movie[0]['LYRIC']; ?></h2>
								</div>
							<!-- END COL1 -->
							</div>
						<!-- END ROW1 -->
						</div>
			
						<?php 
							$id_pubs = select("MAPS_MOVIES_PUBS","*","ID_MOVIES=".$i);
							$pubs = select("PUBS","*","ID=".$id_pubs[0]["ID_PUBS"]);
						?>
			
						<nav class="navbar navbar-default navbar-static-bottom">
							<!-- START CONTAINER2 -->
			    			<div class="container">
			    				<!-- START ROW2 -->
			      				<div class="row">
			      				
			       	 				<div class="col-xs-push col-sm-6 col-md-6 col-lg-3">
			          					<h2><strong><?php echo $pubs[0]['TITLE1']; ?></strong></h2>
			          					<div class="embed-responsive embed-responsive-16by9">
			    							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $pubs[0]['LINK1']; ?>?showinfo=0&controls=0"></iframe>
					  					</div><br />
			       					</div>
			       					
			        				<div class="col-xs-push col-sm-6 col-md-6 col-lg-3">
			          					<h2><strong><?php echo $pubs[0]['TITLE2']; ?></strong></h2>
			          					<div class="embed-responsive embed-responsive-16by9">
			    							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $pubs[0]['LINK2']; ?>?showinfo=0&controls=0"></iframe>
					  					</div><br />
			       					</div>
			       					
			        				<div class="hidden-xs col-sm-6 col-md-6 col-lg-3">
			          					<h2><strong><?php echo $pubs[0]['TITLE3']; ?></strong></h2>
			          					<div class="embed-responsive embed-responsive-16by9">
			    							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $pubs[0]['LINK3']; ?>?showinfo=0&controls=0"></iframe>
					  					</div><br />
			       					</div>
			       					
			       					<div class="hidden-xs col-sm-6 col-md-6 col-lg-3">
			          					<h2><strong><?php echo $pubs[0]['TITLE4']; ?></strong></h2>
			          					<div class="embed-responsive embed-responsive-16by9">
			    							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $pubs[0]['LINK4']; ?>?showinfo=0&controls=0"></iframe>
					  					</div><br />
			       					</div>
			       					
			       				<!-- END ROW2 -->
			      				</div>
			      			<!-- END CONTAINER2 -->
							</div>
						</nav>
			
						<!-- END Wrapper for slides -->
    					</div>

					<?php } ?>   
			
					<!-- END MyCarousel -->			    		
					</div>
				<!-- END Container-Fluid -->
				</div>
			</div>
			
				<!-- Bootstrap core JavaScript
				================================================== -->
				<!-- Placed at the end of the document so the pages load faster -->
				<!-- Latest compiled and minified JavaScript -->
				<!--  
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
				-->
			</div>
			<div id="menu" style="position:relative;width:0%;height:auto;background:#000000;float: right;">s</div>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>