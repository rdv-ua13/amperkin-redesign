<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="gap-xl">
	<div class="container">
		<div class="gap-xl product-card-mobile-section">
			<div class="product-card-mobile-section-container">
				<div class="gap-lg">
					<div class="h2">Актуальные предложения</div>
				</div>

				<div class="catalog-extra-slider out-container-x">
					<div class="gap-lg">
						<div class="tag-bar swiper" data-tag-bar-slider>
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<label class="btn btn-mini btn-b-light tag-bar-slide-item">
										<input
											class="visually-hidden"
											type="checkbox"
											name="EXTRA[TAGS][]"
											value=""
										>
										<span class="btn__text">Все товары</span>
									</label>
								</div>
								<div class="swiper-slide">
									<label class="btn btn-mini btn-b-light tag-bar-slide-item">
										<input
											class="visually-hidden"
											type="checkbox"
											name="EXTRA[TAGS][]"
											value=""
										>
										<svg class="icon btn__icon">
											<use href="img/sprite.svg#catalog-wiring-products"></use>
										</svg>
										<span class="btn__text">Розетки и выключатели</span>
									</label>
								</div>
								<div class="swiper-slide">
									<label class="btn btn-mini btn-b-light tag-bar-slide-item">
										<input
											class="visually-hidden"
											type="checkbox"
											name="EXTRA[TAGS][]"
											value=""
										>
										<svg class="icon btn__icon">
											<use href="img/sprite.svg#catalog-low-voltage"></use>
										</svg>
										<span class="btn__text">Низковольтное оборудование</span>
									</label>
								</div>
								<div class="swiper-slide">
									<label class="btn btn-mini btn-b-light tag-bar-slide-item">
										<input
											class="visually-hidden"
											type="checkbox"
											name="EXTRA[TAGS][]"
											value=""
										>
										<svg class="icon btn__icon">
											<use href="img/sprite.svg#catalog-shields-cabinets"></use>
										</svg>
										<span class="btn__text">Щиты, шкафы, боксы</span>
									</label>
								</div>
								<div class="swiper-slide">
									<label class="btn btn-mini btn-b-light tag-bar-slide-item">
										<input
											class="visually-hidden"
											type="checkbox"
											name="EXTRA[TAGS][]"
											value=""
										>
										<svg class="icon btn__icon">
											<use href="img/sprite.svg#catalog-lighting"></use>
										</svg>
										<span class="btn__text">Светотехника</span>
									</label>
								</div>
								<div class="swiper-slide">
									<label class="btn btn-mini btn-b-light tag-bar-slide-item">
										<input
											class="visually-hidden"
											type="checkbox"
											name="EXTRA[TAGS][]"
											value=""
										>
										<svg class="icon btn__icon">
											<use href="img/sprite.svg#catalog-tools"></use>
										</svg>
										<span class="btn__text">Инструменты и монтажные материалы</span>
									</label>
								</div>
								<div class="swiper-slide">
									<label class="btn btn-mini btn-b-light tag-bar-slide-item">
										<input
											class="visually-hidden"
											type="checkbox"
											name="EXTRA[TAGS][]"
											value=""
										>
										<svg class="icon btn__icon">
											<use href="img/sprite.svg#catalog-ventilation"></use>
										</svg>
										<span class="btn__text">Системы вентиляции и обогрева</span>
									</label>
								</div>
								<div class="swiper-slide">
									<label class="btn btn-mini btn-b-light tag-bar-slide-item">
										<input
											class="visually-hidden"
											type="checkbox"
											name="EXTRA[TAGS][]"
											value=""
										>
										<svg class="icon btn__icon">
											<use href="img/sprite.svg#catalog-grounding"></use>
										</svg>
										<span class="btn__text">Молниезащита и заземление</span>
									</label>
								</div>
								<div class="swiper-slide">
									<label class="btn btn-mini btn-b-light tag-bar-slide-item">
										<input
											class="visually-hidden"
											type="checkbox"
											name="EXTRA[TAGS][]"
											value=""
										>
										<svg class="icon btn__icon">
											<use href="img/sprite.svg#catalog-power-devices"></use>
										</svg>
										<span class="btn__text">Элементы и устройства питания</span>
									</label>
								</div>
							</div>
						</div>
					</div>

					<div class="basic-slider-wrap">
						<div class="basic-slider card-product-default-wrap swiper" data-basic-slider>
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="card-product card-product-default" data-card-product>
										<div class="card-product-view">
											<div class="mini-slider">
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 1;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-2.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-2.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-3.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-3.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<ul class="list-reset mini-slider__dots"></ul>
											</div>
											<div class="card-product-sale-label">
												<span class="sale-label sale-label-red">20%</span>
												<span class="sale-label sale-label-yellow">Распродажа</span>
												<span class="sale-label sale-label-green">Хит</span>
											</div>
										</div>
										<div class="card-product-descr">
											<div class="card-product-descr__top">
												<div class="card-product-descr__info">
													<span class="product-code"><span>ZB3327018</span></span>
													<span class="star-rating-wrapper star-rating-wrapper--noframe">
												<span class="star-rating">
													<span class="star-rating__container">
														<label>
															<svg class="icon">
																<use href="img/sprite.svg#fill-star"></use>
															</svg>
														</label>
													</span>
												</span>
												<span class="star-rating-value" data-value="4.5">4.5</span>
											</span>
												</div>
												<div class="card-product-descr__availability product-availability in-stock">
													<svg class="icon">
														<use href="img/sprite.svg#checkbox-rec"></use>
													</svg>
													<span>Товар в наличии</span>
												</div>
												<div class="card-product-descr__title">
													<a href="javascript:;">Haupa Отвёртка двухкомпонентная PH 2</a>
												</div>
											</div>

											<div class="card-product-descr__bottom">
												<div class="card-product-descr__price">
													<div class="card-product-descr__price-title">Цена за штуку</div>
													<div class="card-product-descr__price-display">
														<div class="card-product-descr__price-discount">
															<div class="card-product-descr__price-originally">1 624,50 ₽</div>
															<div class="card-product-descr__price-discount-label">10%</div>
														</div>
														<div class="card-product-descr__price-current">1 478,40 ₽</div>
													</div>
													<div class="card-product-descr__price-bonus">
														<span>+ 346,99</span>
														<svg class="icon">
															<use href="img/sprite.svg#fill-bonus"></use>
														</svg>
													</div>
												</div>
												<div class="card-product-descr__cart product-card__cart cart-buy">
													<div class="product-card__cart-quantity cart-quantity disabled">
														<button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
															<svg class="icon icon-sm btn__icon">
																<use href="img/sprite.svg#minus"></use>
															</svg>
															<svg class="icon icon-sm btn__icon icon-selected">
																<use href="img/sprite.svg#trash"></use>
															</svg>
														</button>
														<input
															id=""
															class="input-reset cart-quantity-input"
															type="text"
															placeholder="999"
															value="1"
															max="999"
															data-mult="1"
														>
														<button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
															<svg class="icon icon-sm btn__icon">
																<use href="img/sprite.svg#plus"></use>
															</svg>
														</button>
													</div>
													<button class="btn-reset btn btn-primary cart-in" type="button">
														<span class="btn__text">В КОРЗИНУ</span>
													</button>
													<div class="card-product-act">
														<button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
															<svg class="icon btn__icon">
																<use href="img/sprite.svg#fill-more-horiz"></use>
															</svg>
														</button>
														<div class="card-product-act__list" data-card-product-act-content>
															<button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
																<svg class="icon btn__icon icon-default">
																	<use href="img/sprite.svg#bookmark-plus"></use>
																</svg>
																<span class="btn__text text-default">В избранное</span>
																<svg class="icon btn__icon icon-selected">
																	<use href="img/sprite.svg#fill-bookmark-check"></use>
																</svg>
																<span class="btn__text text-selected">В избранном</span>
															</button>
															<button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
																<svg class="icon btn__icon">
																	<use href="img/sprite.svg#barchart"></use>
																</svg>
																<span class="btn__text text-default">Сравнить</span>
																<span class="btn__text text-selected">В сравнении</span>
															</button>
															<button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
																<svg class="icon btn__icon">
																	<use href="img/sprite.svg#inbox-in"></use>
																</svg>
																<span class="btn__text">В смету</span>
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="card-product card-product-default" data-card-product>
										<div class="card-product-view">
											<div class="mini-slider">
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-2.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-2.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 1;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-3.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-3.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-4.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-4.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<ul class="list-reset mini-slider__dots"></ul>
											</div>
											<div class="card-product-sale-label">
												<span class="sale-label sale-label-red">20%</span>
												<span class="sale-label sale-label-yellow">Распродажа</span>
												<span class="sale-label sale-label-green">Хит</span>
											</div>
										</div>
										<div class="card-product-descr">
											<div class="card-product-descr__top">
												<div class="card-product-descr__info">
													<span class="product-code"><span>46- 312792P13</span></span>
													<span class="star-rating-wrapper star-rating-wrapper--noframe">
												<span class="star-rating">
													<span class="star-rating__container">
														<label>
															<svg class="icon">
																<use href="img/sprite.svg#fill-star"></use>
															</svg>
														</label>
													</span>
												</span>
												<span class="star-rating-value" data-value="5.0">5.0</span>
											</span>
												</div>
												<div class="card-product-descr__availability product-availability on-order">
													<svg class="icon">
														<use href="img/sprite.svg#timer"></use>
													</svg>
													<span>Под заказ</span>
												</div>
												<div class="card-product-descr__title">
													<a href="javascript:;">Haupa Инструмент обжимной для конечных гильз 0,25-6</a>
												</div>
											</div>

											<div class="card-product-descr__bottom">
												<div class="card-product-descr__price">
													<div class="card-product-descr__price-title">Цена за штуку</div>
													<div class="card-product-descr__price-display">
														<div class="card-product-descr__price-discount">
															<div class="card-product-descr__price-originally">1 624,50 ₽</div>
															<div class="card-product-descr__price-discount-label">10%</div>
														</div>
														<div class="card-product-descr__price-current">6 173,10 ₽</div>
													</div>
													<div class="card-product-descr__price-bonus">
														<span>+ 346,99</span>
														<svg class="icon">
															<use href="img/sprite.svg#fill-bonus"></use>
														</svg>
													</div>
												</div>
												<div class="card-product-descr__cart product-card__cart cart-buy">
													<div class="product-card__cart-quantity cart-quantity disabled">
														<button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
															<svg class="icon icon-sm btn__icon">
																<use href="img/sprite.svg#minus"></use>
															</svg>
															<svg class="icon icon-sm btn__icon icon-selected">
																<use href="img/sprite.svg#trash"></use>
															</svg>
														</button>
														<input
															id=""
															class="input-reset cart-quantity-input"
															type="text"
															placeholder="999"
															value="1"
															max="999"
															data-mult="1"
														>
														<button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
															<svg class="icon icon-sm btn__icon">
																<use href="img/sprite.svg#plus"></use>
															</svg>
														</button>
													</div>
													<button class="btn-reset btn btn-primary cart-in" type="button">
														<span class="btn__text">В КОРЗИНУ</span>
													</button>
													<div class="card-product-act">
														<button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
															<svg class="icon btn__icon">
																<use href="img/sprite.svg#fill-more-horiz"></use>
															</svg>
														</button>
														<div class="card-product-act__list" data-card-product-act-content>
															<button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
																<svg class="icon btn__icon icon-default">
																	<use href="img/sprite.svg#bookmark-plus"></use>
																</svg>
																<span class="btn__text text-default">В избранное</span>
																<svg class="icon btn__icon icon-selected">
																	<use href="img/sprite.svg#fill-bookmark-check"></use>
																</svg>
																<span class="btn__text text-selected">В избранном</span>
															</button>
															<button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
																<svg class="icon btn__icon">
																	<use href="img/sprite.svg#barchart"></use>
																</svg>
																<span class="btn__text text-default">Сравнить</span>
																<span class="btn__text text-selected">В сравнении</span>
															</button>
															<button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
																<svg class="icon btn__icon">
																	<use href="img/sprite.svg#inbox-in"></use>
																</svg>
																<span class="btn__text">В смету</span>
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="card-product card-product-default" data-card-product>
										<div class="card-product-view">
											<div class="mini-slider">
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-3.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-3.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 1;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-4.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-4.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-5.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-5.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-2.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-2.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<ul class="list-reset mini-slider__dots"></ul>
											</div>
											<div class="card-product-sale-label">
												<span class="sale-label sale-label-red">20%</span>
												<span class="sale-label sale-label-yellow">Распродажа</span>
												<span class="sale-label sale-label-green">Хит</span>
											</div>
										</div>
										<div class="card-product-descr">
											<div class="card-product-descr__top">
												<div class="card-product-descr__info">
													<span class="product-code"><span>2348958- 87</span></span>
												</div>
												<div class="card-product-descr__availability product-availability on-order">
													<svg class="icon">
														<use href="img/sprite.svg#timer"></use>
													</svg>
													<span>Под заказ</span>
												</div>
												<div class="card-product-descr__title">
													<a href="javascript:;">SE Unica Extend Бел Удлинитель 3 розетки 2К+З, кабель 1,5м</a>
												</div>
											</div>

											<div class="card-product-descr__bottom">
												<div class="card-product-descr__price">
													<div class="card-product-descr__price-title">Цена за штуку</div>
													<div class="card-product-descr__price-display">
														<div class="card-product-descr__price-discount">
															<div class="card-product-descr__price-originally">1 624,50 ₽</div>
															<div class="card-product-descr__price-discount-label">10%</div>
														</div>
														<div class="card-product-descr__price-current">1 478,40 ₽</div>
													</div>
													<div class="card-product-descr__price-bonus">
														<span>+ 346,99</span>
														<svg class="icon">
															<use href="img/sprite.svg#fill-bonus"></use>
														</svg>
													</div>
												</div>
												<div class="card-product-descr__cart product-card__cart cart-buy">
													<div class="product-card__cart-quantity cart-quantity disabled">
														<button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
															<svg class="icon icon-sm btn__icon">
																<use href="img/sprite.svg#minus"></use>
															</svg>
															<svg class="icon icon-sm btn__icon icon-selected">
																<use href="img/sprite.svg#trash"></use>
															</svg>
														</button>
														<input
															id=""
															class="input-reset cart-quantity-input"
															type="text"
															placeholder="999"
															value="1"
															max="999"
															data-mult="1"
														>
														<button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
															<svg class="icon icon-sm btn__icon">
																<use href="img/sprite.svg#plus"></use>
															</svg>
														</button>
													</div>
													<button class="btn-reset btn btn-primary cart-in" type="button">
														<span class="btn__text">В КОРЗИНУ</span>
													</button>
													<div class="card-product-act">
														<button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
															<svg class="icon btn__icon">
																<use href="img/sprite.svg#fill-more-horiz"></use>
															</svg>
														</button>
														<div class="card-product-act__list" data-card-product-act-content>
															<button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
																<svg class="icon btn__icon icon-default">
																	<use href="img/sprite.svg#bookmark-plus"></use>
																</svg>
																<span class="btn__text text-default">В избранное</span>
																<svg class="icon btn__icon icon-selected">
																	<use href="img/sprite.svg#fill-bookmark-check"></use>
																</svg>
																<span class="btn__text text-selected">В избранном</span>
															</button>
															<button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
																<svg class="icon btn__icon">
																	<use href="img/sprite.svg#barchart"></use>
																</svg>
																<span class="btn__text text-default">Сравнить</span>
																<span class="btn__text text-selected">В сравнении</span>
															</button>
															<button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
																<svg class="icon btn__icon">
																	<use href="img/sprite.svg#inbox-in"></use>
																</svg>
																<span class="btn__text">В смету</span>
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="card-product card-product-default" data-card-product>
										<div class="card-product-view">
											<div class="mini-slider">
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-4.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-4.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 1;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-5.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-5.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<ul class="list-reset mini-slider__dots"></ul>
											</div>
											<div class="card-product-sale-label">
												<span class="sale-label sale-label-red">20%</span>
												<span class="sale-label sale-label-yellow">Распродажа</span>
												<span class="sale-label sale-label-green">Хит</span>
											</div>
										</div>
										<div class="card-product-descr">
											<div class="card-product-descr__top">
												<div class="card-product-descr__info">
													<span class="product-code"><span>Z241- 0008</span></span>
												</div>
												<div class="card-product-descr__availability product-availability in-stock">
													<svg class="icon">
														<use href="img/sprite.svg#checkbox-rec"></use>
													</svg>
													<span>Товар в наличии</span>
												</div>
												<div class="card-product-descr__title">
													<a href="javascript:;">SE Unica System+ Антрацит Блок розеточный (2к+з)+usb тип А</a>
												</div>
											</div>

											<div class="card-product-descr__bottom">
												<div class="card-product-descr__price">
													<div class="card-product-descr__price-title">Цена за штуку</div>
													<div class="card-product-descr__price-display">
														<div class="card-product-descr__price-discount">
															<div class="card-product-descr__price-originally">1 624,50 ₽</div>
															<div class="card-product-descr__price-discount-label">10%</div>
														</div>
														<div class="card-product-descr__price-current">5 827,99 ₽</div>
													</div>
													<div class="card-product-descr__price-bonus">
														<span>+ 346,99</span>
														<svg class="icon">
															<use href="img/sprite.svg#fill-bonus"></use>
														</svg>
													</div>
												</div>
												<div class="card-product-descr__cart product-card__cart cart-buy">
													<div class="product-card__cart-quantity cart-quantity disabled">
														<button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
															<svg class="icon icon-sm btn__icon">
																<use href="img/sprite.svg#minus"></use>
															</svg>
															<svg class="icon icon-sm btn__icon icon-selected">
																<use href="img/sprite.svg#trash"></use>
															</svg>
														</button>
														<input
															id=""
															class="input-reset cart-quantity-input"
															type="text"
															placeholder="999"
															value="1"
															max="999"
															data-mult="1"
														>
														<button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
															<svg class="icon icon-sm btn__icon">
																<use href="img/sprite.svg#plus"></use>
															</svg>
														</button>
													</div>
													<button class="btn-reset btn btn-primary cart-in" type="button">
														<span class="btn__text">В КОРЗИНУ</span>
													</button>
													<div class="card-product-act">
														<button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
															<svg class="icon btn__icon">
																<use href="img/sprite.svg#fill-more-horiz"></use>
															</svg>
														</button>
														<div class="card-product-act__list" data-card-product-act-content>
															<button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
																<svg class="icon btn__icon icon-default">
																	<use href="img/sprite.svg#bookmark-plus"></use>
																</svg>
																<span class="btn__text text-default">В избранное</span>
																<svg class="icon btn__icon icon-selected">
																	<use href="img/sprite.svg#fill-bookmark-check"></use>
																</svg>
																<span class="btn__text text-selected">В избранном</span>
															</button>
															<button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
																<svg class="icon btn__icon">
																	<use href="img/sprite.svg#barchart"></use>
																</svg>
																<span class="btn__text text-default">Сравнить</span>
																<span class="btn__text text-selected">В сравнении</span>
															</button>
															<button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
																<svg class="icon btn__icon">
																	<use href="img/sprite.svg#inbox-in"></use>
																</svg>
																<span class="btn__text">В смету</span>
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="card-product card-product-default" data-card-product>
										<div class="card-product-view">
											<div class="mini-slider">
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 1;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-2.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-2.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-3.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-3.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<ul class="list-reset mini-slider__dots"></ul>
											</div>
											<div class="card-product-sale-label">
												<span class="sale-label sale-label-red">20%</span>
												<span class="sale-label sale-label-yellow">Распродажа</span>
												<span class="sale-label sale-label-green">Хит</span>
											</div>
										</div>
										<div class="card-product-descr">
											<div class="card-product-descr__top">
												<div class="card-product-descr__info">
													<span class="product-code"><span>ZB3327018</span></span>
													<span class="star-rating-wrapper star-rating-wrapper--noframe">
												<span class="star-rating">
													<span class="star-rating__container">
														<label>
															<svg class="icon">
																<use href="img/sprite.svg#fill-star"></use>
															</svg>
														</label>
													</span>
												</span>
												<span class="star-rating-value" data-value="4.5">4.5</span>
											</span>
												</div>
												<div class="card-product-descr__availability product-availability in-stock">
													<svg class="icon">
														<use href="img/sprite.svg#checkbox-rec"></use>
													</svg>
													<span>Товар в наличии</span>
												</div>
												<div class="card-product-descr__title">
													<a href="javascript:;">Haupa Отвёртка двухкомпонентная PH 2</a>
												</div>
											</div>

											<div class="card-product-descr__bottom">
												<div class="card-product-descr__price">
													<div class="card-product-descr__price-title">Цена за штуку</div>
													<div class="card-product-descr__price-display">
														<div class="card-product-descr__price-discount">
															<div class="card-product-descr__price-originally">1 624,50 ₽</div>
															<div class="card-product-descr__price-discount-label">10%</div>
														</div>
														<div class="card-product-descr__price-current">1 478,40 ₽</div>
													</div>
													<div class="card-product-descr__price-bonus">
														<span>+ 346,99</span>
														<svg class="icon">
															<use href="img/sprite.svg#fill-bonus"></use>
														</svg>
													</div>
												</div>
												<div class="card-product-descr__cart product-card__cart cart-buy">
													<div class="product-card__cart-quantity cart-quantity disabled">
														<button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
															<svg class="icon icon-sm btn__icon">
																<use href="img/sprite.svg#minus"></use>
															</svg>
															<svg class="icon icon-sm btn__icon icon-selected">
																<use href="img/sprite.svg#trash"></use>
															</svg>
														</button>
														<input
															id=""
															class="input-reset cart-quantity-input"
															type="text"
															placeholder="999"
															value="1"
															max="999"
															data-mult="1"
														>
														<button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
															<svg class="icon icon-sm btn__icon">
																<use href="img/sprite.svg#plus"></use>
															</svg>
														</button>
													</div>
													<button class="btn-reset btn btn-primary cart-in" type="button">
														<span class="btn__text">В КОРЗИНУ</span>
													</button>
													<div class="card-product-act">
														<button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
															<svg class="icon btn__icon">
																<use href="img/sprite.svg#fill-more-horiz"></use>
															</svg>
														</button>
														<div class="card-product-act__list" data-card-product-act-content>
															<button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
																<svg class="icon btn__icon icon-default">
																	<use href="img/sprite.svg#bookmark-plus"></use>
																</svg>
																<span class="btn__text text-default">В избранное</span>
																<svg class="icon btn__icon icon-selected">
																	<use href="img/sprite.svg#fill-bookmark-check"></use>
																</svg>
																<span class="btn__text text-selected">В избранном</span>
															</button>
															<button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
																<svg class="icon btn__icon">
																	<use href="img/sprite.svg#barchart"></use>
																</svg>
																<span class="btn__text text-default">Сравнить</span>
																<span class="btn__text text-selected">В сравнении</span>
															</button>
															<button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
																<svg class="icon btn__icon">
																	<use href="img/sprite.svg#inbox-in"></use>
																</svg>
																<span class="btn__text">В смету</span>
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="card-product card-product-default" data-card-product>
										<div class="card-product-view">
											<div class="mini-slider">
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 1;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-2.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-2.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-3.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-3.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<ul class="list-reset mini-slider__dots"></ul>
											</div>
											<div class="card-product-sale-label">
												<span class="sale-label sale-label-red">20%</span>
												<span class="sale-label sale-label-yellow">Распродажа</span>
												<span class="sale-label sale-label-green">Хит</span>
											</div>
										</div>
										<div class="card-product-descr">
											<div class="card-product-descr__top">
												<div class="card-product-descr__info">
													<span class="product-code"><span>ZB3327018</span></span>
													<span class="star-rating-wrapper star-rating-wrapper--noframe">
												<span class="star-rating">
													<span class="star-rating__container">
														<label>
															<svg class="icon">
																<use href="img/sprite.svg#fill-star"></use>
															</svg>
														</label>
													</span>
												</span>
												<span class="star-rating-value" data-value="4.5">4.5</span>
											</span>
												</div>
												<div class="card-product-descr__availability product-availability in-stock">
													<svg class="icon">
														<use href="img/sprite.svg#checkbox-rec"></use>
													</svg>
													<span>Товар в наличии</span>
												</div>
												<div class="card-product-descr__title">
													<a href="javascript:;">Haupa Отвёртка двухкомпонентная PH 2</a>
												</div>
											</div>

											<div class="card-product-descr__bottom">
												<div class="card-product-descr__price">
													<div class="card-product-descr__price-title">Цена за штуку</div>
													<div class="card-product-descr__price-display">
														<div class="card-product-descr__price-discount">
															<div class="card-product-descr__price-originally">1 624,50 ₽</div>
															<div class="card-product-descr__price-discount-label">10%</div>
														</div>
														<div class="card-product-descr__price-current">1 478,40 ₽</div>
													</div>
													<div class="card-product-descr__price-bonus">
														<span>+ 346,99</span>
														<svg class="icon">
															<use href="img/sprite.svg#fill-bonus"></use>
														</svg>
													</div>
												</div>
												<div class="card-product-descr__cart product-card__cart cart-buy">
													<div class="product-card__cart-quantity cart-quantity disabled">
														<button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
															<svg class="icon icon-sm btn__icon">
																<use href="img/sprite.svg#minus"></use>
															</svg>
															<svg class="icon icon-sm btn__icon icon-selected">
																<use href="img/sprite.svg#trash"></use>
															</svg>
														</button>
														<input
															id=""
															class="input-reset cart-quantity-input"
															type="text"
															placeholder="999"
															value="1"
															max="999"
															data-mult="1"
														>
														<button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
															<svg class="icon icon-sm btn__icon">
																<use href="img/sprite.svg#plus"></use>
															</svg>
														</button>
													</div>
													<button class="btn-reset btn btn-primary cart-in" type="button">
														<span class="btn__text">В КОРЗИНУ</span>
													</button>
													<div class="card-product-act">
														<button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
															<svg class="icon btn__icon">
																<use href="img/sprite.svg#fill-more-horiz"></use>
															</svg>
														</button>
														<div class="card-product-act__list" data-card-product-act-content>
															<button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
																<svg class="icon btn__icon icon-default">
																	<use href="img/sprite.svg#bookmark-plus"></use>
																</svg>
																<span class="btn__text text-default">В избранное</span>
																<svg class="icon btn__icon icon-selected">
																	<use href="img/sprite.svg#fill-bookmark-check"></use>
																</svg>
																<span class="btn__text text-selected">В избранном</span>
															</button>
															<button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
																<svg class="icon btn__icon">
																	<use href="img/sprite.svg#barchart"></use>
																</svg>
																<span class="btn__text text-default">Сравнить</span>
																<span class="btn__text text-selected">В сравнении</span>
															</button>
															<button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
																<svg class="icon btn__icon">
																	<use href="img/sprite.svg#inbox-in"></use>
																</svg>
																<span class="btn__text">В смету</span>
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="card-product card-product-default" data-card-product>
										<div class="card-product-view">
											<div class="mini-slider">
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-2.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-2.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 1;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-3.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-3.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-4.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-4.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<ul class="list-reset mini-slider__dots"></ul>
											</div>
											<div class="card-product-sale-label">
												<span class="sale-label sale-label-red">20%</span>
												<span class="sale-label sale-label-yellow">Распродажа</span>
												<span class="sale-label sale-label-green">Хит</span>
											</div>
										</div>
										<div class="card-product-descr">
											<div class="card-product-descr__top">
												<div class="card-product-descr__info">
													<span class="product-code"><span>46- 312792P13</span></span>
													<span class="star-rating-wrapper star-rating-wrapper--noframe">
												<span class="star-rating">
													<span class="star-rating__container">
														<label>
															<svg class="icon">
																<use href="img/sprite.svg#fill-star"></use>
															</svg>
														</label>
													</span>
												</span>
												<span class="star-rating-value" data-value="5.0">5.0</span>
											</span>
												</div>
												<div class="card-product-descr__availability product-availability on-order">
													<svg class="icon">
														<use href="img/sprite.svg#timer"></use>
													</svg>
													<span>Под заказ</span>
												</div>
												<div class="card-product-descr__title">
													<a href="javascript:;">Haupa Инструмент обжимной для конечных гильз 0,25-6</a>
												</div>
											</div>

											<div class="card-product-descr__bottom">
												<div class="card-product-descr__price">
													<div class="card-product-descr__price-title">Цена за штуку</div>
													<div class="card-product-descr__price-display">
														<div class="card-product-descr__price-discount">
															<div class="card-product-descr__price-originally">1 624,50 ₽</div>
															<div class="card-product-descr__price-discount-label">10%</div>
														</div>
														<div class="card-product-descr__price-current">6 173,10 ₽</div>
													</div>
													<div class="card-product-descr__price-bonus">
														<span>+ 346,99</span>
														<svg class="icon">
															<use href="img/sprite.svg#fill-bonus"></use>
														</svg>
													</div>
												</div>
												<div class="card-product-descr__cart product-card__cart cart-buy">
													<div class="product-card__cart-quantity cart-quantity disabled">
														<button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
															<svg class="icon icon-sm btn__icon">
																<use href="img/sprite.svg#minus"></use>
															</svg>
															<svg class="icon icon-sm btn__icon icon-selected">
																<use href="img/sprite.svg#trash"></use>
															</svg>
														</button>
														<input
															id=""
															class="input-reset cart-quantity-input"
															type="text"
															placeholder="999"
															value="1"
															max="999"
															data-mult="1"
														>
														<button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
															<svg class="icon icon-sm btn__icon">
																<use href="img/sprite.svg#plus"></use>
															</svg>
														</button>
													</div>
													<button class="btn-reset btn btn-primary cart-in" type="button">
														<span class="btn__text">В КОРЗИНУ</span>
													</button>
													<div class="card-product-act">
														<button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
															<svg class="icon btn__icon">
																<use href="img/sprite.svg#fill-more-horiz"></use>
															</svg>
														</button>
														<div class="card-product-act__list" data-card-product-act-content>
															<button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
																<svg class="icon btn__icon icon-default">
																	<use href="img/sprite.svg#bookmark-plus"></use>
																</svg>
																<span class="btn__text text-default">В избранное</span>
																<svg class="icon btn__icon icon-selected">
																	<use href="img/sprite.svg#fill-bookmark-check"></use>
																</svg>
																<span class="btn__text text-selected">В избранном</span>
															</button>
															<button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
																<svg class="icon btn__icon">
																	<use href="img/sprite.svg#barchart"></use>
																</svg>
																<span class="btn__text text-default">Сравнить</span>
																<span class="btn__text text-selected">В сравнении</span>
															</button>
															<button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
																<svg class="icon btn__icon">
																	<use href="img/sprite.svg#inbox-in"></use>
																</svg>
																<span class="btn__text">В смету</span>
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-navigation">
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

        <div class="gap-xl product-card-mobile-section">
            <div class="product-card-mobile-section-container">
                <div class="gap-lg">
                    <div class="h2">Новинки</div>
                </div>

                <div class="catalog-extra-slider out-container-x">
                    <div class="gap-lg">
                        <div class="tag-bar swiper" data-tag-bar-slider>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <span class="btn__text">Все товары</span>
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#catalog-wiring-products"></use>
                                        </svg>
                                        <span class="btn__text">Розетки и выключатели</span>
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#catalog-low-voltage"></use>
                                        </svg>
                                        <span class="btn__text">Низковольтное оборудование</span>
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#catalog-shields-cabinets"></use>
                                        </svg>
                                        <span class="btn__text">Щиты, шкафы, боксы</span>
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#catalog-lighting"></use>
                                        </svg>
                                        <span class="btn__text">Светотехника</span>
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#catalog-tools"></use>
                                        </svg>
                                        <span class="btn__text">Инструменты и монтажные материалы</span>
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#catalog-ventilation"></use>
                                        </svg>
                                        <span class="btn__text">Системы вентиляции и обогрева</span>
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#catalog-grounding"></use>
                                        </svg>
                                        <span class="btn__text">Молниезащита и заземление</span>
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#catalog-power-devices"></use>
                                        </svg>
                                        <span class="btn__text">Элементы и устройства питания</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="basic-slider-wrap">
                        <div class="basic-slider card-product-default-wrap swiper" data-basic-slider>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card-product card-product-default" data-card-product>
                                        <div class="card-product-view">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 1;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-2.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-2.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-3.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-3.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                            <div class="card-product-sale-label">
                                                <span class="sale-label sale-label-red">20%</span>
                                                <span class="sale-label sale-label-yellow">Распродажа</span>
                                                <span class="sale-label sale-label-green">Хит</span>
                                            </div>
                                        </div>
                                        <div class="card-product-descr">
                                            <div class="card-product-descr__top">
                                                <div class="card-product-descr__info">
                                                    <span class="product-code"><span>ZB3327018</span></span>
                                                    <span class="star-rating-wrapper star-rating-wrapper--noframe">
												<span class="star-rating">
													<span class="star-rating__container">
														<label>
															<svg class="icon">
																<use href="img/sprite.svg#fill-star"></use>
															</svg>
														</label>
													</span>
												</span>
												<span class="star-rating-value" data-value="4.5">4.5</span>
											</span>
                                                </div>
                                                <div class="card-product-descr__availability product-availability in-stock">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#checkbox-rec"></use>
                                                    </svg>
                                                    <span>Товар в наличии</span>
                                                </div>
                                                <div class="card-product-descr__title">
                                                    <a href="javascript:;">Haupa Отвёртка двухкомпонентная PH 2</a>
                                                </div>
                                            </div>

                                            <div class="card-product-descr__bottom">
                                                <div class="card-product-descr__price">
                                                    <div class="card-product-descr__price-title">Цена за штуку</div>
                                                    <div class="card-product-descr__price-display">
                                                        <div class="card-product-descr__price-discount">
                                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                            <div class="card-product-descr__price-discount-label">10%</div>
                                                        </div>
                                                        <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                                    </div>
                                                    <div class="card-product-descr__price-bonus">
                                                        <span>+ 346,99</span>
                                                        <svg class="icon">
                                                            <use href="img/sprite.svg#fill-bonus"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="card-product-descr__cart product-card__cart cart-buy">
                                                    <div class="product-card__cart-quantity cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-sm btn__icon icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input
                                                                id=""
                                                                class="input-reset cart-quantity-input"
                                                                type="text"
                                                                placeholder="999"
                                                                value="1"
                                                                max="999"
                                                                data-mult="1"
                                                        >
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="btn__text">В КОРЗИНУ</span>
                                                    </button>
                                                    <div class="card-product-act">
                                                        <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#fill-more-horiz"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="card-product-act__list" data-card-product-act-content>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                <svg class="icon btn__icon icon-default">
                                                                    <use href="img/sprite.svg#bookmark-plus"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">В избранное</span>
                                                                <svg class="icon btn__icon icon-selected">
                                                                    <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                </svg>
                                                                <span class="btn__text text-selected">В избранном</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#barchart"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">Сравнить</span>
                                                                <span class="btn__text text-selected">В сравнении</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#inbox-in"></use>
                                                                </svg>
                                                                <span class="btn__text">В смету</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-product card-product-default" data-card-product>
                                        <div class="card-product-view">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-2.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-2.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 1;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-3.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-3.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-4.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-4.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                            <div class="card-product-sale-label">
                                                <span class="sale-label sale-label-red">20%</span>
                                                <span class="sale-label sale-label-yellow">Распродажа</span>
                                                <span class="sale-label sale-label-green">Хит</span>
                                            </div>
                                        </div>
                                        <div class="card-product-descr">
                                            <div class="card-product-descr__top">
                                                <div class="card-product-descr__info">
                                                    <span class="product-code"><span>46- 312792P13</span></span>
                                                    <span class="star-rating-wrapper star-rating-wrapper--noframe">
												<span class="star-rating">
													<span class="star-rating__container">
														<label>
															<svg class="icon">
																<use href="img/sprite.svg#fill-star"></use>
															</svg>
														</label>
													</span>
												</span>
												<span class="star-rating-value" data-value="5.0">5.0</span>
											</span>
                                                </div>
                                                <div class="card-product-descr__availability product-availability on-order">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#timer"></use>
                                                    </svg>
                                                    <span>Под заказ</span>
                                                </div>
                                                <div class="card-product-descr__title">
                                                    <a href="javascript:;">Haupa Инструмент обжимной для конечных гильз 0,25-6</a>
                                                </div>
                                            </div>

                                            <div class="card-product-descr__bottom">
                                                <div class="card-product-descr__price">
                                                    <div class="card-product-descr__price-title">Цена за штуку</div>
                                                    <div class="card-product-descr__price-display">
                                                        <div class="card-product-descr__price-discount">
                                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                            <div class="card-product-descr__price-discount-label">10%</div>
                                                        </div>
                                                        <div class="card-product-descr__price-current">6 173,10 ₽</div>
                                                    </div>
                                                    <div class="card-product-descr__price-bonus">
                                                        <span>+ 346,99</span>
                                                        <svg class="icon">
                                                            <use href="img/sprite.svg#fill-bonus"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="card-product-descr__cart product-card__cart cart-buy">
                                                    <div class="product-card__cart-quantity cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-sm btn__icon icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input
                                                                id=""
                                                                class="input-reset cart-quantity-input"
                                                                type="text"
                                                                placeholder="999"
                                                                value="1"
                                                                max="999"
                                                                data-mult="1"
                                                        >
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="btn__text">В КОРЗИНУ</span>
                                                    </button>
                                                    <div class="card-product-act">
                                                        <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#fill-more-horiz"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="card-product-act__list" data-card-product-act-content>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                <svg class="icon btn__icon icon-default">
                                                                    <use href="img/sprite.svg#bookmark-plus"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">В избранное</span>
                                                                <svg class="icon btn__icon icon-selected">
                                                                    <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                </svg>
                                                                <span class="btn__text text-selected">В избранном</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#barchart"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">Сравнить</span>
                                                                <span class="btn__text text-selected">В сравнении</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#inbox-in"></use>
                                                                </svg>
                                                                <span class="btn__text">В смету</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-product card-product-default" data-card-product>
                                        <div class="card-product-view">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-3.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-3.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 1;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-4.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-4.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-5.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-5.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-2.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-2.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                            <div class="card-product-sale-label">
                                                <span class="sale-label sale-label-red">20%</span>
                                                <span class="sale-label sale-label-yellow">Распродажа</span>
                                                <span class="sale-label sale-label-green">Хит</span>
                                            </div>
                                        </div>
                                        <div class="card-product-descr">
                                            <div class="card-product-descr__top">
                                                <div class="card-product-descr__info">
                                                    <span class="product-code"><span>2348958- 87</span></span>
                                                </div>
                                                <div class="card-product-descr__availability product-availability on-order">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#timer"></use>
                                                    </svg>
                                                    <span>Под заказ</span>
                                                </div>
                                                <div class="card-product-descr__title">
                                                    <a href="javascript:;">SE Unica Extend Бел Удлинитель 3 розетки 2К+З, кабель 1,5м</a>
                                                </div>
                                            </div>

                                            <div class="card-product-descr__bottom">
                                                <div class="card-product-descr__price">
                                                    <div class="card-product-descr__price-title">Цена за штуку</div>
                                                    <div class="card-product-descr__price-display">
                                                        <div class="card-product-descr__price-discount">
                                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                            <div class="card-product-descr__price-discount-label">10%</div>
                                                        </div>
                                                        <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                                    </div>
                                                    <div class="card-product-descr__price-bonus">
                                                        <span>+ 346,99</span>
                                                        <svg class="icon">
                                                            <use href="img/sprite.svg#fill-bonus"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="card-product-descr__cart product-card__cart cart-buy">
                                                    <div class="product-card__cart-quantity cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-sm btn__icon icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input
                                                                id=""
                                                                class="input-reset cart-quantity-input"
                                                                type="text"
                                                                placeholder="999"
                                                                value="1"
                                                                max="999"
                                                                data-mult="1"
                                                        >
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="btn__text">В КОРЗИНУ</span>
                                                    </button>
                                                    <div class="card-product-act">
                                                        <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#fill-more-horiz"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="card-product-act__list" data-card-product-act-content>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                <svg class="icon btn__icon icon-default">
                                                                    <use href="img/sprite.svg#bookmark-plus"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">В избранное</span>
                                                                <svg class="icon btn__icon icon-selected">
                                                                    <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                </svg>
                                                                <span class="btn__text text-selected">В избранном</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#barchart"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">Сравнить</span>
                                                                <span class="btn__text text-selected">В сравнении</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#inbox-in"></use>
                                                                </svg>
                                                                <span class="btn__text">В смету</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-product card-product-default" data-card-product>
                                        <div class="card-product-view">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-4.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-4.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 1;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-5.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-5.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                            <div class="card-product-sale-label">
                                                <span class="sale-label sale-label-red">20%</span>
                                                <span class="sale-label sale-label-yellow">Распродажа</span>
                                                <span class="sale-label sale-label-green">Хит</span>
                                            </div>
                                        </div>
                                        <div class="card-product-descr">
                                            <div class="card-product-descr__top">
                                                <div class="card-product-descr__info">
                                                    <span class="product-code"><span>Z241- 0008</span></span>
                                                </div>
                                                <div class="card-product-descr__availability product-availability in-stock">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#checkbox-rec"></use>
                                                    </svg>
                                                    <span>Товар в наличии</span>
                                                </div>
                                                <div class="card-product-descr__title">
                                                    <a href="javascript:;">SE Unica System+ Антрацит Блок розеточный (2к+з)+usb тип А</a>
                                                </div>
                                            </div>

                                            <div class="card-product-descr__bottom">
                                                <div class="card-product-descr__price">
                                                    <div class="card-product-descr__price-title">Цена за штуку</div>
                                                    <div class="card-product-descr__price-display">
                                                        <div class="card-product-descr__price-discount">
                                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                            <div class="card-product-descr__price-discount-label">10%</div>
                                                        </div>
                                                        <div class="card-product-descr__price-current">5 827,99 ₽</div>
                                                    </div>
                                                    <div class="card-product-descr__price-bonus">
                                                        <span>+ 346,99</span>
                                                        <svg class="icon">
                                                            <use href="img/sprite.svg#fill-bonus"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="card-product-descr__cart product-card__cart cart-buy">
                                                    <div class="product-card__cart-quantity cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-sm btn__icon icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input
                                                                id=""
                                                                class="input-reset cart-quantity-input"
                                                                type="text"
                                                                placeholder="999"
                                                                value="1"
                                                                max="999"
                                                                data-mult="1"
                                                        >
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="btn__text">В КОРЗИНУ</span>
                                                    </button>
                                                    <div class="card-product-act">
                                                        <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#fill-more-horiz"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="card-product-act__list" data-card-product-act-content>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                <svg class="icon btn__icon icon-default">
                                                                    <use href="img/sprite.svg#bookmark-plus"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">В избранное</span>
                                                                <svg class="icon btn__icon icon-selected">
                                                                    <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                </svg>
                                                                <span class="btn__text text-selected">В избранном</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#barchart"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">Сравнить</span>
                                                                <span class="btn__text text-selected">В сравнении</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#inbox-in"></use>
                                                                </svg>
                                                                <span class="btn__text">В смету</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-product card-product-default" data-card-product>
                                        <div class="card-product-view">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 1;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-2.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-2.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-3.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-3.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                            <div class="card-product-sale-label">
                                                <span class="sale-label sale-label-red">20%</span>
                                                <span class="sale-label sale-label-yellow">Распродажа</span>
                                                <span class="sale-label sale-label-green">Хит</span>
                                            </div>
                                        </div>
                                        <div class="card-product-descr">
                                            <div class="card-product-descr__top">
                                                <div class="card-product-descr__info">
                                                    <span class="product-code"><span>ZB3327018</span></span>
                                                    <span class="star-rating-wrapper star-rating-wrapper--noframe">
												<span class="star-rating">
													<span class="star-rating__container">
														<label>
															<svg class="icon">
																<use href="img/sprite.svg#fill-star"></use>
															</svg>
														</label>
													</span>
												</span>
												<span class="star-rating-value" data-value="4.5">4.5</span>
											</span>
                                                </div>
                                                <div class="card-product-descr__availability product-availability in-stock">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#checkbox-rec"></use>
                                                    </svg>
                                                    <span>Товар в наличии</span>
                                                </div>
                                                <div class="card-product-descr__title">
                                                    <a href="javascript:;">Haupa Отвёртка двухкомпонентная PH 2</a>
                                                </div>
                                            </div>

                                            <div class="card-product-descr__bottom">
                                                <div class="card-product-descr__price">
                                                    <div class="card-product-descr__price-title">Цена за штуку</div>
                                                    <div class="card-product-descr__price-display">
                                                        <div class="card-product-descr__price-discount">
                                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                            <div class="card-product-descr__price-discount-label">10%</div>
                                                        </div>
                                                        <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                                    </div>
                                                    <div class="card-product-descr__price-bonus">
                                                        <span>+ 346,99</span>
                                                        <svg class="icon">
                                                            <use href="img/sprite.svg#fill-bonus"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="card-product-descr__cart product-card__cart cart-buy">
                                                    <div class="product-card__cart-quantity cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-sm btn__icon icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input
                                                                id=""
                                                                class="input-reset cart-quantity-input"
                                                                type="text"
                                                                placeholder="999"
                                                                value="1"
                                                                max="999"
                                                                data-mult="1"
                                                        >
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="btn__text">В КОРЗИНУ</span>
                                                    </button>
                                                    <div class="card-product-act">
                                                        <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#fill-more-horiz"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="card-product-act__list" data-card-product-act-content>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                <svg class="icon btn__icon icon-default">
                                                                    <use href="img/sprite.svg#bookmark-plus"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">В избранное</span>
                                                                <svg class="icon btn__icon icon-selected">
                                                                    <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                </svg>
                                                                <span class="btn__text text-selected">В избранном</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#barchart"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">Сравнить</span>
                                                                <span class="btn__text text-selected">В сравнении</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#inbox-in"></use>
                                                                </svg>
                                                                <span class="btn__text">В смету</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-product card-product-default" data-card-product>
                                        <div class="card-product-view">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 1;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-2.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-2.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-3.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-3.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                            <div class="card-product-sale-label">
                                                <span class="sale-label sale-label-red">20%</span>
                                                <span class="sale-label sale-label-yellow">Распродажа</span>
                                                <span class="sale-label sale-label-green">Хит</span>
                                            </div>
                                        </div>
                                        <div class="card-product-descr">
                                            <div class="card-product-descr__top">
                                                <div class="card-product-descr__info">
                                                    <span class="product-code"><span>ZB3327018</span></span>
                                                    <span class="star-rating-wrapper star-rating-wrapper--noframe">
												<span class="star-rating">
													<span class="star-rating__container">
														<label>
															<svg class="icon">
																<use href="img/sprite.svg#fill-star"></use>
															</svg>
														</label>
													</span>
												</span>
												<span class="star-rating-value" data-value="4.5">4.5</span>
											</span>
                                                </div>
                                                <div class="card-product-descr__availability product-availability in-stock">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#checkbox-rec"></use>
                                                    </svg>
                                                    <span>Товар в наличии</span>
                                                </div>
                                                <div class="card-product-descr__title">
                                                    <a href="javascript:;">Haupa Отвёртка двухкомпонентная PH 2</a>
                                                </div>
                                            </div>

                                            <div class="card-product-descr__bottom">
                                                <div class="card-product-descr__price">
                                                    <div class="card-product-descr__price-title">Цена за штуку</div>
                                                    <div class="card-product-descr__price-display">
                                                        <div class="card-product-descr__price-discount">
                                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                            <div class="card-product-descr__price-discount-label">10%</div>
                                                        </div>
                                                        <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                                    </div>
                                                    <div class="card-product-descr__price-bonus">
                                                        <span>+ 346,99</span>
                                                        <svg class="icon">
                                                            <use href="img/sprite.svg#fill-bonus"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="card-product-descr__cart product-card__cart cart-buy">
                                                    <div class="product-card__cart-quantity cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-sm btn__icon icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input
                                                                id=""
                                                                class="input-reset cart-quantity-input"
                                                                type="text"
                                                                placeholder="999"
                                                                value="1"
                                                                max="999"
                                                                data-mult="1"
                                                        >
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="btn__text">В КОРЗИНУ</span>
                                                    </button>
                                                    <div class="card-product-act">
                                                        <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#fill-more-horiz"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="card-product-act__list" data-card-product-act-content>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                <svg class="icon btn__icon icon-default">
                                                                    <use href="img/sprite.svg#bookmark-plus"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">В избранное</span>
                                                                <svg class="icon btn__icon icon-selected">
                                                                    <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                </svg>
                                                                <span class="btn__text text-selected">В избранном</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#barchart"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">Сравнить</span>
                                                                <span class="btn__text text-selected">В сравнении</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#inbox-in"></use>
                                                                </svg>
                                                                <span class="btn__text">В смету</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-product card-product-default" data-card-product>
                                        <div class="card-product-view">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-2.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-2.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 1;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-3.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-3.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-4.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-4.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                            <div class="card-product-sale-label">
                                                <span class="sale-label sale-label-red">20%</span>
                                                <span class="sale-label sale-label-yellow">Распродажа</span>
                                                <span class="sale-label sale-label-green">Хит</span>
                                            </div>
                                        </div>
                                        <div class="card-product-descr">
                                            <div class="card-product-descr__top">
                                                <div class="card-product-descr__info">
                                                    <span class="product-code"><span>46- 312792P13</span></span>
                                                    <span class="star-rating-wrapper star-rating-wrapper--noframe">
												<span class="star-rating">
													<span class="star-rating__container">
														<label>
															<svg class="icon">
																<use href="img/sprite.svg#fill-star"></use>
															</svg>
														</label>
													</span>
												</span>
												<span class="star-rating-value" data-value="5.0">5.0</span>
											</span>
                                                </div>
                                                <div class="card-product-descr__availability product-availability on-order">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#timer"></use>
                                                    </svg>
                                                    <span>Под заказ</span>
                                                </div>
                                                <div class="card-product-descr__title">
                                                    <a href="javascript:;">Haupa Инструмент обжимной для конечных гильз 0,25-6</a>
                                                </div>
                                            </div>

                                            <div class="card-product-descr__bottom">
                                                <div class="card-product-descr__price">
                                                    <div class="card-product-descr__price-title">Цена за штуку</div>
                                                    <div class="card-product-descr__price-display">
                                                        <div class="card-product-descr__price-discount">
                                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                            <div class="card-product-descr__price-discount-label">10%</div>
                                                        </div>
                                                        <div class="card-product-descr__price-current">6 173,10 ₽</div>
                                                    </div>
                                                    <div class="card-product-descr__price-bonus">
                                                        <span>+ 346,99</span>
                                                        <svg class="icon">
                                                            <use href="img/sprite.svg#fill-bonus"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="card-product-descr__cart product-card__cart cart-buy">
                                                    <div class="product-card__cart-quantity cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-sm btn__icon icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input
                                                                id=""
                                                                class="input-reset cart-quantity-input"
                                                                type="text"
                                                                placeholder="999"
                                                                value="1"
                                                                max="999"
                                                                data-mult="1"
                                                        >
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="btn__text">В КОРЗИНУ</span>
                                                    </button>
                                                    <div class="card-product-act">
                                                        <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#fill-more-horiz"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="card-product-act__list" data-card-product-act-content>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                <svg class="icon btn__icon icon-default">
                                                                    <use href="img/sprite.svg#bookmark-plus"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">В избранное</span>
                                                                <svg class="icon btn__icon icon-selected">
                                                                    <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                </svg>
                                                                <span class="btn__text text-selected">В избранном</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#barchart"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">Сравнить</span>
                                                                <span class="btn__text text-selected">В сравнении</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#inbox-in"></use>
                                                                </svg>
                                                                <span class="btn__text">В смету</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-navigation">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gap-xl product-card-mobile-section">
            <div class="product-card-mobile-section-container">
                <div class="gap-lg">
                    <div class="h2">Товары по акции</div>
                </div>

                <div class="catalog-extra-slider out-container-x">
                    <div class="gap-lg">
                        <div class="tag-bar swiper" data-tag-bar-slider>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <span class="btn__text">Все товары</span>
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#catalog-wiring-products"></use>
                                        </svg>
                                        <span class="btn__text">Розетки и выключатели</span>
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#catalog-low-voltage"></use>
                                        </svg>
                                        <span class="btn__text">Низковольтное оборудование</span>
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#catalog-shields-cabinets"></use>
                                        </svg>
                                        <span class="btn__text">Щиты, шкафы, боксы</span>
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#catalog-lighting"></use>
                                        </svg>
                                        <span class="btn__text">Светотехника</span>
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#catalog-tools"></use>
                                        </svg>
                                        <span class="btn__text">Инструменты и монтажные материалы</span>
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#catalog-ventilation"></use>
                                        </svg>
                                        <span class="btn__text">Системы вентиляции и обогрева</span>
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#catalog-grounding"></use>
                                        </svg>
                                        <span class="btn__text">Молниезащита и заземление</span>
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#catalog-power-devices"></use>
                                        </svg>
                                        <span class="btn__text">Элементы и устройства питания</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="basic-slider-wrap">
                        <div class="basic-slider card-product-default-wrap swiper" data-basic-slider>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card-product card-product-default" data-card-product>
                                        <div class="card-product-view">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 1;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-2.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-2.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-3.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-3.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                            <div class="card-product-sale-label">
                                                <span class="sale-label sale-label-red">20%</span>
                                                <span class="sale-label sale-label-yellow">Распродажа</span>
                                                <span class="sale-label sale-label-green">Хит</span>
                                            </div>
                                        </div>
                                        <div class="card-product-descr">
                                            <div class="card-product-descr__top">
                                                <div class="card-product-descr__info">
                                                    <span class="product-code"><span>ZB3327018</span></span>
                                                    <span class="star-rating-wrapper star-rating-wrapper--noframe">
												<span class="star-rating">
													<span class="star-rating__container">
														<label>
															<svg class="icon">
																<use href="img/sprite.svg#fill-star"></use>
															</svg>
														</label>
													</span>
												</span>
												<span class="star-rating-value" data-value="4.5">4.5</span>
											</span>
                                                </div>
                                                <div class="card-product-descr__availability product-availability in-stock">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#checkbox-rec"></use>
                                                    </svg>
                                                    <span>Товар в наличии</span>
                                                </div>
                                                <div class="card-product-descr__title">
                                                    <a href="javascript:;">Haupa Отвёртка двухкомпонентная PH 2</a>
                                                </div>
                                            </div>

                                            <div class="card-product-descr__bottom">
                                                <div class="card-product-descr__price">
                                                    <div class="card-product-descr__price-title">Цена за штуку</div>
                                                    <div class="card-product-descr__price-display">
                                                        <div class="card-product-descr__price-discount">
                                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                            <div class="card-product-descr__price-discount-label">10%</div>
                                                        </div>
                                                        <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                                    </div>
                                                    <div class="card-product-descr__price-bonus">
                                                        <span>+ 346,99</span>
                                                        <svg class="icon">
                                                            <use href="img/sprite.svg#fill-bonus"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="card-product-descr__cart product-card__cart cart-buy">
                                                    <div class="product-card__cart-quantity cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-sm btn__icon icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input
                                                                id=""
                                                                class="input-reset cart-quantity-input"
                                                                type="text"
                                                                placeholder="999"
                                                                value="1"
                                                                max="999"
                                                                data-mult="1"
                                                        >
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="btn__text">В КОРЗИНУ</span>
                                                    </button>
                                                    <div class="card-product-act">
                                                        <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#fill-more-horiz"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="card-product-act__list" data-card-product-act-content>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                <svg class="icon btn__icon icon-default">
                                                                    <use href="img/sprite.svg#bookmark-plus"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">В избранное</span>
                                                                <svg class="icon btn__icon icon-selected">
                                                                    <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                </svg>
                                                                <span class="btn__text text-selected">В избранном</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#barchart"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">Сравнить</span>
                                                                <span class="btn__text text-selected">В сравнении</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#inbox-in"></use>
                                                                </svg>
                                                                <span class="btn__text">В смету</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-product card-product-default" data-card-product>
                                        <div class="card-product-view">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-2.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-2.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 1;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-3.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-3.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-4.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-4.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                            <div class="card-product-sale-label">
                                                <span class="sale-label sale-label-red">20%</span>
                                                <span class="sale-label sale-label-yellow">Распродажа</span>
                                                <span class="sale-label sale-label-green">Хит</span>
                                            </div>
                                        </div>
                                        <div class="card-product-descr">
                                            <div class="card-product-descr__top">
                                                <div class="card-product-descr__info">
                                                    <span class="product-code"><span>46- 312792P13</span></span>
                                                    <span class="star-rating-wrapper star-rating-wrapper--noframe">
												<span class="star-rating">
													<span class="star-rating__container">
														<label>
															<svg class="icon">
																<use href="img/sprite.svg#fill-star"></use>
															</svg>
														</label>
													</span>
												</span>
												<span class="star-rating-value" data-value="5.0">5.0</span>
											</span>
                                                </div>
                                                <div class="card-product-descr__availability product-availability on-order">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#timer"></use>
                                                    </svg>
                                                    <span>Под заказ</span>
                                                </div>
                                                <div class="card-product-descr__title">
                                                    <a href="javascript:;">Haupa Инструмент обжимной для конечных гильз 0,25-6</a>
                                                </div>
                                            </div>

                                            <div class="card-product-descr__bottom">
                                                <div class="card-product-descr__price">
                                                    <div class="card-product-descr__price-title">Цена за штуку</div>
                                                    <div class="card-product-descr__price-display">
                                                        <div class="card-product-descr__price-discount">
                                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                            <div class="card-product-descr__price-discount-label">10%</div>
                                                        </div>
                                                        <div class="card-product-descr__price-current">6 173,10 ₽</div>
                                                    </div>
                                                    <div class="card-product-descr__price-bonus">
                                                        <span>+ 346,99</span>
                                                        <svg class="icon">
                                                            <use href="img/sprite.svg#fill-bonus"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="card-product-descr__cart product-card__cart cart-buy">
                                                    <div class="product-card__cart-quantity cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-sm btn__icon icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input
                                                                id=""
                                                                class="input-reset cart-quantity-input"
                                                                type="text"
                                                                placeholder="999"
                                                                value="1"
                                                                max="999"
                                                                data-mult="1"
                                                        >
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="btn__text">В КОРЗИНУ</span>
                                                    </button>
                                                    <div class="card-product-act">
                                                        <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#fill-more-horiz"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="card-product-act__list" data-card-product-act-content>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                <svg class="icon btn__icon icon-default">
                                                                    <use href="img/sprite.svg#bookmark-plus"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">В избранное</span>
                                                                <svg class="icon btn__icon icon-selected">
                                                                    <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                </svg>
                                                                <span class="btn__text text-selected">В избранном</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#barchart"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">Сравнить</span>
                                                                <span class="btn__text text-selected">В сравнении</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#inbox-in"></use>
                                                                </svg>
                                                                <span class="btn__text">В смету</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-product card-product-default" data-card-product>
                                        <div class="card-product-view">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-3.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-3.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 1;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-4.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-4.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-5.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-5.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-2.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-2.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                            <div class="card-product-sale-label">
                                                <span class="sale-label sale-label-red">20%</span>
                                                <span class="sale-label sale-label-yellow">Распродажа</span>
                                                <span class="sale-label sale-label-green">Хит</span>
                                            </div>
                                        </div>
                                        <div class="card-product-descr">
                                            <div class="card-product-descr__top">
                                                <div class="card-product-descr__info">
                                                    <span class="product-code"><span>2348958- 87</span></span>
                                                </div>
                                                <div class="card-product-descr__availability product-availability on-order">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#timer"></use>
                                                    </svg>
                                                    <span>Под заказ</span>
                                                </div>
                                                <div class="card-product-descr__title">
                                                    <a href="javascript:;">SE Unica Extend Бел Удлинитель 3 розетки 2К+З, кабель 1,5м</a>
                                                </div>
                                            </div>

                                            <div class="card-product-descr__bottom">
                                                <div class="card-product-descr__price">
                                                    <div class="card-product-descr__price-title">Цена за штуку</div>
                                                    <div class="card-product-descr__price-display">
                                                        <div class="card-product-descr__price-discount">
                                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                            <div class="card-product-descr__price-discount-label">10%</div>
                                                        </div>
                                                        <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                                    </div>
                                                    <div class="card-product-descr__price-bonus">
                                                        <span>+ 346,99</span>
                                                        <svg class="icon">
                                                            <use href="img/sprite.svg#fill-bonus"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="card-product-descr__cart product-card__cart cart-buy">
                                                    <div class="product-card__cart-quantity cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-sm btn__icon icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input
                                                                id=""
                                                                class="input-reset cart-quantity-input"
                                                                type="text"
                                                                placeholder="999"
                                                                value="1"
                                                                max="999"
                                                                data-mult="1"
                                                        >
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="btn__text">В КОРЗИНУ</span>
                                                    </button>
                                                    <div class="card-product-act">
                                                        <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#fill-more-horiz"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="card-product-act__list" data-card-product-act-content>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                <svg class="icon btn__icon icon-default">
                                                                    <use href="img/sprite.svg#bookmark-plus"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">В избранное</span>
                                                                <svg class="icon btn__icon icon-selected">
                                                                    <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                </svg>
                                                                <span class="btn__text text-selected">В избранном</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#barchart"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">Сравнить</span>
                                                                <span class="btn__text text-selected">В сравнении</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#inbox-in"></use>
                                                                </svg>
                                                                <span class="btn__text">В смету</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-product card-product-default" data-card-product>
                                        <div class="card-product-view">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-4.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-4.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 1;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-5.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-5.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                            <div class="card-product-sale-label">
                                                <span class="sale-label sale-label-red">20%</span>
                                                <span class="sale-label sale-label-yellow">Распродажа</span>
                                                <span class="sale-label sale-label-green">Хит</span>
                                            </div>
                                        </div>
                                        <div class="card-product-descr">
                                            <div class="card-product-descr__top">
                                                <div class="card-product-descr__info">
                                                    <span class="product-code"><span>Z241- 0008</span></span>
                                                </div>
                                                <div class="card-product-descr__availability product-availability in-stock">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#checkbox-rec"></use>
                                                    </svg>
                                                    <span>Товар в наличии</span>
                                                </div>
                                                <div class="card-product-descr__title">
                                                    <a href="javascript:;">SE Unica System+ Антрацит Блок розеточный (2к+з)+usb тип А</a>
                                                </div>
                                            </div>

                                            <div class="card-product-descr__bottom">
                                                <div class="card-product-descr__price">
                                                    <div class="card-product-descr__price-title">Цена за штуку</div>
                                                    <div class="card-product-descr__price-display">
                                                        <div class="card-product-descr__price-discount">
                                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                            <div class="card-product-descr__price-discount-label">10%</div>
                                                        </div>
                                                        <div class="card-product-descr__price-current">5 827,99 ₽</div>
                                                    </div>
                                                    <div class="card-product-descr__price-bonus">
                                                        <span>+ 346,99</span>
                                                        <svg class="icon">
                                                            <use href="img/sprite.svg#fill-bonus"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="card-product-descr__cart product-card__cart cart-buy">
                                                    <div class="product-card__cart-quantity cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-sm btn__icon icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input
                                                                id=""
                                                                class="input-reset cart-quantity-input"
                                                                type="text"
                                                                placeholder="999"
                                                                value="1"
                                                                max="999"
                                                                data-mult="1"
                                                        >
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="btn__text">В КОРЗИНУ</span>
                                                    </button>
                                                    <div class="card-product-act">
                                                        <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#fill-more-horiz"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="card-product-act__list" data-card-product-act-content>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                <svg class="icon btn__icon icon-default">
                                                                    <use href="img/sprite.svg#bookmark-plus"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">В избранное</span>
                                                                <svg class="icon btn__icon icon-selected">
                                                                    <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                </svg>
                                                                <span class="btn__text text-selected">В избранном</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#barchart"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">Сравнить</span>
                                                                <span class="btn__text text-selected">В сравнении</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#inbox-in"></use>
                                                                </svg>
                                                                <span class="btn__text">В смету</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-product card-product-default" data-card-product>
                                        <div class="card-product-view">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 1;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-2.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-2.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-3.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-3.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                            <div class="card-product-sale-label">
                                                <span class="sale-label sale-label-red">20%</span>
                                                <span class="sale-label sale-label-yellow">Распродажа</span>
                                                <span class="sale-label sale-label-green">Хит</span>
                                            </div>
                                        </div>
                                        <div class="card-product-descr">
                                            <div class="card-product-descr__top">
                                                <div class="card-product-descr__info">
                                                    <span class="product-code"><span>ZB3327018</span></span>
                                                    <span class="star-rating-wrapper star-rating-wrapper--noframe">
												<span class="star-rating">
													<span class="star-rating__container">
														<label>
															<svg class="icon">
																<use href="img/sprite.svg#fill-star"></use>
															</svg>
														</label>
													</span>
												</span>
												<span class="star-rating-value" data-value="4.5">4.5</span>
											</span>
                                                </div>
                                                <div class="card-product-descr__availability product-availability in-stock">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#checkbox-rec"></use>
                                                    </svg>
                                                    <span>Товар в наличии</span>
                                                </div>
                                                <div class="card-product-descr__title">
                                                    <a href="javascript:;">Haupa Отвёртка двухкомпонентная PH 2</a>
                                                </div>
                                            </div>

                                            <div class="card-product-descr__bottom">
                                                <div class="card-product-descr__price">
                                                    <div class="card-product-descr__price-title">Цена за штуку</div>
                                                    <div class="card-product-descr__price-display">
                                                        <div class="card-product-descr__price-discount">
                                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                            <div class="card-product-descr__price-discount-label">10%</div>
                                                        </div>
                                                        <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                                    </div>
                                                    <div class="card-product-descr__price-bonus">
                                                        <span>+ 346,99</span>
                                                        <svg class="icon">
                                                            <use href="img/sprite.svg#fill-bonus"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="card-product-descr__cart product-card__cart cart-buy">
                                                    <div class="product-card__cart-quantity cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-sm btn__icon icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input
                                                                id=""
                                                                class="input-reset cart-quantity-input"
                                                                type="text"
                                                                placeholder="999"
                                                                value="1"
                                                                max="999"
                                                                data-mult="1"
                                                        >
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="btn__text">В КОРЗИНУ</span>
                                                    </button>
                                                    <div class="card-product-act">
                                                        <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#fill-more-horiz"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="card-product-act__list" data-card-product-act-content>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                <svg class="icon btn__icon icon-default">
                                                                    <use href="img/sprite.svg#bookmark-plus"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">В избранное</span>
                                                                <svg class="icon btn__icon icon-selected">
                                                                    <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                </svg>
                                                                <span class="btn__text text-selected">В избранном</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#barchart"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">Сравнить</span>
                                                                <span class="btn__text text-selected">В сравнении</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#inbox-in"></use>
                                                                </svg>
                                                                <span class="btn__text">В смету</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-product card-product-default" data-card-product>
                                        <div class="card-product-view">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 1;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-2.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-2.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-3.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-3.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                            <div class="card-product-sale-label">
                                                <span class="sale-label sale-label-red">20%</span>
                                                <span class="sale-label sale-label-yellow">Распродажа</span>
                                                <span class="sale-label sale-label-green">Хит</span>
                                            </div>
                                        </div>
                                        <div class="card-product-descr">
                                            <div class="card-product-descr__top">
                                                <div class="card-product-descr__info">
                                                    <span class="product-code"><span>ZB3327018</span></span>
                                                    <span class="star-rating-wrapper star-rating-wrapper--noframe">
												<span class="star-rating">
													<span class="star-rating__container">
														<label>
															<svg class="icon">
																<use href="img/sprite.svg#fill-star"></use>
															</svg>
														</label>
													</span>
												</span>
												<span class="star-rating-value" data-value="4.5">4.5</span>
											</span>
                                                </div>
                                                <div class="card-product-descr__availability product-availability in-stock">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#checkbox-rec"></use>
                                                    </svg>
                                                    <span>Товар в наличии</span>
                                                </div>
                                                <div class="card-product-descr__title">
                                                    <a href="javascript:;">Haupa Отвёртка двухкомпонентная PH 2</a>
                                                </div>
                                            </div>

                                            <div class="card-product-descr__bottom">
                                                <div class="card-product-descr__price">
                                                    <div class="card-product-descr__price-title">Цена за штуку</div>
                                                    <div class="card-product-descr__price-display">
                                                        <div class="card-product-descr__price-discount">
                                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                            <div class="card-product-descr__price-discount-label">10%</div>
                                                        </div>
                                                        <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                                    </div>
                                                    <div class="card-product-descr__price-bonus">
                                                        <span>+ 346,99</span>
                                                        <svg class="icon">
                                                            <use href="img/sprite.svg#fill-bonus"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="card-product-descr__cart product-card__cart cart-buy">
                                                    <div class="product-card__cart-quantity cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-sm btn__icon icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input
                                                                id=""
                                                                class="input-reset cart-quantity-input"
                                                                type="text"
                                                                placeholder="999"
                                                                value="1"
                                                                max="999"
                                                                data-mult="1"
                                                        >
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="btn__text">В КОРЗИНУ</span>
                                                    </button>
                                                    <div class="card-product-act">
                                                        <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#fill-more-horiz"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="card-product-act__list" data-card-product-act-content>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                <svg class="icon btn__icon icon-default">
                                                                    <use href="img/sprite.svg#bookmark-plus"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">В избранное</span>
                                                                <svg class="icon btn__icon icon-selected">
                                                                    <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                </svg>
                                                                <span class="btn__text text-selected">В избранном</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#barchart"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">Сравнить</span>
                                                                <span class="btn__text text-selected">В сравнении</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#inbox-in"></use>
                                                                </svg>
                                                                <span class="btn__text">В смету</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-product card-product-default" data-card-product>
                                        <div class="card-product-view">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-2.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-2.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 1;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-3.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-3.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-4.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-4.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                            <div class="card-product-sale-label">
                                                <span class="sale-label sale-label-red">20%</span>
                                                <span class="sale-label sale-label-yellow">Распродажа</span>
                                                <span class="sale-label sale-label-green">Хит</span>
                                            </div>
                                        </div>
                                        <div class="card-product-descr">
                                            <div class="card-product-descr__top">
                                                <div class="card-product-descr__info">
                                                    <span class="product-code"><span>46- 312792P13</span></span>
                                                    <span class="star-rating-wrapper star-rating-wrapper--noframe">
												<span class="star-rating">
													<span class="star-rating__container">
														<label>
															<svg class="icon">
																<use href="img/sprite.svg#fill-star"></use>
															</svg>
														</label>
													</span>
												</span>
												<span class="star-rating-value" data-value="5.0">5.0</span>
											</span>
                                                </div>
                                                <div class="card-product-descr__availability product-availability on-order">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#timer"></use>
                                                    </svg>
                                                    <span>Под заказ</span>
                                                </div>
                                                <div class="card-product-descr__title">
                                                    <a href="javascript:;">Haupa Инструмент обжимной для конечных гильз 0,25-6</a>
                                                </div>
                                            </div>

                                            <div class="card-product-descr__bottom">
                                                <div class="card-product-descr__price">
                                                    <div class="card-product-descr__price-title">Цена за штуку</div>
                                                    <div class="card-product-descr__price-display">
                                                        <div class="card-product-descr__price-discount">
                                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                            <div class="card-product-descr__price-discount-label">10%</div>
                                                        </div>
                                                        <div class="card-product-descr__price-current">6 173,10 ₽</div>
                                                    </div>
                                                    <div class="card-product-descr__price-bonus">
                                                        <span>+ 346,99</span>
                                                        <svg class="icon">
                                                            <use href="img/sprite.svg#fill-bonus"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="card-product-descr__cart product-card__cart cart-buy">
                                                    <div class="product-card__cart-quantity cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-sm btn__icon icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input
                                                                id=""
                                                                class="input-reset cart-quantity-input"
                                                                type="text"
                                                                placeholder="999"
                                                                value="1"
                                                                max="999"
                                                                data-mult="1"
                                                        >
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="btn__text">В КОРЗИНУ</span>
                                                    </button>
                                                    <div class="card-product-act">
                                                        <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#fill-more-horiz"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="card-product-act__list" data-card-product-act-content>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                <svg class="icon btn__icon icon-default">
                                                                    <use href="img/sprite.svg#bookmark-plus"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">В избранное</span>
                                                                <svg class="icon btn__icon icon-selected">
                                                                    <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                </svg>
                                                                <span class="btn__text text-selected">В избранном</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#barchart"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">Сравнить</span>
                                                                <span class="btn__text text-selected">В сравнении</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#inbox-in"></use>
                                                                </svg>
                                                                <span class="btn__text">В смету</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-navigation">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gap-xl product-card-mobile-section">
            <div class="product-card-mobile-section-container">
                <div class="gap-lg">
                    <div class="h2">Вам может понадобиться</div>
                </div>

                <div class="catalog-extra-slider out-container-x">
                    <div class="gap-lg">
                        <div class="tag-bar swiper" data-tag-bar-slider>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <span class="btn__text">Все товары</span>
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#catalog-wiring-products"></use>
                                        </svg>
                                        <span class="btn__text">Розетки и выключатели</span>
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#catalog-low-voltage"></use>
                                        </svg>
                                        <span class="btn__text">Низковольтное оборудование</span>
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#catalog-shields-cabinets"></use>
                                        </svg>
                                        <span class="btn__text">Щиты, шкафы, боксы</span>
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#catalog-lighting"></use>
                                        </svg>
                                        <span class="btn__text">Светотехника</span>
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#catalog-tools"></use>
                                        </svg>
                                        <span class="btn__text">Инструменты и монтажные материалы</span>
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#catalog-ventilation"></use>
                                        </svg>
                                        <span class="btn__text">Системы вентиляции и обогрева</span>
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#catalog-grounding"></use>
                                        </svg>
                                        <span class="btn__text">Молниезащита и заземление</span>
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#catalog-power-devices"></use>
                                        </svg>
                                        <span class="btn__text">Элементы и устройства питания</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="basic-slider-wrap">
                        <div class="basic-slider card-product-default-wrap swiper" data-basic-slider>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card-product card-product-default" data-card-product>
                                        <div class="card-product-view">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 1;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-2.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-2.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-3.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-3.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                            <div class="card-product-sale-label">
                                                <span class="sale-label sale-label-red">20%</span>
                                                <span class="sale-label sale-label-yellow">Распродажа</span>
                                                <span class="sale-label sale-label-green">Хит</span>
                                            </div>
                                        </div>
                                        <div class="card-product-descr">
                                            <div class="card-product-descr__top">
                                                <div class="card-product-descr__info">
                                                    <span class="product-code"><span>ZB3327018</span></span>
                                                    <span class="star-rating-wrapper star-rating-wrapper--noframe">
												<span class="star-rating">
													<span class="star-rating__container">
														<label>
															<svg class="icon">
																<use href="img/sprite.svg#fill-star"></use>
															</svg>
														</label>
													</span>
												</span>
												<span class="star-rating-value" data-value="4.5">4.5</span>
											</span>
                                                </div>
                                                <div class="card-product-descr__availability product-availability in-stock">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#checkbox-rec"></use>
                                                    </svg>
                                                    <span>Товар в наличии</span>
                                                </div>
                                                <div class="card-product-descr__title">
                                                    <a href="javascript:;">Haupa Отвёртка двухкомпонентная PH 2</a>
                                                </div>
                                            </div>

                                            <div class="card-product-descr__bottom">
                                                <div class="card-product-descr__price">
                                                    <div class="card-product-descr__price-title">Цена за штуку</div>
                                                    <div class="card-product-descr__price-display">
                                                        <div class="card-product-descr__price-discount">
                                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                            <div class="card-product-descr__price-discount-label">10%</div>
                                                        </div>
                                                        <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                                    </div>
                                                    <div class="card-product-descr__price-bonus">
                                                        <span>+ 346,99</span>
                                                        <svg class="icon">
                                                            <use href="img/sprite.svg#fill-bonus"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="card-product-descr__cart product-card__cart cart-buy">
                                                    <div class="product-card__cart-quantity cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-sm btn__icon icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input
                                                                id=""
                                                                class="input-reset cart-quantity-input"
                                                                type="text"
                                                                placeholder="999"
                                                                value="1"
                                                                max="999"
                                                                data-mult="1"
                                                        >
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="btn__text">В КОРЗИНУ</span>
                                                    </button>
                                                    <div class="card-product-act">
                                                        <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#fill-more-horiz"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="card-product-act__list" data-card-product-act-content>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                <svg class="icon btn__icon icon-default">
                                                                    <use href="img/sprite.svg#bookmark-plus"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">В избранное</span>
                                                                <svg class="icon btn__icon icon-selected">
                                                                    <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                </svg>
                                                                <span class="btn__text text-selected">В избранном</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#barchart"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">Сравнить</span>
                                                                <span class="btn__text text-selected">В сравнении</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#inbox-in"></use>
                                                                </svg>
                                                                <span class="btn__text">В смету</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-product card-product-default" data-card-product>
                                        <div class="card-product-view">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-2.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-2.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 1;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-3.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-3.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-4.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-4.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                            <div class="card-product-sale-label">
                                                <span class="sale-label sale-label-red">20%</span>
                                                <span class="sale-label sale-label-yellow">Распродажа</span>
                                                <span class="sale-label sale-label-green">Хит</span>
                                            </div>
                                        </div>
                                        <div class="card-product-descr">
                                            <div class="card-product-descr__top">
                                                <div class="card-product-descr__info">
                                                    <span class="product-code"><span>46- 312792P13</span></span>
                                                    <span class="star-rating-wrapper star-rating-wrapper--noframe">
												<span class="star-rating">
													<span class="star-rating__container">
														<label>
															<svg class="icon">
																<use href="img/sprite.svg#fill-star"></use>
															</svg>
														</label>
													</span>
												</span>
												<span class="star-rating-value" data-value="5.0">5.0</span>
											</span>
                                                </div>
                                                <div class="card-product-descr__availability product-availability on-order">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#timer"></use>
                                                    </svg>
                                                    <span>Под заказ</span>
                                                </div>
                                                <div class="card-product-descr__title">
                                                    <a href="javascript:;">Haupa Инструмент обжимной для конечных гильз 0,25-6</a>
                                                </div>
                                            </div>

                                            <div class="card-product-descr__bottom">
                                                <div class="card-product-descr__price">
                                                    <div class="card-product-descr__price-title">Цена за штуку</div>
                                                    <div class="card-product-descr__price-display">
                                                        <div class="card-product-descr__price-discount">
                                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                            <div class="card-product-descr__price-discount-label">10%</div>
                                                        </div>
                                                        <div class="card-product-descr__price-current">6 173,10 ₽</div>
                                                    </div>
                                                    <div class="card-product-descr__price-bonus">
                                                        <span>+ 346,99</span>
                                                        <svg class="icon">
                                                            <use href="img/sprite.svg#fill-bonus"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="card-product-descr__cart product-card__cart cart-buy">
                                                    <div class="product-card__cart-quantity cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-sm btn__icon icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input
                                                                id=""
                                                                class="input-reset cart-quantity-input"
                                                                type="text"
                                                                placeholder="999"
                                                                value="1"
                                                                max="999"
                                                                data-mult="1"
                                                        >
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="btn__text">В КОРЗИНУ</span>
                                                    </button>
                                                    <div class="card-product-act">
                                                        <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#fill-more-horiz"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="card-product-act__list" data-card-product-act-content>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                <svg class="icon btn__icon icon-default">
                                                                    <use href="img/sprite.svg#bookmark-plus"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">В избранное</span>
                                                                <svg class="icon btn__icon icon-selected">
                                                                    <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                </svg>
                                                                <span class="btn__text text-selected">В избранном</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#barchart"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">Сравнить</span>
                                                                <span class="btn__text text-selected">В сравнении</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#inbox-in"></use>
                                                                </svg>
                                                                <span class="btn__text">В смету</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-product card-product-default" data-card-product>
                                        <div class="card-product-view">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-3.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-3.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 1;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-4.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-4.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-5.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-5.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-2.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-2.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                            <div class="card-product-sale-label">
                                                <span class="sale-label sale-label-red">20%</span>
                                                <span class="sale-label sale-label-yellow">Распродажа</span>
                                                <span class="sale-label sale-label-green">Хит</span>
                                            </div>
                                        </div>
                                        <div class="card-product-descr">
                                            <div class="card-product-descr__top">
                                                <div class="card-product-descr__info">
                                                    <span class="product-code"><span>2348958- 87</span></span>
                                                </div>
                                                <div class="card-product-descr__availability product-availability on-order">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#timer"></use>
                                                    </svg>
                                                    <span>Под заказ</span>
                                                </div>
                                                <div class="card-product-descr__title">
                                                    <a href="javascript:;">SE Unica Extend Бел Удлинитель 3 розетки 2К+З, кабель 1,5м</a>
                                                </div>
                                            </div>

                                            <div class="card-product-descr__bottom">
                                                <div class="card-product-descr__price">
                                                    <div class="card-product-descr__price-title">Цена за штуку</div>
                                                    <div class="card-product-descr__price-display">
                                                        <div class="card-product-descr__price-discount">
                                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                            <div class="card-product-descr__price-discount-label">10%</div>
                                                        </div>
                                                        <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                                    </div>
                                                    <div class="card-product-descr__price-bonus">
                                                        <span>+ 346,99</span>
                                                        <svg class="icon">
                                                            <use href="img/sprite.svg#fill-bonus"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="card-product-descr__cart product-card__cart cart-buy">
                                                    <div class="product-card__cart-quantity cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-sm btn__icon icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input
                                                                id=""
                                                                class="input-reset cart-quantity-input"
                                                                type="text"
                                                                placeholder="999"
                                                                value="1"
                                                                max="999"
                                                                data-mult="1"
                                                        >
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="btn__text">В КОРЗИНУ</span>
                                                    </button>
                                                    <div class="card-product-act">
                                                        <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#fill-more-horiz"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="card-product-act__list" data-card-product-act-content>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                <svg class="icon btn__icon icon-default">
                                                                    <use href="img/sprite.svg#bookmark-plus"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">В избранное</span>
                                                                <svg class="icon btn__icon icon-selected">
                                                                    <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                </svg>
                                                                <span class="btn__text text-selected">В избранном</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#barchart"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">Сравнить</span>
                                                                <span class="btn__text text-selected">В сравнении</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#inbox-in"></use>
                                                                </svg>
                                                                <span class="btn__text">В смету</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-product card-product-default" data-card-product>
                                        <div class="card-product-view">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-4.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-4.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 1;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-5.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-5.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                            <div class="card-product-sale-label">
                                                <span class="sale-label sale-label-red">20%</span>
                                                <span class="sale-label sale-label-yellow">Распродажа</span>
                                                <span class="sale-label sale-label-green">Хит</span>
                                            </div>
                                        </div>
                                        <div class="card-product-descr">
                                            <div class="card-product-descr__top">
                                                <div class="card-product-descr__info">
                                                    <span class="product-code"><span>Z241- 0008</span></span>
                                                </div>
                                                <div class="card-product-descr__availability product-availability in-stock">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#checkbox-rec"></use>
                                                    </svg>
                                                    <span>Товар в наличии</span>
                                                </div>
                                                <div class="card-product-descr__title">
                                                    <a href="javascript:;">SE Unica System+ Антрацит Блок розеточный (2к+з)+usb тип А</a>
                                                </div>
                                            </div>

                                            <div class="card-product-descr__bottom">
                                                <div class="card-product-descr__price">
                                                    <div class="card-product-descr__price-title">Цена за штуку</div>
                                                    <div class="card-product-descr__price-display">
                                                        <div class="card-product-descr__price-discount">
                                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                            <div class="card-product-descr__price-discount-label">10%</div>
                                                        </div>
                                                        <div class="card-product-descr__price-current">5 827,99 ₽</div>
                                                    </div>
                                                    <div class="card-product-descr__price-bonus">
                                                        <span>+ 346,99</span>
                                                        <svg class="icon">
                                                            <use href="img/sprite.svg#fill-bonus"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="card-product-descr__cart product-card__cart cart-buy">
                                                    <div class="product-card__cart-quantity cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-sm btn__icon icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input
                                                                id=""
                                                                class="input-reset cart-quantity-input"
                                                                type="text"
                                                                placeholder="999"
                                                                value="1"
                                                                max="999"
                                                                data-mult="1"
                                                        >
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="btn__text">В КОРЗИНУ</span>
                                                    </button>
                                                    <div class="card-product-act">
                                                        <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#fill-more-horiz"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="card-product-act__list" data-card-product-act-content>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                <svg class="icon btn__icon icon-default">
                                                                    <use href="img/sprite.svg#bookmark-plus"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">В избранное</span>
                                                                <svg class="icon btn__icon icon-selected">
                                                                    <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                </svg>
                                                                <span class="btn__text text-selected">В избранном</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#barchart"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">Сравнить</span>
                                                                <span class="btn__text text-selected">В сравнении</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#inbox-in"></use>
                                                                </svg>
                                                                <span class="btn__text">В смету</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-product card-product-default" data-card-product>
                                        <div class="card-product-view">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 1;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-2.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-2.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-3.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-3.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                            <div class="card-product-sale-label">
                                                <span class="sale-label sale-label-red">20%</span>
                                                <span class="sale-label sale-label-yellow">Распродажа</span>
                                                <span class="sale-label sale-label-green">Хит</span>
                                            </div>
                                        </div>
                                        <div class="card-product-descr">
                                            <div class="card-product-descr__top">
                                                <div class="card-product-descr__info">
                                                    <span class="product-code"><span>ZB3327018</span></span>
                                                    <span class="star-rating-wrapper star-rating-wrapper--noframe">
												<span class="star-rating">
													<span class="star-rating__container">
														<label>
															<svg class="icon">
																<use href="img/sprite.svg#fill-star"></use>
															</svg>
														</label>
													</span>
												</span>
												<span class="star-rating-value" data-value="4.5">4.5</span>
											</span>
                                                </div>
                                                <div class="card-product-descr__availability product-availability in-stock">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#checkbox-rec"></use>
                                                    </svg>
                                                    <span>Товар в наличии</span>
                                                </div>
                                                <div class="card-product-descr__title">
                                                    <a href="javascript:;">Haupa Отвёртка двухкомпонентная PH 2</a>
                                                </div>
                                            </div>

                                            <div class="card-product-descr__bottom">
                                                <div class="card-product-descr__price">
                                                    <div class="card-product-descr__price-title">Цена за штуку</div>
                                                    <div class="card-product-descr__price-display">
                                                        <div class="card-product-descr__price-discount">
                                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                            <div class="card-product-descr__price-discount-label">10%</div>
                                                        </div>
                                                        <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                                    </div>
                                                    <div class="card-product-descr__price-bonus">
                                                        <span>+ 346,99</span>
                                                        <svg class="icon">
                                                            <use href="img/sprite.svg#fill-bonus"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="card-product-descr__cart product-card__cart cart-buy">
                                                    <div class="product-card__cart-quantity cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-sm btn__icon icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input
                                                                id=""
                                                                class="input-reset cart-quantity-input"
                                                                type="text"
                                                                placeholder="999"
                                                                value="1"
                                                                max="999"
                                                                data-mult="1"
                                                        >
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="btn__text">В КОРЗИНУ</span>
                                                    </button>
                                                    <div class="card-product-act">
                                                        <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#fill-more-horiz"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="card-product-act__list" data-card-product-act-content>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                <svg class="icon btn__icon icon-default">
                                                                    <use href="img/sprite.svg#bookmark-plus"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">В избранное</span>
                                                                <svg class="icon btn__icon icon-selected">
                                                                    <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                </svg>
                                                                <span class="btn__text text-selected">В избранном</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#barchart"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">Сравнить</span>
                                                                <span class="btn__text text-selected">В сравнении</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#inbox-in"></use>
                                                                </svg>
                                                                <span class="btn__text">В смету</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-product card-product-default" data-card-product>
                                        <div class="card-product-view">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 1;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-2.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-2.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-3.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-3.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                            <div class="card-product-sale-label">
                                                <span class="sale-label sale-label-red">20%</span>
                                                <span class="sale-label sale-label-yellow">Распродажа</span>
                                                <span class="sale-label sale-label-green">Хит</span>
                                            </div>
                                        </div>
                                        <div class="card-product-descr">
                                            <div class="card-product-descr__top">
                                                <div class="card-product-descr__info">
                                                    <span class="product-code"><span>ZB3327018</span></span>
                                                    <span class="star-rating-wrapper star-rating-wrapper--noframe">
												<span class="star-rating">
													<span class="star-rating__container">
														<label>
															<svg class="icon">
																<use href="img/sprite.svg#fill-star"></use>
															</svg>
														</label>
													</span>
												</span>
												<span class="star-rating-value" data-value="4.5">4.5</span>
											</span>
                                                </div>
                                                <div class="card-product-descr__availability product-availability in-stock">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#checkbox-rec"></use>
                                                    </svg>
                                                    <span>Товар в наличии</span>
                                                </div>
                                                <div class="card-product-descr__title">
                                                    <a href="javascript:;">Haupa Отвёртка двухкомпонентная PH 2</a>
                                                </div>
                                            </div>

                                            <div class="card-product-descr__bottom">
                                                <div class="card-product-descr__price">
                                                    <div class="card-product-descr__price-title">Цена за штуку</div>
                                                    <div class="card-product-descr__price-display">
                                                        <div class="card-product-descr__price-discount">
                                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                            <div class="card-product-descr__price-discount-label">10%</div>
                                                        </div>
                                                        <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                                    </div>
                                                    <div class="card-product-descr__price-bonus">
                                                        <span>+ 346,99</span>
                                                        <svg class="icon">
                                                            <use href="img/sprite.svg#fill-bonus"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="card-product-descr__cart product-card__cart cart-buy">
                                                    <div class="product-card__cart-quantity cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-sm btn__icon icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input
                                                                id=""
                                                                class="input-reset cart-quantity-input"
                                                                type="text"
                                                                placeholder="999"
                                                                value="1"
                                                                max="999"
                                                                data-mult="1"
                                                        >
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="btn__text">В КОРЗИНУ</span>
                                                    </button>
                                                    <div class="card-product-act">
                                                        <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#fill-more-horiz"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="card-product-act__list" data-card-product-act-content>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                <svg class="icon btn__icon icon-default">
                                                                    <use href="img/sprite.svg#bookmark-plus"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">В избранное</span>
                                                                <svg class="icon btn__icon icon-selected">
                                                                    <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                </svg>
                                                                <span class="btn__text text-selected">В избранном</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#barchart"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">Сравнить</span>
                                                                <span class="btn__text text-selected">В сравнении</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#inbox-in"></use>
                                                                </svg>
                                                                <span class="btn__text">В смету</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-product card-product-default" data-card-product>
                                        <div class="card-product-view">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-2.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-2.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 1;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-3.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-3.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <picture>
                                                        <source srcset="img/product-4.webp" type="image/webp">
                                                        <img
                                                                loading="lazy"
                                                                src="img/product-4.png"
                                                                class="mini-slider__img"
                                                                width="208"
                                                                height="208"
                                                                style="opacity: 0;"
                                                                alt="Изображение блока"
                                                        >
                                                    </picture>
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                            <div class="card-product-sale-label">
                                                <span class="sale-label sale-label-red">20%</span>
                                                <span class="sale-label sale-label-yellow">Распродажа</span>
                                                <span class="sale-label sale-label-green">Хит</span>
                                            </div>
                                        </div>
                                        <div class="card-product-descr">
                                            <div class="card-product-descr__top">
                                                <div class="card-product-descr__info">
                                                    <span class="product-code"><span>46- 312792P13</span></span>
                                                    <span class="star-rating-wrapper star-rating-wrapper--noframe">
												<span class="star-rating">
													<span class="star-rating__container">
														<label>
															<svg class="icon">
																<use href="img/sprite.svg#fill-star"></use>
															</svg>
														</label>
													</span>
												</span>
												<span class="star-rating-value" data-value="5.0">5.0</span>
											</span>
                                                </div>
                                                <div class="card-product-descr__availability product-availability on-order">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#timer"></use>
                                                    </svg>
                                                    <span>Под заказ</span>
                                                </div>
                                                <div class="card-product-descr__title">
                                                    <a href="javascript:;">Haupa Инструмент обжимной для конечных гильз 0,25-6</a>
                                                </div>
                                            </div>

                                            <div class="card-product-descr__bottom">
                                                <div class="card-product-descr__price">
                                                    <div class="card-product-descr__price-title">Цена за штуку</div>
                                                    <div class="card-product-descr__price-display">
                                                        <div class="card-product-descr__price-discount">
                                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                            <div class="card-product-descr__price-discount-label">10%</div>
                                                        </div>
                                                        <div class="card-product-descr__price-current">6 173,10 ₽</div>
                                                    </div>
                                                    <div class="card-product-descr__price-bonus">
                                                        <span>+ 346,99</span>
                                                        <svg class="icon">
                                                            <use href="img/sprite.svg#fill-bonus"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="card-product-descr__cart product-card__cart cart-buy">
                                                    <div class="product-card__cart-quantity cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-sm btn__icon icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input
                                                                id=""
                                                                class="input-reset cart-quantity-input"
                                                                type="text"
                                                                placeholder="999"
                                                                value="1"
                                                                max="999"
                                                                data-mult="1"
                                                        >
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="btn__text">В КОРЗИНУ</span>
                                                    </button>
                                                    <div class="card-product-act">
                                                        <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#fill-more-horiz"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="card-product-act__list" data-card-product-act-content>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                <svg class="icon btn__icon icon-default">
                                                                    <use href="img/sprite.svg#bookmark-plus"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">В избранное</span>
                                                                <svg class="icon btn__icon icon-selected">
                                                                    <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                </svg>
                                                                <span class="btn__text text-selected">В избранном</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#barchart"></use>
                                                                </svg>
                                                                <span class="btn__text text-default">Сравнить</span>
                                                                <span class="btn__text text-selected">В сравнении</span>
                                                            </button>
                                                            <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                <svg class="icon btn__icon">
                                                                    <use href="img/sprite.svg#inbox-in"></use>
                                                                </svg>
                                                                <span class="btn__text">В смету</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-navigation">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gap-xl">
            <div class="amp-about">
                <div class="gap-sm">
                    <div class="h4">Интернет-магазин электротоваров и электрооборудования Амперкин.ру</div>
                </div>
                <div class="spoiler-wrapper">
                    <div
                            class="spoiler"
                            data-spoiler
                            data-collapsed-height="136"
                            data-spoiler-more="Показать полностью"
                    >
                        <div class="spoiler-content">
                            <p>Интернет-магазин электрики Амперкин.ру предлагает широкий ассортимент электрооборудования, расходных материалов и инструментов для монтажа и обслуживания силовых и слаботочных электрических сетей жилых, общественных, производственных зданий и сооружений.</p>
                            <p>В разделах нашего каталога представлены различные категории электротоваров:</p>
                            <ul>
                                <li>кабельная продукция — силовые, греющие, слаботочные кабели и аксессуары;</li>
                                <li>электротехническое оборудование — трансформаторы, автоматические выключатели и УЗО;</li>
                                <li>измерительные инструменты и аппаратура — амперметры, вольтметры, электрические счетчики;</li>
                                <li>монтажные изделия — шкафы, боксы, лотки, каналы;</li>
                                <li>светотехнические изделия — светильники, прожекторы и лампы;</li>
                                <li>электроустановочное оборудование — розетки и выключатели, датчики движения, присутствия и электрические звонки.</li>
                            </ul>
                            <p>В магазине Амперкин.ру вы можно приобрести электрику, создав заказ на сайте или позвонив менеджерам компании по телефону +7 (495) 118-37-70.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="gap-xl">
            <div class="seo-block">
                <div class="seo-block__bottom">
                    <div class="seo-block__bottom-item">
                        <div class="seo-block__bottom-view">
                            <svg class="icon">
                                <use href="img/sprite.svg#menu-color-shopping-cart-2"></use>
                            </svg>
                        </div>
                        <div class="seo-block__bottom-descr">
                            <b>Широкий ассортимент</b> <br>
                            электрооборудования, расходных материалов и инструментов
                        </div>
                    </div>
                    <div class="seo-block__bottom-item">
                        <div class="seo-block__bottom-view">
                            <svg class="icon">
                                <use href="img/sprite.svg#menu-color-box-2"></use>
                            </svg>
                        </div>
                        <div class="seo-block__bottom-descr">
                            <b>Быстрая и удобная доставка</b> <br>
                            товаров в удобное время и место с понедельника по пятницу
                        </div>
                    </div>
                    <div class="seo-block__bottom-item">
                        <div class="seo-block__bottom-view">
                            <svg class="icon">
                                <use href="img/sprite.svg#menu-color-layers"></use>
                            </svg>
                        </div>
                        <div class="seo-block__bottom-descr">
                            <b>Многоуровневая программа лояльности</b> <br>
                            для постоянных клиентов
                        </div>
                    </div>
                    <div class="seo-block__bottom-item">
                        <div class="seo-block__bottom-view">
                            <svg class="icon">
                                <use href="img/sprite.svg#menu-color-repeat"></use>
                            </svg>
                        </div>
                        <div class="seo-block__bottom-descr">
                            <b>Простой возврат товаров</b> <br>
                            которые не пригодились в течение гарантийного срока
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>