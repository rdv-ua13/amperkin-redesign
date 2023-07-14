<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="gap-xl">
	<div class="container">
		<div class="gap-xl content-page delivery">
			<div class="cp-grid">
				<div class="cp-sidebar">
					<div class="cp-sidebar-item cp-sidebar-top">
						<div class="cp-sidebar-item__heading">
							<svg class="icon icon-sm">
								<use href="img/sprite.svg#user-square"></use>
							</svg>
							<div class="cp-sidebar-item__title h5">Покупателям</div>
						</div>
						<ul class="list-reset cp-sidebar-item__list">
							<li><a class="cp-sidebar-item__link active" href="javascript:;">Доставка</a></li>
							<li><a class="cp-sidebar-item__link" href="javascript:;">Оплата</a></li>
							<li><a class="cp-sidebar-item__link" href="javascript:;">Гарантия и возврат</a></li>
							<li><a class="cp-sidebar-item__link" href="javascript:;">Юридическим лицам</a></li>
							<li><a class="cp-sidebar-item__link" href="javascript:;">Физическим лицам</a></li>
							<li><a class="cp-sidebar-item__link" href="javascript:;">Акции</a></li>
							<li><a class="cp-sidebar-item__link" href="javascript:;">Распродажа</a></li>
							<li><a class="cp-sidebar-item__link" href="javascript:;">Контакты</a></li>
						</ul>
					</div>
					<div class="cp-sidebar-item">
						<div class="cp-sidebar-item__heading">
							<svg class="icon icon-sm">
								<use href="img/sprite.svg#info"></use>
							</svg>
							<div class="cp-sidebar-item__title h5">Информация</div>
						</div>
						<ul class="list-reset cp-sidebar-item__list">
							<li><a class="cp-sidebar-item__link" href="javascript:;">Справочник электрика</a></li>
							<li><a class="cp-sidebar-item__link" href="javascript:;">Все бренды</a></li>
							<li><a class="cp-sidebar-item__link" href="javascript:;">Вопросы и ответы</a></li>
							<li><a class="cp-sidebar-item__link" href="javascript:;">Новости</a></li>
							<li><a class="cp-sidebar-item__link" href="javascript:;">Статьи</a></li>
						</ul>
					</div>
				</div>

				<div class="cp-content">
					<div class="gap-xs">
						<?/* Главная - Текущая страница */?>
						<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/breadcrumbs.php"); ?>
					</div>
					<div class="gap-md">
						<div class="catalog-heading">
							<div class="h1 catalog-heading__title">Доставка</div>
						</div>
					</div>
                    <div class="gap-xl">
                        <div class="gap-sm-plus catalog-extra-slider out-container-x content-wrapper-mobile-section-row">
                            <div class="basic-tabs">
                                <div class="basic-tabs-container swiper" data-tab="tab-delivery">
                                    <div class="basic-tabs-wrapper swiper-wrapper">
                                        <div class="basic-tabs-item swiper-slide">
                                            <button class="btn-reset btn btn-light basic-tabs-trigger selected" type="button" data-target="0">
                                                <span class="btn__text basic-tabs-trigger__text">по москве и области</span>
                                            </button>
                                        </div>
                                        <div class="basic-tabs-item swiper-slide">
                                            <button class="btn-reset btn btn-light basic-tabs-trigger" type="button" data-target="1">
                                                <span class="btn__text basic-tabs-trigger__text">самовывоз</span>
                                            </button>
                                        </div>
                                        <div class="basic-tabs-item swiper-slide">
                                            <button class="btn-reset btn btn-light basic-tabs-trigger" type="button" data-target="2">
                                                <span class="btn__text basic-tabs-trigger__text">доставка в регионы</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="basic-tabs-content" data-tab-content="tab-delivery">
                            <div class="basic-tabs-content__panel active" data-id="0">
                                <div class="gap-lg">
                                    <div class="gap-sm-plus content-wrapper-mobile-section">
                                        <div class="cp-item content-wrapper-mobile-section-container">
                                            <div class="gap-sm-plus">
                                                <div class="h4">Доставка</div>
                                            </div>
                                            <div class="gap-sm-plus">
                                                <div>Привезем в удобное время и место с понедельника по пятницу</div>
                                            </div>
                                            <div class="gap-sm-plus">
                                                <div class="cp-item-row">
                                                    <div class="cp-item-row__title">Стоимость доставки по Москве:</div>
                                                    <div>560 рублей</div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="cp-item-row">
                                                    <div class="cp-item-row__title">Стоимость доставки Московская область:</div>
                                                    <div>790 рублей</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gap-sm-plus content-wrapper-mobile-section">
                                        <div class="cp-item content-wrapper-mobile-section-container">
                                            <div class="gap-sm-plus">
                                                <div class="h4">Самовывоз из магазина у метро «Октябрьское поле» или МЦК «Панфиловская»</div>
                                            </div>
                                            <div class="gap-sm-plus">
                                                <div>После подтверждения менеджером наличиям. «Октябрьское поле» или МЦК «Панфиловская»ул. Маршала Рыбалко, 10</div>
                                            </div>
                                            <div class="gap-sm-plus">
                                                <div class="cp-item-row">
                                                    <div class="cp-item-row__title">Стоимость:</div>
                                                    <div>Бесплатно</div>
                                                </div>
                                            </div>
                                            <div class="gap-sm-plus">
                                                <div class="cp-item-row">
                                                    <div class="cp-item-row__title">График работы:</div>
                                                    <div>
                                                        <div>ПН-ПТ с 09:00 до 19:00</div>
                                                        <div>СБ-ВС с 09:00 до 19:00 (<span class="text-secondary-color">только на выдачу оплаченных заказов</span>)</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="contacts-map">
                                                    <div class="contacts-map-content"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gap-lg">
                                    <div class="gap-lg content-wrapper-mobile-section-row">
                                        <div class="h2">Условия доставки</div>
                                    </div>
                                    <div class="content-wrapper-mobile-section">
                                        <div class="cp-item content-wrapper-mobile-section-container">
                                            <div class="gap-sm-plus">
                                                <div class="h4">Доставка до 3 дней</div>
                                            </div>
                                            <div class="gap-sm-plus">
                                                <div>Заказ считается принятым и оформленным только после подтверждения заказа менеджером по телефону</div>
                                            </div>
                                            <div class="">
                                                <div class="cp-item-row">
                                                    <div class="cp-item-row__title">График доставки:</div>
                                                    <div>ПН-ПТ с 09:00 до 19:00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="gap-lg content-wrapper-mobile-section-row">
                                        <div class="h2">Частые вопросы</div>
                                    </div>
                                    <div class="">
                                        <div class="delivery-faq">faq</div>
                                    </div>
                                </div>
                            </div>
                            <div class="basic-tabs-content__panel" data-id="1">
                                <div class="order-step__data">
                                    <div class="order-step-row order-step__notice">
                                        <svg class="icon icon-sm">
                                            <use href="img/sprite.svg#user-square"></use>
                                        </svg>
                                        <span>
                                                        Не хотите каждый раз заново заполнять данные?
                                                        <a class="link-red" href="javascript:;">Войдите в профиль</a>
                                                    </span>
                                    </div>

                                    <div class="order-step-row">
                                        <div class="titled-input titled-input-label">
                                            <div class="input-title">Номер телефона для связи</div>
                                            <div class="input-wrapper">
                                                <input
                                                        class="input-reset input isPhone"
                                                        type="tel"
                                                        name=""
                                                        value=""
                                                        placeholder="+7 (999) 999-99-99"
                                                        autocomplete="off"
                                                >
                                            </div>
                                        </div>
                                        <div class="titled-input titled-input-label">
                                            <div class="input-title">Электронная почта</div>
                                            <div class="input-wrapper">
                                                <input
                                                        class="input-reset input"
                                                        type="email"
                                                        name=""
                                                        value=""
                                                        placeholder="mail@mail.ru"
                                                        autocomplete="off"
                                                >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="order-step-row">
                                        <div class="titled-input titled-input-label">
                                            <div class="input-title">Ваше имя</div>
                                            <div class="input-wrapper">
                                                <input
                                                        class="input-reset input"
                                                        type="text"
                                                        name=""
                                                        value=""
                                                        placeholder="Ваше имя"
                                                        autocomplete="off"
                                                >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="order-step-row" data-org-container>
                                        <div class="titled-input titled-input-label">
                                            <div class="input-title">ИНН организации</div>
                                            <div class="input-wrapper">
                                                <input
                                                        class="input-reset input"
                                                        type="text"
                                                        name=""
                                                        value=""
                                                        placeholder="Найти по ИНН"
                                                        autocomplete="off"
                                                        data-org-trigger
                                                >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="order-step-row">
                                        <div class="titled-input">
                                            <div class="input-title semi-bold">Сфера деятельности</div>
                                            <div class="input-wrapper input-wrapper-radio">
                                                            <span class="custom-radio">
                                                                <input
                                                                        id="order-activity-entity-one"
                                                                        class="custom-radio__input"
                                                                        type="checkbox"
                                                                        name="orderActivityEntity"
                                                                >
                                                                <label for="order-activity-entity-one" class="custom-radio__label-for">OEM партнер</label>
                                                            </span>
                                                <span class="custom-radio">
                                                                <input
                                                                        id="order-activity-entity-two"
                                                                        class="custom-radio__input"
                                                                        type="checkbox"
                                                                        name="orderActivityEntity"
                                                                >
                                                                <label for="order-activity-entity-two" class="custom-radio__label-for">Эксплуатация</label>
                                                            </span>
                                                <span class="custom-radio">
                                                                <input
                                                                        id="order-activity-entity-three"
                                                                        class="custom-radio__input"
                                                                        type="checkbox"
                                                                        name="orderActivityEntity"
                                                                >
                                                                <label for="order-activity-entity-three" class="custom-radio__label-for">Электромонтажник</label>
                                                            </span>
                                                <span class="custom-radio">
                                                                <input
                                                                        id="order-activity-entity-four"
                                                                        class="custom-radio__input"
                                                                        type="checkbox"
                                                                        name="orderActivityEntity"
                                                                >
                                                                <label for="order-activity-entity-four" class="custom-radio__label-for">Дизайнер</label>
                                                            </span>
                                                <span class="custom-radio">
                                                                <input
                                                                        id="order-activity-entity-five"
                                                                        class="custom-radio__input"
                                                                        type="checkbox"
                                                                        name="orderActivityEntity"
                                                                >
                                                                <label for="order-activity-entity-five" class="custom-radio__label-for">Щитовик</label>
                                                            </span>
                                                <span class="custom-radio">
                                                                <input
                                                                        id="order-activity-entity-six"
                                                                        class="custom-radio__input"
                                                                        type="checkbox"
                                                                        name="orderActivityEntity"
                                                                >
                                                                <label for="order-activity-entity-six" class="custom-radio__label-for">СМО (Строительно-монтажная организация)</label>
                                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="basic-tabs-content__panel" data-id="2">
                                <div class="order-step__data">
                                    <div class="order-step-row order-step__notice">
                                        <svg class="icon icon-sm">
                                            <use href="img/sprite.svg#user-square"></use>
                                        </svg>
                                        <span>
                                                        Не хотите каждый раз заново заполнять данные?
                                                        <a class="link-red" href="javascript:;">Войдите в профиль</a>
                                                    </span>
                                    </div>

                                    <div class="order-step-row">
                                        <div class="titled-input titled-input-label">
                                            <div class="input-title">Номер телефона для связи</div>
                                            <div class="input-wrapper">
                                                <input
                                                        class="input-reset input isPhone"
                                                        type="tel"
                                                        name=""
                                                        value=""
                                                        placeholder="+7 (999) 999-99-99"
                                                        autocomplete="off"
                                                >
                                            </div>
                                        </div>
                                        <div class="titled-input titled-input-label">
                                            <div class="input-title">Электронная почта</div>
                                            <div class="input-wrapper">
                                                <input
                                                        class="input-reset input"
                                                        type="email"
                                                        name=""
                                                        value=""
                                                        placeholder="mail@mail.ru"
                                                        autocomplete="off"
                                                >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="order-step-row">
                                        <div class="titled-input titled-input-label">
                                            <div class="input-title">Ваше имя</div>
                                            <div class="input-wrapper">
                                                <input
                                                        class="input-reset input"
                                                        type="text"
                                                        name=""
                                                        value=""
                                                        placeholder="Ваше имя"
                                                        autocomplete="off"
                                                >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="order-step-row" data-org-container>
                                        <div class="titled-input titled-input-label">
                                            <div class="input-title">ИНН организации</div>
                                            <div class="input-wrapper">
                                                <input
                                                        class="input-reset input"
                                                        type="text"
                                                        name=""
                                                        value=""
                                                        placeholder="Найти по ИНН"
                                                        autocomplete="off"
                                                        data-org-trigger
                                                >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="order-step-row">
                                        <div class="titled-input">
                                            <div class="input-title semi-bold">Сфера деятельности</div>
                                            <div class="input-wrapper input-wrapper-radio">
                                                            <span class="custom-radio">
                                                                <input
                                                                        id="order-activity-private-entrepreneur-one"
                                                                        class="custom-radio__input"
                                                                        type="checkbox"
                                                                        name="orderActivityPrivateEntrepreneur"
                                                                >
                                                                <label for="order-activity-private-entrepreneur-one" class="custom-radio__label-for">OEM партнер</label>
                                                            </span>
                                                <span class="custom-radio">
                                                                <input
                                                                        id="order-activity-private-entrepreneur-two"
                                                                        class="custom-radio__input"
                                                                        type="checkbox"
                                                                        name="orderActivityPrivateEntrepreneur"
                                                                >
                                                                <label for="order-activity-private-entrepreneur-two" class="custom-radio__label-for">Эксплуатация</label>
                                                            </span>
                                                <span class="custom-radio">
                                                                <input
                                                                        id="order-activity-private-entrepreneur-three"
                                                                        class="custom-radio__input"
                                                                        type="checkbox"
                                                                        name="orderActivityPrivateEntrepreneur"
                                                                >
                                                                <label for="order-activity-private-entrepreneur-three" class="custom-radio__label-for">Электромонтажник</label>
                                                            </span>
                                                <span class="custom-radio">
                                                                <input
                                                                        id="order-activity-private-entrepreneur-four"
                                                                        class="custom-radio__input"
                                                                        type="checkbox"
                                                                        name="orderActivityPrivateEntrepreneur"
                                                                >
                                                                <label for="order-activity-private-entrepreneur-four" class="custom-radio__label-for">Дизайнер</label>
                                                            </span>
                                                <span class="custom-radio">
                                                                <input
                                                                        id="order-activity-private-entrepreneur-five"
                                                                        class="custom-radio__input"
                                                                        type="checkbox"
                                                                        name="orderActivityPrivateEntrepreneur"
                                                                >
                                                                <label for="order-activity-private-entrepreneur-five" class="custom-radio__label-for">Щитовик</label>
                                                            </span>
                                                <span class="custom-radio">
                                                                <input
                                                                        id="order-activity-private-entrepreneur-six"
                                                                        class="custom-radio__input"
                                                                        type="checkbox"
                                                                        name="orderActivityPrivateEntrepreneur"
                                                                >
                                                                <label for="order-activity-private-entrepreneur-six" class="custom-radio__label-for">СМО (Строительно-монтажная организация)</label>
                                                            </span>
                                                <span class="custom-radio">
                                                                <input
                                                                        id="order-activity-private-entrepreneur-seven"
                                                                        class="custom-radio__input"
                                                                        type="checkbox"
                                                                        name="orderActivityPrivateEntrepreneur"
                                                                >
                                                                <label for="order-activity-private-entrepreneur-seven" class="custom-radio__label-for">Розничный покупатель</label>
                                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<!--<div class="gap-lg-plus">
						<div class="contacts-address">
							<div class="gap-sm content-wrapper-mobile-section">
								<div class="content-wrapper-mobile-section-container">
									<div class="cp-item cp-item-column">
										<div class="gap-sm">
											<div class="h5">Главный офис</div>
										</div>
										<div class="gap-sm">
											<div class="gap-xs">
												<div class="contacts-address-item">
													<div class="contacts-address-item__title">Адрес:</div>
													<div class="contacts-address-item__descr">
														<div class="contacts-address-item__descr-text">
															<p>123060, г. Москва, ул. Маршала Рыбалко, 10</p>
														</div>
														<div class="contacts-address-item__descr-caption">В офисе доступен самовывоз</div>
													</div>
												</div>
											</div>
											<div class="btn-g">
												<button class="btn-reset btn btn-light">
													<span class="btn__text">Как добраться</span>
												</button>
											</div>
										</div>
										<div class="gap-sm">
											<div class="contacts-address-item">
												<div class="contacts-address-item__title">Прием заказов и обработка:</div>
												<div class="contacts-address-item__descr">
													<div class="contacts-address-item__descr-text">
														<p>ПН-ПТ с 09:00 до 19:00</p>
														<p>СБ-ВС с 09:00 до 19:00 (<span class="text-secondary-color">только на выдачу оплаченных заказов</span>)</p>
													</div>
													<div class="contacts-address-item__descr-caption">Сделать заказ на нашем сайте Вы можете круглосуточно.</div>
												</div>
											</div>
										</div>
										<div class="gap-sm">
											<div class="contacts-address-item">
												<div class="contacts-address-item__title">Телефон:</div>
												<div class="contacts-address-item__descr">
													<div class="contacts-address-item__descr-text">
														<p><span class="semi-bold">+7 (495) 118-37-70</span></p>
													</div>
												</div>
											</div>
										</div>
										<div class="gap-sm">
											<div class="contacts-address-item">
												<div class="contacts-address-item__title">Email:</div>
												<div class="contacts-address-item__descr">
													<div class="contacts-address-item__descr-text">
														<p>info@amperkin.ru</p>
													</div>
												</div>
											</div>
										</div>
										<div class="btn-g">
											<button class="btn-reset btn btn-primary">
												<span class="btn__text">Обратная связь</span>
											</button>
											<button class="btn-reset btn btn-light">
												<span class="btn__text">написать директору</span>
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="gap-sm content-wrapper-mobile-section">
								<div class="content-wrapper-mobile-section-container">
									<div class="cp-item">
										<div class="gap-sm">
											<div class="h5">Реквизиты ООО «АМПЕРКИН»</div>
										</div>
										<div class="gap-sm">
											<div class="gap-xs">
												<div class="contacts-address-item">
													<div class="contacts-address-item__title">Юр. адрес:</div>
													<div class="contacts-address-item__descr">
														<div class="contacts-address-item__descr-text">
															<p>123060, город Москва, улица Маршала Рыбалко, дом 10, этаж 1, помещение 1</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="gap-sm">
											<div class="contacts-address-item">
												<div class="contacts-address-item__title">ИНН / КПП:</div>
												<div class="contacts-address-item__descr">
													<div class="contacts-address-item__descr-text">
														<p>7734440520 / 773401001</p>
													</div>
												</div>
											</div>
										</div>
										<div class="gap-sm">
											<div class="contacts-address-item">
												<div class="contacts-address-item__title">ОГРН:</div>
												<div class="contacts-address-item__descr">
													<div class="contacts-address-item__descr-text">
														<p>1217700055583</p>
													</div>
												</div>
											</div>
										</div>
										<div class="gap-sm">
											<div class="contacts-address-item">
												<div class="contacts-address-item__title">Расчетный счет:</div>
												<div class="contacts-address-item__descr">
													<div class="contacts-address-item__descr-text">
														<p>40702810540000099170</p>
													</div>
												</div>
											</div>
										</div>
										<div class="gap-sm">
											<div class="contacts-address-item">
												<div class="contacts-address-item__descr">
													<div class="contacts-address-item__descr-text">
														<p><span class="semi-bold">ПАО Сбербанк</span></p>
													</div>
												</div>
											</div>
										</div>
										<div class="gap-sm">
											<div class="contacts-address-item">
												<div class="contacts-address-item__title">Корреспондентский счет:</div>
												<div class="contacts-address-item__descr">
													<div class="contacts-address-item__descr-text">
														<p>30101810400000000225</p>
													</div>
												</div>
											</div>
										</div>
										<div class="">
											<div class="contacts-address-item">
												<div class="contacts-address-item__title">БИК банка:</div>
												<div class="contacts-address-item__descr">
													<div class="contacts-address-item__descr-text">
														<p>044525225</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="gap-lg-plus">
						<div class="content-wrapper-mobile-section">
							<div class="content-wrapper-mobile-section-container">
								<div class="gap-md h3">Наш офис</div>
								<div class="catalog-extra-slider out-container-x">
									<div class="basic-slider-wrap">
										<div class="basic-slider basic-gallery-slider swiper" data-basic-gallery-slider>
											<div class="swiper-wrapper">
												<div class="swiper-slide">
													<a class="basic-gallery-slider-item" href="img/gallery-img1.png" data-fancybox="gallery">
														<span class="basic-gallery-slider-item__decor"></span>
														<img
															loading="lazy"
															class="image"
															src="img/gallery-img1.png"
															width="223"
															height="166"
															alt="Изображение блока"
														>
													</a>
												</div>
												<div class="swiper-slide">
													<a class="basic-gallery-slider-item" href="img/gallery-img2.png" data-fancybox="gallery">
														<span class="basic-gallery-slider-item__decor"></span>
														<img
															loading="lazy"
															class="image"
															src="img/gallery-img2.png"
															width="223"
															height="166"
															alt="Изображение блока"
														>
													</a>
												</div>
												<div class="swiper-slide">
													<a class="basic-gallery-slider-item" href="img/gallery-img3.png" data-fancybox="gallery">
														<span class="basic-gallery-slider-item__decor"></span>
														<img
															loading="lazy"
															class="image"
															src="img/gallery-img3.png"
															width="223"
															height="166"
															alt="Изображение блока"
														>
													</a>
												</div>
												<div class="swiper-slide">
													<a class="basic-gallery-slider-item" href="img/gallery-img4.png" data-fancybox="gallery">
														<span class="basic-gallery-slider-item__decor"></span>
														<img
															loading="lazy"
															class="image"
															src="img/gallery-img4.png"
															width="223"
															height="166"
															alt="Изображение блока"
														>
													</a>
												</div>
												<div class="swiper-slide">
													<a class="basic-gallery-slider-item" href="img/gallery-img1.png" data-fancybox="gallery">
														<span class="basic-gallery-slider-item__decor"></span>
														<img
															loading="lazy"
															class="image"
															src="img/gallery-img1.png"
															width="223"
															height="166"
															alt="Изображение блока"
														>
													</a>
												</div>
												<div class="swiper-slide">
													<a class="basic-gallery-slider-item" href="img/gallery-img2.png" data-fancybox="gallery">
														<span class="basic-gallery-slider-item__decor"></span>
														<img
															loading="lazy"
															class="image"
															src="img/gallery-img2.png"
															width="223"
															height="166"
															alt="Изображение блока"
														>
													</a>
												</div>
												<div class="swiper-slide">
													<a class="basic-gallery-slider-item" href="img/gallery-img3.png" data-fancybox="gallery">
														<span class="basic-gallery-slider-item__decor"></span>
														<img
															loading="lazy"
															class="image"
															src="img/gallery-img3.png"
															width="223"
															height="166"
															alt="Изображение блока"
														>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="">
						<div class="gap-md h3">Как добраться</div>
						<div class="contacts-map">
							<div id="contactsMap" class="contacts-map-content"></div>
						</div>
					</div>-->
				</div>
			</div>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>