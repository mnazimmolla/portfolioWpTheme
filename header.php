<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php echo cs_get_option('browser_title');?></title>
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  <link rel="shortcut icon" href="<?php echo cs_get_option('fav_icon');?>">
</head><!--/head-->
	<?php wp_head();?>
<body <?php body_class();?>>

  <!--.preloader
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  /.preloader-->

  <header id="home">
	
	
	 <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo home_url();?>">
            <h1><img class="img-responsive" src="<?php echo cs_get_option('main_logo');?>" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">  

			<?php if(!empty (cs_get_option('home_menu'))){ ?>
				<li class="scroll active"><a href="#home"><?php echo cs_get_option('home_menu');?></a></li>
			<?php } ?>
			
			<?php if(!empty (cs_get_option('service_menu'))){ ?>
				<li class="scroll"><a href="#services"><?php echo cs_get_option('service_menu');?></a></li> 
			<?php } ?>

			<?php if(!empty (cs_get_option('about_menu'))){ ?>
				<li class="scroll"><a href="#about-us"><?php echo cs_get_option('about_menu');?></a></li>  
			<?php } ?>
			
			<?php if(!empty (cs_get_option('port_menu'))){ ?>
				<li class="scroll"><a href="#portfolio"><?php echo cs_get_option('port_menu');?></a></li>
			<?php } ?>	
			
			<?php if(!empty (cs_get_option('team_menu'))){ ?>
				<li class="scroll"><a href="#team"><?php echo cs_get_option('team_menu');?></a></li>
			<?php } ?>	
			
			<?php if(!empty (cs_get_option('pricing_menu'))){ ?>
				<li class="scroll"><a href="#pricing"><?php echo cs_get_option('pricing_menu');?></a></li>
			<?php } ?>		
				
			<?php if(!empty (cs_get_option('blog_menu'))){ ?>	
				<li class="scroll"><a href="#blog"><?php echo cs_get_option('blog_menu');?></a></li>
			<?php } ?>	

			<?php if(!empty (cs_get_option('contact_menu'))){ ?>
				<li class="scroll"><a href="#contact"><?php echo cs_get_option('contact_menu');?></a></li>
			<?php } ?>		
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
	

   
  </header><!--/#home-->