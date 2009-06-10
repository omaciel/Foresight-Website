<div class="sidebar">
	<ul>
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>
  <li>
  <h4><?php _e('Search'); ?></h4>
	<form id="searchform" method="get" action="<?php bloginfo('siteurl')?>/">
		<input type="text" name="s" id="s" class="textbox" value="<?php echo wp_specialchars($s, 1); ?>" />
		<input id="btnSearch" type="submit" name="submit" value="<?php _e('Go'); ?>" />
	</form>
	<br />
  </li>
  <li>
    <h4>
      <?php _e('Categories'); ?>
    </h4>
    <ul>
      <?php wp_list_categories('title_li=&show_count=1&hierarchical=1');    ?>
    </ul>
  </li>
    <?php if (function_exists('wp_tag_cloud')) {	?>
    <li>
      <h4>
        <?php _e('Tags'); ?>
      </h4>
      <p>
        <?php wp_tag_cloud(); ?>
      </p>
    </li>
    <?php } ?>
  <li>
    <h4>
      <?php _e('Monthly'); ?>
    </h4>
    <ul>
      <?php wp_get_archives('type=monthly'); ?>
    </ul>
  </li>
  <?php endif; ?>
</ul>
	</div>
	<div style="clear:both;"></div>

