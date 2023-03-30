<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="block-mb">
    <div class="container">
        <div class="page-content">
            <div class="block-mb-md">
                <?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/page-content-header-details-org.php"); ?>
            </div>

            <div class="page-content__body">
                <div class="block-mb-md">
                    <div class="page-content-tabs-container">
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
                </div>

                <div class="page-content__container">
                    <div class="page-content__main page-content__main--full">
                        <div class="block-mb-lg">
                            <div class="block-mb-md">
                                <div class="gallery gallery-video">
                                    <a class="gallery__item" data-fancybox="gallery-video" data-src="https://www.youtube.com/embed/K4TOrB7at0Y">
                                        <iframe
                                                width="560"
                                                height="315"
                                                src="https://www.youtube.com/embed/K4TOrB7at0Y"
                                                title="YouTube video player"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                allowfullscreen
                                        ></iframe>
                                    </a>
                                    <a class="gallery__item" data-fancybox="gallery-video" data-src="https://www.youtube.com/embed/K4TOrB7at0Y">
                                        <iframe
                                                width="560"
                                                height="315"
                                                src="https://www.youtube.com/embed/K4TOrB7at0Y"
                                                title="YouTube video player"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                allowfullscreen
                                        ></iframe>
                                    </a>
                                    <a class="gallery__item" data-fancybox="gallery-video" data-src="https://www.youtube.com/embed/K4TOrB7at0Y">
                                        <iframe
                                                width="560"
                                                height="315"
                                                src="https://www.youtube.com/embed/K4TOrB7at0Y"
                                                title="YouTube video player"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                allowfullscreen
                                        ></iframe>
                                    </a>
                                    <a class="gallery__item" data-fancybox="gallery-video" data-src="https://www.youtube.com/embed/K4TOrB7at0Y">
                                        <iframe
                                                width="560"
                                                height="315"
                                                src="https://www.youtube.com/embed/K4TOrB7at0Y"
                                                title="YouTube video player"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                allowfullscreen
                                        ></iframe>
                                    </a>
                                    <a class="gallery__item" data-fancybox="gallery-video" data-src="https://www.youtube.com/embed/K4TOrB7at0Y">
                                        <iframe
                                                width="560"
                                                height="315"
                                                src="https://www.youtube.com/embed/K4TOrB7at0Y"
                                                title="YouTube video player"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                allowfullscreen
                                        ></iframe>
                                    </a>
                                </div>
                            </div>

                            <?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/pagination.php"); ?>
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

                </div>
            </div>
        </div>
    </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>