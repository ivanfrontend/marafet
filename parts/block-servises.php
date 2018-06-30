     <?php 
        $bg_mass=[];
        $background_block = get_post_meta( $post->ID, 'background_block', true);
        if(!empty( $background_block)){
        foreach ($background_block   as $key => $value) {
            $bg_mass[] = $value;
        }
        ?>
        <?php
        
            if( empty( $bg_mass[5] ) ){
        ?>              
    <section style="background:<?php echo $bg_mass[0]; ?>" id="services">
        <?php }else{ ?>
        <section style="background-repeat: <?php echo $bg_mass[1] ?>;background-position: <?php echo $bg_mass[3] ?> ; background-size: <?php echo $bg_mass[4] ?>; background:url( <?php echo $bg_mass[5]; ?>);" id="services">
            <?php } }else{ ?>
            <section  id="services">
            <?php } ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <?php $text_title_blok1_1 = get_post_meta( $post->ID, 'text_title_blok1_1', true); ?>
                    <?php if($text_title_blok1_1 ){ ?>
                    <h2 class="section-heading"><?php echo $text_title_blok1_1 ?></h2>
                    <?php } ?>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">

               

            <div class="row my_heit">

                    <?php 
                    $services_list = get_post_meta( $post->ID, 'services_list', true);
                        if($services_list){
                            foreach ($services_list  as  $value) {

                     ?>
                <div class="col-lg-4 col-md-6 text-center q1">
                    <div class="service-box">
                        <?php echo $value[icon_font]; ?>
                        <h3>Ремонт компьютеров</h3>
                        <p class="text-muted">Бесплатная диагностика, поиск неисправностей в аппаратных и программных компонентов компьютеров или ноутбуков</p>
                    </div>
                    <p class=" prise_servis"> от 25 руб</p>
                    <a href="" class="btn btn-xl sr-button" data-toggle="modal" data-target="#myModal">Заказать!</a>
                    <div class="linebottom"></div>
                </div>
                    <?php } } ?>
<script >
 // Добовление класа для блока услуги
    jQuery('#services i').addClass('text-primary sr-icons');
    // конец  
</script>






        </div>
    </section>