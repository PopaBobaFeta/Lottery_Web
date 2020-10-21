<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<?php include "head.html" ?>
</head>
<body>
	<?php include "header.php"?>
	<div class="game_feature_row">
		<div class="game_of_the_day_wrapper">
			<div class="game_of_the_day_box">
				<div class="game_day_header">
					<p>Tonight</p>
					<hr style="height: 2px; width: 85%; background-color: #0225b3; margin-top: 2px; margin-left: 3px;">
				</div>
				<div class="game_name">
					<p class="game_name_p">EUROMILLIONAIRE</p>
				</div>
				<div class="game_content">
					<p style="font-size: 150px;line-height: 100px;">$10M</p>
					<p style="font-size: 82px;">JACKPOT</p>
					<p style="font-size: 28px;line-height: 0px;">DREAM COME TRUE MONEY</p>
				</div>
				<div class="btn_div">
					<button type="button" class="btn btn_color btn-danger">PLAY FOR 2$</button>
				</div>
			</div>
		</div>
		<div class="check_results_box">
			<p style="font-size: 40px;">CHECK YOUR</p>
			<p style="font-size: 40px;">RESULTS</p>
			<p style="font-size: 20px;">DID YOU WIN BIG?</p>
			<div class="check_res_btn">
			<button type="button" class="btn">CHECK RESULTS</button>
			</div>
		</div>	
	</div>
	<div class="carousel_wrapper">

		<div class="modal_header">
			<p>MORE GAMES</p>
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
		  			<button type="button" class="btn btn_color btn-danger" style="background-color: #facc16;">PLAY FOR 2$</button>
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
		  			<button type="button" class="btn btn_color btn-danger" style="background-color: #facc16;">PLAY FOR 2.5$</button>
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
		  			<button type="button" class="btn btn_color btn-danger" style="background-color: #facc16;">PLAY FOR 1$</button>
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
		  			<button type="button" class="btn btn_color btn-danger" style="background-color: #facc16;">PLAY FOR 2.5$</button>
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
	<div class="win_prize">
		<div class="win_prize_wrapper">
			<div class="win_prize_header" style="margin-top: 40px;">
				<p>PLAYERS LIKE YOU HAVE RAISED</p>
			</div>
			<div class="win_prize_header">
				<p id="prize_count" class="larger">12,747,626$</p>
			</div>
			<script type="text/javascript">
					var elem = document.getElementById('prize_count')
					var pos = 0;
					var id = setInterval(frame,500);
					function frame(){
						if(pos == 0){
							// elem.style.fontSize = '60px';
							elem.classList.add('larger');
							pos++;
						}else{
							elem.classList.remove('larger');
							// elem.style.fontSize = '50px';
							pos--;
						}
					}
			</script>
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