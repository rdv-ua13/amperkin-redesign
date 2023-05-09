<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="gap-lg">
	<div class="container">
		<div class="gap-sm">
			<div class="h5 search-results-title">По запросу <span class="semi-bold">розетки</span> найдено 2 942 товара</div>
		</div>
        <div class="gap-md">
            <div class="border-bottom extra-search">
                <div class="extra-search__title">Дополнить поиск:</div>
                <div class="tag-bar-wrapper">
                    <div class="tag-bar swiper" data-tag-bar-slider>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <label class="btn btn-mini btn-light">
                                    <input
                                            class="visually-hidden"
                                            type="checkbox"
                                            name="EXTRASEARCH[TAGS][]"
                                            value=""
                                    >
                                    <span class="btn__text">для кухни</span>
                                </label>
                            </div>
                            <div class="swiper-slide">
                                <label class="btn btn-mini btn-light">
                                    <input
                                            class="visually-hidden"
                                            type="checkbox"
                                            name="EXTRASEARCH[TAGS][]"
                                            value=""
                                    >
                                    <span class="btn__text">двухпостовые</span>
                                </label>
                            </div>
                            <div class="swiper-slide">
                                <label class="btn btn-mini btn-light">
                                    <input
                                            class="visually-hidden"
                                            type="checkbox"
                                            name="EXTRASEARCH[TAGS][]"
                                            value=""
                                    >
                                    <span class="btn__text">для гостиной</span>
                                </label>
                            </div>
                            <div class="swiper-slide">
                                <label class="btn btn-mini btn-light">
                                    <input
                                            class="visually-hidden"
                                            type="checkbox"
                                            name="EXTRASEARCH[TAGS][]"
                                            value=""
                                    >
                                    <span class="btn__text">Legrand</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="catalog catalog-category"> <?/* available values - "catalog-category--grid", "catalog-category--list", "catalog-category--table" */?>
            <div class="catalog-sidebar">
                <div class="catalog-sidebar__top">
                    sidebar-top <br>
                    sidebar-top <br>
                    sidebar-top <br>
                    sidebar-top <br>
                    sidebar-top <br>
                    sidebar-top <br>
                    sidebar-top <br>
                    sidebar-top <br>
                    sidebar-top <br>
                    sidebar-top
                </div>
                <div class="catalog-sidebar__filter">
                    sidebar-filter <br>
                    sidebar-filter
                </div>
            </div>

            <div class="catalog-content">
                <div class="catalog-content__top">
                    <div class="catalog-content-sections"></div>
                    <div class="gap-lg catalog-content-settings">
                        <div class="catalog-content-settings__sort">
                            <!---->
                            <div class="catalog-content-settings__sort-title">Сортировать:</div>
                            <div class="catalog-content-settings__sort-select">
                                <span class="catalog-content-settings__sort-select-text">Сначала недорогие</span>
                                <svg class="icon">
                                    <use href="img/sprite.svg#chevron-down"></use>
                                </svg>
                            </div>
                            <div class="catalog-content-settings__sort-options">
                                <div class="catalog-content-settings__sort-item">
                                    <input
                                            id="sortByLowPrice"
                                            type="radio"
                                            class="visually-hidden"
                                            name="sortCatalogCategory"
                                            value=""
                                            checked
                                    >
                                    <label for="sortByLowPrice" class="catalog-content-settings__sort-label active">Сначала недорогие</label>
                                </div>
                                <div class="catalog-content-settings__sort-item">
                                    <input
                                            id="sortByHighPrice"
                                            type="radio"
                                            class="visually-hidden"
                                            name="sortCatalogCategory"
                                            value=""
                                    >
                                    <label for="sortByHighPrice" class="catalog-content-settings__sort-label">Сначала дорогие</label>
                                </div>
                                <div class="catalog-content-settings__sort-item">
                                    <input
                                            id="sortByPopular"
                                            type="radio"
                                            class="visually-hidden"
                                            name="sortCatalogCategory"
                                            value=""
                                    >
                                    <label for="sortByPopular" class="catalog-content-settings__sort-label">Сначала популярные</label>
                                </div>
                            </div>
                            <!---->
                        </div>
                        <div class="catalog-content-settings__view">view</div>
                    </div>
                    <div class="catalog-content-filter-spoiler">
                        filter-spoiler
                    </div>
                    <div class="catalog-content-filter-selected">
                        filter-selected
                    </div>
                </div>
                <div class="catalog-content__layout">
                    <div class="catalog-content__grid">
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
                                    <div class="card-product-descr__availability in-stock">
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
                                            <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
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
                                    <div class="card-product-descr__availability on-order">
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
                                            <div class="card-product-descr__price-current">6 173,10 ₽</div>
                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
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
                                    <div class="card-product-descr__availability on-order">
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
                                            <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
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
                                    <div class="card-product-descr__availability in-stock">
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
                                            <div class="card-product-descr__price-current">5 827,99 ₽</div>
                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
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
                                    <div class="card-product-descr__availability in-stock">
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
                                            <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
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
                                    <div class="card-product-descr__availability in-stock">
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
                                            <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
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
                                    <div class="card-product-descr__availability in-stock">
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
                                            <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
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
                                    <div class="card-product-descr__availability on-order">
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
                                            <div class="card-product-descr__price-current">6 173,10 ₽</div>
                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
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
                                    <div class="card-product-descr__availability in-stock">
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
                                            <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
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
                                    <div class="card-product-descr__availability on-order">
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
                                            <div class="card-product-descr__price-current">6 173,10 ₽</div>
                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
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
                                    <div class="card-product-descr__availability on-order">
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
                                            <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
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
                                    <div class="card-product-descr__availability in-stock">
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
                                            <div class="card-product-descr__price-current">5 827,99 ₽</div>
                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
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
                                    <div class="card-product-descr__availability in-stock">
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
                                            <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
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
                                    <div class="card-product-descr__availability in-stock">
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
                                            <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
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
                                    <div class="card-product-descr__availability in-stock">
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
                                            <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
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
                                    <div class="card-product-descr__availability on-order">
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
                                            <div class="card-product-descr__price-current">6 173,10 ₽</div>
                                            <div class="card-product-descr__price-originally">1 624,50 ₽</div>
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
                    <div class="pagination-wrapper">
						<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/pagination.php"); ?>
                        <div class="pagination-more">
                            <button class="btn-reset btn btn-b-light">
                                <span class="btn__text">Показать еще</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>