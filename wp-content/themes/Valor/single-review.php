<?php get_header(); ?>

<div id="left">
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="title">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<div class="postmeta"> 	<span>Написал <?php the_author_posts_link(); ?></span> | <span><?php the_time('l, n F Y'); ?></span> | <span><?php echo get_the_term_list( $post->ID, 'console', '', ', ', '' ); ?></span> </div>
			</div>
		
			<div class="entry">
			
					<?php the_post_thumbnail( 'post_image', array('class' => 'postim') ); ?>
					<?php the_content('Read the rest of this entry &raquo;'); ?>
					
					<div class="ratebar clearfix"> <span class="ratehead">Gameplay</span> <span class="ratevalue"><?php echo get_post_meta($post->ID, 'WTF_gameplay', true) ?></span> <span class="rbar rate-<?php echo get_post_meta($post->ID, 'WTF_gameplay', true) ?> "></span></div>
					<div class="ratebar clearfix"> <span class="ratehead">Графика</span> <span class="ratevalue"><?php echo get_post_meta($post->ID, 'WTF_graphics', true) ?></span> <span class="rbar rate-<?php echo get_post_meta($post->ID, 'WTF_graphics', true) ?> "></span></div>
					<div class="ratebar clearfix"> <span class="ratehead">Звук</span> <span class="ratevalue"><?php echo get_post_meta($post->ID, 'WTF_audio', true) ?></span> <span class="rbar rate-<?php echo get_post_meta($post->ID, 'WTF_audio', true) ?> "></span></div>
					<div class="ratebar clearfix"> <span class="ratehead">В целом</span> <span class="ratevalue"><?php echo get_post_meta($post->ID, 'WTF_overall', true) ?></span> <span class="rbar rate-<?php echo get_post_meta($post->ID, 'WTF_overall', true) ?> "></span></div>
					
					<div class="clear"></div>
					<?php wp_link_pages(array('before' => '<p><strong>Страницы: </strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
		</div>
	<?php endwhile; endif; ?>	
</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>