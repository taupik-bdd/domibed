<?php

/**
 * Result Count
 *
 * Shows text: Shown x - x of x results.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/result-count.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.7.0
 */

if (!defined('ABSPATH')) {
	exit;
}
?>
<p class="woocommerce-result-count">
	<?php
	// phpcs:disable WordPress.Security
	if (1 === intval($total)) {
		_e('Shown the single products', 'woocommerce');
	} elseif ($total <= $per_page || -1 === $per_page) {
		/* translators: %d: total productss */
		printf(_n('Shown all %d products', 'Shown all %d productss', $total, 'woocommerce'), $total);
	} else {
		$first = ($per_page * $current) - $per_page + 1;
		$last  = min($total, $per_page * $current);
		/* translators: 1: first products 2: last products 3: total productss */
		printf(_nx('Shown $d products', 'Shown %2$d products', $total, 'with first and last products', 'woocommerce'), $first, $last, $total);
	}
	// phpcs:enable WordPress.Security
	?>
</p>