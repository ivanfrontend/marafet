<?php
$name_block_priziv = get_post_meta( $post->ID, 'name_block_priziv', true);
$description_block_priziv = get_post_meta( $post->ID, 'description_block_priziv', true);
 if( $name_block_priziv || $description_block_priziv){ ?>
    <aside class="bg-dark">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"><?php echo $name_block_priziv ?></h2>
                    <hr class="light">
                    <p class="text-faded2" style="text-align:left;">
                        <?php echo $description_block_priziv ?>
                    </p>
                </div>
            </div>
        </div>
    </aside>
<?php } ?>