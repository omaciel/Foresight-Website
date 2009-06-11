<?php
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name'=>'dynamic',
'before_widget' => '<li class="sidebar_widget">',
'after_widget' => '</li>',
'before_title' => '<h4>',
'after_title' => '</h4>',
));


function page_excerpt ($page_title, $delimiter='[...]', $length=55)
{
	$page = get_page_by_title($page_title, ARRAY_A);
    $text = $page['post_content'];

    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]&gt;', $text);
    $text = preg_replace('@<script[^>]*?>.*?</script>@si', '', $text);
    $text = strip_tags($text, '<p>');
    $words = explode(' ', $text, $length + 1);
    if (count($words)> $length) {
        array_pop($words);
        array_push($words, $delimiter);
        $text = implode(' ', $words);
    }

    return $text;
}
?>
