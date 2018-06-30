<?php
/**
 * Template name: Главная
 */
get_header();
?>

<!-- TEXT SLIDER -->
<!-- text-slider -->
<?php
    $slider_list_top = get_post_meta( $post->ID, 'slider_list_top', true);
    if($slider_list_top){

             ?>
<div class=" parallaxbg">
    <div class="slider-container">
        <div class="home-text-slider slider-text owl-carousel owl-theme animated" data-animation="fadeInUp" data-animation-delay="1500">
            <!-- SLIDE ITEM-1 -->
            <?php 
                foreach ($slider_list_top as $value) {

            ?>
            <div class="item" style="background-image: url(<?php echo $value[slider_list_top_upload] ?>);">
                <div class="pattern-overlay"></div>
                <div class="wrap_slider_top">
                <?php echo $value[slider_list_top_text] ?>
                </div>
            </div>
            <?php } ?>
            <!-- SLIDE ITEM-2 -->
        </div>
        <div class="scroll-down">
            <a href="#we-are" class="scroll"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div><!-- /.TEXT SLIDER -->
<?php }  ?>
<!-- PORTFOLIO SECTION-->
<section id="portfolio">
    <div class="container">
        <div class="row">
            <!--SECTION TITLE-->
            <div class="col-md-12 title">
                <?php 
                $galeri_photo_name_block = get_post_meta( $post->ID, 'galeri_photo_name_block', true);
                $galeri_photo_block_desk = get_post_meta( $post->ID, 'galeri_photo_block_desk', true);
                if($galeri_photo_name_block){
                ?>
                <h1 class="animated" data-animation="fadeInDown" data-animation-delay="300"><?php echo $galeri_photo_name_block ?></h1>
                <?php } ?>
                <?php 
                if($galeri_photo_block_desk){
                ?>
                <p class="animated" data-animation="fadeInRight" data-animation-delay="500"> <?php echo $galeri_photo_block_desk ?> </p>
                <?php } ?>
            </div><!-- /.SECTION TITLE-->
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Portfolio Filter Begins -->
                <ul class="animated project-filters animated" id="filters" data-animation="fadeInUp" data-animation-delay="300">
                    <li><a href="#" data-filter=".all" class="filter active"> Все</a></li>
                    <?php 
                    $galeri_categori_photo_list_upload = get_post_meta( $post->ID, 'galeri_categori_photo_list_upload', true);
                    foreach ($galeri_categori_photo_list_upload as $key => $value){

                    ?>
                    <li><a href="#" data-filter=".web<?php echo $key ?>" class="filter"><?php echo $value[galeri_categori_photo_block_upload] ?></a></li>
                    <?php } ?>
                </ul>
                        
                <!-- Portfolio Container Begins -->
                <div class="project-grid">
                    <div class="grid-sizer"></div>
                    <?php

                    
                    $galeri_photo_list_upload = get_post_meta( $post->ID, 'galeri_photo_list_upload', true);
                    if($galeri_photo_list_upload){
                        foreach ($galeri_photo_list_upload as $key => $value) {

                     ?>
                    <!-- portfolio item 1 -->
                    <div class="item mini-item all <?php echo $value[addClass_galeri_categori] ?>">                    
                        <!-- Image -->                                                          
                        <img src="<?php echo $value[galeri_categori_images] ?>" alt="image" class="img-responsive" height="580" width="580">
                        <!-- Item Caption -->
                        <h3><?php echo $value[galeri_categori_name_client] ?></h3>
                        <!-- <div class="item-caption">
                            <ul>
                                <li><a data-rel="prettyPhoto[gallery01]" href="images/portfolio/large/1.jpg" title="Portfolio">
                            </ul>
                        </div> -->              
                    </div> 
                    <?php } } ?>                 
                   
             
                </div><!-- end portfolioContainer -->
            </div>
        </div>
    </div>
</section>
<!-- WORKING SECTION-->
<!-- WORKING SECTION-->
<?php 
$name_block_clining = get_post_meta( $post->ID, 'name_block_clining', true);
$upload_block_clining = get_post_meta( $post->ID, 'upload_block_clining', true);

?>
<?php 
$add_block_prioritet = get_post_meta( $post->ID, 'add_block_prioritet', true);
if($add_block_prioritet){

?>
<section id="working" class="parallaxbg" style="background: url(<?php echo $upload_block_clining ?>) #202020 repeat fixed; background-size: cover;">
    <div class="container">
        <div class="row">
            <!--SECTION TITLE-->
            <div class="col-md-12 title white">
                <?php 
                    if($name_block_clining){

                ?>
                <h1 class="animated" data-animation="fadeInDown" data-animation-delay="300"><?php echo $name_block_clining ?></h1>
                <?php }else{ ?>
                <h1 class="animated" data-animation="fadeInDown" data-animation-delay="300">Как мы убираем</h1>
                <?php } ?>
                <!-- <p class="animated" data-animation="fadeInRight" data-animation-delay="500">Повседневная практика показывает, что реализация намеченных плановых заданий играет важную роль в формировании модели развития. С другой стороны консультация с широким активом требуют от нас анализа систем массового участия.</p> -->
            </div><!-- /.SECTION TITLE-->
        </div>
        <div class="row">
            <?php 
            foreach ($add_block_prioritet as $key => $value) {

            ?>
            <div class="col-sm-3 animated" data-animation="bounceInUp" data-animation-delay="300">
                <!--WORKING CIRCLE & TOOLTIP-->
                <div class="working-circle" role="tooltip" data-toggle="tooltip" data-placement="top" title="<?php echo $value[deck_servises_list_add_block_prioritet] ?>">
                    <?php echo $value[icon_font_add_block_prioritet] ?>
                    <!--TITLE-->
                    <p><?php echo $value[name_servises_list_add_block_prioritet] ?></p>
                </div>
            </div> 
            <?php } ?>
        </div>
    </div>
</section><!-- /.WORKING SECTION-->
<?php } ?>
<!--WE ARE SECTION-->
<?php 
$name_block_priem = get_post_meta( $post->ID, 'name_block_priem', true);
$add_block_priem = get_post_meta( $post->ID, 'add_block_priem', true);
if($add_block_priem){

?>
<section id="we-are">
    <div class="container">
        <div class="row">
            <!--SECTION TITLE-->
            <div class="col-md-12 title">
                <?php 
                    if($name_block_priem){

                ?>
                <h1 class="animated" data-animation="fadeInDown" data-animation-delay="300"><?php echo $name_block_priem ?></h1>
                <?php }else{ ?>
                <h1 class="animated" data-animation="fadeInDown" data-animation-delay="300">Почему уборку доверяют именно нам?</h1>
                <?php } ?>
            </div><!-- /.SECTION TITLE-->
        </div>
        <div class="row">
            <?php 
            foreach ($add_block_priem as $key => $value) {

            ?>
            <div class="col-md-3 we-are-block animated"  data-animation="fadeInUp" data-animation-delay="300">
                <!--WE ARE TITLE-->
                <div class="icon-title">
                    <?php 
                    if($value[title_block_priem1]){
                    ?>
                    <h4><?php echo $value[title_block_priem1] ?></h4>
                    <?php } ?>
                    <?php if($value[title_block_priem2]){ ?>
                    <h3><?php echo $value[title_block_priem2] ?></h3>
                    <?php 
                    }
                    ?>
                </div>
                <!--ICON-->
                <div class="pull-left">
                    <!-- <i class="fa fa-pencil-square-o"></i> -->
                    <!-- <i class="fa fa-clock-o" aria-hidden="true"></i>   -->
                    <?php echo $value[icon_font_add_block_priem] ?>              
                </div>
                <!--DESCRIPTION-->

                <p><?php echo $value[desc_block_priem] ?></p>
            </div>
            <?php } ?>
        </div>
    </div>
</section><!-- /.WE ARE SECTION-->
<?php } ?>

<!-- FEATURES SECTION-->
<section id="features" class="color">
    <div class="container">
        <div class="row">
            <!--SECTION TITLE-->
            <?php 
                $name_block_work_foot = get_post_meta( $post->ID, 'name_block_work_foot', true);
                $desc_block_work_foot = get_post_meta( $post->ID, 'desc_block_work_foot', true);
            ?>
            <div class="col-md-12 title">
                <!-- <h2 class="animated" data-animation="fadeInDown" data-animation-delay="300">Шаблон сайта</h2> -->
                <?php 
                    if($name_block_work_foot){
                ?>
                <h1 class="animated" data-animation="fadeInDown" data-animation-delay="300"><?php echo $name_block_work_foot ?></h1>
                <?php } ?>
                <?php 
                    if($desc_block_work_foot){
                ?>
                <p class="animated" data-animation="fadeInRight" data-animation-delay="500"><?php echo $desc_block_work_foot ?></p>
                <?php } ?>
            </div><!-- /.SECTION TITLE-->
        </div>
        <div class="row">
            <!--FEATURES LEFT-SIDE-->
             <?php 
                  $name_level_1_work = get_post_meta( $post->ID, 'name_level_1_work', true);
                  $desc_level_1_work = get_post_meta( $post->ID, 'desc_level_1_work', true); 
                  $name_level_2_work = get_post_meta( $post->ID, 'name_level_2_work', true);
                  $desc_level_2_work = get_post_meta( $post->ID, 'desc_level_2_work', true);  
                  if($name_level_1_work && $desc_level_1_work || $name_level_2_work && $desc_level_2_work){
                ?>
            <div class="features-left">
                <?php if($name_level_1_work && $desc_level_1_work){ ?>
                <div class="feature animated" data-animation="fadeInLeft" data-animation-delay="500">
                    <!--FEATURE-ICON-->
                    <div class="feature-icon">
                        <i class="fa fa">1</i>
                        <!-- <span>1</span> -->
                    </div>
                    <!--FEATURE-DESCRIPTION-->
                    
                    <div class="features-title">
                        <h3><?php echo $name_level_1_work ?></h3>
                        <p><?php echo $desc_level_1_work ?></p>
                    </div>
                    
                </div>
                <?php } ?>
                <?php if($name_level_2_work && $desc_level_2_work){ ?>
                <div class="feature animated" data-animation="fadeInLeft" data-animation-delay="700">
                    <!--FEATURE-ICON-->
                    <div class="feature-icon">
                        <i class="fa fa">2</i>
                    </div>
                    <!--FEATURE-DESCRIPTION-->
                    
                    <div class="features-title">
                        <h3><?php echo $name_level_2_work ?></h3>
                        <p><?php echo $desc_level_2_work ?></p>
                    </div>
                    
                </div>
                <?php } ?>
                    
            </div><!-- /.FEATURES LEFT-SIDE-->
            <?php } ?>
            <!--FEATURES IMAGE-->
            <?php
            $desc_level_upload_work = get_post_meta( $post->ID, 'desc_level_upload_work', true); 
            if($desc_level_upload_work){
            ?>
            <div class="features-image animated mod_none" data-animation="pulse" data-animation-delay="500">
                <img src="<?php echo $desc_level_upload_work ?>" class="img-responsive top_marg" alt="phone" height="678" width="330">
            </div><!-- /.FEATURES IMAGE-->
            <?php } ?>
            <!--FEATURES RIGHT-SIDE-->

                <?php 
                  $name_level_3_work = get_post_meta( $post->ID, 'name_level_3_work', true);
                  $desc_level_3_work = get_post_meta( $post->ID, 'desc_level_3_work', true); 
                  $name_level_4_work = get_post_meta( $post->ID, 'name_level_4_work', true);
                  $desc_level_4_work = get_post_meta( $post->ID, 'desc_level_4_work', true);  
                  if($name_level_3_work && $desc_level_3_work || $name_level_4_work && $desc_level_4_work){
                ?>
            <div class="features-right">
                <?php if($name_level_3_work && $desc_level_3_work){ ?>
                <div class="feature animated" data-animation="fadeInRight" data-animation-delay="500">
                    <!--FEATURE-ICON-->
                    <div class="feature-icon">
                        <i class="fa fa">3</i>
                    </div>
                    <!--FEATURE-DESCRIPTION-->
                    
                    <div class="features-title">
                        <h3><?php echo $name_level_3_work ?></h3>
                        <p><?php echo $desc_level_3_work ?></p>
                    </div>
                   
                </div>
                 <?php } ?>
                  <?php if($name_level_4_work && $desc_level_4_work){ ?>
                <div class="feature animated" data-animation="fadeInRight" data-animation-delay="700">
                    <!--FEATURE-ICON-->
                    <div class="feature-icon">
                        <i class="fa fa">4</i>
                    </div>
                    <!--FEATURE-DESCRIPTION-->
                   
                    <div class="features-title">
                        <h3><?php echo $name_level_4_work ?></h3>
                        <p><?php echo $desc_level_4_work ?></p>
                    </div>
                    
                </div>
                <?php } ?>
            </div><!-- /.FEATURES RIGHT-SIDE-->
            <?php } ?>


        </div>
    </div>
</section><!-- /.FEATURES SECTION-->

<!-- COUNTER SECTION-->
<?php 
$add_statistic_list = get_post_meta( $post->ID, 'add_statistic_list', true); 
$fon_statistic_list = get_post_meta( $post->ID, 'fon_statistic_list', true);
    if($add_statistic_list){
?>
<div  class="parallaxbg">
    <div class="counter-section">
        <div class="my_pattern-overlay" style="background: url(<?php echo $fon_statistic_list ?>) repeat rgba(0, 0, 0, 0.5);"></div>
        <div class="container">
            <div class="row">
                <!--Counter-1-->
                <?php 
                foreach ($add_statistic_list as $key => $value) {

                ?>
                <div class="col-sm-3 animated for_img">
                    <!-- <i class="fa fa-tint"></i> -->
                    <img src="<?php echo $value[upload_statistic_list] ?>">
                    <!--Data Count -->
                    <div class="count-number fun-number" >
                        <div class="my_counter"><?php echo $value[namber_statistic_list] ?></div>
                    </div>
                    <!--Counter Title -->
                    <p><?php echo $value[name_statistic_list] ?></p>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>  
</div><!-- /.COUNTER SECTION--> 
<?php } ?>

    
<!-- SKILLS SECTION-->
<section id="skills" class="color">
    <div class="container">
        <div class="row">
            <!--SECTION TITLE-->
            <div class="col-md-12 title">
                <?php 
                    $name_setings_block_form = get_post_meta( $post->ID, 'name_setings_block_form', true); 
                    $desc_setings_block_form = get_post_meta( $post->ID, 'desc_setings_block_form', true); 
                ?>
                <?php if($name_setings_block_form){ ?>
                <h1 class="animated" data-animation="fadeInDown" data-animation-delay="300"><?php echo $name_setings_block_form ?></h1>
                <?php } ?>
                <?php if($desc_setings_block_form){ ?>
                <p class="animated more_fontsize" data-animation="fadeInRight" data-animation-delay="500"><?php echo $desc_setings_block_form ?></p>
                <?php } ?>
            </div><!-- /.SECTION TITLE-->
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form_wrapp">
                    <div class="col-md-4">
                        <input class="back_form" placeholder="Введите имя..." type="text" name="">
                    </div>
                    <div class="col-md-4">
                        <input class="back_form" placeholder="Введите номер..." type="text" name="">
                    </div>
                    <div class="col-md-4">
                        <button class="back_form btn_style">Заказать звонок</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /.SKILL SECTION-->   
        
<!-- RESPONSIVE SECTION-->
<?php 
$name_setings_about = get_post_meta( $post->ID, 'name_setings_about', true);
$desc_setings_about = get_post_meta( $post->ID, 'desc_setings_about', true);
$about_uplod_fon = get_post_meta( $post->ID, 'about_uplod_fon', true);
if($name_setings_about && $desc_setings_about){
?>
<section id="responsive" class="parallaxbg">
    <div class="responsive-section">
        <?php if($about_uplod_fon){ ?>
        <div class="pattern-overlay" style="background: url(<?php echo $about_uplod_fon ?>) repeat rgba(0, 0, 0, 0.5);"></div>
        <?php } ?>
        <div class="container">
            <div class="row">
                <!-- RESPONSIVE DESCRIPTION-->
                <div class="col-md-12 animated" data-animation="fadeInLeft" data-animation-delay="500">
                    <h2><?php echo $name_setings_about ?></h2>
                    <?php echo $desc_setings_about ?>
                    <!-- SEND BUTTON-->
                    <button class="btn">Заказать</button>
                </div>
                <!-- RESPONSIVE IMAGE-->
                <!-- <div class="col-md-6 animated" data-animation="fadeInRight" data-animation-delay="500">
                    <img src="images/responsive/responsive-devices.png" class="img-responsive" alt="responsive" width="700" height="350">
                </div> -->
            </div>
        </div>
    </div>
</section><!-- /.RESPONSIVE SECTION-->
<?php } ?>

<!-- SERVICES SECTION-->
<?php 
$name_setings_block_servises = get_post_meta( $post->ID, 'name_setings_block_servises', true);
$desc_setings_block_servises = get_post_meta( $post->ID, 'desc_setings_block_servises', true);

$name_servis1 = get_post_meta( $post->ID, 'name_servis1', true);
$desc_servis1 = get_post_meta( $post->ID, 'desc_servis1', true);
$upload_servis1 = get_post_meta( $post->ID, 'upload_servis1', true);

$name_servis2 = get_post_meta( $post->ID, 'name_servis2', true);
$desc_servis2 = get_post_meta( $post->ID, 'desc_servis2', true);
$upload_servis2 = get_post_meta( $post->ID, 'upload_servis2', true);

$name_servis3 = get_post_meta( $post->ID, 'name_servis3', true);
$desc_servis3 = get_post_meta( $post->ID, 'desc_servis3', true);
$upload_servis3 = get_post_meta( $post->ID, 'upload_servis3', true);

$name_servis4 = get_post_meta( $post->ID, 'name_servis4', true);
$desc_servis4 = get_post_meta( $post->ID, 'desc_servis4', true);
$upload_servis4 = get_post_meta( $post->ID, 'upload_servis4', true);
?>
<?php if($name_servis1 && $desc_servis1 && $upload_servis1 || $name_servis2 && $desc_servis2 && $upload_servis2 || $name_servis3 && $desc_servis3 && $upload_servis3 ||$name_servis4 && $desc_servis4 && $upload_servis4){ ?>
<section id="services">
    <div class="container">
        <div class="row">
            <!--SECTION TITLE-->
            <div class="col-md-12 title">
                <h1 class="animated" data-animation="fadeInDown" data-animation-delay="300"><?php echo $name_setings_block_servises ?></h1>
                <p class="animated" data-animation="fadeInRight" data-animation-delay="500"><?php echo $desc_setings_block_servises ?></p>
            </div><!-- /.SECTION TITLE-->
        </div>
        <!-- SERVICES TOP-->
        <div class="row services-top">
            <!-- SERVICES BLOCK-1-->
            <?php if($name_servis1 && $desc_servis1 && $upload_servis1){ ?>
            <div class="col-sm-6 service-block left">
                <!-- <div class="fa fa-group animated" data-animation="pulse" data-animation-delay="300">
                    <i class="fa fa-shower" aria-hidden="true"></i>
                </div> -->
                <img src="<?php echo $upload_servis1 ?>">

                <h4 class="animated" data-animation="fadeInRight" data-animation-delay="500"><?php echo $name_servis1 ?></h4>
                <!-- <h3 class="animated" data-animation="fadeInLeft" data-animation-delay="700">Создание</h3> -->
                <p class="animated" data-animation="fadeInUp" data-animation-delay="900"><?php echo $desc_servis1 ?></p>
            </div>
            <?php } ?>
            <!-- SERVICES BLOCK-2-->
            <?php if($name_servis2 && $desc_servis2 && $upload_servis2){ ?>
            <div class="col-sm-6 service-block">
                <!-- <div class="fa fa-link animated" data-animation="pulse" data-animation-delay="300">
                    <i class="fa fa-link"></i>
                </div> -->
                <img src="<?php echo $upload_servis2 ?>">
                <h4 class="animated" data-animation="fadeInRight" data-animation-delay="500"><?php echo $name_servis2 ?></h4>
                <!-- <h3 class="animated" data-animation="fadeInLeft" data-animation-delay="700">Системы</h3> -->
                <p class="animated" data-animation="fadeInUp" data-animation-delay="900"><?php echo $desc_servis2 ?></p>
            </div>
            <?php } ?>
        </div><!-- /.SERVICES TOP-->
        <!--MIDDLE LINE-->
        <div class="middle-line">
            <span>v</span>
        </div>
        <!-- SERVICES BOTTOM-->
        <div class="row services-bottom">
            <!-- SERVICES BLOCK-3-->
            <?php if($name_servis3 && $desc_servis3 && $upload_servis3){ ?>
            <div class="col-sm-6 service-block left">
                <!-- <div class="fa fa-road animated" data-animation="pulse" data-animation-delay="300">
                    <i class="fa fa-road"></i>
                </div> -->
                <img src="<?php echo $upload_servis3 ?>">
                <h4 class="animated" data-animation="fadeInRight" data-animation-delay="500"><?php echo $name_servis3 ?></h4>
                <!-- <h3 class="animated" data-animation="fadeInLeft" data-animation-delay="700">Продвижение</h3> -->
                <p class="animated" data-animation="fadeInUp" data-animation-delay="900"><?php echo $desc_servis3 ?></p>
            </div>
            <?php } ?>
            <!-- SERVICES BLOCK-4-->
            <?php if($name_servis4 && $desc_servis4 && $upload_servis4){ ?>
            <div class="col-sm-6 service-block">
                <!-- <div class="fa fa-comment animated" data-animation="pulse" data-animation-delay="300">
                    <i class="fa fa-comment"></i>
                </div> -->
                <img src="<?php echo $upload_servis4 ?>">
                <h4 class="animated" data-animation="fadeInRight" data-animation-delay="500"><?php echo $name_servis4 ?></h4>
                <!-- <h3 class="animated" data-animation="fadeInLeft" data-animation-delay="700">Данные</h3> -->
                <p class="animated" data-animation="fadeInUp" data-animation-delay="900"><?php echo $desc_servis4 ?></p>
            </div>
            <?php } ?>
        </div><!-- /.SERVICES BOTTOM-->
    </div>
</section><!-- /.SERVICES SECTION-->
<?php } ?>



<!-- PRICINGS SECTION-->
<?php 
$name_setings_prais = get_post_meta( $post->ID, 'name_setings_prais', true);
$desc_setings_prais = get_post_meta( $post->ID, 'desc_setings_prais', true);

$name_servis_pris1 = get_post_meta( $post->ID, 'name_servis_pris1', true);
$name_servis_pris2 = get_post_meta( $post->ID, 'name_servis_pris2', true);
$name_servis_pris3 = get_post_meta( $post->ID, 'name_servis_pris3', true);

$name_servis_pris1_block1 = get_post_meta( $post->ID, 'name_servis_pris1_block1', true);
$name_servis_pris1_block2 = get_post_meta( $post->ID, 'name_servis_pris1_block2', true);
$name_servis_pris1_block3 = get_post_meta( $post->ID, 'name_servis_pris1_block3', true);

$name_servis_pris1_list = get_post_meta( $post->ID, 'name_servis_pris1_list', true);
$name_servis_pris2_list = get_post_meta( $post->ID, 'name_servis_pris2_list', true);
$name_servis_pris3_list = get_post_meta( $post->ID, 'name_servis_pris3_list', true);
if($name_servis_pris1 || $name_servis_pris2 || $name_servis_pris3){
?>
<section id="pricings">
    <div class="container">
        <div class="row">
            <!--SECTION TITLE-->
            <?php if($name_setings_prais){ ?>
            <div class="col-md-12 title">
                <h1 class="animated" data-animation="fadeInDown" data-animation-delay="300"><?php echo $name_setings_prais ?></h1>
                <?php if($desc_setings_prais){ ?>
                <p class="animated" data-animation="fadeInRight" data-animation-delay="500"><?php echo $desc_setings_prais ?></p>
                <?php } ?>
            </div><!-- /.SECTION TITLE-->
            <?php } ?>
        </div>
    </div>
    <div class="container pricing-container">   
        <div class="row">
            <div class="col-md-offset-1 col-md-3 animated" data-animation="flipInY" data-animation-delay="300">
                <!--BASIC TABLE-->
                <div class="pricing-table">
                    <!--CATEGORY-->
                    <div class="category">
                        <h3><?php echo $name_servis_pris1 ?></h3>
                    </div>
                    <!--FEATURES-->
                    <?php if($name_servis_pris1_list){  ?>
                    <ul>
                        <?php if($name_servis_pris1_block1){ ?>
                        <li class="price">
                            <?php echo $name_servis_pris1_block1 ?>
                        </li>
                        <?php } ?>
                        <?php foreach ($name_servis_pris1_list as $key => $value) { ?>
                        <li><?php echo $value[add_prise_list1] ?></li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                    <!--BUTTON-->
                    <a class="btn">Заказать</a>
                </div>
            </div>
            <!--PREMIUM TABLE-->
            <div class="col-md-4 animated" data-animation="flipInY" data-animation-delay="500">
                <div class="pricing-table premium">
                    <!--CATEGORY-->
                    <div class="category">
                        <h3><?php echo $name_servis_pris2 ?></h3>
                    </div>
                    <!--FEATURES-->
                    <?php if($name_servis_pris2_list){  ?>
                    <ul>
                        <?php if($name_servis_pris1_block2){ ?>
                        <li class="price">
                            <?php echo $name_servis_pris1_block2 ?>
                        </li>
                        <?php } ?>
                        <?php foreach ($name_servis_pris2_list as $key => $value) { ?>
                        <li><?php echo $value[add_prise_list2] ?></li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                    <!--BUTTON-->
                    <a class="btn">Заказать</a>
                </div>
            </div>
            <!--PLUS TABLE-->
            <div class="col-md-3 animated" data-animation="flipInY" data-animation-delay="300">
                <div class="pricing-table">
                    <!--CATEGORY-->
                    <div class="category">
                        <h3><?php echo $name_servis_pris3 ?></h3>
                    </div>
                    <!---->
                    <?php if($name_servis_pris3_list){  ?>
                    <ul>
                         <?php if($name_servis_pris1_block3){ ?>
                        <li class="price">
                            <?php echo $name_servis_pris1_block3 ?>
                        </li>
                        <?php } ?>
                        <?php foreach ($name_servis_pris3_list as $key => $value) { ?>
                        <li><?php echo $value[add_prise_list3] ?></li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                    <!--BUTTON-->
                    <a class="btn">Заказать</a>
                </div>
            </div>
        </div>
    </div>
</section><!-- /.PRICINGS SECTION-->
<?php } ?>

<!-- TESTIMONIALS SECTION-->
<?php 
$setings_block_reviews_list = get_post_meta( $post->ID, 'setings_block_reviews_list', true);
$fon_block_reviews = get_post_meta( $post->ID, 'fon_block_reviews', true);
if($setings_block_reviews_list){
?>
<section id="testimonials"  class="parallaxbg">
    <?php if($fon_block_reviews){ ?>
    <div class="my_pattern-overlay" style="background: url(<?php echo $fon_block_reviews ?>) repeat rgba(0, 0, 0, 0.5);"></div>
    <?php } ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 animated" data-animation="fadeInUp" data-animation-delay="300">
                <div id="testimonials-slider" class="owl-carousel owl-theme">
                    <!--SLIDE ITEM 1-->
                    <?php 
                        foreach ($setings_block_reviews_list as $key => $value) {
                    ?>
                    <div class="item">
                        <!--COMMENTS-->
                        <p><?php echo $value[text_reviews] ?></p>
                        <!--PHOTO-->
                        <img src="<?php echo $value[photo_klient_reviews] ?>" class="img-circle" alt="client-photo" width="135" height="152">
                        <!--NAME-->
                        <h3><?php echo $value[name_klient_reviews] ?></h3>
                        <!--COMPANY-->
                        <p>Клиент</p>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>  <!-- /.TESTIMONIALS SECTION-->  
<?php } ?>
<!-- CLIENTS SECTION-->
<?php
$add_logo_partners_list = get_post_meta( $post->ID, 'add_logo_partners_list', true);
if($add_logo_partners_list){
?>
<section id="clients">
    <div class="container">
        <div class="row">
            <!--SECTION TITLE-->
            <?php
            $name_partners_block = get_post_meta( $post->ID, 'name_partners_block', true);
            $desc_partners_block = get_post_meta( $post->ID, 'desc_partners_block', true);
            if($name_partners_block){

             ?>
            <div class="col-md-12 title white">
                <h1 class="animated" data-animation="fadeInDown" data-animation-delay="300"><?php echo $name_partners_block ?></h1>
                <?php if($desc_partners_block){ ?>
                <p class="animated" data-animation="fadeInRight" data-animation-delay="500"><?php echo $desc_partners_block ?></p>
                <?php } ?>
            </div><!-- /.SECTION TITLE-->
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-md-12 animated" data-animation="fadeInUp" data-animation-delay="700">
                <div id="clients-slider" class="owl-carousel owl-theme">
                    <!-- CLIENT-1 -->
                    <?php 
                    foreach ($add_logo_partners_list as $key => $value) {
                    ?>
                    <div class="item">
                        <img src="<?php echo $value[logo_partners] ?>" class="img-responsive" alt="client" height="113" width="156">
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section> 
<?php } ?> 





<!-- старое подключение -->

<?php
get_footer();
?>
