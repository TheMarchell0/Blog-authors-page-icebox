<?php

function getMetaInfo($metaItem, $pageType, $url) {
  switch ($metaItem) {
      case 'ogTitle':
          switch ($pageType) {
              case 'frontPage':
                  echo _e('Stories and tips about MVP development', 'blog');
                  break;
              case 'categoryPage':
                  echo single_cat_title() . " — Purrweb";
                  break;
              case 'simplePage':
                  echo strpos($url, '/article-authors/') == !false ? get_the_title() : get_post_meta(get_the_ID(), 'metaTitle', true);
                  break;
              case 'unknown':
                  echo strpos($url, '/article-authors/') == !false ? get_the_title() : get_post_meta(get_the_ID(), 'metaTitle', true);
                  break;
          }
      break;
      case 'ogType':
          switch ($pageType) {
              case 'frontPage':
                  echo "website";
                  break;
              case 'categoryPage':
                  echo "website";
                  break;
              case 'simplePage':
                  echo "article";
                  break;
              case 'unknown':
                  echo "article";
                  break;
          }
      break;
      case 'ogUrl':
          switch ($pageType) {
              case 'frontPage':
                  echo pll_current_language() == 'en' ? 'https://www.purrweb.com/blog/' :  'https://www.purrweb.com/ru/blog/';
                  break;
              case 'categoryPage':
                  echo pll_current_language() == 'en' ? 'https://www.purrweb.com/blog/' :  'https://www.purrweb.com/ru/blog/';
                  break;
              case 'simplePage':
                  echo get_permalink();
                  break;
              case 'unknown':
                  echo alternateUrl($url);
                  break;
          }
      break;
      case 'ogImage':
          switch ($pageType) {
              case 'frontPage':
                  echo "https://www.purrweb.com/images/og-image.png";
                  break;
              case 'categoryPage':
                  echo "https://www.purrweb.com/images/og-image.png";
                  break;
              case 'simplePage':
                  echo get_the_post_thumbnail_url();;
                  break;
              case 'unknown':
                  echo get_the_post_thumbnail_url();;
                  break;
          }
      break;
      case 'title':
          switch ($pageType) {
              case 'frontPage':
                  echo _e('Stories and tips about MVP development', 'blog');
                  break;
              case 'categoryPage':
                  echo single_cat_title() . " — Purrweb";
                  break;
              case 'simplePage':
                  echo get_the_title() . "- Purrweb";
                  break;
              case 'unknown':
                  echo strpos($url, '/article-authors/') == !false ? get_the_title() : get_post_meta(get_the_ID(), 'metaTitle', true) . " - Purrweb";
                  break;
          }
      break;
      case 'description':
          switch ($pageType) {
              case 'frontPage':
                  echo _e("Find out what it's like to design and build MVP app. Discover technology trends, MVP software design and development best practices.", 'blog') ;
                  break;
              case 'categoryPage':
                  echo strip_tags(category_description());
                  break;
              case 'simplePage':
                  echo get_post_meta(get_the_ID(), 'metaDescription', true);
                  break;
              case 'unknown':
                  echo get_post_meta(get_the_ID(), 'metaDescription', true);
                  break;
          }
      break;
      case 'ogDescription':
          switch ($pageType) {
              case 'frontPage':
                  echo _e("Find out what it's like to design and build MVP app. Discover technology trends, MVP software design and development best practices.", 'blog');
                  break;
              case 'categoryPage':
                  echo strip_tags(category_description());;
                  break;
              case 'simplePage':
                  echo get_post_meta(get_the_ID(), 'metaDescription', true);
                  break;
              case 'unknown':
                  echo get_post_meta(get_the_ID(), 'metaDescription', true);
                  break;
          }
      break;
      case 'twitterTitle':
          switch ($pageType) {
              case 'frontPage':
                  echo _e('Stories and tips about MVP development', 'blog') ;
                  break;
              case 'categoryPage':
                  echo single_cat_title() . " — Purrweb";
                  break;
              case 'simplePage':
                  echo strpos($url, '/article-authors/') == !false ? get_the_title() : get_post_meta(get_the_ID(), 'metaTitle', true);
                  break;
              case 'unknown':
                  echo get_post_meta(get_the_ID(), 'metaTitle', true);
                  break;
          }
      break;
      case 'twitterDescription':
          switch ($pageType) {
              case 'frontPage':
                  echo _e("Find out what it's like to design and build MVP app. Discover technology trends, MVP software design and development best practices.". 'blog');
                  break;
              case 'categoryPage':
                  echo strip_tags(category_description());;
                  break;
              case 'simplePage':
                  echo get_post_meta(get_the_ID(), 'metaDescription', true);
                  break;
              case 'unknown':
                  echo get_post_meta(get_the_ID(), 'metaDescription', true);
                  break;
          }
      break;
      case 'twitterImage':
          switch ($pageType) {
              case 'frontPage':
                  echo '';
                  break;
              case 'categoryPage':
                  echo '';
                  break;
              case 'simplePage':
                  echo get_the_post_thumbnail_url();
                  break;
              case 'unknown':
                  echo get_the_post_thumbnail_url();;
                  break;
          }
      break;
  }
}

// подключаем стили
function enqueue_styles() {
  wp_enqueue_style( 'main-style', get_stylesheet_uri(), array(), '1.002');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

// // Отключаем jQuery WordPress
// function modify_jquery() {
//   if (!is_admin()) {
//   // Убираем подключенную старую версию библиотеки
//   wp_deregister_script('jquery');
//   }
// }
// add_action('init', 'modify_jquery');

// подключаем скрипты
function enqueue_scripts () {
  wp_enqueue_script('jquery');
  // wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-new.js', '3.6.0', false, true);
  wp_enqueue_script('btn-up', get_template_directory_uri() . '/js/btn-up.js', array(), false, true);
  wp_enqueue_script('fluid-scroll', get_template_directory_uri() . '/js/fluidScroll.js', array(), false, true);
  wp_enqueue_script('form-submittion', get_template_directory_uri() . '/js/form-submittion.js', array(), '1.001', true);
  wp_enqueue_script('flexible-height', get_template_directory_uri() . '/js/flexible-height.js', array(), false, true);
  wp_enqueue_script('content', get_template_directory_uri() . '/js/content.js', array(), false, true);
  wp_enqueue_script('empty', get_template_directory_uri() . '/js/empty.js', array(), false, true);
  wp_enqueue_script('header', get_template_directory_uri() . '/js/header.js', array(), false, true);
  wp_enqueue_script('cookies', get_template_directory_uri() . '/js/cookies.js', array(), false, true);
  wp_enqueue_script('inline-post', get_template_directory_uri() . '/js/inline-post.js', array(), false, true);
  wp_enqueue_script('our-works-ym', get_template_directory_uri() . '/js/our-works-ym.js', array(), false, true);
  wp_enqueue_script('mail-chimp-forms-ym', get_template_directory_uri() . '/js/mail-chimp-forms-ym.js', array(), false, true);
  wp_enqueue_script('share', get_template_directory_uri() . '/js/share.js', array(), false, true);
  wp_enqueue_script('anchors', get_template_directory_uri() . '/js/anchors.js', array(), false, true);
  wp_enqueue_script('mail-chimp-popup', get_template_directory_uri() . '/js/mail-chimp-popup.js', array(), false, true);
  wp_enqueue_script('prev-all-post-anchor', get_template_directory_uri() . '/js/prevAllPostAnchor.js', array(), false, true);
  wp_enqueue_script('how-to-form', get_template_directory_uri() . '/js/howToFormSend.js', array(), false, true);
  wp_enqueue_script('accordeon', get_template_directory_uri() . '/js/accordeon.js', array(), false, true);
  // wp_enqueue_script('noTimeReadAjax', get_template_directory_uri() . '/js/noTimeReadAjax.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

function front_page_styles() {
  if( is_front_page() ){
    wp_enqueue_style( 'swiper-min', get_template_directory_uri() . '/plugins/swiper/swiper-bundle.min.css', array(), false);
    wp_enqueue_style( 'main-style', get_stylesheet_uri(), array(), '1.002');
  }
}
add_action('wp_enqueue_scripts', 'front_page_styles');
 
function front_page_scripts() {
  if( is_front_page() ){
    wp_enqueue_script('swiper', get_template_directory_uri() . '/plugins/swiper/swiper-bundle.min.js', array(), false, true);
    wp_enqueue_script('popular-slider-init', get_template_directory_uri() . '/js/popular-slider.js', array(), false, true);
    wp_enqueue_script('cases-init', get_template_directory_uri() . '/js/casesSlider.js', array(), false, true);
  }
}
add_action( 'wp_enqueue_scripts', 'front_page_scripts' );


function add_defer_attribute($tag, $handle) {
  // add script handles to the array below
  $scripts_to_defer = array('btn-up', 'fluid-scroll', 'form-submittion', 'flexible-height', 'content', 'empty', 'header', 'cookies', 'inline-post', 'our-works-ym', 
    'mail-chimp-forms-ym', 'share', 'anchors', 'mail-chimp-popup', 
    'swiper', 'popular-slider-init', 'cases-init', 'prev-all-post-anchor',
    'how-to-form', 'accordeon'
    // 'noTimeReadAjax',
  );

  foreach($scripts_to_defer as $defer_script) {
     if ($defer_script === $handle) {
        return str_replace(' src', ' defer="defer" src', $tag);
     }
  }
  return $tag;
}
add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);

// активируем  добавление мета тега <title />
// if (!is_front_page()) {
//  add_theme_support('title-tag');
// }
// активируем изображения-миниатюры поста
add_theme_support('post-thumbnails');
// убираем ссылку 'читать далее' после тизера поста
add_filter( 'the_content_more_link', '__return_empty_string' );

function true_load_theme_textdomain(){
  load_theme_textdomain( 'blog', get_template_directory() . '/lang' );
}
add_action('after_setup_theme', 'true_load_theme_textdomain');
// активируем плагин MultiPostThumbnails
if (class_exists('MultiPostThumbnails')) {
  new MultiPostThumbnails(array(
  'label' => 'Secondary Image',
  'id' => 'secondary-image',
  'post_type' => 'post'
  ));
}

function set_suggested_articles($currentPost) {
  $titles = [
    'Первая',
    'Вторая',
    'Третья'
  ];
  ?>
  <div style="display: flex; justify-content: space-between;">
    <?php for ($i = 1; $i <= 3; $i++) { ?>
    <fieldset style="width: calc(100% / 3 - 10px);">
      <label for="suggested_article_<?php echo $i ?>"><?php echo $titles[$i - 1] ?> статья</label>
      <select
        name="suggested_article_<?php echo $i ?>"
        id="suggested_article_<?php echo $i ?>"
        class="postbox"
        style="display: block; min-width: 100%; width: 100%;"
      >
        <option value="">Выбрать...</option>
        <?php
          global $post;
          $allPosts = get_posts(array(
            'numberposts' => 1000,
            'exclude' => $currentPost->ID
          ));
          foreach ($allPosts as $post) {
            setup_postdata($post);
            $value = get_post_meta($currentPost->ID, '_suggested_article', true);
            $valueArray = explode(', ', $value);
        ?>
        <option value="<?php the_ID(); ?>"<?php selected($valueArray[$i - 1], $post->ID); ?>><?php the_title(); ?></option>
        <?php } ?>
      </select>
    </fieldset>
    <?php } ?>
  </div>
  <?php
  wp_reset_postdata();
}

function suggested_articles_box()
{
  $screens = ['post'];
  foreach ($screens as $screen) {
    add_meta_box(
      'ssa_1',           // уникальный ID
      'Предлагаемые статьи',  // Заголовок блока
      'set_suggested_articles',  // callback функция для вывода HTML, должна быть вызываемого типа
      $screen                   // Виды постов
    );
  }
}
add_action('add_meta_boxes', 'suggested_articles_box');

function suggested_aritcles($post_id) {
  $value = [];

  for ($i = 0; $i < 3; $i++) {
    $value[$i] = $_POST['suggested_article_' . ($i + 1)];
  }

  update_post_meta(
    $post_id,
    '_suggested_article',
    implode(', ', $value)
  );
}
add_action('save_post', 'suggested_aritcles');

add_action('save_post', 'suggested_aritcles');
// делает IMG тег анкором ссылки на картинку указанную в этом теге, чтобы её можно было увеличить и посмотреть.
add_filter( 'the_content', function( $content ){
// пропускаем если в тексте нет картинок вообще...
  if( false === strpos( $content, '<img ') )
  return $content;
  if( ! is_main_query() || ! in_array( $GLOBALS['post']->post_type, ['post'] ) )
  return $content;
  $img_ex = '<img[^>]*src *= *["\']([^\'"]+)["\'][^>]*>';
  $content = preg_replace_callback( "~(?:<a[^>]+>\s*)$img_ex|($img_ex)~", function($mm){
// пропускаем, если картинка уже со ссылкой
  if( empty($mm[2]) )
    return $mm[0];
  return '<a href="'. $mm[3] .'">'. $mm[2] .'</a>';
  }, $content );
  $content = preg_replace( "~<a[^>]+href[^>]+\.(?:gif)[^>]+>\s*(<img[^>]+>)\s*<\/a>~", '$1', $content );
  return $content;
}, 5 );

//add mailchimp popup form to articles
add_filter( 'the_content', 'add_popup_to_content' );
function add_popup_to_content($content){
  if (pll_current_language() == 'en'){
    $out = $content . "[wpim]";
  } else {
    $out = $content . "[wpim]";
  }
	
	return $out;
}
//add JSON-LD to head - schema.org
function addschema($lang = NULL) {
  if (is_singular('post')) { 
      $schema_article = array(

          '@context'  => "http://schema.org",
          '@type'     => "Article",
          'headline' => get_the_title(),
          'description' => get_post_meta(get_the_ID(), 'metaDescription', true),
          'url' => get_permalink(),
          'datePublished' => get_the_date(),
          "dateModified" => get_the_modified_date(),
          "image" => get_the_post_thumbnail_url() ,  
          "author" => array(
            "@type" => "Person",
            "name" => get_post_meta(get_the_ID(), 'authorName', true),
          ),
          "publisher" => array(
            "@type" => "Organization",
            "name"=> "Purrweb",
            "url" => "https://www.purrweb.com/",
            "email"=> "hello@purrweb.com",
           ),
      );
      if($lang == 'en') $schema_article["publisher"]["telephone"] = "+14243659855";
      echo '<script type="application/ld+json">' . json_encode($schema_article) . '</script>'; 
  }
}

include_once(get_template_directory() . '/php/recaptcha.php');
include_once(get_template_directory() . '/php/add-rel-nofollow-checkbox.php');
include_once(get_template_directory() . '/php/linked-cat-slug.php');
include_once(get_template_directory() . '/php/load-more.php');




function getRuLinkPost($post_id) {
  $translations = pll_the_languages(array('raw' => 1, 'post_id' => $post_id));
  $currentPageLang = pll_current_language();
  $link = '';
  if($currentPageLang === 'en') {
    $enLang = $translations['en'];
    $link = $enLang['url'];
  } else {
    $ruLang = $translations['ru'];
    $link = modifyRuUrl($ruLang['url'], true);
  }
  return $link;
}
function alternateUrl($url) {
  $domain = parse_url($url)['host'];
  $scheme = parse_url($url)['scheme'];
  $path = parse_url($url, PHP_URL_PATH);
  $pathArr = explode("/", $path);
  if(empty($pathArr[3])) {
    $link = $scheme . '://' . $domain . "/ru/blog/";
  }
  else if ($pathArr[3] == 'article-authors') {
    $link = "/ru/blog/" . $pathArr[3] . "/". $pathArr[4];
  }
   else {
    $link = $scheme . '://' . $domain . "/ru/blog/" . implode('/', array_slice($pathArr, 3));
  }
  return $link;
}
//MODIFY RU URL

function modifyRuUrl ($link, $isItSwitchUrl = false) {
  $path = parse_url($link, PHP_URL_PATH);
  $pathArr = explode("/", $path);
  $pathArrNEW = explode("/blog/ru/", $link);
  if($isItSwitchUrl) {

    if(empty($pathArr[3])) {
      $link = "/ru/blog/";
    } 
    else if ($pathArr[3] == 'article-authors') {
      $link = "/ru/blog/" . $pathArr[3] . "/". $pathArr[4] . "/";
    }
    else {
      $link = "/ru/blog/" . $pathArr[3] . "/";
    }
   
  } 
  else if ($pathArr[3] == 'category'){
    $link = "/ru/blog/" . $pathArrNEW[1];
  }
  else if (empty($pathArrNEW[1])) {
    $link = "/ru/blog/";
  }

  else {
    $link = "/ru/blog/" . $pathArrNEW[1] . "/";
  }
  return $link;
}


// function modify_switch_lang_link( $url, $slug ) {
//     if($slug == "ru") {
//       return modifyRuUrl($url, true);
//     }     
//     return $url;
// }

// add_filter("pll_translation_url", "modify_switch_lang_link", 10, 2 );

// function modify_ru_permalinks( $url, $post, $leavename=false ) {

//   if ( $post->post_type == "post") {
//       if(pll_current_language() == "ru"){
//         $url = modifyRuUrl($url);
//         echo $url;
//        return null; //polylang add '/ru/' after '/blog/'
//       }
//   }
//   return $url;
// }
// add_filter("post_link", "modify_ru_permalinks", 10, 3 );
 
function isValidEmail($email){ 
  return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

add_action( 'wp_ajax_no_time_read', 'no_time_to_read_send_ajax' ); 
add_action( 'wp_ajax_nopriv_no_time_read', 'no_time_to_read_send_ajax' );  


function no_time_to_read_send_ajax() {
  global $phpmailer;
  if ( !is_object( $phpmailer ) || !is_a( $phpmailer, 'PHPMailer' ) ) { // проверяем, существует ли объект $phpmailer и принадлежит ли он классу PHPMailer
    // если нет, то подключаем необходимые файлы с классами и создаём новый объект
    require_once ABSPATH . WPINC . '/class-phpmailer.php';
    require_once ABSPATH . WPINC . '/class-smtp.php';
    $phpmailer = new PHPMailer( true );
  }
  // $mail = new PHPMailer( true );
  $email = $_POST['email'];
  $my_postid = $_POST['post_id'];//This is page id or post id
  if(isValidEmail($email)) {
    $content_post = get_post($my_postid);
    $content = $content_post->post_content;
    $title = $content_post->post_title;
    remove_shortcode( 'yikes-mailchimp' );

    $fn__strip_myshortcode = function( $content ){
      // вырежет: [myshortcode] и [myshortcode ids="132,2154,548"]
      $content = preg_replace( '~\[yikes-mailchimp[^\]]*\]~', '', $content );

      // вырежет: [myshortcode] data [/myshortcode]
      $content = preg_replace( '~\[(yikes-mailchimp)[^\]]*\].*?\[\/\1\]~s', '', $content );

      return $content;        
    };
    // // вырезаем
    add_filter( 'the_content', $fn__strip_myshortcode, 5 );
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    $phpmailer->ClearAttachments(); // если в объекте уже содержатся вложения, очищаем их
    $phpmailer->ClearCustomHeaders(); // то же самое касается заголовков письма
    $phpmailer->ClearReplyTos(); 
    // $phpmailer->SMTPDebug = 2;       
    $phpmailer->isSMTP();
    $phpmailer->Host       = 'smtp.yandex.ru'; // SMTP сервера вашей почты
    $phpmailer->Username   = 'sergey.maksimenko@purrweb.com'; // Логин на почте
    $phpmailer->Password   = 'tvxuwixuhkqlxotc'; // Пароль на почте
    $phpmailer->SMTPSecure = 'ssl';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port       = 465;
    $phpmailer->setFrom('sergey.maksimenko@purrweb.com', 'Сергей из Purrweb');
    // $mail->From = ; // от кого, Email
    // $mail->FromName = ; // от кого, Имя
    $phpmailer->Subject = $title; // тема
    $phpmailer->SingleTo = true; // это означает, что если получателей несколько, то отображаться будет всё равно только один (если непонятно, спросите, я вам подробно объясню в комментариях)
    $phpmailer->ContentType = 'text/html'; // тип содержимого письма
    $phpmailer->IsHTML( true );
    $phpmailer->CharSet = 'utf-8'; // кодировка письма
    $phpmailer->ClearAllRecipients(); // очищаем всех получателей
    $phpmailer->AddAddress( $email ); // добавляем новый адрес получателя
    $phpmailer->Body = $content;
    // $phpmailer->AddAttachment(getcwd() . '/plugins/' . $plugin_name . '.zip', $plugin_name . '.zip'); // добавляем вложение
    
    $phpmailer->Send(); // отправка письма
      

    // wp_send_json_success('я зашёл');
  } else {
    $lang = pll_current_language();
    $error_text = $lang === 'ru' ? 'Email указан некорректно' : 'Email is specified incorrectly';
    $data = array('error_text' => $error_text, );
    wp_send_json_error($error_text);
  }
}


// Redirects

add_action( 'template_redirect', function() {
	if( is_single(897) ){
		wp_redirect( '/blog/step-by-step-guide-to-mvp-development-3-types-of-mvps/', 301 );
		exit;
	}
} );

// Удаляет все канонические ссылки на страницах
if(pll_current_language() === 'ru') {

  remove_action('wp_head', 'rel_canonical');
}



// add_action('add_meta_boxes', 'add_metabox_faqs');
// function add_metabox_faqs(){
// 	$screens = array( 'post', 'page' );
// 	add_meta_box( 'myplugin_sectionid', 'Добавить поля faqs', 'add_metabox_faqs_callback', $screens );
// }

// // HTML код блока
// function add_metabox_faqs_callback( $post, $meta ){
// 	$screens = $meta['args'];

// 	// Используем nonce для верификации
// 	wp_nonce_field( plugin_basename(__FILE__), 'myplugin_noncename' );

// 	// значение поля
// 	$value = get_post_meta( $post->ID, 'test_meta', 1 );

// 	// Поля формы для введения данных
//   $html = '
//     <div>

//     </div>
//   ';
// 	echo '<label for="myplugin_new_field">' . __("Description for this field", 'myplugin_textdomain' ) . '</label> ';
// 	echo '<input type="text" id="myplugin_new_field" name="myplugin_new_field" value="'. $value .'" size="25" />';
// }

## Сохраняем данные, когда пост сохраняется
// add_action( 'save_post', 'myplugin_save_postdata' );
// function myplugin_save_postdata( $post_id ) {
// 	// Убедимся что поле установлено.
// 	if ( ! isset( $_POST['myplugin_new_field'] ) )
// 		return;

// 	// проверяем nonce нашей страницы, потому что save_post может быть вызван с другого места.
// 	if ( ! wp_verify_nonce( $_POST['myplugin_noncename'], plugin_basename(__FILE__) ) )
// 		return;

// 	// если это автосохранение ничего не делаем
// 	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
// 		return;

// 	// проверяем права юзера
// 	if( ! current_user_can( 'edit_post', $post_id ) )
// 		return;

// 	// Все ОК. Теперь, нужно найти и сохранить данные
// 	// Очищаем значение поля input.
// 	$my_data = sanitize_text_field( $_POST['myplugin_new_field'] );

// 	// Обновляем данные в базе данных.
// 	update_post_meta( $post_id, 'test_meta', $my_data );
// }



new My_Best_Metaboxes;

class My_Best_Metaboxes {

	public $post_type = 'post';

	static $faq_title = 'faq_title';
  static $meta_faq_text = 'faq_text';

	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_metabox' ) );
		add_action( 'save_post_' . $this->post_type, array( $this, 'save_metabox' ) );
		add_action( 'admin_print_footer_scripts', array( $this, 'show_assets' ), 10, 999 );
	}

	## Добавляет матабоксы
	public function add_metabox() {
		add_meta_box( 'box_info_company', 'Faqs', array( $this, 'render_metabox' ), $this->post_type, 'advanced', 'high' );
	}

	## Отображает метабокс на странице редактирования поста
	public function render_metabox( $post ) {

		?>
		<div class="form-table faq-info">
      <p>Добавить поле <span class="dashicons dashicons-plus-alt add-faq"></span></p>
			<div>
        <div class="faq-list">
        <?php
          $input = '
          <div class="item-faq">
            <div class="item-faq__wrapper">
              <label>Заголовок</label>
              <input type="text" name="'. self::$faq_title .'[]" value="%s">
            </div>
            <div class="item-faq__wrapper">
              <label>Текст</label>
              <input type="text" name="'. self::$meta_faq_text .'[]" value="%s">
            </div>
            <span class="dashicons dashicons-trash remove-faq"></span>
          </div>
          ';

          $faq_titles = get_post_meta( $post->ID, self::$faq_title, true );
          $faq_texts = get_post_meta( $post->ID, self::$meta_faq_text, true );

          if ( is_array( $faq_titles )) {
            foreach ( $faq_titles as $key => $addr ) {
              printf( $input, esc_attr( $addr ), esc_attr($faq_texts[$key]) );
            }
          } else {
            printf( $input, '', '' );
          }
          ?>
        </div>
			</div>

		</div>

		<?php
	}

	## Очищает и сохраняет значения полей
	public function save_metabox( $post_id ) {

		// Check if it's not an autosave.
		if ( wp_is_post_autosave( $post_id ) )
			return;

		if ( isset( $_POST[self::$faq_title] ) && is_array( $_POST[self::$faq_title] ) ) {
			$faq_titles = $_POST[self::$faq_title];

			$faq_titles = array_map( 'sanitize_text_field', $faq_titles ); // очистка

			$faq_titles = array_filter( $faq_titles ); // уберем пустые адреса

			if ( $faq_titles ) 
				update_post_meta( $post_id, self::$faq_title, $faq_titles );
			else 
				delete_post_meta( $post_id, self::$faq_title );

		}
    if ( isset( $_POST[self::$meta_faq_text] ) && is_array( $_POST[self::$meta_faq_text] ) ) {
			$faq_texts = $_POST[self::$meta_faq_text];

			$faq_texts = array_map( 'sanitize_text_field', $faq_texts ); // очистка

			$faq_texts = array_filter( $faq_texts ); // уберем пустые адреса

			if ( $faq_texts ) 
				update_post_meta( $post_id, self::$meta_faq_text, $faq_texts );
			else 
				delete_post_meta( $post_id, self::$meta_faq_text );

		}
	}

	## Подключает скрипты и стили
	public function show_assets() {
		if ( is_admin() && get_current_screen()->id == $this->post_type ) {
			$this->show_styles();
			$this->show_scripts();
		}
	}

	## Выводит на экран стили
	public function show_styles() {
		?>
		<style>
      .form-table {
        width: 100%;
      }
			.add-faq {
				color: #00a0d2;
				cursor: pointer;
			}
			.faq-list .item-faq {
				display: flex;
				align-items: flex-end;
			}
			.faq-list .item-faq input {
				width: 100%;
				max-width: 400px;
			}
			.remove-faq {
				color: brown;
				cursor: pointer;
			}
      .item-faq__wrapper {
        flex-grow: 1;
        margin-right: 10px;
      }
      
		</style>
		<?php
	}

	## Выводит на экран JS
	public function show_scripts() {
		?>
		<script>
			jQuery(document).ready(function ($) {

				var $companyInfo = $('.faq-info');

				// Добавляет бокс с вводом адреса фирмы
				$('.add-faq', $companyInfo).click(function () {
					var $list = $('.faq-list');
						$item = $list.find('.item-faq').first().clone();

					$item.find('input').val(''); // чистим знанчение

					$list.append( $item );
				});

				// Удаляет бокс с вводом адреса фирмы
				$companyInfo.on('click', '.remove-faq', function () {
					if ($('.item-faq').length > 1) {
						$(this).closest('.item-faq').remove();
					}
					else {
						$(this).closest('.item-faq').find('input').val('');
					}
				});

			});
		</script>
		<?php
	}

}

if ( ! defined( 'ABSPATH' ) ) {
	die;
}


//Функция ниже убирает ошибку "Invalid WP Token" при голосовании в статье на русском языке
function pll_sync_store_rating($post_id, $translation_id, $new_avg_rating, $new_vote_count, $submitted_rating) {
  // Update rating sum
  $new_ratings_sum = $submitted_rating;
  if ( $new_vote_count > 1) {
    $new_ratings_sum = get_post_meta($post_id, 'rmp_rating_val_sum', true);
  }
  // Store new sum in linked page
  if ( ! add_post_meta( $translation_id, 'rmp_vote_count', $new_vote_count, true ) ) {
    update_post_meta( $translation_id, 'rmp_vote_count', $new_vote_count );
  }
  if ( ! add_post_meta( $translation_id, 'rmp_rating_val_sum', $new_ratings_sum, true ) ) {
    update_post_meta( $translation_id, 'rmp_rating_val_sum', $new_ratings_sum );
  }
  if ( ! add_post_meta( $translation_id, 'rmp_avg_rating', $new_avg_rating, true ) ) {
    update_post_meta( $translation_id, 'rmp_avg_rating', $new_avg_rating );
  }
}

function pll_sync_after_vote( $post_id, $new_avg_rating, $new_vote_count, $submitted_rating ) {
  // Check if polylang is enabled and working
  if (function_exists('pll_languages_list') && function_exists('pll_get_post')) {
    // get data from switcher for current page
    $raw = pll_the_languages( array('post_id' => $post_id, 'raw' => 1));
    // parse trough supported languages
    foreach($raw as $key => $value) {
      if(!$value['current_lang']) {
        $translation_id = pll_get_post( $post_id, $value['slug']);
        pll_sync_store_rating($post_id, $translation_id, $new_avg_rating, $new_vote_count, $submitted_rating);
      }
    }
  }
}
add_action('rmp_after_vote', 'pll_sync_after_vote', 10, 4);



//Добавление поля селекта с выбором автора статьи
add_filter( 'rwmb_meta_boxes', 'authors_list' );

function authors_list( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'   => esc_html__( 'Выбрать автора статьи', 'authors_list' ),
        'id'      => 'untitled',
        'context' => 'normal',
        'fields'  => [
            [
                'type'       => 'post',
                'name'       => esc_html__( 'Имя:', 'authors_list' ),
                'id'         => $prefix . 'post_i5kaaqqxpir',
                'post_type'  => 'article-author',
                'field_type' => 'select_advanced',
            ],
        ],
    ];

    return $meta_boxes;
}
add_filter( 'nonce_life', function () { return 168 * 86400; } );


//Изменение пагинации и количества страниц постов на 1 странице (отображается на данный момент 4 поста) и следующих (отображается на данный момент 10 постов).
add_action('pre_get_posts', 'myprefix_query_offset', 1 );

function myprefix_query_offset(&$query) {
  $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  $allPostText = pll_current_language() === 'ru' ? '/vse-stati/' : '/all-posts/';

    if ( ! $query->is_home() ) {
        return;
    }

    $fp =  strpos($url, $allPostText) == !false ? -1 : 4;
    $ppp = 10;

    if ( $query->is_paged) {
        $offset = $fp + ( ($query->query_vars['paged'] - 2) * $ppp );
        $query->set('offset', $offset );
        $query->set('posts_per_page', $ppp );

    } else {
        $query->set('posts_per_page', $fp );
    }
}

add_filter('found_posts', 'myprefix_adjust_offset_pagination', 10, 2 );

function myprefix_adjust_offset_pagination($found_posts, $query) {
  $fp = 4;
  $ppp = 10;

  if ( $query->is_home() ) {
      if ( $query->is_paged ) {
          return ( $found_posts + ( $ppp - $fp ) );
      }
  }
  return $found_posts;
}


/* Увеличение лимита кастомных полей в селекте*/
add_filter( 'postmeta_form_limit', function( $limit ) {
  return 50;
} );


/*WordPress - Отключаем загрузку файла dashicons.min.css стилей, не для Админов*/
function wpdocs_dequeue_dashicon() {
  if (current_user_can( 'update_core' )) {
      return;
  }
  wp_deregister_style('dashicons');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_dequeue_dashicon' ); 


/* Убрать подтягиваемые Вордпрессом ссылки на link rel="next/prev" в шапке */

remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

function dm_remove_wp_block_library_css(){
  wp_dequeue_style( 'wp-block-library' );
  }
  add_action( 'wp_enqueue_scripts', 'dm_remove_wp_block_library_css' );
