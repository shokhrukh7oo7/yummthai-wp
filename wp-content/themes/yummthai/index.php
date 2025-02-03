<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yummthai
 */

get_header();
?>

<div class="head">
	<img class="main-img" src="<?php echo get_template_directory_uri() . '/assets/img/headMain.jpg' ?>" alt="" />
	<img class="decor left" src="<?php echo get_template_directory_uri() . '/assets/img/headMainLeft.svg' ?>" alt="" />
	<img class="decor right" src="<?php echo get_template_directory_uri() . '/assets/img/headMainRight.svg' ?>" alt="" />
	<div class="inner">
		<h1>Вдохновение для Путешествий</h1>
		<p>
			Ваш путеводитель по лучшим турам и экскурсиям в Таиланде. Найдите
			советы, гиды и идеи для незабываемых приключений!
		</p>
	</div>
</div>

<main class="container-fluid main">
	<div class="category">
		<span class="active">All</span>
		<span>Phuket</span>
		<span>Bangkok</span>
		<span>Phuket</span>
		<span>Bangkok</span>
		<span>Phuket</span>
		<span>Bangkok</span>
		<span>Phuket</span>
		<span>Bangkok</span>
		<span>Phuket</span>
		<span>Bangkok</span>
		<span>Phuket</span>
		<span>Bangkok</span>
		<span>Phuket</span>
		<span>Bangkok</span>
		<span>Phuket</span>
		<span>Bangkok</span>
		<span>Phuket</span>
		<span>Bangkok</span>
		<span>Phuket</span>
		<span>Bangkok</span>
		<span>Phuket</span>
		<span>Bangkok</span>
		<span>Phuket</span>
		<span>Bangkok</span>
		<span>Phuket</span>
		<span>Bangkok</span>
		<span>Phuket</span>
		<span>Bangkok</span>
		<span>Phuket</span>
		<span>Bangkok</span>
		<span>Phuket</span>
		<span>Bangkok</span>
		<span>Phuket</span>
		<span>Bangkok</span>
		<span>Phuket</span>
		<span>Bangkok</span>
	</div>

	<div class="news">
		<div class="top-news">
			<div class="row">
				<div class="col-md-6">
					<a class="item-top" href="#">
						<div class="img">
							<img src="<?php echo get_template_directory_uri() . '/assets/img/item-top.jpg'?>" alt="" />
						</div>
						<div class="desc">
							<h6>
								Путеводитель по Таиланду: Лучшие Места и Экскурсии, Которые
								Стоит Посетить
							</h6>
							<div class="info">
								<span>
									<i>
										<svg width="16" height="17" viewBox="0 0 16 17" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<g clip-path="url(#clip0_15410_33758)">
												<path
													d="M14 7.16675C14 11.8334 8 15.8334 8 15.8334C8 15.8334 2 11.8334 2 7.16675C2 5.57545 2.63214 4.04933 3.75736 2.92411C4.88258 1.79889 6.4087 1.16675 8 1.16675C9.5913 1.16675 11.1174 1.79889 12.2426 2.92411C13.3679 4.04933 14 5.57545 14 7.16675Z"
													stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
													stroke-linejoin="round" />
												<path
													d="M8 9.16675C9.10457 9.16675 10 8.27132 10 7.16675C10 6.06218 9.10457 5.16675 8 5.16675C6.89543 5.16675 6 6.06218 6 7.16675C6 8.27132 6.89543 9.16675 8 9.16675Z"
													stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
													stroke-linejoin="round" />
											</g>
											<defs>
												<clipPath id="clip0_15410_33758">
													<rect width="16" height="16" fill="white"
														transform="translate(0 0.5)" />
												</clipPath>
											</defs>
										</svg>
									</i>
									Пхукет
								</span>
								<span> 2 июля </span>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6">
					<a class="item-top" href="#">
						<div class="img">
							<img src="<?php echo get_template_directory_uri() . '/assets/img/item-top.jpg'?>" alt="" />
						</div>
						<div class="desc">
							<h6>
								Путеводитель по Таиланду: Лучшие Места и Экскурсии, Которые
								Стоит Посетить
							</h6>
							<div class="info">
								<span>
									<i>
										<svg width="16" height="17" viewBox="0 0 16 17" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<g clip-path="url(#clip0_15410_33758)">
												<path
													d="M14 7.16675C14 11.8334 8 15.8334 8 15.8334C8 15.8334 2 11.8334 2 7.16675C2 5.57545 2.63214 4.04933 3.75736 2.92411C4.88258 1.79889 6.4087 1.16675 8 1.16675C9.5913 1.16675 11.1174 1.79889 12.2426 2.92411C13.3679 4.04933 14 5.57545 14 7.16675Z"
													stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
													stroke-linejoin="round" />
												<path
													d="M8 9.16675C9.10457 9.16675 10 8.27132 10 7.16675C10 6.06218 9.10457 5.16675 8 5.16675C6.89543 5.16675 6 6.06218 6 7.16675C6 8.27132 6.89543 9.16675 8 9.16675Z"
													stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
													stroke-linejoin="round" />
											</g>
											<defs>
												<clipPath id="clip0_15410_33758">
													<rect width="16" height="16" fill="white"
														transform="translate(0 0.5)" />
												</clipPath>
											</defs>
										</svg>
									</i>
									Пхукет
								</span>
								<span> 2 июля </span>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<a href="#" class="item">
					<div class="img">
						<img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg'?>" alt="" />
					</div>
					<div class="desc">
						<h6>
							Путеводитель по Таиланду: Лучшие Места и Экскурсии, Которые
							Стоит Посетить
						</h6>
						<p>
							Откройте для себя Таиланд: от оживленных городов до уединенных
							пляжей. Исследуйте культурные достопримечательности, природные
							чудеса и приключения, которые ждут вас в этой удивительной
							стране.
						</p>
						<div class="info">
							<span>
								<i>
									<svg width="16" height="17" viewBox="0 0 16 17" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_15410_33758)">
											<path
												d="M14 7.16675C14 11.8334 8 15.8334 8 15.8334C8 15.8334 2 11.8334 2 7.16675C2 5.57545 2.63214 4.04933 3.75736 2.92411C4.88258 1.79889 6.4087 1.16675 8 1.16675C9.5913 1.16675 11.1174 1.79889 12.2426 2.92411C13.3679 4.04933 14 5.57545 14 7.16675Z"
												stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
												stroke-linejoin="round" />
											<path
												d="M8 9.16675C9.10457 9.16675 10 8.27132 10 7.16675C10 6.06218 9.10457 5.16675 8 5.16675C6.89543 5.16675 6 6.06218 6 7.16675C6 8.27132 6.89543 9.16675 8 9.16675Z"
												stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
												stroke-linejoin="round" />
										</g>
										<defs>
											<clipPath id="clip0_15410_33758">
												<rect width="16" height="16" fill="white"
													transform="translate(0 0.5)" />
											</clipPath>
										</defs>
									</svg>
								</i>
								Пхукет
							</span>
							<span> 2 июля </span>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-sm-6">
				<a href="#" class="item">
					<div class="img">
						<img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg'?>" alt="" />
					</div>
					<div class="desc">
						<h6>
							Путеводитель по Таиланду: Лучшие Места и Экскурсии, Которые
							Стоит Посетить
						</h6>
						<p>
							Откройте для себя Таиланд: от оживленных городов до уединенных
							пляжей. Исследуйте культурные достопримечательности, природные
							чудеса и приключения, которые ждут вас в этой удивительной
							стране.
						</p>
						<div class="info">
							<span>
								<i>
									<svg width="16" height="17" viewBox="0 0 16 17" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_15410_33758)">
											<path
												d="M14 7.16675C14 11.8334 8 15.8334 8 15.8334C8 15.8334 2 11.8334 2 7.16675C2 5.57545 2.63214 4.04933 3.75736 2.92411C4.88258 1.79889 6.4087 1.16675 8 1.16675C9.5913 1.16675 11.1174 1.79889 12.2426 2.92411C13.3679 4.04933 14 5.57545 14 7.16675Z"
												stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
												stroke-linejoin="round" />
											<path
												d="M8 9.16675C9.10457 9.16675 10 8.27132 10 7.16675C10 6.06218 9.10457 5.16675 8 5.16675C6.89543 5.16675 6 6.06218 6 7.16675C6 8.27132 6.89543 9.16675 8 9.16675Z"
												stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
												stroke-linejoin="round" />
										</g>
										<defs>
											<clipPath id="clip0_15410_33758">
												<rect width="16" height="16" fill="white"
													transform="translate(0 0.5)" />
											</clipPath>
										</defs>
									</svg>
								</i>
								Пхукет
							</span>
							<span> 2 июля </span>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-sm-6">
				<a href="#" class="item">
					<div class="img">
						<img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg'?>" alt="" />
					</div>
					<div class="desc">
						<h6>
							Путеводитель по Таиланду: Лучшие Места и Экскурсии, Которые
							Стоит Посетить
						</h6>
						<p>
							Откройте для себя Таиланд: от оживленных городов до уединенных
							пляжей. Исследуйте культурные достопримечательности, природные
							чудеса и приключения, которые ждут вас в этой удивительной
							стране.
						</p>
						<div class="info">
							<span>
								<i>
									<svg width="16" height="17" viewBox="0 0 16 17" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_15410_33758)">
											<path
												d="M14 7.16675C14 11.8334 8 15.8334 8 15.8334C8 15.8334 2 11.8334 2 7.16675C2 5.57545 2.63214 4.04933 3.75736 2.92411C4.88258 1.79889 6.4087 1.16675 8 1.16675C9.5913 1.16675 11.1174 1.79889 12.2426 2.92411C13.3679 4.04933 14 5.57545 14 7.16675Z"
												stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
												stroke-linejoin="round" />
											<path
												d="M8 9.16675C9.10457 9.16675 10 8.27132 10 7.16675C10 6.06218 9.10457 5.16675 8 5.16675C6.89543 5.16675 6 6.06218 6 7.16675C6 8.27132 6.89543 9.16675 8 9.16675Z"
												stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
												stroke-linejoin="round" />
										</g>
										<defs>
											<clipPath id="clip0_15410_33758">
												<rect width="16" height="16" fill="white"
													transform="translate(0 0.5)" />
											</clipPath>
										</defs>
									</svg>
								</i>
								Пхукет
							</span>
							<span> 2 июля </span>
						</div>
					</div>
				</a>
			</div>

			<div class="col-md-4 col-sm-6">
				<a href="#" class="item">
					<div class="img">
						<img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg'?>" alt="" />
					</div>
					<div class="desc">
						<h6>
							Путеводитель по Таиланду: Лучшие Места и Экскурсии, Которые
							Стоит Посетить
						</h6>
						<p>
							Откройте для себя Таиланд: от оживленных городов до уединенных
							пляжей. Исследуйте культурные достопримечательности, природные
							чудеса и приключения, которые ждут вас в этой удивительной
							стране.
						</p>
						<div class="info">
							<span>
								<i>
									<svg width="16" height="17" viewBox="0 0 16 17" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_15410_33758)">
											<path
												d="M14 7.16675C14 11.8334 8 15.8334 8 15.8334C8 15.8334 2 11.8334 2 7.16675C2 5.57545 2.63214 4.04933 3.75736 2.92411C4.88258 1.79889 6.4087 1.16675 8 1.16675C9.5913 1.16675 11.1174 1.79889 12.2426 2.92411C13.3679 4.04933 14 5.57545 14 7.16675Z"
												stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
												stroke-linejoin="round" />
											<path
												d="M8 9.16675C9.10457 9.16675 10 8.27132 10 7.16675C10 6.06218 9.10457 5.16675 8 5.16675C6.89543 5.16675 6 6.06218 6 7.16675C6 8.27132 6.89543 9.16675 8 9.16675Z"
												stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
												stroke-linejoin="round" />
										</g>
										<defs>
											<clipPath id="clip0_15410_33758">
												<rect width="16" height="16" fill="white"
													transform="translate(0 0.5)" />
											</clipPath>
										</defs>
									</svg>
								</i>
								Пхукет
							</span>
							<span> 2 июля </span>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-sm-6">
				<a href="#" class="item">
					<div class="img">
						<img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg'?>" alt="" />
					</div>
					<div class="desc">
						<h6>
							Путеводитель по Таиланду: Лучшие Места и Экскурсии, Которые
							Стоит Посетить
						</h6>
						<p>
							Откройте для себя Таиланд: от оживленных городов до уединенных
							пляжей. Исследуйте культурные достопримечательности, природные
							чудеса и приключения, которые ждут вас в этой удивительной
							стране.
						</p>
						<div class="info">
							<span>
								<i>
									<svg width="16" height="17" viewBox="0 0 16 17" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_15410_33758)">
											<path
												d="M14 7.16675C14 11.8334 8 15.8334 8 15.8334C8 15.8334 2 11.8334 2 7.16675C2 5.57545 2.63214 4.04933 3.75736 2.92411C4.88258 1.79889 6.4087 1.16675 8 1.16675C9.5913 1.16675 11.1174 1.79889 12.2426 2.92411C13.3679 4.04933 14 5.57545 14 7.16675Z"
												stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
												stroke-linejoin="round" />
											<path
												d="M8 9.16675C9.10457 9.16675 10 8.27132 10 7.16675C10 6.06218 9.10457 5.16675 8 5.16675C6.89543 5.16675 6 6.06218 6 7.16675C6 8.27132 6.89543 9.16675 8 9.16675Z"
												stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
												stroke-linejoin="round" />
										</g>
										<defs>
											<clipPath id="clip0_15410_33758">
												<rect width="16" height="16" fill="white"
													transform="translate(0 0.5)" />
											</clipPath>
										</defs>
									</svg>
								</i>
								Пхукет
							</span>
							<span> 2 июля </span>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-sm-6">
				<a href="#" class="item">
					<div class="img">
						<img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg'?>" alt="" />
					</div>
					<div class="desc">
						<h6>
							Путеводитель по Таиланду: Лучшие Места и Экскурсии, Которые
							Стоит Посетить
						</h6>
						<p>
							Откройте для себя Таиланд: от оживленных городов до уединенных
							пляжей. Исследуйте культурные достопримечательности, природные
							чудеса и приключения, которые ждут вас в этой удивительной
							стране.
						</p>
						<div class="info">
							<span>
								<i>
									<svg width="16" height="17" viewBox="0 0 16 17" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_15410_33758)">
											<path
												d="M14 7.16675C14 11.8334 8 15.8334 8 15.8334C8 15.8334 2 11.8334 2 7.16675C2 5.57545 2.63214 4.04933 3.75736 2.92411C4.88258 1.79889 6.4087 1.16675 8 1.16675C9.5913 1.16675 11.1174 1.79889 12.2426 2.92411C13.3679 4.04933 14 5.57545 14 7.16675Z"
												stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
												stroke-linejoin="round" />
											<path
												d="M8 9.16675C9.10457 9.16675 10 8.27132 10 7.16675C10 6.06218 9.10457 5.16675 8 5.16675C6.89543 5.16675 6 6.06218 6 7.16675C6 8.27132 6.89543 9.16675 8 9.16675Z"
												stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
												stroke-linejoin="round" />
										</g>
										<defs>
											<clipPath id="clip0_15410_33758">
												<rect width="16" height="16" fill="white"
													transform="translate(0 0.5)" />
											</clipPath>
										</defs>
									</svg>
								</i>
								Пхукет
							</span>
							<span> 2 июля </span>
						</div>
					</div>
				</a>
			</div>

			<div class="col-md-12">
				<h3>Популярные статьи</h3>
			</div>

			<div class="col-md-4 col-sm-6">
				<a href="#" class="item">
					<div class="img">
						<img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg'?>" alt="" />
					</div>
					<div class="desc">
						<h6>
							Путеводитель по Таиланду: Лучшие Места и Экскурсии, Которые
							Стоит Посетить
						</h6>
						<p>
							Откройте для себя Таиланд: от оживленных городов до уединенных
							пляжей. Исследуйте культурные достопримечательности, природные
							чудеса и приключения, которые ждут вас в этой удивительной
							стране.
						</p>
						<div class="info">
							<span>
								<i>
									<svg width="16" height="17" viewBox="0 0 16 17" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_15410_33758)">
											<path
												d="M14 7.16675C14 11.8334 8 15.8334 8 15.8334C8 15.8334 2 11.8334 2 7.16675C2 5.57545 2.63214 4.04933 3.75736 2.92411C4.88258 1.79889 6.4087 1.16675 8 1.16675C9.5913 1.16675 11.1174 1.79889 12.2426 2.92411C13.3679 4.04933 14 5.57545 14 7.16675Z"
												stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
												stroke-linejoin="round" />
											<path
												d="M8 9.16675C9.10457 9.16675 10 8.27132 10 7.16675C10 6.06218 9.10457 5.16675 8 5.16675C6.89543 5.16675 6 6.06218 6 7.16675C6 8.27132 6.89543 9.16675 8 9.16675Z"
												stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
												stroke-linejoin="round" />
										</g>
										<defs>
											<clipPath id="clip0_15410_33758">
												<rect width="16" height="16" fill="white"
													transform="translate(0 0.5)" />
											</clipPath>
										</defs>
									</svg>
								</i>
								Пхукет
							</span>
							<span> 2 июля </span>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-sm-6">
				<a href="#" class="item">
					<div class="img">
						<img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg'?>" alt="" />
					</div>
					<div class="desc">
						<h6>
							Путеводитель по Таиланду: Лучшие Места и Экскурсии, Которые
							Стоит Посетить
						</h6>
						<p>
							Откройте для себя Таиланд: от оживленных городов до уединенных
							пляжей. Исследуйте культурные достопримечательности, природные
							чудеса и приключения, которые ждут вас в этой удивительной
							стране.
						</p>
						<div class="info">
							<span>
								<i>
									<svg width="16" height="17" viewBox="0 0 16 17" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_15410_33758)">
											<path
												d="M14 7.16675C14 11.8334 8 15.8334 8 15.8334C8 15.8334 2 11.8334 2 7.16675C2 5.57545 2.63214 4.04933 3.75736 2.92411C4.88258 1.79889 6.4087 1.16675 8 1.16675C9.5913 1.16675 11.1174 1.79889 12.2426 2.92411C13.3679 4.04933 14 5.57545 14 7.16675Z"
												stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
												stroke-linejoin="round" />
											<path
												d="M8 9.16675C9.10457 9.16675 10 8.27132 10 7.16675C10 6.06218 9.10457 5.16675 8 5.16675C6.89543 5.16675 6 6.06218 6 7.16675C6 8.27132 6.89543 9.16675 8 9.16675Z"
												stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
												stroke-linejoin="round" />
										</g>
										<defs>
											<clipPath id="clip0_15410_33758">
												<rect width="16" height="16" fill="white"
													transform="translate(0 0.5)" />
											</clipPath>
										</defs>
									</svg>
								</i>
								Пхукет
							</span>
							<span> 2 июля </span>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-sm-6">
				<a href="#" class="item">
					<div class="img">
						<img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg'?>" alt="" />
					</div>
					<div class="desc">
						<h6>
							Путеводитель по Таиланду: Лучшие Места и Экскурсии, Которые
							Стоит Посетить
						</h6>
						<p>
							Откройте для себя Таиланд: от оживленных городов до уединенных
							пляжей. Исследуйте культурные достопримечательности, природные
							чудеса и приключения, которые ждут вас в этой удивительной
							стране.
						</p>
						<div class="info">
							<span>
								<i>
									<svg width="16" height="17" viewBox="0 0 16 17" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_15410_33758)">
											<path
												d="M14 7.16675C14 11.8334 8 15.8334 8 15.8334C8 15.8334 2 11.8334 2 7.16675C2 5.57545 2.63214 4.04933 3.75736 2.92411C4.88258 1.79889 6.4087 1.16675 8 1.16675C9.5913 1.16675 11.1174 1.79889 12.2426 2.92411C13.3679 4.04933 14 5.57545 14 7.16675Z"
												stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
												stroke-linejoin="round" />
											<path
												d="M8 9.16675C9.10457 9.16675 10 8.27132 10 7.16675C10 6.06218 9.10457 5.16675 8 5.16675C6.89543 5.16675 6 6.06218 6 7.16675C6 8.27132 6.89543 9.16675 8 9.16675Z"
												stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
												stroke-linejoin="round" />
										</g>
										<defs>
											<clipPath id="clip0_15410_33758">
												<rect width="16" height="16" fill="white"
													transform="translate(0 0.5)" />
											</clipPath>
										</defs>
									</svg>
								</i>
								Пхукет
							</span>
							<span> 2 июля </span>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-sm-6">
				<a href="#" class="item">
					<div class="img">
						<img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg'?>" alt="" />
					</div>
					<div class="desc">
						<h6>
							Путеводитель по Таиланду: Лучшие Места и Экскурсии, Которые
							Стоит Посетить
						</h6>
						<p>
							Откройте для себя Таиланд: от оживленных городов до уединенных
							пляжей. Исследуйте культурные достопримечательности, природные
							чудеса и приключения, которые ждут вас в этой удивительной
							стране.
						</p>
						<div class="info">
							<span>
								<i>
									<svg width="16" height="17" viewBox="0 0 16 17" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_15410_33758)">
											<path
												d="M14 7.16675C14 11.8334 8 15.8334 8 15.8334C8 15.8334 2 11.8334 2 7.16675C2 5.57545 2.63214 4.04933 3.75736 2.92411C4.88258 1.79889 6.4087 1.16675 8 1.16675C9.5913 1.16675 11.1174 1.79889 12.2426 2.92411C13.3679 4.04933 14 5.57545 14 7.16675Z"
												stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
												stroke-linejoin="round" />
											<path
												d="M8 9.16675C9.10457 9.16675 10 8.27132 10 7.16675C10 6.06218 9.10457 5.16675 8 5.16675C6.89543 5.16675 6 6.06218 6 7.16675C6 8.27132 6.89543 9.16675 8 9.16675Z"
												stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
												stroke-linejoin="round" />
										</g>
										<defs>
											<clipPath id="clip0_15410_33758">
												<rect width="16" height="16" fill="white"
													transform="translate(0 0.5)" />
											</clipPath>
										</defs>
									</svg>
								</i>
								Пхукет
							</span>
							<span> 2 июля </span>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-sm-6">
				<a href="#" class="item">
					<div class="img">
						<img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg'?>" alt="" />
					</div>
					<div class="desc">
						<h6>
							Путеводитель по Таиланду: Лучшие Места и Экскурсии, Которые
							Стоит Посетить
						</h6>
						<p>
							Откройте для себя Таиланд: от оживленных городов до уединенных
							пляжей. Исследуйте культурные достопримечательности, природные
							чудеса и приключения, которые ждут вас в этой удивительной
							стране.
						</p>
						<div class="info">
							<span>
								<i>
									<svg width="16" height="17" viewBox="0 0 16 17" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_15410_33758)">
											<path
												d="M14 7.16675C14 11.8334 8 15.8334 8 15.8334C8 15.8334 2 11.8334 2 7.16675C2 5.57545 2.63214 4.04933 3.75736 2.92411C4.88258 1.79889 6.4087 1.16675 8 1.16675C9.5913 1.16675 11.1174 1.79889 12.2426 2.92411C13.3679 4.04933 14 5.57545 14 7.16675Z"
												stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
												stroke-linejoin="round" />
											<path
												d="M8 9.16675C9.10457 9.16675 10 8.27132 10 7.16675C10 6.06218 9.10457 5.16675 8 5.16675C6.89543 5.16675 6 6.06218 6 7.16675C6 8.27132 6.89543 9.16675 8 9.16675Z"
												stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
												stroke-linejoin="round" />
										</g>
										<defs>
											<clipPath id="clip0_15410_33758">
												<rect width="16" height="16" fill="white"
													transform="translate(0 0.5)" />
											</clipPath>
										</defs>
									</svg>
								</i>
								Пхукет
							</span>
							<span> 2 июля </span>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-sm-6">
				<a href="#" class="item">
					<div class="img">
						<img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg'?>" alt="" />
					</div>
					<div class="desc">
						<h6>
							Путеводитель по Таиланду: Лучшие Места и Экскурсии, Которые
							Стоит Посетить
						</h6>
						<p>
							Откройте для себя Таиланд: от оживленных городов до уединенных
							пляжей. Исследуйте культурные достопримечательности, природные
							чудеса и приключения, которые ждут вас в этой удивительной
							стране.
						</p>
						<div class="info">
							<span>
								<i>
									<svg width="16" height="17" viewBox="0 0 16 17" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_15410_33758)">
											<path
												d="M14 7.16675C14 11.8334 8 15.8334 8 15.8334C8 15.8334 2 11.8334 2 7.16675C2 5.57545 2.63214 4.04933 3.75736 2.92411C4.88258 1.79889 6.4087 1.16675 8 1.16675C9.5913 1.16675 11.1174 1.79889 12.2426 2.92411C13.3679 4.04933 14 5.57545 14 7.16675Z"
												stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
												stroke-linejoin="round" />
											<path
												d="M8 9.16675C9.10457 9.16675 10 8.27132 10 7.16675C10 6.06218 9.10457 5.16675 8 5.16675C6.89543 5.16675 6 6.06218 6 7.16675C6 8.27132 6.89543 9.16675 8 9.16675Z"
												stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
												stroke-linejoin="round" />
										</g>
										<defs>
											<clipPath id="clip0_15410_33758">
												<rect width="16" height="16" fill="white"
													transform="translate(0 0.5)" />
											</clipPath>
										</defs>
									</svg>
								</i>
								Пхукет
							</span>
							<span> 2 июля </span>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>

	<nav aria-label="navigation">
		<ul class="pagination">
			<li class="page-item arrow">
				<a class="page-link" href="#" aria-label="Previous">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M19 12H5" stroke="black" stroke-width="1.5" stroke-linecap="round"
							stroke-linejoin="round" />
						<path d="M12 19L5 12L12 5" stroke="black" stroke-width="1.5" stroke-linecap="round"
							stroke-linejoin="round" />
					</svg>
				</a>
			</li>
			<li class="page-item"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item arrow">
				<a class="page-link" href="#" aria-label="Next">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M5 12H19" stroke="black" stroke-width="1.5" stroke-linecap="round"
							stroke-linejoin="round" />
						<path d="M12 5L19 12L12 19" stroke="black" stroke-width="1.5" stroke-linecap="round"
							stroke-linejoin="round" />
					</svg>
				</a>
			</li>
		</ul>
	</nav>

	<div class="cards-wrap">
		<h3>Туры и экскурсии по теме</h3>
		<div class="cards">
			<div class="item">
				<div class="swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<a href="#">
								<img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg'?>" alt="" />
							</a>
						</div>
						<div class="swiper-slide">
							<a href="#"> <img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg'?>" alt="" /> </a>
						</div>
						<div class="swiper-slide">
							<a href="#"><img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg'?>" alt="" /> </a>
						</div>
					</div>
					<div class="swiper-pagination"></div>
					<div class="swiper-button-next">
						<svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 1.33203L5.66667 5.9987L1 10.6654" stroke="#111111" stroke-linecap="round"
								stroke-linejoin="round"></path>
						</svg>
					</div>
					<div class="swiper-button-prev">
						<svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M6 1.33203L1.33333 5.9987L6 10.6654" stroke="#111111" stroke-linecap="round"
								stroke-linejoin="round"></path>
						</svg>
					</div>
				</div>
				<a href="#" class="desc">
					<span class="location">
						<i>
							<svg width="16" height="17" viewBox="0 0 16 17" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0_17508_7173)">
									<path
										d="M14 7.16663C14 11.8333 8 15.8333 8 15.8333C8 15.8333 2 11.8333 2 7.16663C2 5.57533 2.63214 4.0492 3.75736 2.92399C4.88258 1.79877 6.4087 1.16663 8 1.16663C9.5913 1.16663 11.1174 1.79877 12.2426 2.92399C13.3679 4.0492 14 5.57533 14 7.16663Z"
										stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
										stroke-linejoin="round" />
									<path
										d="M8 9.16663C9.10457 9.16663 10 8.2712 10 7.16663C10 6.06206 9.10457 5.16663 8 5.16663C6.89543 5.16663 6 6.06206 6 7.16663C6 8.2712 6.89543 9.16663 8 9.16663Z"
										stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
										stroke-linejoin="round" />
								</g>
								<defs>
									<clipPath id="clip0_17508_7173">
										<rect width="16" height="16" fill="white" transform="translate(0 0.5)" />
									</clipPath>
								</defs>
							</svg>
						</i>
						Пхукет
					</span>
					<h6>Као-Лак: бухта Пханг-Нга и остров Джеймса Бонда на лодке</h6>
					<div class="bottom">
						<div class="desc-item">
							Adult:
							<span>2600 ฿</span>
						</div>
						<div class="desc-item">
							Children 3-11:
							<span>2200 ฿</span>
						</div>
						<div class="desc-item">
							<p>
								<i>
									<svg width="16" height="16" viewBox="0 0 16 16" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M14.9556 6.87341L11.8411 9.90941L12.5766 14.1974C12.6086 14.3849 12.5316 14.5744 12.3776 14.6864C12.2906 14.7499 12.1871 14.7819 12.0836 14.7819C12.0041 14.7819 11.9241 14.7629 11.8511 14.7244L8.00008 12.6999L4.14958 14.7239C3.98158 14.8129 3.77708 14.7984 3.62308 14.6859C3.46908 14.5739 3.39208 14.3844 3.42408 14.1969L4.15958 9.90891L1.04458 6.87341C0.908578 6.74041 0.859078 6.54141 0.918078 6.36091C0.977078 6.18041 1.13358 6.04791 1.32208 6.02041L5.62658 5.39541L7.55158 1.49441C7.72008 1.15291 8.28008 1.15291 8.44858 1.49441L10.3736 5.39541L14.6781 6.02041C14.8666 6.04791 15.0231 6.17991 15.0821 6.36091C15.1411 6.54191 15.0916 6.73991 14.9556 6.87341Z"
											fill="#222222"></path>
									</svg>
								</i>
								4.86
							</p>
						</div>
					</div>
				</a>
			</div>
			<div class="item">
				<div class="swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<a href="#">
								<img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg'?>" alt="" />
							</a>
						</div>
						<div class="swiper-slide">
							<a href="#"> <img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg'?>" alt="" /> </a>
						</div>
						<div class="swiper-slide">
							<a href="#"><img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg'?>" alt="" /> </a>
						</div>
					</div>
					<div class="swiper-pagination"></div>
					<div class="swiper-button-next">
						<svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 1.33203L5.66667 5.9987L1 10.6654" stroke="#111111" stroke-linecap="round"
								stroke-linejoin="round"></path>
						</svg>
					</div>
					<div class="swiper-button-prev">
						<svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M6 1.33203L1.33333 5.9987L6 10.6654" stroke="#111111" stroke-linecap="round"
								stroke-linejoin="round"></path>
						</svg>
					</div>
				</div>
				<a href="#" class="desc">
					<span class="location">
						<i>
							<svg width="16" height="17" viewBox="0 0 16 17" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0_17508_7173)">
									<path
										d="M14 7.16663C14 11.8333 8 15.8333 8 15.8333C8 15.8333 2 11.8333 2 7.16663C2 5.57533 2.63214 4.0492 3.75736 2.92399C4.88258 1.79877 6.4087 1.16663 8 1.16663C9.5913 1.16663 11.1174 1.79877 12.2426 2.92399C13.3679 4.0492 14 5.57533 14 7.16663Z"
										stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
										stroke-linejoin="round" />
									<path
										d="M8 9.16663C9.10457 9.16663 10 8.2712 10 7.16663C10 6.06206 9.10457 5.16663 8 5.16663C6.89543 5.16663 6 6.06206 6 7.16663C6 8.2712 6.89543 9.16663 8 9.16663Z"
										stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
										stroke-linejoin="round" />
								</g>
								<defs>
									<clipPath id="clip0_17508_7173">
										<rect width="16" height="16" fill="white" transform="translate(0 0.5)" />
									</clipPath>
								</defs>
							</svg>
						</i>
						Пхукет
					</span>
					<h6>Као-Лак: бухта Пханг-Нга и остров Джеймса Бонда на лодке</h6>
					<div class="bottom">
						<div class="desc-item">
							Adult:
							<span>2600 ฿</span>
						</div>
						<div class="desc-item">
							Children 3-11:
							<span>2200 ฿</span>
						</div>
						<div class="desc-item">
							<p>
								<i>
									<svg width="16" height="16" viewBox="0 0 16 16" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M14.9556 6.87341L11.8411 9.90941L12.5766 14.1974C12.6086 14.3849 12.5316 14.5744 12.3776 14.6864C12.2906 14.7499 12.1871 14.7819 12.0836 14.7819C12.0041 14.7819 11.9241 14.7629 11.8511 14.7244L8.00008 12.6999L4.14958 14.7239C3.98158 14.8129 3.77708 14.7984 3.62308 14.6859C3.46908 14.5739 3.39208 14.3844 3.42408 14.1969L4.15958 9.90891L1.04458 6.87341C0.908578 6.74041 0.859078 6.54141 0.918078 6.36091C0.977078 6.18041 1.13358 6.04791 1.32208 6.02041L5.62658 5.39541L7.55158 1.49441C7.72008 1.15291 8.28008 1.15291 8.44858 1.49441L10.3736 5.39541L14.6781 6.02041C14.8666 6.04791 15.0231 6.17991 15.0821 6.36091C15.1411 6.54191 15.0916 6.73991 14.9556 6.87341Z"
											fill="#222222"></path>
									</svg>
								</i>
								4.86
							</p>
						</div>
					</div>
				</a>
			</div>
			<div class="item">
				<div class="swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<a href="#">
								<img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg'?>" alt="" />
							</a>
						</div>
						<div class="swiper-slide">
							<a href="#"> <img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg'?>" alt="" /> </a>
						</div>
						<div class="swiper-slide">
							<a href="#"><img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg'?>" alt="" /> </a>
						</div>
					</div>
					<div class="swiper-pagination"></div>
					<div class="swiper-button-next">
						<svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 1.33203L5.66667 5.9987L1 10.6654" stroke="#111111" stroke-linecap="round"
								stroke-linejoin="round"></path>
						</svg>
					</div>
					<div class="swiper-button-prev">
						<svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M6 1.33203L1.33333 5.9987L6 10.6654" stroke="#111111" stroke-linecap="round"
								stroke-linejoin="round"></path>
						</svg>
					</div>
				</div>
				<a href="#" class="desc">
					<span class="location">
						<i>
							<svg width="16" height="17" viewBox="0 0 16 17" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0_17508_7173)">
									<path
										d="M14 7.16663C14 11.8333 8 15.8333 8 15.8333C8 15.8333 2 11.8333 2 7.16663C2 5.57533 2.63214 4.0492 3.75736 2.92399C4.88258 1.79877 6.4087 1.16663 8 1.16663C9.5913 1.16663 11.1174 1.79877 12.2426 2.92399C13.3679 4.0492 14 5.57533 14 7.16663Z"
										stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
										stroke-linejoin="round" />
									<path
										d="M8 9.16663C9.10457 9.16663 10 8.2712 10 7.16663C10 6.06206 9.10457 5.16663 8 5.16663C6.89543 5.16663 6 6.06206 6 7.16663C6 8.2712 6.89543 9.16663 8 9.16663Z"
										stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
										stroke-linejoin="round" />
								</g>
								<defs>
									<clipPath id="clip0_17508_7173">
										<rect width="16" height="16" fill="white" transform="translate(0 0.5)" />
									</clipPath>
								</defs>
							</svg>
						</i>
						Пхукет
					</span>
					<h6>Као-Лак: бухта Пханг-Нга и остров Джеймса Бонда на лодке</h6>
					<div class="bottom">
						<div class="desc-item">
							Adult:
							<span>2600 ฿</span>
						</div>
						<div class="desc-item">
							Children 3-11:
							<span>2200 ฿</span>
						</div>
						<div class="desc-item">
							<p>
								<i>
									<svg width="16" height="16" viewBox="0 0 16 16" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M14.9556 6.87341L11.8411 9.90941L12.5766 14.1974C12.6086 14.3849 12.5316 14.5744 12.3776 14.6864C12.2906 14.7499 12.1871 14.7819 12.0836 14.7819C12.0041 14.7819 11.9241 14.7629 11.8511 14.7244L8.00008 12.6999L4.14958 14.7239C3.98158 14.8129 3.77708 14.7984 3.62308 14.6859C3.46908 14.5739 3.39208 14.3844 3.42408 14.1969L4.15958 9.90891L1.04458 6.87341C0.908578 6.74041 0.859078 6.54141 0.918078 6.36091C0.977078 6.18041 1.13358 6.04791 1.32208 6.02041L5.62658 5.39541L7.55158 1.49441C7.72008 1.15291 8.28008 1.15291 8.44858 1.49441L10.3736 5.39541L14.6781 6.02041C14.8666 6.04791 15.0231 6.17991 15.0821 6.36091C15.1411 6.54191 15.0916 6.73991 14.9556 6.87341Z"
											fill="#222222"></path>
									</svg>
								</i>
								4.86
							</p>
						</div>
					</div>
				</a>
			</div>
			<div class="item">
				<div class="swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<a href="#">
								<img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg'?>" alt="" />
							</a>
						</div>
						<div class="swiper-slide">
							<a href="#"> <img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg'?>" alt="" /> </a>
						</div>
						<div class="swiper-slide">
							<a href="#"><img src="<?php echo get_template_directory_uri() . '/assets/img/item.jpg'?>" alt="" /> </a>
						</div>
					</div>
					<div class="swiper-pagination"></div>
					<div class="swiper-button-next">
						<svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 1.33203L5.66667 5.9987L1 10.6654" stroke="#111111" stroke-linecap="round"
								stroke-linejoin="round"></path>
						</svg>
					</div>
					<div class="swiper-button-prev">
						<svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M6 1.33203L1.33333 5.9987L6 10.6654" stroke="#111111" stroke-linecap="round"
								stroke-linejoin="round"></path>
						</svg>
					</div>
				</div>
				<a href="#" class="desc">
					<span class="location">
						<i>
							<svg width="16" height="17" viewBox="0 0 16 17" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0_17508_7173)">
									<path
										d="M14 7.16663C14 11.8333 8 15.8333 8 15.8333C8 15.8333 2 11.8333 2 7.16663C2 5.57533 2.63214 4.0492 3.75736 2.92399C4.88258 1.79877 6.4087 1.16663 8 1.16663C9.5913 1.16663 11.1174 1.79877 12.2426 2.92399C13.3679 4.0492 14 5.57533 14 7.16663Z"
										stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
										stroke-linejoin="round" />
									<path
										d="M8 9.16663C9.10457 9.16663 10 8.2712 10 7.16663C10 6.06206 9.10457 5.16663 8 5.16663C6.89543 5.16663 6 6.06206 6 7.16663C6 8.2712 6.89543 9.16663 8 9.16663Z"
										stroke="#6C6E74" stroke-width="1.5" stroke-linecap="round"
										stroke-linejoin="round" />
								</g>
								<defs>
									<clipPath id="clip0_17508_7173">
										<rect width="16" height="16" fill="white" transform="translate(0 0.5)" />
									</clipPath>
								</defs>
							</svg>
						</i>
						Пхукет
					</span>
					<h6>Као-Лак: бухта Пханг-Нга и остров Джеймса Бонда на лодке</h6>
					<div class="bottom">
						<div class="desc-item">
							Adult:
							<span>2600 ฿</span>
						</div>
						<div class="desc-item">
							Children 3-11:
							<span>2200 ฿</span>
						</div>
						<div class="desc-item">
							<p>
								<i>
									<svg width="16" height="16" viewBox="0 0 16 16" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M14.9556 6.87341L11.8411 9.90941L12.5766 14.1974C12.6086 14.3849 12.5316 14.5744 12.3776 14.6864C12.2906 14.7499 12.1871 14.7819 12.0836 14.7819C12.0041 14.7819 11.9241 14.7629 11.8511 14.7244L8.00008 12.6999L4.14958 14.7239C3.98158 14.8129 3.77708 14.7984 3.62308 14.6859C3.46908 14.5739 3.39208 14.3844 3.42408 14.1969L4.15958 9.90891L1.04458 6.87341C0.908578 6.74041 0.859078 6.54141 0.918078 6.36091C0.977078 6.18041 1.13358 6.04791 1.32208 6.02041L5.62658 5.39541L7.55158 1.49441C7.72008 1.15291 8.28008 1.15291 8.44858 1.49441L10.3736 5.39541L14.6781 6.02041C14.8666 6.04791 15.0231 6.17991 15.0821 6.36091C15.1411 6.54191 15.0916 6.73991 14.9556 6.87341Z"
											fill="#222222"></path>
									</svg>
								</i>
								4.86
							</p>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</main>

<?php
get_footer();
