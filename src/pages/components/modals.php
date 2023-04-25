<?/* auth */?>
<div id="modal-auth" class="modal">
    <div class="modal__content">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h4">Войти в личный кабинет</div>
                <div class="modal__subtitle">
                    Нет аккаунта?
                    <a
                            class="link link-red"
                            href="javascript:;"
                            data-fancybox
                            data-src="#modal-reg"
                    >Зарегистрироваться</a>
                </div>
            </div>

            <form id="" class="form" method="" action="javascript:;">
                <div class="form__field-area">
                    <div class="form__field">
                        <input
                                id=""
                                class="input-reset form__input"
                                type="email"
                                name=""
                                placeholder="Email"
                                required
                        >
                    </div>
                    <div class="form__field">
                        <input
                                id=""
                                class="input-reset form__input form__input-icon"
                                type="password"
                                name=""
                                placeholder="Пароль"
                                data-password-target
                                required
                        >
                        <label class="form__input-btn">
                            <svg class="icon icon-default">
                                <use href="img/sprite.svg#fill-eye"></use>
                            </svg>
                            <svg class="icon icon-show">
                                <use href="img/sprite.svg#fill-eye-slash"></use>
                            </svg>
                            <input
                                    type="checkbox"
                                    class="visually-hidden"
                                    data-password-switcher
                            >
                        </label>
                        <div class="form__field-ps">
                            <a
                                    class="link link-red"
                                    href="javascript:;"
                                    data-fancybox
                                    data-src="#modal-restore"
                            >Напомнить пароль</a>
                        </div>
                    </div>
                </div>
                <div class="form__field-btn form__field-btn--single">
                    <button class="btn-reset btn btn-primary" type="submit">
                        <span class="btn__text">Войти</span>
                    </button>
                </div>
            </form>
        </div>
        <div class="modal__content-item">
            <div class="modal__soc">
                <div class="h5">Авторизуйтесь через соцсети</div>
                <div class="modal__soc-links">
                    <a class="soc-ya" href="javascript:;">
                        <svg class="icon">
                            <use href="img/sprite.svg#soc-logo-ya"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?/* reg */?>
<div id="modal-reg" class="modal">
    <div class="modal__content">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h4">Регистрация</div>
                <div class="modal__subtitle">
                    Есть аккаунт?
                    <a
                            class="link link-red"
                            href="javascript:;"
                            data-fancybox
                            data-src="#modal-auth"
                    >Войти</a>
                </div>
            </div>

            <form id="" class="form" method="" action="javascript:;">
                <div class="form__field-area">
                    <div class="form__field">
                        <div class="client-type">
                            <div class="client-type__item">
                                <span class="custom-radio">
                                    <input
                                            id="ct-individual"
                                            class="custom-radio__input"
                                            type="radio"
                                            name="client-type"
                                            checked
                                            data-ct
                                    >
                                    <label for="ct-individual" class="custom-radio__label-for">Физическое лицо</label>
                                </span>
                            </div>
                            <div class="client-type__item">
                                <span class="custom-radio">
                                    <input
                                            id="ct-entity"
                                            class="custom-radio__input"
                                            type="radio"
                                            name="client-type"
                                            data-ct
                                    >
                                    <label for="ct-entity" class="custom-radio__label-for">Юридическое лицо</label>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form__field">
                        <input
                                id=""
                                class="input-reset form__input"
                                type="email"
                                name=""
                                placeholder="Email"
                                required
                        >
                    </div>
                    <div class="form__field" data-ct-entity-bind>
                        <input
                                id=""
                                class="input-reset form__input"
                                type="text"
                                name=""
                                placeholder="ИНН организации"
                                required
                        >
                    </div>
                    <div class="form__field">
                        <input
                                id=""
                                class="input-reset form__input form__input-icon"
                                type="password"
                                name=""
                                placeholder="Пароль"
                                data-password-target
                                required
                        >
                        <label class="form__input-btn">
                            <svg class="icon icon-default">
                                <use href="img/sprite.svg#fill-eye"></use>
                            </svg>
                            <svg class="icon icon-show">
                                <use href="img/sprite.svg#fill-eye-slash"></use>
                            </svg>
                            <input
                                    type="checkbox"
                                    class="visually-hidden"
                                    data-password-switcher
                            >
                        </label>
                    </div>
                    <div class="form__field">
                        <span class="custom-checkbox">
                            <input id="reg-mailing" class="custom-checkbox__input" type="checkbox">
                            <label for="reg-mailing" class="custom-checkbox__label-for text-secondary-color">Подписаться на рассылку акций</label>
                        </span>
                    </div>
                </div>
                <div class="form__field-btn form__field-btn--single">
                    <button class="btn-reset btn btn-primary" type="submit">
                        <span class="btn__text">Зарегистрироваться</span>
                    </button>
                </div>
                <div class="form__field-agree">
                    Нажимая кнопку «Зарегистрироваться», Вы соглашаетесь с условиями
                    <a class="link link-red" href="javascript:;">политики конфиденциальности</a>
                </div>
            </form>
        </div>
        <div class="modal__content-item">
            <div class="modal__soc">
                <div class="h5">Авторизуйтесь через соцсети</div>
                <div class="modal__soc-links">
                    <a class="soc-ya" href="javascript:;">
                        <svg class="icon">
                            <use href="img/sprite.svg#soc-logo-ya"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?/* restore pass */?>
<div id="modal-restore" class="modal">
    <div class="modal__content">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h4">Напомнить пароль</div>
                <div class="modal__subtitle">Введите электронную почту, к которой привязан ваш аккаунт и мы отправим вам новый пароль</div>
                <div>
                    <a
                            class="link link-red"
                            href="javascript:;"
                            data-fancybox
                            data-src="#modal-auth"
                    >Войти в аккаунт</a>
                </div>
            </div>

            <form id="" class="form" method="" action="javascript:;">
                <div class="form__field-area">
                    <div class="form__field">
                        <input
                                id=""
                                class="input-reset form__input"
                                type="email"
                                name=""
                                placeholder="Email"
                                required
                        >
                    </div>
                </div>
                <div class="form__field-btn form__field-btn--single">
                    <button
                            class="btn-reset btn btn-primary"
                            type="button"
                            data-fancybox
                            data-src="#modal-restore-final"
                    >
                        <span class="btn__text">Отправить пароль</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="modal-restore-final" class="modal">
    <div class="modal__content">
        <div class="modal__content-item">
            <div class="modal__header modal__header-icon">
                <div class="modal__title-icon">
                    <svg class="icon">
                        <use href="img/lock-2-opened.svg#lock-2-opened"></use>
                    </svg>
                    <div class="h4">Мы отправили пароль на вашу почту</div>
                </div>
                <div class="modal__subtitle">Проверьте указанную электронную почту.<br> Если письма нет, то проверьте папку Спам.</div>
                <div class="form__field-ps">
                    <a
                            class="link link-red"
                            href="javascript:;"
                            data-fancybox
                            data-src="#modal-auth"
                    >Войти в аккаунт</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?/* estimate */?>
<div id="modal-estimate" class="modal modal-big">
    <div class="modal__content">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h4">Добавить в смету</div>
            </div>

            <form id="" class="form" method="" action="javascript:;">
                <div class="form__field-area">
                    <div class="form__field">
                        <select
                                id=""
                                class="input-reset form__input form__input--select2 js-select2"
                                name=""
                                required
                        >
                            <option value="0">Смета 03.02.2023 12:58:02</option>
                            <option value="1">Селект 2</option>
                            <option value="2">Селект 3</option>
                        </select>
                        <div class="form__field-ps">
                            <span class="text-secondary-color">Выберите смету из существующих или введите название новой</span>
                        </div>
                    </div>
                </div>
                <div class="form__field-btn form__field-btn--single">
                    <button
                            class="btn-reset btn btn-primary"
                            type="submit"
                            data-notice="compare"
                    >
                        <span class="btn__text">Добавить в смету</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?/* share */?>
<div id="modal-share" class="modal modal-big">
    <div class="modal__content">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title-share">
                    <picture>
                        <source srcset="img/product.webp" type="image/webp">
                        <img
                                loading="lazy"
                                src="img/product.png"
                                class="image"
                                width="60"
                                height="60"
                                alt="Изображение блока"
                        >
                    </picture>
                    <div class="h4">SE Удлинитель катушечный Thorsman 4 роз 15м 3х1.5 IP20</div>
                </div>
            </div>

            <div class="gap-sm">
                <div class="submit-field-wrapper" data-share-link>
                    <div class="submit-field-input flex-1">
                        <input
                                class="input-reset input"
                                type="text"
                                name=""
                                placeholder="https://www.amperkin.ru/product/774420/?utm_source=dire..."
                                value="https://www.amperkin.ru/product/774420/?utm_source=dire..."
                                data-share-link-input
                        >
                    </div>
                    <button class="btn-reset btn btn-primary" type="button" data-share-link-btn>
                        <span class="btn__text">Копировать</span>
                    </button>
                </div>
            </div>

            <div class="modal__soc modal-share-soc">
                <div class="modal__soc-links">
                    <a class="soc-vk" href="javascript:;" target="_blank">
                        <svg class="icon">
                            <use href="img/sprite.svg#soc-logo-vk"></use>
                        </svg>
                    </a>
                    <a class="soc-ok" href="javascript:;" target="_blank">
                        <svg class="icon">
                            <use href="img/sprite.svg#soc-logo-ok"></use>
                        </svg>
                    </a>
                    <a class="soc-tg" href="javascript:;" target="_blank">
                        <svg class="icon">
                            <use href="img/sprite.svg#soc-logo-tg"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?/* // todo (@Masterkov): update 23/04/2023 */?>
<?/* city */?>
<div id="modal-city" class="modal modal-big modal-city">
    <div class="modal__content">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h4">Выберите ваш город</div>
            </div>

            <div class="modal-city-search">
                <div class="modal-city-search__item">
                    <div class="input-search-wrapper">
                        <input
                                class="input-reset input-search"
                                type="search"
                                name=""
                                placeholder="Найти город..."
                        >
                        <button class="btn-reset btn btn-link input-search-btn">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#cross"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="modal-city-search__item">
                    <button class="btn-reset btn btn-mini btn-b-light">
                        <span class="btn__text">Москва</span>
                    </button>
                    <button class="btn-reset btn btn-mini btn-b-light">
                        <span class="btn__text">санкт-петербург</span>
                    </button>
                    <button class="btn-reset btn btn-mini btn-b-light">
                        <span class="btn__text">Казань</span>
                    </button>
                    <button class="btn-reset btn btn-mini btn-b-light">
                        <span class="btn__text">Воронеж</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="modal__content-item">
            <div class="modal-city-alphabet">
                <div class="modal-city-alphabet__list">
                    <div class="modal-city-alphabet__item">
                        <div class="modal-city-alphabet__title">А</div>
                        <div class="modal-city-alphabet__city">Абакан</div>
                        <div class="modal-city-alphabet__city">Альметьевск</div>
                        <div class="modal-city-alphabet__city">Ангарск</div>
                        <div class="modal-city-alphabet__city">Артем</div>
                        <div class="modal-city-alphabet__city">Ачинск</div>
                    </div>
                    <div class="modal-city-alphabet__item">
                        <div class="modal-city-alphabet__title">Б</div>
                        <div class="modal-city-alphabet__city">Барнаул</div>
                        <div class="modal-city-alphabet__city">Белгород</div>
                        <div class="modal-city-alphabet__city">Белово</div>
                        <div class="modal-city-alphabet__city">Бердск</div>
                        <div class="modal-city-alphabet__city">Бийск</div>
                    </div>
                    <div class="modal-city-alphabet__item">
                        <div class="modal-city-alphabet__title">В</div>
                        <div class="modal-city-alphabet__city">Великие Луки</div>
                        <div class="modal-city-alphabet__city">Владивосток</div>
                        <div class="modal-city-alphabet__city">Воронеж</div>
                    </div>
                    <div class="modal-city-alphabet__item">
                        <div class="modal-city-alphabet__title">Г</div>
                        <div class="modal-city-alphabet__city">Губкин</div>
                    </div>
                    <div class="modal-city-alphabet__item">
                        <div class="modal-city-alphabet__title">Е</div>
                        <div class="modal-city-alphabet__city">Ейск</div>
                        <div class="modal-city-alphabet__city">Екатеринбург</div>
                    </div>
                    <div class="modal-city-alphabet__item">
                        <div class="modal-city-alphabet__title">Ж</div>
                        <div class="modal-city-alphabet__city">Железногорск</div>
                    </div>
                    <div class="modal-city-alphabet__item">
                        <div class="modal-city-alphabet__title">З</div>
                        <div class="modal-city-alphabet__city">Зеленогорск</div>
                        <div class="modal-city-alphabet__city">Златоуст</div>
                    </div>
                    <div class="modal-city-alphabet__item">
                        <div class="modal-city-alphabet__title">И</div>
                        <div class="modal-city-alphabet__city">Иваново</div>
                        <div class="modal-city-alphabet__city">Иркутск</div>
                        <div class="modal-city-alphabet__city">Искитим</div>
                        <div class="modal-city-alphabet__city">Ишим</div>
                    </div>
                    <div class="modal-city-alphabet__item">
                        <div class="modal-city-alphabet__title">Й</div>
                        <div class="modal-city-alphabet__city">Йошкар-Ола</div>
                    </div>
                    <div class="modal-city-alphabet__item">
                        <div class="modal-city-alphabet__title">К</div>
                        <div class="modal-city-alphabet__city">Казань</div>
                        <div class="modal-city-alphabet__city">Канск</div>
                        <div class="modal-city-alphabet__city">Кемерово</div>
                        <div class="modal-city-alphabet__city">Киселевск</div>
                        <div class="modal-city-alphabet__city">Краснодар</div>
                        <div class="modal-city-alphabet__city">Краснотурьинск</div>
                        <div class="modal-city-alphabet__city">Красноярск</div>
                        <div class="modal-city-alphabet__city">Кызыл</div>
                    </div>
                    <div class="modal-city-alphabet__item">
                        <div class="modal-city-alphabet__title">Л</div>
                        <div class="modal-city-alphabet__city">Ленинск-Кузнецкий</div>
                        <div class="modal-city-alphabet__city">Лесосибирск</div>
                    </div>
                    <div class="modal-city-alphabet__item">
                        <div class="modal-city-alphabet__title">М</div>
                        <div class="modal-city-alphabet__city">Майский</div>
                        <div class="modal-city-alphabet__city">Маркс</div>
                        <div class="modal-city-alphabet__city">Мегион</div>
                        <div class="modal-city-alphabet__city">Миасс</div>
                        <div class="modal-city-alphabet__city">Минусинск</div>
                        <div class="modal-city-alphabet__city">Мурманск</div>
                        <div class="modal-city-alphabet__city">Муром</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?/* loged review */?>
<div id="modal-loged-review" class="modal modal-create-review">
    <div class="modal__content">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h4">Новый отзыв</div>
            </div>

            <form id="" class="form" method="" action="javascript:;">
                <div class="form__field-area">
                    <div class="form__field">
                        <span class="star-rating-wrapper">
                            <span class="star-rating-value">Оцените товар:</span>
                            <span class="star-rating star-rating--max">
                            <form class="star-rating__container" action="" method="post">
                                <input
                                        id="starrateTestOne"
                                        class="visually-hidden"
                                        type="radio"
                                        name="starrate"
                                        value="5"
                                >
                                <label for="starrateTestOne">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#fill-star"></use>
                                    </svg>
                                </label>

                                <input
                                        id="starrateTestTwo"
                                        class="visually-hidden"
                                        type="radio"
                                        name="starrate"
                                        value="4"
                                >
                                <label for="starrateTestTwo">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#fill-star"></use>
                                    </svg>
                                </label>

                                <input
                                        id="starrateTestThree"
                                        class="visually-hidden"
                                        type="radio"
                                        name="starrate"
                                        value="3"
                                >
                                <label for="starrateTestThree">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#fill-star"></use>
                                    </svg>
                                </label>

                                <input
                                        id="starrateTestFour"
                                        class="visually-hidden"
                                        type="radio"
                                        name="starrate"
                                        value="2"
                                >
                                <label for="starrateTestFour">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#fill-star"></use>
                                    </svg>
                                </label>

                                <input
                                        id="starrateTestFive"
                                        class="visually-hidden"
                                        type="radio"
                                        name="starrate"
                                        value="1"
                                >
                                <label for="starrateTestFive">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#fill-star"></use>
                                    </svg>
                                </label>
                            </form>
                        </span>
                        </span>
                    </div>
                    <div class="form__field">
                        <input
                                id=""
                                class="input-reset form__input form__input-icon"
                                type="password"
                                name=""
                                placeholder="Пароль"
                                data-password-target
                                required
                        >
                        <label class="form__input-btn">
                            <svg class="icon icon-default">
                                <use href="img/sprite.svg#fill-eye"></use>
                            </svg>
                            <svg class="icon icon-show">
                                <use href="img/sprite.svg#fill-eye-slash"></use>
                            </svg>
                            <input
                                    type="checkbox"
                                    class="visually-hidden"
                                    data-password-switcher
                            >
                        </label>
                        <div class="form__field-ps">
                            <a
                                    class="link link-red"
                                    href="javascript:;"
                                    data-fancybox
                                    data-src="#modal-restore"
                            >Напомнить пароль</a>
                        </div>
                    </div>
                </div>
                <div class="form__field-btn form__field-btn--single">
                    <button class="btn-reset btn btn-primary" type="submit">
                        <span class="btn__text">Войти</span>
                    </button>
                </div>
            </form>
        </div>
        <div class="modal__content-item">
            <div class="modal__soc">
                <div class="h5">Авторизуйтесь через соцсети</div>
                <div class="modal__soc-links">
                    <a class="soc-ya" href="javascript:;">
                        <svg class="icon">
                            <use href="img/sprite.svg#soc-logo-ya"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>