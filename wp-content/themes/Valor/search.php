<?php get_header(); ?>

<div id="left">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
	
	<div class="post" id="post-<?php the_ID(); ?>">
		<div class="title">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка на <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<div class="postmeta"> 	<span>Написал <?php the_author_posts_link(); ?></span> | <span><?php the_time('l, n F Y'); ?></span> </div>
		</div>
	
		<div class="entry">
				<?php wpe_excerpt('wpe_excerptlength_archive', ''); ?>
				<div class="clear"></div>
			
		</div>
	</div>

<?php endwhile; ?>

<?php getpagenavi(); ?>

<?php else : ?>

	<h1 class="title">Ничего не найдено</h1>
	<p>К сожалению, по вашему запросу ничего не найдено.</p>

<?php endif; ?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>