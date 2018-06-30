<?php
$text_title_blok1 = get_post_meta( $post->ID, 'text_title_blok1', true);
$text_blok1 = get_post_meta( $post->ID, 'text_blok1', true);
 ?>
 <?php if($text_title_blok1 && $text_blok1){ ?>
<section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center text-center">
                    <h2 class="section-heading"><?php
                    if($text_title_blok1){
                     echo $text_title_blok1;
                        }else{
                      ?> 
                    Скидка
                    <?php } ?>
                  </h2>
                    <hr class="light">
                    <p class="text-faded" style="font-size:18px;">
                        <?php
                    if($text_blok1){
                     echo $text_blok1;
                        }else{
                      ?> 
                    При оформлении заказа на ремонт через сайт, Вы  получаете <span style="font-size:25px;">скидку 10%</span>!
                   <?php } ?>
                    </p>
                    <a href="" class="btn btn-default btn-xl sr-button my_button_zakaz" data-toggle="modal" data-target="#myModal">Заказать!</a>
                </div>
            </div>
        </div>
    </section>

    <?php } ?>