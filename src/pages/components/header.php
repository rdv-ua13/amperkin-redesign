<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#111111">

    <title>TITLE</title>

    <link rel="preload" href="fonts/Inter-Light.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Inter-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Inter-SemiBold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Inter-Bold.ttf" as="font" type="font/ttf" crossorigin>

    <link rel="stylesheet" href="css/vendors.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">

    <?/* Подключение библиотек (отдельно)*/?>
    <script defer src="js/jquery.js"></script>    <!-- jquery -->
    <script defer src="js/jquery.maskedinput.js"></script>    <!-- maskedinput -->
    <script defer src="js/jquery.validate.js"></script>    <!-- validate -->
    <script defer src="js/messages_ru.js"></script>    <!-- validate -->
    <script defer src="js/popper.js"></script>    <!-- popper -->
    <script defer src="js/swiper-bundle.js"></script>    <!-- swiper -->
    <script defer src="js/tippy-bundle.umd.js"></script>    <!-- tippy -->
    <script defer src="js/fancybox.umd.js"></script>    <!-- fancybox -->
    <script defer src="js/select2.js"></script>    <!-- select2 -->
    <script defer src="js/readmore.js"></script>    <!-- readmore -->
    <script defer src="js/flatpickr.min.js"></script>    <!-- flatpickr -->
    <script defer src="js/ru.js"></script>    <!-- flatpickr -->

	<?/* Подключение библиотек (объединённо)
    <script defer src="js/libs.min.js"></script> */?>

    <script defer src="js/main.js"></script>
</head>
<body>
    <header class="header fixed-block">
        <div class="header-top">
            <div class="container header-container">
                <div class="header-top-nav">
                    <ul class="list-reset header-top-nav__list">
                        <li><a class="header-top__link" href="javascript:;">Доставка</a></li>
                        <li><a class="header-top__link" href="javascript:;">Оплата</a></li>
                        <li><a class="header-top__link" href="javascript:;">Гарантия</a></li>
                        <li><a class="header-top__link" href="javascript:;">Программа лояльности</a></li>
                        <li><a class="header-top__link" href="javascript:;">Акции</a></li>
                        <li><a class="header-top__link" href="javascript:;">Статьи</a></li>
                        <li><a class="header-top__link" href="javascript:;">Распродажа</a></li>
                        <li><a class="header-top__link" href="javascript:;">Контакты</a></li>
                    </ul>
                </div>
                <div class="header-top-city">
					<?/* // todo (@Masterkov): update 23/04/2023 */?>
                    <button
                            class="btn-reset header-top__link header-top-city__spoiler"
                            type="button"
                            data-fancybox
                            data-src="#modal-city"
                    >
                        <svg class="icon icon-sm">
                            <use href="img/sprite.svg#pin"></use>
                        </svg>
                        <span class="header-top-city__spoiler-text">
                            <span>Москва</span>
                            <svg class="icon">
                                <use href="img/sprite.svg#chevron-down"></use>
                            </svg>
                        </span>
                    </button>
                </div>
				<?/* login
                <div class="header-top-profile">
                    <div class="header-top-profile__view">
                        <picture>
                            <source srcset="img/avatar.webp" type="image/webp">
                            <img
                                loading="lazy"
                                src="img/avatar.png"
                                width="28"
                                height="28"
                                alt="Изображение блока"
                            >
                        </picture>
                    </div>
                    <div class="header-top-profile__descr">
                        <div class="header-top-profile__name">Илья маковецкий</div>
                        <div class="header-top-profile__bonus">
                            <div class="header-top-profile__bonus-value">
                                <span>2746,99</span>
                                <svg class="icon">
                                    <use href="img/sprite.svg#fill-bonus"></use>
                                </svg>
                            </div>
                            <div class="header-top-profile__bonus-exp">до 01.04</div>
                        </div>
                    </div>
                    <div class="header-top-profile__pointer">
                        <svg class="icon">
                            <use href="img/sprite.svg#chevron-down"></use>
                        </svg>
                    </div>
                </div>*/?>
				<?/* not logged */?>
                <div class="header-top-profile not-logged">
                    <button class="btn-reset btn btn-mini btn-light" data-fancybox data-src="#modal-auth">
                        <span class="btn__text">Войти</span>
                    </button>
                    <button class="btn-reset btn btn-mini btn-primary" data-fancybox data-src="#modal-reg">
                        <span class="btn__text">Регистрация</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="header-nav">
            <div class="container header-container header-nav-container">
                <div class="header-logo">
                    <a class="logo" href="javascript:;">
                        <img
                            loading="lazy"
                            class="image"
                            src="img/logo.svg"
                            width="158"
                            height="44"
                            alt="Амперкин - выбор профессионалов"
                        >
                    </a>
                </div>

                <div class="header-search">
					<?/* // todo (@Masterkov): update 23/04/2023 */?>
                    <form id="" class="form" method="" action="javascript:;">
                        <div class="input-search-wrapper">
                            <input
                                    class="input-reset input-search"
                                    type="search"
                                    name="Поиск"
                                    placeholder="Розетка, ST9431B (артикул) или номер заказа..."
                                    autocomplete="off"
                                    onclick="$(this).closest('.header-search').find('.header-search-results').toggleClass('active');"
                            >
                            <button class="btn-reset btn btn-mini btn-primary input-search-btn" type="submit">
                                <span class="btn__text">Найти</span>
                            </button>
                        </div>
                    </form>
                    <?/* todo @Masterkov - add new block to template and delete --> `onclick="$(this).closest('.header-search').find('.header-search-results').toggleClass('active');"` */?>
                    <div class="header-search-results">
                        <div class="search-results">
                            <div class="search-results__sidebar">
                                <div class="search-results__sidebar-item search-results__match search-results__match--history">
                                    <div class="search-results__match-item" data-removable>
                                        <a class="btn-reset btn btn-link search-results__link" href="javascript:;">
                                            <svg class="icon btn__icon">
                                                <use href="img/sprite.svg#history"></use>
                                            </svg>
                                            <span class="btn__text">выключатель двойной</span>
                                        </a>
                                        <div class="search-results__link-delete" data-delete-trigger>
                                            <svg class="icon icon-sm">
                                                <use href="img/sprite.svg#cross"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="search-results__match-item" data-removable>
                                        <a class="btn-reset btn btn-link search-results__link" href="javascript:;">
                                            <svg class="icon btn__icon">
                                                <use href="img/sprite.svg#history"></use>
                                            </svg>
                                            <span class="btn__text">автоматический выключатель</span>
                                        </a>
                                        <div class="search-results__link-delete" data-delete-trigger>
                                            <svg class="icon icon-sm">
                                                <use href="img/sprite.svg#cross"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
								<?/* todo (@Masterkov): хз что с autocomplete делать
                                <div class="search-results__sidebar-item search-results__match search-results__match--typed">
                                </div>*/?>

                                <div class="search-results__sidebar-item search-results__categories">
                                    <div class="search-results__sidebar-title">Искать в категории:</div>
                                    <a class="btn-reset btn btn-link search-results__link" href="javascript:;">
                                        <span class="btn__text">Розетки и выключаетели</span>
                                    </a>
                                    <a class="btn-reset btn btn-link search-results__link" href="javascript:;">
                                        <span class="btn__text">Розетки двухпостовые</span>
                                    </a>
                                    <a class="btn-reset btn btn-link search-results__link" href="javascript:;">
                                        <span class="btn__text">Рамки для розеток</span>
                                    </a>
                                </div>
                                <div class="search-results__sidebar-item search-results__brands">
                                    <div class="search-results__sidebar-title">Бренды:</div>
                                    <a class="btn-reset btn btn-link search-results__link" href="javascript:;">
                                        <span class="btn__text">ABB</span>
                                    </a>
                                    <a class="btn-reset btn btn-link search-results__link" href="javascript:;">
                                        <span class="btn__text">DEKraft</span>
                                    </a>
                                    <a class="btn-reset btn btn-link search-results__link" href="javascript:;">
                                        <span class="btn__text">Legrand</span>
                                    </a>
                                </div>
                                <div class="search-results__sidebar-item search-results__series">
                                    <div class="search-results__sidebar-title">Серии:</div>
                                    <a class="btn-reset btn btn-link search-results__link" href="javascript:;">
                                        <span class="btn__text">BA-101</span>
                                    </a>
                                    <a class="btn-reset btn btn-link search-results__link" href="javascript:;">
                                        <span class="btn__text">Valena Classic</span>
                                    </a>
                                    <a class="btn-reset btn btn-link search-results__link" href="javascript:;">
                                        <span class="btn__text">Averes</span>
                                    </a>
                                </div>
                            </div>
                            <div class="search-results__suggest">
                                <div class="search-results__suggest-list">
                                    <div class="search-results-product">
                                        <div class="search-results-product__view">
                                            <picture>
                                                <source srcset="img/product.webp" type="image/webp">
                                                <img
                                                        loading="lazy"
                                                        src="img/product.png"
                                                        class="image"
                                                        width="64"
                                                        height="64"
                                                        alt="Изображение блока"
                                                >
                                            </picture>
                                        </div>
                                        <div class="search-results-product__descr">
                                            <div class="search-results-product__descr-header">
                                                <div class="search-results-product__info">
                                                    <span class="product-code"><span>ZB3327018</span></span>
                                                </div>
                                                <div class="search-results-product__title">SE Unica System+ Антрацит Блок розеточный (2к+з)+usb тип А</div>
                                            </div>
                                            <div class="search-results-product__descr-bottom">
                                                <div class="search-results-product__price">
                                                    <div class="search-results-product__price-current">1 478,40 ₽</div>
                                                    <div class="search-results-product__price-originally">1 624,50 ₽</div>
                                                </div>
                                                <div class="search-results-product__cart cart-buy">
                                                    <div class="cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-sm btn__icon icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input id="" class="input-reset cart-quantity-input" type="text" placeholder="999" value="1" max="999" data-mult="1">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn btn-mini btn-primary cart-in" type="button">
                                                        <span class="btn__text">В КОРЗИНУ</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-results-product">
                                        <div class="search-results-product__view">
                                            <picture>
                                                <source srcset="img/product-2.webp" type="image/webp">
                                                <img
                                                        loading="lazy"
                                                        src="img/product-2.png"
                                                        class="image"
                                                        width="64"
                                                        height="64"
                                                        alt="Изображение блока"
                                                >
                                            </picture>
                                        </div>
                                        <div class="search-results-product__descr">
                                            <div class="search-results-product__descr-header">
                                                <div class="search-results-product__info">
                                                    <span class="product-code"><span>AB3327018</span></span>
                                                </div>
                                                <div class="search-results-product__title">SE Удлинитель катушечный Thorsman 4 роз 15м</div>
                                            </div>
                                            <div class="search-results-product__descr-bottom">
                                                <div class="search-results-product__price">
                                                    <div class="search-results-product__price-current">1 478,40 ₽</div>
                                                    <div class="search-results-product__price-originally">1 624,50 ₽</div>
                                                </div>
                                                <div class="search-results-product__cart cart-buy">
                                                    <div class="cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-sm btn__icon icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input id="" class="input-reset cart-quantity-input" type="text" placeholder="999" value="1" max="999" data-mult="1">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn btn-mini btn-primary cart-in" type="button">
                                                        <span class="btn__text">В КОРЗИНУ</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-results-product">
                                        <div class="search-results-product__view">
                                            <picture>
                                                <source srcset="img/product-3.webp" type="image/webp">
                                                <img
                                                        loading="lazy"
                                                        src="img/product-3.png"
                                                        class="image"
                                                        width="64"
                                                        height="64"
                                                        alt="Изображение блока"
                                                >
                                            </picture>
                                        </div>
                                        <div class="search-results-product__descr">
                                            <div class="search-results-product__descr-header">
                                                <div class="search-results-product__info">
                                                    <span class="product-code"><span>BB3327018</span></span>
                                                </div>
                                                <div class="search-results-product__title">SE Unica Extend Бел Удлинитель 3 розетки 2К+З, кабель 1,5м</div>
                                            </div>
                                            <div class="search-results-product__descr-bottom">
                                                <div class="search-results-product__price">
                                                    <div class="search-results-product__price-current">1 478,40 ₽</div>
                                                    <div class="search-results-product__price-originally">1 624,50 ₽</div>
                                                </div>
                                                <div class="search-results-product__cart cart-buy">
                                                    <div class="cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-sm btn__icon icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input id="" class="input-reset cart-quantity-input" type="text" placeholder="999" value="1" max="999" data-mult="1">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn btn-mini btn-primary cart-in" type="button">
                                                        <span class="btn__text">В КОРЗИНУ</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-results-product">
                                        <div class="search-results-product__view">
                                            <picture>
                                                <source srcset="img/product-4.webp" type="image/webp">
                                                <img
                                                        loading="lazy"
                                                        src="img/product-4.png"
                                                        class="image"
                                                        width="64"
                                                        height="64"
                                                        alt="Изображение блока"
                                                >
                                            </picture>
                                        </div>
                                        <div class="search-results-product__descr">
                                            <div class="search-results-product__descr-header">
                                                <div class="search-results-product__info">
                                                    <span class="product-code"><span>CB3327018</span></span>
                                                </div>
                                                <div class="search-results-product__title">SE Unica System+ Белый Блок розеточный (2к+з)+usb тип А</div>
                                            </div>
                                            <div class="search-results-product__descr-bottom">
                                                <div class="search-results-product__price">
                                                    <div class="search-results-product__price-current">1 478,40 ₽</div>
                                                    <div class="search-results-product__price-originally">1 624,50 ₽</div>
                                                </div>
                                                <div class="search-results-product__cart cart-buy">
                                                    <div class="cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-sm btn__icon icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input id="" class="input-reset cart-quantity-input" type="text" placeholder="999" value="1" max="999" data-mult="1">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn btn-mini btn-primary cart-in" type="button">
                                                        <span class="btn__text">В КОРЗИНУ</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-results-product">
                                        <div class="search-results-product__view">
                                            <picture>
                                                <source srcset="img/product-5.webp" type="image/webp">
                                                <img
                                                        loading="lazy"
                                                        src="img/product-5.png"
                                                        class="image"
                                                        width="64"
                                                        height="64"
                                                        alt="Изображение блока"
                                                >
                                            </picture>
                                        </div>
                                        <div class="search-results-product__descr">
                                            <div class="search-results-product__descr-header">
                                                <div class="search-results-product__info">
                                                    <span class="product-code"><span>DB3327018</span></span>
                                                </div>
                                                <div class="search-results-product__title">SE Unica Extend Черный Удлинитель 3 розетки 2К+З, кабель 1,5м</div>
                                            </div>
                                            <div class="search-results-product__descr-bottom">
                                                <div class="search-results-product__price">
                                                    <div class="search-results-product__price-current">1 478,40 ₽</div>
                                                    <div class="search-results-product__price-originally">1 624,50 ₽</div>
                                                </div>
                                                <div class="search-results-product__cart cart-buy">
                                                    <div class="cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-sm btn__icon icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input id="" class="input-reset cart-quantity-input" type="text" placeholder="999" value="1" max="999" data-mult="1">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn btn-mini btn-primary cart-in" type="button">
                                                        <span class="btn__text">В КОРЗИНУ</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-results-product">
                                        <div class="search-results-product__view">
                                            <picture>
                                                <source srcset="img/product.webp" type="image/webp">
                                                <img
                                                        loading="lazy"
                                                        src="img/product.png"
                                                        class="image"
                                                        width="64"
                                                        height="64"
                                                        alt="Изображение блока"
                                                >
                                            </picture>
                                        </div>
                                        <div class="search-results-product__descr">
                                            <div class="search-results-product__descr-header">
                                                <div class="search-results-product__info">
                                                    <span class="product-code"><span>EB3327018</span></span>
                                                </div>
                                                <div class="search-results-product__title">SE Unica System+ Антрацит Блок розеточный (2к+з)+usb тип А</div>
                                            </div>
                                            <div class="search-results-product__descr-bottom">
                                                <div class="search-results-product__price">
                                                    <div class="search-results-product__price-current">1 478,40 ₽</div>
                                                    <div class="search-results-product__price-originally">1 624,50 ₽</div>
                                                </div>
                                                <div class="search-results-product__cart cart-buy">
                                                    <div class="cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-sm btn__icon icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input id="" class="input-reset cart-quantity-input" type="text" placeholder="999" value="1" max="999" data-mult="1">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-sm btn__icon">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn btn-mini btn-primary cart-in" type="button">
                                                        <span class="btn__text">В КОРЗИНУ</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="search-results__suggest-details">
                                    <div class="search-results__suggest-found">Найдено товаров: 178</div>
                                    <a class="link-red" href="javascript:;">Показать все найденные товары</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="header-contacts">
                    <div class="header-contacts__tel">
                        <a class="header-contacts__number" href="tel:+74951183770">+7 (495) 118-37-70</a>
                        <a class="link-dashed link-gray header-contacts__call" href="javascript:;">заказать звонок</a>
                    </div>
                </div>

                <div class="header-profile">
                    <ul class="list-reset header-profile__list">
                        <li>
                            <button class="btn-reset header-profile__btn">
                                <span class="header-profile__btn-view">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#bookmarks"></use>
                                    </svg>
                                    <span class="header-profile__btn-count">12</span>
                                </span>
                                <span class="header-profile__btn-text">Избранное</span>
                            </button>
                        </li>
                        <li>
                            <button class="btn-reset header-profile__btn">
                                <span class="header-profile__btn-view">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#inbox-filled"></use>
                                    </svg>
                                    <span class="header-profile__btn-count">7</span>
                                </span>
                                <span class="header-profile__btn-text">Сметы</span>
                            </button>
                        </li>
                        <li>
                            <button class="btn-reset header-profile__btn">
                                <span class="header-profile__btn-view">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#barchart"></use>
                                    </svg>
                                </span>
                                <span class="header-profile__btn-text">Сравнить</span>
                            </button>
                        </li>
                        <li>
                            <button class="btn-reset header-profile__btn header-profile__btn-cart">
                                <span class="header-profile__btn-view">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#shopping-cart-2"></use>
                                    </svg>
                                    <span class="header-profile__btn-count">3</span>
                                </span>
                                <span class="header-profile__btn-text">12 470,80 ₽</span>
                            </button>
                        </li>
                    </ul>
                </div>

                <div class="header-catalog">
                    <div class="header-catalog-spoiler">
                        <button
                                class="btn-reset btn btn-primary catalog-spoiler"
                                aria-label="Открыть меню"
                                aria-expanded="false"
                                data-catalog-spoiler
                                data-overlay-transparent
                        >
                            <svg class="icon btn__icon catalog-spoiler__icon">
                                <use href="img/sprite.svg#burger"></use>
                            </svg>
                            <svg class="icon btn__icon catalog-spoiler__icon-active">
                                <use href="img/sprite.svg#cross"></use>
                            </svg>
                            <span class="btn__text">Каталог</span>
                        </button>
                    </div>
                    <div class="header-catalog-preview">
                        <a class="btn-reset btn btn-link header-catalog-preview__item" href="javascript:;">Розетки и выключатели</a>
                        <a class="btn-reset btn btn-link header-catalog-preview__item" href="javascript:;">Электроустановочные изделия</a>
                        <a class="btn-reset btn btn-link header-catalog-preview__item" href="javascript:;">Низковольтное оборудование</a>
                        <a class="btn-reset btn btn-link header-catalog-preview__item" href="javascript:;">Щиты, шкафы, боксы</a>
                        <a class="btn-reset btn btn-link header-catalog-preview__item" href="javascript:;">Кабель</a>
                        <a class="btn-reset btn btn-link header-catalog-preview__item" href="javascript:;">Светотехника</a>
                        <a class="btn-reset btn btn-link header-catalog-preview__item" href="javascript:;">Еще...</a>
                    </div>
                </div>

                <div class="header-mobile-menu">
                    <button
                            class="btn-reset burger"
                            aria-label="Открыть меню"
                            aria-expanded="false"
                            data-menu-spoiler
                            data-overlay
                    >
                        <svg class="icon">
                            <use href="img/sprite.svg#burger"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <div class="catalog" data-catalog>
        <div class="container catalog-container">
            <div class="catalog-root">
                <div class="catalog-root-item">
                    <a class="btn-reset btn catalog-root-link selected" href="javascript:;" data-submenu-section="0">
                        <svg class="icon btn__icon">
                            <use href="img/sprite.svg#catalog-wiring-products"></use>
                        </svg>
                        <span class="btn__text">Розетки и выключатели</span>
                    </a>
                </div>
                <div class="catalog-root-item">
                    <a class="btn-reset btn catalog-root-link" href="javascript:;" data-submenu-section="1">
                        <svg class="icon btn__icon">
                            <use href="img/sprite.svg#catalog-wiring"></use>
                        </svg>
                        <span class="btn__text">Электроустановочные изделия</span>
                    </a>
                </div>
                <div class="catalog-root-item">
                    <a class="btn-reset btn" href="javascript:;">
                        <svg class="icon btn__icon">
                            <use href="img/sprite.svg#catalog-low-voltage"></use>
                        </svg>
                        <span class="btn__text">Низковольтное оборудование</span>
                    </a>
                </div>
                <div class="catalog-root-item">
                    <a class="btn-reset btn" href="javascript:;">
                        <svg class="icon btn__icon">
                            <use href="img/sprite.svg#catalog-shields-cabinets"></use>
                        </svg>
                        <span class="btn__text">Щиты, шкафы, боксы</span>
                    </a>
                </div>
                <div class="catalog-root-item">
                    <a class="btn-reset btn" href="javascript:;">
                        <svg class="icon btn__icon">
                            <use href="img/sprite.svg#catalog-cable"></use>
                        </svg>
                        <span class="btn__text">Кабель</span>
                    </a>
                </div>
                <div class="catalog-root-item">
                    <a class="btn-reset btn" href="javascript:;">
                        <svg class="icon btn__icon">
                            <use href="img/sprite.svg#catalog-lighting"></use>
                        </svg>
                        <span class="btn__text">Светотехника</span>
                    </a>
                </div>
                <div class="catalog-root-item">
                    <a class="btn-reset btn" href="javascript:;">
                        <svg class="icon btn__icon">
                            <use href="img/sprite.svg#catalog-connectors"></use>
                        </svg>
                        <span class="btn__text">Вилки, штекеры, разъемы, шнуры</span>
                    </a>
                </div>
                <div class="catalog-root-item">
                    <a class="btn-reset btn" href="javascript:;">
                        <svg class="icon btn__icon">
                            <use href="img/sprite.svg#catalog-tools"></use>
                        </svg>
                        <span class="btn__text">Инструменты и монтажные материалы</span>
                    </a>
                </div>
                <div class="catalog-root-item">
                    <a class="btn-reset btn" href="javascript:;">
                        <svg class="icon btn__icon">
                            <use href="img/sprite.svg#catalog-ventilation"></use>
                        </svg>
                        <span class="btn__text">Системы вентиляции и обогрева</span>
                    </a>
                </div>
                <div class="catalog-root-item">
                    <a class="btn-reset btn" href="javascript:;">
                        <svg class="icon btn__icon">
                            <use href="img/sprite.svg#catalog-electric-motors"></use>
                        </svg>
                        <span class="btn__text">Автоматизация и электродвигатели</span>
                    </a>
                </div>
                <div class="catalog-root-item">
                    <a class="btn-reset btn" href="javascript:;">
                        <svg class="icon btn__icon">
                            <use href="img/sprite.svg#catalog-grounding"></use>
                        </svg>
                        <span class="btn__text">Молниезащита и заземление</span>
                    </a>
                </div>
                <div class="catalog-root-item">
                    <a class="btn-reset btn" href="javascript:;">
                        <svg class="icon btn__icon">
                            <use href="img/sprite.svg#catalog-power-devices"></use>
                        </svg>
                        <span class="btn__text">Элементы и устройства питания</span>
                    </a>
                </div>
                <div class="catalog-root-item">
                    <a class="btn-reset btn" href="javascript:;">
                        <svg class="icon btn__icon">
                            <use href="img/sprite.svg#catalog-miscellaneous"></use>
                        </svg>
                        <span class="btn__text">Разные товары для монтажников</span>
                    </a>
                </div>
            </div>
            <div class="catalog-submenu">
                <div class="catalog-submenu-section active" data-root-pointer="0">
                    <div class="gap-lg h3">Розетки и выключатели</div>
                    <div class="gap-lg catalog-submenu-links">
                        <ul class="list-reset catalog-submenu-links__list">
                            <li><a class="link-dark" href="javascript:;">Все товары раздела</a></li>
                            <li><a class="link-dark" href="javascript:;">Розетки</a></li>
                            <li><a class="link-dark" href="javascript:;">Выключатели</a></li>
                            <li><a class="link-dark" href="javascript:;">Рамки</a></li>
                            <li><a class="link-dark" href="javascript:;">Диммеры</a></li>
                            <li><a class="link-dark" href="javascript:;">Датчики движения</a></li>
                            <li><a class="link-dark" href="javascript:;">Датчики освещенности</a></li>
                            <li><a class="link-dark" href="javascript:;">Выключатели с ДУ</a></li>
                            <li><a class="link-dark" href="javascript:;">Блоки розеток и выключателей</a></li>
                            <li><a class="link-dark" href="javascript:;">Антенные блоки</a></li>
                            <li><a class="link-dark" href="javascript:;">Компьютерные розетки</a></li>
                        </ul>
                        <ul class="list-reset catalog-submenu-links__list">
                            <li><a class="link-dark" href="javascript:;">Системы наблюдения и оповещения</a></li>
                            <li><a class="link-dark" href="javascript:;">Дверные звонки и домофоны</a></li>
                            <li><a class="link-dark" href="javascript:;">Системы видеонаблюдения</a></li>
                        </ul>
                        <ul class="list-reset catalog-submenu-links__list">
                            <li><a class="link-dark" href="javascript:;">Системы прокладки кабеля</a></li>
                            <li><a class="link-dark" href="javascript:;">Кабель-каналы и аксессуары</a></li>
                            <li><a class="link-dark" href="javascript:;">Кабельные лотки и аксессуары</a></li>
                            <li><a class="link-dark" href="javascript:;">Трубы для кабеля и комплектующие</a></li>
                        </ul>
                        <ul class="list-reset catalog-submenu-links__list">
                            <li><a class="link-dark" href="javascript:;">Связь и безопасность</a></li>
                            <li><a class="link-dark" href="javascript:;">Звонки</a></li>
                            <li><a class="link-dark" href="javascript:;">Домофоны</a></li>
                            <li><a class="link-dark" href="javascript:;">Датчики движения</a></li>
                            <li><a class="link-dark" href="javascript:;">Датчики освещенности</a></li>
                            <li><a class="link-dark" href="javascript:;">Терморегуляторы</a></li>
                            <li><a class="link-dark" href="javascript:;">Видеонаблюдени</a></li>
                            <li><a class="link-dark" href="javascript:;">Пожарно-охранная сигнализация, системы оповещения</a></li>
                            <li><a class="link-dark" href="javascript:;">Устройства управления жалюзи, звуком, сигнализацией</a></li>
                        </ul>
                    </div>
                    <div class="catalog-submenu-banners">
                        <div class="catalog-submenu-banners__item">
                            <picture>
                                <source srcset="<?/*img/.webp*/?>" type="image/webp">
                                <img
                                    loading="lazy"
                                    src="<?/*img/.png*/?>"
                                    class="image"
                                    width=""
                                    height=""
                                    alt="Изображение блока"
                                >
                            </picture>
                        </div>
                        <div class="catalog-submenu-banners__item">
                            <picture>
                                <source srcset="<?/*img/.webp*/?>" type="image/webp">
                                <img
                                        loading="lazy"
                                        src="<?/*img/.png*/?>"
                                        class="image"
                                        width=""
                                        height=""
                                        alt="Изображение блока"
                                >
                            </picture>
                        </div>
                        <div class="catalog-submenu-banners__item">
                            <picture>
                                <source srcset="<?/*img/.webp*/?>" type="image/webp">
                                <img
                                        loading="lazy"
                                        src="<?/*img/.png*/?>"
                                        class="image"
                                        width=""
                                        height=""
                                        alt="Изображение блока"
                                >
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="catalog-submenu-section" data-root-pointer="1">
                    <div class="gap-lg h3">Розетки и выключатели 2</div>
                    <div class="gap-lg catalog-submenu-links">
                        <ul class="list-reset catalog-submenu-links__list">
                            <li><a class="link-dark" href="javascript:;">Все товары раздела</a></li>
                            <li><a class="link-dark" href="javascript:;">Розетки</a></li>
                            <li><a class="link-dark" href="javascript:;">Выключатели</a></li>
                            <li><a class="link-dark" href="javascript:;">Рамки</a></li>
                            <li><a class="link-dark" href="javascript:;">Диммеры</a></li>
                            <li><a class="link-dark" href="javascript:;">Датчики движения</a></li>
                            <li><a class="link-dark" href="javascript:;">Датчики освещенности</a></li>
                            <li><a class="link-dark" href="javascript:;">Выключатели с ДУ</a></li>
                        </ul>
                        <ul class="list-reset catalog-submenu-links__list">
                            <li><a class="link-dark" href="javascript:;">Системы наблюдения и оповещения</a></li>
                            <li><a class="link-dark" href="javascript:;">Дверные звонки и домофоны</a></li>
                            <li><a class="link-dark" href="javascript:;">Системы видеонаблюдения</a></li>
                        </ul>
                        <ul class="list-reset catalog-submenu-links__list">
                            <li><a class="link-dark" href="javascript:;">Системы прокладки кабеля</a></li>
                            <li><a class="link-dark" href="javascript:;">Кабель-каналы и аксессуары</a></li>
                            <li><a class="link-dark" href="javascript:;">Кабельные лотки и аксессуары</a></li>
                            <li><a class="link-dark" href="javascript:;">Трубы для кабеля и комплектующие</a></li>
                        </ul>
                        <ul class="list-reset catalog-submenu-links__list">
                            <li><a class="link-dark" href="javascript:;">Связь и безопасность</a></li>
                            <li><a class="link-dark" href="javascript:;">Звонки</a></li>
                            <li><a class="link-dark" href="javascript:;">Домофоны</a></li>
                            <li><a class="link-dark" href="javascript:;">Датчики движения</a></li>
                            <li><a class="link-dark" href="javascript:;">Датчики освещенности</a></li>
                            <li><a class="link-dark" href="javascript:;">Терморегуляторы</a></li>
                            <li><a class="link-dark" href="javascript:;">Видеонаблюдени</a></li>
                            <li><a class="link-dark" href="javascript:;">Пожарно-охранная сигнализация, системы оповещения</a></li>
                            <li><a class="link-dark" href="javascript:;">Устройства управления жалюзи, звуком, сигнализацией</a></li>
                            <li><a class="link-dark" href="javascript:;">Терморегуляторы</a></li>
                            <li><a class="link-dark" href="javascript:;">Видеонаблюдени</a></li>
                        </ul>
                    </div>
                    <div class="catalog-submenu-banners">
                        <div class="catalog-submenu-banners__item">
                            <picture>
                                <source srcset="img/.webp" type="image/webp">
                                <img
                                    loading="lazy"
                                    src="img/.png"
                                    class="image"
                                    width=""
                                    height=""
                                    alt="Изображение блока"
                                >
                            </picture>
                        </div>
                        <div class="catalog-submenu-banners__item">
                            <picture>
                                <source srcset="img/.webp" type="image/webp">
                                <img
                                    loading="lazy"
                                    src="img/.png"
                                    class="image"
                                    width=""
                                    height=""
                                    alt="Изображение блока"
                                >
                            </picture>
                        </div>
                        <div class="catalog-submenu-banners__item">
                            <picture>
                                <source srcset="img/.webp" type="image/webp">
                                <img
                                    loading="lazy"
                                    src="img/.png"
                                    class="image"
                                    width=""
                                    height=""
                                    alt="Изображение блока"
                                >
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-menu" data-menu>
        <div class="mobile-menu-close" data-menu-close>
            <svg class="icon">
                <use href="img/sprite.svg#cross"></use>
            </svg>
        </div>

        <div class="mobile-menu__item mobile-menu-catalog">
            <a class="btn-reset btn btn-primary catalog-spoiler" href="javascript:;">
                <svg class="icon btn__icon catalog-spoiler__icon">
                    <use href="img/sprite.svg#burger"></use>
                </svg>
                <span class="btn__text">Каталог</span>
            </a>
        </div>

        <ul class="list-reset mobile-menu-list">
            <li>
				<?/* // todo (@Masterkov): update 23/04/2023 */?>
                <button
                        class="btn-reset mobile-menu__item mobile-menu__link mobile-menu-city"
                        type="button"
                        data-fancybox
                        data-src="#modal-city"
                >
                    <svg class="icon icon-sm">
                        <use href="img/sprite.svg#pin"></use>
                    </svg>
                    <span class="mobile-menu-city__text">
                            <span>Москва</span>
                            <svg class="icon">
                                <use href="img/sprite.svg#chevron-down"></use>
                            </svg>
                        </span>
                </button>
            </li>
            <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;">доставка</a></li>
            <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;">оплата</a></li>
            <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;">Гарантия</a></li>
            <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;">программа лояльности</a></li>
            <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;">Акции</a></li>
            <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;">Распродажа</a></li>
            <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;">Контакты</a></li>
        </ul>

        <div class="mobile-menu-footer">
            <div class="mobile-menu__item mobile-menu-login">
                <button class="btn-reset btn btn-b-light" data-fancybox data-src="#modal-auth">
                    <span class="btn__text">Войти</span>
                </button>
                <button class="btn-reset btn btn-b-dark" data-fancybox data-src="#modal-reg">
                    <span class="btn__text">Регистрация</span>
                </button>
            </div>

            <div class="mobile-menu__item mobile-menu-contacts">
                <a class="mobile-menu-contacts__number" href="tel:+74951183770">+7 (495) 118-37-70</a>
                <a class="link-dashed link-gray mobile-menu-contacts__call" href="javascript:;">заказать звонок</a>
            </div>
        </div>
    </div>

    <div class="mobile-menu-panel">
        <ul class="list-reset mobile-menu-panel__list">
            <li>
                <button class="btn-reset header-profile__btn mobile-menu-panel__btn" data-catalog-spoiler>
                    <span class="header-profile__btn-view mobile-menu-panel__btn-view">
                        <svg class="icon">
                            <use href="img/sprite.svg#catalog"></use>
                        </svg>
                    </span>
                    <span class="header-profile__btn-text">Каталог</span>
                </button>
            </li>
            <li>
                <button class="btn-reset header-profile__btn mobile-menu-panel__btn">
                    <span class="header-profile__btn-view mobile-menu-panel__btn-view">
                        <svg class="icon">
                            <use href="img/sprite.svg#bookmarks"></use>
                        </svg>
                        <span class="header-profile__btn-count">12</span>
                    </span>
                    <span class="header-profile__btn-text">Избранное</span>
                </button>
            </li>
            <li>
                <button class="btn-reset header-profile__btn mobile-menu-panel__btn">
                    <span class="header-profile__btn-view mobile-menu-panel__btn-view">
                        <svg class="icon">
                            <use href="img/sprite.svg#inbox-filled"></use>
                        </svg>
                        <span class="header-profile__btn-count">7</span>
                    </span>
                    <span class="header-profile__btn-text">Сметы</span>
                </button>
            </li>
            <li>
                <button class="btn-reset header-profile__btn mobile-menu-panel__btn">
                    <span class="header-profile__btn-view mobile-menu-panel__btn-view">
                        <svg class="icon">
                            <use href="img/sprite.svg#barchart"></use>
                        </svg>
                    </span>
                    <span class="header-profile__btn-text">Кабинет</span>
                </button>
            </li>
            <li>
                <button class="btn-reset header-profile__btn mobile-menu-panel__btn mobile-menu-panel__btn-cart">
                    <span class="header-profile__btn-view mobile-menu-panel__btn-view">
                        <svg class="icon">
                            <use href="img/sprite.svg#shopping-cart-2"></use>
                        </svg>
                        <span class="header-profile__btn-count">3</span>
                    </span>
                    <span class="header-profile__btn-text">12 470,80 ₽</span>
                </button>
            </li>
        </ul>
    </div>

    <div class="action-notice">
        <div class="action-notice__view">
            <svg class="icon icon-sm">
                <use href="img/sprite.svg#bookmarks"></use>
            </svg>
        </div>
        <div class="action-notice__descr">
            <div class="action-notice__title">Товар добавлен в <span class="action-notice__title-category">избранное</span></div>
            <div class="action-notice__text">В списке <span class="action-notice__count">2</span> товара</div>
        </div>
    </div>

    <main class="main">