<script type="text/javascript">
    $(document).ready(function(){
        
        $('.third').click(function(){
            $(this).find('ul li a').css('color','#59a200');
            $(this).find('ul').slideToggle(1000);
        });
    });
    
</script>
 

<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->

    

        <!-- Logo (221px wide) -->
        <a href="#" style="font-size:50px; margin: 7px ; float:left;"><img width="206px" src="<?php echo admin_image_url();?>/rosehill-logo_1.png"></a>
        <div class="clear"></div>
        <!-- Sidebar Profile links -->
        <div id="profile-links">
            Hello, <a href="#" title="Edit your profile"> <?= $this->session->userdata('admin_user_name'); ?></a>, Welcome to  <a href="#messages" rel="" title="3 Messages">Admin Panel</a><br />
            <br />
            <a href="<?php echo base_url() ?>" target="<?php echo base_url() ?>" title="View the Site">View the Site</a> | 
            <a href="<?= site_url(ADMIN_PATH . '/login/logout'); ?>" title="Sign Out">Sign Out</a>
        </div>        

        <ul class="sf-menu">  <!-- Accordion Menu -->

            
            <li class="">
                <a href="<?= site_url(ADMIN_PATH); ?>/banner_management" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
                    Banner Management
                </a>       
            </li>
            <li class="">
                <a href="<?= site_url(ADMIN_PATH); ?>/team_management" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
                    Team Member Management
                </a>       
            </li>
            <li class="">
                <a href="<?= site_url(ADMIN_PATH); ?>/events_management" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
                    Events Management
                </a>       
            </li>
            <li class="">
                <a href="<?= site_url(ADMIN_PATH); ?>/event_gallery" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
                    Events Gallery
                </a>       
            </li>
            <li class="">
                <a href="<?= site_url(ADMIN_PATH); ?>/content_management" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
                    Content Management
                </a>       
            </li>
            <li class="">
                <a href="<?= site_url(ADMIN_PATH); ?>/downloads" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
                    Downloads
                </a>       
            </li>
            <li class="">
                <a href="<?= site_url(ADMIN_PATH); ?>/contact_us" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
                    Contact Us
                </a>       
            </li>
            
            
        </ul> <!-- End #main-nav -->

        
    </div>
</div>


 