<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My Restaurants</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>
<nav class="navbar navbar-expand-lg navbar-dark unique-color-dark sticky-top">	
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="basicExampleNav">
        <ul class="navbar-nav mr-auto ">
            <li class="nav-item">
                <a class="navbar-brand" href="#">My Restaurants</a>
            </li>
        </ul>
	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="liked.php">Restaurants i've liked</a>
        </div>
    </div>	

        <span class="navbar-text">
<button class="btn btn-outline-red btn-sm my-0" > <a href="logout.php">Logout from <?php echo $_SESSION['username'];?></a></button> 
        </span>		
    </div>
</nav>
<body>

      <!-- Start your project here-->
<div class="container col-md-8">	
	<div class="card">
	<div class="card-body text-center">
	
	    <div class="col-md-6 offset-md-3">
<button class="btn btn-primary my-0 " onclick="getLocation()">closest Restaurants to my location</button>
<p id="demo"></p>
		</div>
	</div>
    </div>
</div> 
      <!-- /Start your project here-->

	  <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
	<script type="text/javascript">
	var x = document.getElementById("demo");

			function getLocation() {
			if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(showPosition);
		} else { 
			x.innerHTML = "Geolocation is not supported by this browser.";
		}
	}
			function showPosition(position) {
		lat = position.coords.latitude;
		lon = position.coords.longitude;
			window.location.href = "closest.php?lat=" + lat + "&lon=" + lon;
	}
	</script>
</body>
</html>
