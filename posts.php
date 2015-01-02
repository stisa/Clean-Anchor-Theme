<?php theme_include('header'); ?>


<section class="postList block-group">
  
  <h2>Article list</h2>

  <aside class="adds">
  	<?php echo site_meta('adds'); ?>
  </aside>

  	<?php if(has_posts()): ?>
  		<?php posts(); ?>
  
  <article class="post">
  	<h2 class="title">
    	<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
  	</h2>
  	<section class="article">
  	  <?php echo article_markdown(); ?>
  	</section>
  	<footer class="articleFooter">
  		Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> by <?php echo article_author('real_name'); ?>.
  	</footer>
  </article>
  
  <?php $i = 0; while(posts()): ?>
  <?php // $bg = sprintf('background: hsl(215, 28%%, %d%%);', round(((++$i / posts_per_page()) * 20) + 20)); ?>
  
  <article class="post">
  	<h2 class="title">
    	<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
  	</h2>
  
  	<section class="postDescription">
      <h2>Descriptio</h2>
      <?php echo article_description(); ?>
    </section>
  
  </article>
  
  <?php endwhile; ?>
	<?php else: ?>

	<div class="wrap">
		<h1>No posts yet!</h1>
		<p>Looks like you have some writing to do!</p>
	</div>

 	<?php endif; ?>

</section>

<?php theme_include('footer'); ?>