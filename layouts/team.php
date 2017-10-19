<section id="team">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2><?php echo cs_get_option('team_heading');?></h2>
          <p><?php echo cs_get_option('team_desc');?></p>
        </div>
      </div>
      <div class="team-members">
        <div class="row">
		
			<?php 
			
				$team_gro = cs_get_option('team_group');
				if(is_array($team_gro)){
				foreach($team_gro as $team_gro_key=>$team_value){ ?>
					
					<div class="col-sm-3">
						<div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="<?php echo $team_value['t_ani_delay'];?>ms">
						  <div class="member-image">
							<img class="img-responsive" src="<?php echo $team_value['t_Member_image'];?>" alt="">
						  </div>
						  <div class="member-info">
							<h3><?php echo $team_value['t_Member_name'];?></h3>
							<h4><?php echo $team_value['t_Member_desig'];?></h4>
							<p><?php echo $team_value['t_Member_desc'];?></p>
						  </div>
						  <div class="social-icons">
							<ul>
							  <li><a class="facebook" href="<?php echo $team_value['t_member_fb'];?>"><i class="fa fa-facebook"></i></a></li>
							  <li><a class="twitter" href="<?php echo $team_value['t_member_twitter'];?>"><i class="fa fa-twitter"></i></a></li>
							  <li><a class="linkedin" href="<?php echo $team_value['t_member_li_in'];?>"><i class="fa fa-linkedin"></i></a></li>
							  <li><a class="dribbble" href="<?php echo $team_value['t_member_dribble'];?>"><i class="fa fa-dribbble"></i></a></li>
							  <li><a class="rss" href="<?php echo $team_value['t_member_rss'];?>"><i class="fa fa-rss"></i></a></li>
							</ul>
						  </div>
						</div>
					</div>
				<?php	
				} }
			?>
         
        </div>
      </div>            
    </div>
  </section><!--/#team-->