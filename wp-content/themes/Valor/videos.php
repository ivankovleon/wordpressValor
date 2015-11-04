<?php
/*
	Template Name: Videos
*/
?>
<?php get_header(); ?>

<ul id="vid">
	<?php
	$temp = $wp_query;
	$wp_query= null;
	$wp_query = new WP_Query();
	$wp_query->query('post_type=video&paged='.$paged);
	?>
	<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		
	<li class="panel">
		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'video_feature', array('class' => 'v-image') ); ?></a>
		<h3><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a> </h3>
 	</li>

	<?php endwhile; ?>
<div class="clear"></div>
	<?php getpagenavi(); ?>
	
	<?php $wp_query = null; $wp_query = $temp;?>	
				
</ul>


<?php get_footer(); ?>