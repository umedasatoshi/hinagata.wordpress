<?php get_header(); ?>
<main id="contents" <?php post_class('type-archive'); ?>>
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<article class="entry">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
		<dl class="entry-data">
			<dt>Post time</dt>
			<dd><time datetime="<?php the_time('Y-m-d'); ?>T<?php the_time('H:i:s'); ?>Z"><?php the_time('Y/m/d'); ?> <?php the_time('H:i:s'); ?></time></dd>
			<dt>Category</dt>
			<dd><?php the_category(); ?></dd>
			<?php if(function_exists('the_tags')): ?>
			<?php the_tags('<dt>Tag</dt><dd>', '</dd><dd>', '</dd>'); ?>
			<?php endif; ?>
		</dl>
		<div class="entry-body">
		<?php the_excerpt(); ?>
		</div>
		<?php if(has_post_thumbnail()): ?>
		<figure class="entry-image">
			<?php the_post_thumbnail(); ?>
		</figure>
		<?php endif ?>
	<!-- /.entry -->
	</article>
	<?php endwhile; endif; ?>
<!-- /#contents -->
</main>
<?php the_posts_pagination(); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>