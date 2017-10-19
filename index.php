
	<?php get_header();?>
	
	
	<?php 
	
		$apex_sort_section = cs_get_option('apex_sort');
		if(is_array($apex_sort_section)){
			foreach($apex_sort_section['enabled'] as $apex_key=>$apex_value){
				
			
			switch($apex_key){

				case 'slider'  : get_template_part('layouts/slider');
				break;
				
				case 'service' : get_template_part('layouts/service');
				break;
				
				case 'about' : get_template_part('layouts/about');
				break;
				
				case 'portfolio' : get_template_part('layouts/portfolio');
				break;
				
				case 'team' : get_template_part('layouts/team');
				break;
				
				case 'freature' : get_template_part('layouts/freature');
				break;
				
				case 'pricing' : get_template_part('layouts/pricing');
				break;
				
				case 'twitter' : get_template_part('layouts/twitter');
				break;
				
				case 'blog' : get_template_part('layouts/blog');
				break;
				
				case 'contact' : get_template_part('layouts/contact');
				break;
				
				}
				
			}
		}
	?>
	
	
	<?php get_footer();?>