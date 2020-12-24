<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<?php include "head.html" ?>
</head>
<body>
	<?php include "header.php"?>
	<div class="games_container">
		<div class="games_row">
			<div class="games_row_box">
					<div class="games_row_box_header">
						<p>LOTTO</p><hr>
					</div>
					<div class="actual_box">
						<div class="games_row_box_content">
							<div class="games_row_box_title">
								<div class="games_row_box_title_day">
									<p>EVERY WEDNESDAY</p>
								</div>
								<div class="games_row_box_title_game">
									<p class="game_name">IT'S A</p>
				  					<p class="game_name">ROLLOVER</p>
								</div>
							</div>
						</div>
						<div class="games_row_box_info">
							<div class="game_info">
								<p class="question_p">Prize Pool:</p>
								<p class="ask_p">10M $</p>
								<p class="question_p">Info:</p>
								<p class="ask_p">Just simple and common lotto. Easy to play, fun to win.</p>
								<p class="question_p">Risk:</p>
								<p class="ask_p">Medium</p>
									<div class="games_btn">
							  			<button type="button" class="btn btn_color btn-danger" style="background-color: #facc16;">PLAY FOR 2$
							  			</button>
							  		</div>
							</div>
						</div>
					</div>
			</div>
			<div class="games_row_box">
					<div class="games_row_box_header">
						<p>SET FOR LIFE</p><hr>
					</div>
					<div class="actual_box">
						<div class="games_row_box_content">
							<div class="games_row_box_title">
								<div class="games_row_box_title_day">
									<p>EVERY TUESDAY</p>
								</div>
								<div class="games_row_box_title_game">
									<p class="game_name">WIN</p>
									<p class="game_name">10M $</p>
				  					<p class="game_name">EVERY</p>
				  					<p class="game_name">MONTH</p>
								</div>
							</div>
						</div>
						<div class="games_row_box_info">
							<div class="game_info">
								<p class="question_p">Prize Pool:</p>
								<p class="ask_p">500k $</p>
								<p class="question_p">Info:</p>
								<p class="ask_p">Similiar to Bingo, you are supposed to pick one number and bet on it</p>
								<p class="question_p">Risk:</p>
								<p class="ask_p">High</p>
									<div class="games_btn">
							  			<button type="button" class="btn btn_color btn-danger" style="background-color: #facc16;">PLAY FOR 2.5$
							  			</button>
							  		</div>
							</div>
						</div>
					</div>
			</div>
		</div>
		<script type="text/javascript">
		  			var text = document.getElementsByClassName('game_name');
		  			for(var j = 0; j < text.length; j++){
		  				var shadow = '';
			  			for(var i = 0; i < 200;i++){
			  				shadow +=(shadow? ',':'')+i*(-1)+'px ' + i*1+'px 0 #820110'; 
			  			}
			  			text[j].style.textShadow = shadow;
			  		}
		 </script>
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