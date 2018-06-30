    <?php 
    $our_advantages = get_post_meta( $post->ID, 'Our_advantages', true);
    $name_block_advantages = get_post_meta( $post->ID, 'name_block_advantages', true);
    if($our_advantages && $name_block_advantages){     ?>
    <section class="no-padding" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">
                    <?php if($name_block_advantages){ ?>
                    <?php echo $name_block_advantages; ?>
                    <?php }else{ ?>
                    Наши приемущества</h2>
                    <?php } ?>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">

                <?php 
                
                     
                     if($our_advantages){
                        foreach ($our_advantages as  $value) {
                    
                ?>

                 <div class="col-lg-3 col-sm-3">                    
                    <div data-toggle="tooltip" data-placement="bottom" class="master portfolio-box" >
                         <div class="project-category text-faded">
                                    <?php echo $value[ord_title]; ?>
                                </div>
                        <img src="<?php echo $value[Our_upload_fon]; ?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                
                                <div class="project-name">
                                    <?php echo $value[ord_description]; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php } } ?>

            </div>
        </div>
    </section>
<?php } ?>