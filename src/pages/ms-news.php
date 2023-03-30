<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="block-mb">
	<div class="container">
		<div class="main-section">
            <div class="block-mb-lg">
                <?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/main-section-tabs.php"); ?>
            </div>
			<div class="main-section__content">
				<div class="main-section__header block-header">
					<div class="block-header__title block-header-control">
                        <h1 class="block-header__title-text h2">Новости и медиа</h1>
                        <div class="block-header-control__tag-bar">
                            <div class="tag-bar tag-bar--slider swiper js-tag-bar-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                                    <span class="tag">
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
                                                    </span>
                                    </div>
                                    <div class="swiper-slide">
                                                    <span class="tag">
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
                                                    </span>
                                    </div>
                                    <div class="swiper-slide">
                                                    <span class="tag">
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
                                                    </span>
                                    </div>
                                    <div class="swiper-slide">
                                                    <span class="tag">
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
                                                    </span>
                                    </div>
                                    <div class="swiper-slide">
                                                    <span class="tag">
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
                                                    </span>
                                    </div>
                                    <div class="swiper-slide">
                                                    <span class="tag">
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
                                                    </span>
                                    </div>
                                    <div class="swiper-slide">
                                                    <span class="tag">
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
                                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
				<div class="main-section__page-content">
                    <div class="media">
                        <div class="block-mb-lg">
                            <div class="card-list card-list-media-grid">
                                <a href="javascript:;" class="card">
                                    <span class="card__view">
                                        <picture>
                                            <source srcset="img/lk-org-profile-cover.webp" type="image/webp">
                                            <img loading="lazy" src="img/lk-org-profile-cover.png" class="image" width="1250" height="375" alt="Фото карточки">
                                        </picture>
                                    </span>
                                    <span class="card__descr">
                                        <span class="card__tag-bar tag-bar">
                                            <span class="tag">
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
                                            </span>
                                        </span>
                                        <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                        <span class="card__action">
                                            <span class="card__action-data">
                                                <span class="card__action-item">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#eye-on"></use>
                                                    </svg>
                                                    <span class="card__action-item-text">1 890</span>
                                                </span>
                                                <span class="card__action-item">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#calendar"></use>
                                                    </svg>
                                                    <span class="card__action-item-text">19 марта 2022</span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <a href="javascript:;" class="card">
                                    <span class="card__view">
                                        <picture>
                                            <source srcset="img/card-photo.webp" type="image/webp">
                                            <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                        </picture>
                                    </span>
                                    <span class="card__descr">
                                        <span class="card__tag-bar tag-bar">
                                            <span class="tag">
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
                                            </span>
                                        </span>
                                        <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                        <span class="card__action">
                                            <span class="card__action-data">
                                                <span class="card__action-item">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#eye-on"></use>
                                                    </svg>
                                                    <span class="card__action-item-text">1 890</span>
                                                </span>
                                                <span class="card__action-item">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#calendar"></use>
                                                    </svg>
                                                    <span class="card__action-item-text">19 марта 2022</span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <a href="javascript:;" class="card">
                                    <span class="card__view">
                                        <picture>
                                            <source srcset="img/card-photo.webp" type="image/webp">
                                            <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                        </picture>
                                    </span>
                                    <span class="card__descr">
                                        <span class="card__tag-bar tag-bar">
                                            <span class="tag">
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
                                            </span>
                                        </span>
                                        <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                        <span class="card__action">
                                            <span class="card__action-data">
                                                <span class="card__action-item">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#eye-on"></use>
                                                    </svg>
                                                    <span class="card__action-item-text">1 890</span>
                                                </span>
                                                <span class="card__action-item">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#calendar"></use>
                                                    </svg>
                                                    <span class="card__action-item-text">19 марта 2022</span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <a href="javascript:;" class="card">
                                    <span class="card__view">
                                        <picture>
                                            <source srcset="img/card-photo.webp" type="image/webp">
                                            <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                        </picture>
                                    </span>
                                    <span class="card__descr">
                                        <span class="card__tag-bar tag-bar">
                                            <span class="tag">
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
                                            </span>
                                        </span>
                                        <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                        <span class="card__action">
                                            <span class="card__action-data">
                                                <span class="card__action-item">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#eye-on"></use>
                                                    </svg>
                                                    <span class="card__action-item-text">1 890</span>
                                                </span>
                                                <span class="card__action-item">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#calendar"></use>
                                                    </svg>
                                                    <span class="card__action-item-text">19 марта 2022</span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
						<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/pagination.php"); ?>
                    </div>

				</div>
			</div>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>
