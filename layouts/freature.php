<section id="features" class="parallax" style="background-image:url(<?php echo cs_get_option('f_bg_image');?>);">
		<div class="container">
		  <div class="row count">
			<?php 
			
				$fea_cou = cs_get_option('fea_cou_group');
				foreach($fea_cou as $fea_key=>$fea_value){ ?>
					
					<div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="<?php echo $fea_value['f_cou_ani_delay'];?>ms">
					  <i class="<?php echo $fea_value['f_cou_icon']; ?>"></i>
					  <h3 class="timer"><?php echo $fea_value['f_cou_numb']; ?></h3>
					  <p><?php echo $fea_value['f_cou_title']; ?></p>
					</div>
				<?php	
				}
			
			?>             
		  </div>
		</div>
  </section><!--/#features-->