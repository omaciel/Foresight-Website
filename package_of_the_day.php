<?php
/*
Template Name:Package
*/
?>
<?php get_header();?>
				
		<div id="page" class="grid_12">
			<ul id="content_list">
				<?php query_posts("category_name=Package Review");?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<li class="content_item spacer">
						<h2 class="storytitle">
						<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
						</h2>
						<p class="credits">
							<span class="date">
								<?php the_time('d/m/y'); ?>
							</span>
							 
						</p><!--end credits-->
						
						<div class="storycontent">
							<?php the_excerpt();?>
						</div><!-- end storycontent-->
						
					</li>
				<!--conteudo do loop-->
				<?php comments_template(); // Get wp-comments.php template ?>
	
				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
			</ul>
			
		</div><!--end page-->
		
		<div class="grid_4">
				<?php get_sidebar();?>
		</div><!--end sidebar2-->


		
		
<?php get_footer();?>
