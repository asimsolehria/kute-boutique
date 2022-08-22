<?php

/**
 * Notifications Instances Class.
 * */
if ( ! defined( 'ABSPATH' ) ) {
	exit ; // Exit if accessed directly.
}

if ( ! class_exists( 'GTC_Notification_Instances' ) ) {

	/**
	 * Class.
	 * */
	class GTC_Notification_Instances {

		/**
		 * Notifications.
		 * 
		 * @var array
		 * */
		private static $notifications = array() ;

		/**
		 * Get the all notifications.
		 * 
		 * @return array
		 * */
		public static function get_notifications() {

			if ( ! self::$notifications ) {
				self::load_notifications() ;
			}

			return self::$notifications ;
		}

		/**
		 * Load all Notifications.
		 * */
		public static function load_notifications() {

			if ( ! class_exists( 'GTC_Notifications' ) ) {
				include GTC_PLUGIN_PATH . '/inc/abstracts/abstract-gtc-notifications.php' ;
			}

			// Initiate the WC Emails.
			WC()->mailer() ;
			/**
			 * This hook is used to alter the gift card email classes.
			 * 
			 * @since 1.0
			 */
			$default_notification_classes = apply_filters( 'gtc_gift_cards_email_classes', array(
				'customer-virtual-gift-card'         => 'GTC_Customer_Virtual_Gift_Card_Notification',
				'customer-product-gift-card'         => 'GTC_Customer_Product_Gift_Card_Notification',
				'customer-promotional-gift-card'     => 'GTC_Customer_Promotional_Gift_Card_Notification',
				'customer-gift-card-expiry-reminder' => 'GTC_Customer_Gift_Card_Expiry_Reminder_Notification',
				'customer-gift-card-expired'         => 'GTC_Customer_Gift_Card_Expired_Notification',
					) ) ;

			foreach ( $default_notification_classes as $file_name => $notification_class ) {

				// Include notification file.
				include 'class-' . $file_name . '.php' ;

				// Add notification Object.
				self::add_notification( new $notification_class() ) ;
			}
		}

		/**
		 * Add a notification.
		 * 
		 * */
		public static function add_notification( $notification ) {

			self::$notifications[ $notification->get_id() ] = $notification ;
		}

		/**
		 * Get the notification by id.
		 * 
		 * @return object/bool
		 * */
		public static function get_notification_by_id( $notification_id ) {
			$notifications = self::get_notifications() ;

			return isset( $notifications[ $notification_id ] ) ? $notifications[ $notification_id ] : false ;
		}

		/**
		 * Reset.
		 * */
		public static function reset() {
			self::$notifications = null ;
		}

	}

}

