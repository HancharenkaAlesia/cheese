<?php
/*
Template Name: Главная страница
*/
?>

<?php
	get_header();
?>

		<main class="main-page">
			<section class="main-page__main main">
				<div class="main__bg">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/main-page/main-bg.webp" alt="Сыры">
				</div>
				<div class="main__content">
					<div class="main__container">
						<div class="main__title">Варим <span>натуральный</span> <br> сыр из молока <br> на собственной ферме
						</div>
						<h1 style="display: none;">Фермерский сыр от сыроварни Юлии Поляковой</h1>
						<ul class="main__list list">
							<li>Своё качественное сырьё</li>
							<li>Сертифицированное производство</li>
							<li>Ручная варка</li>
							<li>Бесплатная дегустация</li>
						</ul>
						<a href="/catalog" class="main__btn btn-gradient">Каталог и цены</a>
					</div>

				</div>
			</section>

			<section class="main-page__why why">
				<div class="why__container">
					<h2 class="why__title title">Почему у нас лучше?</h2>
					<div class="why__wrapper">
						<div class="why__item">
							<div class="why__head">
								<div class="why__icon"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/drink.svg" alt="Иконка напиток"></div>
								<div class="why__num">/01</div>
							</div>
							<div class="why__caption">Натуральные продукты </div>
							<div class="why__text">Только цельное молоко высокого качества. Каждая партия проходит лабораторные исследования. Наш поставщик молока АО «Победа». Это надёжное предприятие, которое поставляет молоко в СПб и Москву уже более 75 лет
							</div>
						</div>
						<div class="why__item">
							<div class="why__head">
								<div class="why__icon"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/eco.svg" alt="Иконка ECO"></div>
								<div class="why__num">/02</div>
							</div>
							<div class="why__caption">Без добавок</div>
							<div class="why__text">Варим вручную, без искусственных добавок, не используем заменители молочного жира
							</div>
						</div>
						<div class="why__item">
							<div class="why__head">
								<div class="why__icon"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/bag.svg" alt="Иконка пакет"></div>
								<div class="why__num">/03</div>
							</div>
							<div class="why__caption">Удобно покупать</div>
							<div class="why__text">Можно приобрести в торговых сетях и гипермаркетах. Покупка молочной продукции оптом на сайте или по телефону <a href="tel:+79531544087">+7 953-154-4087</a>

							</div>
							<a href="tel:+7 953-154-4087" class="why__btn btn-gradient">+7 953-154-4087</a>
						</div>
					</div>
					<div id="why-2" class="why__icon-bg"><img src="<?php bloginfo('template_url'); ?>/assets/img/bg-icons/why-bg-2.svg" alt=""></div>
				</div>
				<div id="why-1" class="why__icon-bg"><img src="<?php bloginfo('template_url'); ?>/assets/img/bg-icons/why-bg-1.svg" alt=""></div>
			</section>

			<section class="main-page__places places">
				<div class="places__container">
					<h2 class="places__title title">Нашу продукцию можно купить <br> в магазинах <span>по следующим
							адресам:</span></h2>
					<div class="places__wrapper">
						<?php 
						$num = 1;
						foreach(get_field('addresses') as $value){
							if ($value['name'] != '' && $value['address'] != '') { ?>
								<div class="places__item">
									<div class="places__num">/0<?php echo $num; ?></div>
									<div class="places__name"><?php echo $value['name'] ?></div>
									<div class="places__address"><?php echo $value['address'] ?></div>
									<a target="_blank" href="<?php echo $value['link'] ?>" class="places__link">
										<svg width="34" height="35" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M8.50012 27.4167L26.9167 9M26.9167 9V23.1667M26.9167 9H12.75" stroke="#0F0F0F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</a>
								</div>
							<?php 
							$num++;
							}
						} ?>
					</div>
				</div>
				<div id="places-1" class="places__icon-bg"><img src="<?php bloginfo('template_url'); ?>/assets/img/bg-icons/places-bg-1.svg" alt=""></div>
			</section>

			<section class="main-page__connection connection">
				<div class="connection__bg"><img src="<?php bloginfo('template_url'); ?>/assets/img/main-page/connection-bg.webp" alt="Фон Сыры"></div>
				<div class="connection__content">
					<div class="connection__container">
						<div class="connection__top">
							<h2 class="connection__title">Свяжитесь с нами по вопросам сотрудничества с HoReCa или для заказа
								продукции оптом от 5 кг</h2>
							<a href="#popup-form" class="connection__btn btn-gradient">Связаться с нами</a>
						</div>
						<div class="connection__bottom">
							<div class="connection__subtitle">Или напишите напрямую в мессенджеры</div>
							<div class="connection__wrapper">
								<a target="_blank" href="<?php the_field('whatsapp', 9) ?>" class="connection__soc soc-btn _green">
									<span>WhatsApp</span>
									<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/whatsapp.svg" alt="whatsapp">
								</a>
								<a target="_blank" href="<?php the_field('telegram', 9) ?>" class="connection__soc soc-btn _blue">
									<span>Telegram</span>
									<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/telegram.svg" alt="telegram">
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="sertificates" class="main-page__standarts standarts">
				<div class="standarts__container">
					<h2 class="standarts__title title">Стандарты качества</h2>
					<div class="standarts__flex">
						<div class="standarts__content">
							<div class="standarts__text">Мы позаботились о том, что бы у вас был 100% качественный сыр, поэтому
								провели независимую экспертизу</div>
							<div class="standarts__img"><img src="<?php bloginfo('template_url'); ?>/assets/img/main-page/standarts-img.webp" alt="Сыры"></div>
							<div id="standarts-1" class="standarts__icon-bg"><img src="<?php bloginfo('template_url'); ?>/assets/img/bg-icons/standarts-bg-1.svg" alt="">
							</div>
						</div>
						<div class="standarts__table">
							<?php 
								foreach(get_field('docs') as $value){
									if ($value['name'] != '' && $value['doc'] != '') { ?>
										<div class="standarts__item">
											<div class="standarts__pdf">
												<div class="standarts__icon"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/pdf.svg" alt="Pdf"></div>
												<div class="standarts__name"><?php echo $value['name'] ?></div>
											</div>
											<a download href="<?php echo $value['doc'] ?>" class="standarts__download">
												<span>Скачать</span>
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M6 20H18" stroke="#0F0F0F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
													<path d="M12 4V16M12 16L15.5 12.5M12 16L8.5 12.5" stroke="#0F0F0F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												</svg>

											</a>
											<a target="_blank" href="<?php echo $value['doc'] ?>" class="standarts__link btn-gradient">
												<span>Смотреть</span>
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M6 19L19 6M19 6V16M19 6H8.99995" stroke="#0F0F0F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												</svg>

											</a>
										</div>
									<?php 
									}
							} ?>
						</div>
					</div>
				</div>
			</section>

			<section id="about" class="main-page__about about">
				<div class="about__container">
					<div class="about__flex">
						<div class="about__col-left">
							<div class="about__wrapper">
								<h2 class="about__title title">О нашей сыроварне</h2>
								<div class="about__text">
									<?php the_field('about_text'); ?>
								</div>
								<div class="about__text _hidden">
									<?php the_field('about_text_hidden'); ?>
								</div>
								<div class="about__more">
									<span>Читать всё</span>
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M12 3V21M12 21L19 14M12 21L5 14" stroke="#0F0F0F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
								</div>
							</div>
							<div class="about__items">
								<?php 
									foreach(get_field('about_cards') as $value){
										if ($value['value'] != '' && $value['subtitle'] != '') { ?>
											<div class="about__item">
												<div class="about__value"><?php echo $value['value'] ?></div>
												<div class="about__descr"><?php echo $value['subtitle'] ?></div>
											</div>
										<?php 

										}
									} ?>
							</div>
						</div>
						<div class="about__col-right">
							<div class="about__video">
								<video src="<?php the_field('about_video'); ?>" poster="<?php the_field('about_poster'); ?>"></video>
								<div class="about__play play">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/play.svg" alt="Play icon">
								</div>
							</div>

							<div class="about__frame"><?php the_field('about_text_2'); ?></div>
						</div>
					</div>
					<div id="about-1" class="about__icon-bg"><img src="<?php bloginfo('template_url'); ?>/assets/img/bg-icons/about-bg-1.svg" alt=""></div>
					<div id="about-2" class="about__icon-bg"><img src="<?php bloginfo('template_url'); ?>/assets/img/bg-icons/about-bg-2.svg" alt=""></div>
				</div>
			</section>

			<section class="main-page__recomend recomend">
				<div class="recomend__container">
					<div class="recomend__wrap">
						<h2 class="recomend__title title">Рекомендуем попробовать</h2>
					</div>
					<div class="recomend__flex">
						<div class="recomend__line">
							<div class="recomend__head">
								<div class="recomend__caption">Твёрдые сыры</div>
								<div class="recomend__navigation">
									<div class="recomend__prev">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M21 12H3M3 12L10 5M3 12L10 19" stroke="#0F0F0F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</div>
									<div class="recomend__next">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M3 12H21M21 12L14 5M21 12L14 19" stroke="#0F0F0F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</div>
								</div>
							</div>
							<div class="recomend__slider swiper">
								<div class="recomend__wrapper swiper-wrapper">
									<?php 
										$args = array( 'post_type' => 'blog',
											'post_status' => 'publish',
											'tag_id' => 5,
											'orderby' => 'date',
											'order' => 'ASC',
											'posts_per_page' => -1,
											'paged' => 1,);
										$loop = new WP_Query( $args );
										while( $loop->have_posts() ) :
										$loop->the_post(); ?>
											<div class="recomend__slide swiper-slide">
												<div class="recomend__front">
													<div class="recomend__img">
														<img src="<?php the_field('pr_img'); ?>" alt="Сыр">
													</div>
													<div class="recomend__info">
														<div class="recomend__name"><?php the_title(); ?></div>
														<div class="recomend__bottom">
															<div class="recomend__price"><?php the_field('pr_price'); ?><span>₽ / <?php the_field('pr_weight'); ?></span></div>
															<div class="recomend__btn btn-gradient">Подробнее</div>
														</div>
													</div>
												</div>
												<div class="recomend__back">
													<?php the_content(); ?>
													<div class="recomend__back-btn btn-gradient">Назад</div>
												</div>
											</div>
									<?php endwhile; wp_reset_postdata(); ?>
								</div>
							</div>
						</div>
						<div class="recomend__line">
							<div class="recomend__head">
								<div class="recomend__caption">Полутвёрдые сыры</div>
								<div class="recomend__navigation">
									<div class="recomend__prev">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M21 12H3M3 12L10 5M3 12L10 19" stroke="#0F0F0F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</div>
									<div class="recomend__next">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M3 12H21M21 12L14 5M21 12L14 19" stroke="#0F0F0F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</div>
								</div>
							</div>
							<div class="recomend__slider swiper">
								<div class="recomend__wrapper swiper-wrapper">
									<?php 
										$args = array( 'post_type' => 'blog',
											'post_status' => 'publish',
											'tag_id' => 6,
											'orderby' => 'date',
											'order' => 'ASC',
											'posts_per_page' => -1,
											'paged' => 1,);
										$loop = new WP_Query( $args );
										while( $loop->have_posts() ) :
										$loop->the_post(); ?>
											<div class="recomend__slide swiper-slide">
												<div class="recomend__front">
													<div class="recomend__img">
														<img src="<?php the_field('pr_img'); ?>" alt="Сыр">
													</div>
													<div class="recomend__info">
														<div class="recomend__name"><?php the_title(); ?></div>
														<div class="recomend__bottom">
															<div class="recomend__price"><?php the_field('pr_price'); ?><span>₽ / <?php the_field('pr_weight'); ?></span></div>
															<div class="recomend__btn btn-gradient">Подробнее</div>
														</div>
													</div>
												</div>
												<div class="recomend__back">
													<?php the_content(); ?>
													<div class="recomend__back-btn btn-gradient">Назад</div>
												</div>
											</div>
									<?php endwhile; wp_reset_postdata(); ?>
								</div>
							</div>
						</div>
						<div class="recomend__line">
							<div class="recomend__head">
								<div class="recomend__caption">HoReCa</div>
								<div class="recomend__navigation">
									<div class="recomend__prev">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M21 12H3M3 12L10 5M3 12L10 19" stroke="#0F0F0F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</div>
									<div class="recomend__next">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M3 12H21M21 12L14 5M21 12L14 19" stroke="#0F0F0F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</div>
								</div>
							</div>
							<div class="recomend__slider swiper">
								<div class="recomend__wrapper swiper-wrapper">
									<?php 
										$args = array( 'post_type' => 'blog',
											'post_status' => 'publish',
											'tag_id' => 7,
											'orderby' => 'date',
											'order' => 'ASC',
											'posts_per_page' => -1,
											'paged' => 1,);
										$loop = new WP_Query( $args );
										while( $loop->have_posts() ) :
										$loop->the_post(); ?>
											<div class="recomend__slide swiper-slide">
												<div class="recomend__front">
													<div class="recomend__img">
														<img src="<?php the_field('pr_img'); ?>" alt="Сыр">
													</div>
													<div class="recomend__info">
														<div class="recomend__name"><?php the_title(); ?></div>
														<div class="recomend__bottom">
															<div class="recomend__price"><?php the_field('pr_price'); ?><span>₽ / <?php the_field('pr_weight'); ?></span></div>
															<div class="recomend__btn btn-gradient">Подробнее</div>
														</div>
													</div>
												</div>
												<div class="recomend__back">
													<?php the_content(); ?>
													<div class="recomend__back-btn btn-gradient">Назад</div>
												</div>
											</div>
									<?php endwhile; wp_reset_postdata(); ?>
								</div>
							</div>
						</div>
					</div>
					<a href="/catalog" class="recomend__more btn-gradient">
						<span>Смотреть всё</span>
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M6 19L19 6M19 6V16M19 6H8.99995" stroke="#0F0F0F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</a>
				</div>
			</section>

			<section id="manufacture" class="main-page__how how">
				<div class="how__container">
					<div class="how__grid">
						<div class="how__item">
							<h2 class="how__title title">Как мы <br> делаем сыр</h2>
							<div class="how__text"><?php the_field('how_text'); ?></div>
						</div>
						<?php 
							$num = 1;
							foreach(get_field('how_steps') as $value){
								if ($value['title'] != '' && $value['img'] != '') { ?>
									<div class="how__item">
										<div class="how__num">/0<?php echo $num; ?></div>
										<div class="how__step"><?php echo $value['title'] ?></div>
										<div class="how__img"><img src="<?php echo $value['img'] ?>" alt=""></div>
									</div>
								<?php 
								$num++;
								}
						} ?>
					</div>
				</div>
				<div id="how-1" class="how__icon-bg"><img src="<?php bloginfo('template_url'); ?>/assets/img/bg-icons/how-bg-1.svg" alt=""></div>
			</section>

			<section class="main-page__video video">
				<div class="video__container">
					<div class="video__head">
						<h2 class="video__title title">Наше производство</h2>
						<div class="video__caption">Приглашаем вас окунуться в процесс производства нашей продукции вместе с
							нами</div>

					</div>
					<div class="video__video">
						<video poster="<?php the_field('our_poster'); ?>" src="<?php the_field('our_video'); ?>"></video>
						<div class="video__play play">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/play.svg" alt="Play icon">
						</div>
					</div>
				</div>
				<div id="video-1" class="video__icon-bg"><img src="<?php bloginfo('template_url'); ?>/assets/img/bg-icons/video-bg-1.svg" alt=""></div>
			</section>

			<section class="main-page__feedback feedback">
				<div class="feedback__bg"><img src="<?php bloginfo('template_url'); ?>/assets/img/main-page/form-bg.webp" alt=""></div>
				<div class="feedback__content">
					<div class="feedback__container">
						<div class="feedback__wrapper">
							<h2 class="feedback__title">Напишите нам для заказа оптом или по HoReCa</h2>
							<div class="feedback__caption">Оставьте свои контакты и опишите ваш запрос,<br> а мы рассчитаем для
								вас оптовую цену!</div>
							<form action="#" class="feedback__form form-feedback">
								<div class="form-feedback__flex">
									<div class="form-feedback__input _person">
										<input name="Имя" placeholder="Ваше имя" type="text" required>
									</div>

									<div class="form-feedback__input _phone">
										<input name="Номер" placeholder="+ 7 (__) ___-___-___" required type="text" required>
									</div>
								</div>
								<div class="form-feedback__textarea _msg">
									<textarea placeholder="Напишите, какие сыры Вы хотите заказать" name="Сообщение" id="msg"></textarea>
								</div>
								<div class="form-feedback__flex">
									<div class="form-feedback__checkbox">
										<input checked required type="checkbox" id="policy" name="Политика" />
										<label for="policy">Я соглашаюсь на обработку <a href="#">персональных данных</a></label>
									</div>
									<input class="form-feedback__submit btn-gradient" type="submit" value="Отправить" />
								</div>
							</form>

							<div class="feedback__bottom">
								<div class="feedback__subtitle">Или напишите напрямую в мессенджеры</div>
								<div class="feedback__flex">
									<a target="_blank" href="<?php the_field('whatsapp', 9) ?>" class="feedback__soc soc-btn _green">
										<span>WhatsApp</span>
										<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/whatsapp.svg" alt="whatsapp">
									</a>
									<a target="_blank" href="<?php the_field('telegram', 9) ?>" class="feedback__soc soc-btn _blue">
										<span>Telegram</span>
										<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/telegram.svg" alt="telegram">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="main-page__production production">
				<div class="production__container">
					<div class="production__flex">
						<div class="production__content">
							<h2 class="production__title title">Немного о нашей продукции</h2>
							<div class="production__text">
								<div class="production__visible">
									<?php the_field('article_visible'); ?>
								</div>
								<?php if(get_field('article_hidden') != '') { ?>
									<div class="production__hidden">
										<?php the_field('article_hidden'); ?>
									</div>
									<div class="production__more">
										<span>Читать всё</span>
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M12 3V21M12 21L19 14M12 21L5 14" stroke="#0F0F0F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</div>
								<?php } ?>
							</div>
						</div>
						<div class="production__img"><img src="<?php bloginfo('template_url'); ?>/assets/img/main-page/production-img.webp" alt="Наша продукция"></div>
					</div>
					<div id="production-2" class="production__icon-bg"><img src="<?php bloginfo('template_url'); ?>/assets/img/bg-icons/production-bg-2.svg" alt="">
					</div>
				</div>
				<div id="production-1" class="production__icon-bg"><img src="<?php bloginfo('template_url'); ?>/assets/img/bg-icons/production-bg-1.svg" alt=""></div>
			</section>

			<section class="main-page__contacts contacts">
				<div class="contacts__container">
					<h2 class="contacts__title title">Как с нами связаться?</h2>
					<div class="contacts__flex">
						<div class="contacts__content">
							<div class="contacts__caption">Сыроварня Юлии Поляковой</div>
							<div class="contacts__wrapper">
								<div class="contacts__item">
									<div class="contacts__icon"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/call-white.svg" alt="Phone icon"></div>
									<a class="contacts__phone" href="tel:<?php the_field('phone', 9) ?>"><?php the_field('phone', 9) ?></a>
								</div>
								<div class="contacts__item">
									<div class="contacts__icon"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/mail-white.svg" alt="Mail icon"></div>
									<a class="contacts__mail" href="mailto:<?php the_field('email', 9) ?>"><?php the_field('email', 9) ?></a>
								</div>
								<div class="contacts__item">
									<div class="contacts__icon"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/clock-white.svg" alt="Clock icon"></div>
									<span>Время работы: <?php the_field('shedule', 9) ?></span>
								</div>
								<div class="contacts__item">
									<div class="contacts__icon"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/map-white.svg" alt="Pin icon"></div>
									<address>Находимся по адресу: <?php the_field('address', 9) ?></address>
								</div>
							</div>
							<div class="contacts__socials">
								<a target="_blank" href="<?php the_field('whatsapp', 9) ?>" class="contacts__soc soc-btn _green">
									<span>WhatsApp</span>
									<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/whatsapp.svg" alt="whatsapp">
								</a>
								<a target="_blank" href="<?php the_field('telegram', 9) ?>" class="contacts__soc soc-btn _blue">
									<span>Telegram</span>
									<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/telegram.svg" alt="telegram">
								</a>
							</div>
							<a target="_blank" href="<?php the_field('route', 9) ?>" class="contacts__btn btn-gradient">
								<span>Построить маршрут</span>
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/routing.svg" alt="Routing icon">
							</a>
						</div>
						<div class="contacts__grid">
							<img id="contacts-1" src="<?php bloginfo('template_url'); ?>/assets/img/main-page/contacts-1.webp" alt="">
							<img id="contacts-2" src="<?php bloginfo('template_url'); ?>/assets/img/main-page/contacts-2.webp" alt="">
							<img id="contacts-3" src="<?php bloginfo('template_url'); ?>/assets/img/main-page/contacts-3.webp" alt="">
						</div>
					</div>
				</div>
				<div class="contacts__map">
					<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A77f06012877a06d84c547d31ed784bf8540961a1371cb2d94da1f03ba0d2a6d4&amp;source=constructor&amp;scroll=false" width="100%" height="100%" frameborder="0"></iframe>
				</div>
			</section>
		</main>

<?php
	get_footer();
?>