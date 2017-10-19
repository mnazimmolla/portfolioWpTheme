	<!-- Slider Start-->
	
	
	 <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
	  
		<?php 
			$slider = cs_get_option('slider_items');
			$i = 0;
			if(is_array($slider)){
				foreach($slider as $slider_key => $value){ ?>
				
				 <div class="item <?php 
					if($i){
						echo ' ';
					}else{
						echo 'active';
					}
				 ?>" style="background-image: url(<?php echo esc_url(wp_get_attachment_image_src( $value['slider_item_image'], 'full')[0]); ?>)">
				  <div class="caption">
					<h1 class="animated fadeInLeftBig"><?php echo $value['slider_item_text']; ?> <span><?php echo $value['slider_item_highlight_text']; ?></span></h1>
					<p class="animated fadeInRightBig"><?php echo $value['slider_item_subtext']; ?></p>
					<a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
				  </div>
				</div>
				
				<?php	$i = 1;	
				}
			}
		?>

      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
	
	
	<!-- Slider Ends-->