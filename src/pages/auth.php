<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="authreg authreg--auth">
    <div class="authreg__header">
        <div class="authreg__title h2">Войти</div>
        <div class="authreg__subtitle">
            <span>Еще нет аккаунта?</span>
            <a href="javascript:;" class="link link--green">Зарегистрироваться</a>
        </div>
    </div>
    <div class="authreg__body">
        <form id="" class="form authreg-form" method="" action="javascript:;">
            <div class="form__field">
                <label for="authFormEmail" class="form__label-for">
                    Электронная почта
                </label>
                <input
                        id="authFormEmail"
                        class="input-reset form__input"
                        type="email"
                        name="authFormEmail"
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
                <label for="authFormPassword" class="form__label-for">
                    <span>Пароль <span class="required-star">*</span></span>
                </label>
                <input
                        id="authFormPassword"
                        class="input-reset form__input"
                        type="password"
                        name="authFormPassword"
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
            <div class="form__field form__field-btn">
                <button class="btn-reset btn btn--fill">
                    <span class="btn__text">Войти</span>
                </button>
                <a href="javascript:;" class="link link--green">Восстановить пароль</a>
            </div>
        </form>
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

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>
