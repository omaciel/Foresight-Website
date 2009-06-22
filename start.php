<?php
/*
Template Name: start page
*/
?>
<?php get_header();?>
	
		<div id="important_info">
			<div id="about_foresight_linux" class="grid_3 first_info">
				<h3>About <span>Foresight Linux</span></h3>
					<p><?php $about=page_excerpt("About Foresight Linux"); echo"$about";?></p>

					<p class="read_more"><a href="<?php bloginfo('url');?>/about-foresight-linux/" class="menu">read more</a></p>
			</div><!--end about foresight linux-->
			
			<div id="list_of_apps" class="grid_3 first_info">
				<h3>List <span>of featured apps</span></h3>
					<?php $list=page_excerpt("List of apps"); echo"$list";?>
					

					<p class="read_more"><a href="<?php bloginfo('url');?>/list-of-apps/" class="menu">read more</a></p>
			</div><!--end list of apps-->
			
			<div id="choose_your_version" class="grid_3 first_info">
				<h3>Choose <span>your version</span></h3>
					<?php $version=page_excerpt("Choose your version"); echo"$version";?>
					
				<p class="read_more"><a href="<?php bloginfo('url');?>/choose-your-version/" class="menu">read more</a></p>
			</div><!--end choose your version-->
			
			<div id="latest_news" class="grid_3 first_info">
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
			
			<div id="security_updates" class="grid_3 first_info">
				<h3>Security<span>updates</span></h3>
					<?php $posts = get_posts( "category_name=security&numberposts=5" ); ?>
					<?php if( $posts ) : ?>	  					 
					<ul>
					<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
											  
					<li><span class="date"><?php the_time('F j'); ?></span> <a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
					</li>
											  
					 <?php endforeach; ?>
					 </ul>
					<?php endif; ?>
			</div><!--end security updates-->
		</div><!--important_info"-->

<?php get_footer();?>
