
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