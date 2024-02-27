
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body <?php body_class('myClass secondClass'); ?>> 
<!-- <?php
get_template_part('partials/part', 'one'); //1-слаг с осовным именем (обязятельный), 2-спецификация(можно передавать динамические данные), 3-масив доп данных
?> -->
<?php wp_body_open(); ?>
<?php 
wp_nav_menu(
	array(
		'theme_location' => 'header_nav',
		'menu_class'=> 'menu_class',
		'container' => 'div',
	)
);

get_search_form();

$name = 'Alex Socfvf aka COdRVB';

?>

<!-- <input name="author" value="<?php echo esc_attr($name); ?>"/>  -->
<!-- <?php echo esc_html($name); ?> -->
<a href="<?php echo esc_url(home_url("/")) ;?>">Home</a>
<!-- esc_attr()  чистит код, проверяет нет ли там мусора котрый поламает разметку
 esc_html()  для чистки тегов 
  esc_url()  для чистки ссылок 
-->