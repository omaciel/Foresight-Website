<?php get_header();?>

		
	<div id="page" class="grid_12">
	<img src="<?php bloginfo('template_directory'); ?>/img/foresight_404_700x567.png" alt="image" width="700" height="567" alt="404 error" />
	
	<div id="error_404">
	<h2>Error 404 - Not Found</h2>
	
	</div>
	</div><!--end page-->
		
		<div class="grid_4" id="sidebar">
			<?php /*if (is_page("about"))
					dynamic_sidebar('about');
				elseif (is_page('get-foresight'))
					dynamic_sidebar('get-foresight');
				elseif (is_page('community'))
					dynamic_sidebar('community');
				elseif (is_page('news'))
					dynamic_sidebar('news');
				elseif (is_page('contact'))
					dynamic_sidebar('contact');
				elseif (is_page('get-help'))
					dynamic_sidebar('get-help');
				else
					get_sidebar();*/?>
					
					<?php get_sidebar();?>
		</div><!--end sidebar2-->


		
		
<?php get_footer();?>