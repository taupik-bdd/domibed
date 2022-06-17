<?php

/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.1.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

do_action('woocommerce_before_customer_login_form'); ?>

<?php if ('yes' === get_option('woocommerce_enable_myaccount_registration')) : ?>
	<style>
		body {
			background: #E5E5E5 !important;
			font-family: 'Quicksand', sans-serif !important;
		}

		.section-inner {
			background-color: transparent;
		}

		.login-wrapper {
			width: 100%;
			height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.register-wrapper {
			width: 100%;
			height: 100%;
			display: none;
			justify-content: center;
			align-items: center;
		}

		.login-wrapper-inner {
			width: 510px;
			height: 650px;
			padding: 30px;
			background-color: #fff;
			border: 1px solid #D7D7D7;
			border-radius: 10px;
			position: absolute;
			margin: 0 30px;
		}

		.register-wrapper-inner {
			width: 510px;
			height: 650px;
			padding: 30px;
			background-color: #fff;
			border: 1px solid #D7D7D7;
			border-radius: 10px;
			position: absolute;
			margin: 0 30px;
			display: none;
		}

		.login-title {
			font-family: 'Quicksand';
			font-style: normal;
			font-weight: 700;
			font-size: 36px;
			color: #373737;
		}

		.login-label {
			font-style: normal;
			font-weight: 500;
			font-size: 16px;
			color: #262626;
			opacity: 0.7;
		}

		input[name="username"] {
			background: #F4F4F4;
			border-radius: 64px;
			height: 50px;
			width: 100%;
			outline: none;
			border-width: 0;
			margin-top: 50px;
		}

		input[name="username"]:focus {
			outline: none;
			border-width: 0;
		}

		input[name="password"] {
			background: #F4F4F4;
			border-radius: 64px;
			height: 50px;
			width: 100%;
			outline: none;
			border-width: 0;
			margin-top: 20px;
		}

		.content-after-input {
			display: flex;
			justify-content: space-between;
			align-items: center;
			margin-top: 15px;
			font-size: 14px;
			color: #333333;
		}



		.login-btn-box-submit {
			background: linear-gradient(93.47deg, #EC6F66 -32.61%, #F3A183 119.08%) !important;
			background: #F4F4F4;
			border-radius: 64px;
			height: 50px;
			width: 100%;
			outline: none;
			border-width: 0;
			margin-top: 52px;
			text-decoration: none;
			display: flex;
			justify-content: space-between;
			padding: 0 15px 0 4px;
			align-items: center;
			font-weight: 700;
			font-size: 14px;
			text-decoration: none;
		}

		.login-btn-box-submit-google {
			border: 1px solid #D6D6D6;
			background-color: #fff;
			border-radius: 60px;
			height: 50px;
			width: 100%;
			outline: none;
			margin-top: 20px;
			text-decoration: none;
			display: flex;
			justify-content: space-between;
			padding: 0 15px 0 4px;
			align-items: center;
			font-weight: 700;
			font-size: 14px;
			text-decoration: none;
			color: #373737;
		}

		.login-btn-content-left {
			width: 34px;
			height: 34px;
			border-radius: 50%;
			display: flex;
			justify-content: center;
			align-items: center;
			background-color: #fff;

		}



		.login-btn-content-left-google {
			color: #373737;
			width: 34px;
			height: 34px;
			border-radius: 50%;
			display: flex;
			justify-content: center;
			align-items: center;
			background-color: #fff;

		}

		.login-line-box-title {
			width: 100%;
			font-size: 14px;
			margin: 20px 0 21px 0;
			display: flex;
			justify-content: center;

		}

		.login-line-title {
			padding: 5px 20px;
			font-size: 14px;
			background-color: #fff;
			z-index: 1;
		}

		.login-line {
			width: 85%;
			height: 2px;
			border-radius: 0.5px;
			position: absolute;
			margin-top: 14px;
			background-color: #373737;
			color: #fff;

		}

		.login-text-footer {
			display: flex;
			justify-content: center;
			margin-top: 30px;
			font-size: 14px;
			color: #797979;
			font-weight: 600;
		}

		.login-forgot-password {
			cursor: pointer;
		}

		input[name="remember-me"] {
			margin-right: 9px;
			margin-top: -1px;
		}

		input[name="remember-me"]:checked {
			background-color: #33A595;
			width: 18px;
			height: 18px;

		}

		input[name="remember-me"]:checked~.checkbox-alias .fa {
			color: #fff;
		}

		.login-box-input-password {
			position: relative;
			width: 100%;
		}

		.login-box-icon-eye {
			position: absolute;
			height: 100%;
			right: 20px;
			display: flex;
			align-items: center;
			z-index: 4;
			top: 3px;
			cursor: pointer;
		}
	</style>

	<!-- login -->
	<div class="login-wrapper" id="login-wrapper">
		<div class="login-wrapper-inner" id="login-wrapper-inner">
			<div class="login-title">Login</div>
			<div class="login-label">Please log in to your account.</div>
			<form class="woocommerce-form woocommerce-form-login login" method="post">
				<?php do_action('woocommerce_login_form_start'); ?>
				<input class="woocommerce-Input woocommerce-Input--text input-text" type="text" id="username" name="username" placeholder="Your username.." value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" /><?php // @codingStandardsIgnoreLine 
																																																																	?>><br>
				<div class="login-box-input-password"><input type="password" class="woocommerce-Input woocommerce-Input--text input-text" id="password" name="password" value="" placeholder="Input Password">
					<div id="show_password" class="login-box-icon-eye show_password" onclick="onShowPassword()"><img src="<?= get_site_url(); ?>/wp-content/uploads/2022/06/icon-eye.png" alt=""></div>
				</div>
				<div>
					<div class="content-after-input">
						<div style="display: flex;align-items:center;"><input type="checkbox" id="remember-me" name="remember-me" value="remember-me">Remember me</div>
						<div class="login-forgot-password">Forgot Password</div>
					</div>
					<?php do_action('woocommerce_login_form'); ?>
					<?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>
					<button class="login-btn-box-submit woocommerce-button button woocommerce-form-login__submit" name="login" value="<?php esc_attr_e('Log in', 'woocommerce'); ?>">
						<div class="login-btn-content-left"><img src="<?= get_site_url(); ?>/wp-content/uploads/2022/06/icon-cart.png" alt=""></div>
						Login
						<img src="<?= get_site_url(); ?>/wp-content/uploads/2022/06/icon-arrow-right-white.png" alt="">
					</button>
					<div class="login-line-box-title">
						<div class="login-line">.</div>
						<div class="login-line-title">or</div>
					</div>
					<button class="login-btn-box-submit-google">
						<div class="login-btn-content-left-google">
							<img src="<?= get_site_url(); ?>/wp-content/uploads/2022/06/icon-google.png" alt="">
						</div>
						Login with Google
						<div><img src="<?= get_site_url(); ?>/wp-content/uploads/2022/06/icon-arrow-right-black.png" alt=""></div>
					</button>
					<div class="login-text-footer">Don’t have an Account? <span style="margin-left: 2px;font-weight:600;">
							<div style="text-decoration: none;color:#373737;cursor:pointer;" onclick="onShowRegister()">Create Account</div>
						</span></div>
					<?php do_action('woocommerce_login_form_end'); ?>
			</form>
		</div>
	</div>
	<!-- register -->
	<div class="register-wrapper">
		<div class="login-wrapper-inner" id="login-wrapper-inner">
			<div class="login-title">Login</div>
			<div class="login-label">Please log in to your account.</div>
			<form class="woocommerce-form woocommerce-form-login login" method="post">
				<?php do_action('woocommerce_login_form_start'); ?>
				<input class="woocommerce-Input woocommerce-Input--text input-text" type="text" id="username" name="username" placeholder="Your username.." value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" /><?php // @codingStandardsIgnoreLine 
																																																																	?>><br>
				<div class="login-box-input-password"><input type="password" class="woocommerce-Input woocommerce-Input--text input-text" id="password" name="password" value="" placeholder="Input Password">
					<div id="show_password" class="login-box-icon-eye show_password" onclick="onShowPassword()"><img src="<?= get_site_url(); ?>/wp-content/uploads/2022/06/icon-eye.png" alt=""></div>
				</div>
				<div>
					<div class="content-after-input">
						<div style="display: flex;align-items:center;"><input type="checkbox" id="remember-me" name="remember-me" value="remember-me">Remember me</div>
						<div class="login-forgot-password">Forgot Password</div>
					</div>
					<?php do_action('woocommerce_login_form'); ?>
					<?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>
					<button class="login-btn-box-submit woocommerce-button button woocommerce-form-login__submit" name="login" value="<?php esc_attr_e('Log in', 'woocommerce'); ?>">
						<div class="login-btn-content-left"><img src="<?= get_site_url(); ?>/wp-content/uploads/2022/06/icon-cart.png" alt=""></div>
						Login
						<img src="<?= get_site_url(); ?>/wp-content/uploads/2022/06/icon-arrow-right-white.png" alt="">
					</button>
					<div class="login-line-box-title">
						<div class="login-line">.</div>
						<div class="login-line-title">or</div>
					</div>
					<button class="login-btn-box-submit-google">
						<div class="login-btn-content-left-google">
							<img src="<?= get_site_url(); ?>/wp-content/uploads/2022/06/icon-google.png" alt="">
						</div>
						Login with Google
						<div><img src="<?= get_site_url(); ?>/wp-content/uploads/2022/06/icon-arrow-right-black.png" alt=""></div>
					</button>
					<div class="login-text-footer">Don’t have an Account? <span style="margin-left: 2px;font-weight:600;">
							<div style="text-decoration: none;color:#373737;cursor:pointer;" onclick="onShowRegister()">Create Account</div>
						</span></div>
					<?php do_action('woocommerce_login_form_end'); ?>
			</form>
		</div>
	</div>
	<script>
		var is_login = true

		function onShowRegister() {
			document.getElementById("login-wrapper").style.display = "none";
			document.getElementById("register-wrapper").style.display = "flex";
		}

		function onShowPassword() {
			var x = document.getElementById("password");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
		}
	</script>
<?php endif; ?>

<?php do_action('woocommerce_after_customer_login_form'); ?>