<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yummthai
 */

?>

<div class="single-news" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if (function_exists('yoast_breadcrumb')) {
		yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
	}
	?>

	<div class="entry-header">
		<?php
		if (is_singular()):
			the_title('<h1 class="entry-title">', '</h1>');
		else:
			the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		endif;
		?>
	</div><!-- .entry-header -->

	<div class="yummthai-news-title">
		<p><?php echo get_the_excerpt(); ?></p>
	</div>

	<div class="news-links-wrapper">
		<div class="news-date-wrapper">
			<?php
			if ('post' === get_post_type()):
				?>
				<div class="entry-meta">
					<?php
					yummthai_posted_on();
					yummthai_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php endif;
			?>
		</div>

		<div class="news-social-wrapper">
			<?php if (function_exists('ADDTOANY_SHARE_SAVE_KIT')) {
				ADDTOANY_SHARE_SAVE_KIT();
			} ?>
		</div>
	</div>


	<div class="news-main-image-wrapper">
		<img src="<?= the_field('news_page_image'); ?>" alt="image">
	</div>

	<div class="inner">
		<div class="content">
			<div class="entry-content">
				<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'yummthai'),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post(get_the_title())
					)
				);

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__('Pages:', 'yummthai'),
						'after' => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->
		</div>

		<div class="navigation-bar">
			<h5>Содержание</h5>
			<ul>
				<?php
				if (!empty($GLOBALS['toc_headings'])) {
					foreach ($GLOBALS['toc_headings'] as $index => $heading) {
						echo '<li id="nav-item-' . ($index + 1) . '">';
						echo '<span>' . ($index + 1) . '. </span>';
						echo '<a href="#' . esc_attr($heading['id']) . '">' . esc_html($heading['title']) . '</a>';
						echo '</li>';
					}
				} else {
					echo '<li>Заголовки не найдены</li>';
				}
				?>
			</ul>
		</div>


		<!-- <div class="navigation-bar">
			<h5>Содержание</h5>
			<ul>
				<li>
					<span>1. </span>
					<a href="#first"> Бангкок: Динамичное Сердце Таиланда</a>
				</li>
				<li>
					<span>2. </span>
					<a href="#second"> Бангкок: Динамичное Сердце Таиланда</a>
				</li>
				<li>
					<span>3. </span>
					<a href="#first"> Бангкок: Динамичное Сердце Таиланда</a>
				</li>
			</ul>
		</div> -->
	</div>

</div><!-- #post-<?php the_ID(); ?> -->