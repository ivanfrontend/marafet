      <!-- ОТЗЫВЫ -->
        <?php $photo_fon_block = get_post_meta( $post->ID, 'photo_fon_block', true); ?>
      <section id="testimonialTabs" style="background:url('<?php echo $photo_fon_block ?>') repeat scroll 0 0" class="row contentRowPad">
        <div class="container">
            <?php 
                $name_block_mnenie = get_post_meta( $post->ID, 'name_block_mnenie', true);
                if($name_block_mnenie){
             ?>
            <div class="row sectionTitle">
                <h3 class="reviews"><?php echo $name_block_mnenie ?></h3>
            </div>
            <?php }else{ ?>
             <div class="row sectionTitle">
                <h3 class="reviews">Наши отзывы</h3>
            </div>
            <?php } ?>
            <div class="row">


                <ul class="nav nav-tabs" role="tablist" id="testiTab">
                <?php 
                $setings_list_mnenie = get_post_meta( $post->ID, 'setings_list_mnenie', true);
                if($setings_list_mnenie){
                foreach ($setings_list_mnenie as $key => $val) {
                       
             ?>
                    <li role="presentation" class="my_class_none"><a href="#testi<?php echo $key ?>" aria-controls="testi<?php echo $key ?>" role="tab" data-toggle="tab">
                        <img src="<?php echo $val[photo_men] ?>" alt="">
                    </a></li>
                    <?php } ?>
                </ul>

                <div class="tab-content testiTabContent">
                      <?php 
                $setings_list_mnenie = get_post_meta( $post->ID, 'setings_list_mnenie', true);
                foreach ($setings_list_mnenie as $key => $val) {
             ?>
                    <div role="tabpanel" class="tab-pane" id="testi<?php echo $key ?>">
                        <h5 class="customerName"><?php echo $val[fio_list] ?></h5>
                        <h5 class="customerType"><?php echo $val[profi_puple] ?></h5>
                        <p><?php echo $val[text_mnenie] ?></p>
                    </div>
                    <?php } ?>
                </div>
                <?php } ?>


            </div>
        </div>
    </section>