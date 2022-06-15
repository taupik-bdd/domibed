<?php

/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

<style>
	.menu-footer *,
	.heading-menu-footer,
	.desc-subs,
	.input-newsletter,
	.button-primary-custom,
	.text-copyright-custom {
		font-family: 'Quicksand', sans-serif;
	}

	.footer-menu-custom#site-footer {
		padding: 0px !important;
		margin-top: 70px;
	}

	#footer_bottom {
		background: #E99972;
		padding: 70px 0px;
	}

	.menu-footer {
		list-style: none;
		margin-left: 0px;
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;
	}

	.menu-footer a {
		text-decoration: none !important;
	}

	.logo-footer {
		max-width: 125px;
	}

	.menu-item-has-children {
		margin-left: 0px !important;
		width: 33.3333%;
	}

	#footer_bottom ul.sub-menu {
		list-style: none;
		margin-left: 0px;
		margin-top: 15px;
	}

	#footer_bottom ul.sub-menu li {
		margin-left: 0px;
		margin-top: 0px;
		margin-bottom: 10px;
	}

	#footer_bottom .menu-item a:not(a + .sub-menu li a),
	.heading-menu-footer {
		font-style: normal;
		font-weight: 600;
		font-size: 14px;
		line-height: 20px;
		color: #FFFFFF;
	}

	.menu-footer .sub-menu li a {
		font-style: normal;
		font-weight: 500;
		font-size: 16px;
		line-height: 24px;
		color: #FFFFFF;
		opacity: 0.8;
	}

	.footer-copyright-custom {
		text-align: center;
		padding: 25px;
		background: #DA8A64;
	}

	.text-copyright-custom {
		font-style: normal;
		font-weight: 600;
		font-size: 14px;
		line-height: 20px;
		color: #F4BA9F;
		margin-bottom: 0px;
	}

	.heading-menu-footer {
		margin-bottom: 10px;
	}

	.subscription-custom .input-newsletter {
		background: #F4F4F4;
		border-radius: 64px;
		padding: 9px 15px;
		color: #37373780;
		font-style: normal;
		font-weight: 500;
		font-size: 14px;
		line-height: 22px;
	}

	.subscription-custom .input-newsletter:focus-visible,
	.button-primary-custom:focus-visible {
		outline: none;
	}

	.button-primary-custom {
		background: linear-gradient(276.23deg, #4CB8C4 -68.89%, #45B5A5 123.14%);
		border-radius: 60px;
		font-style: normal;
		font-weight: 700;
		font-size: 14px;
		line-height: 22px;
		color: #FFFFFF;
		padding: 9px 20px 9px 45px;
		position: relative;
	}

	.desc-subs {
		font-style: normal;
		font-weight: 500;
		font-size: 8px;
		line-height: 12px;
		color: #FFFFFF;
		opacity: 0.7;
		margin-bottom: 20px;
	}

	.list-sosmed {
		display: flex;
		flex-wrap: wrap;
		margin-left: -8px;
	}

	.item-sosmed {
		padding-left: 8px;
		max-width: 36px;
	}

	.box-img-submit {
		position: absolute;
		top: 0;
		bottom: 0;
		left: 5px;
		background: white;
		padding: 6px;
		border-radius: 50%;
		max-width: 30px;
		max-height: 30px;
		margin: auto;
	}

	@media (max-width: 750px) {
		#footer_bottom ul.sub-menu li:last-child {
			margin-bottom: 0px;
		}

		.menu-item-has-children {
			width: 50%;
			margin-bottom: 30px;
		}

		.logo-footer {
			max-width: 100px;
			margin-bottom: 50px;
		}

		#footer_bottom {
			padding-top: 50px;
		}

		#footer_bottom .container {
			padding-left: 20px;
			padding-right: 20px;
		}

		#footer_bottom .menu-item a:not(a + .sub-menu li a),
		.heading-menu-footer {
			font-size: 12px;
			line-height: 18px;
		}

		#footer_bottom ul.sub-menu {
			margin-top: 10px;
		}

		.menu-footer .sub-menu li a {
			font-size: 14px;
			line-height: 21px;
		}

		.subscription-custom .input-newsletter {
			padding: 9px 20px;
		}

		.desc-subs {
			margin-bottom: 0px;
		}

		.footer-copyright-custom {
			padding: 15px;
		}

		.text-copyright-custom {
			font-size: 12px;
			line-height: 16px;
		}

		.list-sosmed {
			margin-left: -5px;
		}

		.item-sosmed {
			padding-left: 5px;
		}
	}
</style>
<footer id="site-footer" class="header-footer-group footer-menu-custom">
	<div class="footer_wrapper">
		<div id="footer_bottom">
			<div class="footer-inner-menu">
				<div class="container">
					<div class="row footer-custom-row1">
						<div class="col-md-3 col-sm-12 col-xs-12">
							<aside id="stm_text-2" class="widget stm_wp_widget_text">
								<div class="logo-footer">
									<img src="http://localhost/domibed/wp-content/uploads/2022/06/image-3.png" alt="">
								</div>
							</aside>
						</div>
						<div class="col-md-6 col-sm-12 mobile-padding-0">
							<?php
							wp_nav_menu(
								array(
									'theme_location'  => 'footer',
									'menu_class'      => 'menu-footer',
									'container_class' => 'secondary-menu-container',
									'items_wrap'      => '<ul id="secondary-menu-list" class="%2$s">%3$s</ul>',
									'fallback_cb'     => false,
								)
							);
							?>
						</div>
						<div class="col-md-3 col-sm-12 col-xs-12">
							<div class="heading-menu-footer">STAY IN TOUCH</div>
							<form action="" class="subscription-custom">
								<div class="form-group">
									<input type="text" class="input-newsletter" name="email" placeholder="Your email..">
								</div>
								<div class="form-group">
									<button type="submit" name="submit" class="button-primary-custom">
										<div class="box-img-submit"><img src="1/wp-content/uploads/2022/06/newsletter.png" class="icon-submit-newsletter"></div>Subscribe
									</button>
								</div>
							</form>
							<div class="desc-subs">By submitting this form, you agree to receive recurring automated promotional and personalized marketing text messages (e.g. cart reminders) from Domibed at the cell number used when signing up. Consent is not a condition of any purchase. Reply HELP for help and STOP to cancel. Msg frequency varies. Msg and data rates may apply. View Terms & Privacy.</div>
							<div class="list-sosmed">
								<div class="item-sosmed">
									<a href="" target="_blank">
										<img src="1/wp-content/uploads/2022/06/Instagram.png" alt="">
									</a>
								</div>
								<div class="item-sosmed">
									<a href="" target="_blank">
										<img src="1/wp-content/uploads/2022/06/Twitter.png" alt="">
									</a>
								</div>
								<div class="item-sosmed">
									<a href="" target="_blank">
										<img src="1/wp-content/uploads/2022/06/Linkedin.png" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-copyright-custom">
			<div class="container">
				<p class="text-copyright-custom">©<?php echo date("Y"); ?> Domibed All rights reserved.</p>
			</div>
		</div>
	</div>
</footer><!-- #site-footer -->

<script>
	jQuery(document).ready(function() {
		jQuery('#site-footer .menu-footer').append("<li class='menu-item-has-children sosmed-append'><div class='heading-menu-footer'>FOLLOW US</div></li>");
		jQuery('.sosmed-append').append(jQuery('.list-sosmed'));
	})
</script>

<?php wp_footer(); ?>
<?php
if (is_active_sidebar('footer-1')) : ?>
	<?php dynamic_sidebar('footer-1'); ?>
<?php endif; ?>

</body>

</html>