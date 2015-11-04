<div class='clear'></div>
</div>

<div id="bottom">
	<ul>

	<?php if ( !function_exists('dynamic_sidebar')
	        || !dynamic_sidebar("Footer") ) : ?>  
	
	<?php endif; ?>
	
	</ul>
	<div class='clear'></div>
</div>

<div id="footer">
	<div class="fcred">
		Copyright &copy; <?php echo date('Y');?> <a href="<?php bloginfo('siteurl'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> - <?php bloginfo('description'); ?>.<br />
		Тема от: <a href="http://www.fabthemes.com/" title="WordPress Themes - FabThemes.com">Fab Themes</a>, перевел: <a href="http://wp-templates.ru/" title="Русские шаблоны wordpress">wp-templates.ru</a>
	</div>	
<div class='clear'></div>	
<?php wp_footer(); ?>
</div>
<div class='clear'></div>	
</div>
</body>
</html>      