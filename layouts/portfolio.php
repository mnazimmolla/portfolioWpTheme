<section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2><?php echo cs_get_option('portfolio_title');?></h2>
          <p><?php echo cs_get_option('portfolio_desc');?></p>
        </div>
      </div> 
    </div>
    <div class="container-fluid">
      <div class="row">
	  
		<?php 
		
			$port_secc = cs_get_option('portfolio_group');
			if(is_array($port_secc)){
			foreach($port_secc as $port_sec_key=>$po_se_it){ ?>
				
				<div class="col-sm-3">
				  <div class="folio-item wow <?php echo $po_se_it['animation_effect'];?>" data-wow-duration="1000ms" data-wow-delay="<?php echo $po_se_it['animation_delay'];?>ms">
					<div class="folio-image">
					  <img class="img-responsive" src="<?php echo $po_se_it['portfolio_image'];?>" alt="">
					</div>
					<div class="overlay">
					  <div class="overlay-content">
						<div class="overlay-text">
						  <div class="folio-info">
							<h3><?php echo $po_se_it['portfolio_item_title'];?></h3>
							<p><?php echo $po_se_it['portfolio_item_desc'];?></p>
						  </div>
						  <div class="folio-overview">
							<span class="folio-link"><a class="folio-read-more" href="<?php echo $po_se_it['portfolio_item_link'];?>" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
							<span class="folio-expand"><a href="<?php echo $po_se_it['portfolio_image'];?>" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				</div>
			
			<?php		
			} }
		?>
     
      </div>
    </div>
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
  </section><!--/#portfolio-->