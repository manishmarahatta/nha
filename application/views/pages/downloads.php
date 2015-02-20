<div class="header_wrapper slider-bgcolor" style="padding-top: 28px; padding-bottom: 20px;">
    <div class="body_wrapper slider-wrapper clearfix">
        <div class="slider_col left">


            <!-- Insert to your webpage where you want to display the slider -->
            <div id="amazingslider-1" style="height: 400px;">
                <ul class="amazingslider-slides" style="display:none;">

                    <li><img width="1000px" src="<?php echo base_url().'front_assets/images/slider4.jpg' ?>" alt="Hydro" /></li>

                </ul>

            </div>
            <!-- End of body section HTML codes -->


        </div>

        <!--            -->
    </div>
</div>
<div class="clear"> </div>

<!-- welcome part-->
<div class="body_wrapper" style="margin-top: 30px;">

    <div class="latest_news">

        <h1 class="title_1 blue-Fcolor">
            Download Links
        </h1>

        

        <div class="policy">
            <h3 style="font-size:14px;">Our Privacy & Policy</h3>
            <hr/>
            <p>
               
            </p>
        </div>
        <br/>
        <div style="float:left;width:50%;">
            <ul class="downloads_ul">
                <?php
                if (count($all_files) != '') {
                    foreach ($all_files as $all) {
                        ?>
                        <li>
                            <a href="<?php echo base_url('uploads/downloads/' . $all->name) ?>">	
                                <?php echo $all->file_name; ?>
                                <img src="<?php echo base_url('assets/images/images.jpg') ?>"/>
                            </a>
                        </li>
                        <?php
                    }
                } else {
                    ?>

                </ul>
                <?php
                echo '<p class="downloads_ul">Nothing Found..........</p>';
            }
            ?>
        </div>
    </div>



</div>	

<style>

.policy{
    border: 1px solid #222;
    float: right;
    min-height: 290px;
    padding: 12px;
    width: 20%;
}
.downloads_ul{
    margin-left: 40px;
    margin-bottom: 40px;

}
.downloads_ul li{
    margin-bottom: 20px;
}

.downloads_ul li a{
    font-size: 19px;
    color: #0dafee;
    text-decoration: none;
}

.downloads_ul li a img{
    float: left;
    margin-right: 20px;
    position: relative;
    top: -3px;
    width: 31px;
}




</style>

