<?php
define( "BeRocket_product_preview_domain", 'product-preview-for-woocommerce'); 
define( "product_preview_TEMPLATE_PATH", plugin_dir_path( __FILE__ ) . "templates/" );
load_plugin_textdomain('product-preview-for-woocommerce', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/');
require_once(plugin_dir_path( __FILE__ ).'berocket/framework.php');
foreach (glob(__DIR__ . "/includes/*.php") as $filename)
{
    include_once($filename);
}
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

class BeRocket_Product_Preview extends BeRocket_Framework {
    public static $settings_name = 'br-product_preview-options';
    protected $plugin_version_capability = 15;
    protected static $instance;
    protected $check_init_array = array(
        array(
            'check' => 'woocommerce_version',
            'data' => array(
                'version' => '3.0',
                'operator' => '>=',
                'notice'   => 'Plugin Product Preview for WooCommerce required WooCommerce version 3.0 or higher'
            )
        ),
        array(
            'check' => 'framework_version',
            'data' => array(
                'version' => '2.1',
                'operator' => '>=',
                'notice'   => 'Please update all BeRocket plugins to the most recent version. Product Preview for WooCommerce is not working correctly with older versions.'
            )
        ),
    );
    function __construct () {
        $this->info = array(
            'id'          => 7,
            'lic_id'      => 59,
            'version'     => BeRocket_product_preview_version,
            'plugin'      => '',
            'slug'        => '',
            'key'         => '',
            'name'        => '',
            'plugin_name' => 'product_preview',
            'full_name'   => __('Product Preview for WooCommerce', 'product-preview-for-woocommerce'),
            'norm_name'   => __('Product Preview', 'product-preview-for-woocommerce'),
            'price'       => '',
            'domain'      => 'product-preview-for-woocommerce',
            'templates'   => product_preview_TEMPLATE_PATH,
            'plugin_file' => BeRocket_product_preview_file,
            'plugin_dir'  => __DIR__,
        );
        $this->defaults = array(
            'general_settings'       => array(
                'use'                                       => '1',
                'style'                                     => 'show',
                'button_position'                           => 'after_add_to_cart',
                'show'                                      => array(
                    'image'                                     => '',
                    'thumbnails'                                => '1',
                    'title'                                     => '1',
                    'buttons'                                   => '1',
                    'description'                               => '1',
                    'meta'                                      => '1',
                    'price'                                     => '1',
                    'full_description'                          => '',
                ),
                'position'                                  => array(
                    'image'             => 1,
                    'thumbnails'        => 2,
                    'title'             => 3,
                    'buttons'           => 4,
                    'description'       => 5,
                    'meta'              => 6,
                    'price'             => 7,
                    'full_description'  => 8,
                ),
            ),
            'style_settings'         => array(
                'block'                                     => array(
                    'background-color'                          => 'ffffff',
                    'border-color'                              => '000000',
                    'margin-top'                                => '0',
                    'margin-bottom'                             => '0',
                    'margin-left'                               => '0',
                    'margin-right'                              => '0',
                    'border-top-width'                          => '0',
                    'border-bottom-width'                       => '0',
                    'border-left-width'                         => '0',
                    'border-right-width'                        => '0',
                ),
                'content'                                   => array(
                    'margin-top'                               => '20',
                    'margin-bottom'                            => '20',
                    'margin-left'                              => '20',
                    'margin-right'                             => '20',
                ),
                'text'                                      => array(
                    'color'                                     => '000000',
                    'font-size'                                 => '1em',
                ),
                'link'                                      => array(
                    'color'                                     => '000000',
                    'font-size'                                 => '1em',
                ),
                'link_hover'                                => array(
                    'color'                                     => '555555',
                ),
                'price'                                     => array(
                    'font-size'                                 => '1em',
                    'color'                                     => '77a464',
                ),
                'image'                                     => array(
                    'width'                                     => '50%',
                    'float'                                     => 'left',
                    'margin-top'                                => '0',
                    'margin-bottom'                             => '0',
                    'margin-left'                               => '0',
                    'margin-right'                              => '10',
                ),
                'close'                                     => array(
                    'color'                                     => '000000',
                    'background-color'                          => 'ffffff',
                    'border-color'                              => '000000',
                    'top'                                       => '-1em',
                    'bottom'                                    => '',
                    'left'                                      => '',
                    'right'                                     => '1em',
                    'width'                                     => '2em',
                    'height'                                    => '2em',
                    'line-height'                               => '2em',
                    'font-size'                                 => '1em',
                    'border-top-width'                          => '0',
                    'border-bottom-width'                       => '0',
                    'border-left-width'                         => '0',
                    'border-right-width'                        => '0',
                    'border-radius'                             => '20',
                ),
                'close_hover'                               => array(
                    'color'                                     => '000000',
                    'background-color'                          => 'f3f3f3',
                ),
                'quick_view'                                => array(
                    'width'                                     => '',
                    'height'                                    => '',
                    'border-width'                              => '',
                    'font-size'                                 => '',
                    'padding-top'                               => '',
                    'padding-bottom'                            => '',
                    'padding-left'                              => '',
                    'padding-right'                             => '',
                    'margin-top'                                => '',
                    'margin-bottom'                             => '',
                    'margin-left'                               => '',
                    'margin-right'                              => '',
                    'background-color'                          => '',
                    'color'                                     => '',
                    'border-color'                              => '',
                ),
                'quick_view_hover'                          => array(
                    'background-color'                          => '',
                    'color'                                     => '',
                ),
                'gallery'                                   => array(
                    'width'                                     => '',
                    'min-width'                                 => '',
                    'border-width'                              => '',
                    'margin-top'                                => '',
                    'margin-bottom'                             => '',
                    'margin-left'                               => '',
                    'margin-right'                              => '',
                ),
                'next_button'                               => array(
                    'width'                                     => '40',
                    'height'                                    => '',
                    'border-radius'                             => '',
                    'font-size'                                 => '2em',
                    'border-top-width'                          => '',
                    'border-bottom-width'                       => '',
                    'border-left-width'                         => '',
                    'border-right-width'                        => '',
                    'top'                                       => '0',
                    'bottom'                                    => '0',
                    'left'                                      => '',
                    'right'                                     => '0',
                    'vertical-align'                            => 'middle',
                    'text-align'                                => 'center',
                ),
                'prev_button'                               => array(
                    'width'                                     => '40',
                    'height'                                    => '',
                    'border-radius'                             => '',
                    'font-size'                                 => '2em',
                    'border-top-width'                          => '',
                    'border-bottom-width'                       => '',
                    'border-left-width'                         => '',
                    'border-right-width'                        => '',
                    'top'                                       => '0',
                    'bottom'                                    => '0',
                    'left'                                      => '0',
                    'right'                                     => '',
                    'vertical-align'                            => 'middle',
                    'text-align'                                => 'center',
                ),
                'next_prev'                                 => array(
                    'color'                                     => 'eeeeee',
                    'background-color'                          => '',
                    'border-color'                              => '',
                ),
                'next_prev_hover'                           => array(
                    'color'                                     => '333333',
                    'background-color'                          => '',
                    'border-color'                              => '',
                ),
            ),
            'text_settings'          => array(
                'button_text'                               => 'Quick View',
            ),
            'javascript_settings'    => array(
                'css'                                       => '',
                'before_open'                               => '',
                'on_open'                                   => '',
                'after_close'                               => '',
            ),
            'custom_css'        => '',
            'fontawesome_frontend_disable'    => '',
            'fontawesome_frontend_version'    => '',
        );
        $this->values = array(
            'settings_name' => 'br-product_preview-options',
            'option_page'   => 'br-product_preview',
            'premium_slug'  => 'woocommerce-product-preview',
            'free_slug'     => 'product-preview-for-woocommerce',
        );
        $this->feature_list = array();
        $this->framework_data['fontawesome_frontend'] = true;
        $this->active_libraries = array();
        parent::__construct( $this );
        if( $this->check_framework_version() ) {
            if ( $this->init_validation() ) {
                $options = $this->get_option();
            }
        } else {
            add_filter( 'berocket_display_additional_notices', array(
                $this,
                'old_framework_notice'
            ) );
        }
    }
    function init_validation() {
        return parent::init_validation() && $this->check_framework_version();
    }
    function check_framework_version() {
        return ( ! empty(BeRocket_Framework::$framework_version) && version_compare(BeRocket_Framework::$framework_version, 2.1, '>=') );
    }
    function old_framework_notice($notices) {
        $notices[] = array(
            'start'         => 0,
            'end'           => 0,
            'name'          => $this->info[ 'plugin_name' ].'_old_framework',
            'html'          => __('<strong>Please update all BeRocket plugins to the most recent version. Product Preview for WooCommerce is not working correctly with older versions.</strong>', 'product-preview-for-woocommerce'),
            'righthtml'     => '',
            'rightwidth'    => 0,
            'nothankswidth' => 0,
            'contentwidth'  => 1600,
            'subscribe'     => false,
            'priority'      => 10,
            'height'        => 50,
            'repeat'        => false,
            'repeatcount'   => 1,
            'image'         => array(
                'local'  => '',
                'width'  => 0,
                'height' => 0,
                'scale'  => 1,
            )
        );
        return $notices;
    }
    public function init () {
        parent::init();
        $global_options = $this->get_option();
        $options = $global_options['general_settings'];
        if ( ! empty($options['use']) ) {
            $javascript_options = $global_options['javascript_settings'];
            wp_register_style( 'berocket_product_preview_style', plugins_url( 'css/product_preview.css', __FILE__ ), "", BeRocket_product_preview_version );
            wp_enqueue_style( 'berocket_product_preview_style' );
            wp_enqueue_script( 'berocket_product_preview_script', plugins_url( 'js/product_preview.js', __FILE__ ), array( 'jquery' ), BeRocket_product_preview_version );
            $this->add_preview_hooks();
            wp_localize_script(
                'berocket_product_preview_script',
                'berocket_product_preview',
                array( 
                    'style'     => $options['style'],
                    'user_func' => apply_filters( 'berocket_pp_user_func', $javascript_options ),
                )
            );
            add_action('BeRocket_wish_wait_widget_start', array($this, 'remove_preview_hooks'));
            add_action('BeRocket_wish_wait_widget_end', array($this, 'add_preview_hooks'));
        }
    }

    public function add_preview_hooks() {
        $this->add_or_remove_buttom('add');
    }

    public function remove_preview_hooks() {
        $this->add_or_remove_buttom('remove');
    }

    public  function add_or_remove_buttom($add_or_remove = 'add') {
        $filter = $add_or_remove . '_filter';
        $action = $add_or_remove . '_action';
        $global_options = $this->get_option();
        $options = $global_options['general_settings'];
        $filter( 'wc_get_template_part', array( $this, 'get_preview_box' ), 20, 3);
        $filter( 'br_get_preview_box', array( $this, 'get_preview_box' ), 20, 3);
        $action( 'br_get_preview_button', array( $this, 'get_preview_button' ) );
        switch($options['button_position']) {
            case 'before_all': 
                $action( 'woocommerce_before_shop_loop_item', array( $this, 'get_preview_button' ), 38 );
                $action( 'lgv_advanced_before', array( $this, 'get_preview_button' ), 38 );
                break;
            case 'after_image': 
                $action( 'woocommerce_before_shop_loop_item_title', array( $this, 'get_preview_button' ), 20 );
                $action( 'lgv_advanced_after_img', array( $this, 'get_preview_button' ), 38 );
                break;
            case 'after_title': 
                $action( 'woocommerce_shop_loop_item_title', array( $this, 'get_preview_button' ), 38 );
                $action( 'lgv_advanced_before_description', array( $this, 'get_preview_button' ), 38 );
                break;
            case 'after_price': 
                $action( 'woocommerce_after_shop_loop_item_title', array( $this, 'get_preview_button' ), 38 );
                $action( 'lgv_advanced_after_price', array( $this, 'get_preview_button' ), 38 );
                break;
            case 'after_add_to_cart': 
                $action( 'woocommerce_after_shop_loop_item', array( $this, 'get_preview_button' ), 38 );
                $action( 'lgv_advanced_after_add_to_cart', array( $this, 'get_preview_button' ), 38 );
                break;
        }
    }
    public function get_preview_box($template, $slug, $name) {
        if( ! is_admin() && $slug == 'content' && ($name == 'product' || $name == 'preview_product') ) {
            $global_options = $this->get_option();
            $options = $global_options['general_settings'];
            $text_options = $global_options['text_settings'];
            $modify = '';
            if( $name == 'preview_product' ) {
                $modify = $template;
            }
            global $product, $wp_query, $br_preview_rand, $br_preview_id;
            $product_id = br_wc_get_product_id($product);
            if( $br_preview_id != $product_id ) {
                $br_preview_rand = rand();
            }
            $br_preview_id = $product_id;
            $modify .= $br_preview_rand;
            
            do_action('berocket_remove_ww_buttons_actions');
            do_action('berocket_remove_compare_actions');
            if ( ! empty($options['show']['buttons']) || ! empty($options['show']['related_products']) ) {
                $this->remove_preview_hooks();
            } else {
                remove_filter( 'wc_get_template_part', array( $this, 'get_preview_box' ), 20, 3);
                remove_filter( 'br_get_preview_box', array( $this, 'get_preview_box' ), 20, 3);
            }
            
            echo '<div class="br_product_preview_block br_product_preview_'.$product_id.$modify.'" data-id="'.$product_id.$modify.'">';
            set_query_var( 'modify', $modify );
            include product_preview_TEMPLATE_PATH . "preview.php";
            echo '</div>';
            do_action('berocket_add_ww_buttons_actions');
            do_action('berocket_add_compare_actions');
            if ( ( ! empty($options['show']['buttons']) || ! empty($options['show']['related_products']) ) ) {
                $this->add_preview_hooks();
            } else {
                add_filter( 'wc_get_template_part', array( $this, 'get_preview_box' ), 20, 3);
                add_filter( 'br_get_preview_box', array( $this, 'get_preview_box' ), 20, 3);
            }
        }
        return $template;
    }
    public function get_preview_button($modify = '') {
        $options = $this->get_option();
        $text_options = $options['text_settings'];
        wp_enqueue_script( 'wc-single-product' );
        global $product, $wp_query, $br_preview_rand, $br_preview_id;
        $product_id = br_wc_get_product_id($product);
        if( $br_preview_id != $product_id ) {
            $br_preview_rand = rand();
        }
        $br_preview_id = $product_id;
        $modify .= $br_preview_rand;
        do_action( 'berocket_pp_before_preview_button' );
        echo '<a data-id="', $product_id, $modify, '" class="' . apply_filters( 'berocket_pp_preview_button_classes', 'br_product_preview_button button' ) . '" href="#preview">' . $text_options['button_text'] . '</a>';
        do_action( 'berocket_pp_after_preview_button' );
    }
    public function set_styles () {
        $options = $this->get_option();
        if ( ! empty($options['general_settings']['use']) ) {
            parent::set_styles();
            $options = $this->get_option();
            $style_options = $options['style_settings'];
            $javascript_options = $options['javascript_settings'];
            echo '<style>';
            echo '.br_product_preview_hidden .br_product_preview_preview{';
            self::array_to_style ( $style_options['block'] );
            echo '}';
            echo '.br_product_preview_hidden .br_product_preview_preview a{';
            self::array_to_style ( $style_options['link'] );
            echo '}';
            echo '.br_product_preview_hidden .br_product_preview_preview a:hover{';
            self::array_to_style ( $style_options['link_hover'] );
            echo '}';
            echo '.br_product_preview_hidden .br_product_preview_preview{';
            self::array_to_style ( $style_options['text'] );
            echo '}';
            echo '.br_product_preview_hidden .br_product_preview_preview .berocket_preview_image,
            .br_product_preview_hidden .br_product_preview_preview .berocket-woocommerce-product-gallery{';
            if( ! empty( $style_options['image']['float'] ) ) {
                $style_options['image']['clear'] = $style_options['image']['float'];
            }
            self::array_to_style ( $style_options['image'] );
            echo '}';
            echo '.br_product_preview_hidden .br_product_preview_preview .berocket_preview_price, 
            .br_product_preview_hidden .br_product_preview_preview .berocket_preview_price *{';
            self::array_to_style ( $style_options['price'] );
            echo '}';
            echo '.br_product_preview_hidden .br_product_preview_preview .berocket_preview_close{';
            self::array_to_style ( $style_options['close'] );
            echo '}';
            echo '.br_product_preview_hidden .br_product_preview_preview .berocket_preview_close:hover{';
            self::array_to_style ( $style_options['close_hover'] );
            echo '}';
            echo '.br_product_preview_hidden .br_product_preview_preview .berocket_preview_content{';
            self::array_to_style ( $style_options['content'] );
            echo '}';
            echo '.br_product_preview_button{';
            self::array_to_style ( $style_options['quick_view'] );
            echo '}';
            echo '.br_product_preview_button:hover{';
            self::array_to_style ( $style_options['quick_view_hover'] );
            echo '}';
            echo '.br_product_preview_block .thumbnails img, .br_product_preview_block .thumbnails a{';
            self::array_to_style ( $style_options['gallery'] );
            echo '}';
            echo '.next_preview_slide {';
            self::array_to_style ( $style_options['next_button'] );
            echo '}';
            echo '.prev_preview_slide {';
            self::array_to_style ( $style_options['prev_button'] );
            echo '}';
            echo '.prev_preview_slide, .next_preview_slide {';
            self::array_to_style ( $style_options['next_prev'] );
            echo '}';
            echo '.prev_preview_slide:hover, .next_preview_slide:hover {';
            self::array_to_style ( $style_options['next_prev_hover'] );
            echo '}';
            echo '</style>';
        }
    }
    public function admin_init () {
        parent::admin_init();
        $this->update_from_not_framework();
        if( ! empty($_GET['page']) && $_GET['page'] == $this->values[ 'option_page' ] ) {
            wp_enqueue_script( 'jquery-ui-core', array( 'jquery' ) );
            wp_enqueue_script( 'jquery-ui-sortable', array( 'jquery' ) );
            wp_enqueue_script( 'berocket_product_preview_admin_script', plugins_url( 'js/admin.js', __FILE__ ), array( 'jquery' ) );
            wp_register_style( 'berocket_product_preview_admin_style', plugins_url( 'css/admin.css', __FILE__ ), "", BeRocket_product_preview_version );
            wp_enqueue_style( 'berocket_product_preview_admin_style' );
        }
    }
    public function update_from_not_framework() {
        $update_option = false;
        $options = $this->get_option();
        $settings_list = array('general_settings', 'style_settings', 'text_settings', 'javascript_settings');
        foreach($settings_list as $setting_list) {
            $settings = get_option('br_product_preview_'.$setting_list);
            if( ! empty($settings) && is_array($settings) ) {
                $update_option = true;
                $options[$setting_list] = $settings;
                delete_option('br_product_preview_'.$setting_list);
                if( $setting_list == 'javascript_settings' && ! empty($settings['css']) ) {
                    $options['custom_css'] = $settings['css'];
                }
            }
        }
        if($update_option) {
            $options = $this->recursive_array_set( $this->defaults, $options );
            update_option($this->values[ 'settings_name' ], $options);
        }
    }
    public static function array_to_style ( $styles ) {
        $color = array( 'color', 'background-color', 'border-color' );
        $size = array( 'border-width', 'border-top-width', 'border-bottom-width', 'border-left-width', 'border-right-width',
            'padding-top', 'padding-bottom', 'padding-left', 'padding-right',
            'border-top-left-radius', 'border-top-right-radius', 'border-bottom-right-radius', 'border-bottom-left-radius',
            'margin-top', 'margin-bottom', 'margin-left', 'margin-right', 'top', 'bottom', 'left', 'right',
            'width', 'height', 'line-height', 'font-size', 'border-radius' );
        foreach( $styles as $name => $value ) {
            if ( isset( $value ) && strlen($value) > 0 ) {
                if ( in_array( $name, $color ) ) {
                    if ( $value[0] != '#' ) {
                        $value = '#' . $value;
                    }
                    echo $name . ':' . $value . '!important;';
                } else if ( in_array( $name, $size ) ) {
                    if ( strpos( $value, '%' ) || strpos( $value, 'em' ) || strpos( $value, 'px' ) ) {
                        echo $name . ':' . $value . '!important;';
                    } else {
                        echo $name . ':' . $value . 'px!important;';
                    }
                } else {
                    echo $name . ':' . $value . '!important;';
                }
            }
        }
    }
    public function admin_settings( $tabs_info = array(), $data = array() ) {
        parent::admin_settings(
            array(
                'General' => array(
                    'icon' => 'cog',
                    'name' => __( 'General', "products-compare-for-woocommerce" ),
                ),
                'Style' => array(
                    'icon' => 'eye',
                    'name' => __( 'Style', "product-preview-for-woocommerce" ),
                ),
                'Text' => array(
                    'icon' => 'align-center',
                    'name' => __( 'Text', "products-compare-for-woocommerce" ),
                ),
                'Custom CSS/JavaScript' => array(
                    'icon' => 'css3',
                    'name' => __( 'Custom CSS/JavaScript', "products-compare-for-woocommerce" ),
                ),
                'License' => array(
                    'icon' => 'unlock-alt',
                    'link' => admin_url( 'admin.php?page=berocket_account' ),
                    'name' => __( 'License', "products-compare-for-woocommerce" ),
                ),
            ),
            array(
            'General' => array(
                'quick_view' => array(
                    "label"     => __('Use quick view', 'product-preview-for-woocommerce'),
                    "type"      => "checkbox",
                    "name"      => array("general_settings", "use"),
                    "value"     => '1',
                ),
                'button_position' => array(
                    "label"    => __( 'Button position', "product-preview-for-woocommerce" ),
                    "name"     => array("general_settings", "button_position"),
                    "type"     => "selectbox",
                    "options"  => array(
                        array('value' => 'before_all', 'text' => __('Before all', 'product-preview-for-woocommerce')),
                        array('value' => 'after_image', 'text' => __('After Image', 'product-preview-for-woocommerce')),
                        array('value' => 'after_title', 'text' => __('After Title', 'product-preview-for-woocommerce')),
                        array('value' => 'after_price', 'text' => __('After Price', 'product-preview-for-woocommerce')),
                        array('value' => 'after_add_to_cart', 'text' => __('After Add to cart button', 'product-preview-for-woocommerce')),
                    ),
                    "value"    => '',
                    "label_for" => __('', 'product-preview-for-woocommerce'),
                ),
                'style' => array(
                    "label"    => __( 'Display style [DEPRECATED]', "product-preview-for-woocommerce" ),
                    "name"     => array("general_settings", "style"),
                    "type"     => "selectbox",
                    "options"  => array(
                        array('value' => 'clone_from_data', 'text' => __('Clone from data', 'product-preview-for-woocommerce')),
                        array('value' => 'show', 'text' => __('Show/Hide', 'product-preview-for-woocommerce')),
                    ),
                    "value"    => '',
                    "label_for" => __('', 'product-preview-for-woocommerce'),
                ),
                'elements_show' => array(
                    "label"     => "",
                    "section"   => 'elements_show'
                ),
                'additional_general' => array(
                    "label"     => "",
                    "section"   => 'additional_general'
                ),
            ),
            'Style' => array(
                'all_styles' => array(
                    "label"     => "",
                    "section"   => 'all_styles'
                ),
            ),
            'Text' => array(
                'button_text' => array(
                    "label"     => __('Product preview button', 'product-preview-for-woocommerce'),
                    "type"      => "text",
                    "name"      => array("text_settings", "button_text"),
                    "value"     => '',
                ),
            ),
            'Custom CSS/JavaScript' => array(
                'global_font_awesome_disable' => array(
                    "label"     => __( 'Disable Font Awesome', "product-preview-for-woocommerce" ),
                    "type"      => "checkbox",
                    "name"      => "fontawesome_frontend_disable",
                    "value"     => '1',
                    'label_for' => __('Don\'t load Font Awesome css files on site front end. Use it only if you don\'t use Font Awesome icons in widgets or your theme has Font Awesome.', 'product-preview-for-woocommerce'),
                ),
                'global_fontawesome_version' => array(
                    "label"    => __( 'Font Awesome Version', "product-preview-for-woocommerce" ),
                    "name"     => "fontawesome_frontend_version",
                    "type"     => "selectbox",
                    "options"  => array(
                        array('value' => '', 'text' => __('Font Awesome 4', 'product-preview-for-woocommerce')),
                        array('value' => 'fontawesome5', 'text' => __('Font Awesome 5', 'product-preview-for-woocommerce')),
                    ),
                    "value"    => '',
                    "label_for" => __('Version of Font Awesome that will be used on front end. Please select version that you have in your theme', 'product-preview-for-woocommerce'),
                ),
                array(
                    "label"   => "Custom CSS",
                    "name"    => "custom_css",
                    "type"    => "textarea",
                    "value"   => "",
                ),
                'before_open' => array(
                    "label"     => __('Before Open', 'product-preview-for-woocommerce'),
                    "type"      => "textarea",
                    "name"      => array("javascript_settings", "before_open"),
                    "value"     => '',
                ),
                'on_open' => array(
                    "label"     => __('On Open', 'product-preview-for-woocommerce'),
                    "type"      => "textarea",
                    "name"      => array("javascript_settings", "on_open"),
                    "value"     => '',
                ),
                'after_close' => array(
                    "label"     => __('Before Close', 'product-preview-for-woocommerce'),
                    "type"      => "textarea",
                    "name"      => array("javascript_settings", "after_close"),
                    "value"     => '',
                ),
            )
        ) );
    }
    public function section_additional_general($data, $options_global) {
        $options = $options_global['general_settings'];
        $settings_name = $this->values['settings_name'];
        ob_start();
        do_action('BeRocket_preview_after_general_settings', $settings_name.'[general_settings]', $options);
        $html = '<td colspan="2">'.ob_get_clean().'</td>';
        return $html;
    }
    public function section_elements_show($data, $options_global) {
        $options = $options_global['general_settings'];
        $settings_name = $this->values['settings_name'];
        $html = '<th>' . __( 'Display on product preview', 'product-preview-for-woocommerce' ) . '</th>
        <td><ul class="br_position_on_preview">';
        $elements = array(
            'image'             => __( 'Product image', 'product-preview-for-woocommerce' ),
            'thumbnails'        => __( 'Product gallery', 'product-preview-for-woocommerce' ),
            'title'             => __( 'Product title', 'product-preview-for-woocommerce' ),
            'buttons'           => __( 'Product buttons', 'product-preview-for-woocommerce' ),
            'description'       => __( 'Product description', 'product-preview-for-woocommerce' ),
            'full_description'  => __( 'Product full description', 'product-preview-for-woocommerce' ),
            'meta'              => __( 'Product meta', 'product-preview-for-woocommerce' ),
            'price'             => __( 'Product price', 'product-preview-for-woocommerce' ),
            'related_products'  => __( 'Related Products. Amount of products:', 'product-preview-for-woocommerce' ).' <input name="'.$settings_name.'[general_settings][related_products_count] type="number" value="' . br_get_value_from_array($options, array('related_products_count'), '4') . '">',
        );
        $elements = apply_filters('br_product_preview_positions_elements', $elements);
        $result_array = array();
        $unchecked_result_array = array();
        foreach ( $elements as $el_name => $el_label ) {
            $html2 = '<li><i class="fa fa-sort"></i><label>
                <input name="'.$settings_name.'[general_settings][show]['. $el_name. ']" type="checkbox" value="1"'. ( ! empty($options['show'][$el_name]) ? ' checked' : '' ). '>'. $el_label. '
                <input class="br_element_position" type="hidden" name="'.$settings_name.'[general_settings][position]['. $el_name. ']" value="'. (empty($options['position'][$el_name]) ? '' : $options['position'][$el_name]). '">
            </label></li>';
            if( empty($options['position'][$el_name]) ) {
                $unchecked_result_array[] = $html2;
            } else {
                $result_array[$options['position'][$el_name]] = $html2;
            }
        }
        ksort($result_array, SORT_NUMERIC);
        $result_array = array_merge($result_array, $unchecked_result_array);
        $html .= implode($result_array);
        $html .= '</ul></td>';
        return $html ;
    }
    public function section_all_styles($data, $options_global) {
        $options = $options_global['style_settings'];
        $settings_name = $this->values['settings_name'];
        $default = $this->defaults['style_settings'];
        ob_start();
        include('templates/style_section.php');
        return '<td colspan="2">'.ob_get_clean().'</td>';
    }
}

new BeRocket_Product_Preview;
