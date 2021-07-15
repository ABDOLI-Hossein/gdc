<!DOCTYPE html>
<html lang="en">
<head>
<title><?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <?php wp_head();?>
</head>
<body style="max-width: 1366px" class="mx-auto">
<header>
    <!-----Navigation--------------------->

    <div class="col-12 nav-box-shadow">
        <div class="col-12 col-sm-10 mx-auto p-0">
            <nav class="navbar-expand-lg navbar-light pb-0 pb-sm-4">
                <div class="col-12 d-flex align-items-center pt-3 justify-content-between pb-3 pb-sm-0 pl-0">
                    <a class="navbar-brand col-6 p-0" href="<?php echo get_home_url(); ?>">
                        <img src="<?php bloginfo('template_directory');?>/images/logo.png">
                    </a>
                    <div class="col-6 d-none d-sm-flex p-0">

                        <img src="<?php bloginfo('template_directory');?>/images/clock.svg">
                        <h6 class="clock-header-p">From Mon to Thurs 8:00 AM – 4:00 PM</h6>
                        <img src="<?php bloginfo('template_directory');?>/images/tell.svg" style="padding-left: 38px;">
                        <h6 class="tell-header-p">678-209-2273</h6>

                    </div>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                        <img src="<?php bloginfo('template_directory');?>/images/collapseicon.svg">
                    </button>


                </div>


                <div class="collapse navbar-collapse mt-0 mt-sm-4" id="navbarTogglerDemo03">
                    <div class="d-sm-none pl-3">

                        <div class="d-flex pb-3">
                            <img src="<?php bloginfo('template_directory');?>/images/clock.svg">
                            <h6 class="clock-header-p">From Mon to Thurs 8:00 AM – 4:00 PM</h6>
                        </div>
                        <div class="d-flex pb-3">
                            <img src="<?php bloginfo('template_directory');?>/images/tell.svg">
                            <h6 class="tell-header-p">678-209-2273</h6>
                        </div>

                    </div>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'top-menu',
                            'menu_id'        => 'top-menu',
                            'container'      => 'ul',
                            'menu_class'     => 'navbar-nav',

                        )
                    );
                    ?>
                </div>
            </nav>
        </div>
    </div>
</header>