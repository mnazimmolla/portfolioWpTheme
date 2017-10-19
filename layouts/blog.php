<section id="blog">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Blog Posts</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
        </div>
      </div>
      <div class="blog-posts">
        <div class="row">
		
			<?php 
			
				query_posts(array(
					'post_type'=>'post'
				));
			if(have_posts()): while(have_posts()): the_post();
			?>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="800ms">
            <div class="post-thumb">
              <a href="<?php the_permalink();?>"><img class="img-responsive" <?php the_post_thumbnail();?></a> 
            
              <div class="post-icon">
                <i class="fa fa-pencil"></i>
              </div>
            </div>
            <div class="entry-header">
              <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
              <span class="date"><?php the_time('M j Y');?></span>
              <span class="cetagory">in <strong><?php echo the_tags(' ', ' ', ' ' );?></strong></span>
            </div>
            <div class="entry-content">
              <p><?php echo wp_trim_words(get_the_content(), 20);?></p>
            </div>
          </div>   
		
		<?php endwhile; endif;?>
		  
        </div>
        <div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
          <a href="#" class="btn-loadmore"><i class="fa fa-repeat"></i> Load More</a>
        </div>                
      </div>
    </div>
  </section><!--/#blog-->