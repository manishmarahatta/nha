<!-- welcome part-->
<div class="body_wrapper color_white InnerBodyWrapper" style="">
    <!-- left col-->
    <div class="about clearfix">
        <div class="InnerText">
            <div class="InnerTextTitle blue-Fcolor">
                <h1 class="title_1">About Us</h1>
            </div>
            <div class="InnerTextBody">
                <div class="background">
                    <div class="background_text">
                        <h2><?php echo $background->title; ?></h2>
                        <?php echo $background->description; ?>                    
                    </div>
                    <div class="background_image">
                        <img src="<?php echo base_url() . 'front_assets/images/welcome.jpg' ?>"/>
                    </div>
                </div>
                <div class="remaining">
                    <div class="join_nha">
                        <div class="who_can_join">
                            <h2><?php echo $who_can->title; ?></h2>
                            <?php echo $who_can->description; ?>
                        </div>
                        <div class="vision_left">
                            <div class="vision">
                                <h2><?php echo $vision->title; ?></h2>
                                <?php echo $vision->description; ?>
                            </div>
                            <div class="vision">
                                <h2><?php echo $mission->title; ?></h2>
                                <?php echo $mission->description; ?>
                            </div>
                        </div>

                        <div class="vision">
                            <h2><?php echo $objective->title; ?></h2>
                            <?php echo $objective->description; ?>
<!--                            <p>The major objectives of NHA shall be.</p>
                            <ul class="listing1">
                                <li>To help  creating a better enabling environment for hydropower development.</li>
                                <li>To advocate  and support the capacity building of hydro professionals and entrepreneurs and  institutions.</li>
                                <li>To protect and  ensure the benefits, interests and rights of its members while maintaining  ethical values and integrity among its members.</li>
                            </ul>-->
                        </div>
                    </div>
                    <div class="objective">
                        <div class="objective_text">
                            <h2><strong><?php echo $activities->title; ?></strong></h2>
                            <?php echo $activities->description; ?>
                            <!--                            <ul class="listing1">
                                                            <li>Information  dissemination</li>
                                                            <li>Establish and  maintain a hydropower resource centre </li>
                                                            <li>Capacity  development of its members </li>
                                                            <li>Developing  networks to establish linkages with relevant national and international  organizations  </li>
                                                            <li>Organize  periodic forum for national and international stakeholders. </li>
                                                            <li>Lobbing for  hydropower nationally, regionally, and internationally</li>
                                                            <li>Increasing  awareness of the role of hydropower which can lay in sustainable development as  an important sources of renewal energy</li>
                                                            <li>Undertake  studies to promote issues on
                                                                <ul class="listing2">
                                                                    <li>Rural electrification </li>
                                                                    <li>Climate change</li>
                                                                    <li>Carbon Trading </li>
                                                                    <li>Cross border power trading</li>
                                                                    <li>Transmission  &amp; Distribution.</li>
                                                                </ul>
                                                            </li>
                                                        </ul>-->
                        </div>
                        <div class="objective_image">
                            <img src="<?php echo base_url() . 'front_assets/images/gallery/img4.jpg' ?>"/>
                            <img src="<?php echo base_url() . 'front_assets/images/gallery/img6.jpg' ?>"/>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="clear"></div>         
    </div>
    <!-- right col-->
    <!--    <div class="WelLeftCol  clearfix">
            <div class="InnerRightLink white-Fcolor"> 
                <div class="QuickLinkTitle color_blu-dr1">
                    <h2 class="title_3">About Us</h2>
                </div>
                <div class="QuickLinkListing">
                    <ul>
                        <li>Objective</li>
                        <li>Gallery</li>
                        <li>Contact Us</li>
                        <li>Other</li>
    
    
                    </ul>
                </div>
    
    
            </div>
    
    
            <div class="FBContainer">
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
    
                <div class="fb-like-box" data-href="https://www.facebook.com/circ.nepal" data-width="298" data-height="290" data-show-faces="true" data-stream="false" data-show-border="true" data-header="true"></div>
                 facebook end
    
            </div>
        </div>-->
    <div class="clear"></div>
</div>
<div class="clear"></div>
<!-- footer part-->
<style>

    .background {
        background-color: #004848;
        color: #FFFFFF;
        float: left;
        width: 100%;
    }
    .background_text {
        float: left;
        padding: 13px;
        width: 573px;
    }
    .background_text > h2 {
        border-bottom: 1px solid;
        font-size: 24px;
    }
    .background_text > p {
        line-height: 20px;
    }

    .background_image{
        float: left;
        height: auto;
        width: 390px;
    }


    .background_image > img {
        height: 279px;
        width: 390px;
    }


    .objective{
        height: 615px;
        width: 302px;
        float: left;
        background-color: #00667C;
        color: #ffffff;
    }
    .who_can_join{
        
        float: left;
        padding: 13px;
        margin-bottom: 42px;

    }
    .who_can_join > h2 {
        font-size: 24px;
        color: #A4002A;
    }
    .who_can_join > p {
        line-height: 18px;
        color: #000000;
        font-size: 13px;
    }


    .remaining{
        width: 100%;
        height: 560px;
        float: left;
    }

    .vision {
        color: #000000;
        float: left;
        width: 300px;
        border-left: 2px solid black;
        margin-left: 13px;
        margin-top: 13px;
        padding-left: 8px;
    }
    .vision > h2 {
        font-size: 15px;
        font-weight: bold;
    }
    .vision > p {
        line-height: 17px;
    }

    .vision_left {
        float: left;
        width: 345px;
    }


    .objective_text > h2 {
        margin-left: 19px;
        font-size: 19px;
        margin-top: 12px;
    }


    .objective_text {
        float: left;
        height: auto;
        width: 100%;
    }
    .objective_image{
        float: left;
        width: 100%;
        margin-top: 46px;
    }


    .objective_image > img {
        width: 149px;
        margin-top: 4px;
        height: 109px;
    }


</style>