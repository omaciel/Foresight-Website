<?php get_header();?>
	
	<div id="page" class="grid_12">
	<img src="<?php bloginfo('template_directory'); ?>/img/foresight_404_700x270.png" alt="image" width="700" height="270" alt="404 error" />
	
	
	
	<div id="error_404">
		
	 <?php query_posts('pagename=404');    
	global $more;
	// set $more to 0 in order to only get the first part of the post
	$more = 0; 
	
	// the Loop
	while (have_posts()) : the_post(); 
	  // the content of the post
	  the_content('Read the full post »'); 
	endwhile;
	?>


	</div><!--end error_404-->
			
			<img src="<?php bloginfo('template_directory'); ?>/img/foresight_404_arrow_699x265.png" alt="image" width="699" height="265" />
			</div><!--end page-->
		
		<div class="grid_4" id="sidebar">	
					<?php get_sidebar();?>
		</div><!--end sidebar2-->


		
		
<?php get_footer();?>