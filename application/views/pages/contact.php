<div class="body_wrapper color_white InnerBodyWrapper" style="">
    <!-- left col-->
    <div class="about clearfix">
        <div class="InnerText">
            <div class="InnerTextTitle blue-Fcolor">
                <h1 class="title_1">Contact Us</h1>
            </div>
            <div class="InnerTextBody">
                <div class="ContactWrapper">
                    <div class="ContactCol col1 left">
                        <div class="ContactCol" style="margin-bottom: 10px;">
                            <div class="QuickLinkTitle slider-bgcolor">
                                <h2 class="title_3">Our Address</h2>
                            </div>


                            <div class="title_4 QuickLinktext">
                                <h2 class="title_3"><strong>Nepal Hydropower Association </strong></h2>
                                <?php if (count($get_contact) == 0 || $get_contact->detail == '') {
                                    ?>
                                    
                                    <?php
                                } else {
                                    echo $get_contact->detail;
                                }
                                ?>

                            </div>

                        </div>
                        <div class="QuickLinkTitle slider-bgcolor">
                            <h2 class="title_3">Quick Contact/Feedback</h2>
                        </div>

                        <form  class="ContactForm" action="<?php echo base_url() .'contact/send_message' ?>"   method="post">
                            <div class="input-div">
                                <label>Name:</label>
                                <input Placeholder="Name" class="name" name="name" value="<?php echo set_value('name') ?>" />
                                <span><?php echo form_error('name'); ?></span>
                                <div class="clear"></div>
                            </div>
                            <div class="input-div">
                                <label>E-Mail:</label>
                                <input  Placeholder=" E-mail" class="email" value="<?php echo set_value('email') ?>" name="email" />
                                <span><?php echo form_error('email'); ?></span>           
                                <div class="clear"></div>
                            </div>

                            <div class="input-div">
                                <label>Phone:</label>
                                <input Placeholder=" Phone No." class="phone" name="phone" value="<?php echo set_value('phone') ?>" />
                                <span><?php echo form_error('phone'); ?></span>
                                <div class="clear"></div>
                            </div>
                            <div class="input-div">
                                <label >Message:</label>
                                <textarea  Placeholder="Please type your valuable Message "  class="comment" name="message" ><?php echo set_value('message') ?></textarea>
                                <span><?php echo form_error('message'); ?></span>
                                <div class="clear"></div>
                            </div>



                            <div class="contact-button"><label>&nbsp;</label>
                                &nbsp;<input class="contact-button color_blu-light1 white-Fcolor" type="submit"  value="Send" />

                            </div>
                        </form>

                        <h3 style="font-size:14px;font-weight:bold;"><?php echo $this->session->flashdata('msg') ;?></h3>

                    </div>    
                    <div style="width: 65%;float: left">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7066.791085361532!2d85.313845!3d27.674167250000018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1394818050479" width="600" height="450" frameborder="0" style="border:0"></iframe>
                    </div>




                </div>





            </div>

        </div>
        <div class="clear"></div>         
    </div>
    <!-- right col-->

    <div class="clear"></div>
</div>

<style>
.input-div > span {
    color: red;
    float: left;
    margin-left: 90px;
    margin-top: -15px;
}

</style>