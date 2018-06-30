<section id="contact" class="parallaxbg">
    <div class="pattern-overlay"></div>
    <div class="container">
        <div class="row">
            <!--SECTION TITLE-->
            <div class="col-md-12 title white">
                <h1 class="animated" data-animation="fadeInDown" data-animation-delay="300">Контакты</h1>
                <p class="animated" data-animation="fadeInRight" data-animation-delay="500"></p>
            </div><!-- /.SECTION TITLE-->
        </div>
        <div class="row">
            <div class="col-md-offset-2 col-md-8 animated" data-animation="fadeInUp" data-animation-delay="300">
            <p class="comment-message"></p>
                <!--CONTACT FORM-->
                <form role="form" name="commentform" class="contact-form-horizontal" id="contactform" method="post" action="http://html6.com.ru" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <!-- NAME -->
                        <div class="input-group form-group">
                            <input type="text"  name="contact_name" id="contact_name"  class=" form-control input-name" placeholder="Имя">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- PHONE NUMBER -->
                        <div class="input-group form-group">
                            <input type="text" name="contact_number" id="contact_number"  class=" form-control input-phone-number" placeholder="Телефон">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12"> 
                        <!-- EMAIL -->
                        <div class="input-group form-group">
                            <input type="email"  name="contact_email" id="contact_email"  class=" form-control input-email" placeholder="E-mail">
                        </div>
                    </div>
                </div>  
                <!-- MESSAGE BOX -->
                <div class="row">
                    <div class="col-md-12 message-box form-group">
                        <textarea class=" form-control textarea-message contact-message-box" rows="3" placeholder="Сообщение..." name="contact_message" data-bv-field="contact_message" id="contact_message"></textarea>
                        <!--SUBMIT BUTTON-->
                        <input type="submit" id="sendingbtn" class="btn" value="Отправить">
                    </div>
                </div>
                </form><!-- /.CONTACT FORM-->
            </div>
        </div>
    </div>
    <!--CONTACT DETAILS-->
    <div class="contact-details">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-10">
                    <div class="row">
                        <!--ADDRESS-->
                        <div class="col-sm-4 contact-block animated" data-animation="fadeInUp" data-animation-delay="300">
                            <?php 
                            $legal_adres =  ot_get_option('legal_adres');
                                if($legal_adres){
                            ?>
                            <div class="icon-circle">
                                <i class="fa fa-map-marker"></i>                            </div>
                            <h3>Адрес</h3>
                            <p><?php echo $legal_adres ?></p>
                            <?php } ?>
                            <!-- <p>ул. Маяковского 15</p> -->
                        </div>
                        <!--CONTACT-->
                        <div class="col-sm-4 contact-block animated" data-animation="fadeInUp" data-animation-delay="500">
                            <?php 
                                $sontakt_list_phone_namber =  ot_get_option('sontakt_list_phone_namber');
                                if($sontakt_list_phone_namber){
                             ?>
                            <div class="icon-circle">
                                <i class="fa fa-phone" aria-hidden="true"></i>                          </div>
                            <h3>Телефон</h3>
                            <?php
                            
                            
                                foreach ($sontakt_list_phone_namber as $key => $value) {
                                    $str = $value[add_phone_namber];
                                    $result = preg_replace("/[^,.0-9]/", '', $str);
                            ?>
                            <p><a href="tel:+<?php echo $result ?>"><?php echo $value[add_phone_namber]; ?></a></p>
                            <?php } } ?>
                            <!-- <p><a href="mailto:mail@mail.com">mail@mail.com</a></p> -->
                        </div>
                        <!--SUPPORT-->
                        <div class="col-sm-4 contact-block animated" data-animation="fadeInUp" data-animation-delay="700">
                           <?php
                            $email_adres =  ot_get_option('email_adres');
                            if($email_adres){
                            ?>
                            <div class="icon-circle">
                                <i class="fa fa-envelope"></i>                         </div>
                            <h3>Почта</h3>
                            <!-- <p>по телефону</p> -->
                            <p><a href="mailto:mail@mail.com"><?php echo $email_adres ?></a></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.CONTACT DETAILS--> 
    <!--Map Section Begins-->
    <div class="map">    
        <div id="map_canvas"></div>    
    </div>
    <!--Footer Begins-->
    <div id="footer">
        <div class="container">
            <!--SOCIAL LINKS-->
            <div class="row">
                <!--COPYRIGHTS-->
                <div class="col-sm-6 my_class_link_footer">
                     <?php dynamic_sidebar( 'footer_info' ); ?>
                </div>  
                <!--SOCIAL LINKS-->
                <div class="col-sm-6">
                    <?php
                        $login_skype =  ot_get_option('login_skype');
                        $upload_skype =  ot_get_option('upload_skype');
                        $login_viber =  ot_get_option('login_viber');
                        $upload_viber =  ot_get_option('upload_viber');
                        if($login_skype || $login_viber){
                     ?>
                    <ul>
                        <?php 
                            if($login_skype){
                         ?>
                         <li><a href="skype:<?php echo  $login_skype ?>?chat"><img src="<?php echo $upload_skype ?>" alt=""></a></li>
                         <?php } ?>
                        <?php
                         if($login_viber){
                            $str_phone_viber = $login_viber;
                            $result_phone_viber = preg_replace("/[^,.0-9]/", '', $str_phone_viber);
                          ?>
                        <li class="desktop"><a href="viber://chat?number=+<?php echo $result_phone_viber ?>"><img src="<?php echo $upload_viber ?>" alt=""></a></li>
                        <li class="mobail"><a href="viber://add?number=<?php echo $result_phone_viber ?>"><img src="<?php echo $upload_viber ?>" alt=""></a></li>
                        <?php } ?>
                        
                    </ul>
                    <?php } ?>
                </div>
            </div>  
        </div>  
    </div>
</section>  <!-- /.CONTACT SECTION-->   


</body>

</html>
 
<?php wp_footer(); ?>
</body>
</html>


