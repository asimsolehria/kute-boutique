<?php
/**
 * Email Styles
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-styles.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 4.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

@media only screen and (min-width: 660px) {
	.u-row {
		width: 640px !important;
	}
	.u-row .u-col {
		vertical-align: top;
	}

	.u-row .u-col-100 {
		width: 640px !important;
	}
}

@media (max-width: 660px) {
	.u-row-container {
		max-width: 100% !important;
		padding-left: 0px !important;
		padding-right: 0px !important;
	}
	.u-row .u-col {
		min-width: 320px !important;
		max-width: 100% !important;
		display: block !important;
	}
	.u-row {
		width: calc(100% - 40px) !important;
	}
	.u-col {
		width: 100% !important;
	}
	.u-col > div {
		margin: 0 auto;
	}
}
body {
	margin: 0;
	padding: 0;
}

table,
tr,
td {
	vertical-align: top;
	border-collapse: collapse;
}

p {
	margin: 0;
}

.ie-container table,
.mso-container table {
	table-layout: fixed;
}

* {
	line-height: inherit;
}

a[x-apple-data-detectors="true"] {
	color: inherit !important;
	text-decoration: none !important;
}

table,
td {
	color: #000000;
}
#u_body a {
	color: #0000ee;
	text-decoration: underline;
}
