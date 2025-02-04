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
			<a href="mailto:support@yummthai.com" class="mail">
				support@yummthai.com
			</a>
			<img class="payments" src="img/payments.svg" alt="" />
			<p>2023 - 2025 © YummThai</p>
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
			<ul class="soc">
				<li>
					<a href="#">
						<svg data-v-4e31ce85="" width="40" height="40" viewBox="0 0 40 40" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path data-v-4e31ce85="" fill-rule="evenodd" clip-rule="evenodd"
								d="M20 0C8.95469 0 0 8.95469 0 20C0 31.0453 8.95469 40 20 40C31.0453 40 40 31.0453 40 20C40 8.95469 31.0453 0 20 0ZM29.2703 13.6016C28.9695 16.7641 27.6672 24.4383 27.0047 27.9805C26.7242 29.4797 26.1719 29.982 25.6375 30.0312C24.4766 30.1383 23.5945 29.2633 22.4695 28.5258C20.7094 27.3719 19.7148 26.6539 18.0063 25.5281C16.0312 24.2266 17.3117 23.5117 18.4367 22.343C18.7313 22.0367 23.8484 17.382 23.9477 16.9602C23.9602 16.907 23.9719 16.7102 23.8547 16.6063C23.7375 16.5023 23.5648 16.5383 23.4406 16.5664C23.2641 16.6063 20.4516 18.4648 15.0047 22.1422C14.2063 22.6906 13.4836 22.957 12.8352 22.9437C12.1211 22.9281 10.7477 22.5398 9.72656 22.2078C8.47422 21.8008 7.47891 21.5852 7.56562 20.8937C7.61016 20.5336 8.10625 20.1656 9.05312 19.7891C14.8836 17.2484 18.7711 15.5742 20.7164 14.7648C26.271 12.4548 27.425 12.0531 28.1773 12.0398C29.1196 12.0232 29.347 12.801 29.2703 13.6016Z"
								fill="black"></path>
						</svg>
					</a>
				</li>
				<li>
					<a href="#"><svg width="40" height="40" viewBox="0 0 40 40" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path
								d="M40 20C40 8.95312 31.0469 0 20 0C8.95312 0 0 8.95312 0 20C0 31.0469 8.95312 40 20 40C20.1172 40 20.2344 40 20.3516 39.9922V24.4297H16.0547V19.4219H20.3516V15.7344C20.3516 11.4609 22.9609 9.13281 26.7734 9.13281C28.6016 9.13281 30.1719 9.26562 30.625 9.32812V13.7969H28C25.9297 13.7969 25.5234 14.7812 25.5234 16.2266V19.4141H30.4844L29.8359 24.4219H25.5234V39.2266C33.8828 36.8281 40 29.1328 40 20Z"
								fill="black" />
						</svg>
					</a>
				</li>
				<li>
					<a href="#">
						<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0_17525_4105)">
								<path
									d="M23.8281 20C23.8281 22.1143 22.1143 23.8281 20 23.8281C17.8857 23.8281 16.1719 22.1143 16.1719 20C16.1719 17.8857 17.8857 16.1719 20 16.1719C22.1143 16.1719 23.8281 17.8857 23.8281 20Z"
									fill="black" />
								<path
									d="M28.9519 13.2269C28.7679 12.7282 28.4743 12.2769 28.0928 11.9064C27.7224 11.5249 27.2713 11.2313 26.7723 11.0473C26.3677 10.8901 25.7598 10.7031 24.6401 10.6521C23.4288 10.5969 23.0657 10.585 19.9993 10.585C16.9326 10.585 16.5694 10.5966 15.3585 10.6518C14.2388 10.7031 13.6306 10.8901 13.2262 11.0473C12.7272 11.2313 12.2759 11.5249 11.9057 11.9064C11.5242 12.2769 11.2307 12.7279 11.0463 13.2269C10.8892 13.6315 10.7021 14.2397 10.6511 15.3594C10.5959 16.5704 10.584 16.9335 10.584 20.0002C10.584 23.0667 10.5959 23.4298 10.6511 24.6411C10.7021 25.7607 10.8892 26.3687 11.0463 26.7733C11.2307 27.2723 11.5239 27.7233 11.9054 28.0938C12.2759 28.4753 12.7269 28.7689 13.2259 28.9529C13.6306 29.1104 14.2388 29.2974 15.3585 29.3484C16.5694 29.4036 16.9323 29.4152 19.999 29.4152C23.066 29.4152 23.4291 29.4036 24.6398 29.3484C25.7595 29.2974 26.3677 29.1104 26.7723 28.9529C27.7739 28.5665 28.5656 27.7749 28.9519 26.7733C29.1091 26.3687 29.2961 25.7607 29.3474 24.6411C29.4027 23.4298 29.4142 23.0667 29.4142 20.0002C29.4142 16.9335 29.4027 16.5704 29.3474 15.3594C29.2964 14.2397 29.1094 13.6315 28.9519 13.2269ZM19.9993 25.8972C16.7421 25.8972 14.1017 23.2571 14.1017 19.9999C14.1017 16.7428 16.7421 14.1027 19.9993 14.1027C23.2561 14.1027 25.8965 16.7428 25.8965 19.9999C25.8965 23.2571 23.2561 25.8972 19.9993 25.8972ZM26.1296 15.2477C25.3685 15.2477 24.7515 14.6307 24.7515 13.8696C24.7515 13.1085 25.3685 12.4914 26.1296 12.4914C26.8907 12.4914 27.5078 13.1085 27.5078 13.8696C27.5075 14.6307 26.8907 15.2477 26.1296 15.2477Z"
									fill="black" />
								<path
									d="M20 0C8.95599 0 0 8.95599 0 20C0 31.044 8.95599 40 20 40C31.044 40 40 31.044 40 20C40 8.95599 31.044 0 20 0ZM31.4151 24.7348C31.3596 25.9573 31.1652 26.792 30.8813 27.5226C30.2847 29.0652 29.0652 30.2847 27.5226 30.8813C26.7923 31.1652 25.9573 31.3593 24.7351 31.4151C23.5104 31.4709 23.1192 31.4844 20.0003 31.4844C16.8811 31.4844 16.4902 31.4709 15.2652 31.4151C14.043 31.3593 13.208 31.1652 12.4777 30.8813C11.7111 30.593 11.0172 30.141 10.4434 29.5566C9.85931 28.9832 9.40735 28.2889 9.11896 27.5226C8.83514 26.7923 8.64075 25.9573 8.58521 24.7351C8.52875 23.5101 8.51562 23.1189 8.51562 20C8.51562 16.8811 8.52875 16.4899 8.5849 15.2652C8.64044 14.0427 8.83453 13.208 9.11835 12.4774C9.40674 11.7111 9.85901 11.0168 10.4434 10.4434C11.0168 9.85901 11.7111 9.40704 12.4774 9.11865C13.208 8.83484 14.0427 8.64075 15.2652 8.5849C16.4899 8.52905 16.8811 8.51562 20 8.51562C23.1189 8.51562 23.5101 8.52905 24.7348 8.58521C25.9573 8.64075 26.792 8.83484 27.5226 9.11835C28.2889 9.40674 28.9832 9.85901 29.5569 10.4434C30.141 11.0172 30.5933 11.7111 30.8813 12.4774C31.1655 13.208 31.3596 14.0427 31.4154 15.2652C31.4713 16.4899 31.4844 16.8811 31.4844 20C31.4844 23.1189 31.4713 23.5101 31.4151 24.7348Z"
									fill="black" />
							</g>
							<defs>
								<clipPath id="clip0_17525_4105">
									<rect width="40" height="40" fill="white" />
								</clipPath>
							</defs>
						</svg>
					</a>
				</li>
				<li>
					<a href="#">
						<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0_17525_4109)">
								<path
									d="M20 0C8.95601 0 0 8.95601 0 20C0 31.044 8.95601 40 20 40C31.044 40 40 31.044 40 20C40 8.95601 31.044 0 20 0ZM30.0336 15.3026V18.0106C28.7566 18.0111 27.5159 17.7609 26.3458 17.2672C25.5934 16.9495 24.8923 16.5402 24.2512 16.0456L24.2704 24.381C24.2623 26.258 23.5198 28.0215 22.1758 29.3498C21.082 30.4311 19.6961 31.1187 18.1939 31.3412C17.8409 31.3935 17.4817 31.4203 17.1184 31.4203C15.5104 31.4203 13.9838 30.8994 12.7349 29.9383C12.4999 29.7573 12.2752 29.5612 12.0612 29.3498C10.6046 27.9102 9.85352 25.9591 9.98 23.9066C10.0765 22.3441 10.702 20.8541 11.7448 19.6862C13.1245 18.1407 15.0547 17.2829 17.1184 17.2829C17.4817 17.2829 17.8409 17.3102 18.1939 17.3624V18.3637V21.149C17.8592 21.0386 17.5018 20.9779 17.1296 20.9779C15.2441 20.9779 13.7188 22.5162 13.747 24.403C13.7648 25.6103 14.4243 26.6656 15.397 27.2473C15.8541 27.5208 16.3799 27.6902 16.9411 27.7209C17.3808 27.7451 17.803 27.6838 18.1939 27.5548C19.541 27.1098 20.5128 25.8445 20.5128 24.3521L20.5173 18.7703V8.57969H24.2466C24.2502 8.94922 24.2877 9.30977 24.3574 9.65914C24.6389 11.0733 25.436 12.3002 26.5454 13.1366C27.5127 13.8662 28.7173 14.2987 30.0228 14.2987C30.0237 14.2987 30.0345 14.2987 30.0335 14.2978V15.3026H30.0336Z"
									fill="black" />
							</g>
							<defs>
								<clipPath id="clip0_17525_4109">
									<rect width="40" height="40" fill="white" />
								</clipPath>
							</defs>
						</svg>
					</a>
				</li>
			</ul>
			<a href="mailto:support@yummthai.com" class="mail">
				support@yummthai.com
			</a>
			<img class="payments" src="img/payments.svg" alt="" />
			<p>2023 - 2025 © YummThai</p>
		</div>
	</div>
</div>

<div class="modal fade modal-lang" id="langModal" tabindex="-1" aria-labelledby="langModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<div class="modal-head">
					<h5><?php echo the_field('modal_language_header', 'options') ?></h5>
					<button type="button" class="btn" data-dismiss="modal" aria-label="Close">
						<img src="<?php echo the_field('modal_language_close_btn', 'options') ?>" alt="">
					</button>
				</div>
				<div class="modal-inner modal-inner-lang">
					<ul class="lang-ul">
						<li>
							<a href="/ru" class="">
								<i>
									<img src="<?php echo the_field('modal_language_ru_image', 'options') ?>" alt="" />
								</i>
								<?php echo the_field('modal_language_ru_text', 'options') ?>
							</a>
						</li>
						<li>
							<a href="/" aria-current="page" class="nuxt-link-exact-active nuxt-link-active">
								<i>
									<img src="<?php echo the_field('modal_language_en_image', 'options') ?>" alt="" />
								</i>
								<?php echo the_field('modal_language_en_text', 'options') ?>
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