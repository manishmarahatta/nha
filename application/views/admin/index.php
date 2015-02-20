

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">


    <!-- Mirrored from demo.ponjoh.com/Simpla-Admin/index.html by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 10 Nov 2011 08:13:41 GMT -->
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

        <title><?=SITE_NAME;?> Dashboard</title>
        <link rel="stylesheet" href="<?= base_url(); ?>resources/css/reset.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?= base_url(); ?>resources/css/style.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?= base_url(); ?>resources/css/invalid.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?= base_url(); ?>resources/css/jquery.utils.css" type="text/css" media="screen" />
        <link href="<?php echo base_url() . 'assets/' ?>css/jquery-te-1.4.0.css" type="text/css" rel="stylesheet" />
        <!--                       Javascripts                       -->

        <!-- jQuery -->
        
        <script type="text/javascript" src="<?= base_url(); ?>resources/scripts/jquery-1.7.1.min.js"></script>
        <!-- jQuery Configuration -->
        <script type="text/javascript" src="<?= base_url(); ?>resources/scripts/simpla.jquery.configuration.js"></script>
        <!-- Facebox jQuery Plugin -->
        <script type="text/javascript" src="<?= base_url(); ?>resources/scripts/facebox.js"></script>
        <!-- jQuery WYSIWYG Plugin -->
        <script type="text/javascript" src="<?= base_url(); ?>resources/scripts/jquery.wysiwyg.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>resources/scripts/jquery.utils.js"></script>
        <!-- jQuery Datepicker Plugin -->
        <script type="text/javascript" src="<?= base_url(); ?>resources/scripts/jquery-ui.js"></script>
        <script src="<?php echo base_url() . 'assets/' ?>js/jquery-te-1.4.0.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?= base_url(); ?>resources/scripts/jquery.datePicker.html"></script>
        <script type="text/javascript" src="<?= base_url(); ?>resources/scripts/jquery.date.js"></script>
        
        <!--[if IE]><script type="text/javascript" src="<?= base_url(); ?>resources/scripts/jquery.bgiframe.js"></script><![endif]-->
        <!-- Internet Explorer .png-fix -->
        <!--[if IE 6]>
                <script type="text/javascript" src="<?= base_url(); ?>resources/scripts/DD_belatedPNG_0.0.7a.js"></script>
                <script type="text/javascript">
                        DD_belatedPNG.fix('.png_bg, img, li');
                </script>
        <![endif]-->
<link rel="stylesheet" type="text/css" href="<?=base_url();?>resources/css/superfish-vertical.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>resources/css/superfish.css" media="screen">
		
		<script type="text/javascript" src="<?=base_url();?>resources/js/hoverIntent.js"></script>
		<script type="text/javascript" src="<?=base_url();?>resources/js/superfish.js"></script>
		<script type="text/javascript">
 $(document).ready(function() {
   
//  $('.close_image').attr('src','<?=base_url();?>resources/images/cross.png') ;
//  $('a[rel*=facebox]').facebox() ;
     $(".editor").jqte();

});
            setTimeout(t, 1000);
            function t(){
//                $('.close').parent().fadeTo(0, 0, function () { // Links with the class "close" will close parent
//                    $(this).slideUp(400);
//                });
                return false;
               
                
                
            }
        </script>

    </head>

    <body>
        
        <div id="body-wrapper">

            <!-- Wrapper for the radial gradient background -->
            <?php include('includes/sidebar.php'); ?>
            <!-- End #sidebar -->

            <div id="main-content"> <!-- Main Content Section with everything -->


                <?php if (!isset($page_title)) { ?>
                    <h2>Welcome <?= $this->session->userdata('admin_user_name'); ?></h2>
                <?php
                } else {
                    if (isset($_SERVER['HTTP_REFERER'])) {
                        echo '<a href="' . $_SERVER['HTTP_REFERER'] . '" style="float:right;margin-right:100px; color:black"><img src="' . base_url() . 'resources/images/back.png"/><div class="clear">Back</div></a>';
                    }
                    echo '<h2>' . $page_title . '</h2>';
                }
                ?>
                <?php if ($this->session->flashdata('message') != '') { ?>
                    <div class="notification success png_bg">
                        <a href="#" class="close"><img src="<?= base_url(); ?>resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                        <div>
    <?= $this->session->flashdata('message'); ?>
                        </div>
                    </div>
                            <?php
                        }
                        if (!isset($page_title)) {
                            include('includes/top_icons.php');
                        }
                        ?>
                <!-- End .shortcut-buttons-set -->

                <div class="clear"></div> <!-- End .clear -->
<div class="notification error png_bg" style="display: none;">
                    <a href="#" class="close"><img src="<?=base_url();?>resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                    <div>
                       All red fields are required...
                    </div>
 </div>
<?php
if(!empty($js)){
    
    $this->load->view($js);
}

$this->load->view($main);
?>


                <!-- End .content-box -->

                <!-- End .content-box -->
                <div class="clear"></div>


                <!-- Start Notifications -->


                <!-- End Notifications -->

<?php
include('includes/footer.php');
?>
            </div> <!-- End #main-content -->

        </div></body>


    <!-- Mirrored from demo.ponjoh.com/Simpla-Admin/index.html by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 10 Nov 2011 08:13:52 GMT -->
</html>
