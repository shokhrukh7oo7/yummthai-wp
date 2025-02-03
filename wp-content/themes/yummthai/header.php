<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yummthai
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header>
		<div class="container-fluid">
			<div class="d-flex align-items-center justify-content-between">

				<?php echo get_custom_logo(); ?>

				<div class="panels">
					<button type="button" class="btn lang" data-toggle="modal" data-target="#langModal">
						<img src="<?php echo the_field( 'language_icon', 'options' )?>" alt="">
					</button>

					<div class="user unauthorized">
						<button class="btn unauthorized-btn" data-target="#hidden-panel">
							<span><?php echo the_field('sign_in', 'options')?></span>
							<i>
								<img src="<?php echo the_field( 'user_icon', 'options' )?>" alt="">
							</i>
						</button>
						<div class="hidden-panel unauthorized-panel" id="hidden-panel">
							<div class="inner">
								<ul>
									<li>
										<a href="#" class="no-link" data-toggle="modal" data-target="#modalLogin">
										<?php echo the_field('sign_in', 'options')?></a>
									</li>
									<li>
										<a href="#" class="no-link" data-toggle="modal" data-target="#modalLogin">
										<?php echo the_field('sign_up', 'options')?>
										</a>
									</li>
									<li><a href="/help" class=""> <?php echo the_field('help', 'options')?> </a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>