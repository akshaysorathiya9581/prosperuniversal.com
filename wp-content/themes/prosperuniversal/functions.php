<?php
// function enqueue_custom_scripts() {
//     // Enqueue your custom JavaScript file
//     wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/custom.js', array('jquery'), null, true);
//     // Pass the AJAX URL and nonce to JavaScript
//     wp_localize_script('custom-script', 'ajax_object', array(
//         'ajax_url' => admin_url('admin-ajax.php'),
//         'nonce'    => wp_create_nonce('submit_contact_form_nonce')
//     ));
// }
// add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

add_action( 'after_setup_theme', 'theme_featured_image_setup' );
function theme_featured_image_setup() { 
    add_theme_support( 'post-thumbnails' ); 
}
// $post_list = get_posts(['post_type' => ['products']]);

function register_menus() {
    register_nav_menus(
        array(
            'primary-menu' => 'Primary Menu',
            'footer-menu' => 'Footer Menu'
        )
    );
}
add_action( 'init', 'register_menus' );

function get_menu_list_multi_level($name = 'Primary Menu')
{

    $menu_lists = array();
    $sub_parent = 0;

    $menu_items = wp_get_nav_menu_items($name);
    foreach ($menu_items as $menu_item) {

        $id = $menu_item->ID;
        $title = $menu_item->title;
        $link = $menu_item->url;
        $menu_item_parent = $menu_item->menu_item_parent;

        // if menu item has no parent, means this is the top-menu.
        if (!$menu_item_parent) {
            $menu_lists[$id]['child'] = false;
            $menu_lists[$id]['id'] = $id;
            $menu_lists[$id]['title'] = $title;
            $menu_lists[$id]['link'] = $link;

            // add active field if current link and open url is same.
            if (get_permalink() === $link) {
                $menu_lists[$id]['active'] = 'active';
            }
        } else {
            // if parent menu is set, means this is 2nd level menu
            if (isset($menu_lists[$menu_item_parent])) {
                $menu_lists[$menu_item_parent]['child'] = true;
                $menu_lists[$menu_item_parent]['sub_menu'][$id]['child'] = false;
                $menu_lists[$menu_item_parent]['sub_menu'][$id]['id'] = $id;
                $menu_lists[$menu_item_parent]['sub_menu'][$id]['title'] = $title;
                $menu_lists[$menu_item_parent]['sub_menu'][$id]['link'] = $link;

                // add active field to current menu item and its parent menu item if current link and open url is same.
                if (get_permalink() === $link) {
                    $menu_lists[$menu_item_parent]['active'] = 'active';
                    $menu_lists[$menu_item_parent]['sub_menu'][$id]['active'] = 'active';
                }

                $sub_parent = $menu_item_parent;
            } else if (isset($menu_lists[$sub_parent]['sub_menu'][$menu_item_parent])) {
                // if parent menu is set and their parent menu is also set, means this is 3rd level menu
                $menu_lists[$sub_parent]['sub_menu'][$menu_item_parent]['child'] = true;
                $menu_lists[$sub_parent]['sub_menu'][$menu_item_parent]['sub_menu'][$id]['id'] = $id;
                $menu_lists[$sub_parent]['sub_menu'][$menu_item_parent]['sub_menu'][$id]['title'] = $title;
                $menu_lists[$sub_parent]['sub_menu'][$menu_item_parent]['sub_menu'][$id]['link'] = $link;

                // add active field to current menu item and its parent menu item if current link and open url is same.
                if (get_permalink() === $link) {
                    $menu_lists[$sub_parent]['active'] = 'active';
                    $menu_lists[$sub_parent]['sub_menu'][$menu_item_parent]['active'] = 'active';
                    $menu_lists[$sub_parent]['sub_menu'][$menu_item_parent][$id]['active'] = 'active';
                }
            }
        }
    }

    return $menu_lists;
}

function get_menu_list($name = "Primary Menu")
{
    $data = wp_get_nav_menu_items($name);
    $main_menu = [];
    foreach ($data as $key => $value) {
        if ($value->menu_item_parent == 0) {
            $value->sub_menu = [];
            $main_menu[$value->ID] = $value;
        } else {
            $main_menu[$value->menu_item_parent]->sub_menu[] = $value;
        }
    }

    return $main_menu;
}

// add_action('wpcf7_before_send_mail', 'verify_recaptcha_v3');
// function verify_recaptcha_v3($contact_form) {
//     $recaptcha_secret = '6LfLRQkqAAAAAPHBhprSgz4aUHNts-34EHs6Lw-1';
//     $recaptcha_response = $_POST['g-recaptcha-response'];

//     $response = wp_remote_get("https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$recaptcha_response");
//     $response_body = wp_remote_retrieve_body($response);
//     $result = json_decode($response_body);

//     if (!$result->success || $result->score < 0.5) {
//         // Handle the error
//         $contact_form->skip_mail = true;
//         $submission = WPCF7_Submission::get_instance();
//         $submission->set_response('reCAPTCHA verification failed. Please try again.');
//     }
// }

function custom_mime_types($mimes) {
     // Allow SVG
    $mimes['svg'] = 'image/svg+xml';
    
    // Allow web and MP4 videos
    $mimes['webm'] = 'video/webm';
    $mimes['mp4'] = 'video/mp4';
    $mimes['ogv'] = 'video/ogg';
    $mimes['avi'] = 'video/x-msvideo';
    $mimes['mov'] = 'video/quicktime';
    $mimes['wmv'] = 'video/x-ms-wmv';
    $mimes['flv'] = 'video/x-flv';
    $mimes['mkv'] = 'video/x-matroska';
    
    return $mimes;
}
add_filter('upload_mimes', 'custom_mime_types');

function get_states_by_country() {
    global $wpdb;

    $country_id = isset($_POST['country_id']) ? sanitize_text_field($_POST['country_id']) : '';

    if (!$country_id) {
        wp_send_json_error('No country code provided.');
        wp_die();
    }

    $states = $wpdb->get_results($wpdb->prepare(
        'SELECT state_name FROM wp_state WHERE country_id = "$country_id"'
    ));

    if ($states) {
        wp_send_json_success($states);
    } else {
        wp_send_json_error('No states found for this country.');
    }

    wp_die();
}
add_action('wp_ajax_get_states_by_country', 'get_states_by_country');
add_action('wp_ajax_nopriv_get_states_by_country', 'get_states_by_country');

function get_seo_title() {
	if (class_exists('WPSEO_Frontend')) {
		// Get the Yoast SEO title for the current post/page
		$yoast_seo = WPSEO_Frontend::get_instance();
		$seo_title = $yoast_seo->get_content_title();

		if (!empty($seo_title)) {
			$seo_title = esc_html($seo_title); // Output the SEO title
		} else {
			// Fallback to the WordPress default title if SEO title is not set
			$seo_title = esc_html(get_the_title());
		}
	} else {
		// If Yoast SEO is not available, fallback to the WordPress default title
		$seo_title = esc_html(get_the_title());
	}
	
	return $seo_title;
}

?>