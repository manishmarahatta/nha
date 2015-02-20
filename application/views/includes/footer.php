<div class="clear"></div>
<!-- footer part-->
<div class="footer header_wrapper color_blu-dr1">
    <div class="body_wrapper cleatfix">
        <div class="FootCol white-Fcolor">
            <h1 class="title_2">Our Partners</h1>
            <ul class="title_3">
                <li><a href="#">Hydro Lab</a></li>
                <li><a href="#">Niti Foundation</a></li>
                <li><a href="#">Norwegian Embassy/NORAD</a></li>
                <li><a href="#">Department of Electricity Development</a></li>
                <li><a href="#">NNAA</a></li>
                <li><a href="#">IPPAN</a></li>

                

            </ul>

        </div>
        <div class="FootCol white-Fcolor">
            <h1 class="title_2">Useful Link</h1>
            <ul class="title_3">
                <li><a target="_blank" href="http://www.nea.org.np/">Nepal Electricity Authority, Nepal</a></li>
                <li><a target="_blank" href="http://www.moen.gov.np/">Ministry of Energy, Nepal</a></li>
                <li><a target="_blank" href="http://www.mfsc.gov.np/">Ministry of Forests and Soil Conservation, Nepal</a></li>
                <li><a target="_blank" href="http://www.mof.gov.np/en/">Ministry of Finance Nepal</a></li>
                <li><a target="_blank" href="http://www.moenv.gov.np/">Ministry of Environment Nepal</a></li>
                <li><a target="_blank" href="http://www.hydropower.org/">International Hydropower Association</a></li>
            </ul>

        </div>
        <div class="FootCol white-Fcolor">
            <h1 class="title_2">Other</h1>
            <ul class="title_3">
                <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
                <li><a href="<?php echo base_url('events') ?>">Event</a></li>
                <li><a href="<?php echo base_url('about_us') ?>">Who We Are</a></li>
                <li><a href="<?php echo base_url('gallery') ?>">Gallery</a></li>
                <li><a href="<?php echo base_url('home/downloads') ?>">Downloads</a></li>

            </ul>

        </div>
        <div class="FootContact white-Fcolor">
            <h1 class="title_2">Contact</h1>
            <div class="title_4">
                <h2 class="title_3">
                    <strong>Nepal Hydropower Association </strong></h2>

                    <?php 
                    $get_contact = $this->db->get('contact_us')->row();
                    if (count($get_contact) == 0 || $get_contact->detail == '') {
                        ?>
                        
                        <?php
                    } else {
                        echo $get_contact->detail;
                    }
                    ?>


                </div>

            </div>


            <div class="clear"></div>
            <div class="BottomFooter white-Fcolor">
                <span>Nepal Hydropower Association &copy; 2014 All Right Reserved <br /> Powerd by <strong><a target="_blank" href="http://ictframe.com/"> ICT FRAME </a>  </strong></span>
            </div>
        </div>
    </div></body>


    <script type="text/javascript" src="<?php echo base_url('front_assets') ?>/js/jquery.jcarousel.js"></script>
<!--
  jCarousel library
-->
<script type="text/javascript" src="<?php echo base_url('front_assets') ?>/js/jquery.jcarousel.min.js"></script>
<!--
  jCarousel skin stylesheet
-->
<script type="text/javascript">

jQuery(document).ready(function(e) {
    jQuery('#mycarousel').jcarousel({
        wrap: 'circular',
        scroll:1,
        auto:2

    });
});

</script>


</html>