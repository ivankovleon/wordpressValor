<?php
function theme_guide(){
add_theme_page( 'Theme guide','Theme documentation','edit_themes', 'theme-documentation', 'w2f_theme_guide');
}
add_action('admin_menu', 'theme_guide');

function w2f_theme_guide(){
		echo '<div class="wrap">
		<div id="icon-options-general" class="icon32"><br></div>
		<h2>Theme Documentation</h2>
		
		<div class="metabox-holder">
		<div class="postbox-container" style="width:70%;">
		
		
		
				<div class="postbox"> <!-- postbox begin -->
						<h3 class="hndle"> <span> Theme License </span> </h3>
						
						<div class="inside">
						<p>	The PHP code of the theme is licensed under the GPL license as is WordPress itself. You can read it here: http://codex.wordpress.org/GPL. 
  							All other parts of the theme including, but not limited to the CSS code, images, and design are licensed for free personal usage.  </p>
  								<p> You are requested to retain the credit banners on the template. </p>
  								<p> You are allowed to use the theme on multiple installations, and to edit the template for your personal use. </p>
  								<p> You are NOT allowed to edit the theme or change its form with the intention to resell or redistribute it. </p>  
  								<p> You are NOT allowed to use the theme as a part of a template repository for any paid CMS service. </p>
							
						</div>
				</div> <!-- postbox end -->
				
				
				<div class="postbox"> <!-- postbox begin -->
						<h3 class="hndle"> <span> About the theme </span> </h3>
						
						<div class="inside">
						<p>	Valor is a gamers theme. This theme supports 3 different post types .  </p>
  			<ol>
  				<li>Posts -  For posting regular articles</li>
				<li>Reviews - For posting game reviews</li>
				<li>Videos - For posting game videos, trailers etc. </li>	
  			</ol>
							
						</div>
				</div> <!-- postbox end -->
		
		
		    	<div class="postbox"> <!-- postbox begin -->
						<h3 class="hndle"> <span> Create review post </span> </h3>
						
						<div class="inside">
						<p>	The following video shows how to create a review post .  </p>
						<p> <iframe width="560" height="315" src="http://www.youtube.com/embed/SoqzKG7rScQ?rel=0" frameborder="0" allowfullscreen></iframe> </p>
  		
							
						</div>
				</div> <!-- postbox end -->	
				
				
		    	<div class="postbox"> <!-- postbox begin -->
						<h3 class="hndle"> <span> Create video post </span> </h3>
						
						<div class="inside">
						<p>	The following video shows how to create a video post .  </p>
						<p> <iframe width="560" height="315" src="http://www.youtube.com/embed/5hhG99Mfps0?rel=0" frameborder="0" allowfullscreen></iframe> </p>
  		
							
						</div>
				</div> <!-- postbox end -->		
				
				
		    	<div class="postbox"> <!-- postbox begin -->
						<h3 class="hndle"> <span> Custom page templates </span> </h3>
						
						<div class="inside">
						<p>	This theme comes with 3 custom page templates. To use the custom page templates, just create a NEW PAGE and select the appropriate template from the template dropdown list in the page attributes.   </p>
						<b>Blog template</b>
						<p>The blog page template can be used to display the blog section of your site.</p>
						
  						<b>Review template</b>
						<p>Use this template to show all the reviews you have on the site</p>	
						
						<b>Video template</b>
						<p>Use this template to show all the video entries on your site</p>
						
						</div>
				</div> <!-- postbox end -->								
		
		
		</div>
		</div>
		
		
		
		</div>';
}

 ?>