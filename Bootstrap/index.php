<!DOCTYPE html>

<?php
	$time = microtime();
	$time = explode(' ', $time);
	$time = $time[1] + $time[0];
	$start = $time;
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
</head>
<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
      		<!-- Example row of columns -->
      		<div class="row">
        		<div class="col-xs-12 col-sm-12 col-md-12">
       	          <div class="pull-left">
        			<strong class="navbar-brand">Latsuj</strong>
        		  </div>
        		       	      <div class="pull-right navbar-brand">
        		    	<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal">JOIN US!</button>
       	          		<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">LOGIN</button>
					<br />
					</div>
        		</div>
        	</div>
        </div>


    </nav>
    
    
    
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
  
    <div class="container-full" style="background:#000000">
	    <div class="container">
	    <div class="row">
	      <div class="col-md-12">
	          <div class="embed-responsive embed-responsive-16by9">
	    		<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/j3CaHeakZF4"></iframe>
			  </div>
	      </div>
		</div>
	    </div>
    </div>
    
<nav class="navbar navbar-default navbar-static-bottom">
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-xs-push col-sm-3 col-md-3">
          <h2><strong>Aon Luckkana</strong></h2>
          <div class="embed-responsive embed-responsive-16by9">
    		<iframe class="embed-responsive-item" src="http://www.viki.com/player/1035091v"></iframe>
		  </div><br />
       	</div>
        <div class="col-xs-push col-sm-3 col-md-3">
          <h2><strong>My Jam</strong></h2>
          <div class="embed-responsive embed-responsive-16by9">
    		<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5dN3JV6sE9Q"></iframe>
		  </div><br />
       	</div>
        <div class="col-xs-push col-sm-3 col-md-3">
          <h2><strong>Five More Hours</strong></h2>
          <div class="embed-responsive embed-responsive-16by9">
    		<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/j3CaHeakZF4"></iframe>
		  </div><br />
       	</div>
       	<div class="col-xs-push col-sm-3 col-md-3">
          <h2><strong>Nyan Nyan</strong></h2>
          <div class="embed-responsive embed-responsive-16by9">
    		<iframe class="embed-responsive-item" src="http://www.dailymotion.com/embed/video/xj20tk"></iframe>
		  </div><br />
       	</div>
      </div>
      <br />
      <h4 class="text-center">Justal "Latsuj" Kevin - 2015 Polytech'Nice Sophia</h4>
      
	</div>
</nav>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>