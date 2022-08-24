<?php
/**
 * This template is used to customize the template to sent customer emails.
 *
 * This template can be overridden by copying it to yourtheme/gift-cards-pro-for-woocommerce/design/virtual-gift-card-info.php
 *
 * To maintain compatibility, Gift Cards Pro for WooCommerce will update the template files and you have to copy the updated files to your theme
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit ; // Exit if accessed directly.
}
?>
<table class="gtc-wrapper">
	<tr>
		<td class="gtc-body-container">
			<table class="gtc-header gtc-container">
				<tr>
					<td>
						<table class="gtc-container">
							<tr>
								<td>[gift_card_logo]</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<table class="gtc-body gtc-container">
				<tr>
					<td>
						<table class="gtc-container">
							<tr>
								<td class="gtc-divide gtc-sender-table">
									<h4><?php esc_html_e( 'Sender Details' , 'gift-cards-pro-for-woocommerce' ) ; ?></h4>
									<table class="gtc-container gtc-sender-info">
										<tr>
											<th><?php esc_html_e( 'Sender Name' , 'gift-cards-pro-for-woocommerce' ) ; ?></th>
											<td>[sender_name]</td>
										</tr>
										<tr>
											<th><?php esc_html_e( 'Sender Message' , 'gift-cards-pro-for-woocommerce' ) ; ?></th>
											<td>[sender_message]</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<table class="gtc-container ">
							<tr>
								<td class="gtc-divide gtc-gift-card-table">
									<h4><?php esc_html_e( 'Gift Card Details' , 'gift-cards-pro-for-woocommerce' ) ; ?></h4>
									<table class="gtc-container gtc-gift-card-info">
										<tr>
											<th><?php esc_html_e( 'Gift Code' , 'gift-cards-pro-for-woocommerce' ) ; ?></th>
											<td>[gift_card_code]</td>
										</tr>
										<tr>
											<th><?php esc_html_e( 'Gift Amount' , 'gift-cards-pro-for-woocommerce' ) ; ?></th>
											<td>[gift_card_price]</td>
										</tr>
										<tr>
											<th><?php esc_html_e( 'Expiry Date' , 'gift-cards-pro-for-woocommerce' ) ; ?></th>
											<td>[expiry_date]</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<table class="gtc-container">
							<tr>
								<td class="gtc-what-next-table">
									<h4><?php esc_html_e( 'What Next?' , 'gift-cards-pro-for-woocommerce' ) ; ?></h4>
									<p><?php esc_html_e( 'You can use the Gift Card in the following ways,' , 'gift-cards-pro-for-woocommerce' ) ; ?></p>
									<p><?php esc_html_e( '1. Add the Gift Card to your account and use it at a later date.' , 'gift-cards-pro-for-woocommerce' ) ; ?></p>
									<p><?php esc_html_e( '2. Directly use the Gift Card on the cart and checkout pages' , 'gift-cards-pro-for-woocommerce' ) ; ?></p>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<?php
