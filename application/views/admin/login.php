<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
 
	
<!-- Mirrored from demo.ponjoh.com/Simpla-Admin/login.html by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 10 Nov 2011 08:11:55 GMT -->
<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		
		<title><?=SITE_NAME;?> Login</title>
		
		<!--                       CSS                       -->
	  
		<!-- Reset Stylesheet -->
		<link rel="stylesheet" href="<?=base_url();?>resources/css/reset.css" type="text/css" media="screen" />
	  
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="<?=base_url();?>resources/css/style.css" type="text/css" media="screen" />
		
		<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
		<link rel="stylesheet" href="<?=base_url();?>resources/css/invalid.css" type="text/css" media="screen" />	
		
		<!-- Colour Schemes
	  
		Default colour scheme is green. Uncomment prefered stylesheet to use it.
		
		<link rel="stylesheet" href="<?=base_url();?>resources/css/blue.css" type="text/css" media="screen" />
		
		<link rel="stylesheet" href="<?=base_url();?>resources/css/red.css" type="text/css" media="screen" />  
	 
		-->
		
		<!-- Internet Explorer Fixes Stylesheet -->
		
		<!--[if lte IE 7]>
			<link rel="stylesheet" href="<?=base_url();?>resources/css/ie.css" type="text/css" media="screen" />
		<![endif]-->
		
		<!--                       Javascripts                       -->
	  
		<!-- jQuery -->
		<script type="text/javascript" src="<?=base_url();?>resources/scripts/jquery-1.3.2.min.js"></script>
		
		<!-- jQuery Configuration -->
		<script type="text/javascript" src="<?=base_url();?>resources/scripts/simpla.jquery.configuration.js"></script>
		
		<!-- Facebox jQuery Plugin -->
		<script type="text/javascript" src="<?=base_url();?>resources/scripts/facebox.js"></script>
		
		<!-- jQuery WYSIWYG Plugin -->
		<script type="text/javascript" src="<?=base_url();?>resources/scripts/jquery.wysiwyg.js"></script>
		
		<!-- Internet Explorer .png-fix -->
		
		<!--[if IE 6]>
			<script type="text/javascript" src="<?=base_url();?>resources/scripts/DD_belatedPNG_0.0.7a.js"></script>
			<script type="text/javascript">
				DD_belatedPNG.fix('.png_bg, img, li');
			</script>
		<![endif]-->
		
	</head>
  
	<body id="login">
		
		<div id="login-wrapper" class="png_bg">
			<div id="login-top">
			
				<h1>Simpla Admin</h1>
				<!-- Logo (221px width) -->
                                <img src="<?php echo admin_image_url();?>rosehill-logo_1.png">
			</div> <!-- End #logn-top -->
			<?php $this->load->view($main);?>
			 <!-- End #login-content -->
			
		</div> <!-- End #login-wrapper -->
		
  </body>
<style>
    #remember-password a:hover{
        color:#fff !important;
    }
</style>
<!-- Mirrored from demo.ponjoh.com/Simpla-Admin/login.html by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 10 Nov 2011 08:12:03 GMT -->
</html>
