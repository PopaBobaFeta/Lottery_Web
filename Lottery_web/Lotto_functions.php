<?php
    function get_rnd_main(){
        $values = array();
        for ($i = 0; $i < 10; $i++ ){
            $values[$i] = rand(1,99);
        }
        return $values;
    }

    function lotto_card_rand(){
        $numbers = array();
        for ($i = 0; $i < 27; $i++){
            $numbers[$i] = rand(1,99);
        }
        return $numbers;
    }
?>
