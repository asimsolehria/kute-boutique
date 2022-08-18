<?php
/**
 * Customer processingorder email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-processing-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 3.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Customer Processing Order</title>
    <style type="text/css">
      a { text-decoration: none; outline: none; }
      @media (max-width: 649px) {
        .o_col-full { max-width: 100% !important; }
        .o_col-half { max-width: 50% !important; }
        .o_hide-lg { display: inline-block !important; font-size: inherit !important; max-height: none !important; line-height: inherit !important; overflow: visible !important; width: auto !important; visibility: visible !important; }
        .o_hide-xs, .o_hide-xs.o_col_i { display: none !important; font-size: 0 !important; max-height: 0 !important; width: 0 !important; line-height: 0 !important; overflow: hidden !important; visibility: hidden !important; height: 0 !important; }
        .o_xs-center { text-align: center !important; }
        .o_xs-left { text-align: left !important; }
        .o_xs-right { text-align: left !important; }
        table.o_xs-left { margin-left: 0 !important; margin-right: auto !important; float: none !important; }
        table.o_xs-right { margin-left: auto !important; margin-right: 0 !important; float: none !important; }
        table.o_xs-center { margin-left: auto !important; margin-right: auto !important; float: none !important; }
        h1.o_heading { font-size: 32px !important; line-height: 41px !important; }
        h2.o_heading { font-size: 26px !important; line-height: 37px !important; }
        h3.o_heading { font-size: 20px !important; line-height: 30px !important; }
        .o_xs-py-md { padding-top: 24px !important; padding-bottom: 24px !important; }
        .o_xs-pt-xs { padding-top: 8px !important; }
        .o_xs-pb-xs { padding-bottom: 8px !important; }
      }
      @media screen {
        @font-face {
          font-family: 'Roboto';
          font-style: normal;
          font-weight: 400;
          src: local("Roboto"), local("Roboto-Regular"), url(https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu7GxKOzY.woff2) format("woff2");
          unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF; }
        @font-face {
          font-family: 'Roboto';
          font-style: normal;
          font-weight: 400;
          src: local("Roboto"), local("Roboto-Regular"), url(https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu4mxK.woff2) format("woff2");
          unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD; }
        @font-face {
          font-family: 'Roboto';
          font-style: normal;
          font-weight: 700;
          src: local("Roboto Bold"), local("Roboto-Bold"), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfChc4EsA.woff2) format("woff2");
          unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF; }
        @font-face {
          font-family: 'Roboto';
          font-style: normal;
          font-weight: 700;
          src: local("Roboto Bold"), local("Roboto-Bold"), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfBBc4.woff2) format("woff2");
          unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD; }
        .o_sans, .o_heading { font-family: "Roboto", sans-serif !important; }
        .o_heading, strong, b { font-weight: 700 !important; }
        a[x-apple-data-detectors] { color: inherit !important; text-decoration: none !important; }
      }
    </style>
    <!--[if mso]>
    <style>
      table { border-collapse: collapse; }
      .o_col { float: left; }
    </style>
    <xml>
      <o:OfficeDocumentSettings>
        <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
  </head>
  <body class="o_body o_bg-light" style="width: 100%;margin: 0px;padding: 0px;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;background-color: #dbe5ea;">

    <!--Header-->
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
        <tbody>
          <tr>
            <td class="o_bg-light o_px-xs o_pt-lg o_xs-pt-xs" style="background-color: #dbe5ea;padding-left: 8px;padding-right: 8px;padding-top: 32px;" align="center">
              <!--[if mso]><table width="632" cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td><![endif]-->
              <table class="o_block" role="presentation" style="max-width: 632px;margin: 0 auto;" width="100%" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                  <tr>
                    <td class="o_bg-white o_px o_py-md o_br-t o_sans o_text" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;background-color: #ffffff;border-radius: 4px 4px 0px 0px;padding-left: 16px;padding-right: 16px;padding-top: 24px;padding-bottom: 24px;" align="center">
                      <p style="margin-top: 25px;margin-bottom: 0px;"><a class="o_text-primary" href="<?php echo site_url(); ?>" style="text-decoration: none;outline: none;color: #126de5;"><img src="<?php echo site_url(); ?>/wp-content/uploads/2022/03/Black-Shipping-Box-Transparent.png"  style="max-width: 200px;-ms-interpolation-mode: bicubic;vertical-align: middle;border: 0;line-height: 100%;height: auto;outline: none;text-decoration: none;" width="200"></a></p>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!--[if mso]></td></tr></table><![endif]-->
            </td>
          </tr>
        </tbody>
      </table>

      <!--Hero-Section-->
      <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
        <tbody>
          <tr>
            <td class="o_bg-light o_px-xs" style="background-color: #dbe5ea;padding-left: 8px;padding-right: 8px;" align="center">
              <!--[if mso]><table width="632" cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td><![endif]-->
              <table class="o_block" role="presentation" style="max-width: 632px;margin: 0 auto;" width="100%" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                  <tr>
                    <td class="o_bg-white o_px-md o_py-xl o_xs-py-md o_sans o_text-md o_text-light" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 19px;line-height: 28px;background-color: #ffffff;color: #82899a;padding-left: 24px;padding-right: 24px;padding-top: 25px;padding-bottom: 25px;" align="center">
                      <h2 class="o_heading o_text-dark o_mb-xxs" style="font-family: Helvetica, Arial, sans-serif;font-weight: bold;margin-top: 0px;margin-bottom: 4px;color: #242b3d;font-size: 30px;line-height: 39px; text-align: center;">THANKS FOR YOU ORDER</h2>
                      <p class="o_mb-md" style="margin-top: 0px;margin-bottom: 24px;">Your order #<?php echo $order->get_order_number(); ?> has been received and now being processed!</p>
                      <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center">
                        <tbody>
                          <tr>
                            <td class="o_btn o_bg-primary o_br o_heading o_text" style="font-family: Helvetica, Arial, sans-serif;font-weight: bold;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;mso-padding-alt: 12px 24px;background-color: #9CC700;border-radius: 4px;" width="300" align="center">
                              <a class="o_text-white" href="<?php echo site_url(); ?>/order-tracking/" style="text-decoration: none;outline: none;color: #ffffff;display: block;padding: 12px 24px;mso-text-raise: 3px;">Track Your Order</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!--[if mso]></td></tr></table><![endif]-->
            </td>
          </tr>
        </tbody>
      </table>

      <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
        <tbody>
          <tr>
            <td class="o_bg-light o_px-xs" style="background-color: #dbe5ea;padding-left: 8px;padding-right: 8px;" align="center">
              <!--[if mso]><table width="632" cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td><![endif]-->
              <table class="o_block" role="presentation" style="max-width: 632px;margin: 0 auto;" width="100%" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                  <tr>
                    <td class="o_bg-white o_px-md o_py" style="background-color: #ffffff;padding-left: 24px;padding-right: 24px;padding-top: 16px;padding-bottom: 16px;" align="left">
                      <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                          <tr>
                            <td class="o_bg-primary o_br-l o_text-md o_text-white o_sans o_py-xs" style="vertical-align: top;font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 19px;line-height: 28px;background-color: #C99947;color: #ffffff;border-radius: 4px 0px 0px 4px;padding-top: 8px;padding-bottom: 0px;" width="40" align="right">
                              
                            </td>
                            <td class="o_bg-primary o_br-r o_text-xs o_text-white o_sans o_px o_py-xs" style="vertical-align: top;font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 18px;line-height: 26px;background-color: #C99947;color: #FFF;border-radius: 0px 4px 4px 0px;padding-left: 16px;padding-right: 16px;padding-top: 8px;padding-bottom: 8px;" align="left">
                              <p style="margin-top: 0px;margin-bottom: 0px;"><strong>ORDER & SHIPPING INFO</strong></p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!--[if mso]></td></tr></table><![endif]-->
            </td>
          </tr>
        </tbody>
      </table>

      <!--Details and shipping-->
      <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
        <tbody>
          <tr>
            <td class="o_bg-light o_px-xs" style="background-color: #dbe5ea;padding-left: 8px;padding-right: 8px;" align="center">
              <!--[if mso]><table width="632" cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td><![endif]-->
              <table class="o_block" role="presentation" style="max-width: 632px;margin: 0 auto;" width="100%" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                  <tr>
                    <td class="o_re o_bg-white o_px o_pb-md" style="font-size: 0;vertical-align: top;background-color: #ffffff;padding-left: 50px;padding-right: 16px;padding-bottom: 24px;" align="center">
                      <!--[if mso]><table cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td width="250" align="center" valign="top" style="padding: 0px 8px;"><![endif]-->
                      <div class="o_col o_col-3 o_col-full" style="display: inline-block;vertical-align: top;width: 100%;max-width: 250px;">
                        <div style="font-size: 24px; line-height: 10px; height: 10px;">&nbsp; </div>
                        <div class="o_px-xs o_sans o_text-xs o_text-secondary o_left o_xs-center" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 14px;line-height: 21px;color: #424651;text-align: left;padding-left: 8px;padding-right: 8px;">
                          <p class="o_mb-xs" style="margin-top: 0px;margin-bottom: 8px;"><strong>OREDER DETAILS</strong></p>
                          <p style="margin-top: 0px;margin-bottom: 0px;">Order #: <?php echo $order->get_order_number(); ?> <br>
                            Order Date: <?php echo $order->get_date_created()->format('F d, Y'); ?><br>
                        Shipping Method: <?php echo $order->get_shipping_method(); ?></p>
                        </div>
                      </div>
                      <!--[if mso]></td><td width="250" align="left" valign="top" style="padding: 0px 8px;"><![endif]-->
                      <div class="o_col o_col-3 o_col-full" style="display: inline-block;vertical-align: top;width: 100%;max-width: 250px;">
                        <div style="font-size: 24px; line-height: 10px; height: 10px;">&nbsp; </div>
                        <div class="o_px-xs o_sans o_text-xs o_text-secondary o_left o_xs-center" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 14px;line-height: 21px;color: #424651;text-align: left;padding-left: 8px;padding-right: 8px;">
                          <p class="o_mb-xs" style="margin-top: 0px;margin-bottom: 8px;"><strong>SHIPPING ADDRESS</strong></p>
                          <p style="margin-top: 0px;margin-bottom: 0px;"><?php echo $order->get_billing_first_name()." ".$order->get_billing_last_name(); ?><br>
                            <?php echo $order->get_shipping_address_1(); ?><br>
                            <?php echo $order->get_shipping_postcode(); ?> <?php $states = WC()->countries->get_states( $order->get_shipping_country() );
				echo $state  = ! empty( $states[ $order->get_shipping_state() ] ) ? $states[ $order->get_shipping_state() ] : ''; ?><br/>
				<?php echo $order->get_shipping_city() . " , " . WC()->countries->countries[ $order->get_shipping_country() ]; ?></p>
                        </div>
                      </div>
                      <!--[if mso]></td></tr></table><![endif]-->
                    </td>
                  </tr>
                </tbody>
              </table>
              <!--[if mso]></td></tr></table><![endif]-->
            </td>
          </tr>
        </tbody>
      </table>

      <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
        <tbody>
          <tr>
            <td class="o_bg-light o_px-xs" style="background-color: #dbe5ea;padding-left: 8px;padding-right: 8px;" align="center">
              <!--[if mso]><table width="632" cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td><![endif]-->
              <table class="o_block" role="presentation" style="max-width: 632px;margin: 0 auto;" width="100%" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                  <tr>
                    <td class="o_bg-white o_px-md o_py" style="background-color: #ffffff;padding-left: 24px;padding-right: 24px;padding-top: 16px;padding-bottom: 16px;" align="left">
                      <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                          <tr>
                            <td class="o_bg-primary o_br-l o_text-md o_text-white o_sans o_py-xs" style="vertical-align: top;font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 19px;line-height: 28px;background-color: #C99947;color: #ffffff;border-radius: 4px 0px 0px 4px;padding-top: 8px;padding-bottom: 8px;" width="40" align="right">
                              
                            </td>
                            <td class="o_bg-primary o_br-r o_text-xs o_text-white o_sans o_px o_py-xs" style="vertical-align: top;font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 18px;line-height: 26px;background-color: #C99947;color: #FFF;border-radius: 0px 4px 4px 0px;padding-left: 16px;padding-right: 16px;padding-top: 8px;padding-bottom: 8px;" align="left">
                              <p style="margin-top: 0px;margin-bottom: 0px;"><strong>ITEMS ORDERED</strong></p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!--[if mso]></td></tr></table><![endif]-->
            </td>
          </tr>
        </tbody>
      </table>

      <?php 

        $items = $order->get_items();
        
        $show_image = true;

        $image_size = array(184,184);

        foreach ( $items as $item_id => $item ) :
            $product       = $item->get_product();
            $sku           = '';
            $purchase_note = '';
            $image         = '';
        
            if ( ! apply_filters( 'woocommerce_order_item_visible', true, $item ) ) {
                continue;
            }
        
            if ( is_object( $product ) ) {
                $sku           = $product->get_sku();
                $purchase_note = $product->get_purchase_note();
                $image         = $product->get_image( $image_size );
            }


      ?>

      <!--Product-->

      <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
        <tbody>
          <tr>
            <td class="o_bg-light o_px-xs" style="background-color: #dbe5ea;padding-left: 8px;padding-right: 8px;" align="center">
              <!--[if mso]><table width="632" cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td><![endif]-->
              <table class="o_block" role="presentation" style="max-width: 632px;margin: 0 auto;" width="100%" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                  <tr>
                    <td class="o_re o_bg-white o_px o_pt" style="font-size: 0;vertical-align: top;background-color: #ffffff;padding-left: 16px;padding-right: 16px;padding-top: 16px;" align="center">
                      <!--[if mso]><table cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td width="200" align="center" valign="top" style="padding: 0px 8px;"><![endif]-->
                      <div class="o_col o_col-2" style="display: inline-block;vertical-align: top;width: 100%;max-width: 200px;">
                        <div class="o_px-xs o_sans o_text o_center" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;text-align: center;padding-left: 8px;padding-right: 8px;">
                          <p style="margin-top: 0px;margin-bottom: 0px;"><a class="o_text-primary" href="<?php echo get_permalink( $item['product_id'] ); ?>" style="text-decoration: none;outline: none;color: #126de5;">
                          
                          <?php
                                    // Show title/image etc
                                    if ( $show_image ) {
                                        echo apply_filters( 'woocommerce_order_item_thumbnail', '<img src="' . ( $product->get_image_id() ? current( wp_get_attachment_image_src( $product->get_image_id(), 'large' ) ) : wc_placeholder_img_src() ) . '" alt="' . esc_attr__( 'Product image', 'woocommerce' ) . '" height="' . esc_attr( $image_size[1] ) . '" width="' . esc_attr( $image_size[0] ) . '" style="max-width: 184px;-ms-interpolation-mode: bicubic;vertical-align: middle;border: 0;line-height: 100%;height: auto;outline: none;text-decoration: none;" width="184" height="184"', $item );
                                    }
                                    ?>
                          
                          
                          
                        
                        
                        </a></p>
                        </div>
                      </div>
                      <!--[if mso]></td><td width="400" align="left" valign="top" style="padding: 0px 8px;"><![endif]-->
                      <div class="o_col o_col-4" style="display: inline-block;vertical-align: top;width: 100%;max-width: 400px;">
                        <div style="font-size: 24px; line-height: 24px; height: 24px;">&nbsp; </div>
                        <div class="o_px-xs o_sans o_text o_text-light o_left o_xs-center" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;color: #82899a;text-align: left;padding-left: 8px;padding-right: 8px;">
                          <h4 class="o_heading o_text-dark o_mb-xxs" style="font-family: Helvetica, Arial, sans-serif;font-weight: bold;margin-top: 0px;margin-bottom: 4px;color: #242b3d;font-size: 18px;line-height: 23px;"><?php echo wp_kses_post( apply_filters( 'woocommerce_order_item_name', $item->get_name(), $item, false ) ); ?></h4>
                          
                          <p class="o_text-xs o_mb" style="font-size: 14px;line-height: 21px;margin-top: 0px;margin-bottom: 16px;">
                            Item Price: <?php echo wc_price($product->get_price()); ?><br>
                            Qty: <?php echo $item->get_quantity(); ?>
                          </p>
                          <p class="o_text-md o_text-primary" style="font-size: 19px;line-height: 28px;color: #126de5;margin-top: 0px;margin-bottom: 0px;">Total: <strong><?php echo wp_kses_post( $order->get_formatted_line_subtotal( $item ) ); ?></strong></p>
                        </div>
                      </div>
                      <!--[if mso]></td></tr><tr><td colspan="2" style="padding: 0px 8px;"><![endif]-->
                      <div class="o_px-xs" style="padding-left: 8px;padding-right: 8px;">
                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                          <tbody>
                            <tr>
                              <td class="o_re o_bb-light" style="font-size: 16px;line-height: 16px;height: 16px;vertical-align: top;border-bottom: 1px solid #d3dce0;">&nbsp; </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!--[if mso]></td></tr></table><![endif]-->
                    </td>
                  </tr>
                </tbody>
              </table>
              <!--[if mso]></td></tr></table><![endif]-->
            </td>
          </tr>
        </tbody>
      </table>

      <?php endforeach; ?>

      <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
        <tbody>
          <tr>
            <td class="o_bg-light o_px-xs" style="background-color: #dbe5ea;padding-left: 8px;padding-right: 8px;" align="center">
              <!--[if mso]><table width="632" cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td><![endif]-->
              <table class="o_block" role="presentation" style="max-width: 632px;margin: 0 auto;" width="100%" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                  <tr>
                    <td class="o_re o_bg-white o_px-md o_py" style="font-size: 0;vertical-align: top;background-color: #ffffff;padding-left: 24px;padding-right: 24px;padding-top: 16px;padding-bottom: 16px;" align="right">
                      <table role="presentation" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                          <tr>
                            <td width="284" align="left">
                              <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                                <tbody>
                                  <tr>
                                    <td class="o_pt-xs" style="padding-top: 8px;" width="50%" align="left">
                                      <p class="o_sans o_text o_text-secondary" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;color: #424651;">Subtotal</p>
                                    </td>
                                    <td class="o_pt-xs" style="padding-top: 8px;" width="50%" align="right">
                                      <p class="o_sans o_text o_text-secondary" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;color: #424651;"><?php echo wc_price($order->get_subtotal()); ?></p>
                                    </td>
                                  </tr>
                                  <?php if($order->get_total_discount()): ?>
                                  <tr>
                                    <td class="o_pt-xs" style="padding-top: 8px;" width="50%" align="left">
                                      <p class="o_sans o_text o_text-secondary" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;color: #424651;">Discount: </p>
                                    </td>
                                    <td class="o_pt-xs" style="padding-top: 8px;" width="50%" align="right">
                                      <p class="o_sans o_text o_text-secondary" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;color: #424651;"><?php echo wc_price($order->get_total_discount()); ?></p>
                                    </td>
                                  </tr>
                                  <?php endif; ?>
                                  <tr>
                                    <td class="o_pt-xs" style="padding-top: 8px;" width="50%" align="left">
                                      <p class="o_sans o_text o_text-secondary" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;color: #424651;">Shipping: </p>
                                    </td>
                                    <td class="o_pt-xs" style="padding-top: 8px;" width="50%" align="right">
                                      <p class="o_sans o_text o_text-secondary" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;color: #424651;"><?php echo wc_price($order->get_total_shipping()); ?></p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="o_pt o_bb-light" style="border-bottom: 1px solid #d3dce0;padding-top: 16px;">&nbsp; </td>
                                    <td class="o_pt o_bb-light" style="border-bottom: 1px solid #d3dce0;padding-top: 16px;">&nbsp; </td>
                                  </tr>
                                  <tr>
                                    <td class="o_pt" style="padding-top: 16px;" width="50%" align="left">
                                      <p class="o_sans o_text o_text-secondary" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;color: #424651;"><strong>Total Due</strong></p>
                                    </td>
                                    <td class="o_pt" style="padding-top: 16px;" width="50%" align="right">
                                      <p class="o_sans o_text o_text-primary" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;color: #c99947;"><strong><?php echo wc_price($order->get_total()); ?></strong></p>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!--[if mso]></td></tr></table><![endif]-->
            </td>
          </tr>
        </tbody>
      </table>

      <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
        <tbody>
          <tr>
            <td class="o_bg-light o_px-xs" style="background-color: #dbe5ea;padding-left: 8px;padding-right: 8px;" align="center">
              <!--[if mso]><table width="632" cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td><![endif]-->
              <table class="o_block" role="presentation" style="max-width: 632px;margin: 0 auto;" width="100%" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                  <tr>
                    <td class="o_re o_bg-white o_px o_pb-md" style="font-size: 0;vertical-align: top;background-color: #ffffff;padding-left: 16px;padding-right: 16px;padding-bottom: 24px;" align="center">
                      <!--[if mso]><table cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td width="300" align="center" valign="top" style="padding: 0px 8px;"><![endif]-->
                      <div class="o_col o_col-3 o_col-full" style="display: inline-block;vertical-align: top;width: 100%;max-width: 300px;">
                        <div style="font-size: 24px; line-height: 24px; height: 24px;">&nbsp; </div>
                        <div class="o_px-xs" style="padding-left: 8px;padding-right: 8px;">
                          <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                            <tbody>
                              <tr>
                                <td class="o_bg-ultra_light o_br o_px o_py-md o_sans o_text o_text-secondary" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;background-color: #E8E8E0;color: #424651;border-radius: 4px;padding-left: 16px;padding-right: 16px;padding-top: 24px;padding-bottom: 24px;" align="center">
                                  <p class="o_mb-xxs" style="margin-top: 0px;margin-bottom: 4px;"><strong>WE ARE HERE TO HELP</strong></p>
                                  
                                  <p class="o_text-xxs o_text-light" style="font-size: 12px;line-height: 19px;color: #82899a;margin-top: 0px;margin-bottom: 0px;">Need Help? Please Contact us at <strong><a href="mailto:info@ocaiden.com">info@ocaiden.com</a></strong></p>
                                </td>
                              </tr>
                              
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <!--[if mso]></td><td width="300" align="center" valign="top" style="padding: 0px 8px;"><![endif]-->
                      <div class="o_col o_col-3 o_col-full" style="display: inline-block;vertical-align: top;width: 100%;max-width: 300px;">
                        <div style="font-size: 24px; line-height: 24px; height: 24px;">&nbsp; </div>
                        <div class="o_px-xs" style="padding-left: 8px;padding-right: 8px;">
                          <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                            <tbody>
                              <tr>
                                <td class="o_bg-ultra_light o_br o_px o_py-md o_sans o_text o_text-secondary" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;background-color: #E8E8E0;color: #424651;border-radius: 4px;padding-left: 16px;padding-right: 16px;padding-top: 24px;padding-bottom: 24px;" align="center">
                                  <p class="o_mb-xxs" style="margin-top: 0px;margin-bottom: 4px;"><strong>OUR GUARANTEE</strong></p>
                                  
                                  <p class="o_text-xxs o_text-light" style="font-size: 12px;line-height: 19px;color: #82899a;margin-top: 0px;margin-bottom: 0px;">Your Satitfaction is 100% guaranteed. See our  <strong><a href="mailto:info@ocaiden.com">Returns & Exchange Policy</a></strong></p>
                                </td>
                              </tr>
                              
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <!--[if mso]></td></tr></table><![endif]-->
                    </td>
                  </tr>
                </tbody>
              </table>
              <!--[if mso]></td></tr></table><![endif]-->
            </td>
          </tr>
        </tbody>
      </table>
      <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
        <tbody>
          <tr>
            <td class="o_bg-light o_px-xs o_pb-lg o_xs-pb-xs" style="background-color: #dbe5ea;padding-left: 8px;padding-right: 8px;padding-bottom: 32px;" align="center">
              <!--[if mso]><table width="632" cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td><![endif]-->
              <table class="o_block" role="presentation" style="max-width: 632px;margin: 0 auto;" width="100%" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                  <tr>
                    <td class="o_re o_bg-white o_px o_pb-lg o_bt-light o_br-b" style="font-size: 0;vertical-align: top;background-color: #ffffff;border-top: 1px solid #d3dce0;border-radius: 0px 0px 4px 4px;padding-left: 16px;padding-right: 16px;padding-bottom: 32px;" align="center">
                      <!--[if mso]><table cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td width="200" align="left" valign="top" style="padding:0px 8px;"><![endif]-->
                      <div class="o_col o_col-4" style="display: inline-block;vertical-align: top;width: 100%;max-width: 400px;">
                        <div style="font-size: 32px; line-height: 32px; height: 32px;">&nbsp; </div>
                        <div class="o_px-xs o_sans o_text-xs o_text-light o_left o_xs-center" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 14px;line-height: 21px;color: #82899a;text-align: left;padding-left: 8px;padding-right: 8px;">
                          <p class="o_mb-xs" style="margin-top: 0px;margin-bottom: 8px;">Copyrights © 2018 O’Caiden LLC. All Rights Reserved.</p>
                          
                          <p style="margin-top: 0px;margin-bottom: 0px;">
                            <a class="o_text-light o_underline" href="<?php echo site_url(); ?>/need-help/" style="text-decoration: underline;outline: none;color: #82899a;">Help Center</a> <span class="o_hide-xs">&nbsp; • &nbsp;</span><br class="o_hide-lg" style="display: none;font-size: 0;max-height: 0;width: 0;line-height: 0;overflow: hidden;mso-hide: all;visibility: hidden;">
                            <a class="o_text-light o_underline" href="<?php echo site_url(); ?>/product-category/all-items/" style="text-decoration: underline;outline: none;color: #82899a;">Shop</a> <span class="o_hide-xs">&nbsp; • &nbsp;</span><br class="o_hide-lg" style="display: none;font-size: 0;max-height: 0;width: 0;line-height: 0;overflow: hidden;mso-hide: all;visibility: hidden;">
                            <a class="o_text-light o_underline" href="<?php echo site_url(); ?>/product-category/my-account/" style="text-decoration: underline;outline: none;color: #82899a;">My Account</a>
                          </p>
                        </div>
                      </div>
                      <!--[if mso]></td><td width="400" align="right" valign="top" style="padding:0px 8px;"><![endif]-->
                      <div class="o_col o_col-2" style="display: inline-block;vertical-align: top;width: 100%;max-width: 200px;">
                        <div style="font-size: 32px; line-height: 32px; height: 32px;">&nbsp; </div>
                        <div class="o_px-xs o_sans o_text-xs o_text-light o_right o_xs-center" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 14px;line-height: 21px;color: #82899a;text-align: right;padding-left: 8px;padding-right: 8px;">
                          <p style="margin-top: 0px;margin-bottom: 0px;">
                            <a class="o_text-light" href="https://www.facebook.com/ocaidenbabycompany/" style="text-decoration: none;outline: none;color: #82899a;"><img src="<?php echo site_url(); ?>/wp-content/uploads/2022/08/facebook-light.png" alt="fb" style="max-width: 36px;-ms-interpolation-mode: bicubic;vertical-align: middle;border: 0;line-height: 100%;height: auto;outline: none;text-decoration: none;" width="36" height="36"></a><span> &nbsp;</span>
                            <a class="o_text-light" href="https://twitter.com/ocaidenbabyco" style="text-decoration: none;outline: none;color: #82899a;"><img src="<?php echo site_url(); ?>/wp-content/uploads/2022/08/twitter-light.png" alt="tw" style="max-width: 36px;-ms-interpolation-mode: bicubic;vertical-align: middle;border: 0;line-height: 100%;height: auto;outline: none;text-decoration: none;" width="36" height="36"></a><span> &nbsp;</span>
                            <a class="o_text-light" href="https://www.instagram.com/ocaidenbabycompany/" style="text-decoration: none;outline: none;color: #82899a;"><img src="<?php echo site_url(); ?>/wp-content/uploads/2022/08/instagram-light.png" alt="ig" style="max-width: 36px;-ms-interpolation-mode: bicubic;vertical-align: middle;border: 0;line-height: 100%;height: auto;outline: none;text-decoration: none;" width="36" height="36"></a><span> &nbsp;</span>
                            
                          </p>
                        </div>
                      </div>
                      <!--[if mso]></td></tr></table><![endif]-->
                    </td>
                  </tr>
                </tbody>
              </table>
              <!--[if mso]></td></tr></table><![endif]-->
              <div class="o_hide-xs" style="font-size: 64px; line-height: 64px; height: 64px;">&nbsp; </div>
            </td>
          </tr>
        </tbody>
      </table>


    </body>
    </html>