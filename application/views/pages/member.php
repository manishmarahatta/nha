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
    <div class="member_list " style="max-width: 1587px; min-width:950px;">
        <div class="excutive">
            <h2 class="brown-Fcolor title_2">
                <strong>
                    EXECUTIVE MEMBERS
                    <br/>
                    2014 - 2016
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


            </div>
            <div class="MostTopMember-border"></div>


        </div>
        <div class="corporate_member">
            <h2 class="brown-Fcolor title_2">
                <strong>
                    CORPORATE MEMBERS
                    <br/>
                </strong>
            </h2>
            <div class="MostTopMember-border"></div>
            <div class="TopMember clearfix">
                <?php
                for($i=1; $i<=4; $i++)
                   { ?>

               <ol>
                <li>name</li>
            </ol>
            
            <?php } ?>


        </div>



        <div class="clear">
        </div>

    </div>

    <div class="corporate_member">
            <h2 class="brown-Fcolor title_2">
                <strong>
                    LIFE MEMBERS
                    <br/>
                </strong>
            </h2>
            <div class="MostTopMember-border"></div>
            <div class="TopMember clearfix">
                <?php
                for($i=1; $i<=4; $i++)
                   { ?>
               
               <ol>
                <li>name</li>
            </ol>
            
            <?php } ?>


        </div>



        <div class="clear">
        </div>

    </div>

    <div class="corporate_member">
            <h2 class="brown-Fcolor title_2">
                <strong>
                    GENERAL MEMBERS
                    <br/>
                </strong>
            </h2>
            <div class="MostTopMember-border"></div>
            <div class="TopMember clearfix">
                <?php
                for($i=1; $i<=4; $i++)
                   { ?>
               
               <ol>
                <li>name</li>
            </ol>
            
            <?php } ?>


        </div>



        <div class="clear">
        </div>

    </div>
</div>

<div class="member_list advisor" style="border: 1px solid #ccc; float: right; width: 328px;">
    <h2 class="brown-Fcolor title_2">
        <strong>
            Advisors Lists
            <br/>
        </strong>
    </h2>

    <div class="MostTopMember-border"></div>
    <div class="TopMember clearfix">
        <?php
        for($i=0; $i<=4; $i++){
            ?>

            <div class="LowMember">
                <div class="LowMemberImg">

                    <img width="62" height="78" src="<?php echo base_url('front_assets') ?>/images/members/no_image.jpg"/>
                    <br />
                </div>
                <span><strong>Name</strong></span>
                <br />
                <span class="brown-Fcolor">post</span>
            </div>
            <?php }?>


        </div>

        <div class="MostTopMember-border" style="margin:0px !important;"></div>
        <h2 class="brown-Fcolor title_2">
            <strong>
              Office Secretary
              <br/>
          </strong>
      </h2>

      <div class="MostTopMember-border"></div>
      <div class="TopMember clearfix">
        <?php
        for($i=0; $i<=4; $i++){
           ?>
           <div class="LowMember">
            <div class="LowMemberImg">

                <img width="62" height="78" src="<?php echo base_url('front_assets') ?>/images/members/no_image.jpg"/>


                <br />
            </div>
            <span><strong>Name</strong></span>
            <br />
            <span class="brown-Fcolor">POST</span>
        </div>
        <?php }?>


    </div>

</div>
</div>
<style>
.LowMember{
   float: left;
   margin-left: 22px;
   margin-right: 63px;
   min-height: 175px;
   width: 100px;
}

.advisor .MostTopMember-border{
    margin: 20px 0 !important;
    width: 100% !important;
}

.advisor .LowMember{
  margin-bottom: -45px !important;
  margin-left: 0 !important;
  margin-right: 0 !important;
}

.member_list {
    float: left;
    padding-bottom: 20px;
    text-align: center;
    width: 950px;
    
}

.corporate_member .MostTopMember-border{
    width: 100% !important;
    margin: 0px !important;
}

.team_member{
    background-color: #fff;
}
.corporate_member {
    float: left;
    padding-right: 52px;
    width: 257px;
}

.corporate_member .title_2{
    padding-left: 26px;
    text-align: left;
}

.TopMember{
    padding-bottom: 0px !important;
}

.corporate_member .TopMember{
   float: left !important;
   padding-bottom: 0 !important;
   padding-left: 40px !important;
   padding-top: 10px !important;
   text-align: left !important;
   width: 100% !important;
}
.excutive {
    float: left;
    width: 100%;
}

</style>