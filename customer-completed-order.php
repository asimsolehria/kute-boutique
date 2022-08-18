<?php
/**
 * Customer completed order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-completed-order.php.
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
    <title>Customer Completed Order</title>
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
        .facebook-button { display: none !important;}
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
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
      <tbody>
        <tr>
          <td class="o_bg-light o_px-xs o_pt-lg o_xs-pt-xs" style="background-color: #dbe5ea;padding-left: 8px;padding-right: 8px;padding-top: 32px;" align="center">
            <!--[if mso]><table width="632" cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td><![endif]-->
            <table class="o_block" role="presentation" style="max-width: 632px;margin: 0 auto;" width="100%" cellspacing="0" cellpadding="0" border="0">
              <tbody>
                <tr>
                  <td class="o_re o_bg-white o_px o_pb-md o_br-t" style="font-size: 0;vertical-align: top;background-color: #ffffff;border-top: 5px solid #000;padding-left: 16px;padding-right: 16px;padding-bottom: 24px; border-bottom: 5px solid #c99947;" align="center">
                    <!--[if mso]><table cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td width="200" align="left" valign="top" style="padding:0px 8px;"><![endif]-->
                    <div class="o_col o_col-2" style="display: inline-block;vertical-align: top;width: 100%;max-width: 150px;">
                      <div style="font-size: 24px; line-height: 24px; height: 24px;">&nbsp; </div>
                      <div class="o_px-xs o_sans o_text o_left o_xs-center" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;text-align: left;padding-left: 8px;padding-right: 8px;">
                        <p style="margin-top: 0px;margin-bottom: 0px;"><a class="o_text-primary" href="<?php echo site_url(); ?>" style="text-decoration: none;outline: none;color: #126de5;"><img src="<?php echo site_url(); ?>/wp-content/uploads/2022/03/Black-Shipping-Box-Transparent.png"  style="max-width: 136px;-ms-interpolation-mode: bicubic;vertical-align: middle;border: 0;line-height: 100%;height: auto;outline: none;text-decoration: none;" width="136" ></a></p>
                      </div>
                    </div>
                    <!--[if mso]></td><td width="400" align="right" valign="top" style="padding:0px 8px;"><![endif]-->
                    <div class="o_col o_col-4" style="display: inline-block;vertical-align: top;width: 100%;max-width: 450px;">
                      <div style="font-size: 22px; line-height: 22px; height: 22px;">&nbsp; </div>
                      <div class="o_px-xs" style="padding-left: 8px;padding-right: 8px;">
                        <table class="o_right o_xs-center" role="presentation" style="text-align: right;margin-left: auto;margin-right: 0; width: 100%;" cellspacing="0" cellpadding="0" border="0">
                          <tbody>
                            <tr>
                              <td class="o_btn-b o_text-xs" style="font-family: Helvetica, Arial, sans-serif;;margin-top: 0px;margin-bottom: 0px;font-size: 14px;line-height: 21px;mso-padding-alt: 7px 8px;" align="center">
                                <!--[if mso]><table cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td width="150" align="left" valign="top" style="padding: 0px 8px;"><![endif]-->
                                  <div class="o_col o_col-3 o_col-half" style="display: inline-block;vertical-align: top;width: 100%;max-width: 100px;">
                                    <div class="o_px-xs o_sans o_text-xs o_left" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 14px;line-height: 21px;text-align: center;padding-left: 8px;padding-right: 8px;">
                                      <a href="<?php echo site_url(); ?>/product-category/all-items/"> <p class="o_text-light" style="color: #82899a;margin-top: 0px;margin-bottom: 0px;">Shop</p></a>
                                    </div>
                                  </div>
                                  <!--[if mso]></td><td width="150" align="center" valign="top" style="padding: 0px 8px;"><![endif]-->
                                  <div class="o_col o_col-1 o_col-half" style="display: inline-block;vertical-align: top;width: 100%;max-width: 100px;">
                                    <div class="o_px-xs o_sans o_text-xs o_center" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 14px;line-height: 21px;text-align: center;padding-left: 8px;padding-right: 8px;">
                                        <a href="<?php echo site_url(); ?>/our-story/"> <p class="o_text-light" style="color: #82899a;margin-top: 0px;margin-bottom: 0px;">About Us</p></a>
                                    </div>
                                  </div>
                                  
                                  <!--[if mso]></td><td width="150" align="right" valign="top" style="padding: 0px 8px;"><![endif]-->
                                  <div class="o_col o_col-1 o_col-half" style="display: inline-block;vertical-align: top;width: 100%;max-width: 100px;">
                                    <div class="o_px-xs o_sans o_text-xs o_right" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 14px;line-height: 21px;text-align: center;padding-left: 8px;padding-right: 8px;">
                                        <a href="<?php echo site_url(); ?>/need-help/"> <p class="o_text-light" style="color: #82899a;margin-top: 0px;margin-bottom: 0px;">Help</p></a>
                                    </div>
                                  </div>
                                  <!--[if mso]></td><td width="150" align="right" valign="top" style="padding: 0px 8px;"><![endif]-->
                                    <div class="o_col o_col-1 o_col-half" style="display: inline-block;vertical-align: top;width: 100%;max-width: 100px;">
                                      <div class="o_px-xs o_sans o_text-xs o_right" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 14px;line-height: 21px;text-align: center;padding-left: 8px;padding-right: 8px;">
                                          <a href="<?php echo site_url(); ?>/my-account/"> <p class="o_text-light" style="color: #82899a;margin-top: 0px;margin-bottom: 0px;">My Account</p></a>
                                      </div>
                                    </div>
                                    
                                  <!--[if mso]></td></tr><tr><td colspan="4" style="padding: 0px 8px;"><![endif]-->
                                  <div class="o_px-xs o_xs_hide" style="padding-left: 8px;padding-right: 8px;">
                                    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                                      <tbody>
                                        <tr>
                                          <td class="o_re o_bb-light" style="font-size: 9px;line-height: 9px;height: 9px;vertical-align: top;">&nbsp; </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                  <!--[if mso]></td></tr></table><![endif]-->
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
          <td class="o_bg-light o_px-xs" style="background-color: #dbe5ea;padding-left: 8px;padding-right: 8px;" align="center">
            <!--[if mso]><table width="632" cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td><![endif]-->
            <table class="o_block" role="presentation" style="max-width: 632px;margin: 0 auto;" width="100%" cellspacing="0" cellpadding="0" border="0">
              <tbody>
                <tr>
                  <td class="o_bg-white o_px-md o_py o_sans o_text o_text-secondary" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;background-color: #ffffff;color: #424651;padding-left: 48px;padding-right: 48px;padding-top: 16px;padding-bottom: 16px;" align="left">
                    <h4 class="o_heading o_text-dark o_mb-xs" style="font-family: Helvetica, Arial, sans-serif;font-weight: bold;margin-top: 0px;margin-bottom: 8px;color: #c99947;font-size: 18px;line-height: 23px;">Hi <?php echo $order->get_billing_first_name()." ".$order->get_billing_last_name(); ?>,</h4>
                    <p style="margin-top: 0px;margin-bottom: 0px;">Ready or Not, here it comes!</p>
                    <p style="margin-top: 0px;margin-bottom: 0px;">Your order Number <?php echo $order->get_order_number(); ?> has been completed and shipped. You will be able to track your order from the link given below.</p>
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
                  <td class="o_re o_bg-white o_px o_pb-md" style="font-size: 0;vertical-align: top;background-color: #ffffff;padding-left: 48px;padding-right: 48px;padding-bottom: 0;" align="center">
                    <!--[if mso]><table cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td width="260" align="center" valign="top" style="padding: 0px 8px;"><![endif]-->
                    <div class="o_col o_col-3 o_col-full" style="display: inline-block;vertical-align: top;width: 100%;max-width: 260px;">
                      <div style="font-size: 24px; line-height: 24px; height: 24px;">&nbsp; </div>
                      <div class="o_px-xs o_sans o_text-xs o_text-secondary o_left o_xs-center" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 18px;line-height: 26px;color: #424651;text-align: left;padding-left: 0;padding-right: 8px;">
                        <p class="o_mb-xs" style="margin-top: 0px;margin-bottom: 8px;"><strong>Order # <?php echo $order->get_order_number(); ?></strong></p>
                        
                      </div>
                    </div>
                    <!--[if mso]></td><td width="260" align="left" valign="top" style="padding: 0px 8px;"><![endif]-->
                    <div class="o_col o_col-3 o_col-full" style="display: inline-block;vertical-align: top;width: 100%;max-width: 260px;">
                      <div style="font-size: 24px; line-height: 24px; height: 24px;">&nbsp; </div>
                      <div class="o_px-xs o_sans o_text-xs o_text-secondary o_left o_xs-center" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 14px;line-height: 21px;color: #424651;text-align: right;padding-left: 8px;padding-right: 0;">
                        <p class="o_mb-xs" style="margin-top: 0px;margin-bottom: 8px;">You placed this order on <strong><?php echo $order->get_date_created()->format('d/m/Y'); ?></strong></p>
                        
                      </div>
                    </div>
                    <!--[if mso]></td></tr><tr><td colspan="2" style=""padding: 0px 8px;"><![endif]-->
                    <div class="o_px-xs" style="padding-left: 0px;padding-right: 0px;">
                      <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                          <tr>
                            <td class="o_re o_bb-light" style="font-size: 16px;line-height: 0;height: 0;vertical-align: top;border-bottom: 6px solid #000;">&nbsp; </td>
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


    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
      <tbody>
        <tr>
          <td class="o_bg-light o_px-xs" style="background-color: #dbe5ea;padding-left: 8px;padding-right: 8px;" align="center">
            <!--[if mso]><table width="632" cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td><![endif]-->
            <table class="o_block" role="presentation" style="max-width: 632px;margin: 0 auto;" width="100%" cellspacing="0" cellpadding="0" border="0">
              <tbody>
                <tr>
                  <td class="o_re o_bg-white o_px o_pb-md" style="font-size: 0;vertical-align: top;background-color: #ffffff;padding-left: 48px;padding-right: 48px;padding-bottom: 0;" align="left">
                    <!--[if mso]><table cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td width="160" align="left" valign="top" style="padding: 0px 8px;"><![endif]-->
                    <div class="o_col o_col-2 o_col-full" style="display: inline-block;vertical-align: top;width: 100%;max-width: 160px;">
                      <div style="font-size: 24px; line-height: 0; height: 0;">&nbsp; </div>
                      <div class="o_px-xs" style="padding-left: 8px;padding-right: 8px;">
                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                          <tbody>
                            <tr>
                              <td class="o_bg-ultra_light o_br o_text-xs o_sans o_px o_py-md" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 14px;line-height: 21px;background-color: #fff;border-radius: 4px;padding-left: 16px;padding-right: 16px;padding-top: 24px;padding-bottom: 24px;" align="left">
                                <p class=" o_text-dark" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;color: #242b3d;font-size: 14px;line-height: 21px;">Est. Delivery date</p>
                                <p class="o_text-light" style="color: #000;margin-top: 0px;margin-bottom: 0px;font-weight: bold;"></p>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!--[if mso]></td><td width="185" align="center" valign="top" style="padding: 0px 8px;"><![endif]-->
                    <div class="o_col o_col-2 o_col-full" style="display: inline-block;vertical-align: top;width: 100%;max-width: 185px;">
                      <div style="font-size: 24px; line-height: 0; height: 0;">&nbsp; </div>
                      <div class="o_px-xs" style="padding-left: 8px;padding-right: 8px;">
                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                          <tbody>
                            <tr>
                              <td class="o_bg-ultra_light o_br o_text-xs o_sans o_px o_py-md" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 14px;line-height: 21px;background-color: #fff;border-radius: 4px;padding-left: 16px;padding-right: 16px;padding-top: 24px;padding-bottom: 24px;" align="left">
                                <p class=" o_text-dark" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;color: #242b3d;font-size: 14px;line-height: 21px;">Shipping Destination</p>
                                
                                <p style="margin-top: 0px;margin-bottom: 0px;"><?php echo $order->get_billing_first_name()." ".$order->get_billing_last_name(); ?><br>
                                            <?php echo $order->get_shipping_address_1(); ?><br>
                                            <?php echo $order->get_shipping_postcode(); ?> <?php $states = WC()->countries->get_states( $order->get_shipping_country() );
                                echo $state  = ! empty( $states[ $order->get_shipping_state() ] ) ? $states[ $order->get_shipping_state() ] : ''; ?><br/>
                                <?php echo $order->get_shipping_city() . " , " . WC()->countries->countries[ $order->get_shipping_country() ]; ?></p>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!--[if mso]></td><td width="171" align="center" valign="top" style="padding: 0px 8px;"><![endif]-->
                    <div class="o_col o_col-2 o_col-full" style="display: inline-block;vertical-align: top;width: 100%;max-width: 171px;">
                      <div style="font-size: 24px; line-height: 0; height: 0;">&nbsp; </div>
                      <div class="o_px-xs" style="padding-left: 8px;padding-right: 8px;">
                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                          <tbody>
                            <tr>
                              <td class="o_bg-ultra_light o_br o_text-xs o_sans o_px o_py-md" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 14px;line-height: 21px;background-color: #fff;border-radius: 4px;padding-left: 16px;padding-right: 16px;padding-top: 24px;padding-bottom: 24px;" align="left">
                                <p class=" o_text-dark" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;color: #242b3d;font-size: 14px;line-height: 21px;">Shipping Type</p>
                                <p class="o_text-light" style="color: #000;margin-top: 0px;margin-bottom: 0px;font-weight: bold;"><?php echo $order->get_shipping_method(); ?></p>
                                <a href="<?php echo site_url(); ?>/order-tracking/"><h4 style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;color: #c99947;font-size: 18px;line-height: 28px;">Track Now</h4></a>
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

    <!--Menu Upper Line-->
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
      <tbody>
        <tr>
          <td class="o_bg-light o_px-xs" style="background-color: #dbe5ea;padding-left: 8px;padding-right: 8px;" align="center">
            <!--[if mso]><table width="632" cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td><![endif]-->
            <table class="o_block" role="presentation" style="max-width: 632px;margin: 0 auto;" width="100%" cellspacing="0" cellpadding="0" border="0">
              <tbody>
                <tr>
                  <td class="o_re o_bg-white o_px o_pt-xs " style="font-size: 0;vertical-align: top;background-color: #ffffff;padding-left: 48px;padding-right: 48px;padding-top: 8px;" align="center">
                    
                    <!--[if mso]></td></tr><tr><td colspan="4" ><![endif]-->
                    <div class="o_px-xs o_xs_hide" style="padding-left: ;">
                      <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                          <tr>
                            <td class="o_re o_bb-light" style="font-size: 9px;line-height: 9px;height: 9px;vertical-align: top; border-bottom: #ccc solid 5px;">&nbsp; </td>
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

    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
      <tbody>
        <tr>
          <td class="o_bg-light o_px-xs" style="background-color: #dbe5ea;padding-left: 8px;padding-right: 8px;" align="center">
            <!--[if mso]><table width="632" cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td><![endif]-->
            <table class="o_block" role="presentation" style="max-width: 632px;margin: 0 auto;" width="100%" cellspacing="0" cellpadding="0" border="0">
              <tbody>
                <tr>
                  <td class="o_re o_bg-white o_px o_pt-xs o_hide-xs" style="font-size: 0;vertical-align: top;background-color: #ffffff;padding-left: 48px;padding-right: 48px;padding-top: 8px;" align="center">
                    <!--[if mso]><table cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td width="320" align="left" valign="top" style="padding: 0px 8px;"><![endif]-->
                    <div class="o_col o_col-4" style="display: inline-block;vertical-align: top;width: 100%;max-width: 320px;">
                      <div class="o_px-xs o_sans o_text-xs o_left" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 14px;line-height: 21px;text-align: left;padding-left: 8px;padding-right: 8px;">
                        <p class="o_text-light" style="color: #82899a;margin-top: 0px;margin-bottom: 0px;">Item</p>
                      </div>
                    </div>
                    <!--[if mso]></td><td width="100" align="center" valign="top" style="padding: 0px 8px;"><![endif]-->
                    <div class="o_col o_col-1" style="display: inline-block;vertical-align: top;width: 100%;max-width: 100px;">
                      <div class="o_px-xs o_sans o_text-xs o_center" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 14px;line-height: 21px;text-align: center;padding-left: 8px;padding-right: 8px;">
                        <p class="o_text-light" style="color: #82899a;margin-top: 0px;margin-bottom: 0px;">Qty</p>
                      </div>
                    </div>
                    <!--[if mso]></td><td width="100" align="right" valign="top" style="padding: 0px 8px;"><![endif]-->
                    <div class="o_col o_col-1" style="display: inline-block;vertical-align: top;width: 100%;max-width: 100px;">
                      <div class="o_px-xs o_sans o_text-xs o_right" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 14px;line-height: 21px;text-align: right;padding-left: 8px;padding-right: 8px;">
                        <p class="o_text-light" style="color: #82899a;margin-top: 0px;margin-bottom: 0px;">Price</p>
                      </div>
                    </div>
                    <!--[if mso]></td></tr><tr><td colspan="3" style="padding: 0px 8px;"><![endif]-->
                    <div class="o_px-xs" style="padding-left: 8px;padding-right: 8px;">
                      <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                          <tr>
                            <td class="o_re o_bb-light" style="font-size: 9px;line-height: 9px;height: 9px;vertical-align: top;border-bottom: 1px solid #d3dce0;">&nbsp; </td>
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

    <?php 

        $items = $order->get_items();
        
        $show_image = true;

        $image_size = array(84,84);

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




    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
      <tbody>
        <tr>
          <td class="o_bg-light o_px-xs" style="background-color: #dbe5ea;padding-left: 8px;padding-right: 8px;" align="center">
            <!--[if mso]><table width="632" cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td><![endif]-->
            <table class="o_block" role="presentation" style="max-width: 632px;margin: 0 auto;" width="100%" cellspacing="0" cellpadding="0" border="0">
              <tbody>
                <tr>
                  <td class="o_re o_bg-white o_px o_pt" style="font-size: 0;vertical-align: top;background-color: #ffffff;padding-left: 48px;padding-right: 48px;padding-top: 16px;" align="center">
                    <!--[if mso]><table cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td width="100" align="center" valign="top" style="padding: 0px 8px;"><![endif]-->
                    <div class="o_col o_col-1 o_col-full" style="display: inline-block;vertical-align: top;width: 100%;max-width: 100px;">
                      <div class="o_px-xs o_sans o_text o_center" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;text-align: center;padding-left: 8px;padding-right: 8px;">
                        <p style="margin-top: 0px;margin-bottom: 0px;"><a class="o_text-primary" href="<?php echo site_url(); ?>" style="text-decoration: none;outline: none;color: #126de5;">
                    
                        <?php
                                    // Show title/image etc
                                    if ( $show_image ) {
                                        echo apply_filters( 'woocommerce_order_item_thumbnail', '<img src="' . ( $product->get_image_id() ? current( wp_get_attachment_image_src( $product->get_image_id(), 'large' ) ) : wc_placeholder_img_src() ) . '" alt="' . esc_attr__( 'Product image', 'woocommerce' ) . '" height="' . esc_attr( $image_size[1] ) . '" width="' . esc_attr( $image_size[0] ) . '" style="max-width: 184px;-ms-interpolation-mode: bicubic;vertical-align: middle;border: 0;line-height: 100%;height: auto;outline: none;text-decoration: none;" width="184" height="184"', $item );
                                    }
                                    ?>
                    
                    </a></p>
                      </div>
                    </div>
                    <!--[if mso]></td><td width="300" align="left" valign="top" style="padding: 0px 8px;"><![endif]-->
                    <div class="o_col o_col-3 o_col-full" style="display: inline-block;vertical-align: top;width: 100%;max-width: 220px;">
                      <div style="font-size: 16px; line-height: 16px; height: 16px;">&nbsp; </div>
                      <div class="o_px-xs o_sans o_text o_text-light o_left o_xs-center" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;color: #82899a;text-align: left;padding-left: 8px;padding-right: 8px;">
                        <h4 class="o_heading o_text-dark o_mb-xxs" style="font-family: Helvetica, Arial, sans-serif;font-weight: bold;margin-top: 0px;margin-bottom: 4px;color: #242b3d;font-size: 18px;line-height: 23px;"><?php echo wp_kses_post( apply_filters( 'woocommerce_order_item_name', $item->get_name(), $item, false ) ); ?></h4>
                        
                      </div>
                    </div>
                    <!--[if mso]></td><td width="100" align="right" valign="top" style="padding: 0px 8px;"><![endif]-->
                    <div class="o_col o_col-1 o_col-full" style="display: inline-block;vertical-align: top;width: 100%;max-width: 100px;">
                      <div class="o_hide-xs" style="font-size: 16px; line-height: 16px; height: 16px;">&nbsp; </div>
                      <div class="o_px-xs o_sans o_text o_text-secondary o_center" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;color: #424651;text-align: center;padding-left: 8px;padding-right: 8px;">
                        <p class="o_mb-xxs" style="margin-top: 0px;margin-bottom: 4px;"><span class="o_hide-lg" style="display: none;font-size: 0;max-height: 0;width: 0;line-height: 0;overflow: hidden;mso-hide: all;visibility: hidden;">Quantity:&nbsp; </span><?php echo $item->get_quantity(); ?></p>
                      </div>
                    </div>
                    <!--[if mso]></td><td width="100" align="right" valign="top" style="padding: 0px 8px;"><![endif]-->
                    <div class="o_col o_col-1 o_col-full" style="display: inline-block;vertical-align: top;width: 100%;max-width: 100px;">
                      <div class="o_hide-xs" style="font-size: 16px; line-height: 16px; height: 16px;">&nbsp; </div>
                      <div class="o_px-xs o_sans o_text o_text-secondary o_right o_xs-center" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;color: #424651;text-align: right;padding-left: 8px;padding-right: 8px;">
                        <p class="o_mb-xxs" style="margin-top: 0px;margin-bottom: 4px;"><span class="o_hide-lg" style="display: none;font-size: 0;max-height: 0;width: 0;line-height: 0;overflow: hidden;mso-hide: all;visibility: hidden;">Price:&nbsp; </span><?php echo wp_kses_post( $order->get_formatted_line_subtotal( $item ) ); ?></p>
                      </div>
                    </div>
                    <!--[if mso]></td></tr><tr><td colspan="4" style="padding: 0px 8px;"><![endif]-->
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
                  <td class="o_re o_bg-white o_px-md o_py" style="font-size: 0;vertical-align: top;background-color: #ffffff;padding-left: 48px;padding-right: 48px;padding-top: 16px;padding-bottom: 16px;" align="right">
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0">
                      <tbody>
                        <tr>
                          <td class="facebook-button" width="336" style="padding: 8px;">
                            <table  role="presentation" cellspacing="0" cellpadding="0" border="0" style="border: 1px solid #fff;">
                              <tbody>
                                <tr>
                                  <td class="o_bg-ultra_light o_br o_text-lg o_sans o_px-xs o_py-md" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 24px;line-height: 30px;background-color: #c99947;padding-left: 8px;padding-right: 8px;padding-top: 24px;padding-bottom: 24px;" width="284" align="center"><a href="https://www.facebook.com/ocaidenbabycompany/" >
                                    <p class="o_text-dark" style="color: #fff;margin-top: 0px;margin-bottom: 0px; font-size: 20px; "><strong>Be a part of the family!</strong></p>
                                    <p class="o_text-dark" style="color: #fff;margin-top: 0px;margin-bottom: 0px; font-size: 16px;">Join our Facebook Page</p></a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                          <td width="184" align="left">
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                              <tbody>
                              <tr>
                                            <td class="o_pt-xs" style="padding-top: 8px;" width="50%" align="left">
                                              <p class="o_sans o_text o_text-secondary" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;color: #000;">Subtotal</p>
                                            </td>
                                            <td class="o_pt-xs" style="padding-top: 8px;" width="50%" align="right">
                                              <p class="o_sans o_text o_text-secondary" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;color: #000;"><?php echo wc_price($order->get_subtotal()); ?></p>
                                            </td>
                                          </tr>
                                          <?php if($order->get_total_discount()): ?>
                                  <tr>
                                    <td class="o_pt-xs" style="padding-top: 8px;" width="50%" align="left">
                                      <p class="o_sans o_text o_text-secondary" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;color: #000;">Discount: </p>
                                    </td>
                                    <td class="o_pt-xs" style="padding-top: 8px;" width="50%" align="right">
                                      <p class="o_sans o_text o_text-secondary" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;color: #000;"><?php echo wc_price($order->get_total_discount()); ?></p>
                                    </td>
                                  </tr>
                                  <?php endif; ?>
                                  <tr>
                                    <td class="o_pt-xs" style="padding-top: 8px;" width="50%" align="left">
                                      <p class="o_sans o_text o_text-secondary" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;color: #000;">Shipping: </p>
                                    </td>
                                    <td class="o_pt-xs" style="padding-top: 8px;" width="50%" align="right">
                                      <p class="o_sans o_text o_text-secondary" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;color: #000;"><?php echo wc_price($order->get_total_shipping()); ?></p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="o_pt o_bb-light" style="border-bottom: 1px solid #fff;padding-top: 16px;">&nbsp; </td>
                                    <td class="o_pt o_bb-light" style="border-bottom: 1px solid #fff;padding-top: 16px;">&nbsp; </td>
                                  </tr>
                                  <tr>
                                    <td class="o_pt" style="padding-top: 16px;" width="50%" align="left">
                                      <p class="o_sans o_text o_text-secondary" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;color: #000;"><strong>Total Due</strong></p>
                                    </td>
                                    <td class="o_pt" style="padding-top: 16px;" width="50%" align="right">
                                      <p class="o_sans o_text o_text-primary" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;color: #000;"><strong><?php echo wc_price($order->get_total()); ?></strong></p>
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
                  <td class="o_bg-white o_px-md o_py o_sans o_text o_text-secondary" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 14px;line-height: 24px;background-color: #ffffff;color: #424651;padding-left: 48px;padding-right: 48px;padding-top: 16px;padding-bottom: 16px;" align="left">
                    
                    <p style="margin-top: 0px;margin-bottom: 0px;">You can always check the status of your order by clicking on the <a href="#" style="text-decoration: underline;">My Account</a> link located at the top of every page and this e-mail as well. After signing in your most recent order status will appear on the order history page. </p><br>
                    <p style="margin-top: 0px;margin-bottom: 0px;">Thank you for shopping at O'Caiden, and we hope that you will visit us again soon.</p><br>
                    <p style="margin-top: 0px;margin-bottom: 0px;">Cheers</p>
                    <p style="margin-top: 0px;margin-bottom: 0px;">The O'Caiden Team</p><br>
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
          <td class="o_bg-light o_px-xs o_pt-lg o_xs-pt-xs" style="background-color: #dbe5ea;padding-left: 8px;padding-right: 8px;padding-top: 0; " align="center">
            <!--[if mso]><table width="632" cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td><![endif]-->
            <table class="o_block" role="presentation" style="max-width: 632px;margin: 0 auto;" width="100%" cellspacing="0" cellpadding="0" border="0">
              <tbody>
                <tr>
                  <td class="o_re o_bg-white o_px o_pb-md o_br-t" style="font-size: 0;vertical-align: top;background-color: #ffffff;border-top: 5px solid #c99947;padding-left: 16px;padding-right: 16px;padding-bottom: 24px; border-bottom: 5px solid #000;" align="center">
                    <!--[if mso]><table cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td width="200" align="left" valign="top" style="padding:0px 8px;"><![endif]-->
                    <div class="o_col o_col-2" style="display: inline-block;vertical-align: top;width: 100%;max-width: 150px;">
                      <div style="font-size: 24px; line-height: 24px; height: 24px;">&nbsp; </div>
                      <div class="o_px-xs o_sans o_text o_left o_xs-center" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;text-align: left;padding-left: 8px;padding-right: 8px;">
                        <p style="margin-top: 0px;margin-bottom: 0px;"><a class="o_text-primary" href="<?php echo site_url(); ?>" style="text-decoration: none;outline: none;color: #126de5;"><img src="<?php echo site_url(); ?>/wp-content/uploads/2022/08/bear-logo.png"  style="max-width: 100px;-ms-interpolation-mode: bicubic;vertical-align: middle;border: 0;line-height: 100%;height: auto;outline: none;text-decoration: none;" width="100" ></a></p>
                      </div>
                    </div>
                    <!--[if mso]></td><td width="400" align="right" valign="top" style="padding:0px 8px;"><![endif]-->
                    <div class="o_col o_col-4" style="display: inline-block;vertical-align: top;width: 100%;max-width: 450px;">
                      <div style="font-size: 22px; line-height: 22px; height: 22px;">&nbsp; </div>
                      <div class="o_px-xs" style="padding-left: 8px;padding-right: 8px;">
                        <table class="o_right o_xs-center" role="presentation" style="text-align: right;margin-left: auto;margin-right: 0; width: 100%;" cellspacing="0" cellpadding="0" border="0">
                          <tbody>
                            <tr>
                              <td class="o_btn-b o_text-xs" style="font-family: Helvetica, Arial, sans-serif;;margin-top: 0px;margin-bottom: 0px;font-size: 14px;line-height: 21px;mso-padding-alt: 7px 8px;" align="left">
                              <h4 class="o_heading o_text-dark o_mb-xs" style="font-family: Helvetica, Arial, sans-serif;font-weight: bold;margin-top: 0px;margin-bottom: 8px;color: #000;font-size: 16px;line-height: 23px;">HAPPINESS GUARANTEED</h4>
                              <p style="margin-top: 0px;margin-bottom: 0px; font-size: 14px;">We are available to assist you via chat Mon-Sat 9am-9PM EST. Closed Sun. Email <a href="mailto:support@ocaiden.com" style="text-decoration: underline;">support@ocaiden.com</a></p>
                                
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
                  <td class="o_px-md o_pb-lg o_sans o_text-xs o_text-light" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 12px;line-height: 21px;color: #82899a;padding-left: 48px;padding-right: 48px;padding-bottom: 32px; padding-top: 16px;" align="center">
                   
                    <p class="o_mb-xs" style="margin-top: 0px;margin-bottom: 8px;">
                      To make sure email updates are delivered to your inbox, please add info@ocaiden.com to your email Address Book. 
                    </p>
                    <p class="o_mb-xs" style="margin-top: 0px;margin-bottom: 8px;">
                      O'Caiden, LLC, 3482 Keith Bridge Rd, Ste 173, Cumming, GA 30041. 
                    </p>
                    
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