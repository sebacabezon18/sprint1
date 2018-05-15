
<?php
include('funciones.php');
session_start();
$usuario = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/tablet.css">
    <link rel="stylesheet" href="css/desktop.css">

	<meta charset="utf-8">

	<title>savona</title>

</head>

	<body>

	<main>
	<?php  include ("header.php"); ?>	
	<?php  include ("nav.php"); ?>	
		
	<content>

		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imgs/Banner.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imgs/Banner3.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imgs/Banner4.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

	 <!-- <div class="banner">
		<img src="imgs/Banner.png"></img>
		</div> -->
	<div class="banner2">
		<img src="imgs/Banner2.png"></img>
	</div>

	</content>
	
	<?php  include ("footer.php"); ?>	
	<div class="clear">

	</div>
	</main>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	</body>

	</html>
