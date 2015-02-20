<div id="login-content">

    <form action="<?= site_url(ADMIN_PATH . '/login/process'); ?>" method="post">
        <?php if ($this->session->flashdata('msg') != '') { ?>
            <div class="notification information png_bg">
                <div>

                    <?php echo $this->session->flashdata('msg');
                    ?>
                </div>
            </div>
        <?php }
        ?>

        <p>
            <label>Username</label>
            <input class="text-input" type="text" name="username" />
        </p>
        <div class="clear"></div>
        <p>
            <label>Password</label>
            <input class="text-input" type="password"  name="password"/>
        </p>
        <div class="clear"></div>
<!--					<p id="remember-password">
                <input type="checkbox" />Remember me
        </p>-->
        <div class="clear"></div>
        <p>
            <input class="button" type="submit" value="Sign In" />
        </p>
<!--        <p id="remember-password">
            <a href="<?= admin_url('login/forgot_password'); ?>">Forgot Password</a>
        </p>
-->
    </form>
</div>