<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yummthai
 */

?>

<div class="footer">
	<div class="inner">
		<div class="column left">
			<?php if (have_rows('social_links', 'option')): ?>
				<ul class="soc">
					<?php while (have_rows('social_links', 'option')):
						the_row();
						$icon = get_sub_field('icon');
						$url = get_sub_field('url');
						?>
						<li>
							<a href="<?php echo esc_url($url, 'option'); ?>" target="_blank">
								<img src="<?php echo esc_url($icon, 'option'); ?>" alt="image">
							</a>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
			<a href="<?php echo the_field('footer_email_link', 'options') ?>" target="_blank" class="mail">
				<?php echo the_field('footer_email_title', 'options') ?>
			</a>

			<div class="payment-images-wrapper">
				<?php if (have_rows('payment', 'option')): ?>
					<?php while (have_rows('payment', 'options')):
						the_row();
						$payIcon = get_sub_field('icon');
						?>
						<img src="<?php echo esc_url($payIcon, 'option') ?>" alt="image">
					<?php endwhile; ?>
				<?php endif; ?>
			</div>

			<p>
				<?php echo the_field('footer_title', 'options') ?>
			</p>
		</div>
		<div class="column">
			<h6>About YummThai</h6>
			<ul>
				<li>
					<a href="#">О компании</a>
				</li>
				<li>
					<a href="#">Блог</a>
				</li>
				<li>
					<a href="#">Карьера</a>
				</li>
				<li>
					<a href="#">Помощь</a>
				</li>
			</ul>
		</div>
		<div class="column">
			<h6>Партнерство</h6>
			<ul>
				<li>
					<a href="#">О компании</a>
				</li>
				<li>
					<a href="#">Блог</a>
				</li>
				<a href="#" class="btn btn-transparent ico ico-right">
					Стать гидом
					<i>
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M12 8.66667V12.6667C12 13.0203 11.8595 13.3594 11.6095 13.6095C11.3594 13.8595 11.0203 14 10.6667 14H3.33333C2.97971 14 2.64057 13.8595 2.39052 13.6095C2.14048 13.3594 2 13.0203 2 12.6667V5.33333C2 4.97971 2.14048 4.64057 2.39052 4.39052C2.64057 4.14048 2.97971 4 3.33333 4H7.33333"
								stroke="#6C6E74" stroke-linecap="round" stroke-linejoin="round"></path>
							<path d="M10 2H14V6" stroke="#6C6E74" stroke-linecap="round" stroke-linejoin="round"></path>
							<path d="M6.66667 9.33333L14 2" stroke="#6C6E74" stroke-linecap="round"
								stroke-linejoin="round"></path>
						</svg>
					</i>
				</a>
				<a href="#" class="btn btn-transparent ico ico-right">
					Стать партнером
					<i>
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M12 8.66667V12.6667C12 13.0203 11.8595 13.3594 11.6095 13.6095C11.3594 13.8595 11.0203 14 10.6667 14H3.33333C2.97971 14 2.64057 13.8595 2.39052 13.6095C2.14048 13.3594 2 13.0203 2 12.6667V5.33333C2 4.97971 2.14048 4.64057 2.39052 4.39052C2.64057 4.14048 2.97971 4 3.33333 4H7.33333"
								stroke="#6C6E74" stroke-linecap="round" stroke-linejoin="round"></path>
							<path d="M10 2H14V6" stroke="#6C6E74" stroke-linecap="round" stroke-linejoin="round"></path>
							<path d="M6.66667 9.33333L14 2" stroke="#6C6E74" stroke-linecap="round"
								stroke-linejoin="round"></path>
						</svg>
					</i>
				</a>
			</ul>
		</div>
		<div class="column">
			<h6>Условия пользования</h6>
			<ul>
				<li>
					<a href="#">Безопасность платежей</a>
				</li>
				<li>
					<a href="#">Условия использования</a>
				</li>
				<li>
					<a href="#">Политика конфиденциальности</a>
				</li>
				<li>
					<a href="#">Политика возрата</a>
				</li>
			</ul>
		</div>
		<div class="column left mobile">
			<?php if (have_rows('social_links', 'option')): ?>
				<ul class="soc">
					<?php while (have_rows('social_links', 'option')):
						the_row();
						$icon = get_sub_field('icon');
						$url = get_sub_field('url');
						?>
						<li>
							<a href="<?php echo esc_url($url, 'option'); ?>" target="_blank">
								<img src="<?php echo esc_url($icon, 'option'); ?>" alt="image">
							</a>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
			<a href="<?php echo the_field('footer_email_link', 'options') ?>" class="mail">
				<?php echo the_field('footer_email_title', 'options') ?>
			</a>
			<div class="payment-images-wrapper">
				<?php if (have_rows('payment', 'option')): ?>
					<?php while (have_rows('payment', 'options')):
						the_row();
						$payIcon = get_sub_field('icon');
						?>
						<img src="<?php echo esc_url($payIcon, 'option') ?>" alt="image">
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<p>
				<?php echo the_field('footer_title', 'options') ?>
			</p>
		</div>
	</div>
</div>

<div class="modal fade modal-lang" id="langModal" tabindex="-1" aria-labelledby="langModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<div class="modal-head">
					<h5><?php the_field('modal_language_header', 'options'); ?></h5>
					<button type="button" class="btn" data-dismiss="modal" aria-label="Close">
						<img src="<?php the_field('modal_language_close_btn', 'options'); ?>" alt="">
					</button>
				</div>
				<div class="modal-inner modal-inner-lang">
					<ul class="lang-ul">
						<li>
							<a href="<?= get_permalink(pll_get_post(get_the_ID(), 'ru')); ?>">
								<i>
									<img src="<?php the_field('modal_language_ru_image', 'options'); ?>" alt="" />
								</i>
								<?php the_field('modal_language_ru_text', 'options'); ?>
							</a>
						</li>
						<li>
							<a href="<?= get_permalink(pll_get_post(get_the_ID(), 'en')); ?>">
								<i>
									<img src="<?php the_field('modal_language_en_image', 'options'); ?>" alt="" />
								</i>
								<?php the_field('modal_language_en_text', 'options'); ?>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade modal-login" id="modalLogin" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<div class="modal-head">
					<h5><?php echo the_field('modal_sign_in_header', 'options') ?></h5>
					<button type="button" class="btn" data-dismiss="modal" aria-label="Close">
						<img src="<?php echo get_template_directory_uri() . '/assets/img/close.svg' ?>" alt="">
					</button>
				</div>
				<div class="modal-inner modal-inner-login">
					<h4><?php echo the_field('modal_sign_in_header_2', 'options') ?></h4>
					<p><?php echo the_field('modal_sign_in_description', 'options') ?></p>
					<a href="https://web.yummthai.com/api/member/social/apple?ref_url=https://mythai2.uzwebline.com/"
						class="btn ico ico-left btn-transparent">
						<i>
							<img src="<?php echo the_field('modal_sign_in_social', 'options') ?>" alt="">
						</i>
						<?php echo the_field('modal_sign_in_social_text', 'options') ?>
					</a>
					<a href="https://web.yummthai.com/api/member/social/google"
						class="btn ico ico-left btn-transparent">
						<i>
							<img src="<?php echo the_field('modal_sign_in_social_2', 'options') ?>" alt="">
						</i>
						<?php echo the_field('modal_sign_in_social_text_2', 'options') ?>
					</a>
					<a href="https://mythai.uzwebline.com/api/member/social/facebook?ref_url=https://mythai2.uzwebline.com/"
						class="btn ico ico-left btn-transparent">
						<i>
							<img src="<?php echo the_field('modal_sign_in_social_3', 'options') ?>" alt="">
						</i>
						<?php echo the_field('modal_sign_in_social_text_3', 'options') ?>
					</a>

					<div class="divider">
						<span><?php echo the_field('extra_information', 'options') ?></span>
					</div>
					<div class="form-group">
						<label> <?php echo the_field('form_text', 'options') ?></label>
						<input type="email" />
					</div>

					<button class="btn btn-transparent"><?php echo the_field('form_btn', 'options') ?></button>
				</div>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>

</html>