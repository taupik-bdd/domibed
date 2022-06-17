<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
	<?php
	wp_body_open();
	?>
	<header id="site-header" class=" header-custom">
		<div class="header-inner section-inner">
			<div class="header-items-left">
				<div class="header-items-menu-mobile" id="menu-mobile" name="menu-mobile">
					<i class=" fa-solid fa-bars mobile-icon-menu" onclick="onClickMenu()"></i>
				</div>
				<div class="header-items-left-logo">

					<?php
					// Site title or logo.
					twentytwenty_site_logo();
					?>

				</div>
				<?php
				if (has_nav_menu('primary') || !has_nav_menu('expanded')) {
				?>
					<ul class="header-items-left-menu mobile-hide">
						<?php
						if (has_nav_menu('primary')) {
							wp_nav_menu(
								array(
									'container'  => '',
									'items_wrap' => '%3$s',
									'theme_location' => 'primary',
								)
							);
						} elseif (!has_nav_menu('expanded')) {
							wp_list_pages(
								array(
									'match_menu_classes' => true,
									'show_sub_menu_icons' => true,
									'title_li' => false,
									'walker'   => new TwentyTwenty_Walker_Page(),
								)
							);
						}
						?>
					</ul>
				<?php
				}?>

			</div>
			<div class="header-items-right">
				<i class="fa-solid fa-magnifying-glass header-items-right-items "></i>
				<i class="fa-solid fa-user header-items-right-items "></i>
				<i class="fa-solid fa-heart header-items-right-items"></i>
				<i class="fa-solid fa-bag-shopping header-items-right-items"></i>
			</div>
		</div>
		<!-- .header-inner -->

		<?php
		// Output the search modal (if it is activated in the customizer).
		if (true === $enable_header_search) {
			get_template_part('template-parts/modal-search');
		}
		?>
		<div class="modal-mobile-menu">
			<div class="header-items-left-search">
				<input type="text" name="input-search" class="header-items-left-search" placeholder="Search product..." />
				<i class="fa-solid fa-magnifying-glass icon-search"></i>
			</div>
			<ul class="header-items-left-menu">
				<li>Matresses</li>
				<li>Toppers</li>
				<li>Pillow & Bolster</li>
				<li>Bed Frame</li>
				<li>Bedding</li>
				<li>Bundles</li>
				<li>Blog</li>
			</ul>
		</div>
	</header><!-- #site-header -->

	<script>
		// function onClickMenu() {
		// 	alert('cja');
		// 	$(".modal-mobile-menu").css("display", "flex");
		// }


		// $(function() {
		// 	$("menu-mobile").on('click', function() {
		// 		alert("Success !!!");

		// 	})
		// })
	</script>

	<?php
	// Output the menu modal.
	get_template_part('template-parts/modal-menu');
