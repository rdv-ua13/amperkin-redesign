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
                        <div class="h2">Настройки профиля организатора</div>
                    </div>
					<div class="page-content__main">
                        <form class="form form--profile-settings" action="">
                            <div class="page-content__section">
                                <div class="block-mb-md h4">Основная информация</div>

                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        Обложка
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
                                                            <div class="dropfile-descr__accept">SVG, PNG, JPG (рекомендуемый размер 1330 × 340px)</div>
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
                                        Аватар
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
                                        <div id="dropfile" class="dropfile dropfile--avatar">
                                            <label class="dropfile-field">
                                                <input id="dropfile-input" class="visually-hidden dropfile-input" type="file" accept="image/*">
                                                <div id="dropfile-area" class="dropfile-area">
                                                    <div class="dropfile-descr">
                                                        <div class="dropfile-descr__view">
                                                            <svg class="icon">
                                                                <use href="img/sprite.svg#add-image"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dropfile-descr">
                                                    <div class="dropfile-descr__text">
                                                        <div class="dropfile-descr__title">
                                                            Нажмите для загрузки
                                                            <span>или перенесите изображение в эту область</span>
                                                        </div>
                                                        <div class="dropfile-descr__accept">SVG, PNG, JPG (рекомендуемый размер 160 × 160px)</div>
                                                    </div>
                                                </div>
                                            </label>
                                            <div class="dropfile-gallery"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        Видео-заставка
                                        <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id2">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id2">
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
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        <span>Название организации <span class="required-star">*</span></span>
                                    </div>
                                    <div class="form__field">
                                        <input
                                                id=""
                                                class="input-reset form__input"
                                                type="text"
                                                name=""
                                                placeholder="Всероссийское общественное движение «Волонтеры Экологи»"
                                                required
                                        >
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        <span>Полное название организации <span class="required-star">*</span></span>
                                    </div>
                                    <div class="form__field">
                                        <input
                                                id=""
                                                class="input-reset form__input"
                                                type="text"
                                                name=""
                                                placeholder="Всероссийское общественное движение «Волонтеры Экологи»"
                                                required
                                        >
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        <span>Тип <span class="required-star">*</span></span>
                                    </div>
                                    <div class="form__field">
                                        <select
                                                id=""
                                                name=""
                                                class="input-reset form__input form__input--select2 js-select2"
                                                required
                                        >
                                            <option value="0">Общественное объединение</option>
                                            <option value="1">Общественное объединение 2</option>
                                            <option value="2">Общественное объединение 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">ОГРН</div>
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
                                    <div class="page-content__section-item-title">
                                        <span>Адрес <span class="required-star">*</span></span>
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
                                        <span>Описание <span class="required-star">*</span></span>
                                    </div>
                                    <div class="form__field">
                                        <textarea
                                                id=""
                                                class="input-reset form__input form__input--textarea"
                                                name=""
                                                placeholder="Введите описание"
                                                required
                                        ></textarea>
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">Код для встраивания Google Форм</div>
                                    <div class="form__field">
                                        <textarea
                                                id=""
                                                class="input-reset form__input form__input--textarea"
                                                name=""
                                                placeholder="Вставьте код"
                                        ></textarea>
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        <span>Результаты <span class="required-star">*</span></span>
                                    </div>
                                    <div class="form__field">
                                        <textarea
                                                id=""
                                                class="input-reset form__input form__input--textarea"
                                                name=""
                                                placeholder="Укажите результаты деятельности организации"
                                                required
                                        ></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="page-content__section">
                                <div class="block-mb-md h4">Направления</div>

                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        <span>Выберите интересующие направления волонтёрства <span class="required-star">*</span></span>
                                        <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id3">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id3">
                                                <span class="visually-hidden">Тултип: </span>
                                                Текст
                                            </span>
                                        </span>
                                    </div>
                                    <div class="form__field">
                                        <span class="tag-bar">
                                            <label class="tag">
                                                <input
                                                        class="visually-hidden"
                                                        type="checkbox"
                                                        name="PROP[TAGS][all]"
                                                        value="0"
                                                >
                                                <span
                                                        class="tag__content-bg"
                                                        style="
                                                        border-color: var(--text6-color);
                                                        background-color: var(--text8-color);"
                                                ></span>
                                                <span class="tag__content">
                                                    <svg class="icon tag__content-icon" style="fill: var(--text6-color);">
                                                        <use href="img/sprite.svg#tag-all"></use>
                                                    </svg>
                                                    <span class="tag__content-text" style="color: var(--text6-color);">все</span>
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
                                            <label class="tag">
                                                <input
                                                        class="visually-hidden"
                                                        type="checkbox"
                                                        name="PROP[TAGS][urban]"
                                                        value="0"
                                                >
                                                <span
                                                        class="tag__content-bg"
                                                        style="
                                                        border-color: var(--accent-ceruleanblue1-color);
                                                        background-color: var(--accent-ceruleanblue8-color);"
                                                ></span>
                                                <span class="tag__content">
                                                    <svg class="icon tag__content-icon" style="fill: var(--accent-ceruleanblue1-color);">
                                                        <use href="img/sprite.svg#tag-building"></use>
                                                    </svg>
                                                    <span class="tag__content-text" style="color: var(--accent-ceruleanblue1-color);">Урбанизация</span>
                                                </span>
                                            </label>
                                            <label class="tag">
                                                <input
                                                        class="visually-hidden"
                                                        type="checkbox"
                                                        name="PROP[TAGS][alarm]"
                                                        value="0"
                                                >
                                                <span
                                                        class="tag__content-bg"
                                                        style="
                                                        border-color: var(--error4-color);
                                                        background-color: var(--error9-color);"
                                                ></span>
                                                <span class="tag__content">
                                                    <svg class="icon tag__content-icon" style="fill: var(--error4-color);">
                                                        <use href="img/sprite.svg#tag-alarm"></use>
                                                    </svg>
                                                    <span class="tag__content-text" style="color: var(--error4-color);">ЧС</span>
                                                </span>
                                            </label>
                                            <label class="tag">
                                                <input
                                                        class="visually-hidden"
                                                        type="checkbox"
                                                        name="PROP[TAGS][animal]"
                                                        value="0"
                                                >
                                                <span
                                                        class="tag__content-bg"
                                                        style="
                                                        border-color: var(--warning5-color);
                                                        background-color: var(--warning8-color);"
                                                ></span>
                                                <span class="tag__content">
                                                    <svg class="icon tag__content-icon" style="fill: var(--warning3-color);">
                                                        <use href="img/sprite.svg#tag-pets"></use>
                                                    </svg>
                                                    <span class="tag__content-text" style="color: var(--warning3-color);">Животные</span>
                                                </span>
                                            </label>
                                            <label class="tag">
                                                <input
                                                        class="visually-hidden"
                                                        type="checkbox"
                                                        name="PROP[TAGS][science]"
                                                        value="0"
                                                >
                                                <span
                                                        class="tag__content-bg"
                                                        style="
                                                        border-color: var(--info5-color);
                                                        background-color: var(--info8-color);"
                                                ></span>
                                                <span class="tag__content">
                                                    <svg class="icon tag__content-icon" style="fill: var(--info3-color);">
                                                        <use href="img/sprite.svg#tag-science"></use>
                                                    </svg>
                                                    <span class="tag__content-text" style="color: var(--info3-color);">Наука</span>
                                                </span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="page-content__section">
                                <div class="block-mb-md h4">Руководитель</div>

                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">Руководитель организации</div>
                                    <div class="form__field">
                                        <input
                                                id=""
                                                class="input-reset form__input"
                                                type="text"
                                                name=""
                                                placeholder="Калиматов Адам Магомедович"
                                        >
                                    </div>
                                </div>
                            </div>

                            <div class="page-content__section">
                                <div class="block-mb-md h4">Материалы</div>

                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        Фотографии
                                        <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id4">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id4">
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
                                                            <div class="dropfile-descr__accept">SVG, PNG, JPG (рекомендуемый размер 1330 × 340px)</div>
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
                                                <span class="btn-reset tooltip__btn" aria-describedby="id5">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#help"></use>
                                                    </svg>
                                                </span>
                                                <span class="tooltip__txt" role="tooltip" id="id5">
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
                                                <span class="btn-reset tooltip__btn" aria-describedby="id6">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#help"></use>
                                                    </svg>
                                                </span>
                                                <span class="tooltip__txt" role="tooltip" id="id6">
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

                            <div class="form__bottom-area">
                                <div class="form__bottom-area-btn">
                                    <button class="btn-reset btn btn--noframe btn--tdu-dashed">
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#trash"></use>
                                        </svg>
                                        <span class="btn__text">Удалить профиль безвозвратно</span>
                                    </button>
                                </div>
                                <div class="form__bottom-area-note">Данное действие необратимо!</div>
                            </div>
                        </form>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>
