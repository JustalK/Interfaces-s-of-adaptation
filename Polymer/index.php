<!DOCTYPE html>
<html>
  <head>
	<?php
		include "inc/constants.php";
		include "inc/sql.php";
	?>  
  
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" charset="UTF-8">
  
  	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
  
  	<link rel="import" href="//www.polymer-project.org/0.5/components/core-media-query/core-media-query.html">
  
    <script src="bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>
  	<link rel="import" href="/bower_components/polymer/polymer.html">
    <link rel="import" href="bar-top.html">
    <link rel="import" href="bar-bot.html">
    <link rel="import" href="resp-div.html">
    <link rel="import" href="my-container.html">
	<link rel="import" href="title-top.html">
	<link rel="import" href="col-top.html">
    <link rel="import" href="my-row.html">
    <link rel="import" href="pull-left.html">
    <link rel="import" href="pull-right.html">
    <link rel="import" href="my-login.html">
    <link rel="import" href="my-join.html">
    
    <link rel="import" href="my-container-full.html">
    <link rel="import" href="my-movie.html">
    <link rel="import" href="my-footer.html">
    <link rel="import" href="col-mid.html">
    
    <link rel="import" href="my-button.html">
    <link rel="import" href="my-menu.html">
    <link rel="import" href="my-menu-inside.html">
    <link rel="import" href="my-bar-title.html">
    <link rel="import" href="bloc-information.html">
    
    <link rel="import" href="my-col-25-100.html">
    <link rel="import" href="my-col-50-100.html">
    <link rel="import" href="my-col-50-50.html">
    <link rel="import" href="my-col-hidden-900.html">
    <link rel="import" href="my-col-hidden-1200.html">
    <link rel="import" href="my-img-responsive.html">
    <link rel="import" href="my-lyric.html">
    <link rel="import" href="my-informations.html">
    
    <link rel="import" href="my-left.html">
    <link rel="import" href="my-right.html">
    
    
    <link rel="import" href="my-bar-pubs.html">
    
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>
    
    <style is="custom-style">
   		html,body {
   				width: 100%;
   				height: 100%;
   				margin: 0px;
    			background-color: #f8f8f8;
   		}
   		
		.menu-toggle {
			cursor: pointer;	
			text-decoration: none;
			color: #999999;		    
		}
		
		.menu-toggle:hover {
			text-decoration: none;
			color: #fff;		
		}
   		
   		body {
			font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
			font-size: 14px;
			line-height: 1.42857;
			color: #333;   		
   		
    		overflow-x: hidden;	
			overflow-y: scroll;	
   		}
   		.slick-slider {
   			margin-bottom: 0px;
   		}
	</style>
  </head>
  <body>

<my-content>
    <bar-top>
    	<my-container>
    		<my-row>
    			<col-top>
    				<pull-left>
    					<title-top></title-top>
    				</pull-left>
    				<pull-right>
	    				<my-button></my-button>
    				</pull-right>
    			</col-top>
    		</my-row>
    	</my-container>
    </bar-top>
    
    <?php 
		$rsl = select("MOVIES");
		$rows = count($rsl);
  		for ($i = 1; $i <= $rows; $i++) {
  			$movie = select("MOVIES","*","ID=".$i);
  			$id_pubs = select("MAPS_MOVIES_PUBS","*","ID_MOVIES=".$i);
  			$pubs = select("PUBS","*","ID=".$id_pubs[0]["ID_PUBS"]);
  			if($i>1) {
  				echo '<my-container-full id="'.$i.'" style="left:-20000px;">';
  			} else {
  				echo '<my-container-full id="'.$i.'">';
  			}
  	?>
	    		<my-container>
	    			<my-row>
	    				<col-mid>
	    					<my-left></my-left>
	    					<my-right></my-right>
						  	<my-movie link="https://www.youtube.com/embed/<?php echo $movie[0]['CODE']; ?>?rel=0&loop=1&hd=1&vq=hd1080&playlist=<?php echo $movie[0]['CODE']; ?>&modestbranding=1&showinfo=0"></my-movie>
						</col-mid>    		
	    			</my-row>
	    		</my-container>
	    		<my-bar-title title="<?php echo $movie[0]['TITLE']; ?>"></my-bar-title>
	    		<bloc-information>
	    		<br />
	    			<my-col-50-100>
	    				<my-col-50-50><my-col-hidden-1200><my-img-responsive link="<?php echo $movie[0]['IMG']; ?>"></my-img-responsive></my-col-hidden-1200></my-col-50-50>
	    				<my-col-50-50><my-informations studio="<?php echo $movie[0]['STUDIO']; ?>" singer="<?php echo $movie[0]['SINGER']; ?>" duration="<?php echo $movie[0]['DURATION']; ?>" genre="<?php echo $movie[0]['GENRE']; ?>" publication="<?php echo $movie[0]['PUBLICATION']; ?>" download="ddl/<?php echo $movie[0]['CODE']; ?>.mp3"></my-informations></my-col-50-50>
	    			</my-col-50-100>
	    			<my-col-50-100>
	    				<my-lyric>
	    					<?php echo $movie[0]['LYRIC']; ?>
	    				</my-lyric>
	    			</my-col-50-100>
	    		</bloc-information>
	    		<my-bar-pubs>
	    			<my-container>
	    				<my-col-25-100>
		    				<resp-div name="<?php echo $pubs[0]['TITLE1']; ?>" link="https://www.youtube.com/embed/<?php echo $pubs[0]['LINK1']; ?>?showinfo=0&controls=0"></resp-div>
		    			</my-col-25-100>
		    			<my-col-25-100>
		    				<resp-div name="<?php echo $pubs[0]['TITLE2']; ?>" link="https://www.youtube.com/embed/<?php echo $pubs[0]['LINK2']; ?>?showinfo=0&controls=0"></resp-div>
		    			</my-col-25-100>
		    			<my-col-hidden-900>
	    					<my-col-25-100>
		    					<resp-div name="<?php echo $pubs[0]['TITLE3']; ?>" link="https://www.youtube.com/embed/<?php echo $pubs[0]['LINK3']; ?>?showinfo=0&controls=0"></resp-div>
		    				</my-col-25-100>
		    			</my-col-hidden-900>
		    			<my-col-hidden-900>
		    				<my-col-25-100>
		    					<resp-div name="<?php echo $pubs[0]['TITLE4']; ?>" link="https://www.youtube.com/embed/<?php echo $pubs[0]['LINK4']; ?>?showinfo=0&controls=0"></resp-div>
		    				</my-col-25-100>
		    			</my-col-hidden-900>
		    			</my-container>
	    		</my-bar-pubs>   		
    </my-container-full>
    
    <?php } ?>         
    
</my-content>

<my-menu>
	<my-menu-inside>
		<a class="menu-toggle">
			Retour au site
		</a>
	</my-menu-inside>
</my-menu>

  <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>



