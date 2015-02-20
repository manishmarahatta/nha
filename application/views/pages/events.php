<div class="body_wrapper color_white InnerBodyWrapper" style="">
    <!-- left col-->
    <div class="about clearfix" style="width:70%;">
        <div class="InnerText">
            <div class="InnerTextTitle blue-Fcolor">
                <h1 class="title_1">Events</h1>
            </div>
            <div class="InnerTextBody">
                <?php
                if (count($all_events) != 0) {

                    foreach ($all_events as $all) {
                        ?>
                        <div class="event_text" id="<?php echo $all->id; ?>">
                            <h3><?php echo  $all->title; ?></h3>
                            <?php echo $all->description; ?>

                            <div class="event_image">
                                <?php
                                $event_gallery = $this->db->get_where('events_gallery', array('event_name' => $all->id))->result();
                                foreach ($event_gallery as $event) {
                                    ?>
                                    <img src="<?php echo base_url('uploads/events_management/' . $event->image) ?>"/>
                                    <?php } ?>

                                </div>
                            </div>


                            <div class="clear"></div>         

                            <?php

                        }
                    } else {
                        echo '<p>No Events Found</p>';
                    }
                    ?>


                </div>
            </div>

        </div>
        <!-- right col-->
        <div class="about clearfix" style="width:25%;float:right">
            <div class="InnerText">
                <div class="InnerTextTitle blue-Fcolor">
                    <h1 class="title_1">Upcomming Events</h1>
                </div>
                <div class="InnerTextBody">
                     <?php
                if (count($upcomming_events) != 0) {

                    foreach ($upcomming_events as $all) {
                        ?>
                        <p><a href="#"><?php echo $all->title; ?></a></p>
                        <?php } }?>
                </div>
            </div>
        </div>

    </div>

    <style>

    .event_text{
        float: left;
        width: 100%;
        height: auto;
    }
    .event_text h3{
        font-size: 21px;
        margin-bottom: 5px;
    }

    .event_image{
       float: left;
       height: auto;
       margin-bottom: 50px;
       margin-top: 0px;
       width: 100%;
   }

   .event_image > img {
    float: left;
    height: 190px;
    padding-left: 7px;
    width: 240px;
}

</style>