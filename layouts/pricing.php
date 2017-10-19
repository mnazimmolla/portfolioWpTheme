<section id="pricing">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2><?php echo cs_get_option('pricing_title');?></h2>
          <p><?php echo cs_get_option('pricing_desc');?></p>
        </div>
      </div>
      <div class="pricing-table">
        <div class="row">
		
		
		<!-- Basic Part -->
          <div class="col-sm-3">
            <div class="single-table featured wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <h3><?php echo cs_get_option('basic_title');?></h3>
              <div class="price">
                <?php echo cs_get_option('basic_currency');?><?php echo cs_get_option('basic_price');?><span>/<?php echo cs_get_option('basic_duration');?></span>                                
              </div>
              <ul>
			  
				  <?php 
			
					$basic_item = cs_get_option('basic_group');
					if(is_array($basic_item)){
					foreach($basic_item as $basic_key=>$basic_value){ ?>
						
						<li><?php echo $basic_value['basic_item'];?></li>
					
					<?php					
					} }
				?>     
              </ul>
              <a href="<?php echo cs_get_option('basic_button_link');?>" class="btn btn-lg btn-primary"><?php echo cs_get_option('basic_button_text');?></a>
            </div>
          </div>
		  
		  <!-- Standard Part -->
          <div class="col-sm-3">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <h3><?php echo cs_get_option('standard_title');?></h3>
              <div class="price">
                <?php echo cs_get_option('standard_currency');?><?php echo cs_get_option('standard_price');?><span>/<?php echo cs_get_option('standard_duration');?></span>                                
              </div>
              <ul>
                
				 <?php 
					$standard_item = cs_get_option('standard_group');
					if(is_array($standard_item)){
					foreach($standard_item as $standard_key=>$standard_value){ ?>
						<li><?php echo $standard_value['standard_item'];?></li>
					<?php					
					} }
				?>
              </ul>
              <a href="<?php echo cs_get_option('standard_button_link');?>" class="btn btn-lg btn-primary"><?php echo cs_get_option('standard_button_text');?></a>
            </div>
          </div>
		  
		  
		  <!-- Featured Part -->
          <div class="col-sm-3">
            <div class="single-table featured wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <h3><?php echo cs_get_option('featured_title');?></h3>
              <div class="price">
                <?php echo cs_get_option('featured_currency');?><?php echo cs_get_option('featured_price');?><span>/<?php echo cs_get_option('featured_duration');?></span>                                
              </div>
              <ul>
					<?php 
					$featured_item = cs_get_option('featured_group');
					if(is_array($featured_item)){
					foreach($featured_item as $featured_key=>$featured_value){ ?>
						
						<li><?php echo $featured_value['featured_item'];?></li>
					
					<?php					
					} 
					}
				?>
              </ul>
              <a href="<?php echo cs_get_option('featured_button_link');?>" class="btn btn-lg btn-primary"><?php echo cs_get_option('featured_button_text');?></a>
            </div>
          </div>
		  
		    <!-- Professional Part -->
          <div class="col-sm-3">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <h3><?php echo cs_get_option('professional_title');?></h3>
              <div class="price">
                <?php echo cs_get_option('professional_currency');?><?php echo cs_get_option('professional_price');?><span>/<?php echo cs_get_option('professional_duration');?></span>                    
              </div>
              <ul>
				<?php 
				
					$professional_item = cs_get_option('professional_group');
					if(is_array($professional_item)){
					foreach($professional_item as $professional_key=>$professional_value){ ?>
						
						<li><?php echo $professional_value['professional_item'];?></li>
					
					<?php					
					} }
				?>	
              </ul>
              <a href="<?php echo cs_get_option('professional_button_link');?>" class="btn btn-lg btn-primary"><?php echo cs_get_option('professional_button_text');?></a>
            </div>
          </div>
		  
        </div>
      </div>
    </div>
  </section><!--/#pricing-->