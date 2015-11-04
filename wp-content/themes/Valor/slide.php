<div id="feature">
	<div class="flexslider">
	    <ul class="slides">
		
	   	<?php 	
				$count = of_get_option('w2f_slide_number');
				$slidecat = of_get_option('w2f_slide_categories');
				$query = new WP_Query( array( 'cat' => $slidecat,'posts_per_page' =>$count ) );
	           	if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();	?>
	 	
				<li> 
				<a href="<?php the_permalink() ?>">	<?php the_post_thumbnail( 'game_feature', array('class' => 'f-image') ); ?></a>
				<div class="flex-caption"> 
					<h3> <?php the_title(); ?></h3> 
					<p><?php wpe_excerpt('wpe_excerptlength_index', ''); ?></p>
				</div>
				</li>
	
		<?php endwhile; endif; ?>
	    </ul>
	  </div>
	
</div>
 <!-- end feature -->