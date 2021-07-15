<?php
/**
 * Template Name: service
 * Template Post Type: post, page
 */
get_header(); ?>
<div class="col-12">
<!---------Boxes------------------------>
<h3 class="title text-center mt-5">Contact Us</h3>
<img class="mx-auto d-block" src="<?php bloginfo('template_directory');?>/images/sep2.svg">
<div class="col-sm-10 col-12 d-lg-flex mx-auto justify-content-between p-0 mt-5 text-center-m">
     <div class="box-items height-142 align-items-center text-center hvr-icon-drop hvr-wobble-horizontal" style="width: 326px">
                    <div class="d-flex justify-content-center">
                        <div class="green-circle4"  style="margin-top: -10%;">
                            <img src="<?php bloginfo('template_directory');?>/images/tell-icon2.svg" class="hvr-icon">
                        </div>
                    </div>

                        <div class="mt-3">
                            <h5>Phone number</h5>
                            <h6>
                                678-209-2273
                            </h6>
                        </div>
                    </div>
     <div class="box-items height-142 align-items-center text-center mt-5 hvr-icon-drop hvr-wobble-horizontal" style="width: 326px">
                    <div class="d-flex justify-content-center">
                        <div class="green-circle4" style="margin-top: -10%;">
                            <img src="<?php bloginfo('template_directory');?>/images/email-icon2.svg" class="hvr-icon">
                        </div>
                    </div>

                            <div class="mt-3">
                                <h5>E-mail Address</h5>
                                <h6>
                                    info@gwinnettdenta lcare.com
                                </h6>
                            </div>
                    </div>
     <div class="box-items height-142 align-items-center text-center mt-5 mt-sm-0 hvr-icon-drop hvr-wobble-horizontal" style="width: 326px">
                        <div class="d-flex justify-content-center">
                            <div class="green-circle4" style="margin-top: -10%;">
                                <img src="<?php bloginfo('template_directory');?>/images/fax-icon2.svg" class="hvr-icon">
                            </div>
                        </div>

                        <div class="mt-3">
                            <h5>Fax Number</h5>
                            <h6>
                                678-209-2275
                            </h6>
                        </div>
                    </div>
</div>
<!---------------------------------------------------->
<div class="green-box col-10 mx-auto d-lg-flex align-items-center p-3 p-sm-0" style="margin-top: 125px">
        <div class="col-12 col-sm-3 d-flex align-items-center justify-content-between">
            <img src="<?php bloginfo('template_directory');?>/images/clock3.svg" class="pr-3 pr-sm-0">
            <h5>Office Hours: </h5>
        </div>

        <div class="col-sm-8 col-12  d-sm-flex justify-content-between">
            <h6>From Mon To Thurs<br class="d-block d-sm-none">8:00Am – 4:00 Pm</h6>
            <h6>Closed: Friday, Saturday, Sunday</h6>
        </div>

    </div>
<!-------------------------------------->
<div class="col-12" style="background: url('<?php bloginfo('template_directory');?>/images/formbg.png') left no-repeat">
        <div class="col-12 col-sm-10 mx-auto d-flex p-0 text-center-m" style="margin-top: 100px;">
            <div class="col-4 d-none d-sm-block">
                <img src="<?php bloginfo('template_directory');?>/images/message.png" class="img-fluid">
            </div>
            <div class="col-12 col-sm-8">
                <h2 class="title font-size-18">Send us a message</h2>
                <picture>
                    <source media="(max-width:414px)" srcset="<?php bloginfo('template_directory');?>/images/sep2.svg">
                    <img src="<?php bloginfo('template_directory');?>/images/sep3.svg">
                </picture>



                <form class="mt-4" id="form">
                    <div class="form-row">
                        <div class="col-12 col-sm-6 mb-3">
                            <input type="text" class="form-control"  placeholder="Name"  required>
                        </div>
                        <div class="col-12 col-sm-6 mb-3">
                            <input type="text" class="form-control"  placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-12 mb-3">
                            <input type="text" class="form-control" id="validationDefault05" placeholder="Subject" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Message"  rows="6"></textarea>
                    </div>
                    <button class="btn d-flex align-items-center submit mt-4 hvr-icon-spin" type="submit">
                        <div class="green-circle3" style="background-color: #FFFFFF">
                            <img src="<?php bloginfo('template_directory');?>/images/message.svg" class="hvr-icon">
                        </div>
                        <h6>Submit</h6>
                    </button>
                </form>






            </div>
        </div>
    </div>





</div>

<?php get_footer(); ?>
