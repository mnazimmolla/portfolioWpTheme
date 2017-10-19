<footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="<?php home_url();?>"><img class="img-responsive" src="<?php echo cs_get_option('footer_logo');?>" alt=""></a>
        </div>
        <div class="social-icons">
          <ul>
		  
			<?php 
			
				$social_media = cs_get_option('footer_social_media');
				if(is_array($social_media)){
					foreach($social_media as $social_key=>$social_value){ ?>
						<li><a class="envelope" href="<?php echo  $social_value['social_link'];?>"><i class="<?php echo  $social_value['social_icon'];?>"></i></a></li>
					<?php	
					}
				}
			?>
            
            
			
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; 2017 Portfolio Theme.</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Crafted by <a href="http://www.iamnazim.com">Moh Nazim Uddin Leo</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

<!--   <script type="text/javascript" src=""></script>
  <script type="text/javascript" src="js/"></script>
  <script type="text/javascript" src=""></script>
  <script type="text/javascript" src=""></script>
  <script type="text/javascript" src="js/"></script>
  <script type="text/javascript" src="js/"></script>
  <script type="text/javascript" src="js/"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/"></script>
  <script type="text/javascript" src="js/"></script> -->
	<?php wp_footer();?>
</body>
</html>