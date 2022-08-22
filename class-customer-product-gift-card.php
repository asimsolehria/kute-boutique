<?php

/**
 * Customer - Product Gift Card.
 * */
if ( ! defined( 'ABSPATH' ) ) {
	exit ; // Exit if accessed directly.
}

if ( ! class_exists( 'GTC_Customer_Product_Gift_Card_Notification' ) ) {

	/**
	 * Class.
	 * */
	class GTC_Customer_Product_Gift_Card_Notification extends GTC_Notifications {

		/**
		 * Class Constructor.
		 * */
		public function __construct() {

			$this->id          = 'customer_product_gift_card' ;
			$this->type        = 'customer' ;
			$this->title       = esc_html__( 'Customer - Product Gift Card Received', 'gift-cards-pro-for-woocommerce' ) ;
			$this->description = esc_html__( 'This email will be sent to the user when they receive a product gift card.', 'gift-cards-pro-for-woocommerce' ) ;

			//Triggers for this email.
			add_action( sanitize_key( $this->plugin_slug . '_gift_card_manually_updated' ), array( $this, 'trigger' ), 10, 1 ) ;
			add_action( sanitize_key( $this->plugin_slug . '_order_gift_card_generated' ), array( $this, 'trigger' ), 10, 1 ) ;
			add_action( sanitize_key( $this->plugin_slug . '_gift_card_scheduled_email' ), array( $this, 'trigger' ), 10, 1 ) ;

			parent::__construct() ;
		}

		/**
		 * Default Subject.
		 * 
		 * @return string
		 * */
		public function get_default_subject() {

			return '{site_name} Gift Card Received' ;
		}

		/**
		 * Default Message.
		 * 
		 * @return string
		 * */
		public function get_default_message() {

			return 'Hi {username},
You have received the following Gift Card from {sender_name} and you can use it on {site_name}
{gift_card_info}
Thanks.' ;
		}

		/**
		 * Trigger the sending of this email.
		 * */
		public function trigger( $gift_card_id ) {
			// Is enabled?.
			if ( ! $this->is_enabled() ) {
				return ;
			}

			$gift_card = gtc_get_gift_card( $gift_card_id ) ;
			if ( ! $gift_card->exists() || ! $gift_card->has_status( 'gtc_unused' ) ) {
				return ;
			}

			// If the gift card is not a product type.
			if ( ! in_array( $gift_card->get_type(), array( 'product' ) ) ) {
				return ;
			}

			// Return If the recipient email does not exists.
			if ( empty( $gift_card->get_recipient_email() ) ) {
				return ;
			}

			$this->recipient                          = $gift_card->get_recipient_email() ;
			$this->placeholders[ '{username}' ]       = $gift_card->get_recipient_name() ;
			$this->placeholders[ '{sender_name}' ]    = $gift_card->get_sender_name() ;
			$this->placeholders[ '{gift_card_info}' ] = GTC_Format_Design::get_design( $gift_card ) ;

			if ( $this->get_recipient() ) {
				$this->send_email( $this->get_recipient(), $this->get_subject(), $this->get_formatted_message() ) ;
			}
		}

		/**
		 * Get the settings array.
		 * 
		 * @return array
		 * */
		public function get_settings_array() {
			$section_fields = array() ;

			//Email section start.
			$section_fields[] = array(
				'type'  => 'title',
				'title' => esc_html__( 'Product Gift Card Received', 'gift-cards-pro-for-woocommerce' ),
				'id'    => 'gtc_product_gift_card_email_options',
					) ;
			$section_fields[] = array(
				'title'   => esc_html__( 'Enable/Disable', 'gift-cards-pro-for-woocommerce' ),
				'type'    => 'checkbox',
				'default' => 'no',
				'id'      => $this->get_option_key( 'enabled' ),
				'desc'    => esc_html__( 'Enable this checkbox to send an email to your users when they receive a product gift card.', 'gift-cards-pro-for-woocommerce' ),
					) ;
			$section_fields[] = array(
				'title'   => esc_html__( 'Subject', 'gift-cards-pro-for-woocommerce' ),
				'type'    => 'text',
				'default' => $this->get_default_subject(),
				'id'      => $this->get_option_key( 'subject' ),
					) ;
			$section_fields[] = array(
				'title'     => esc_html__( 'Message', 'gift-cards-pro-for-woocommerce' ),
				'type'      => 'gtc_custom_fields',
				'gtc_field' => 'wpeditor',
				'default'   => $this->get_default_message(),
				'id'        => $this->get_option_key( 'message' ),
					) ;
			$section_fields[] = array(
				'type' => 'sectionend',
				'id'   => 'gtc_product_gift_card_email_options',
					) ;
			//Email section end.

			return $section_fields ;
		}

	}

}
