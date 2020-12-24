<!DOCTYPE html>
<html>
<head>
    <title>Index</title>
    <?php include "head.html" ?>
</head>
<body>
<?php include "header.php"?>
<?php include_once "Lotto_functions.php"?>
<?php $variables = get_rnd_main(); ?>
    <div class="game_header">
        <hr style="height: 2px; width: 400px; background-color: white;">
        LOTTO
        <hr style="height: 2px; width: 400px; background-color: white;">
    </div>
<div id="win_box">
    <div id="win_card">
        You won congratulations
    </div>
</div>
    <div class="container">
        <div class="lucky_numbers">
            YOUR LUCKY NUMBERS ARE :
        </div>
        <div class="lucky_numbers_results">
        <?php
            for ($i = 0; $i < 10; $i++){ ?>
            <div class="lucky_number">
                <?=$variables[$i]?>
            </div>
            <?php }
        ?>
        </div>
        <div class="lotto_card">
            <div class="lotto_card_header">
                LOTTO CARD No 17583
            </div>
            <div class="lotto_card_main">
                <?php
                for($j = 0; $j < 3; $j++){
                    $numbers = lotto_card_rand();
                    ?>
                    <div class="lotto_card_row">
                    <?php
                        for($z = 0; $z < 9; $z++){
                            ?>
                            <div class="lotto_card_elem">
                                <?=$numbers[$z]?>
                            </div>
                        <?php
                        }
                    ?>
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>
        <script>
            let lucky_numbers = document.getElementsByClassName('lucky_number');
            let nums = document.getElementsByClassName('lotto_card_elem');
            let win_box = document.getElementById('win_box');
            let win_card = document.getElementById('win_card');
            let prize_count = 0;
                for(let i = 0; i < 10; i++){
                    setTimeout(function(){
                        lucky_numbers[i].style.visibility = 'visible';
                        lucky_numbers[i].style.transition = '0.5s';
                        lucky_numbers[i].style.fontSize = '50px';
                    },i * 1000);
                    for (let j = 0; j < nums.length; j++) {
                        if (parseInt(nums[j].textContent ) == parseInt(lucky_numbers[i].textContent)){
                            prize_count += 1;
                            setTimeout(function (){
                                nums[j].style.backgroundColor = '#fc034e';
                                nums[j].style.color = 'white';
                            },i * 1000);
                        }
                        console.log(prize_count);
                        if (prize_count > 1){
                            win_box.style.display = 'block ';
                        }
                    }
                }

        </script>
    </div>
</body>
