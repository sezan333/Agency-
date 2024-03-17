
<!DOCTYPE html> 
<html <?php language_attributes(); ?>>
   <head>
   <meta charset="<?php bloginfo('charset'); ?>">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Title -->
      <title><?php bloginfo('name'); ?></title>
      <?php wp_head();?>
   </head>
   <body <?php body_class(); ?>>
	   <section class="header-top">
     			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="header-left">
							<a href=""><i class="fa fa-phone"></i>info@gmail.com</a>
							<a href=""><i class="fa fa-phone"></i> 23457689</a>
               
						</div>
                 
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="header-social">
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-youtube"></i></a>
							<a href=""><i class="fa fa-linkedin"></i></a>
							<a href=""><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
				</div>
			</div>
	   </section>
      <!-- Header Area Start -->
      <header class="header header-fixed">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <nav class="navbar navbar-expand-md navbar-light">
                    <!-- custom logo and site/title-->
                    <?php
                     if(has_custom_logo()){
                        the_custom_logo();
                       }else{
                       ?>
                       <a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>
                    <?php } ?>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse ml-auto mainmenu" id="navbarNav">
                      <?php 
                      wp_nav_menu(array(
                        'theme_location'=> __('header-menu'),
                        'container_class' => ('collapse navbar-collapse ml-auto mainmenu'), //div class.
                        'menu_class'    => ('navbar-nav ml-auto'), //ul class.
                      ));
                      
                      ?>
                     
                        <!--
                          <ul class="navbar-nav ml-auto">
                           <li><a href="index.html">Home</a></li>
                           <li><a href="about.html">About</a></li>
                           <li><a href="services.html">Services</a></li>
                           <li><a href="portfolio.html">Portfolio</a></li>
                           <li><a href="gallery.html">Gallery</a></li>
                           <li><a href="blog.html">Blog</a></li>
                           <li><a href="contact.html">Contact</a></li>
                         </ul>
                          -->
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </header>
      <!-- Header Area Start -->