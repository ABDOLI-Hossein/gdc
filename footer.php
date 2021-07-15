
<!--<div class="col-12 mt-0-m" style="margin-top: 140px">-->
<!--    <div class="d-flex justify-content-center">-->
<!---->
<!--        <div class="col-9">-->
<!--           <div class="d-flex">-->
<!--               <div id="location" class="d-none d-sm-block">-->
<!--                   <div class="d-flex align-items-center">-->
<!--                       <h3>Location</h3>-->
<!--                       <img src="--><?php //bloginfo('template_directory');?><!--/images/sep4.svg">-->
<!--                   </div>-->
<!--               </div>-->
<!--               <div class="d-block d-sm-none">-->
<!--                   <h3 class="title text-center mt-5">Location</h3>-->
<!--                   <img class="mx-auto d-block" src="--><?php //bloginfo('template_directory');?><!--/images/sep2.svg">-->
<!--               </div>-->
<!--               <picture>-->
<!--                   <source media="(max-width:414px)" srcset="--><?php //bloginfo('template_directory');?><!--/images/mapmobile.png">-->
<!--                   <img src="--><?php //bloginfo('template_directory');?><!--/images/map.png" class="img-fluid">-->
<!--               </picture>-->
<!--           </div>-->
<!--       </div>-->
<!--        <div class="col-3">-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<footer class="col-12" style="margin-top: 109px;min-height: 476px;background: url('<?php bloginfo('template_directory');?>/images/footerbg.png') center no-repeat">
<!--			<section class="col-xs-12 visible-xs upbutton-footer">
                <a href="#section00" class="serviceslist center-block">
                    <span class="serviceslist display-grid">
                    <img src="<?php /*bloginfo('template_directory');*/?>/Services/arrow-down-sign-to-navigate.svg">
                </span>
                </a>
            </section>
-->
	<div class="col-12 col-sm-10 mx-auto pl-0 pr-0" style="padding-top: 75px;">

        <div class="col-12">
            <a href="index.html">
                <img src="<?php bloginfo('template_directory');?>/images/logo2.png">
            </a>
        </div>
        <div class="col-12 d-sm-flex margin-top-41 align-items-center ">
            <div class="col-12 col-sm-7 p-0">
                <p class="p-section-title pt-4" style="line-height: 32px">We are a general family
                    dental practice located in Lawrenceville, Gwinnett and providing care to patients of all ages. We have
                    been serving our patients in Gwinnett for almost a decade</p>
            </div>
            <div class="col-12 col-sm-5 d-flex align-items-center p-0 mt-3 mt-sm-0">
                <div class="green-circle2 mr-4 ml-0 ml-sm-5">
                    <img src="<?php bloginfo('template_directory');?>/images/clock2.svg">
                </div>
                <div>
                    <h6 class="font-size-15 text-white">Office Hours:</h6>
                    <h6 class="font-size-15 text-white">From Mon To Thurs<br class="d-block d-sm-none"> 8:00 Am – 4:00 Pm</h6>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 d-lg-flex justify-content-between mt-4">
            <div class="d-flex align-items-center mt-4 mt-sm-0">
                <div class="grey-circle mr-3">
                    <img src="<?php bloginfo('template_directory');?>/images/tell-icon.svg">
                </div>
                <p class=" p-section-title">Phone: 678-209-2273</p>
            </div>
            <div class="d-flex align-items-center mt-4 mt-sm-0">
                <div class="grey-circle mr-3">
                    <img src="<?php bloginfo('template_directory');?>/images/mail-icon.svg">
                </div>
                <p class=" p-section-title">info@gwinnettdentalcare.com</p>
            </div>
            <div class="d-flex align-items-center mt-4 mt-sm-0">
                <div class="grey-circle mr-3">
                    <img src="<?php bloginfo('template_directory');?>/images/facebook-icon.svg">
                </div>
                <p class=" p-section-title">Join us on Facebook</p>
            </div>
        </div>
        <hr>
        <div class="d-lg-flex justify-content-between mt-3 align-items-center">
            <nav class="navbar navbar-default mb-3 mb-sm-0">
                <?php
                wp_nav_menu(
                    array(

                        'menu_id'        => 'footer-menu',
                        'container'      => 'ul',
                        'menu_class'     => 'nav navbar-nav',
                    )
                );
                ?>
            </nav>
            <p class="pl-3 pl-sm-0">Copyright © gwinnettdentalcare.<br class="d-block d-sm-none">All Rights Reserved</p>
            <p  class="pl-3 pl-sm-0">.Design by <a><span class="green-text">Nexmark Studios</span></a> </p>

        </div>
    </div>

</footer>

<?php wp_footer();?>

</body>
</html>