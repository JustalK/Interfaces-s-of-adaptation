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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- The CSS of the page -->
<link rel="stylesheet" href="style/main.css">
</head>
<body>
<div class="container-fluid">
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <span class="navbar-brand" href="#">Latsuj's Project</span>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    <div class="container">
    <div class="row">
      <div class="col-md-12">
          <div class="embed-responsive embed-responsive-16by9">
    		<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/j3CaHeakZF4"></iframe>
		  </div>
      </div>
	</div>
    </div>
    
<nav class="navbar navbar-default navbar-static-bottom fill">
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-3">
          <h2>Aon Luckkana</h2>
          <div class="embed-responsive embed-responsive-16by9">
    		<iframe class="embed-responsive-item" src="http://www.viki.com/player/1035091v"></iframe>
		  </div><br />
       	</div>
        <div class="col-md-3">
          <h2>My Jam</h2>
          <div class="embed-responsive embed-responsive-16by9">
    		<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5dN3JV6sE9Q"></iframe>
		  </div><br />
       	</div>
        <div class="col-md-3">
          <h2>Five More Hours</h2>
          <div class="embed-responsive embed-responsive-16by9">
    		<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/j3CaHeakZF4"></iframe>
		  </div><br />
       	</div>
       	<div class="col-md-3">
          <h2>Nyan Nyan</h2>
          <div class="embed-responsive embed-responsive-16by9">
    		<iframe class="embed-responsive-item" src="http://www.dailymotion.com/embed/video/xj20tk"></iframe>
		  </div><br />
       	</div>
      </div>
    
</div>
</nav>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>