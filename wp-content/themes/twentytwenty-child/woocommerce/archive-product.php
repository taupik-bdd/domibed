<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header('shop');

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action('woocommerce_before_main_content');

?>
<header class="woocommerce-products-header">
	<?php if (apply_filters('woocommerce_show_page_title', true)) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action('woocommerce_archive_description');
	?>
</header>
<?php
if (woocommerce_product_loop()) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action('woocommerce_before_shop_loop');

	woocommerce_product_loop_start();

	if (wc_get_loop_prop('total')) {
		while (have_posts()) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action('woocommerce_shop_loop');

			wc_get_template_part('content', 'product');
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action('woocommerce_after_shop_loop');
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action('woocommerce_no_products_found');
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */


/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
?>
<style>
	.footer-menu-custom#site-footer {}

	.before-footer {
		width: 100%;
		background-color: #F8F8F8;
		position: absolute;
		left: 0;
		padding: 75px 0 120px 0;
		display: flex;
		justify-content: center;
		align-items: center;
		margin-top: -110px;
	}

	.before-footer-inner {
		position: relative;
		width: 100%;
		max-width: 1440px;
		display: flex;
		justify-content: space-around;
		padding: 0 50px;
		flex-wrap: wrap;
	}

	.before-footer-content {
		display: flex;
		margin: 0 15px;
	}

	.before-footer-content-image {
		height: 80px;
		width: 80px;
		margin-right: 20px;
	}

	.before-footer-desc {
		display: flex;
		flex-direction: column;
		width: 230px;
		justify-content: center;
	}

	.before-footer-desc-title {
		font-style: normal;
		font-weight: 600;
		font-size: 20px;
		line-height: 25px;
		color: #373737;
	}

	.before-footer-desc-label {
		font-style: normal;
		font-weight: 500;
		font-size: 14px;
		line-height: 20px;
		color: #262626;
		opacity: 0.7;
		margin-top: 5px;
	}
</style>
<div style="height: 396px; color:transparent;">.</div>
<div class="before-footer">
	<div class="before-footer-inner">
		<div class="before-footer-content">
			<div class="before-footer-content-image">
				<img src="<?= get_site_url(); ?>/wp-content/uploads/2022/06/Rectangle-85.png" alt="">
			</div>
			<div class="before-footer-desc">
				<div class="before-footer-desc-title">Delivered in a box</div>
				<div class="before-footer-desc-label">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
			</div>
		</div>
		<div class="before-footer-content">
			<div class="before-footer-content-image">
				<img src="<?= get_site_url(); ?>/wp-content/uploads/2022/06/Rectangle-86.png" alt="">
			</div>
			<div class="before-footer-desc">
				<div class="before-footer-desc-title">Free Shipping</div>
				<div class="before-footer-desc-label">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
			</div>
		</div>
		<div class="before-footer-content">
			<div class="before-footer-content-image">
				<img src="<?= get_site_url(); ?>/wp-content/uploads/2022/06/Rectangle-87.png" alt="">
			</div>
			<div class="before-footer-desc">
				<div class="before-footer-desc-title">10-Year Warranty</div>
				<div class="before-footer-desc-label">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
			</div>
		</div>
	</div>
	<div>



		<?php
		do_action('woocommerce_after_main_content');

		do_action('woocommerce_sidebar');

		get_footer('shop');
