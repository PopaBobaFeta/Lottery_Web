<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<?php include "head.html" ?>
</head>
<body>
	<?php include "header.php"?>

	<div class="carousel_wrapper">

		<div class="modal_header">
			<p>SELECT A GAME</p>
			<hr style="width: 82%; background-color: #038cfc; height: 2px; margin-top: 15px; margin-left: 10px;">
		</div>

		<div class="owl-carousel owl_carousel">
		  <div class="game_card" style="background-color: #fc034e;">
		  	<div class="game_box">
		  		<div class="game_box_header">
		  			<p>THIS WEDNESDAY</p>
		  			<hr style="background-color: white; height: 2px; width: 50%; margin-top: 9px;">
		  		</div>
		  		<div class="game_box_name">
		  			<p>LOTTO</p>
		  		</div>
		  		<div class="game_box_content">
		  			<p style="line-height: 40px;" class="text1">IT'S A</p>
		  			<p style="line-height: 30px;" class="text1">ROLLOVER</p>
		  		</div>
		  		
		  		<div class="carousel_btn">
		  			<button type="button" class="btn btn_color btn-danger" style="background-color: #facc16;">Check</button>
		  		</div>
		  	</div>
		  </div>
		  <div class="game_card" style="background-color: #16f7f0;">
		  	<div class="game_box">
		  		<div class="game_box_header">
		  			<p>THIS TUESDAY</p>
		  			<hr style="background-color: white; height: 2px; width: 50%; margin-top: 9px;">
		  		</div>
		  		<div class="game_box_name">
		  			<p>SET FRO LIFE</p>
		  		</div>
		  		<div class="game_box_content">
		  			<p style="line-height: 40px;" class="text1">WIN $10M</p>
		  			<p style="line-height: 30px;" class="text1">EVERY MONTH</p>
		  		</div>
		  		
		  		<div class="carousel_btn">
		  			<button type="button" class="btn btn_color btn-danger" style="background-color: #facc16;">CHECK</button>
		  		</div>
		  	</div>
		  </div>
		  <div class="game_card" style="background-color: #fc034e;">
		  	<div class="game_box">
		  		<div class="game_box_header">
		  			<p>THIS SATURDAY</p>
		  			<hr style="background-color: white; height: 2px; width: 50%; margin-top: 9px;">
		  		</div>
		  		<div class="game_box_name">
		  			<p>GAMBLING FOREVER</p>
		  		</div>
		  		<div class="game_box_content">
		  			<p style="line-height: 40px;" class="text1">$1 FOR</p>
		  			<p style="line-height: 30px;" class="text1">500K $</p>
		  		</div>
		  		
		  		<div class="carousel_btn">
		  			<button type="button" class="btn btn_color btn-danger" style="background-color: #facc16;">CHECK</button>
		  		</div>
		  	</div>
		  </div>
		  <div class="game_card" style="background-color: #1df078;">
		  	<div class="game_box">
		  		<div class="game_box_header">
		  			<p>THIS SUNDAY</p>
		  			<hr style="background-color: white; height: 2px; width: 50%; margin-top: 9px;">
		  		</div>
		  		<div class="game_box_name">
		  			<p>SCRATCHING CARDS</p>
		  		</div>
		  		<div class="game_box_content">
		  			<p style="line-height: 40px;" class="text1">SCRATCH FOR</p>
		  			<p style="line-height: 30px;" class="text1">1M $</p>
		  		</div>
		  		
		  		<div class="carousel_btn">
		  			<button type="button" class="btn btn_color btn-danger" style="background-color: #facc16;">CHECK</button>
		  		</div>
		  	</div>
		  </div>
		</div>
		<script type="text/javascript">
		  			var text = document.getElementsByClassName('text1');
		  			for(var j = 0; j < text.length; j++){
		  				var shadow = '';
			  			for(var i = 0; i < 200;i++){
			  				shadow +=(shadow? ',':'')+i*1+'px ' + i*1+'px 0 #820110'; 
			  			}
			  			text[j].style.textShadow = shadow;
			  		}
		 </script>
	</div>
	<div class="container">
	<div class="res_game">
		<p class="common">RESULTS FOR  </p><p class="uncommon">LOTTO  </p><p class="common"> FOR USER  </p><p class="uncommon">JACOB TUNTY</p> 
	</div>
	<table class="table table-striped" style="margin-top: 50px;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Full Name</th>
      <th scope="col">Prize</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
	  <tbody>
		    <tr>
		      <th scope="row">1</th>
		      <td>Mark Uolberg</td>
		      <td>1.2M $</td>
		      <td>20.10.20</td>
		    </tr>
		    <tr class="table-success">
		      <th scope="row">2</th>
		      <td>Jacob Tunty</td>
		      <td>500K $</td>
		      <td>16.10.20</td>
		    </tr>
		    <tr>
		      <th scope="row">3</th>
		      <td>Larry Lawton</td>
		      <td>200K $</td>
		      <td>17.10.20</td>
		    </tr>
	  	</tbody>
	</table>
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