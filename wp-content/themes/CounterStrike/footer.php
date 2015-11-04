</div>
<div id="footer-widgets-outer" class="clearfix">
<div class="footer-widgets-inner">
<?php
        /**
        * Footer Widget Areas. Manage the widgets from: wp-admin > Appearance > Widgets > Footer Left (Just add your own widgest and default widgets will go away)
        */
        ?>
<ul class="footer-widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Left') ) : ?>
				<li><h2><?php _e('Недавние записи'); ?></h2>
			               <ul>
					<?php wp_get_archives('type=postbypost&limit=5'); ?>  
			               </ul>
				</li>				
		<?php endif; ?>
</ul><!-- end footer left -->
<?php
        /**
        * Footer  Widget Areas. Manage the widgets from: wp-admin > Appearance > Widgets > Footer Center (Just add your own widgest and default widgets will go away)
        */
        ?>
<ul class="footer-widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Center') ) : ?>
				<li id="tag_cloud"><h2>Облако тегов</h2>
					<?php wp_tag_cloud('largest=18&format=flat&number=20'); ?>
				</li>
<?php endif; ?>
</ul><!-- end footer central -->
<?php
        /**
        * Footer  Widget Areas. Manage the widgets from: wp-admin -> Appearance -> Widgets Footer Right (Just add your own widgest and default widgets will go away)
        */
        ?>
	<ul class="footer-widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Right') ) : ?>
				<li><h2>О нашем сайте</h2>
		Это стандартные виджеты Wordpress, пройдите во вкладку Внешний вид > виджеты и настройте их под свои нужды.<br /><br />

<strong>Адрес нашей компании</strong><br />
New York Plaza<br />
NY 10004 <br />
Телефон: (212) 543 -4322 <br />
Факс: (800) 343-2365<br />

</li>
		<?php endif; ?>
</ul><!-- end footer right -->
</div>
</div>


<div id="footer-outer">
<div id="footer">Все права защищены. &copy; <a href="<?php bloginfo('home'); ?>"> <?php bloginfo('name'); ?> </a>  - <?php bloginfo('description'); ?></div>

   <?php // This theme is released free for use under creative commons licence. http://creativecommons.org/licenses/by/3.0/
            // All links in the footer should remain intact, until you buy links free theme.
            // Warning! Your site may stop working if these links are edited or deleted  ?>
  <div id="info"><a rel="nofollow" href="http://hostenko.com/ref=3650">Хостинг</a> - <a href="http://wp-templates.ru/">WordPress шаблоны</a></div>
</div></div></div>

<?php
	 wp_footer();
	echo get_theme_option("footer")  . "\n";
?>
</body>
</html>