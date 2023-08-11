<?php
/**
 * true coffee functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package true_coffee
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

function true_coffee_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on true coffee, use a find and replace
		* to change 'true-coffee' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'true-coffee', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	
	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'true-coffee' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'true_coffee_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	add_theme_support('woocommerce');
}
add_action( 'after_setup_theme', 'true_coffee_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function true_coffee_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'true_coffee_content_width', 640 );
}
add_action( 'after_setup_theme', 'true_coffee_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function true_coffee_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'true-coffee' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'true-coffee' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Shop', 'true-coffee' ),
			'id'            => 'sidebar-shop',
			'description'   => esc_html__( 'Add widgets here.', 'true-coffee' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'true_coffee_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function true_coffee_scripts() {
	wp_enqueue_style( 'true-coffee-style', get_template_directory_uri(). '/css/bootstrap.css', array(), _S_VERSION );
	//wp_style_add_data( 'true-coffee-style', 'rtl', 'replace' );
	wp_enqueue_script( 'true-coffee/logo-carousel', get_template_directory_uri(). '/js/logo-carousel.js', array('jquery'), _S_VERSION );
	wp_enqueue_script( 'true-coffee-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'true_coffee_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
require_once get_template_directory() . '/inc/acf.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Custom Fonts.
 * 
 */
function enqueue_custom_fonts(){
	if(!is_admin()){
		wp_register_style('bebas neue', 'https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
		wp_enqueue_style('bebas neue');

		wp_register_style('roboto condensed', 'https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap');
		wp_enqueue_style('roboto condensed');
	}
}
add_action('wp_enqueue_scripts', 'enqueue_custom_fonts');

/**
 * Hover product image on archive page
 * changes image to first gallery image
 * shows 2 buttons
 * 
 */

add_action( 'woocommerce_before_shop_loop_item_title', 'add_on_hover_shop_loop_image' ) ; 

function add_on_hover_shop_loop_image() {

    $image_id = wc_get_product()->get_gallery_image_ids()[0] ; 

    if ( $image_id ) {

        echo wp_get_attachment_image( $image_id ) ;

    } else {  //assuming not all products have galleries set

        echo wp_get_attachment_image( wc_get_product()->get_image_id() ) ; 

    }

}

add_action('after_setup_theme', function() {
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
	add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 10 );
	add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 20 );
	add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 30 );
	remove_action( 'woocommerce_before_single_product', 'woocommerce_output_all_notices', 10 );
});

add_filter( 'woocommerce_dropdown_variation_attribute_options_args', 'cinchws_filter_dropdown_args', 10 );

function cinchws_filter_dropdown_args( $args ) {
    $var_tax = get_taxonomy( $args['attribute'] );
    $args['show_option_none'] = apply_filters( 'the_title', $var_tax->labels->name );
    return str_replace("Produkt", "", $args); 
}


add_action( 'admin_post_submit_contact', 'validate_contact', 10 );
function validate_contact() {

	$errors = new WP_Error();
  
	if ( isset( $_POST[ 'name' ] ) && $_POST[ 'name' ] == '' ) {
	  $errors->add('name_error', 'Please fill in a valid name.' );
	}
  
	if ( isset( $_POST[ 'email' ] ) && $_POST[ 'email' ] == '' ) {
	  $errors->add('email_error', 'Please fill in a valid email.' );
	}
	if ( isset( $_POST[ 'phone' ] ) && $_POST[ 'phone' ] == '' ) {
		$errors->add('email_error', 'Please fill in a valid phone number.' );
	  }
  
	if ( isset( $_POST[ 'message' ] ) && $_POST[ 'message' ] == '' ) {
	  $errors->add('message_error', 'Please fill in a valid message.' );
	}

	if ( isset( $_POST[ 'datenschutz' ] ) && $_POST[ 'datenschutz' ] == '' ) {
		$errors->add('datenschutz_error', 'Please fill in a valid datenschutz.' );
	}

	if (count($errors)) {
		$args = add_query_arg( $errors->errors, wp_get_referer() );
		wp_redirect($args, home_url('/kontakt'));
	}

	form_submit_action();
	
}


// In your functions.php
// Action function
function form_submit_action() {
  // You can now use $_GET/$_POST variables depending on what method you used in your form
  // In this case we are using method post
  $name = sanitize_text_field($_POST['name']);
  $email = sanitize_email($_POST['email']);
  $phone = sanitize_text_field($_POST['phone']);
  $message = sanitize_text_field($_POST['message']);
  if( empty($name) && empty($email) && empty($message) && empty($phone)){
	$name = sanitize_text_field($_POST['nameqwer']);
	$email = sanitize_email($_POST['emailasdf']);
	$phone = sanitize_text_field($_POST['phoneqqq']);
	$message = sanitize_text_field($_POST['messageyxcv']);
	$datenschutz = sanitize_text_field($_POST['datenschutzqwert']);
	
	// Then do the processing here like create new post/user, update new post/user , etc.
	// But on this example im gonna show you how send an email, create your own custom html body format.
	
	// Send to admin
	$to = get_bloginfo('admin_email'); // or 'sendee@email.com' to specify email
	// Email subject
	$subject = 'Neue Kontaktanfrage | true-coffe.de';
	$subject_customer = 'Ihre Kontaktanfrage ist bei uns eingegangen | true-coffe.de';
	// Email body/content (tricky part)
	/* Instead of:
		$body = '<div>
					<p>'. $first_name .'</p>
				</div>'; 
	*/
	// We can create a custom function with the post fields as your attributes
	$body = my_email_body_function($name,$email,$phone,$message,$datenschutz);
	$body_customer = my_email_body_function_customer($name,$email,$message,$datenschutz);
	$headers = array('Content-Type: text/html; charset=UTF-8');
	wp_mail( $to, $subject, $body, $headers );
	wp_mail( $email, $subject_customer, $body_customer, $headers);
	
	// Then redirect to desired page
	$redirect = add_query_arg ('kontaktformular', 'gesendet', '/kontakt');
	wp_redirect($redirect);
	exit;
	//wp_redirect(home_url('/kontakt'));
  }
  else{
	exit;
  }
}
// Necessary action hooks
// Use our specific action form_submit_action to process the data related to our request
add_action( 'admin_post_nopriv_form_submit_action', 'form_submit_action' );
add_action( 'admin_post_form_submit_action', 'form_submit_action' );

// Email body function declaration
function my_email_body_function($name,$email,$phone,$message,$datenschutz) {
  ob_start(); // We have to turn on output buffering. VERY IMPORTANT! or else wp_mail() wont work 
  // Then setup your email body using the postfields from the attritbutes passed on. ?>
  <table style="width:100%; border-collapse: collapse;">
  <tr>
    <th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Name:</th>
    <th style="border: 1px solid #dddddd;text-align: left;padding: 8px;"><?php echo $name; ?></th>
  </tr>
  <tr>
    <th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Email:</th>
    <th style="border: 1px solid #dddddd;text-align: left;padding: 8px;"><?php echo $email; ?></th>
  </tr>
  <tr>
    <th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Telefon:</th>
    <th style="border: 1px solid #dddddd;text-align: left;padding: 8px;"><?php echo $phone; ?></th>
  </tr>
  <tr>
    <th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Message:</th>
    <th style="border: 1px solid #dddddd;text-align: left;padding: 8px;"><?php echo $message; ?></th>
  </tr>
	</table>
  
  <?php 
  return ob_get_contents();
  ob_get_clean();
}

function my_email_body_function_customer($name,$email,$message,$datenschutz) {
	ob_start(); // We have to turn on output buffering. VERY IMPORTANT! or else wp_mail() wont work 
	// Then setup your email body using the postfields from the attritbutes passed on. ?>
	Hallo, <?= $name;?><br><br>
	vielen Dank für Ihre Kontaktanfrage.<br><br>
	Wir bearbeiten diese umgehend und melden uns anschließend bei Ihnen zurück.
	
	<?php 
	return ob_get_contents();
	ob_get_clean();
  }

  add_action('wp_ajax_get_products_by_category', 'get_products_by_category');
add_action('wp_ajax_nopriv_get_products_by_category', 'get_products_by_category');

function get_products_by_category() {
  $categoryId = $_GET['product_cat'];
  $args = array(
    'post_type' => 'product',
    'posts_per_page' => -1,
    'tax_query' => array(
      array(
        'taxonomy' => 'product_cat',
        'field' => 'term_id',
        'terms' => $categoryId
      )
    )
  );
  $products = new WP_Query($args);
  ob_start();
  if ($products->have_posts()) {
    woocommerce_product_loop_start();
    while ($products->have_posts()) {
      $products->the_post();
      wc_get_template_part('content', 'product');
    }
    woocommerce_product_loop_end();
  } else {
    wc_get_template('loop/no-products-found.php');
  }
  $html = ob_get_clean();
  echo $html;
  wp_die();
}

add_filter( 'woocommerce_short_description', 'custom_short_description', 10, 1 );
function custom_short_description( $post_excerpt ) {
    global $post;
    $post_excerpt = $post->post_excerpt;
    if ( strlen( $post_excerpt ) > 200 ) {
        $post_excerpt = substr( $post_excerpt, 0, 200 ) . '...';
    }
    return $post_excerpt;
}

// Leadform submit
class LeadformSubmit
{
  /**
   * Action hook used by the AJAX class.
   *
   * @var string
   */
  const ACTION = 'leadform_submit';
  
  /**
   * Action argument used by the nonce validating the AJAX request.
   *
   * @var string
   */
  const NONCE = 'leadform_submit';

  public $fromEmail = 'no-reply@truecoffee.de';
  public $toEmail;

  public function __construct()
  {
    $this->toEmail = get_option('admin_email');
  }
	/**
   * Handles the AJAX request for my plugin.
   */
  public function handle()
  {

		$inputs = []; // Hier werden alle Input-Felder gespeichert
		wp_parse_str( $_POST['inputs'], $inputs );
		
		$mailBody = $this->arrayToTable($inputs);

		wp_mail( $this->toEmail, 'Leadformular ausgefüllt', $mailBody, $this->emailHeader() );

		wp_send_json_success( 'Formular abgeschickt');


		// Handle errors
		wp_send_json_error( 'Formular kann nicht abgeschickt werden');
  }

	/**
   * Register the AJAX handler class with all the appropriate WordPress hooks.
   */
  public static function register()
  {
    $handler = new self();

    add_action('wp_ajax_' . self::ACTION, array($handler, 'handle'));
    add_action('wp_ajax_nopriv_' . self::ACTION, array($handler, 'handle'));
		add_action('wp_loaded', array($handler, 'register_script'));
  }

	/**
   * Register our AJAX JavaScript.
   */
  public function register_script()
  {
    wp_register_script('leadform', get_template_directory_uri() . '/js/leadform.js' );
	
    wp_localize_script('leadform', 'leadform_data', $this->get_ajax_data());
    wp_enqueue_script( 'leadform' );
  }

	/**
   * Get the AJAX data that WordPress needs to output.
   *
   * @return array
   */
  private function get_ajax_data()
  {
    return array(
      'action' => self::ACTION,
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
      'nonce' => wp_create_nonce(LeadformSubmit::NONCE)
    );
  }

  public function arrayToTable($data)
	{

    $table = '
    <table class="json-table" class="MsoNormalTable" border="0" cellpadding="5" width="0" style="width:550pt">
    ';
    foreach ($data as $key => $value) {
        $table .= '
        <tr valign="top">
        ';
        if (!is_numeric($key)) {
            $table .= '
            <td valign="middle">
                <strong>' . wp_kses_post(trim(str_replace('_', ' ', ucfirst($key)))) . ':</strong>
            </td>
            <td>
            ';
        } else {
            $table .= '
            <td colspan="2">
            ';
        }
        if (is_object($value) || is_array($value)) {
            $table .= arrayToTable($value);
        } else {
            $table .= wp_kses_post(nl2br($value));
        }
        $table .= '
            </td>
        </tr>
        ';
    }
    $table .= '
    </table>
    ';
    return $table;
	}

  public function emailHeader()
  {
    return [
      'Content-Type: text/html; charset=UTF-8',
      'From: TRUE Coffee <'. $this->fromEmail .'>'
    ];
  }
}
LeadformSubmit::register();