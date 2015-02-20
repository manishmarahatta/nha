<div class="body_wrapper color_white InnerBodyWrapper" style="">
    <!-- left col-->
    <div class="about clearfix">
        <div class="InnerText">
            <div class="InnerTextTitle blue-Fcolor">
                <h1 class="title_1">Gallery</h1>
            </div>
            <div class="InnerTextBody">
                <?php
                if (count($all_events_gallery) != 0) {
                    foreach ($all_events_gallery as $all) {
                        ?>
                        <div class="gallery_detail">
                            <a href="<?php echo site_url('/uploads/events_management/' . $all->image) ?>" class="group1">
                                <img width="210px" height="180px" src="<?php echo site_url('/uploads/events_management/' . $all->image) ?>"/>
                            </a>
                        </div>
                    <?php
                    }
                } else {
                    echo "NO Events Image Found";
                }
                ?>
            </div>
        </div>
        <div class="clear"></div>         
    </div>
</div>
<div class="clear"></div>

<script>
    $(document).ready(function(){
        $(".group1").colorbox({rel:'group1',slideshow:true,width:"75%", height:"75%"});
    
    
       
    
    
    });
</script>