<?php get_header(); ?>

<div id="left">
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		
		<div class="post" id="post-<?php the_ID(); ?>">
			<p class="aligncenter"> <?php echo get_post_meta($post->ID, 'WTF_embed', true) ?> </p>
			<div class="title">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка на <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<div class="postmeta"> 	<span>Написал <?php the_author_posts_link(); ?></span> | <span><?php the_time('l, n F Y'); ?></span> </div>
			</div>
		
			<div class="entry">
			
					<?php the_post_thumbnail( 'video_feature', array('class' => 'vs-image') ); ?>
					<?php the_content('Read the rest of this entry &raquo;'); ?>
					<div class="clear"></div>
					<?php wp_link_pages(array('before' => '<p><strong>Страницы: </strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
		</div>
	<?php endwhile; endif; ?>	
</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>