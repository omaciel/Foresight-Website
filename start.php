<?php
/*
Template Name: start page
*/
?>
<?php get_header();?>
	
		<div id="important_info">
			<div id="about_foresight_linux" class="grid_3 first_info">
				<h3>About <span>Foresight Linux</span></h3>
					<p>Foresight is a desktop operating system featuring an intuitive user interface and a showcase of the latest desktop software, giving users convenient and enjoyable access to their music, photos, videos, documents, and Internet resources.</p>

					<p>As a Linux distribution, Foresight sets itself apart by eliminating the need for the user to be familiar with Linux, combining a user-focused desktop environment on top of Conary...</p>

					<p class="read_more"><a href="<?php bloginfo('url');?>/about/" class="menu">read more</a></p>
			</div><!--end about foresight linux-->
			
			<div id="list_of_apps" class="grid_3 first_info">
				<h3>List <span>of featured apps</span></h3>
<ul>
	<li><strong><a href="http://www.freedesktop.org/wiki/Software/hal">HAL</a></strong> - Automatic hardware discovery and configuration, a.k.a. "It just works!"</li>
	<li><strong><a href="http://www.gnome.org/projects/NetworkManager/">Network Manager</a></strong> - Automatic discovery of wireless networks and management of network connections</li>
	<li><strong><a href="http://www.pidgin.im/">Pidgin</a></strong> - All-in-one Internet messaging</li>
	<li><strong><a href="http://banshee-project.org/Main_Page">Banshee</a></strong> - Music management and playback</li>
	<li><strong><a href="http://f-spot.org/Main_Page">F-spot</a></strong> - Personal photo management</li>
	<li><strong><a href="http://do.davebsd.com/">GNOME Do</a></strong> - A powerful and speedy remote control for your GNOME Desktop</li>
	<li><strong><a href="http://live.gnome.org/GnomeGames/">Games</a></strong> - Several fun and popular free games</li>
	<li><strong><a href="http://www.packagekit.org/">PackageKit</a></strong> - View the latest version of installed software and update your system</li>
</ul>
					<p class="read_more"><a href="<?php bloginfo('url');?>/list-of-apps/" class="menu">read more</a></p>
			</div><!--end list of apps-->
			
			<div id="choose_your_version" class="grid_3 first_info">
				<h3>Choose <span>your version</span></h3>
					<p>Morbi non erat non ipsum pharetra tempus. Donec orci. Proin in ante. Pellentesque sit amet purus. Cras egestas diam sed ante. Etiam imperdiet urna sit amet risus. Donec ornare arcu id erat. Aliquam ultrices scelerisque sem. In elit nulla, molestie vel, ornare sit amet, interdum vel, mauris. Etiam dignissim imperdiet metus.</p>
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
