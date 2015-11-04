<?php get_header(); ?>


<?php get_template_part( 'slide', 'index' ); ?>


<?php if (of_get_option('w2f_video_slide')== "1") { ?>
	
<div id="videoslide">
<div class="caroselhead"> 
	<h2>Игровое видео</h2>
	<a id="prev2" class="prev" href="#"></a>
	<a id="next2" class="next" href="#"></a>
</div>
<div id="timer1" class="timer"></div>
 <ul id="carousel">
	<?php 	$vidcount= of_get_option('w2f_video_number');
			$query = new WP_Query( array( 'post_type' =>'video','posts_per_page' =>$vidcount ) );
	       	if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
	?>
	
 	<li class="panel">
		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'video_feature', array('class' => 'v-image') ); ?></a>
		<h3><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a> </h3>
 	</li>

	<?php endwhile; endif; ?>
 </ul>
	
</div>
<?php } ?>

<!-- end videoslide -->




<div id="home-content">
	
<h2 class="sectionhead">Последние записи</h2>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="story" id="post-<?php the_ID(); ?>">
	<span class="categ"><?php the_category(', '); ?></span>
	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка на <?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<div class="entry">
			<a href="<?php the_permalink() ?>"> <?php the_post_thumbnail( 'story_feature', array('class' => 's-image') ); ?></a>
				<?php wpe_excerpt('wpe_excerptlength_index', ''); ?>
				<a class="rmore" href="<?php the_permalink() ?>">Подробнее</a>
				<div class='clear'></div>
		</div>

</div>

<?php endwhile; ?>
<?php getpagenavi(); ?>
<?php endif; ?>
</div>

<!-- end story section -->


<div id="homeright">


	<div class="latest-review">
		<h2 class="sectionhead">Последние обзоры</h2>
		<ul class="siderevs">
		<?php 	$revcount= of_get_option('w2f_review_number');
				$query = new WP_Query( array( 'post_type' =>'review','posts_per_page' =>$revcount ) );
		       	if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
		?>
		<li class="reviewbox">
			<span class="categ"><?php echo get_the_term_list( $post->ID, 'console', '', ', ', '' ); ?> </span>
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка на <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<div class="bentry">
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'review_thumb', array('class' => 's-image') ); ?> </a>
					<?php wpe_excerpt('wpe_excerptlength_side', ''); ?>
					<div class='clear'></div>
				</div>
		</li>
		<?php endwhile; endif; ?>
		</ul>
	</div>



	<div class="latest-review">
		<h2 class="sectionhead">Top Игр</h2>
		<ul class="sidetops">
		<?php 	$topcount= of_get_option('w2f_top_number');
				$query = new WP_Query( array( 'post_type' =>'review','meta_key'=>'WTF_overall','orderby'=>'meta_value_num','order'=>'DESC','posts_per_page' =>$topcount ) );
		       	if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
		?>
		<li class="reviewbox">
			<span class="categ"><?php echo get_the_term_list( $post->ID, 'console', '', ', ', '' ); ?> </span>
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка на <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<div class="bentry">
					<a href="<?php the_permalink() ?>"> <?php the_post_thumbnail( 'review_thumb', array('class' => 's-image') ); ?> </a>
					<p class="rate">Графика: <b><?php echo get_post_meta($post->ID, 'WTF_graphics', true) ?></b></p>
					<p class="rate">Game Play: <b><?php echo get_post_meta($post->ID, 'WTF_gameplay', true) ?></b></p>
					<p class="rate">Звук: <b><?php echo get_post_meta($post->ID, 'WTF_audio', true) ?></b></p>
					<p class="orate">В целом: <b><?php echo get_post_meta($post->ID, 'WTF_overall', true) ?></b></p>
					<div class='clear'></div>
				</div>
		</li>
		<?php endwhile; endif; ?>
		</ul>
	</div>
	

</div>

<?php get_footer(); ?>