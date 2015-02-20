<div class="header_wrapper slider-bgcolor" style="padding-top: 28px; padding-bottom: 20px;">
    <div class="body_wrapper slider-wrapper clearfix">
        <div class="slider_col left">


            <!-- Insert to your webpage where you want to display the slider -->
            <div id="amazingslider-1" style="height: 400px;">
                <ul class="amazingslider-slides" style="display:none;">

                    <li><img width="1000px" src="<?php echo base_url().'front_assets/images/slider2.jpg' ?>" alt="Hydro" /></li>

                </ul>

            </div>
            <!-- End of body section HTML codes -->


        </div>

        <!--            -->
    </div>
</div>
<div class="clear"> </div>


<div class="team_member slider-bgcolor clearfix">
    <div class="member_list ">
        <h2 class="brown-Fcolor title_2">
            <strong>
                EXECUTIVE MEMBERS
            </strong>
        </h2>
        <div class="MostTopMember">
            <div class="MostTopImg">
                <?php
                if($president_member->image != ''){?>
                    <img src="<?php echo base_url('uploads/members/'.$president_member->image) ?>"/>
                <?php }else{?>
                    <img src="<?php echo base_url('front_assets') ?>/images/members/pp2.jpg"/>
                <?php }
                ?>
                
            </div>
            <span><strong><?php echo $president_member->name; ?></strong></span>
            <br />
            <span class="brown-Fcolor"><?php echo $president_member->post; ?></span>
        </div>
        <div class="MostTopMember-border"></div>
        <div class="TopMember clearfix">
            <?php foreach ($all_member as $all) { ?>
                <div class="LowMember">
                    <div class="LowMemberImg">
                        <?php
                        if($all->image != ''){?>
                            <img width="62" height="78" src="<?php echo base_url('uploads/members/'.$all->image) ?>"/>
                        <?php }else{?>
                            <img width="62" height="78" src="<?php echo base_url('front_assets') ?>/images/members/no_image.jpg"/>
                        <?php }
                        ?>
                        
                        <br />
                    </div>
                    <span><strong><?php echo $all->name; ?></strong></span>
                    <br />
                    <span class="brown-Fcolor"><?php echo $all->post; ?></span>
                </div>
            <?php } ?>

            <!--            <div class="LowMember">
                            <div class="LowMemberImg">
                                <img width="62" height="78" src="<?php echo base_url('front_assets') ?>/images/members/pp3.jpg"/>
                                <br />
                            </div>
                            <span><strong>Er. Bhanu Pokharel</strong></span>
                            <br />
                            <span class="brown-Fcolor">General Secretory</span>
                        </div>
            
                        <div class="LowMember">
                            <div class="LowMemberImg">
                                <img width="62" height="78" src="<?php echo base_url('front_assets') ?>/images/members/pp4.jpg" />
                                <br />
                            </div>
                            <span><strong>Er. Arun Rajauria</strong></span>
                            <br />
                            <span class="brown-Fcolor">Treasurer</span>
                        </div>
                        <div class="LowMember">
                            <div class="LowMemberImg">
                                <img width="62" height="78" src="<?php echo base_url('front_assets') ?>/images/members/pp5.jpg"/>
                                <br />
                            </div>
                            <span><strong>Er. Vishnu B. Singh</strong></span>
                            <br />
                            <span class="brown-Fcolor">Member</span>
                        </div>
                        <div class="LowMember">
                            <div class="LowMemberImg">
                                <img width="62" height="78" src="<?php echo base_url('front_assets') ?>/images/members/pp8.jpg"/>
                                <br />
                            </div>
                            <span><strong>Er. Mani R. Dahal</strong></span>
                            <br />
                            <span class="brown-Fcolor">Member</span>
                        </div>
                        <div class="LowMember">
                            <div class="LowMemberImg">
                                <img width="62" height="78" src="<?php echo base_url('front_assets') ?>/images/members/rita.png"/>
                                <br />
                            </div>
                            <span><strong>Er. Rita Chitrakar </strong></span>
                            <br />
                            <span class="brown-Fcolor">Member</span>
                        </div>
                        <div class="LowMember">
                            <div class="LowMemberImg">
                                <img width="62" height="78" src="<?php echo base_url('front_assets') ?>/images/members/surendra_raj.png"/>
                                <br />
                            </div>
                            <span><strong>Er.Surendra R. Panta </strong></span>
                            <br />
                            <span class="brown-Fcolor">Member</span>
                        </div>
                        <div class="LowMember">
                            <div class="LowMemberImg">
                                <img width="62" height="78" src="<?php echo base_url('front_assets') ?>/images/members/prem_kc.png"/>
                                <br />
                            </div>
                            <span><strong>Er. Prem K. KC</strong></span>
                            <br />
                            <span class="brown-Fcolor">Member</span>
                        </div>
                        <div class="LowMember">
                            <div class="LowMemberImg">
                                <img width="62" height="78" src="<?php echo base_url('front_assets') ?>/images/members/mohan_raj.png"/>
                                <br />
                            </div>
                            <span><strong>Er. Mohan R. Panta </strong></span>
                            <br />
                            <span class="brown-Fcolor">Member</span>
                        </div>
                        <div class="LowMember">
                            <div class="LowMemberImg">
                                <img width="62" height="78" src="<?php echo base_url('front_assets') ?>/images/members/chiranjibi_adhikari.png"/>
                                <br />
                            </div>
                            <span><strong>Er. Chiranjibi Adhikari</strong></span>
                            <br />
                            <span class="brown-Fcolor">Member</span>
                        </div>-->
        </div>

        <div class="clear">
        </div>
    </div>
<style>
    .LowMember{
    float: left;
    margin-right: 104px;
    min-height: 175px;
    width: 110px;
    margin-left: 50px;
}
    
</style>