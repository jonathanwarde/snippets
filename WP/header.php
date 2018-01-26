<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<?php require_once get_template_directory()."/theme_functions.php"; ?>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="initial-scale=1.0, user-scalable=no, maximum-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<meta property="og:type" content="website">
<meta property="og:title" content="">
<meta property="og:url" content="">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/includes/images/og_image.png">
<meta property="og:image:width" content="450">
<meta property="og:image:height" content="450">
<meta property="og:description" content="">

<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="">
<meta name="twitter:title" content="">
<meta name="twitter:description" content="">
<meta name="twitter:creator" content="">
<meta name="twitter:image:src" content="">
<meta name="twitter:domain" content="">

<title><?php global $page, $paged; wp_title('|', true, 'right'); bloginfo('name'); $site_description = get_bloginfo('description','display'); if ($site_description && (is_home() || is_front_page())) echo " | $site_description";if ($paged >= 2 || $page >= 2)echo ' | ' . sprintf( __('Page %s', 'toolbox'), max($paged, $page)); ?></title>

<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<link href="<?php echo get_template_directory_uri(); ?>/includes/images/apple-touch-startup-image-320x480.png" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 1)" rel="apple-touch-startup-image">
<link href="<?php echo get_template_directory_uri(); ?>/includes/images/apple-touch-startup-image-640x960.png" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
<link href="<?php echo get_template_directory_uri(); ?>/includes/images/apple-touch-startup-image-640x1096.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
<link href="<?php echo get_template_directory_uri(); ?>/includes/images/apple-touch-startup-image-768x1004.png" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 1)" rel="apple-touch-startup-image">
<link href="<?php echo get_template_directory_uri(); ?>/includes/images/apple-touch-startup-image-1024x748.png" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 1)" rel="apple-touch-startup-image">
<link href="<?php echo get_template_directory_uri(); ?>/includes/images/apple-touch-startup-image-1536x2008.png" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
<link href="<?php echo get_template_directory_uri(); ?>/includes/images/apple-touch-startup-image-2048x1496.png" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">

<link href="<?php echo get_template_directory_uri(); ?>/includes/images/apple-touch-icon-57x57.png" sizes="57x57" rel="apple-touch-icon-precomposed">
<link href="<?php echo get_template_directory_uri(); ?>/includes/images/apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon-precomposed">
<link href="<?php echo get_template_directory_uri(); ?>/includes/images/apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon-precomposed">
<link href="<?php echo get_template_directory_uri(); ?>/includes/images/apple-touch-icon-144x144.png" sizes="144x144" rel="apple-touch-icon-precomposed">

<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/includes/images/favicon.ico">

<?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
<?php wp_head(); ?>
</head>
<body>