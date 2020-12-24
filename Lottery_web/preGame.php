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
<div class="container">
    <div class="preGame_main">
        <div class="preGame_row">
            GAME RULES AND INFO
        </div>
        <button class="btn_info_custom btn btn-info mt-5" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            <p>GAME INFO</p>
        </button>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
            </div>
        </div>
        <button class="btn_info_custom btn btn-info mt-5" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
            <p>GAME RULES</p>
        </button>
        <div class="collapse" id="collapseExample1">
            <div class="card card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
            </div>
        </div>
        <a class="playLink" href="Lotto.php">PLAY</a>
        <?php
            if(isset($_SESSION['Auth'])){
        ?>
        <div class="game_comments">
            <form action="db.php" method="post">
                <div class="comment_write">
                    <div class="comment_auth">
                        <?php
                        $str = $_SESSION['Auth'];
                        $str = explode(",",$str);
                        $name = $str[0];
                        ?>
                        <?=$name?>
                    </div>
                    <div class="comment_textarea">
                        <input type="hidden" name="author" value="<?=$name?>">
                        <textarea name="comment_text"></textarea>
                    </div>
                    <div class="comment_button">
                        <button class="comment_btn" type="submit" name="submit_comment">
                           WRITE
                        </button>
                    </div>

                </div>
            </form>
            <?php
            $comments = get_comments();
            if ($comments != null)
            { for($i = 0; $i < sizeof($comments); $i++){
            ?>
            <div class="comment">
                <div class="comm_auth">
                    <?=$comments[$i]->get_userName()?>
                </div>
                <div class="comment_text">
                    <?=$comments[$i]->get_text()?>
                </div>
            </div>
            <?php
                }
            }else {
            ?>
                No Comments...
            <?php
                }
            ?>
        </div>
        <?php
            }
        ?>
    </div>
</div>
</body>
