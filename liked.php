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
                <a class="navbar-brand" href="index">My Restaurants</a>
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
			<div class="card-body ">
				<div class="w-responsive text-center mx-auto p-3 mt-2">
				<?php
				

require_once "config.php";


$query = "SELECT * FROM likes WHERE user_id='".$_SESSION['id']."'";
$result = mysqli_query ($link,$query);

while ($row = mysqli_fetch_array ($result)) {
echo " 
<div class=\"card w-100\">
    <div class=\"card-body\">
        <h3 class=\"card-title\">".$row['name']."</h3>
        <p class=\"card-text\">".$row['address']."</p>
        <a href=\"dislike.php?place_id=".$row['place_id']." \"class=\"btn btn-red btn-sm\">dislike</a>
    </div>
	</div>
	<hr>
 ";
    
}


$link->close();	
				?>		
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
</body>

</html>


