<?php get_header();?>
<div id="single-portfolio">
	<div id="portfolio-details" class="container">
		<?php 
			while ( have_posts() ) : the_post(); ?>
			<img class="img-responsive" <?php the_post_thumbnail();?>
				<div class="row">
					<div class="col-sm-9">
						<div class="project-info">
							<h3><?php the_title();?></h3>
							<p><?php the_content();?></p>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="project-details">
							<h3>Project Details</h3>
							<p><span>Date:</span> <?php the_time('j M Y');?></p>
							<p><span>Tag:</span> <?php the_tags(' ', ' , ', ' ');?></p>
						</div>  
					</div>
				</div>
			<?php	
			endwhile;
		?>

	</div>
</div>
<?php get_footer();?>