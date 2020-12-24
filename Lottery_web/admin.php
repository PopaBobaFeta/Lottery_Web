<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<?php include "head.html" ?>
</head>
<body>
	<?php include "header.php"?>

	
	<div class="container" style="display: flex !important; flex-direction: row !important;">
		<div class="col-3">
			<ul class="nav flex-column">
				  <li class="nav-item">
				    <a class="nav-link active nav_link_color" href="#">GAMES</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link nav_link_color" href="#">USERS</a>
				  </li>
				  <li class="nav-item ">
				    <a class="nav-link nav_link_color" href="#">PHOTOS</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link disabled nav_link_color" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				  </li>
			</ul>
		</div>
		<div class="col-9">
			<button type="button" class="btn btn-success" style="margin-top: 20px;">+ ADD GAME</button>
			<table class="table table-striped" style="margin-top: 50px;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">GAME NAME</th>
      <th scope="col">TICKET PRICE</th>
      <th scope="col">PRIZE POOL</th>
      <th scope="col">DAY OF THE WEEK</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
	  <tbody>
		    <tr>
		      <th scope="row">1</th>
		      <td>LOTTO</td>
		      <td>2.5$</td>
		      <td>10M $</td>
		      <td>TUESDAY</td>
		      <td><button type="button" class="btn btn-warning">EDIT</button></td>
		      <td><button type="button" class="btn btn-danger">DELETE</button></td>
		    </tr>
		    <tr class="table-success">
		      <th scope="row">2</th>
		      <td>SET FOR LIFE</td>
		      <td>1$</td>
		      <td>500K $</td>
		      <td>WEDNESDAY</td>
		      <td><button type="button" class="btn btn-warning">EDIT</button></td>
		      <td><button type="button" class="btn btn-danger">DELETE</button></td>
		    </tr>
		    <tr>
		      <th scope="row">3</th>
		      <td>GAMBLING PRO</td>
		      <td>5$</td>
		      <td>5M $</td>
		      <td>SUNDAY</td>
		      <td><button type="button" class="btn btn-warning">EDIT</button></td>
		      <td><button type="button" class="btn btn-danger">DELETE</button></td>
		    </tr>
	  	</tbody>
	</table>
		</div>
	</div>	


	<div class="footer">
		<img src="logo.png" style="height: 45px;"></a>
		THANKS TO ALL THE PLAYERS
	</div>
	<div class="content">
		<div class="content_wrapper">
			<p>Gambling Industries Co. 2020</p>
			<p>All rigths reserved</p>
			<img src="sponsors.JPG" style="width: 40%;">
		</div>
	</div>

<script src="script.js"></script>
<script src="jquery.js"></script>
<script src="owl.carousel.min.js"></script>
</body>
</html>