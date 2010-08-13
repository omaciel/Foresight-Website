<?php
/*
Template Name: start page
*/
?>
<?php get_header();?>
	
		<div id="important_info">
			<div id="about_foresight_linux" class="grid_4 first_info alpha">
				<h3>About <span>Foresight Linux</span></h3>
					<p><?php $about=page_excerpt("About Foresight Linux"); echo"$about";?></p>

					<p class="read_more"><a href="<?php bloginfo('url');?>/about/" class="menu">read more</a></p>
			</div><!--end about foresight linux-->
			
			<div id="list_of_apps" class="grid_4 first_info">
				<h3>List <span>of featured apps</span></h3>
					<?php $list=page_excerpt("List of apps"); echo"$list";?>
					

					<p class="read_more"><a href="<?php bloginfo('url');?>/list-of-apps/" class="menu">read more</a></p>
			</div><!--end list of apps-->
			
			<div id="choose_your_version" class="grid_4 first_info">
				<h3>Choose <span>your version</span></h3>
					<?php $version=page_excerpt("Get Foresight Linux"); echo"$version";?>
					
				<p class="read_more"><a href="<?php bloginfo('url');?>/download/" class="menu">read more</a></p>
			</div><!--end choose your version-->
			
			<div id="latest_news" class="grid_4 first_info omega">
				<h3>Latest <span>news</span></h3>
					<?php query_posts("category_name=-Security Updates");?>
					<?php $posts = get_posts( "category_name=news&numberposts=1" ); ?>
					<?php if( $posts ) : ?>	  					 
					<ul>
					<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
											  
					<li><span class="date"><?php the_time('F j'); ?></span> <a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
					<?php the_excerpt();?>
					<p class="read_more"><a href="<?php the_permalink() ?>">read more</a></p>
					</li>
											  
					 <?php endforeach; ?>
					 </ul>
					<?php endif; ?>
			</div><!--end latest news-->
			
			
		</div><!--important_info"-->

<?php get_footer();?>
