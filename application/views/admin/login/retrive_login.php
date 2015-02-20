<div id="login-content">

    <form action="<?= site_url(ADMIN_PATH . '/login/check_hash'); ?>" method="post">
        <?php if ($this->session->flashdata('msg') != '') { ?>
            <div class="notification information png_bg">
                <div>

                    <?php echo $this->session->flashdata('msg');
                    ?>
                </div>
            </div>
        <?php }
        ?>

      
            <label style="width:200px; padding: 5px;">Enter Your Access Code Here:</label>
            <input class="text-input" type="text" name="username"  style="float:left"/>
       
        <div class="clear"></div>
       
        <p>
            <input class="button" type="submit" value="Sign In"  style="float:left; margin-left: 68px; margin-top: -10px;"/>
        </p>
        
    </form>
</div>