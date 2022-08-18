<?php
/**
 * Customer on-hold order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-on-hold-order.php.
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

defined( 'ABSPATH' ) || exit;

?>

<!DOCTYPE html>
<html >
   <head>
      <meta charset="UTF-8">
      <title>Order On Hold</title>
      <style type="text/css">
         @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,700italic,900);
         body { font-family: 'Roboto', Arial, sans-serif !important; }
         a[href^="tel"]{
         color:inherit;
         text-decoration:none;
         outline:0;
         }
         a:hover, a:active, a:focus{
         outline:0;
         }
         a:visited{
         color:#FFF;
         }
         span.MsoHyperlink {
         mso-style-priority:99;
         color:inherit;
         }
         span.MsoHyperlinkFollowed {
         mso-style-priority:99;
         color:inherit;
         }
      </style>
   </head>
   <body style="margin: 0; padding: 0;background-color:#EEEEEE;">
      <div style="display:none;font-size:1px;color:#333333;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;">
         Questions? Call us any time 24/7 at 966541366025 or simply reply to this email | dumbbell.sa
      </div>
      <table cellspacing="0" style="margin:0 auto; width:100%; border-collapse:collapse; background-color:#EEEEEE; font-family:'Roboto', Arial !important">
         <tbody>
            <tr>
               <td align="center" style="padding:20px 23px 0 23px">
                  <table width="600" style="background-color:#FFF; margin:0 auto; border-radius:5px">
                     <tbody>
                        <tr>
                           <td align="center">
                              <table width="500" style="margin:0 auto">
                                 <tbody>
                                    <tr>
                                       <td align="center" style="padding:40px 0 35px 0"><a href="<?php echo site_url(); ?>" target="_blank" style="color:#c99947; text-decoration:none;outline:0;"><img alt="" style="width: 150px;" src="<?php echo site_url(); ?>/wp-content/uploads/2022/07/imageedit_5_6784328303.png" border="0"></a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td align="center" style="font-family:'Roboto', Arial !important">
                                          <h2 style="margin:0; font-weight:bold; font-size:40px; color:#444; text-align:center; font-family:'Roboto', Arial !important">
                                             Your order is on-hold!
                                          </h2>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td align="center" style="padding:0 0 15px 0; font-family:'Roboto', Arial !important">
                                          <p style="text-align: center;">
                                             <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/08/shipping_confirmation_animated_truck.gif" border="0">
                                          </p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td align="center" style="padding:0 0 20px 0; font-family:'Roboto', Arial !important">
                                          <p style="margin:10px 0; font-size:16px; color:#000; line-height:20px; font-family:'Roboto', Arial !important">
                                          <?php esc_html_e( 'Thanks for your order. It’s on-hold until we confirm that payment has been received. In the meantime, here’s a reminder of what you ordered:', 'woocommerce' ); ?>
                                          </p>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </td>
                        </tr>
                        <tr>
                           <td align="center" cellspacing="0" style="padding:0 0 30px 0; vertical-align:middle">
                              <table width="550" style="border-collapse:collapse; background-color:#FaFaFa; margin:0 auto; border:1px solid #E5E5E5">
                                 <tbody>
                                    <tr>
                                       <td width="276" style="vertical-align:top; border-right:1px solid #E5E5E5">
                                          <table style="width:100%; border-collapse:collapse">
                                             <tbody>
                                                <tr>
                                                   <td style="vertical-align:top; padding:18px 18px 8px 23px; font-family:'Roboto', Arial !important">
                                                      <p style="font-size:16px; color:#333333; text-transform:uppercase; font-weight:900; margin:0; font-family:'Roboto', Arial !important">
                                                         Summary:
                                                      </p>
                                                   </td>
                                                </tr>
                                                <tr style="">
                                                   <td style="vertical-align:top; padding:0 18px 18px 23px">
                                                      <table width="100%" style="border-collapse:collapse">
                                                         <tbody>
                                                            <tr>
                                                               <td style="font-family:'Roboto', Arial !important">
                                                                  <p style="font-size:16px; color:#000; margin:0 0 5px 0; font-family:'Roboto', Arial !important">
                                                                     Order #:
                                                                  </p>
                                                               </td>
                                                               <td align="left" style="font-family:'Roboto', Arial !important">
                                                                  <p style="font-size:16px; color:#000; margin:0 0 5px 0; font-family:'Roboto', Arial !important">
                                                                     <?php echo $order->get_order_number(); ?>
                                                                  </p>
                                                               </td>
                                                            </tr>
                                                            <tr>
                                                               <td style="font-family:'Roboto', Arial !important">
                                                                  <p style="font-size:16px; color:#000; margin:0 0 5px 0; font-family:'Roboto', Arial !important">
                                                                     Order Date:
                                                                  </p>
                                                               </td>
                                                               <td align="left" style="font-family:'Roboto', Arial !important">
                                                                  <p style="font-size:16px; color:#000; margin:0 0 5px 0; font-family:'Roboto', Arial !important">
                                                                     <?php echo $order->get_date_created()->format('F d, Y'); ?>
                                                                  </p>
                                                               </td>
                                                            </tr>
                                                            <tr>
                                                               <td style="font-family:'Roboto', Arial !important">
                                                                  <p style="font-size:16px; color:#000; margin:0 0 10px 0; font-family:'Roboto', Arial !important">
                                                                     Order Total:
                                                                  </p>
                                                               </td>
                                                               <td align="left" style="font-family:'Roboto', Arial !important">
                                                                  <p style="font-size:16px; color:#000; margin:0 0 10px 0; font-family:'Roboto', Arial !important">
                                                                     <?php echo wc_price($order->get_total()); ?>
                                                                  </p>
                                                               </td>
                                                            </tr>
                                                            <?php if($order->get_total_discount()): ?>
                                                            <tr>
                                                               <td align="left" style="font-family:'Roboto', Arial !important;" colspan="2">
                                                                  <p style="font-size:16px; color:#c99947; margin:0;padding:0; font-weight:bold; font-family:'Roboto', Arial !important">
                                                                     You saved <?php echo wc_price($order->get_total_discount()); ?>!
                                                                  </p>
                                                               </td>
                                                            </tr>
                                                            <?php endif; ?>
                                                         </tbody>
                                                      </table>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </td>
                                       <td style="vertical-align:top">
                                          <table width="100%" style="border-collapse:collapse">
                                             <tbody>
                                                <tr>
                                                   <td style="vertical-align:top; padding:18px 18px 8px 23px; font-family:'Roboto', Arial !important">
                                                      <p style="font-size:16px; color:#333333; text-transform:uppercase; font-weight:900; margin:0; font-family:'Roboto', Arial !important">
                                                         Shipping Address:
                                                      </p>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td style="vertical-align:top; padding:0 18px 18px 23px; font-family:'Roboto', Arial !important">
                                                      <table width="100%" style="border-collapse:collapse">
                                                         <tbody>
                                                            <tr>
                                                               <td style="font-family:'Roboto', Arial !important">
                                                                  <p style="font-size:16px; color:#000; margin:0 0 5px 0; font-family:'Roboto', Arial !important">
                                                                  <?php echo $order->get_shipping_first_name() . " " . $order->get_shipping_last_name(); ?>
                                                                  </p>
                                                               </td>
                                                            </tr>
                                                            <tr>
                                                               <td style="font-family:'Roboto', Arial !important">
                                                                  <p style="font-size:16px; color:#000; margin:0 0 5px 0; font-family:'Roboto', Arial !important">
                                                                  <?php echo $order->get_shipping_address_1(); ?>
                                                                  </p>
                                                               </td>
                                                            </tr>
                                                            <?php if($order->get_shipping_address_2()): ?>
                                                            <tr>
                                                               <td style="font-family:'Roboto', Arial !important">
                                                                  <p style="font-size:16px; color:#000; margin:0 0 5px 0; font-family:'Roboto', Arial !important">
                                                                  <?php echo $order->get_shipping_address_2(); ?>
                                                                  </p>
                                                               </td>
                                                            </tr>
                                                            <?php endif; ?>
                                                            <tr>
                                                               <td style="font-family:'Roboto', Arial !important;">
                                                                  <p style="font-size:16px; color:#000; margin:0;padding:0; font-family:'Roboto', Arial !important">
                                                                  <?php echo $order->get_shipping_city() . " " . $order->get_shipping_state(). " ".$order->get_shipping_country(). " ". $order->get_shipping_postcode(); ?>
                                                                  </p>
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
                           </td>
                        </tr>
                        
                        <tr>
    <td align="center" cellspacing="0" style="padding:0; vertical-align:middle">
        <table width="550" style="border-collapse:collapse; background-color:#FaFaFa; margin:0 auto; border-bottom:1px solid #E5E5E5">
            <tbody>
            <tr>
                <td align="left" style="padding:15px 0 15px 15px; font-family:'Roboto', Arial !important" width="117">
                    <p style="font-size:16px; text-transform:uppercase; color:#333333; margin:0; font-weight:900; font-family:'Roboto', Arial !important; ">
                        ITEMS
                    </p>
                </td>
                <td align="left" width="230">
                    
                </td>
                <td width="60" align="right" style="font-family:'Roboto', Arial !important">
                    <p style="margin:0; font-size:14px; color:#333333;padding:0;font-family:'Roboto', Arial !important;text-align:center;">
                        QTY
                    </p>
                </td>
                <td width="120" align="right" style="font-family:'Roboto', Arial !important;padding-right:10px;">
                    <p style="margin:0; font-size:14px; color:#333333;padding:0;font-family:'Roboto', Arial !important;text-align:right;">
                        PRICE
                    </p>
                </td>
            </tr>
            </tbody>
        </table>
    </td>
</tr>

      <?php

         $items = $order->get_items();

         $show_image = true;
         $image_size = array(115,115);


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
      <tr>
         <td style=" font-family:'Roboto', Arial !important;padding:0;" align="center">
            <table width="550" style="border-collapse:collapse;margin: 0 auto;border-bottom: 1px solid #EBEBEB">
                  <tbody>
                  <tr>
                     <td width="117" align="right" style="padding:24px 0 24px 10px; text-align:left;">
                        <a href="<?php echo $product->get_permalink(); ?>" target="_blank" style="text-decoration:none; color:#000; outline:0;">
                        <?php 
                        
                              if ( $show_image ) {
                                 echo wp_kses_post( apply_filters( 'woocommerce_order_item_thumbnail', $image, $item ) );
                              }
                        ?>
                        </a>
                     </td>
                     <td width="230" style="vertical-align:middle; padding:0 0 0 10px; font-family:'Roboto', Arial !important;">
                        <p style="font-size:16px; margin:0; color:#000; line-height:20px; font-family:'Roboto', Arial !important">
                              <a href="<?php echo $product->get_permalink(); ?>" target="_blank" style="text-decoration:none; color:#000; outline:0;"> <?php echo wp_kses_post( apply_filters( 'woocommerce_order_item_name', $item->get_name(), $item, false ) ); ?></a>
                        </p>
                        
                     </td>
                     <td align="center" width="60" style="vertical-align:middle; font-family:'Roboto', Arial !important;padding:0;">
                        <p style="font-size:18px; color:#000; margin:0; font-family:'Roboto', Arial !important;text-align:center;">
                        <?php
                              $qty          = $item->get_quantity();
                              $refunded_qty = $order->get_qty_refunded_for_item( $item_id );

                              if ( $refunded_qty ) {
                                 $qty_display = '<del>' . esc_html( $qty ) . '</del> <ins>' . esc_html( $qty - ( $refunded_qty * -1 ) ) . '</ins>';
                              } else {
                                 $qty_display = esc_html( $qty );
                              }
                              echo wp_kses_post( apply_filters( 'woocommerce_email_order_item_quantity', $qty_display, $item ) );
                     ?>
                        </p>
                     </td>
                     <td align="center" width="120" style="font-family:'Roboto', Arial !important;padding:0 10px 0 0;">
                     <!--
                        <p style="font-size:18px; color:#000; margin:0; font-family:'Roboto', Arial !important;text-align:center;text-decoration:line-through;text-align: right;">
                              $2.09
                        </p>
                        -->
                        <p style="font-size:18px; color:#c99947; margin:0; font-family:'Roboto', Arial !important;text-align:center;font-weight:bold;text-align: right;">
                        <?php echo wp_kses_post( $order->get_formatted_line_subtotal( $item ) ); ?>
                        </p>
                     </td>
                  </tr>
                  </tbody>
            </table>
         </td>
      </tr>

      <?php endforeach;

                  ?>
                  
                  <tr>
                     <td align="center" style="padding-top:24px; padding-bottom:20px">
                        <table width="520" style="border-collapse:collapse">
                              <tbody>
                              <tr>
                                 <td align="right" width="375" style="padding-bottom:15px; font-family:'Roboto', Arial !important">
                                    <p style="font-size:18px; color:#000; margin:0; font-family:'Roboto', Arial !important">
                                          Subtotal (<?php echo $order->get_item_count(); ?> Items):
                                    </p>
                                 </td>
                                 <td align="right" style="padding-bottom:15px; font-family:'Roboto', Arial !important">
                                    <p style="font-size:18px; color:#000; margin:0; font-family:'Roboto', Arial !important">
                                    <?php echo wc_price($order->get_subtotal()); ?>
                                    </p>
                                 </td>
                              </tr>
                              <tr>
         <td align="right" style="padding-bottom:15px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif !important;">
            <p style="font-size:18px; color:#000; margin:0; font-family: Arial, Helvetica Neue, Helvetica, sans-serif !important;">
                  Shipping Method:
            </p>
         </td>
         <td align="right" style="padding-bottom:15px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif !important;">
            <p style="font-size:18px; color:#000; margin:0; font-family: Arial, Helvetica Neue, Helvetica, sans-serif !important;font-weight:bold;">
                  <?php echo $order->get_shipping_method(); ?></p>
         </td>
      </tr>

      <tr>
         <td align="right" style="padding-bottom:15px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif !important;">
            <p style="font-size:18px; color:#000; margin:0; font-family: Arial, Helvetica Neue, Helvetica, sans-serif !important;">
                  Shipping Charges:
            </p>
         </td>
         <td align="right" style="padding-bottom:15px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif !important;">
            <p style="font-size:18px; color:#000; margin:0; font-family: Arial, Helvetica Neue, Helvetica, sans-serif !important;font-weight:bold;">
                  <?php echo wc_price($order->get_shipping_total()); ?></p>
         </td>
      </tr>

         <?php

         if($order->get_discount_total()){


         ?>
            <tr>
                  <td align="right" style="padding-bottom:15px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif !important;">
                     <p style="font-size:18px; margin:0; font-family: Arial, Helvetica Neue, Helvetica, sans-serif !important;">
                        Discount:
                     </p>
                  </td>
                  <td align="right" style="padding-bottom:15px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif !important;">
                     <p style="font-size:18px; margin:0; font-family: Arial, Helvetica Neue, Helvetica, sans-serif !important;">
                        -<?php
                        echo wc_price($order->get_discount_total());

                        ?>
                     </p>
                  </td>
            </tr>
            <?php
         }

            ?>


      <tr>
         <td align="right" style="padding-bottom:15px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif !important;">
            <p style="font-size:18px; color:#000; font-weight:900; margin:0; font-family: Arial, Helvetica Neue, Helvetica, sans-serif !important;">
                  Order Total:
            </p>
         </td>
         <td align="right" style="padding-bottom:15px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif !important;">
            <p style="font-size:18px; color:#c99947; font-weight:bold; margin:0; font-family: Arial, Helvetica Neue, Helvetica, sans-serif !important;">
            <?php echo wc_price($order->get_total()); ?>
            </p>
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


            <tr>
               <td align="center" style="padding-top:20px">
                  <table width="604" style="border-collapse:collapse;background-color:#FFF; font-family:'Roboto', Arial !important; border-radius:5px">
                     <tbody>
                        <tr>
                           <td colspan="4" style="vertical-align:middle;background-color: #c99947;border-radius: 5px 5px 0 0;">
                              <table style="background-color:#c99947; width:100%; border-radius:5px 5px 0 0; border-collapse:collapse">
                                 <tbody>
                                    <tr>
                                       <td align="center" style="vertical-align:middle; padding:22px 0; font-family:'Roboto', Arial !important">
                                          <p style="color:#FFF; font-size:18px; margin:0; font-family:'Roboto', Arial !important">
                                             Need help? email us at <a style="color: #fff !important;" href="mailto:info@ocaiden.com">info@ocaiden.com</a>
                                          </p>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </td>
                        </tr>
                        <tr>
                           <td style="padding:0">
                              <table cellpadding="20" style="width:100%; border-collapse:collapse">
                                 <tbody>
                                    <tr>
                                       <td align="center" style="border-right:1px solid #EBEBEB; font-family:'Roboto', Arial !important">
                                          <a href="#" target="_blank" style="outline:0;color:#c99947; text-decoration:none">
                                             <p style="margin:0 0 8px 0"><img src="<?php echo site_url(); ?>/wp-content/uploads/2022/08/fast.png" border="0" width="48"></p>
                                             <p style="color:#444; font-size:13px; text-transform:uppercase; margin:0; font-family:'Roboto', Arial !important">
                                                FREE SHIPPING <br>
                                                OVER $200
                                             </p>
                                          </a>
                                       </td>
                                       <td align="center" style="border-right:1px solid #EBEBEB; font-family:'Roboto', Arial !important; vertical-align:bottom">
                                          <a href="<?php echo site_url(); ?>/return-refunds-exchanges/" target="_blank" style="outline:0;color:#c99947; text-decoration:none">
                                             <p style="margin:0 0 14px 0; font-family:'Roboto', Arial !important"><img src="<?php echo site_url(); ?>/wp-content/uploads/2022/08/processing-time.png" border="0" width="48"></p>
                                             <p style="color:#444; font-size:13px; text-transform:uppercase; margin:0; font-family:'Roboto', Arial !important">
                                                EXCHANGE  <br>
                                                & RETURN
                                             </p>
                                          </a>
                                       </td><!---
                                       <td align="center" style="border-right:1px solid #EBEBEB; font-family:'Roboto', Arial !important">
                                          <a href="#" target="_blank" style="outline:0;color:#c99947; text-decoration:none">
                                             <p style="margin:0 0 8px 0"><img src="https://www.chewy.com/static/cms/lp/email/moneyback_icon.png" border="0">
                                             </p>
                                             <p style="color:#444; font-size:13px; text-transform:uppercase; margin:0; font-family:'Roboto', Arial !important">
                                                Satisfaction <br>
                                                Guaranteed
                                             </p>
                                          </a>
                                       </td> -->
                                       <td align="center" style="font-family:'Roboto', Arial !important">
                                          <a href="#" target="_blank" style="outline:0;color:#c99947; text-decoration:none">
                                             <p style="margin:0 0 8px 0"><img src="https://dumbbell.sa/wp-content/uploads/2021/08/credit-card.png" border="0" width="48"></p>
                                             <p style="color:#444; font-size:13px; text-transform:uppercase; margin:0; font-family:'Roboto', Arial !important">
                                                ALL MAJOR CREDIT <br>
                                                CARDS ACCEPTED

                                             </p>
                                          </a>
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
            <tr>
               <td align="center" style="padding-top:29px; padding-bottom:50px">
                  
               </td>
            </tr>
         </tbody>
      </table>
   </body>
   </body>
</html>

