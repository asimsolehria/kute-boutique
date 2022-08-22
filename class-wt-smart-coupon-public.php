<?php
// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}
/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://www.webtoffee.com
 * @since      1.0.0
 *
 * @package    Wt_Smart_Coupon
 * @subpackage Wt_Smart_Coupon/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Wt_Smart_Coupon
 * @subpackage Wt_Smart_Coupon/public
 * @author     webtoffee <info@webtoffee.com>
 */

if( ! class_exists ( 'Wt_Smart_Coupon_Public' ) ) {
    class Wt_Smart_Coupon_Public {

        /**
         * The ID of this plugin.
         *
         * @since    1.0.0
         * @access   private
         * @var      string    $plugin_name    The ID of this plugin.
         */
        private $plugin_name;

        /**
         * The version of this plugin.
         *
         * @since    1.0.0
         * @access   private
         * @var      string    $version    The current version of this plugin.
         */
        private $version;

        /**
         *  Module list, Module folder and main file must be same as that of module name
         *  Please check the `register_modules` method for more details
         *  @since 2.0.0
         */
        public static $modules=array(
            'store_credit',
            'coupon_banner',
            'url_coupon',
            'nth_order',
            'gift_coupon',
            'auto_coupon',
            'exclude_product',
            'giveaway_product',
            'cart_abandonment',
            'coupon_restriction',
        );

        public static $existing_modules=array();

        private static $instance = null;

        /**
         * Initialize the class and set its properties.
         *
         * @since    1.0.0
         * @param      string    $plugin_name       The name of the plugin.
         * @param      string    $version    The version of this plugin.
         */
        public function __construct($plugin_name, $version) {

            $this->plugin_name = $plugin_name;
            $this->version = $version;
   
        }

        /**
         * Get Instance
         * @since 2.0.0
         */
        public static function get_instance($plugin_name, $version)
        {
            if(self::$instance==null)
            {
                self::$instance=new Wt_Smart_Coupon_Public($plugin_name, $version);
            }

            return self::$instance;
        }

        /**
         *  Registers modules    
         *  @since 2.0.0     
         */
        public function register_modules()
        {            
            Wt_Smart_Coupon::register_modules(self::$modules, 'wt_sc_public_modules', plugin_dir_path( __FILE__ ), self::$existing_modules);          
        }

        /**
         *  Check module enabled    
         *  @since 2.0.0     
         */
        public static function module_exists($module)
        {
            return in_array($module, self::$existing_modules);
        }

        /**
         * Register the stylesheets for the public-facing side of the site.
         *
         * @since    1.0.0
         */
        public function enqueue_styles() {

            wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/wt-smart-coupon-public.css', array(), $this->version, 'all');
            wp_enqueue_style('dashicons');
        }

        /**
         * Register the JavaScript for the public-facing side of the site.
         *
         * @since    1.0.0
         */
        public function enqueue_scripts() {

            $_nonces = array(
                'public' => wp_create_nonce( 'wt_smart_coupons_public' ),
                'apply_coupon' => wp_create_nonce( 'wt_smart_coupons_apply_coupon' ),
            );
            $params=array( 
                'ajaxurl' => admin_url( 'admin-ajax.php' ) ,
                'nonces' => $_nonces,
                'labels' => array(
                    'please_wait'=>__('Please wait...', 'wt-smart-coupons-for-woocommerce-pro'),
                    'choose_variation'=>__('Please choose a variation', 'wt-smart-coupons-for-woocommerce-pro'),
                    'error'=>__('Error !!!', 'wt-smart-coupons-for-woocommerce-pro'),
                ),
            );
            wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/wt-smart-coupon-public.js', array('jquery'), $this->version, false);
            wp_localize_script($this->plugin_name,'WTSmartCouponOBJ', $params);
        }

        /**
         * Filter Function updating woocommcerce coupon validation.
         * @param $valid
         * @param $coupon - Coupon code
         * @since 1.0.0
         */
        public function wt_woocommerce_coupon_is_valid($valid, $coupon) { 
            global $woocommerce;
            
            if (!$valid) {
                return false;
            }

            $coupon_id                   = $coupon->get_id();
            $coupon_shipping_method_ids = get_post_meta($coupon_id, '_wt_sc_shipping_methods',true);

            if( ''!=$coupon_shipping_method_ids && ! is_array( $coupon_shipping_method_ids ) ) {
                $coupon_shipping_method_ids = explode(',',$coupon_shipping_method_ids);
            } else {
                $coupon_shipping_method_ids = array();
            }
            
            $coupon_payment_method_ids  = get_post_meta($coupon_id, '_wt_sc_payment_methods',true);
            if( ''!= $coupon_payment_method_ids && ! is_array( $coupon_payment_method_ids ) ) {
                $coupon_payment_method_ids = explode(',',$coupon_payment_method_ids);
            } else {
                $coupon_payment_method_ids = array();
            }
        
            $_wt_sc_user_roles         = get_post_meta($coupon_id, '_wt_sc_user_roles',true);
            if( ''!= $_wt_sc_user_roles && ! is_array( $_wt_sc_user_roles ) ) {
                $_wt_sc_user_roles = explode(',',$_wt_sc_user_roles);
            } else {
                $_wt_sc_user_roles = array();
            }
            

            // shipping method check
            if ( sizeof($coupon_shipping_method_ids ) > 0) {

                $chosen_shipping_methods = WC()->session->get('chosen_shipping_methods');

                /**
                 * @since 1.3.7
                 * [Bug fix] Shows a warning when `Hide shipping costs until an address is entered` option enabled.
                 */
                if($chosen_shipping_methods)
                {
                    $chosen_shipping = $chosen_shipping_methods[0]; 
                    $chosen_shipping = substr($chosen_shipping, 0, strpos($chosen_shipping, ":"));

                    if (!in_array($chosen_shipping, $coupon_shipping_method_ids)) {
                        
                        if($coupon->get_free_shipping()) /* checks current coupon allows free shipping */
                        {
                            if($chosen_shipping!='free_shipping')
                            {
                                $valid = false;
                            }
                        }else
                        {
                            $valid = false;
                        }
                    }
        
                    if ( ! $valid ) {
                        throw new Exception( __( 'Sorry, this coupon is not applicable to selected shipping method', 'wt-smart-coupons-for-woocommerce-pro' ), 109 );
                    }
                }
            }

            // payment method check
            if (sizeof($coupon_payment_method_ids) > 0) {

                $chosen_payment_method = isset(WC()->session->chosen_payment_method) ? WC()->session->chosen_payment_method : array();
                
                if (!in_array($chosen_payment_method, $coupon_payment_method_ids)) {
                    $valid = false;
                }
    
                if ( ! $valid ) {
                    throw new Exception( __( 'Sorry, this coupon is not applicable to selected Payment method', 'wt-smart-coupons-for-woocommerce-pro' ), 109 );
                }
            }

            // user role check
            if (sizeof($_wt_sc_user_roles) > 0) {

                $user = wp_get_current_user();
                $user_roles = (array) $user->roles;

                if (!array_intersect($_wt_sc_user_roles, $user_roles)) {
                    $valid = false;
                }
    
                if ( ! $valid ) {
                    throw new Exception( __( 'Sorry, this coupon is not applicable for your Role', 'wt-smart-coupons-for-woocommerce-pro' ), 109 );
                }
            }


            // Available location check
            $_wt_coupon_available_location  = get_post_meta($coupon_id, '_wt_coupon_available_location',true);
            if( ''!= $_wt_coupon_available_location && ! is_array( $_wt_coupon_available_location ) ) {
                $_wt_coupon_available_location = explode(',',$_wt_coupon_available_location);
            } else {
                $_wt_coupon_available_location = array();
            }
             if (sizeof($_wt_coupon_available_location) > 0) {
                $_wt_need_check_location_in  = get_post_meta($coupon_id, '_wt_need_check_location_in',true);
                if( $_wt_need_check_location_in == 'billing' ) {
                    $choosed_location = WC()->session->customer['country'];
                } else {
                    $choosed_location = WC()->session->customer['shipping_country'];
                }

                if (!in_array($choosed_location, $_wt_coupon_available_location)) {
                    $valid = false;
                }
    
                if ( ! $valid ) {
                    throw new Exception( __( 'Sorry, this coupon is not applicable to selected Location', 'wt-smart-coupons-for-woocommerce-pro' ), 109 );
                }
            }



            // Usage restriction "AND" for ptoducts
            $wt_product_condition = get_post_meta($coupon_id,'_wt_product_condition',true);
            if( $wt_product_condition == 'and') {
                $valid = true;
                $coupon_products = $coupon->get_product_ids() ;
                if ( count( $coupon_products ) > 0 ) {
                    global $woocommerce;
                    $items = $woocommerce->cart->get_cart();
                    $items_to_check = array();
                    foreach( $items as $item ) {
                        array_push($items_to_check,$item['product_id']);
                    }
                    foreach( $coupon_products as $coupon_product  ) {
                        if ( !in_array( $coupon_product, $items_to_check ) ) {
                            $valid = false;
                            break;
                        }
                    }

                    if ( ! $valid ) {
                        throw new Exception( __( 'Sorry, this coupon is not applicable for selected products.', 'wt-smart-coupons-for-woocommerce-pro' ), 109 );
                    }
                }
            }

            // Usage restriction "AND" for Categories
            $wt_category_condition = get_post_meta($coupon_id,'_wt_category_condition',true);
            if( $wt_category_condition == 'and') {
                $valid = true;
                global $woocommerce;
                $coupon_categores = $coupon->get_product_categories() ;
                $items = $woocommerce->cart->get_cart();
                $items_to_check = array();
                foreach( $items as $item ) {
                    $product_cats = wc_get_product_cat_ids( $item['product_id'] );
                    $items_to_check = array_merge( $items_to_check,$product_cats );
                }

                foreach( $coupon_categores as $coupon_categry ) {
                    if ( !in_array( $coupon_categry, $items_to_check ) ) {
                        $valid = false;
                        break;
                    }

                }

                if ( ! $valid ) {
                    throw new Exception( __( 'Sorry, this coupon is not applicable for selected products.', 'wt-smart-coupons-for-woocommerce-pro' ), 109 );
                }


            }

            // Quantity of matching Products
            $wt_min_matching_product_qty = get_post_meta($coupon_id,'_wt_min_matching_product_qty',true);
            $wt_max_matching_product_qty = get_post_meta($coupon_id,'_wt_max_matching_product_qty',true);

            if( $wt_min_matching_product_qty > 0 ||  $wt_max_matching_product_qty >0 ) {
                $quantity_of_matching_product = $this->get_quantity_of_matching_product( $coupon );
                if( $wt_min_matching_product_qty > 0 && $quantity_of_matching_product < $wt_min_matching_product_qty ) {
                    $valid = false;
                    throw new Exception(
                        sprintf( __( 'The minimum quantity of matching products for this coupon is %s.', 'wt-smart-coupons-for-woocommerce-pro' ), $wt_min_matching_product_qty ),110

                    );
                }
                if( $wt_max_matching_product_qty >0 && $quantity_of_matching_product > $wt_max_matching_product_qty ) {            
                    $valid = false;                
                    throw new Exception(
                        sprintf( __( 'The maximum quantity of matching products for this coupon is %s.', 'wt-smart-coupons-for-woocommerce-pro' ), $wt_max_matching_product_qty ),111
                    );
                }
            }

            // Subtotal of matching products
            $wt_min_matching_product_subtotal = get_post_meta($coupon_id,'_wt_min_matching_product_subtotal',true);
            $wt_max_matching_product_subtotal = get_post_meta($coupon_id,'_wt_max_matching_product_subtotal',true);
            $subtotal_of_matching_product = $this->get_sub_total_of_matching_products($coupon);
            $discount_amount =  WC()->cart->get_coupon_discount_amount( $coupon->get_code(), WC()->cart->display_cart_ex_tax );
            if( $wt_min_matching_product_subtotal > 0 ||  $wt_max_matching_product_subtotal >0 ) {
                if( $wt_min_matching_product_subtotal > 0 && $subtotal_of_matching_product    < $wt_min_matching_product_subtotal  ) { 
                    if(in_array($coupon->get_code(), $woocommerce->cart->get_applied_coupons()) ) { 

                       // SC-411 Remove below code
                        //if( $subtotal_of_matching_product + $discount_amount < $wt_min_matching_product_subtotal ) { 
                            $valid = false;
                            throw new Exception(
                                sprintf( __( 'The minimum subtotal of matching products for this coupon is %s.', 'wt-smart-coupons-for-woocommerce-pro' ), Wt_Smart_Coupon_Admin::get_formatted_price( $wt_min_matching_product_subtotal ) ),112
        
                            );
                        //}
                    } else {
                        $valid = false;
                        throw new Exception(
                            sprintf( __( 'The minimum subtotal of matching products for this coupon is %s.', 'wt-smart-coupons-for-woocommerce-pro' ), Wt_Smart_Coupon_Admin::get_formatted_price( $wt_min_matching_product_subtotal ) ),112
    
                        );
                    }
                    
                   
                }
                if( $wt_max_matching_product_subtotal > 0 && $subtotal_of_matching_product > $wt_max_matching_product_subtotal ) {            
                    $valid = false;                
                    throw new Exception(
                        sprintf( __( 'The maximum subtotal of matching products for this coupon is %s.', 'wt-smart-coupons-for-woocommerce-pro' ), Wt_Smart_Coupon_Admin::get_formatted_price(  $wt_max_matching_product_subtotal ) ),113
                    );
                }
            }

            

            return $valid;
        }


      
        /**
         * Get sub total for mtching product - used for coupon validation
         * @since 1.0.0
         */
        public function get_sub_total_of_matching_products( $coupon ) {
            global $woocommerce;        
            $coupon_products =  $coupon->get_product_ids();

            $coupon_categores = $coupon->get_product_categories() ;
            $items = $woocommerce->cart->get_cart();
            $total = 0;
            if( count( $coupon_products ) > 0 || count($coupon_categores) > 0  ) {// check with matching products by include condition.
                foreach( $items as $item ) { 
                    $product_cats = wc_get_product_cat_ids( $item['product_id'] );
                    
                    // SC-411 check variation id present in coupon_products araray in case of variable products
                     $product_data = wc_get_product( $item['product_id'] );
                    if ( isset($item['variation_id']) && !empty($item['variation_id']) ) {
                        if( ( count( $coupon_products ) && (in_array( $item['product_id'],$coupon_products ) || in_array( $item['variation_id'],$coupon_products )) ) ||  ( count($coupon_categores) && count( array_intersect($coupon_categores,$product_cats) ) > 0 ) ){ 
                            if( isset( $item['line_subtotal'] ) ) { 
                                $total += $item['line_subtotal'];
                            }

                        }
                    }
                    else{
                        if( ( count( $coupon_products ) && in_array( $item['product_id'],$coupon_products ) ) ||  ( count($coupon_categores) && count( array_intersect($coupon_categores,$product_cats) ) > 0 ) ){ 
                            if( isset( $item['line_subtotal'] ) ) { 
                                $total += $item['line_subtotal'];
                            }

                        }                   
                     }
                
                }
            } else {
                foreach( $items as $item ) {
                    if( isset( $item['line_subtotal'] ) ) {
                        $total += $item['line_subtotal'];
                    }
                }
            }

            return $total;
        }
        /**
         * Get Quantity of matching products - Used for Coupon validation.
         * @since 1.0.0
         * @since 1.3.5 Excluded free products from calculating total quantity of matching products
         */
        public function get_quantity_of_matching_product( $coupon ) {
            global $woocommerce;        
            $coupon_products =  $coupon->get_product_ids();

            $coupon_categores = $coupon->get_product_categories() ;
            $items = $woocommerce->cart->get_cart();
            $qty = 0;
            if( count( $coupon_products ) > 0 || count($coupon_categores) > 0  ) { // check with matching products by include condition.
                foreach( $items as $item )
                {
                    if(isset($item['free_product']) && $item['free_product'] == "wt_give_away_product")
                    {
                        continue;
                    }
                    $product_cats = wc_get_product_cat_ids( $item['product_id'] );
                    if ( isset($item['variation_id']) && !empty($item['variation_id']) ) { 
                        if( ( count( $coupon_products ) && (in_array( $item['variation_id'],$coupon_products ) || in_array( $item['product_id'],$coupon_products )) ) || ( count($coupon_categores) && count( array_intersect($coupon_categores,$product_cats) ) > 0 ) ){
                            $qty += $item['quantity'];
                        }
                    }
                    else{
                        if( ( count( $coupon_products ) && in_array( $item['product_id'],$coupon_products ) ) || ( count($coupon_categores) && count( array_intersect($coupon_categores,$product_cats) ) > 0 ) ){
                            $qty += $item['quantity'];

                        }   
                    }            
                }
            } else {
                foreach( $items as $item )
                {
                    if(isset($item['free_product']) && $item['free_product'] == "wt_give_away_product")
                    {
                        continue;
                    }
                    $qty += $item['quantity'];
                }
            }
            return $qty;
        }



        

        /**
         * Get formatted Meta values of a coupon.
         * @since 1.0.0
         */
        public static function get_coupon_meta_data( $coupon ) {

            if( !$coupon || !is_a ( $coupon,'WC_Coupon') ) {
                return;
            }

            $discount_types = wc_get_coupon_types();
            $coupon_data = array();
            $coupon_amount = $coupon->get_amount();
            switch( $coupon->get_discount_type() ) {
                case 'fixed_cart':
                    $coupon_data['coupon_type']     = __( 'Cart discount', 'wt-smart-coupons-for-woocommerce-pro' );
                    $coupon_data['coupon_amount']   = Wt_Smart_Coupon_Admin::get_formatted_price( $coupon_amount ) ;
                    break;

                case 'fixed_product':
                    $coupon_data['coupon_type']     = __( 'Product discount', 'wt-smart-coupons-for-woocommerce-pro' );
                    $coupon_data['coupon_amount']   = Wt_Smart_Coupon_Admin::get_formatted_price( $coupon_amount );
                    break;

                case 'percent_product':
                    $coupon_data['coupon_type']     = __( 'Product discount', 'wt-smart-coupons-for-woocommerce-pro' );
                    $coupon_data['coupon_amount']   = $coupon_amount . '%';
                    break;

                case 'percent':
                    $coupon_data['coupon_type'] = __( 'Cart discount', 'wt-smart-coupons-for-woocommerce-pro' );
                    $coupon_data['coupon_amount'] = $coupon_amount . '%';
                    break;
                case 'store_credit':
                    $coupon_data['coupon_type'] = $discount_types[ $coupon->get_discount_type() ];
                    $coupon_data['coupon_amount'] = Wt_Smart_Coupon_Admin::get_formatted_price( $coupon_amount );
                    break;

                default:

                    $coupon_data['coupon_type'] = $discount_types[ $coupon->get_discount_type() ];
                    $coupon_data['coupon_amount'] = $coupon_amount;
                    break;

            }

            if( $coupon_amount === 0 && $coupon->get_free_shipping() ) {
                $coupon_data['coupon_type'] = __('Free shipping','wt-smart-coupons-for-woocommerce-pro');
		        $coupon_data['coupon_amount'] = '';
            }

            
            $free_products  = get_post_meta( $coupon->get_id(), '_wt_free_product_ids', true );

            if($coupon_amount === 0 && $free_products && is_string($free_products) && trim($free_products)!="")
            {              
                $coupon_data['coupon_type'] =  __('Free products', 'wt-smart-coupons-for-woocommerce-pro');
                $coupon_data['coupon_amount'] = '';
            }


            $coupon_data['coupon_expires']      =  self::get_coupon_expires($coupon);
            $coupon_data['email_restriction']   = $coupon->get_email_restrictions();
            $coupon_data['coupon_id']           = $coupon->get_id();
            $coupon_data['start_date']   = self::get_coupon_start_date($coupon->get_id(), true, true);

            return apply_filters('wt_smart_coupon_meta_data', $coupon_data, $coupon);
        }
        public static function get_coupon_expires($coupon)
        {          
            $coupon_id = $coupon->get_id();
            $coupon_expiry = null;
            $coupon_expiry_days = (int) get_post_meta($coupon_id, '_wt_coupon_expiry_in_days', true);
            $coupon_expiry_days_enabled = (bool) (get_post_meta($coupon_id, '_wt_coupon_enable_days', true));
            
            if($coupon_expiry_days_enabled === true && $coupon_expiry_days>0)
            {
                $coupon_created = $coupon->get_date_created()->getOffsetTimestamp();
                $start_date=self::get_coupon_start_date($coupon_id , true, true);
                $base_date = (isset($start_date) && !empty($start_date) ? $start_date : $coupon_created);
                $coupon_expiry_days = '+'.$coupon_expiry_days.' days';
                $coupon_expiry = strtotime($coupon_expiry_days, $base_date);
                
            }else
            {
                $coupon_expiry_date = $coupon->get_date_expires();
                if(isset($coupon_expiry_date) && $coupon_expiry_date !== null)
                {
                   $coupon_expiry = $coupon_expiry_date->getOffsetTimestamp();
                }
            }
            return $coupon_expiry;
        }
         /**
         *  Get formatted Expiration date of a coupon.
         *  @since 1.3.2
         *  @since 2.0.1  Added support for offset timestamp
         */
        public static function get_coupon_start_date($coupon_id , $timestamp = false, $offset_timestamp=false) {
            if($timestamp === true )
            {
                $out=(int) get_post_meta($coupon_id, '_wt_coupon_start_date_timestamp', true);
            }else
            {
                $out=get_post_meta( $coupon_id, '_wt_coupon_start_date', true );
            }
           
            if($offset_timestamp===true)
            {
                if($out)
                {
                    $out = Wt_Smart_Coupon_Admin::wt_sc_get_date_prop($out)->getOffsetTimestamp();
                }
            }
            return $out;
        }
        

        /**
         *  Get formatted Start/Expiry date of a coupon.
         *  @since 2.0.1
         */
        public static function get_coupon_start_expiry_date_texts($date, $type="start_date")
        {
            if("start_date"===$type)
            {
                $show_start_date = false;
                $show_start_date = apply_filters('wt_smart_coupon_show_start_date', $show_start_date);
                if($show_start_date === false)
                {
                    return '';
                }
            }

            $days_diff= (($date - time())/(24*60*60));
            if($days_diff<0)
            {
                $date_text=($type=="start_date" ? '' : 'expired');
            }else
            {
                $date_text=($type=="start_date" ? __('Starts on ', 'wt-smart-coupons-for-woocommerce-pro') : __('Expires on ', 'wt-smart-coupons-for-woocommerce-pro')). esc_html(date_i18n(get_option('date_format', 'F j, Y'), $date)); 
                $date_text=apply_filters('wt_sc_alter_coupon_start_expiry_date_text', $date_text, $date, $type);
            }
            
            return $date_text;
        }

        /**
         * Get all coupons used by a customer in previous orders.
         * @since 1.0.0
         */
        public static function get_coupon_used_by_a_customer( $user,$coupon_code = '', $return = 'COUPONS' ){
            global $current_user,$woocommerce,$wpdb;

            if( !$user ) {
                $user = wp_get_current_user();
            }
            $coupon_used = array();
            $customer_id = $user->ID;
            $args = array(
                'numberposts' => -1,
                'meta_key' => '_customer_user',
                'meta_value'	=> $customer_id,
                'post_type' => 'shop_order',
                'post_status' => 'any'
            );
            $customer_orders = get_posts($args);
            if ($customer_orders) :
                foreach ($customer_orders as $customer_order) :
                    $order = wc_get_order( $customer_order->ID );
                    if( Wt_Smart_Coupon::wt_sc_is_woocommerce_prior_to( '3.7' ) ) {
                        $coupons  = $order->get_used_coupons();
                    } else {
                        $coupons  = $order->get_coupon_codes();
                    }
                    if( $coupons ) {
                        $coupon_used = array_merge( $coupon_used, $coupons );
                    }
                endforeach;

                if( $return =='NO_OF_TIMES' && $coupon_code != '' ) {
                    $count_of_used = array_count_values($coupon_used);
                    
                    return isset( $count_of_used[ $coupon_code ] )? $count_of_used[ $coupon_code ] : 0 ;

                }
                return apply_filters('wt_smart_coupon_used_coupons',array_unique( $coupon_used ),$user );

            else :
                return false;
            endif;
        }

        public static function prepare_user_role_sql_for_coupon_query($user)
        {
            global $wpdb;
            $user_roles = (isset($user->roles) && is_array($user->roles) ? $user->roles : array());
            $role_sql="";
            $role_sql_arr=array();
            if(!empty($user_roles))
            {
                foreach($user_roles as $k=>$user_role)
                {
                    $role_sql_arr[]="pm6.meta_value LIKE %s";
                    $user_roles[$k]=$wpdb->esc_like($user_role);
                }
                $role_sql=$wpdb->prepare(" OR ".implode(" OR ", $role_sql_arr), $user_roles);
            }
            return $role_sql;
        }

        public static function prepare_email_sql_for_coupon_query($email, $user_id)
        {
            global $wpdb;
            
            if($email!="" && $user_id>0)
            {
                $email_sql=" OR pm2.meta_value LIKE %s";
                $email_sql_val='%'.$wpdb->esc_like($email).'%';
            }else{
                $email_sql=" OR pm2.meta_value=%s";
                $email_sql_val='';
            }
            return array($email_sql, $email_sql_val);
        }

        /**
         *  Print available coupon for a user
         *  @param $user        object  WP_User instance.
         *  @param $section     string  section to print 
         *  @param $offset      int     offset of records 
         *  @param $limit       int     max records 
         *  @param $print       bool    If false function will only return the data as array. Otherwise print the data along with return
         *  
         *  @return array    array of coupon objects. Empty array if no record exists
         */
        public static function print_user_available_coupon($user = '', $section = 'my_account', $offset=0, $limit=30, $print=true)
        {
            global $wpdb;
            if(!$user)
            {
                $user= wp_get_current_user();
            }
            if($user)
            {
                $user_id = $user->ID; 
                $email = $user->user_email;
            }else
            {
                return array();
            }
            
            $display_invalid_coupons  = apply_filters('wt_smart_coupon_display_invalid_coupons', true);
            
            $role_sql=self::prepare_user_role_sql_for_coupon_query($user);

            $email_sql_arr=self::prepare_email_sql_for_coupon_query($email, $user_id);

            $sql=$wpdb->prepare("SELECT p.`ID`
            FROM  {$wpdb->posts} AS p 
                   LEFT JOIN {$wpdb->postmeta} AS pm1 ON  (p.`ID` = pm1.`post_id` AND pm1.meta_key = '_wc_make_coupon_available') 
                   LEFT JOIN {$wpdb->postmeta} AS pm2 ON  (p.`ID` = pm2.`post_id` AND pm2.meta_key = 'customer_email') 
                   LEFT JOIN {$wpdb->postmeta} AS pm3 ON  (p.`ID` = pm3.`post_id` AND pm3.meta_key = 'usage_limit') 
                   LEFT JOIN {$wpdb->postmeta} AS pm4 ON  (p.`ID` = pm4.`post_id` AND pm4.meta_key = 'usage_count') 
                   LEFT JOIN {$wpdb->postmeta} AS pm5 ON  (p.`ID` = pm5.`post_id` AND pm5.meta_key = 'usage_limit_per_user') 
                   LEFT JOIN {$wpdb->postmeta} AS pm6 ON  (p.`ID` = pm6.`post_id` AND pm6.meta_key = '_wt_sc_user_roles')  
                   LEFT JOIN {$wpdb->postmeta} AS pm7 ON  (p.`ID` = pm7.`post_id` AND pm7.meta_key = '_wt_coupon_start_date') 
                   LEFT JOIN {$wpdb->postmeta} AS pm8 ON  (p.`ID` = pm8.`post_id` AND pm8.meta_key = 'date_expires') 
                   LEFT JOIN {$wpdb->postmeta} AS pm9 ON  (p.`ID` = pm9.`post_id` AND pm9.meta_key = '_wt_coupon_expiry_in_days') 
                   LEFT JOIN {$wpdb->postmeta} AS pm10 ON  (p.`ID` = pm10.`post_id` AND pm10.meta_key = '_wt_coupon_enable_days') 
                   LEFT JOIN {$wpdb->postmeta} AS pm11 ON  (p.`ID` = pm11.`post_id` AND pm11.meta_key = 'discount_type') 
                   LEFT JOIN {$wpdb->postmeta} AS pm12 ON  (p.`ID` = pm12.`post_id` AND pm12.meta_key = 'coupon_amount')
            WHERE  p.`post_type` = 'shop_coupon' 
                   AND p.`post_status` = 'publish' 
                   AND pm1.meta_value LIKE %s
                   AND (pm2.meta_value IS NULL$email_sql_arr[0]) 
                   AND (pm3.meta_value IS NULL OR pm3.meta_value = 0 OR (pm3.meta_value > 0 AND pm3.meta_value > pm4.meta_value))  
                   AND (pm5.meta_value IS NULL OR pm5.meta_value = 0 OR (pm5.meta_value > 0 AND (SELECT COUNT(pm6.meta_id) FROM {$wpdb->postmeta} AS pm6 WHERE pm6.post_id = p.`ID` AND pm6.meta_key = '_used_by' AND pm6.meta_value = 1) < pm5.meta_value))  
                   AND (pm6.meta_value IS NULL OR pm6.meta_value = ''$role_sql)     
                   AND (((pm10.meta_value = 0 OR pm10.meta_value IS NUll) AND pm8.meta_value IS NULL) 
                       OR (pm7.meta_value != '' AND pm10.meta_value = 1 AND pm9.meta_value > 0 AND DATE_ADD(pm7.meta_value, INTERVAL pm9.meta_value DAY) >= CURRENT_DATE()) 
                       OR (pm7.meta_value = '' AND pm10.meta_value = 1 AND pm9.meta_value > 0 AND DATE_ADD(p.post_date_gmt, INTERVAL pm9.meta_value DAY) >= CURRENT_DATE()) 
                       OR (pm10.meta_value = 0 AND pm8.meta_value IS NOT NULL AND FROM_UNIXTIME(pm8.meta_value) >= CURRENT_DATE())
                   ) 
                   AND ((pm11.meta_value = 'store_credit' AND pm12.meta_value > 0) OR pm11.meta_value != 'store_credit')                   
            ORDER  BY p.`ID` ASC LIMIT %d, %d", '%'.$wpdb->esc_like($section).'%', $email_sql_arr[1], $offset, $limit);

            $out=array();
            $post_ids=$wpdb->get_results($sql);
            
            if(!empty($post_ids))
            {
                echo '<div class="wt_coupon_wrapper">';
                foreach($post_ids as $post_id)
                {
                    $post=get_post($post_id);
                    $coupon_obj = new WC_Coupon($post->ID);
                    $coupon_data  = Wt_Smart_Coupon_Public::get_coupon_meta_data($coupon_obj);
                    $coupon_data['display_on_page'] = $section.'_page';

                    if($display_invalid_coupons === false && $coupon_obj->is_valid() === false)
                    {
                        continue;
                    }

                    /* alter coupon post object before printing */
                    $post=apply_filters('wt_alter_coupon_for_user_before_printing', $post, $user, $section);
                    
                    /* alter coupon data before printing */
                    $coupon_data=apply_filters('wt_alter_coupon_data_for_user_before_printing', $coupon_data, $post, $user, $section);

                    echo self::get_coupon_html($post, $coupon_data);
                    $out[]=$coupon_obj;
                }
                echo '</div>';
            }else
            {
                if($section === 'my_account')
                {
                    _e("Sorry, you don't have any available coupons" ,'wt-smart-coupons-for-woocommerce-pro');
                }
            }
        }
        
        /**
         * Get available coupons
         * @since 1.1.0
         * @since 2.0.1 Code restructured
         */
        public static function get_available_coupons_for_user($user = '', $section = 'my_account', $offset=0, $limit=-1)
        {
            global $wpdb;
            if(!$user){
                $user= wp_get_current_user();
            }
            if($user)
            {
                $user_id = $user->ID; 
                $email = $user->user_email;
            }


            $coupons_available_in_any_page = $wpdb->get_results("SELECT meta.`post_id`,meta.`meta_value` FROM `" . $wpdb->postmeta . "` meta WHERE  ( meta.`meta_key` =  '_wc_make_coupon_available' AND meta.`meta_value`!= '' )");

            $available_coupon_ids= array();
            if(!empty($coupons_available_in_any_page))
            {
                foreach($coupons_available_in_any_page as $coupons)
                {
                    if(in_array($section, explode(',', $coupons->meta_value)))
                    {
                        $available_coupon_ids[] = $coupons->post_id;
                    }
                }
            }
           
            $coupons = array();
            if(!empty($available_coupon_ids))
            {
                $coupon_args = array(
                    'post_type' => 'shop_coupon',
                    'post__in' => $available_coupon_ids,
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'posts_per_page' => '-1'
                );
                $coupons = get_posts($coupon_args);
            }
            return apply_filters('wt_available_coupons_for_user', $coupons, $user, $section);
        }


        /**
         * Action for displaying avalable coupon in cart page.
         * @since 1.1.0
         */
        public function display_available_coupon_in_cart()
        {
            $offset=0; 
            $limit=30;
            self::print_user_available_coupon('', 'cart', $offset, $limit);
        }

         /**
         * Action for displaying avalable coupon in checkout page.
         * @since 1.1.0
         */
        public function display_available_coupon_in_checkout()
        {
            $offset=0; 
            $limit=30;
            self::print_user_available_coupon('', 'checkout', $offset, $limit);
        }
        

        /**
         * get coupon html based on current style
         * @since 1.1.0
         */

        public static function get_coupon_html($coupon, $coupon_data, $coupon_type = "available_coupon" ) {
            
            if(!class_exists('Wt_Smart_Coupon_Style'))
            {
                return;
            }           
            $admin_options = Wt_Smart_Coupon_Style::get_current_coupon_style(); 
            
            $display_on_class = (isset($coupon_data['display_on_page']))? $coupon_data['display_on_page'] : ''; // for apply on click.
            $coupon_style   = isset( $admin_options[$coupon_type] )? $admin_options[$coupon_type] : $admin_options['available_coupon'];
            $style_name     = $coupon_style['style'];
            $colors         = $coupon_style['color'];
            $block_title    = '';
            $start_text = '';
            switch( $coupon_type ) {
                case 'expired_coupon' : 
                    $coupon_class   = ' used-coupon expired';
                    break;
                case 'used_coupon' :
                    $coupon_class   = ' used-coupon';
                    
                    break;
                default :
                    $coupon_class = 'active-coupon';
                    $block_title = 'title = "'.__('Click to apply coupon','wt-smart-coupons-for-woocommerce-pro').'"';
                    
            }

            $coupon_class .= ' '.$display_on_class;
            $is_store_credit = false;
            $coupon_id=0;
            if( $coupon !== -1 ) { // skip the preview mode
                if( $coupon instanceof WC_Coupon ) {
                    $coupon =  get_post( $coupon->get_id() );
                }
                $coupon_id=$coupon->ID;
                $coupon_obj = new WC_Coupon( $coupon_id );
                if( $coupon_data['coupon_expires'] ) {
    
                    $exp_date =  $coupon_data['coupon_expires'];
                    $expire_text = Wt_Smart_Coupon_Public::get_coupon_start_expiry_date_texts($exp_date, "expiry_date");
                    
                } else{
                    $expire_text = '';
                }
                
                if(isset($coupon_data['start_date'])) {

                    $start_date =  $coupon_data['start_date'];
                    $start_text = Wt_Smart_Coupon_Public::get_coupon_start_expiry_date_texts($start_date);                  
                }
                $coupon_desc        = $coupon_obj->get_description();
                $coupon_code        = $coupon_obj->get_code();
                $is_store_credit    = ( $coupon_obj->is_type('store_credit') )? true: false;
                $coupon_id          =  $coupon_data['coupon_id'];
                $store_credit_title = __('Credit history','wt-smart-coupons-for-woocommerce-pro');

            } else {
                $coupon_code = $expire_text = '';
                $block_title = '';

            }

            // remove click to apply title for store credit

            // if( $is_store_credit ) {
            //     $block_title = '';
            // }

            if( '' == $display_on_class || 'by_shortcode' == $display_on_class ) {
                $block_title = '';
            }
            
            $coupon_id_attribute=' data-id="'.esc_attr($coupon_id).'" ';

            switch( $style_name ) {
    
                case 'stitched_padding' :
                        $style= 'style = "background:'.$colors[0].';color:'.$colors[2].';border:2px dashed '.$colors[1].';box-shadow: 0 0 0 4px '.$colors[0].',2px 1px 6px 4px rgba(10, 10, 0, 0)"';
                        $coupon_html =  '
                        <div class="wt-single-coupon  '.$coupon_class.' '. $style_name .'"  '.$style.' '.$block_title.$coupon_id_attribute.'  >
                            <div class="wt-coupon-content">
                                <div class="wt-coupon-amount">
                                    <span class="amount">'.$coupon_data['coupon_amount'].'</span>
                                    <span>'.$coupon_data['coupon_type'].'</span>
                                </div>
                                <div class="wt-coupon-code"> 
                                    <code>' .$coupon_code.'</code>
                                </div>';
                                if(  '' != $start_text ) {
                                    $coupon_html .= '<div class="wt-coupon-start">'.$start_text.'</div>';
                                }
                                if(  'used_coupon' != $coupon_type  && '' != $expire_text ) { 
                                    $coupon_html .= '<div class="wt-coupon-expiry">'.$expire_text.'</div>';
                                }
                                if( 'available_coupon' == $coupon_type &&'' != $coupon_desc ) {
                                    $coupon_html .= '<div class="coupon-desc-wrapper">
                                        <i class="info"> i </i>
                                        <div class="coupon-desc">'.$coupon_desc.'</div>
                                    </div>';
                                }

                                if( isset( $coupon_data['display_on_page'] ) && $coupon_data['display_on_page'] !='credit_meta' && $is_store_credit ) {
                                    $coupon_html .= '<div class="coupon-history">
                                            <a title="'.$store_credit_title.'" class="credit_history" href="'.self::get_store_credit_url($coupon_id).'"><span class="dashicons dashicons-backup"></span> </a>
                                        </div>';
                                }
                                $coupon_html .= '
                            </div>
                        </div>';
                        break;
                case 'stitched_edge' :
                    $style = 'style="background: '.$colors[0].';color: '.$colors[2].'; border:2px dashed  '.$colors[1].';box-shadow:none"';
                    $coupon_html = '<div class="wt-single-coupon  '.$coupon_class.' '.$style_name.'"  '.$style.' '.$block_title.$coupon_id_attribute.' >
                        <div class="wt-coupon-content">
                            <div class="wt-coupon-amount">
                                <span class="amount">'.$coupon_data['coupon_amount'].'</span>
                                <span> '.$coupon_data['coupon_type'].'</span>
                            </div>
                            <div class="wt-coupon-code"> 
                                <code>'.$coupon_code.'</code>
                            </div>';
                            if(  '' != $start_text ) {
                                $coupon_html .= '<div class="wt-coupon-start">'.$start_text.'</div>';
                            }
                            if(  'used_coupon' != $coupon_type  && '' != $expire_text ) { 
                                $coupon_html .= '<div class="wt-coupon-expiry">'.$expire_text.'</div>';
                            }
                            if( 'available_coupon' == $coupon_type &&'' != $coupon_desc ) {
                                $coupon_html .= '<div class="coupon-desc-wrapper">
                                    <i class="info"> i </i>
                                    <div class="coupon-desc">'.$coupon_desc.'</div>
                                </div>';
                            }
                            if( isset( $coupon_data['display_on_page'] ) && $coupon_data['display_on_page'] !='credit_meta' && $is_store_credit ) {
                                $coupon_html .= '<div class="coupon-history">
                                        <a title="'.$store_credit_title.'"  class="credit_history" href="'.self::get_store_credit_url($coupon_id) .'"> <span class="dashicons dashicons-backup"></span> </a>
                                    </div>';
                            }
                            $coupon_html .= '
                        </div>
                    </div>';
                    break;
                case 'ticket_style' : 
                    $style1 = 'style="background:'.$colors[0] .'; border:1px dotted '.$colors[1].'; color: '.$colors[2].'"';
                    $style2 = 'style="color: '.$colors[1] .'"';
                    $coupon_html ='<div class="wt-single-coupon  '.$coupon_class.' '.$style_name.'" '.$style1.' '.$block_title.$coupon_id_attribute.' >
                                <div class="wt-coupon-content">
                                    <div class="wt-coupon-amount"  '.$style2.' >
                                        <span class="amount">'.$coupon_data['coupon_amount'].'</span>
                                    </div>
                                    <div class="wt-coupon-code"> 
                                        <span class="discount_type"> '.$coupon_data['coupon_type'].' </span>
                                        <code>' .$coupon_code. '</code>
                                    </div>';
                                    
                                    if( 'available_coupon' == $coupon_type &&'' != $coupon_desc ) {
                                        $coupon_html .= '<div class="coupon-desc-wrapper">
                                            <i class="info"> i </i>
                                            <div class="coupon-desc">'.$coupon_desc.'</div>
                                        </div>';
                                    }
                                    if( isset( $coupon_data['display_on_page'] ) && $coupon_data['display_on_page'] !='credit_meta' && $is_store_credit ) {
                                        $coupon_html .= '<div class="coupon-history">
                                                <a title="'.$store_credit_title.'"  class="credit_history" href="'.self::get_store_credit_url($coupon_id).'"> <span class="dashicons dashicons-backup"></span> </a>
                                            </div>';
                                    }
                                    $coupon_html .= '
                                </div>
                            </div>';
                        break;
    
                case 'plain_coupon' :
					$style  = 'style="background:'.$colors[0].'; color:'.$colors[1].';"';
                   
                    $coupon_html = '<div class="wt-single-coupon  '.$coupon_class.' '.$style_name.'"  '.$style.' '.$block_title.$coupon_id_attribute.' >
                                    <div class="wt-coupon-content">
                                        <div class="wt-coupon-amount">
                                            <span class="amount">'.$coupon_data['coupon_amount'].'</span>
                                            <span> '.$coupon_data['coupon_type'].' </span>
                                        </div>
                                        <div class="wt-coupon-code"> 
                                            <code>' .$coupon_code. '</code>
                                        </div>';
                                        if(  '' != $start_text ) {
                                            $coupon_html .= '<div class="wt-coupon-start">'.$start_text.'</div>';
                                        }
                                        if(  'used_coupon' != $coupon_type  && '' != $expire_text ) { 
                                            $coupon_html .= '<div class="wt-coupon-expiry">'.$expire_text.'</div>';
                                        }
                                        if( 'available_coupon' == $coupon_type &&'' != $coupon_desc ) {
                                            $coupon_html .= '<div class="coupon-desc-wrapper">
                                                <i class="info"> i </i>
                                                <div class="coupon-desc">'.$coupon_desc.'</div>
                                            </div>';
                                        }
                                        if( isset( $coupon_data['display_on_page'] ) && $coupon_data['display_on_page'] !='credit_meta' &&  $is_store_credit ) {
                                            $coupon_html .= '<div class="coupon-history">
                                                    <a title="'.$store_credit_title.'"  class="credit_history" href="'.self::get_store_credit_url($coupon_id).'"><span class="dashicons dashicons-backup"></span></a>
                                                </div>';
                                        }
                                        $coupon_html .= '
                                    </div>
                                </div>';
                    break;
                default : 
                $style= 'style = "background:'.$colors[0].';color:'.$colors[2].';border:2px dashed '.$colors[1].';box-shadow: 0 0 0 4px '.$colors[0].',2px 1px 6px 4px rgba(10, 10, 0, 0)"';

                    $coupon_html = '
                    <div class="wt-single-coupon  '.$coupon_class.' '. $style_name .'"  '.$style.' '.$block_title.$coupon_id_attribute.'>
                            <div class="wt-coupon-content">
                                <div class="wt-coupon-amount">
                                    <span class="amount">'.$coupon_data['coupon_amount'].'</span>
                                    <span> '.$coupon_data['coupon_type'].'</span>
                                </div>
                                <div class="wt-coupon-code"> 
                                    <code>'.$coupon_code.'</code>
                                </div>';
                                if(  '' != $start_text ) {
                                    $coupon_html .= '<div class="wt-coupon-start">'.$start_text.'</div>';
                                }
                                if(  'used_coupon' != $coupon_type  && '' != $expire_text ) { 
                                    $coupon_html .= '<div class="wt-coupon-expiry">'.$expire_text.'</div>';
                                }
                                if( 'available_coupon' == $coupon_type &&'' != $coupon_desc ) {
                                    $coupon_html .= '<div class="coupon-desc-wrapper">
                                        <i class="info"> i </i>
                                        <div class="coupon-desc">'.$coupon_desc.'</div>
                                    </div>';
                                }
                                if( isset( $coupon_data['display_on_page'] ) && $coupon_data['display_on_page'] !='credit_meta' && $is_store_credit ) {
                                    $coupon_html .= '<div class="coupon-history">
                                            <a title="'.$store_credit_title.'"  class="credit_history" href="'.self::get_store_credit_url($coupon_id).'"><span class="dashicons dashicons-backup"></span> </a>
                                        </div>';
                                }
                                $coupon_html .= '
                            </div>
                        </div>';
                        break;
                
    
            }

            return $coupon_html;
        }


       


        /**
         * Ajax action function for applying coupon on button click
         */
        function apply_coupon() {
            check_ajax_referer( 'wt_smart_coupons_apply_coupon', '_wpnonce' );
            $coupon_code = ( isset( $_POST['coupon_code'])  ?  Wt_Smart_Coupon_Security_Helper::sanitize_item( $_POST['coupon_code'] ) : false);
            $coupon_id = ( isset($_POST['coupon_id'])  ?  Wt_Smart_Coupon_Security_Helper::sanitize_item( $_POST['coupon_id'], 'absint' ) : 0);
            if( !$coupon_code && $coupon_id===0) {
                return;
            }
            if($coupon_id>0)
            {
                $coupon_obj = new WC_Coupon( $coupon_id );
                if($coupon_obj instanceof WC_Coupon)
                {
                    $coupon_code=$coupon_obj->get_code();
                }
            }

            if( WC()->cart->get_cart_contents_count() != 0 ) {
      
                WC()->cart->add_discount( $coupon_code );
            } else {
                $new_message = apply_filters( 'wt_smart_coupon_click_to_apply_coupon_message_cart_empty', __('Coupon code applied successfully, Please add products into cart','wt-smart-coupons-for-woocommerce-pro') );
                $this->start_overwrite_coupon_success_message($coupon_code,$new_message);
           
                WC()->cart->add_discount( $coupon_code );
                $this->stop_overwrite_coupon_success_message();
            }
            wc_print_notices();

            die();
        }


        /**
         * Overwrite the coupon added message
         */
        public function start_overwrite_coupon_success_message($coupon, $new_message = "")
        {
            $this->overwrite_coupon_message[$coupon] =  $new_message;
            add_filter('woocommerce_coupon_message', array( $this, 'overwrite_coupon_code_message'), 10, 3);
        }

        /**
         * Display the coupon message
         */
        public function overwrite_coupon_code_message($msg, $msg_code, $coupon)
        {
            if(isset($this->overwrite_coupon_message[$coupon->get_code()]))
            {
                $msg = $this->overwrite_coupon_message[$coupon->get_code()];
            }
            return $msg;
        }

        /**
         * Stop overwriting coupon
         */
        public function stop_overwrite_coupon_success_message()
        {
            remove_filter('woocommerce_coupon_message', array( $this, 'overwrite_coupon_code_message'), 10);
            $this->overwrite_coupon_message = array();
        }



        /**
         * Add Gift coupon details with order table.
         * @since 1.1.0
         */
        function add_coupon_details_with_order( $order ) {
            $order_id = $order->get_id();
            $coupon_attached = get_post_meta( $order_id , 'wt_coupons', true );
            if( $coupon_attached ) {
                $coupons = maybe_unserialize( $coupon_attached );
                if( empty($coupons )) {
                    return;
                }
                ?>
                <h4><?php _e('Gift coupons issued','wt-smart-coupons-for-woocommerce-pro'); ?></h4>
                <table>
                    <tr>
            
                        <td><?php _e('No of coupons gifted','wt-smart-coupons-for-woocommerce-pro'); ?></td>
                        <td><?php echo sizeof( $coupons ); ?></td>
                    </tr>
                </table>

                <?php
                
            }
        }

        /**
         * Add Gift coupon details with Email order.
         *  @since 1.1.0</table>
         */
        function add_coupon_details_with_order_email( $order, $sent_to_admin, $plain_text, $email ) {
            if( $sent_to_admin ) {
                return;
            }

            $order_id = $order->get_id();
            $coupon_attached = get_post_meta( $order_id , 'wt_coupons', true );
            if( $coupon_attached ) {
                $coupons = maybe_unserialize( $coupon_attached );
                ?>
                <h2><?php _e('Gift coupons issued','wt-smart-coupons-for-woocommerce-pro'); ?></h2>
                <?php
                if( $plain_text ) {
                    _e('No of coupons gifted: ','wt-smart-coupons-for-woocommerce-pro');
                    echo sizeof( $coupons );
                } else {
                    ?>
                    <div style="margin-bottom:20px">
                        <table cellspacing="0" cellpadding="6"  style="color:#636363;border:none;vertical-align:middle;width:100%;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif" >
                            
                            <tr>
                                <th colspan="2" style="border:1px solid #e5e5e5"><?php _e('No of coupons gifted','wt-smart-coupons-for-woocommerce-pro'); ?></th>
                                <td style="border:1px solid #e5e5e5" ><?php echo sizeof( $coupons ); ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>

                <?php

                }
            }
        }



        public static function get_store_credit_url( $coupon_id ) {
			$view_store_credit_url = wc_get_endpoint_url('wt-view-store-credit', $coupon_id, wc_get_page_permalink('myaccount'));
			return apply_filters('wt_smart_coupon_view_credit_history_url', $view_store_credit_url, $coupon_id );
		}

        /**
        * Check if coupon applicable to specific user roles
        *
        * @since  1.2.6
        * @access public
        * @return bool
        */
        public static function _wt_sc_check_valid_user_roles( $coupon_id ){
            $_wt_sc_user_roles         = get_post_meta($coupon_id, '_wt_sc_user_roles',true);
            if( isset( $_wt_sc_user_roles ) ) {
                if( ''!= $_wt_sc_user_roles && ! is_array( $_wt_sc_user_roles ) ) {
                    $_wt_sc_user_roles = explode(',',$_wt_sc_user_roles);
                } 
                $user = wp_get_current_user();
                if( isset( $user )) {
                    $user_roles = ( isset( $user->roles ) && is_array( $user->roles ) ) ? $user->roles : array();
                    if( !empty( $_wt_sc_user_roles )){
                        $roles = array_intersect($user_roles, $_wt_sc_user_roles);
                        if(empty($roles)){
                            return false;
                        }
                    }
                }
            }
            return true;
        }

        /**
         *  Alter calculate totals priority of `Advanced Dynamic Pricing for WooCommerce - By AlgolPlus` plugin to get compatibility
         *  @since  2.0.4
         *  @param  int priority number
         *  @return int priority number
         */
        public function alter_advanced_dynamic_pricing_plugin_calculate_totals_hook_priority($priority)
        {
            return 1; //our calculate_totals priority is 1000
        }
    }
}