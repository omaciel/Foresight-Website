<?php get_header();?>

		
	<div id="page" class="grid_12">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h2 class="storytitle">
	<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
	</h2>
						
	<div class="storycontent">
	<?php the_content(__('<p class="more">Leia Mais.</p>'));?>
	
	</div><!-- end storycontent-->	
	
	<!--conteudo do loop-->
	
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
	</ul>
	</div><!--end page-->
		
		<div class="grid_4" id="sidebar">
					<?php get_sidebar();?>
		</div><!--end sidebar2-->


		
		
<?php get_footer();?>