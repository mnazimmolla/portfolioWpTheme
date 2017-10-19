 <section id="about-us" class="parallax" style="background-image:url(<?php echo cs_get_option('about_parallax');?>);">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2><?php echo cs_get_option('about_title');?></h2>
            <p><?php echo cs_get_option('about_desc_first');?></p>
            <p><?php echo cs_get_option('about_desc_sec');?></p>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
		  
			<?php 
			
				$about_group = cs_get_option('about_group');
				foreach($about_group as $about_group_key=>$about_group_value){ ?>
					
					<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
					  <p class="lead"><?php echo $about_group_value['about_gro_title'];?></p>
					  <div class="progress">
						<div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="<?php echo $about_group_value['about_gro_percent'];?>"><?php echo $about_group_value['about_gro_percent'];?>%</div>
					  </div>
					</div>
            
				<?php	
				}
			?>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#about-us-->