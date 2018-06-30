<!DOCTYPE html>
<html lang="ru">
    
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta charset="utf-8">
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="<?php bloginfo('description '); ?>">
         <?php wp_head(); ?>
    </head>
<body>
<!-- PAGE LOADER -->
<div id="pageloader">
    <div class="loader-item"></div>
    <?php
    $setincs_priloder_text = ot_get_option(setincs_priloder_text);
    if($setincs_priloder_text){
     ?>
    <p class="loader-item2"><?php echo $setincs_priloder_text ?></p>
    <?php 
  }else{
    ?>
     <p class="loader-item2">#УБОРКА</p>
    <?php 
}
    ?>
</div>
<!-- NAVIGATION MENU -->
<div id="navigation-menu">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="nav">
        <div class="wrapp_top_contakt">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="wrapp_phone_top">
                          <?php 
                            $sontakt_list_phone_namber =  ot_get_option('sontakt_list_phone_namber');
                            if($sontakt_list_phone_namber){
                            foreach ($sontakt_list_phone_namber as $value) {
                              $str = $value[add_phone_namber];
                            $result = preg_replace("/[^,.0-9]/", '', $str);
                          ?>
                            <div><a href="tel:+<?php echo $result ?>"><span><i class="fa fa-phone" aria-hidden="true"></i></span><?php echo $value[add_phone_namber]; ?></a></div>

                            <?php } } ?>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="wrapp_mesendger_top">
                            <button>Заказать звонок</button>
                            <?php
                            $login_skype =  ot_get_option('login_skype');
                            $upload_skype =  ot_get_option('upload_skype');
                            $login_viber =  ot_get_option('login_viber');
                            $upload_viber =  ot_get_option('upload_viber');
                            if($login_skype && $upload_skype || $login_viber && $upload_viber){
                            if($login_skype && $upload_skype){
                             ?>
                            <div><a href="skype:<?php echo  $login_skype ?>?chat"><img src="<?php echo $upload_skype ?>" alt=""></a></div>
                            <?php } ?>
                            <?php
                            if($login_viber && $upload_viber){
                              $str_phone_viber = $login_viber;
                            $result_phone_viber = preg_replace("/[^,.0-9]/", '', $str_phone_viber);
                             ?>
                            <div class="desktop"><a href="viber://chat?number=+<?php echo $result_phone_viber ?>"><img src="<?php echo $upload_viber ?>" alt=""></a></div>
                            <div class="mobail"><a href="viber://add?number=<?php echo $result_phone_viber ?>"><img src="<?php echo $upload_viber ?>" alt=""></a></div>
                            <?php } } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
                    <span class="sr-only">Меню</span> 
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> 
                </button>
                <?php 
                  $text_logo = ot_get_option(text_logo);
                  if($text_logo){
                 ?>
                <a class="navbar-brand" href="#"><?php echo $text_logo ?></a>
                <?php }else{ ?>
                <a class="navbar-brand" href="#">МАРАФЕТ</a>
                <?php } ?>
                <?php
                   $text_logo_bottom = ot_get_option(text_logo_bottom);
                   if($text_logo_bottom){
                 ?>
                <p><?php echo $text_logo_bottom ?></p> 
                <?php } ?>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">        
                 <?php
                                        wp_nav_menu(array(
                  'menu'            => 'primary', 
                  'container'       => 'ul', 
                  'container_class' => '', 
                  'container_id'    => '',
                  'menu_class'      => 'nav navbar-nav navbar-right', 
                  'menu_id'         => '3',
                  'echo'            => true,
                  'fallback_cb'     => 'wp_page_menu',
                  'before'          => '',
                  'after'           => '',
                  'link_before'     => '',
                  'link_after'      => '',
                  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  'depth'           => 2,
                  'walker'          => '',

                                          )); 
                                       ?>
            </div>
            
        <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</div><!-- /.NAVIGATION MENU -->

