
  <section id="services">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2><?php echo cs_get_option('ser_title');?></h2>
            <p><?php echo cs_get_option('ser_desc');?></p>
          </div>
        </div> 
      </div>
      <div class="text-center our-services">
        <div class="row">
		
			<?php 
			
				$first_row = cs_get_option('ser_group');
				if(is_array($first_row)){
				foreach($first_row as $first_row_key=>$first_row_value){ ?>
					
					<div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
						<div class="service-icon">
						  <i class="<?php echo $first_row_value['ser_gro_title']?>"></i>
						</div>
						<div class="service-info">
						  <h3><?php echo $first_row_value['ser_gro_icon']?></h3>
						  <p><?php echo $first_row_value['ser_gro_desc']?></p>
						</div>
					</div>
				<?php	
				} }
				
			?>
          
          <?php 
		  
			$second_row = cs_get_option('ser_group_s');
			if(is_array($second_row)){
			foreach($second_row as $second_row_key=>$second_row_value){ ?>
				
				<div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
					<div class="service-icon">
					  <i class="<?php echo $second_row_value['ser_gro_title'];?>"></i>
					</div>
					<div class="service-info">
					  <h3><?php echo $second_row_value['ser_gro_icon'];?></h3>
					  <p><?php echo $second_row_value['ser_gro_desc'];?></p>
					</div>
				</div>
			<?php 	
			} }
		  
		  ?>
          
          
        
       
        </div>
      </div>
    </div>
  </section><!--/#services-->