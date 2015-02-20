

<!-- welcome part-->
<div class="body_wrapper" style="margin-top: 30px;">
    <!-- left col-->
    <div class="WelRightCol clearfix">
        <div class="welcome">

            <div class="WelcomeText">
                <h1 class="title_1 blue-Fcolor">
                    NEPAL HYDROPOWER ASSOCIATION
                </h1>
                <?php echo word_limiter($background->description, 110); ?>
                <p><a href="<?php echo base_url('about_us') ?>">Read More-></a></p>
            </div>

            

            <div class="clear">
            </div>
        </div>
        <!--objective-->

        <div class="clear"></div>

        <!-- slide gallery-->

    </div>
    <div style="width:60%; float:left;margin-bottom:20px;" class="WelcomeText">
        <h1 class="title_1 blue-Fcolor">
            Upcomming Events
        </h1>

        <ul>
          <?php foreach($upcomming_events as $upcomming){?>
          <li style="list-style: none; margin-left: 6px; border-bottom: 1px solid #ccc;"><?php echo $upcomming->title; ?></li>
          <?php } ?>
      </ul>

  </div>
  <div style="width:30%; float:right;margin-bottom:20px;" class="WelcomeText">
    <h1 class="title_1 blue-Fcolor">
        Download Broucher
    </h1>
    <p>Please click image below to see and download our pdf broucher.<p>
        <a href="<?php echo site_url().'home/downloads' ?>"><img style="height: 60px;" src="<?php echo base_url().'/front_assets/images/pdf_small.png' ?>"/></a>

    </div>

    <!-- right col-->
<!--    <div class="rightnews_col left">
        <div class="sld_right_newslisting">
            <div class="col_right_newslisting white-Fcolor">
                <img class="left" src="<?php echo base_url('front_assets') ?>/images/members/pp2.jpg"/>
                <div class="msg" >
                    <span>
                        <strong>
                            Message From President,
                            <br/>
                            Dr. Ing Meg B. Bishwakarma
                        </strong>
                    </span>
                </div>
            </div>
            <div class="msg_content">
                Hello, this is most important message of vice president.
                Hello, this is most important message of vice president.
                Hello, this is most important message of vice president.
                Hello, this is most important message of vice president.
                Hello, this is most important message of vice president.
                Hello, this is most important message of vice president.
                Hello, this is most important message of vice president.
                Hello, this is most important message of vice president.
                Hello, this is most important message of vice president.
                <p><strong>Thanks,</strong></p>
            </div>

        </div>
    </div>-->
    <div class="latest_news">

        <h1 class="title_1 blue-Fcolor">
            Latest Events
        </h1>

        <?php foreach ($all_events as $events) { ?>
        <div class="newslist" id="<?php echo $events->id ?>">
            <?php $img = $this->db->where('event_name', $events->id)->get('events_gallery')->row();
            if (count($img) != 0) { ?>
            <img width="36" height="36" class="left" src="<?php echo base_url('uploads/events_management/' . $img->image) ?>" />
            <?php } else { ?>
            <img class="left" src="<?php echo base_url('front_assets') ?>/images/thumb.jpg" />
            <?php }
            ?>


            <div class="title_3 left newslistingText" >
                <span>
                    <a href="<?php echo base_url('events/#'.$events->id) ?>">	
                        <?php echo $events->title; ?>
                    </a>
                </span>
                <br />
    <!--                    <span>
                        Posted On: 2013/01/01
                    </span>-->
                </div>
            </div>
            <?php } ?>
            <a href="<?php echo base_url('events') ?>">See all</a>
        </div>

        <div class="latest_upload">
            <div class="WelcomeText">
                <h1 class="title_1 blue-Fcolor">
                    Latest Photo's
                </h1>
                <?php foreach ($gallery as $g) { ?>
                <img height="175px" width="200px" src="<?php echo base_url('uploads/events_management/'.$g->image) ?>"/>
                <?php } ?>

            </div>
            <div class="button" style="float: left;margin-left: 13px;margin-top: 13px;margin-bottom: 0px;">
                <a class="white-Fcolor btn_blue" href="<?php echo base_url('gallery') ?>">
                    <span class="btn_bdr bdr_left"></span>
                    <span class="btn_back">See More</span>
                    <span class="btn_bdr bdr_right"></span>
                </a>

            </div>
        </div>





    </div>	

    <style>
    .newslist:nth-child(2) a{
      animation: blink 1s steps(5, start) infinite;
      -webkit-animation: blink 1s steps(5, start) infinite;
      -moz-animation:blink 1s steps(5, start) infinite;
  }
  @keyframes blink {
      to { visibility: hidden; }
  }
  @-webkit-keyframes blink {
      to { visibility: hidden; }
  }
  </style>