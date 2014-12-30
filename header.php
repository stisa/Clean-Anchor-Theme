<!doctype html>
<html lang="en" prefix="og: http://ogp.me/ns#">
	<head>
		<meta charset="utf-8">
		<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

		<meta name="description" content="<?php echo site_description(); ?>">
		
		<meta name="author" value="Silvio Tisato"/>
    
    <link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">
		
		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
		<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script src="<?php echo theme_url('/js/menu.js'); ?>"></script>
		<script>var base = '<?php echo theme_url(); ?>';</script>

	    <meta name="viewport" content="width=device-width">
	    <meta name="generator" content="Anchor CMS">

	    <meta property="og:title" content="<?php echo site_name(); ?>">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="<?php echo e(current_url()); ?>">
	    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
	    <meta property="og:site_name" content="<?php echo site_name(); ?>">
	    <meta property="og:description" content="<?php echo site_description(); ?>">

		<?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>

    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>
	</head>

	<body class="<?php echo body_class(); ?>">
    <section class="header block-group">
     <a id="logo" href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a>
				<?php if(has_menu_items()): ?>
						<?php while(menu_items()): ?>
			<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>" <?php echo (menu_active() ? 'class="active"' : ''); ?> >
				<?php echo menu_name(); ?>
			</a>
						<?php endwhile; ?>
			<div class="twitter" >
				<a href="<?php echo twitter_url(); ?>">@<?php echo twitter_account(); ?></a>
			</div>
				<?php endif; ?>
    </section>
    
	  <aside id="sidebar" class="noSidebar block-group">
			<b><a class="menu" onclick="changeSidebar()">&equiv;</a></b>
			<div id="hider" class="hide">
				<br />
						<?php while(categories()): ?>
				<a href="<?php echo category_url(); ?>" title="<?php echo category_description(); ?>">
					<?php echo category_title(); ?> <span>, <?php echo category_count(); ?> posts</span>
				</a>
						<?php endwhile; ?>
			</div>
		</aside>

<!--////// ADD LATER
					<form id="search" action="<?php echo search_url(); ?>" method="post">
						<label for="term">Search my blog:</label>
						<input type="search" id="term" name="term" placeholder="To search, type and hit enter&hellip;" value="<?php echo search_term(); ?>">
					</form>
-->
<?php theme_include('footer'); ?>