<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="block-mb">
	<div class="page-content">
		<div class="page-content__body">
			<div class="container">
				<div class="page-content__container page-content__container--settings">
                    <div class="page-content__heading">
                        <div class="page-content__heading-back">
                            <button class="btn-reset btn btn--noframe">
                                <svg class="icon btn__icon">
                                    <use href="img/sprite.svg#left"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="h2">Создать новый проект</div>
                    </div>
					<div class="page-content__main">
						<form class="form form--profile-settings" action="">
							<div class="page-content__section">
								<div class="block-mb-md h4">Основная информация</div>

                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        <span>Направления <span class="required-star">*</span></span>
                                        <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id1">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id1">
                                                <span class="visually-hidden">Тултип: </span>
                                                Текст
                                            </span>
                                        </span>
                                    </div>
                                    <div class="form__field">
                                        <span class="tag-bar">
                                            <label class="tag" style="cursor: not-allowed;">
                                                <input
                                                        class="visually-hidden"
                                                        type="checkbox"
                                                        name="PROP[TAGS][all]"
                                                        value="0"
                                                >
                                                <span
                                                        class="tag__content-bg"
                                                        style="
                                                        border-color: var(--text8-color);
                                                        background-color: var(--text8-color);"
                                                ></span>
                                                <span class="tag__content">
                                                    <svg class="icon tag__content-icon" style="fill: var(--text5-color);">
                                                        <use href="img/sprite.svg#tag-all"></use>
                                                    </svg>
                                                    <span class="tag__content-text" style="color: var(--text5-color);">все</span>
                                                </span>
                                            </label>
                                            <label class="tag" style="cursor: not-allowed;">
                                                <input
                                                        class="visually-hidden"
                                                        type="checkbox"
                                                        name="PROP[TAGS][all]"
                                                        value="0"
                                                >
                                                <span
                                                        class="tag__content-bg"
                                                        style="
                                                        border-color: var(--text8-color);
                                                        background-color: var(--text8-color);"
                                                ></span>
                                                <span class="tag__content">
                                                    <svg class="icon tag__content-icon" style="fill: var(--text5-color);">
                                                        <use href="img/sprite.svg#tag-building"></use>
                                                    </svg>
                                                    <span class="tag__content-text" style="color: var(--text5-color);">Урбанизация</span>
                                                </span>
                                            </label>
                                            <label class="tag">
                                                <input
                                                        class="visually-hidden"
                                                        type="checkbox"
                                                        name="PROP[TAGS][sport]"
                                                        value="0"
                                                >
                                                <span
                                                        class="tag__content-bg"
                                                        style="
                                                        border-color: var(--accent-purple4-color);
                                                        background-color: var(--accent-purple8-color);"
                                                ></span>
                                                <span class="tag__content">
                                                    <svg class="icon tag__content-icon" style="fill: var(--accent-purple2-color);">
                                                        <use href="img/sprite.svg#tag-sport"></use>
                                                    </svg>
                                                    <span class="tag__content-text" style="color: var(--accent-purple2-color);">спорт</span>
                                                </span>
                                            </label>
                                            <label class="tag" style="cursor: not-allowed;">
                                                <input
                                                        class="visually-hidden"
                                                        type="checkbox"
                                                        name="PROP[TAGS][alarm]"
                                                        value="0"
                                                >
                                                <span
                                                        class="tag__content-bg"
                                                        style="
                                                        border-color: var(--text8-color);
                                                        background-color: var(--text8-color);"
                                                ></span>
                                                <span class="tag__content">
                                                    <svg class="icon tag__content-icon" style="fill: var(--text5-color);">
                                                        <use href="img/sprite.svg#tag-alarm"></use>
                                                    </svg>
                                                    <span class="tag__content-text" style="color: var(--text5-color);">ЧС</span>
                                                </span>
                                            </label>
                                            <label class="tag" style="cursor: not-allowed;">
                                                <input
                                                        class="visually-hidden"
                                                        type="checkbox"
                                                        name="PROP[TAGS][animal]"
                                                        value="0"
                                                >
                                                <span
                                                        class="tag__content-bg"
                                                        style="
                                                        border-color: var(--text8-color);
                                                        background-color: var(--text8-color);"
                                                ></span>
                                                <span class="tag__content">
                                                    <svg class="icon tag__content-icon" style="fill: var(--text5-color);">
                                                        <use href="img/sprite.svg#tag-pets"></use>
                                                    </svg>
                                                    <span class="tag__content-text" style="color: var(--text5-color);">Животные</span>
                                                </span>
                                            </label>
                                            <label class="tag" style="cursor: not-allowed;">
                                                <input
                                                        class="visually-hidden"
                                                        type="checkbox"
                                                        name="PROP[TAGS][science]"
                                                        value="0"
                                                >
                                                <span
                                                        class="tag__content-bg"
                                                        style="
                                                        border-color: var(--text8-color);
                                                        background-color: var(--text8-color);"
                                                ></span>
                                                <span class="tag__content">
                                                    <svg class="icon tag__content-icon" style="fill: var(--text5-color);">
                                                        <use href="img/sprite.svg#tag-science"></use>
                                                    </svg>
                                                    <span class="tag__content-text" style="color: var(--text5-color);">Наука</span>
                                                </span>
                                            </label>
                                            <label class="tag">
                                                <input
                                                        class="visually-hidden"
                                                        type="checkbox"
                                                        name="PROP[TAGS][nature]"
                                                        value="0"
                                                >
                                                <span
                                                        class="tag__content-bg"
                                                        style="
                                                        border-color: var(--success6-color);
                                                        background-color: var(--success8-color);"
                                                ></span>
                                                <span class="tag__content">
                                                    <svg class="icon tag__content-icon" style="fill: var(--success4-color);">
                                                        <use href="img/sprite.svg#tag-nature"></use>
                                                    </svg>
                                                    <span class="tag__content-text" style="color: var(--success4-color);">Природа</span>
                                                </span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        <span>Название проекта <span class="required-star">*</span></span>
                                        <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id1">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id1">
                                                <span class="visually-hidden">Тултип: </span>
                                                Текст
                                            </span>
                                        </span>
                                    </div>
                                    <div class="form__field">
                                        <input
                                                id=""
                                                class="input-reset form__input"
                                                type="text"
                                                name=""
                                                placeholder="Название проекта"
                                                required
                                        >
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        <span>Основной регион <span class="required-star">*</span></span>
                                        <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id1">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id1">
                                                <span class="visually-hidden">Тултип: </span>
                                                Текст
                                            </span>
                                        </span>
                                    </div>
                                    <div class="form__field">
                                        <select
                                                id=""
                                                name=""
                                                class="input-reset form__input form__input--select2 js-select2"
                                                required
                                        >
                                            <option value="0">Республика Ингушетия</option>
                                            <option value="1">Республика Ингушетия 2</option>
                                            <option value="2">Республика Ингушетия 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        <span>Охват по регионам</span>
                                        <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id1">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id1">
                                                <span class="visually-hidden">Тултип: </span>
                                                Текст
                                            </span>
                                        </span>
                                    </div>
                                    <div class="form__field">
                                        <select
                                                id=""
                                                name=""
                                                class="input-reset form__input form__input--select2 js-select2"
                                        >
                                            <option value="0">Республика Ингушетия</option>
                                            <option value="1">Республика Ингушетия 2</option>
                                            <option value="2">Республика Ингушетия 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        <span>Обложка <span class="required-star">*</span></span>
                                        <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id1">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id1">
                                                <span class="visually-hidden">Тултип: </span>
                                                Текст
                                            </span>
                                        </span>
                                    </div>
                                    <div class="form__field">
                                        <div id="dropfile" class="dropfile">
                                            <label class="dropfile-field">
                                                <input id="dropfile-input" class="visually-hidden dropfile-input" type="file" accept="image/*">
                                                <div id="dropfile-area" class="dropfile-area">
                                                    <div class="dropfile-descr">
                                                        <div class="dropfile-descr__view">
                                                            <svg class="icon">
                                                                <use href="img/sprite.svg#add-image"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="dropfile-descr__text">
                                                            <div class="dropfile-descr__title">
                                                                Нажмите для загрузки
                                                                <span>или перенесите изображение в эту область</span>
                                                            </div>
                                                            <div class="dropfile-descr__accept">SVG, PNG, JPG (рекомендуемый размер 800 × 800px)</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </label>
                                            <div class="dropfile-gallery"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        <span>Описание</span>
                                    </div>
                                    <div class="form__field">
                                        <textarea
                                                id=""
                                                class="input-reset form__input form__input--textarea"
                                                name=""
                                                placeholder="Введите описание"
                                        ></textarea>
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        <span>Цели</span>
                                    </div>
                                    <div class="form__field">
                                        <textarea
                                                id=""
                                                class="input-reset form__input form__input--textarea"
                                                name=""
                                                placeholder="Укажите цели проекта"
                                        ></textarea>
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        <span>Результаты</span>
                                    </div>
                                    <div class="form__field">
                                        <textarea
                                                id=""
                                                class="input-reset form__input form__input--textarea"
                                                name=""
                                                placeholder="Расскажите о результатах проекта"
                                        ></textarea>
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        Проект в соцсетях
                                        <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id1">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id1">
                                                <span class="visually-hidden">Тултип: </span>
                                                Текст
                                            </span>
                                        </span>
                                    </div>
                                    <div class="form__field-wrapper form__field-wrapper--columns">
                                        <div class="form__field">
                                            <input id=""
                                                   class="input-reset form__input"
                                                   type="url"
                                                   name=""
                                                   placeholder="https://vk.com/username"
                                            >
                                            <div class="form__btn">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#media-vk"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="form__field">
                                            <input id=""
                                                   class="input-reset form__input"
                                                   type="url"
                                                   name=""
                                                   placeholder="https://fb.com/username"
                                            >
                                            <div class="form__btn">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#media-facebook"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="form__field">
                                            <input id=""
                                                   class="input-reset form__input"
                                                   type="url"
                                                   name=""
                                                   placeholder="https://ok.ru/username"
                                            >
                                            <div class="form__btn">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#media-ok"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="form__field">
                                            <input id=""
                                                   class="input-reset form__input"
                                                   type="url"
                                                   name=""
                                                   placeholder="https://instagram.com/username"
                                            >
                                            <div class="form__btn">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#media-insta"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="form__field">
                                            <input id=""
                                                   class="input-reset form__input"
                                                   type="url"
                                                   name=""
                                                   placeholder="https://youtube.com/"
                                            >
                                            <div class="form__btn">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#media-youtube"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="form__field">
                                            <input id=""
                                                   class="input-reset form__input"
                                                   type="url"
                                                   name=""
                                                   placeholder="https://tiktok.com/@username"
                                            >
                                            <div class="form__btn">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#media-tiktok"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							</div>

                            <div class="page-content__section">
                                <div class="block-mb-md h4">Руководитель проекта</div>

                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">ФИО контактного лица</div>
                                    <div class="form__field">
                                        <input
                                                id=""
                                                class="input-reset form__input"
                                                type="text"
                                                name=""
                                                placeholder="Фамилия Имя Отчество"
                                        >
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">Должность</div>
                                    <div class="form__field">
                                        <input
                                                id=""
                                                class="input-reset form__input"
                                                type="text"
                                                name=""
                                                placeholder=""
                                        >
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">Телефон</div>
                                    <div class="form__field">
                                        <input
                                                id=""
                                                class="input-reset form__input isPhone"
                                                type="tel"
                                                name=""
                                                placeholder=""
                                        >
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">Электронная почта</div>
                                    <div class="form__field">
                                        <input
                                                id=""
                                                class="input-reset form__input isPhone"
                                                type="email"
                                                name=""
                                                placeholder=""
                                        >
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        Контакты
                                    </div>
                                    <div class="form__field-wrapper form__field-wrapper--columns form__field-wrapper--columns-3">
                                        <div class="form__field">
                                            <input id=""
                                                   class="input-reset form__input"
                                                   type="url"
                                                   name=""
                                                   placeholder=""
                                            >
                                            <div class="form__btn">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#media-vk"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="form__field">
                                            <input id=""
                                                   class="input-reset form__input"
                                                   type="url"
                                                   name=""
                                                   placeholder=""
                                            >
                                            <div class="form__btn">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#media-wa"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="form__field">
                                            <input id=""
                                                   class="input-reset form__input"
                                                   type="url"
                                                   name=""
                                                   placeholder=""
                                            >
                                            <div class="form__btn">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#media-skype"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

							<div class="page-content__section">
								<div class="block-mb-md h4">Материалы</div>

								<div class="page-content__section-item">
									<div class="page-content__section-item-title">
										Фотографии
										<span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id1">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id1">
                                                <span class="visually-hidden">Тултип: </span>
                                                Текст
                                            </span>
                                        </span>
									</div>
									<div class="form__field">
										<div id="dropfile" class="dropfile">
											<label class="dropfile-field">
												<input id="dropfile-input" class="visually-hidden dropfile-input" type="file" accept="image/*">
												<div id="dropfile-area" class="dropfile-area">
													<div class="dropfile-descr">
														<div class="dropfile-descr__view">
															<svg class="icon">
																<use href="img/sprite.svg#add-image"></use>
															</svg>
														</div>
														<div class="dropfile-descr__text">
															<div class="dropfile-descr__title">
																Нажмите для загрузки
																<span>или перенесите изображение в эту область</span>
															</div>
															<div class="dropfile-descr__accept">SVG, PNG, JPG (не более 10 МБ)</div>
														</div>
													</div>
												</div>
											</label>
											<div class="dropfile-gallery"></div>
										</div>
									</div>
								</div>
								<div class="page-content__section-item">
									<div class="page-content__section-item-title">
										Видео
										<span class="tooltip">
                                                <span class="btn-reset tooltip__btn" aria-describedby="id1">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#help"></use>
                                                    </svg>
                                                </span>
                                                <span class="tooltip__txt" role="tooltip" id="id1">
                                                    <span class="visually-hidden">Тултип: </span>
                                                    Текст
                                                </span>
                                            </span>
									</div>
									<div class="form__field">
										<input id=""
											   class="input-reset form__input"
											   type="url"
											   name=""
											   placeholder="https://youtube.com/"
										>
										<div class="form__btn">
											<svg class="icon">
												<use href="img/sprite.svg#media-youtube"></use>
											</svg>
										</div>
									</div>
									<div class="form__field">
										<input id=""
											   class="input-reset form__input"
											   type="url"
											   name=""
											   placeholder="https://youtube.com/"
										>
										<div class="form__btn">
											<svg class="icon">
												<use href="img/sprite.svg#media-youtube"></use>
											</svg>
										</div>
									</div>
									<button class="btn-reset btn btn--noframe btn--green">
										<svg class="icon btn__icon">
											<use href="img/sprite.svg#plus"></use>
										</svg>
										<span class="btn__text">Добавить ещё видео</span>
									</button>
								</div>
								<div class="page-content__section-item">
									<div class="page-content__section-item-title">
										Документы
										<span class="tooltip">
                                                <span class="btn-reset tooltip__btn" aria-describedby="id1">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#help"></use>
                                                    </svg>
                                                </span>
                                                <span class="tooltip__txt" role="tooltip" id="id1">
                                                    <span class="visually-hidden">Тултип: </span>
                                                    Текст
                                                </span>
                                            </span>
									</div>
									<div class="form__field">
										<div id="dropfile" class="dropfile">
											<label class="dropfile-field">
												<input id="dropfile-input" class="visually-hidden dropfile-input" type="file" accept="image/*">
												<div id="dropfile-area" class="dropfile-area">
													<div class="dropfile-descr">
														<div class="dropfile-descr__view">
															<svg class="icon">
																<use href="img/sprite.svg#add-image"></use>
															</svg>
														</div>
														<div class="dropfile-descr__text">
															<div class="dropfile-descr__title">
																Нажмите для загрузки
																<span>или перенесите изображение в эту область</span>
															</div>
														</div>
													</div>
												</div>
											</label>
											<div class="dropfile-gallery"></div>
										</div>
									</div>
								</div>
							</div>

                            <div class="page-content__section">
                                <div class="block-mb-md h4">Партнеры</div>

                                <div class="page-content__section-item">
                                    <div class="form__field">
                                        <div class="add-list js-add-list">
                                            <div class="add-list__item">
                                                <div class="add-list__view">
                                                    <picture>
                                                        <source srcset="img/partners-img1.webp" type="image/webp">
                                                        <img
                                                            loading="lazy"
                                                            src="img/partners-img1.png"
                                                            class="image"
                                                            width="64"
                                                            height="64"
                                                            alt=""
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="add-list__descr">
                                                    <div class="add-list__descr-title">Центр развития культурных инициатив и добровольчества Курской области</div>
                                                </div>
                                                <div class="add-list__btn">
                                                    <button class="btn-reset btn btn--noframe add-list__delete">
                                                        <svg class="icon btn__icon">
                                                            <use href="img/sprite.svg#cross"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="add-list__item">
                                                <div class="add-list__view">
                                                    <picture>
                                                        <source srcset="img/partners-img2.webp" type="image/webp">
                                                        <img
                                                            loading="lazy"
                                                            src="img/partners-img2.png"
                                                            class="image"
                                                            width="64"
                                                            height="64"
                                                            alt=""
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="add-list__descr">
                                                    <div class="add-list__descr-title">Ресурсный центр по развитию добровольчества</div>
                                                </div>
                                                <div class="add-list__btn">
                                                    <button class="btn-reset btn btn--noframe add-list__delete">
                                                        <svg class="icon btn__icon">
                                                            <use href="img/sprite.svg#cross"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="add-list__item">
                                                <div class="add-list__view">
                                                    <picture>
                                                        <source srcset="img/partners-img3.webp" type="image/webp">
                                                        <img
                                                            loading="lazy"
                                                            src="img/partners-img3.png"
                                                            class="image"
                                                            width="64"
                                                            height="64"
                                                            alt=""
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="add-list__descr">
                                                    <div class="add-list__descr-title">Воронежская региональная культурно-просветительская общественная организация "Наша история"</div>
                                                </div>
                                                <div class="add-list__btn">
                                                    <button class="btn-reset btn btn--noframe add-list__delete">
                                                        <svg class="icon btn__icon">
                                                            <use href="img/sprite.svg#cross"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="add-list__item">
                                                <div class="add-list__view">
                                                    <picture>
                                                        <source srcset="img/partners-img4.webp" type="image/webp">
                                                        <img
                                                            loading="lazy"
                                                            src="img/partners-img4.png"
                                                            class="image"
                                                            width="64"
                                                            height="64"
                                                            alt=""
                                                        >
                                                    </picture>
                                                </div>
                                                <div class="add-list__descr">
                                                    <div class="add-list__descr-title">Добровольческий центр "Волонтеры Культуры"</div>
                                                </div>
                                                <div class="add-list__btn">
                                                    <button class="btn-reset btn btn--noframe add-list__delete">
                                                        <svg class="icon btn__icon">
                                                            <use href="img/sprite.svg#cross"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="add-list__add">
                                                <button class="btn-reset btn btn--noframe btn--green">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#plus"></use>
                                                    </svg>
                                                    <span class="btn__text">Добавить партнера</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="page-content__section">
                                <div class="block-mb-md h4">Сбор средств для поддержки проекта</div>

                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        Необходимая сумма
                                    </div>
                                    <div class="form__field">
                                        <input
                                                id=""
                                                class="input-reset form__input"
                                                type="text"
                                                name=""
                                                placeholder="Укажите необходимую сумму"
                                        >
                                    </div>
                                </div>
                            </div>

                            <div class="page-content__section">
                                <div class="page-content__section-item">
                                    <div class="form__field  form__field-agree">
                                        <div class="custom-checkbox">
                                            <input class="custom-checkbox__input" type="checkbox" checked="">
                                            <div class="custom-checkbox__agree">
                                                <span>Соглашаюсь на <a class="link link--underline" href="javascript:;">обработку моих персональных данных</a>, с&nbsp;<a class="link link--underline" href="javascript:;">правилами пользования сайтом</a> и&nbsp;принимаю <a class="link link--underline" href="javascript:;">Пользовательское соглашение</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>
