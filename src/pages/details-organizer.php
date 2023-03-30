<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="block-mb">
    <div class="container">
        <div class="page-content">
            <div class="block-mb-md">
                <?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/page-content-header-details-org.php"); ?>
            </div>

            <div class="page-content__body">
                <div class="page-content__container page-content__container--profile">
                    <div class="block-mb-md page-content-tabs-container page-content__tabs-container">
                        <div class="page-content-tabs-wrapper">
                            <div class="page-content-tabs swiper js-page-content-tabs">
                                <div class="page-content-tabs__nav swiper-wrapper">
                                    <? $arMenu = array (
                                        "details-organizer.php" => "Об организаторе",
                                        "details-organizer-reviews.php" => "Отзывы",
                                        "details-organizer-photo.php" => "Фотографии",
                                        "details-organizer-video.php" => "Видео",
                                    );
                                    foreach ($arMenu as $arItem => $value) : ?>
                                        <div class="swiper-slide page-content-tabs__nav-item notice">
                                            <a
                                                    href="<?= $arItem ?>"
                                                    class="page-content-tabs__link<? if(strpos($_SERVER["REQUEST_URI"], $arItem)) : ?> selected<? endif; ?>"
                                            >
                                                <span class="page-content-tabs__link-content"><?= $value ?></span>
                                                <span class="page-content-tabs__link-num">18</span>
                                            </a>
                                        </div>
                                    <? endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-content__preview">
                        <div class="page-content__video">
                            <?/*picture - загулшка под видео
                            <video src=""></video>*/?>
                            <picture>
                                <source srcset="img/profile-video.webp" type="image/webp">
                                <img
                                        loading="lazy"
                                        src="img/profile-video.png"
                                        class="image"
                                        width="810"
                                        height="455"
                                        alt="profile-video"
                                >
                            </picture>
                        </div>
                    </div>
                    <div class="page-content__main page-content__main--profile">
                        <div class="block-mb-lg">
                            <div class="page-content__descr">
                                <div class="page-content__descr-item">
                                    <div class="page-content-descr-heading">
                                        <div class="h4">Описание</div>
                                    </div>
                                    <div class="page-content__descr-content">
                                        <div class="page-content__spoiler js-spoiler" data-collapsed-height="88">
                                            <div class="page-content__spoiler-text">Ассоциация волонтёрских центров (АВЦ) – крупнейшая добровольческая организация в России, созданная в 2014 году по инициативе Президента России Владимира Путина с целью сохранения наследия волонтёрской программы XXII Олимпийских игр в Сочи и развития добровольческого движения и гражданской активности в стране. Ассоциация волонтёрских центров (АВЦ) – крупнейшая добровольческая организация в России, созданная в 2014 году по инициативе Президента России Владимира Путина с целью сохранения наследия волонтёрской программы XXII Олимпийских игр в Сочи и развития добровольческого движения и гражданской активности в стране.</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="page-content__descr-item">
                                    <div class="page-content__descr-title">Организационно-правовая форма</div>
                                    <div class="page-content__descr-content">НКО (негосударственная некоммерческая организация)</div>
                                </div>
                                <div class="page-content__descr-item">
                                    <div class="page-content__descr-title">Полное название организации</div>
                                    <div class="page-content__descr-content">Ассоциация волонтерских центров</div>
                                </div>
                                <div class="page-content__descr-item">
                                    <div class="page-content__descr-title">Руководитель</div>
                                    <div class="page-content__descr-content">
                                        <div class="page-content__descr-position">
                                            <div class="page-content__descr-position-view">
                                                <picture>
                                                    <source srcset="img/card-photo-volunteer.webp" type="image/webp">
                                                    <img
                                                            loading="lazy"
                                                            src="img/card-photo-volunteer.png"
                                                            class="image"
                                                            width="32"
                                                            height="32"
                                                            alt="Photo"
                                                    >
                                                </picture>
                                            </div>
                                            <div class="page-content__descr-position-name">Михайлова Светлана Васильевна</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="page-content__descr-item">
                                    <div class="page-content-descr-heading">
                                        <div class="h4">Направления деятельности</div>
                                    </div>
                                    <div class="page-content__descr-content">
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

                                <div class="page-content__descr-item">
                                    <div class="page-content-descr-heading">
                                        <div class="h4">Результаты</div>
                                    </div>
                                    <div class="page-content__descr-content">
                                        <div class="page-content__spoiler js-spoiler" data-collapsed-height="132">
                                            <div class="page-content__spoiler-text">Ассоциация стала российским think tank в области волонтерства. Эксперты АВЦ участвуют в разработке федерального законодательства о волонтерстве, формировании и реализации ключевых государственных программ, национальных проектов. В 2016 году по инициативе Ассоциации был создан Федеральный экспертный совет по развитию добровольчества, позже преобразованный в Координационный совет при Общественной палате РФ. Ассоциация стала российским think tank в области волонтерства. Эксперты АВЦ участвуют в разработке федерального законодательства о волонтерстве, формировании и реализации ключевых государственных программ, национальных проектов. В 2016 году по инициативе Ассоциации был создан Федеральный экспертный совет по развитию добровольчества, позже преобразованный в Координационный совет при Общественной палате РФ.</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="page-content__descr-item">
                                    <div class="page-content-descr-heading">
                                        <div class="h4">Документы</div>
                                    </div>
                                    <div class="page-content__descr-content">
                                        <div class="docs">
                                            <a href="javascript:;" class="docs-card">
                                                <span class="docs-card__title">План мероприятий 2021-2022</span>
                                                <span class="docs-card__format">XLS, 22.4 МБ</span>
                                            </a>
                                            <a href="javascript:;" class="docs-card">
                                                <span class="docs-card__title">Устав</span>
                                                <span class="docs-card__format">PDF, 13.2 МБ</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="page-content__descr-item">
                                    <div class="page-content-descr-heading">
                                        <div class="h4">Партнеры</div>
                                    </div>
                                    <div class="page-content__descr-content">
                                        <div class="block-mb-sm">
                                            <div class="responsive-slider-partners">
                                                <div class="slider partners-slider partners-slider-desktop-grid basic-slider mobile-only-slider js-basic-slider">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <div class="partners-slider__view">
                                                                <picture>
                                                                    <source srcset="img/card-projects-org.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/card-projects-org.png"
                                                                            class="image"
                                                                            width="100"
                                                                            height="100"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="partners-slider__view">
                                                                <picture>
                                                                    <source srcset="img/partners-img.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/partners-img.png"
                                                                            class="image"
                                                                            width="100"
                                                                            height="100"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="partners-slider__view">
                                                                <picture>
                                                                    <source srcset="img/card-projects-org.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/card-projects-org.png"
                                                                            class="image"
                                                                            width="100"
                                                                            height="100"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="partners-slider__view">
                                                                <picture>
                                                                    <source srcset="img/partners-img.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/partners-img.png"
                                                                            class="image"
                                                                            width="100"
                                                                            height="100"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="partners-slider__view">
                                                                <picture>
                                                                    <source srcset="img/card-projects-org.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/card-projects-org.png"
                                                                            class="image"
                                                                            width="100"
                                                                            height="100"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="partners-slider__view">
                                                                <picture>
                                                                    <source srcset="img/partners-img.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/partners-img.png"
                                                                            class="image"
                                                                            width="100"
                                                                            height="100"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="partners-slider__view">
                                                                <picture>
                                                                    <source srcset="img/card-projects-org.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/card-projects-org.png"
                                                                            class="image"
                                                                            width="100"
                                                                            height="100"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="partners-slider__view">
                                                                <picture>
                                                                    <source srcset="img/partners-img.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/partners-img.png"
                                                                            class="image"
                                                                            width="100"
                                                                            height="100"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="partners-slider__view">
                                                                <picture>
                                                                    <source srcset="img/card-projects-org.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/card-projects-org.png"
                                                                            class="image"
                                                                            width="100"
                                                                            height="100"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="partners-slider__view">
                                                                <picture>
                                                                    <source srcset="img/partners-img.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/partners-img.png"
                                                                            class="image"
                                                                            width="100"
                                                                            height="100"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="partners-slider__view">
                                                                <picture>
                                                                    <source srcset="img/card-projects-org.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/card-projects-org.png"
                                                                            class="image"
                                                                            width="100"
                                                                            height="100"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="partners-slider__view">
                                                                <picture>
                                                                    <source srcset="img/partners-img.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/partners-img.png"
                                                                            class="image"
                                                                            width="100"
                                                                            height="100"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn-reset btn btn--midi">
                                            <span class="btn__text">Стать партнером</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="page-content__main-bottom">
                            <div class="block-mb-lg">
                                <div class="block-mb-md">
                                    <div class="block-header block-header-has-filter">
                                        <div class="block-header__title">
                                            <div class="block-header__title-text h2">Экодела организатора</div>
                                            <div class="block-header__title-num h2">18</div>
                                        </div>
                                        <div class="block-header__filter">
                                            <span class="mobile-only">
                                                <span class="block-header__filter-view">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#filter"></use>
                                                    </svg>
                                                </span>
                                            </span>
                                            <span class="desktop-only">filter in process</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-list-responsive card-list-responsive--desktop-only">
                                    <div class="slider basic-slider js-basic-slider">
                                        <div class="swiper-wrapper card-list">
                                            <div class="swiper-slide">
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
                                                                        <use href="img/sprite.svg#pin"></use>
                                                                    </svg>
                                                                    <span class="card__action-item-text">г. Москва</span>
                                                                </span>
                                                                <span class="card__action-item">
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#calendar"></use>
                                                                    </svg>
                                                                    <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                                                </span>
                                                            </span>
                                                            <span class="card__action-btn">
                                                                <button class="btn-reset btn btn--fill">
                                                                    <span class="btn__text">Помочь</span>
                                                                </button>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
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
                                                                        <use href="img/sprite.svg#pin"></use>
                                                                    </svg>
                                                                    <span class="card__action-item-text">г. Москва</span>
                                                                </span>
                                                                <span class="card__action-item">
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#calendar"></use>
                                                                    </svg>
                                                                    <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                                                </span>
                                                            </span>
                                                            <span class="card__action-btn">
                                                                <button class="btn-reset btn btn--fill">
                                                                    <span class="btn__text">Помочь</span>
                                                                </button>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
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
                                                                        <use href="img/sprite.svg#pin"></use>
                                                                    </svg>
                                                                    <span class="card__action-item-text">г. Москва</span>
                                                                </span>
                                                                <span class="card__action-item">
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#calendar"></use>
                                                                    </svg>
                                                                    <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                                                </span>
                                                            </span>
                                                            <span class="card__action-btn">
                                                                <button class="btn-reset btn btn--fill">
                                                                    <span class="btn__text">Помочь</span>
                                                                </button>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
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
                                                                        <use href="img/sprite.svg#pin"></use>
                                                                    </svg>
                                                                    <span class="card__action-item-text">г. Москва</span>
                                                                </span>
                                                                <span class="card__action-item">
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#calendar"></use>
                                                                    </svg>
                                                                    <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                                                </span>
                                                            </span>
                                                            <span class="card__action-btn">
                                                                <button class="btn-reset btn btn--fill">
                                                                    <span class="btn__text">Помочь</span>
                                                                </button>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
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
                                                                        <use href="img/sprite.svg#pin"></use>
                                                                    </svg>
                                                                    <span class="card__action-item-text">г. Москва</span>
                                                                </span>
                                                                <span class="card__action-item">
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#calendar"></use>
                                                                    </svg>
                                                                    <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                                                </span>
                                                            </span>
                                                            <span class="card__action-btn">
                                                                <button class="btn-reset btn btn--fill">
                                                                    <span class="btn__text">Помочь</span>
                                                                </button>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
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
                                                                        <use href="img/sprite.svg#pin"></use>
                                                                    </svg>
                                                                    <span class="card__action-item-text">г. Москва</span>
                                                                </span>
                                                                <span class="card__action-item">
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#calendar"></use>
                                                                    </svg>
                                                                    <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                                                </span>
                                                            </span>
                                                            <span class="card__action-btn">
                                                                <button class="btn-reset btn btn--fill">
                                                                    <span class="btn__text">Помочь</span>
                                                                </button>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
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
                                                                        <use href="img/sprite.svg#pin"></use>
                                                                    </svg>
                                                                    <span class="card__action-item-text">г. Москва</span>
                                                                </span>
                                                                <span class="card__action-item">
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#calendar"></use>
                                                                    </svg>
                                                                    <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                                                </span>
                                                            </span>
                                                            <span class="card__action-btn">
                                                                <button class="btn-reset btn btn--fill">
                                                                    <span class="btn__text">Помочь</span>
                                                                </button>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="javascript:;" class="card card--more">
                                                    <span class="card__descr">
                                                        <span class="card__header h3">Смотреть<br> все экодела</span>
                                                    </span>
                                                    <span class="card__link-pointer">
                                                        <svg class="icon">
                                                            <use href="img/sprite.svg#right"></use>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="">
                                <div class="block-mb-md">
                                    <div class="block-header">
                                        <div class="block-header__title">
                                            <div class="block-header__title-text h2">Проекты</div>
                                            <div class="block-header__title-num h2">18</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-list-responsive card-list-responsive--desktop-only">
                                    <div class="slider basic-slider js-basic-slider">
                                        <div class="swiper-wrapper card-list">
                                            <div class="swiper-slide">
                                                <a href="javascript:;" class="card card--projects">
                                                    <span class="card__view">
                                                        <picture>
                                                            <source srcset="img/card-photo-projects.webp" type="image/webp">
                                                            <img loading="lazy" src="img/card-photo-projects.png" class="image" width="270" height="180" alt="Фото карточки">
                                                        </picture>
                                                    </span>
                                                    <span class="card__descr">
                                                        <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                                        <span class="card__organizer">
                                                            <span class="card__organizer-logo">
                                                                <picture>
                                                                    <source srcset="img/card-projects-org.webp" type="image/webp">
                                                                    <img loading="lazy" src="img/card-projects-org.png" class="image" width="42" height="42" alt="Логотип организатора">
                                                                </picture>
                                                                <span class="card__organizer-logo-check">
                                                                    <span class="success-check success-check--mini">
                                                                        <svg class="icon">
                                                                            <use href="img/sprite.svg#success-check"></use>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                            <span class="card__organizer-descr">
                                                                <span class="card__organizer-title">Ассоциация волонтерских центров</span>
                                                                <span class="card__organizer-activity">12 мероприятий</span>
                                                            </span>
                                                            <span class="card__rate">
                                                                <svg class="icon">
                                                                    <use href="img/sprite.svg#favorite"></use>
                                                                </svg>
                                                                <span class="card__rate-value">4.8</span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="javascript:;" class="card card--projects">
                                                    <span class="card__view">
                                                        <picture>
                                                            <source srcset="img/card-photo-projects.webp" type="image/webp">
                                                            <img loading="lazy" src="img/card-photo-projects.png" class="image" width="270" height="180" alt="Фото карточки">
                                                        </picture>
                                                    </span>
                                                    <span class="card__descr">
                                                        <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                                        <span class="card__organizer">
                                                            <span class="card__organizer-logo">
                                                                <picture>
                                                                    <source srcset="img/card-projects-org.webp" type="image/webp">
                                                                    <img loading="lazy" src="img/card-projects-org.png" class="image" width="42" height="42" alt="Логотип организатора">
                                                                </picture>
                                                                <span class="card__organizer-logo-check">
                                                                    <span class="success-check success-check--mini">
                                                                        <svg class="icon">
                                                                            <use href="img/sprite.svg#success-check"></use>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                            <span class="card__organizer-descr">
                                                                <span class="card__organizer-title">Ассоциация волонтерских центров</span>
                                                                <span class="card__organizer-activity">12 мероприятий</span>
                                                            </span>
                                                            <span class="card__rate">
                                                                <svg class="icon">
                                                                    <use href="img/sprite.svg#favorite"></use>
                                                                </svg>
                                                                <span class="card__rate-value">4.8</span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="javascript:;" class="card card--projects">
                                                    <span class="card__view">
                                                        <picture>
                                                            <source srcset="img/card-photo-projects.webp" type="image/webp">
                                                            <img loading="lazy" src="img/card-photo-projects.png" class="image" width="270" height="180" alt="Фото карточки">
                                                        </picture>
                                                    </span>
                                                    <span class="card__descr">
                                                        <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                                        <span class="card__organizer">
                                                            <span class="card__organizer-logo">
                                                                <picture>
                                                                    <source srcset="img/card-projects-org.webp" type="image/webp">
                                                                    <img loading="lazy" src="img/card-projects-org.png" class="image" width="42" height="42" alt="Логотип организатора">
                                                                </picture>
                                                                <span class="card__organizer-logo-check">
                                                                    <span class="success-check success-check--mini">
                                                                        <svg class="icon">
                                                                            <use href="img/sprite.svg#success-check"></use>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                            <span class="card__organizer-descr">
                                                                <span class="card__organizer-title">Ассоциация волонтерских центров</span>
                                                                <span class="card__organizer-activity">12 мероприятий</span>
                                                            </span>
                                                            <span class="card__rate">
                                                                <svg class="icon">
                                                                    <use href="img/sprite.svg#favorite"></use>
                                                                </svg>
                                                                <span class="card__rate-value">4.8</span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="javascript:;" class="card card--projects">
                                                    <span class="card__view">
                                                        <picture>
                                                            <source srcset="img/card-photo-projects.webp" type="image/webp">
                                                            <img loading="lazy" src="img/card-photo-projects.png" class="image" width="270" height="180" alt="Фото карточки">
                                                        </picture>
                                                    </span>
                                                    <span class="card__descr">
                                                        <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                                        <span class="card__organizer">
                                                            <span class="card__organizer-logo">
                                                                <picture>
                                                                    <source srcset="img/card-projects-org.webp" type="image/webp">
                                                                    <img loading="lazy" src="img/card-projects-org.png" class="image" width="42" height="42" alt="Логотип организатора">
                                                                </picture>
                                                                <span class="card__organizer-logo-check">
                                                                    <span class="success-check success-check--mini">
                                                                        <svg class="icon">
                                                                            <use href="img/sprite.svg#success-check"></use>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                            <span class="card__organizer-descr">
                                                                <span class="card__organizer-title">Ассоциация волонтерских центров</span>
                                                                <span class="card__organizer-activity">12 мероприятий</span>
                                                            </span>
                                                            <span class="card__rate">
                                                                <svg class="icon">
                                                                    <use href="img/sprite.svg#favorite"></use>
                                                                </svg>
                                                                <span class="card__rate-value">4.8</span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="javascript:;" class="card card--projects">
                                                    <span class="card__view">
                                                        <picture>
                                                            <source srcset="img/card-photo-projects.webp" type="image/webp">
                                                            <img loading="lazy" src="img/card-photo-projects.png" class="image" width="270" height="180" alt="Фото карточки">
                                                        </picture>
                                                    </span>
                                                    <span class="card__descr">
                                                        <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                                        <span class="card__organizer">
                                                            <span class="card__organizer-logo">
                                                                <picture>
                                                                    <source srcset="img/card-projects-org.webp" type="image/webp">
                                                                    <img loading="lazy" src="img/card-projects-org.png" class="image" width="42" height="42" alt="Логотип организатора">
                                                                </picture>
                                                                <span class="card__organizer-logo-check">
                                                                    <span class="success-check success-check--mini">
                                                                        <svg class="icon">
                                                                            <use href="img/sprite.svg#success-check"></use>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                            <span class="card__organizer-descr">
                                                                <span class="card__organizer-title">Ассоциация волонтерских центров</span>
                                                                <span class="card__organizer-activity">12 мероприятий</span>
                                                            </span>
                                                            <span class="card__rate">
                                                                <svg class="icon">
                                                                    <use href="img/sprite.svg#favorite"></use>
                                                                </svg>
                                                                <span class="card__rate-value">4.8</span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="javascript:;" class="card card--projects">
                                                    <span class="card__view">
                                                        <picture>
                                                            <source srcset="img/card-photo-projects.webp" type="image/webp">
                                                            <img loading="lazy" src="img/card-photo-projects.png" class="image" width="270" height="180" alt="Фото карточки">
                                                        </picture>
                                                    </span>
                                                    <span class="card__descr">
                                                        <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                                        <span class="card__organizer">
                                                            <span class="card__organizer-logo">
                                                                <picture>
                                                                    <source srcset="img/card-projects-org.webp" type="image/webp">
                                                                    <img loading="lazy" src="img/card-projects-org.png" class="image" width="42" height="42" alt="Логотип организатора">
                                                                </picture>
                                                                <span class="card__organizer-logo-check">
                                                                    <span class="success-check success-check--mini">
                                                                        <svg class="icon">
                                                                            <use href="img/sprite.svg#success-check"></use>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                            <span class="card__organizer-descr">
                                                                <span class="card__organizer-title">Ассоциация волонтерских центров</span>
                                                                <span class="card__organizer-activity">12 мероприятий</span>
                                                            </span>
                                                            <span class="card__rate">
                                                                <svg class="icon">
                                                                    <use href="img/sprite.svg#favorite"></use>
                                                                </svg>
                                                                <span class="card__rate-value">4.8</span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="javascript:;" class="card card--projects">
                                                    <span class="card__view">
                                                        <picture>
                                                            <source srcset="img/card-photo-projects.webp" type="image/webp">
                                                            <img loading="lazy" src="img/card-photo-projects.png" class="image" width="270" height="180" alt="Фото карточки">
                                                        </picture>
                                                    </span>
                                                    <span class="card__descr">
                                                        <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                                        <span class="card__organizer">
                                                            <span class="card__organizer-logo">
                                                                <picture>
                                                                    <source srcset="img/card-projects-org.webp" type="image/webp">
                                                                    <img loading="lazy" src="img/card-projects-org.png" class="image" width="42" height="42" alt="Логотип организатора">
                                                                </picture>
                                                                <span class="card__organizer-logo-check">
                                                                    <span class="success-check success-check--mini">
                                                                        <svg class="icon">
                                                                            <use href="img/sprite.svg#success-check"></use>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                            <span class="card__organizer-descr">
                                                                <span class="card__organizer-title">Ассоциация волонтерских центров</span>
                                                                <span class="card__organizer-activity">12 мероприятий</span>
                                                            </span>
                                                            <span class="card__rate">
                                                                <svg class="icon">
                                                                    <use href="img/sprite.svg#favorite"></use>
                                                                </svg>
                                                                <span class="card__rate-value">4.8</span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="javascript:;" class="card card--more">
                                                    <span class="card__descr">
                                                        <span class="card__header h3">Смотреть<br> все проекты</span>
                                                    </span>
                                                    <span class="card__link-pointer">
                                                        <svg class="icon">
                                                            <use href="img/sprite.svg#right"></use>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="page-content__sidebar">
                        <div class="page-content__sidebar-item">
                            <div class="page-content-descr-heading">
                                <div class="h4">Контакты</div>
                            </div>
                            <div class="page-content__sidebar-contacts">
                                <span class="page-content__sidebar-contacts-item">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#pin"></use>
                                    </svg>
                                    <span class="page-content__sidebar-contacts-text">Москва, пер. Тетеринский, 18, стр. 2</span>
                                </span>
                                <span class="page-content__sidebar-contacts-item">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#phone"></use>
                                    </svg>
                                    <span class="page-content__sidebar-contacts-text">+7 495 796-03-06</span>
                                </span>
                                <span class="page-content__sidebar-contacts-item">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#mail"></use>
                                    </svg>
                                    <span class="page-content__sidebar-contacts-text">mih.konstantin@gmail.com</span>
                                </span>
                                <span class="page-content__sidebar-contacts-item">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#external"></use>
                                    </svg>
                                    <span class="page-content__sidebar-contacts-text">http://avcrf.ru</span>
                                </span>
                            </div>
                            <div class="page-content__sidebar-soc">
                                <a href="javascript:;" class="page-content__sidebar-soc-item">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#media-vk"></use>
                                    </svg>
                                </a>
                                <a href="javascript:;" class="page-content__sidebar-soc-item">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#media-ok"></use>
                                    </svg>
                                </a>
                                <a href="javascript:;" class="page-content__sidebar-soc-item">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#media-insta"></use>
                                    </svg>
                                </a>
                                <a href="javascript:;" class="page-content__sidebar-soc-item">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#media-telegram"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="page-content__sidebar-item">
                            <div class="page-content-descr-heading">
                                <div class="h4">Рейтинг и отзывы</div>
                            </div>
                            <div class="page-content__sidebar-rate">
                                <div class="page-content__intro-bottom">
                                    <div class="page-content__intro-rate">
                                        <div class="page-content__intro-rate-value">4.8</div>
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
                                    <div class="page-content__intro-reviews">
                                        <a href="javascript:;" class="btn-reset btn btn--noframe btn--link btn--tdu-dashed">
                                            <span class="btn__text">193 отзыва</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-content__sidebar-item">
                            <div class="page-content-descr-heading">
                                <div class="h4">Аналитика организатора</div>
                            </div>
                            <div class="page-content__sidebar-stats">
                                <div class="page-content__sidebar-stats-item">
                                    <span class="page-content__sidebar-stats-text">Волонтеров помогает</span>
                                    <span class="page-content__sidebar-stats-value">259 727</span>
                                </div>
                                <div class="page-content__sidebar-stats-item">
                                    <span class="page-content__sidebar-stats-text">Экодел</span>
                                    <span class="page-content__sidebar-stats-value">24 383</span>
                                </div>
                                <div class="page-content__sidebar-stats-item">
                                    <span class="page-content__sidebar-stats-text">Часов</span>
                                    <span class="page-content__sidebar-stats-value">4 734 337</span>
                                </div>
                            </div>
                        </div>
                        <button class="btn-reset btn btn--noframe btn--full text5-color">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#calendar"></use>
                            </svg>
                            <span class="btn__text">Дата регистрации: 12.08.2019</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>