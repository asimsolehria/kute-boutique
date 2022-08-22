<?php

/**
 * Format the design.
 * */
if ( ! defined( 'ABSPATH' ) ) {
	exit ; // Exit if accessed directly.
}

if ( ! class_exists( 'GTC_Format_Design' ) ) {

	/**
	 * Class.
	 * */
	class GTC_Format_Design {

		/**
		 * Gift card.
		 * 
		 * @var object
		 */
		protected $gift_card ;

		/**
		 * Class Initialization.
		 */
		public function __construct( &$gift_card ) {
			$this->gift_card = $gift_card ;
		}

		/**
		 * Get the design.
		 * 
		 * @return string
		 */
		public static function get_design( &$gift_card ) {
			$object = new self( $gift_card ) ;

			return $object->get_formatted_design() ;
		}

		/**
		 * Get the formatted design.
		 * 
		 * @return bool
		 */
		public function get_formatted_design() {
			$formatted_design = '' ;

			switch ( $this->gift_card->get_type() ) {
				case 'promotional':
					$formatted_design = $this->formatted_promotional_gift_card() ;
					break ;
				case 'product':
					$formatted_design = $this->formatted_product_gift_card() ;
					break ;
				case 'virtual':
					$formatted_design = $this->formatted_virtual_gift_card() ;
					break ;
			}

			/**
			 * This hook is used to alter the formatted design of gift card.
			 * 
			 * @since 1.0
			 */
			return apply_filters( 'gtc_formatted_design', $formatted_design ) ;
		}

		/**
		 * Formatted product gift card design.
		 * 
		 * @return string
		 * */
		public function formatted_product_gift_card() {

			$replace_shortcodes = array(
				$this->get_gift_card_logo_image(),
				gtc_price( $this->gift_card->get_total_amount() ),
				$this->gift_card->get_code(),
				$this->gift_card->get_formatted_expiry_date(),
				$this->gift_card->get_sender_name(),
				$this->gift_card->get_sender_message(),
				$this->gift_card->get_product_name(),
				'<a href="' . esc_url( get_permalink( $this->gift_card->get_product_id() ) ) . '">' . $this->gift_card->get_product_name() . '</a>',
				$this->gift_card->get_product_image( array( 32, 32 ) ),
				gtc_price( $this->gift_card->get_product_price() )
					) ;

			$design     = gtc_get_template_html( 'design/product-gift-card-info.php' ) ;
			$custom_css = gtc_get_template_html( 'design/custom-css.php' ) ;

			$gift_card_info = str_replace( gtc_get_product_gift_card_template_shortcodes(), $replace_shortcodes, $design ) ;

			return gtc_add_html_inline_style( $gift_card_info, $custom_css ) ;
		}

		/**
		 * Formatted virtual gift card design.
		 * 
		 * @return string
		 * */
		public function formatted_virtual_gift_card() {

			$replace_shortcodes = array(
				$this->get_gift_card_logo_image(),
				gtc_price( $this->gift_card->get_total_amount() ),
				$this->gift_card->get_code(),
				$this->gift_card->get_formatted_expiry_date(),
				$this->gift_card->get_sender_name(),
				$this->gift_card->get_sender_message()
					) ;

			$design     = gtc_get_template_html( 'design/virtual-gift-card-info.php' ) ;
			$custom_css = gtc_get_template_html( 'design/custom-css.php' ) ;

			$gift_card_info = str_replace( gtc_get_virtual_gift_card_template_shortcodes(), $replace_shortcodes, $design ) ;

			return gtc_add_html_inline_style( $gift_card_info, $custom_css ) ;
		}

		/**
		 * Formatted promotional gift card design.
		 * 
		 * @return string
		 * */
		public function formatted_promotional_gift_card() {

			$replace_shortcodes = array(
				gtc_price( $this->gift_card->get_total_amount() ),
				$this->gift_card->get_code(),
				$this->gift_card->get_formatted_expiry_date(),
					) ;

			$design     = gtc_get_template_html( 'design/promotional-gift-card-info.php' ) ;
			$custom_css = gtc_get_template_html( 'design/custom-css.php' ) ;

			$gift_card_info = str_replace( gtc_get_promotional_gift_card_template_shortcodes(), $replace_shortcodes, $design ) ;

			return gtc_add_html_inline_style( $gift_card_info, $custom_css ) ;
		}

		/**
		 * Get the gift card logo image.
		 * 
		 * @return mixed
		 * */
		public function get_gift_card_logo_image() {

			switch ( $this->gift_card->get_design_type() ) {
				case '3':
					$image = '' ;
					break ;

				case '2':
					$image = '<img src="' . esc_url( gtc_get_design_image_url( $this->gift_card->get_product()->get_image_id() ) ) . '"/>' ;
					break ;

				default:
					$image = '' ;
					if ( ! empty( $this->gift_card->get_design_id() ) ) {
						$image = '<img src="' . esc_url( gtc_get_design_image_url( $this->gift_card->get_design_id() ) ) . '"/>' ;
					}
					break ;
			}

			return $image ;
		}

	}

}
	
