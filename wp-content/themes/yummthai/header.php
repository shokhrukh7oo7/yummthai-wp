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
				<a href="#" class="logo">
					<img src="img/Logo.svg" alt="" />
				</a>

				<div class="panels">
					<button type="button" class="btn lang" data-toggle="modal" data-target="#langModal">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M12.0002 0C5.38374 0 0.000244141 5.3835 0.000244141 12C0.000244141 18.6165 5.38374 24 12.0002 24C18.6167 24 24.0002 18.6165 24.0002 12C24.0002 5.3835 18.6167 0 12.0002 0ZM20.4962 5.8545C19.2032 6.3675 17.8742 6.774 16.5107 7.041C15.9317 5.1345 15.0122 3.309 13.7492 1.6575C16.5152 2.1255 18.9122 3.672 20.4962 5.8545ZM15.3962 15.27C13.1432 14.961 10.8557 14.961 8.60274 15.27C8.14074 13.119 8.13924 10.893 8.59974 8.7405C9.71874 8.8935 10.8497 9 12.0002 9C13.1507 9 14.2802 8.8935 15.3992 8.7405C15.8597 10.893 15.8582 13.119 15.3962 15.27ZM15.0077 7.2735C13.0112 7.5315 10.9877 7.5315 8.99124 7.2735C9.60624 5.3445 10.6112 3.516 12.0002 1.896C13.3892 3.516 14.3927 5.3445 15.0077 7.2735ZM10.2482 1.6575C8.98524 3.309 8.06724 5.1345 7.48824 7.041C6.12624 6.774 4.79724 6.3675 3.50424 5.8545C5.08674 3.672 7.48374 2.1255 10.2482 1.6575ZM1.50024 12C1.50024 10.251 1.93674 8.604 2.69574 7.152C4.12974 7.7415 5.60124 8.205 7.11474 8.5095C6.63324 10.815 6.63324 13.1955 7.11624 15.5025C5.60424 15.804 4.12674 16.2645 2.69574 16.8525C1.93674 15.3975 1.50024 13.7505 1.50024 12ZM3.50424 18.1455C4.79724 17.6325 6.12624 17.226 7.48824 16.959C8.06724 18.8655 8.98674 20.691 10.2497 22.3425C7.48374 21.8745 5.08674 20.328 3.50424 18.1455ZM8.99274 16.7265C10.9877 16.4685 13.0112 16.4685 15.0077 16.7265C14.3927 18.6555 13.3877 20.484 12.0002 22.104C10.6112 20.484 9.60774 18.6555 8.99274 16.7265ZM13.7492 22.3425C15.0122 20.691 15.9317 18.8655 16.5107 16.959C17.8727 17.226 19.2032 17.634 20.4962 18.1455C18.9122 20.328 16.5152 21.8745 13.7492 22.3425ZM16.8827 15.4995C17.3657 13.194 17.3672 10.8135 16.8842 8.508C18.3977 8.2035 19.8707 7.7415 21.3047 7.1505C22.0637 8.604 22.5002 10.251 22.5002 12C22.5002 13.7505 22.0637 15.3975 21.3047 16.8495C19.8737 16.263 18.3962 15.8025 16.8827 15.4995Z"
								fill="#222222"></path>
						</svg>
					</button>

					<div class="user unauthorized">
						<button class="btn unauthorized-btn" data-target="#hidden-panel">
							<span>Sign in</span>
							<i>
								<svg width="32" height="32" viewBox="0 0 32 32" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<rect x="0.000244141" width="32" height="32" rx="16" fill="#6C6E74"></rect>
									<path
										d="M16.0003 15.8626C17.8129 15.8626 19.2824 14.4007 19.2824 12.5973C19.2824 10.794 17.8129 9.33203 16.0003 9.33203C14.1877 9.33203 12.7183 10.794 12.7183 12.5973C12.7183 14.4007 14.1877 15.8626 16.0003 15.8626Z"
										fill="white"></path>
									<path
										d="M17.7097 17.2227H14.2909C12.308 17.2227 10.667 18.8554 10.667 20.8281C10.667 21.3043 10.8721 21.7125 11.2824 21.9166C11.8978 22.2567 13.2653 22.6648 16.0003 22.6648C18.7354 22.6648 20.1029 22.2567 20.7183 21.9166C21.0601 21.7125 21.3337 21.3043 21.3337 20.8281C21.3337 18.7873 19.6927 17.2227 17.7097 17.2227Z"
										fill="white"></path>
								</svg>
							</i>
						</button>
						<div class="hidden-panel unauthorized-panel" id="hidden-panel">
							<div class="inner">
								<ul>
									<li>
										<a href="#" class="no-link" data-toggle="modal" data-target="#modalLogin">
											Sign in</a>
									</li>
									<li>
										<a href="#" class="no-link" data-toggle="modal" data-target="#modalLogin">Sign
											up</a>
									</li>
									<li><a href="/help" class=""> Help </a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>