<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>
        NHA:: Nepal Hydropower Association
    </title>
    <!-- main css style-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('front_assets') ?>/css/reset.css" />
    <link href="<?php echo base_url('front_assets') ?>/css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('front_assets') ?>/css/Cstyle.css" />
    <link rel="stylesheet" href="<?php echo base_url('resources') ?>/colorbox/colorbox.css"/>



    <script src="<?php echo base_url('front_assets') ?>/js/jquery-1.2.6.min.js"></script>
    <script src="<?php echo base_url('front_assets') ?>/sliderengine/jquery.js"></script>
    <script src="<?php echo base_url('front_assets') ?>/js/modernizr.js"></script>
    <script src="<?php echo base_url('front_assets') ?>/sliderengine/amazingslider.js"></script>
    <script src="<?php echo base_url('front_assets') ?>/sliderengine/initslider-1.js"></script>

    <script src="<?php echo base_url('resources') ?>/colorbox/jquery.colorbox-min.js"></script>




</head>
<body>
    <div class="header_wrapper color_blu-dr1">
        <header class="body_wrapper header clearfix">
            <a class="logo left" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('front_assets') ?>/images/logos.png" /> </a>
            <div class="menu right">
                <ul class="clearfix">
                    <li class="<?php
if ($main == 'home') {
    echo 'active';
}
?>" >
                        <a href="<?php echo base_url() ?>">Home</a>
                    </li>
                    <li class="<?php
                        if ($main == 'about_us') {
                            echo 'active';
                        }
?>" >
                        <a href="<?php echo base_url('about_us'); ?>">About Us</a>
                    </li>
                    <li class="<?php
                        if ($main == 'team_member') {
                            echo "active";
                        }
?>">
                        <a href="<?php echo base_url('team_member'); ?>">Executive Member</a>
                    </li>
                    <li class="<?php
                        if ($main == 'events') {
                            echo "active";
                        }
?>">
                        <a href="<?php echo base_url('events'); ?>">Events</a>
                    </li>
                    <li class="<?php
                        if ($main == 'gallery') {
                            echo "active";
                        }
?>" >
                        <a href="<?php echo base_url('gallery'); ?>">Gallery</a>
                    </li>
                    <li class="
                    <?php
                    if ($main == 'downloads') {
                        echo 'active';
                    }
                    ?>">
                        <a href="<?php echo base_url('home/downloads') ?>">Downloads</a>
                    </li>
                    <li class="<?php
                    if ($main == 'contact') {
                        echo "active";
                    }
                    ?>" >
                        <a href="<?php echo base_url('contact') ?>">Contact Us</a>
                    </li>
                </ul>
            </div>
        </header>
    </div>
    <div class="clear"></div>

    <?php if (isset($header_banner)) { ?>
        <div class="header_wrapper slider-bgcolor" style="padding-top: 28px; padding-bottom: 20px;">
            <div class="body_wrapper slider-wrapper clearfix">
                <div class="slider_col left">


                    <!-- Insert to your webpage where you want to display the slider -->
                    <div id="amazingslider-1" style="height: 400px;">
                        <ul class="amazingslider-slides" style="display:none;">
                            <?php foreach ($all_banner as $all) { ?>
                                <li><img width="1000px" src="<?php echo base_url('uploads/banner_management/' . $all->image) ?>" alt="Hydro" /></li>
                            <?php } ?>

                        </ul>

                    </div>
                    <!-- End of body section HTML codes -->


                </div>

                <!--            -->
            </div>
        </div>
        <div class="clear">	</div>
    <?php } ?>