<div id="login-content">
				
				<form action="<?=site_url(ADMIN_PATH.'/login/send_forgot_email');?>" method="post">
				<?php  
                                if($this->session->flashdata('msg')!=''){?>
				<div class="notification information png_bg">
						<div>
				
                                   <?php  echo $this->session->flashdata('msg');
                                ?>
						</div>
				</div>
                                    <?php }
        ?>
                                    <h6 style="color:#fff; margin-left:130px;">Enter Your Email</h6>
					
						
						<input class="text-input" type="text" name="email"  style="margin-bottom: 8px;"/>
					
					
					
					

					<div class="clear"></div>
					
						<input class="button" type="submit" value="Retrive Login" style="width:80px; margin-right:65px;" />
					
                                     
				</form>
			</div>