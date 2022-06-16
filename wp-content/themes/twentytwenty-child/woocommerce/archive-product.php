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
		<style>
			.hide-content {
				height: 80px;
				position: relative;
				width: 100%;
				color: transparent;
				margin-bottom: 65px;
			}

			.box-sort-wrapper {
				position: absolute;
				left: 0;
				width: 100%;
				height: 80px;
				border-bottom-width: 1px;
				border-top-width: 1px;
				border-right-width: 0;
				border-left-width: 0;
				border-style: solid;
				border-color: #ECECEC;
				display: flex;
				justify-content: center;
				align-items: center;


			}

			.box-sort-wrapper-inner {
				width: 1440px;
				height: 100%;
				display: flex;
				align-items: center;
			}

			.filter-wrapper {
				background: #F4F4F4;
				font-size: 20px;
				font-family: 'Quicksand', sans-serif !important;
				font-weight: 600;
				width: 130px;
				height: 50px;
				border-width: 0;
				border-radius: 100px;
				position: relative;
				appearance: none;
				color: #130F26;
				margin-right: 10px;
				cursor: pointer;
				display: flex;
				justify-content: center;
				align-items: center;
				padding-left: 30px;
			}

			.filter-wrapper-icon {
				display: flex;
				left: 24px;
				align-items: center;
				height: 100%;
				position: absolute;
				cursor: pointer;
			}

			select[name="sorting"] {
				background: #F4F4F4;
				font-size: 20px;
				font-family: 'Quicksand', sans-serif !important;
				font-weight: 600;
				padding: 10px 20px;
				border-width: 0;
				border-radius: 100px;
				color: #130F26;
				-webkit-appearance: none;
				-moz-appearance: none;


			}

			.select-wrapper {
				position: relative;
			}

			.select-wrapper::after {
				content: "▼";
				font-size: 1rem;
				top: 6px;
				right: 10px;
				position: absolute;
			}
		</style>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
		<div class="page-label">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			A eget sapien nisl egestas purus.
		</div>
		<div class="box-sort-wrapper">
			<div class="box-sort-wrapper-inner">
				<div class="filter-wrapper"><img src="<?= get_site_url(); ?>/wp-content/uploads/2022/06/Group-1-3.png" class="filter-wrapper-icon " alt="">Filter</div>
				<form class="woocommerce-ordering-custom" method="get">
					<select name="sorting" id="cars" class="select-wrapper">
						<option value="volvo">Sort by</option>
						<option value="volvo">Volvo</option>
						<option value="saab">Saab</option>
						<option value="mercedes">Mercedes</option>
						<option value="audi">Audi</option>
					</select>
				</form>
			</div>
		</div>
		<div class="hide-content">.</div>
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

	@media only screen and (max-width: 1200px) {
		body {
			background-color: lightblue;
		}

		.before-footer {
			margin-top: -280px;
		}

		.before-footer-inner {
			justify-content: space-between;
		}

		.before-footer-content {
			margin-top: 20px;
		}
	}

	@media only screen and (max-width: 800px) {

		.before-footer {
			height: 328px;
		}

		.before-footer {
			margin-top: -250px;
		}

		.before-footer-content {
			align-items: center;
		}

		.before-footer-inner {
			justify-content: flex-start;
			padding: 0 0;
		}

		.before-footer-desc-title {
			font-size: 16px;
		}

		.before-footer-desc-label {
			font-size: 12px;
			margin-top: 4px;
		}

		.before-footer-desc {
			width: 100%;
			padding-right: 20px;
		}

		.before-footer-content-image {
			height: 44px;
			width: 44px;
			margin-right: 20px;
		}
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
