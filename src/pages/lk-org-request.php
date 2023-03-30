<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="block-mb">
	<div class="page-content">
		<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/page-content-header.php"); ?>

		<div id="pageContentBody" class="page-content__body">
			<div class="block-mb-md">
				<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/page-content-tabs.php"); ?>
			</div>

			<div class="container">
				<div class="page-content__container">
                    <div class="page-content__content-type">
                        <div class="tab-links-slider swiper js-main-section-tabs">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="lk-org-reviews.php#pageContentBody" class="tab-links-slider__link selected">Мои отзывы</a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="lk-org-reviews-vol.php#pageContentBody" class="tab-links-slider__link">Отзывы волонтеров</a>
                                </div>
                            </div>
                        </div>
                    </div>

					<div class="page-content__main">
						<div class="request">
                            <div class="request__item">
                                <div class="request__header">
                                    <div class="h4 request__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</div>
                                    <div class="request__subtitle">
                                        <span class="card__action">
                                            <span class="card__action-data">
                                                <span class="card__action-item">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#calendar"></use>
                                                    </svg>
                                                    <span class="card__action-item-text">17 – 25 декабря 2021, 10:00 – 22:00</span>
                                                </span>
                                            </span>
                                        </span>
                                    </div>
                                </div>

                                <div class="accordion request-accordion request-cards" data-id="pa-request">
                                    <div class="accordion__item request-card">
                                        <div class="accordion__header request-card__header notice">
                                            <div class="accordion__btn js-accordion-btn">
                                                <div class="request-card__header-descr">
                                                    <div class="request-card__header-title notice-elem active">
                                                        <span>Помощь в доставке продуктов и лекарств</span>
                                                        <span class="notice-elem__num">1</span>
                                                    </div>
                                                    <div class="request-card__header-subtitle">
                                                        <span class="card__action">
                                                            <span class="card__action-data">
                                                                <span class="card__action-progress js-progress">
                                                                    <span class="card__action-progress-bar progress-bar">
                                                                        <progress id="" class="visually-hidden progress-bar__indicator" value="" max="100"></progress>
                                                                        <span class="progress-bar__bg">
                                                                            <span class="progress-bar__line"></span>
                                                                        </span>
                                                                    </span>
                                                                    <span class="card__action-progress-data progress-bar-data">
                                                                        <span class="card__action-progress-current">
                                                                            <span class="card__action-progress-data-value progress-bar-data__value" data-value="2">2</span>
                                                                        </span> из
                                                                        <span class="card__action-progress-need">
                                                                            <span class="card__action-progress-data-value progress-bar-data__max" data-max="10">10</span>
                                                                        </span> одобрено
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="request-card__header-action">
                                                    <div class="request-card__header-action-menu-trigger js-accordion-btn-exception">
                                                        <svg class="icon">
                                                            <use href="img/sprite.svg#menu-more"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="request-card__header-action-menu">
                                                        <button class="btn-reset btn btn--fill btn--mini btn--gray">
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#settings-slider"></use>
                                                            </svg>
                                                            <span class="btn__text">Колонки</span>
                                                        </button>
                                                        <button class="btn-reset btn btn--fill btn--mini btn--gray">
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#map"></use>
                                                            </svg>
                                                            <span class="btn__text">На карте</span>
                                                        </button>
                                                        <button class="btn-reset btn btn--fill btn--mini btn--gray">
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#download"></use>
                                                            </svg>
                                                            <span class="btn__text">Скачать</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="request-accordion__btn-icon-dropdown js-accordion-btn-icon">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#arrow-down"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion__collapse collapsed">
                                            <div class="accordion__collapse-content">
                                                <div class="accordion__collapse-item accordion__collapse-item-header">
                                                    <div class="request-card__table">
                                                        <div class="request-card__table-item request-card__table-item-check">
                                                            <div class="custom-checkbox">
                                                                <input
                                                                        class="custom-checkbox__input custom-checkbox__input--checkline checkall-for"
                                                                        type="checkbox"
                                                                        data-checkall-for="requestCardOne"
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="request-card__table-item request-card__table-item-name">ФИО</div>
                                                        <div class="request-card__table-item request-card__table-item-time">Часы</div>
                                                        <div class="request-card__table-item request-card__table-item-rate">Оценка<br> волонтера</div>
                                                        <div class="request-card__table-item request-card__table-item-status">Статус</div>
                                                        <div class="request-card__table-item request-card__table-item-id">VOLECO ID</div>
                                                        <div class="request-card__table-item request-card__table-item-birthday">Дата<br> рождения</div>
                                                        <div class="request-card__table-item request-card__table-item-age">Возраст</div>
                                                    </div>
                                                </div>
                                                <div class="accordion__collapse-item">
                                                    <div class="request-card__table">
                                                        <div class="request-card__table-item request-card__table-item-check">
                                                            <div class="custom-checkbox">
                                                                <input
                                                                        class="custom-checkbox__input checkall-group"
                                                                        type="checkbox"
                                                                        data-checkall-group="requestCardOne"
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="request-card__table-item request-card__table-item-name">
                                                            <div class="request-card__table-item-name-view">
                                                                <picture>
                                                                    <source srcset="img/card-photo-volunteer.webp" type="image/webp">
                                                                    <img loading="lazy" src="img/card-photo-volunteer.png" class="image" width="42" height="42" alt="Фото карточки">
                                                                </picture>
                                                            </div>
                                                            <div class="request-card__table-item-name-title">Третьякова Алика Рудольфовна</div>
                                                        </div>
                                                        <div class="request-card__table-item request-card__table-item-time">2.0</div>
                                                        <div class="request-card__table-item request-card__table-item-rate">
                                                            <div class="page-content__intro-rate">
                                                                <div class="page-content__intro-rate-stars">
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#favorite"></use>
                                                                    </svg>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#favorite"></use>
                                                                    </svg>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#favorite"></use>
                                                                    </svg>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#favorite"></use>
                                                                    </svg>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#favorite"></use>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="request-card__table-item request-card__table-item-status">
                                                            <span class="tag tag--mini">
                                                                <span
                                                                        class="tag__content-bg"
                                                                        style="
                                                                        border-color: var(--success6-color);
                                                                        background-color: var(--success8-color);"
                                                                ></span>
                                                                <span class="tag__content">
                                                                    <span class="tag__content-text" style="color: var(--success4-color);">одобрена</span>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="request-card__table-item request-card__table-item-id">1577</div>
                                                        <div class="request-card__table-item request-card__table-item-birthday">26.09.2021</div>
                                                        <div class="request-card__table-item request-card__table-item-age">22</div>
                                                    </div>
                                                </div>
                                                <div class="accordion__collapse-item">
                                                    <div class="request-card__table">
                                                        <div class="request-card__table-item request-card__table-item-check">
                                                            <div class="custom-checkbox">
                                                                <input
                                                                        class="custom-checkbox__input checkall-group"
                                                                        type="checkbox"
                                                                        data-checkall-group="requestCardOne"
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="request-card__table-item request-card__table-item-name">
                                                            <div class="request-card__table-item-name-view">
                                                                <picture>
                                                                    <source srcset="img/card-photo-volunteer.webp" type="image/webp">
                                                                    <img loading="lazy" src="img/card-photo-volunteer.png" class="image" width="42" height="42" alt="Фото карточки">
                                                                </picture>
                                                            </div>
                                                            <div class="request-card__table-item-name-title">Маслова Аделина Дмитриевна</div>
                                                        </div>
                                                        <div class="request-card__table-item request-card__table-item-time">2.0</div>
                                                        <div class="request-card__table-item request-card__table-item-rate">
                                                            <div class="page-content__intro-rate">
                                                                <div class="page-content__intro-rate-stars">
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#favorite"></use>
                                                                    </svg>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#favorite"></use>
                                                                    </svg>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#favorite"></use>
                                                                    </svg>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#favorite"></use>
                                                                    </svg>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#favorite"></use>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="request-card__table-item request-card__table-item-status">
                                                            <span class="tag tag--mini">
                                                                <span class="tag__content-bg" style="
                                                                        border-color: var(--warning5-color);
                                                                        background-color: var(--warning8-color);"></span>
                                                                <span class="tag__content">
                                                                    <span class="tag__content-text" style="color: var(--warning3-color);">на рассмотрении</span>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="request-card__table-item request-card__table-item-id">1577</div>
                                                        <div class="request-card__table-item request-card__table-item-birthday">26.09.2021</div>
                                                        <div class="request-card__table-item request-card__table-item-age">22</div>
                                                    </div>
                                                </div>
                                                <div class="accordion__collapse-item">
                                                    <div class="request-card__table">
                                                        <div class="request-card__table-item request-card__table-item-check">
                                                            <div class="custom-checkbox">
                                                                <input
                                                                        class="custom-checkbox__input checkall-group"
                                                                        type="checkbox"
                                                                        data-checkall-group="requestCardOne"
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="request-card__table-item request-card__table-item-name">
                                                            <div class="request-card__table-item-name-view">
                                                                <picture>
                                                                    <source srcset="img/card-photo-volunteer.webp" type="image/webp">
                                                                    <img loading="lazy" src="img/card-photo-volunteer.png" class="image" width="42" height="42" alt="Фото карточки">
                                                                </picture>
                                                            </div>
                                                            <div class="request-card__table-item-name-title">Никифорова Мариша Улебовна</div>
                                                        </div>
                                                        <div class="request-card__table-item request-card__table-item-time">2.0</div>
                                                        <div class="request-card__table-item request-card__table-item-rate">
                                                            <div class="page-content__intro-rate">
                                                                <div class="page-content__intro-rate-stars">
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#favorite"></use>
                                                                    </svg>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#favorite"></use>
                                                                    </svg>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#favorite"></use>
                                                                    </svg>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#favorite"></use>
                                                                    </svg>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#favorite"></use>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="request-card__table-item request-card__table-item-status">
                                                            <span class="tag tag--mini">
                                                                <span class="tag__content-bg" style="
                                                                        border-color: var(--error4-color);
                                                                        background-color: var(--error9-color);"></span>
                                                                <span class="tag__content">
                                                                    <span class="tag__content-text" style="color: var(--error4-color);">отклонена</span>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="request-card__table-item request-card__table-item-id">1577</div>
                                                        <div class="request-card__table-item request-card__table-item-birthday">26.09.2021</div>
                                                        <div class="request-card__table-item request-card__table-item-age">22</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__item request-card">
                                        <div class="accordion__header request-card__header">
                                            <div class="accordion__btn js-accordion-btn">
                                                <div class="request-card__header-descr">
                                                    <div class="request-card__header-title notice-elem">
                                                        <span>Оказание психологической помощи</span>
                                                        <span class="notice-elem__num"></span>
                                                    </div>
                                                    <div class="request-card__header-subtitle">
                                                        <span class="card__action">
                                                            <span class="card__action-data">
                                                                <span class="card__action-progress js-progress">
                                                                    <span class="card__action-progress-bar progress-bar">
                                                                        <progress id="" class="visually-hidden progress-bar__indicator" value="" max="100"></progress>
                                                                        <span class="progress-bar__bg">
                                                                            <span class="progress-bar__line"></span>
                                                                        </span>
                                                                    </span>
                                                                    <span class="card__action-progress-data progress-bar-data">
                                                                        <span class="card__action-progress-current">
                                                                            <span class="card__action-progress-data-value progress-bar-data__value" data-value="2">2</span>
                                                                        </span> из
                                                                        <span class="card__action-progress-need">
                                                                            <span class="card__action-progress-data-value progress-bar-data__max" data-max="10">10</span>
                                                                        </span> одобрено
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="request-card__header-action">
                                                    <div class="request-card__header-action-menu-trigger js-accordion-btn-exception">
                                                        <svg class="icon">
                                                            <use href="img/sprite.svg#menu-more"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="request-card__header-action-menu">
                                                        <button class="btn-reset btn btn--fill btn--mini btn--gray">
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#settings-slider"></use>
                                                            </svg>
                                                            <span class="btn__text">Колонки</span>
                                                        </button>
                                                        <button class="btn-reset btn btn--fill btn--mini btn--gray">
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#map"></use>
                                                            </svg>
                                                            <span class="btn__text">На карте</span>
                                                        </button>
                                                        <button class="btn-reset btn btn--fill btn--mini btn--gray">
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#download"></use>
                                                            </svg>
                                                            <span class="btn__text">Скачать</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="request-accordion__btn-icon-dropdown js-accordion-btn-icon">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#arrow-down"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion__collapse collapsed">
                                            <div class="accordion__collapse-content">
                                                <div class="accordion__collapse-item accordion__collapse-item-header">
                                                    <div class="request-card__table">
                                                        <div class="request-card__table-item request-card__table-item-check">
                                                            <div class="custom-checkbox">
                                                                <input
                                                                        class="custom-checkbox__input custom-checkbox__input--checkline  checkall-for"
                                                                        type="checkbox"
                                                                        data-checkall-for="requestCardTwo"
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="request-card__table-item request-card__table-item-name">ФИО</div>
                                                        <div class="request-card__table-item request-card__table-item-time">Часы</div>
                                                        <div class="request-card__table-item request-card__table-item-rate">Оценка<br> волонтера</div>
                                                        <div class="request-card__table-item request-card__table-item-status">Статус</div>
                                                        <div class="request-card__table-item request-card__table-item-id">VOLECO ID</div>
                                                        <div class="request-card__table-item request-card__table-item-birthday">Дата<br> рождения</div>
                                                        <div class="request-card__table-item request-card__table-item-age">Возраст</div>
                                                    </div>
                                                </div>
                                                <div class="accordion__collapse-item">
                                                    <div class="request-card__table">
                                                        <div class="request-card__table-item request-card__table-item-check">
                                                            <div class="custom-checkbox">
                                                                <input
                                                                        class="custom-checkbox__input checkall-group"
                                                                        type="checkbox"
                                                                        data-checkall-group="requestCardTwo"
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="request-card__table-item request-card__table-item-name">
                                                            <div class="request-card__table-item-name-view">
                                                                <picture>
                                                                    <source srcset="img/card-photo-volunteer.webp" type="image/webp">
                                                                    <img loading="lazy" src="img/card-photo-volunteer.png" class="image" width="42" height="42" alt="Фото карточки">
                                                                </picture>
                                                            </div>
                                                            <div class="request-card__table-item-name-title">Третьякова Алика Рудольфовна</div>
                                                        </div>
                                                        <div class="request-card__table-item request-card__table-item-time">2.0</div>
                                                        <div class="request-card__table-item request-card__table-item-rate">
                                                            <div class="page-content__intro-rate">
                                                                <div class="page-content__intro-rate-stars">
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#favorite"></use>
                                                                    </svg>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#favorite"></use>
                                                                    </svg>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#favorite"></use>
                                                                    </svg>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#favorite"></use>
                                                                    </svg>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#favorite"></use>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="request-card__table-item request-card__table-item-status">
                                                            <span class="tag tag--mini">
                                                                <span
                                                                        class="tag__content-bg"
                                                                        style="
                                                                        border-color: var(--success6-color);
                                                                        background-color: var(--success8-color);"
                                                                ></span>
                                                                <span class="tag__content">
                                                                    <span class="tag__content-text" style="color: var(--success4-color);">одобрена</span>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="request-card__table-item request-card__table-item-id">1577</div>
                                                        <div class="request-card__table-item request-card__table-item-birthday">26.09.2021</div>
                                                        <div class="request-card__table-item request-card__table-item-age">22</div>
                                                    </div>
                                                </div>
                                                <div class="accordion__collapse-item">
                                                    <div class="request-card__table">
                                                        <div class="request-card__table-item request-card__table-item-check">
                                                            <div class="custom-checkbox">
                                                                <input
                                                                        class="custom-checkbox__input checkall-group"
                                                                        type="checkbox"
                                                                        data-checkall-group="requestCardTwo"
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="request-card__table-item request-card__table-item-name">
                                                            <div class="request-card__table-item-name-view">
                                                                <picture>
                                                                    <source srcset="img/card-photo-volunteer.webp" type="image/webp">
                                                                    <img loading="lazy" src="img/card-photo-volunteer.png" class="image" width="42" height="42" alt="Фото карточки">
                                                                </picture>
                                                            </div>
                                                            <div class="request-card__table-item-name-title">Маслова Аделина Дмитриевна</div>
                                                        </div>
                                                        <div class="request-card__table-item request-card__table-item-time">2.0</div>
                                                        <div class="request-card__table-item request-card__table-item-rate">
                                                            <div class="page-content__intro-rate">
                                                                <div class="page-content__intro-rate-stars">
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#favorite"></use>
                                                                    </svg>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#favorite"></use>
                                                                    </svg>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#favorite"></use>
                                                                    </svg>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#favorite"></use>
                                                                    </svg>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#favorite"></use>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="request-card__table-item request-card__table-item-status">
                                                            <span class="tag tag--mini">
                                                                <span class="tag__content-bg" style="
                                                                        border-color: var(--warning5-color);
                                                                        background-color: var(--warning8-color);"></span>
                                                                <span class="tag__content">
                                                                    <span class="tag__content-text" style="color: var(--warning3-color);">на рассмотрении</span>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="request-card__table-item request-card__table-item-id">1577</div>
                                                        <div class="request-card__table-item request-card__table-item-birthday">26.09.2021</div>
                                                        <div class="request-card__table-item request-card__table-item-age">22</div>
                                                    </div>
                                                </div>
                                                <div class="accordion__collapse-item">
                                                    <div class="request-card__table">
                                                        <div class="request-card__table-item request-card__table-item-check">
                                                            <div class="custom-checkbox">
                                                                <input
                                                                        class="custom-checkbox__input checkall-group"
                                                                        type="checkbox"
                                                                        data-checkall-group="requestCardTwo"
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="request-card__table-item request-card__table-item-name">
                                                            <div class="request-card__table-item-name-view">
                                                                <picture>
                                                                    <source srcset="img/card-photo-volunteer.webp" type="image/webp">
                                                                    <img loading="lazy" src="img/card-photo-volunteer.png" class="image" width="42" height="42" alt="Фото карточки">
                                                                </picture>
                                                            </div>
                                                            <div class="request-card__table-item-name-title">Никифорова Мариша Улебовна</div>
                                                        </div>
                                                        <div class="request-card__table-item request-card__table-item-time">2.0</div>
                                                        <div class="request-card__table-item request-card__table-item-rate">
                                                            <div class="page-content__intro-rate">
                                                                <div class="page-content__intro-rate-stars">
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#favorite"></use>
                                                                    </svg>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#favorite"></use>
                                                                    </svg>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#favorite"></use>
                                                                    </svg>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#favorite"></use>
                                                                    </svg>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#favorite"></use>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="request-card__table-item request-card__table-item-status">
                                                            <span class="tag tag--mini">
                                                                <span class="tag__content-bg" style="
                                                                        border-color: var(--error4-color);
                                                                        background-color: var(--error9-color);"></span>
                                                                <span class="tag__content">
                                                                    <span class="tag__content-text" style="color: var(--error4-color);">отклонена</span>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="request-card__table-item request-card__table-item-id">1577</div>
                                                        <div class="request-card__table-item request-card__table-item-birthday">26.09.2021</div>
                                                        <div class="request-card__table-item request-card__table-item-age">22</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
					</div>
					<div class="page-content__sidebar">
                        sidebar
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>