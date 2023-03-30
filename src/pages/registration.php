<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="authreg authreg--reg">
    <div class="bs-stepper">
        <div class="bs-stepper-header" role="tablist">
            <div class="step" data-target="#step-1">
                <button id="step-1-trigger" class="step-trigger" type="button" role="tab" aria-controls="step-1"></button>
            </div>
            <div class="step" data-target="#step-2">
                <button id="step-2-trigger" class="step-trigger" type="button" role="tab" aria-controls="step-2"></button>
            </div>
            <div class="step" data-target="#step-3">
                <button id="step-3-trigger" class="step-trigger" type="button" role="tab" aria-controls="step-3"></button>
            </div>
        </div>
        <div class="bs-stepper-content">
            <div id="step-1" class="content" role="tabpanel" aria-labelledby="step-1-trigger">
                <div class="authreg__header">
                    <div class="authreg__title h2">Создать аккаунт</div>
                    <div class="authreg__subtitle">
                        <span>Уже есть аккаунт?</span>
                        <a href="javascript:;" class="link link--green">Войти</a>
                    </div>
                </div>
                <div class="authreg__body">
                    <div class="tabs">
                        <ul class="list-reset tabs__nav tabs__nav--reg">
                            <li class="tabs__nav-item">
                                <button class="btn-reset tabs__nav-btn selected" type="button" data-target="0">Эковолонтер</button>
                            </li>
                            <li class="tabs__nav-item">
                                <button class="btn-reset tabs__nav-btn" type="button" data-target="1">Организатор</button>
                            </li>
                        </ul>
                        <div class="tabs__content">
                            <div class="tabs__panel active" data-id="0">
                                <form id="" class="form authreg-form" method="POST" action="">
                                    <div class="form__field">
                                        <label for="regFormVolunteerEmail" class="form__label-for">
                                            <span>Электронная почта <span class="required-star">*</span></span>
                                        </label>
                                        <input
                                                id="regFormVolunteerEmail"
                                                class="input-reset form__input"
                                                type="email"
                                                name="email"
                                                placeholder=""
                                                required
                                        >
                                        <div class="form__btn form__btn--disabled">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#mail-a"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="form__field">
                                        <label for="regFormVolunteerPassword" class="form__label-for">
                                            <span>Пароль <span class="required-star">*</span></span>
                                        </label>
                                        <input
                                                id="regFormVolunteerPassword"
                                                class="input-reset form__input"
                                                type="password"
                                                name="password"
                                                placeholder=""
                                                data-password-target
                                                required
                                        >
                                        <div class="form__btn">
                                            <label class="flex-all-center">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#eye-on"></use>
                                                </svg>
                                                <input
                                                        type="checkbox"
                                                        class="visually-hidden"
                                                        data-password-switcher
                                                >
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form__field">
                                        <label for="regFormVolunteerRepeatPassword" class="form__label-for">
                                            <span>Повторите пароль <span class="required-star">*</span></span>
                                        </label>
                                        <input
                                                id="regFormVolunteerRepeatPassword"
                                                class="input-reset form__input"
                                                type="password"
                                                name="repeatPassword"
                                                placeholder=""
                                                data-password-target
                                                required
                                        >
                                        <div class="form__btn">
                                            <label class="flex-all-center">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#eye-on"></use>
                                                </svg>
                                                <input
                                                        type="checkbox"
                                                        class="visually-hidden"
                                                        data-password-switcher
                                                >
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form__field  form__field-agree">
                                        <div class="custom-checkbox">
                                            <input class="custom-checkbox__input" type="checkbox" checked>
                                            <div class="custom-checkbox__agree">
                                                <span>Соглашаюсь на <a class="link link--underline" href="javascript:;">обработку моих персональных данных</a>, с <a class="link link--underline" href="javascript:;">правилами пользования сайтом</a> и принимаю <a class="link link--underline" href="javascript:;">Пользовательское соглашение</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form__field form__field-btn form__field-btn--fullwidth">
                                        <button class="btn-reset btn btn--fill stepper-trigger js-stepper-trigger" type="submit" data-index-next="2">
                                            <span class="btn__text">Зарегистрироваться</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="tabs__panel" data-id="1">
                                <form id="" class="form authreg-form" method="" action="javascript:;">
                                    <div class="form__field">
                                        <label for="regFormOrganizerCompany" class="form__label-for">
                                            <span>Название организации <span class="required-star">*</span></span>
                                        </label>
                                        <input
                                                id="regFormOrganizerCompany"
                                                class="input-reset form__input"
                                                type="text"
                                                name="company"
                                                placeholder=""
                                                required
                                        >
                                    </div>
                                    <div class="form__field">
                                        <label for="regFormOrganizerEmail" class="form__label-for">
                                            <span>Электронная почта <span class="required-star">*</span></span>
                                        </label>
                                        <input
                                                id="regFormOrganizerEmail"
                                                class="input-reset form__input"
                                                type="email"
                                                name="email"
                                                placeholder=""
                                                required
                                        >
                                        <div class="form__btn form__btn--disabled">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#mail-a"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="form__field">
                                        <label for="regFormOrganizerPassword" class="form__label-for">
                                            <span>Пароль <span class="required-star">*</span></span>
                                        </label>
                                        <input
                                                id="regFormOrganizerPassword"
                                                class="input-reset form__input"
                                                type="password"
                                                name="password"
                                                placeholder=""
                                                data-password-target
                                                required
                                        >
                                        <div class="form__btn">
                                            <label class="flex-all-center">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#eye-on"></use>
                                                </svg>
                                                <input
                                                        type="checkbox"
                                                        class="visually-hidden"
                                                        data-password-switcher
                                                >
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form__field">
                                        <label for="regFormOrganizerRepeatPassword" class="form__label-for">
                                            <span>Повторите пароль <span class="required-star">*</span></span>
                                        </label>
                                        <input
                                                id="regFormOrganizerRepeatPassword"
                                                class="input-reset form__input"
                                                type="password"
                                                name="repeatPassword"
                                                placeholder=""
                                                data-password-target
                                                required
                                        >
                                        <div class="form__btn">
                                            <label class="flex-all-center">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#eye-on"></use>
                                                </svg>
                                                <input
                                                        type="checkbox"
                                                        class="visually-hidden"
                                                        data-password-switcher
                                                >
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form__field  form__field-agree">
                                        <div class="custom-checkbox">
                                            <input class="custom-checkbox__input" type="checkbox" checked>
                                            <div class="custom-checkbox__agree">
                                                <span>Соглашаюсь на <a class="link link--underline" href="javascript:;">обработку моих персональных данных</a>, с <a class="link link--underline" href="javascript:;">правилами пользования сайтом</a> и принимаю <a class="link link--underline" href="javascript:;">Пользовательское соглашение</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form__field form__field-btn form__field-btn--fullwidth">
                                        <button class="btn-reset btn btn--fill stepper-trigger js-stepper-trigger" data-index-next="3">
                                            <span class="btn__text">Зарегистрироваться</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="authreg__footer">
                    <div class="authreg__footer-divider"><span>или</span></div>
                    <ul class="list-reset authreg-social social" title="">
                        <li class="authreg-social__item">
                            <a
                                    href="javascript:;"
                                    target="_blank"
                                    class="authreg-social__link authreg-social__link--vk"
                                    aria-label="Войдите в приложение с аккаунтом Вконтакте"
                            >
                                <svg class="icon">
                                    <use href="img/sprite.svg#authreg-vk"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="authreg-social__item">
                            <a
                                    href="javascript:;"
                                    target="_blank"
                                    class="authreg-social__link authreg-social__link--fb"
                                    aria-label="Войдите в приложение с аккаунтом Facebook"
                            >
                                <svg class="icon">
                                    <use href="img/sprite.svg#authreg-fb"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="authreg-social__item">
                            <a
                                    href="javascript:;"
                                    target="_blank"
                                    class="authreg-social__link authreg-social__link--google"
                                    aria-label="Войдите в приложение с аккаунтом Google"
                            >
                                <svg class="icon">
                                    <use href="img/sprite.svg#authreg-google"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="authreg-social__item">
                            <a
                                    href="javascript:;"
                                    target="_blank"
                                    class="authreg-social__link authreg-social__link--apple"
                                    aria-label="Войдите в приложение с аккаунтом Apple"
                            >
                                <svg class="icon">
                                    <use href="img/sprite.svg#authreg-apple"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div id="step-2" class="content" role="tabpanel" aria-labelledby="step-2-trigger">
                <!-- Volunteer -->
                <div class="authreg__header">
                    <div class="authreg__title h2">Давайте<br>познакомимся?</div>
                </div>
                <div class="authreg__body">
                    <form id="" class="form authreg-form" method="" action="javascript:;">
                        <div class="form__field">
                            <label for="regFormDataVolunteerName" class="form__label-for">
                                <span>Ваше имя <span class="required-star">*</span></span>
                            </label>
                            <input
                                    id="regFormDataVolunteerName"
                                    class="input-reset form__input"
                                    type="text"
                                    name="name"
                                    placeholder=""
                                    required
                            >
                        </div>
                        <div class="form__field">
                            <label for="regFormDataVolunteerSurname" class="form__label-for">
                                <span>Фамилия <span class="required-star">*</span></span>
                            </label>
                            <input
                                    id="regFormDataVolunteerSurname"
                                    class="input-reset form__input"
                                    type="text"
                                    name="surname"
                                    placeholder=""
                                    required
                            >
                        </div>
                        <div class="form__field">
                            <label for="regFormDataVolunteerPhone" class="form__label-for">
                                <span>Номер телефона <span class="required-star">*</span></span>
                            </label>
                            <input
                                    id="regFormDataVolunteerPhone"
                                    class="input-reset form__input isPhone"
                                    type="tel"
                                    name="phone"
                                    placeholder=""
                                    required
                            >
                        </div>
                        <div class="form__field">
                            <label for="regFormDataVolunteerAbout" class="form__label-for">Откуда о нас узнали?</label>
                            <input
                                    id="regFormDataVolunteerAbout"
                                    class="input-reset form__input"
                                    type="text"
                                    name="about"
                                    placeholder="VOLECO ID"
                            >
                        </div>
                        <div class="form__field  form__field-agree">
                            <div class="custom-checkbox">
                                <input class="custom-checkbox__input" type="checkbox" checked>
                                <div class="custom-checkbox__agree">
                                    <span>Соглашаюсь получать рассылку с информацией о самых интересных событиях</span>
                                </div>
                            </div>
                        </div>
                        <div class="form__field form__field-btn form__field-btn--fullwidth">
                            <button class="btn-reset btn btn--fill">
                                <span class="btn__text">Продолжить</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div id="step-3" class="content" role="tabpanel" aria-labelledby="step-3-trigger">
                <!-- Organizer -->
                <div class="authreg__header">
                    <div class="authreg__title h2">Давайте<br>познакомимся?</div>
                </div>
                <div class="authreg__body">
                    <form id="" class="form authreg-form" method="" action="javascript:;">
                        <div class="form__field">
                            <label for="regFormDataOrganizerName" class="form__label-for">
                                <span>Ваше имя <span class="required-star">*</span></span>
                            </label>
                            <input
                                    id="regFormDataOrganizerName"
                                    class="input-reset form__input"
                                    type="text"
                                    name="name"
                                    placeholder=""
                                    required
                            >
                        </div>
                        <div class="form__field">
                            <label for="regFormDataOrganizerSurname" class="form__label-for">
                                <span>Фамилия <span class="required-star">*</span></span>
                            </label>
                            <input
                                    id="regFormDataOrganizerSurname"
                                    class="input-reset form__input"
                                    type="text"
                                    name="surname"
                                    placeholder=""
                                    required
                            >
                        </div>
                        <div class="form__field">
                            <label for="regFormDataOrganizerPhone" class="form__label-for">
                                <span>Номер телефона <span class="required-star">*</span></span>
                            </label>
                            <input
                                    id="regFormDataOrganizerPhone"
                                    class="input-reset form__input isPhone"
                                    type="tel"
                                    name="phone"
                                    placeholder=""
                                    required
                            >
                        </div>
                        <div class="form__field">
                            <label for="regFormDataOrganizerLocality" class="form__label-for">
                                <span>Населенный пункт <span class="required-star">*</span></span>
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
                            </label>
                            <input
                                    id="regFormDataOrganizerLocality"
                                    class="input-reset form__input"
                                    type="text"
                                    name="locality"
                                    placeholder=""
                            >
                        </div>
                        <div class="form__field">
                            <label for="regFormDataOrganizerAbout" class="form__label-for">Откуда о нас узнали?</label>
                            <input
                                    id="regFormDataOrganizerAbout"
                                    class="input-reset form__input"
                                    type="text"
                                    name="regFormDataOrganizerAbout"
                                    placeholder="VOLECO ID"
                            >
                        </div>
                        <div class="form__field  form__field-agree">
                            <div class="custom-checkbox">
                                <input class="custom-checkbox__input" type="checkbox" checked>
                                <div class="custom-checkbox__agree">
                                    <span>Соглашаюсь получать рассылку с информацией о самых интересных событиях</span>
                                </div>
                            </div>
                        </div>
                        <div class="form__field form__field-btn form__field-btn--fullwidth">
                            <button class="btn-reset btn btn--fill">
                                <span class="btn__text">Продолжить</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>
