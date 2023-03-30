<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="authreg authreg--recovery">
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
                    <div class="authreg__title h2">Восстановление пароля</div>
                    <div class="authreg__subtitle">
                        <span>Введите адрес электронной почты, связанный с вашим аккаунтом, и мы вышлем вам ссылку для изменения пароля</span>
                    </div>
                </div>
                <div class="authreg__body">
                    <form id="" class="form authreg-form" method="" action="javascript:;">
                        <div class="form__field">
                            <label for="recoveryFormLogin" class="form__label-for">Электронная почта или номер телефона</label>
                            <input
                                    id="recoveryFormLogin"
                                    class="input-reset form__input"
                                    type="text"
                                    name="recoveryFormLogin"
                                    placeholder=""
                                    required
                            >
                        </div>
                        <div class="form__field form__field-btn">
                            <button class="btn-reset btn btn--fill stepper-trigger js-stepper-trigger" data-index-next="2">
                                <span class="btn__text">Сбросить пароль</span>
                            </button>
                        </div>
                    </form>
                </div>
			</div>

			<div id="step-2" class="content" role="tabpanel" aria-labelledby="step-2-trigger">
                <div class="authreg__header">
                    <div class="authreg__title h2">Введите код из письма</div>
                    <div class="authreg__subtitle">
                        <span>На ваш электронный адрес отправлен код для восстановления пароля. Введите его в поле.</span>
                    </div>
                </div>
                <div class="authreg__body">
                    <form id="" class="form authreg-form authreg-form-recovery" method="" action="javascript:;">
                        <div class="form__field form__field-validation-nums">
                            <input
                                    id="recoveryFormValidationCode1"
                                    class="input-reset form__input js-forminput-recovery-num"
                                    type="number"
                                    pattern="[0-9]*"
                                    inputtype="numeric"
                                    autocomplete="one-time-code"
                                    name=""
                                    required
                            >
                            <input
                                    id="recoveryFormValidationCode-2"
                                    class="input-reset form__input js-forminput-recovery-num"
                                    type="number"
                                    pattern="[0-9]*"
                                    inputtype="numeric"
                                    autocomplete="one-time-code"
                                    name=""
                                    required
                            >
                            <input
                                    id="recoveryFormValidationCode-3"
                                    class="input-reset form__input js-forminput-recovery-num"
                                    type="number"
                                    pattern="[0-9]*"
                                    inputtype="numeric"
                                    autocomplete="one-time-code"
                                    name=""
                                    required
                            >
                            <input
                                    id="recoveryFormValidationCode-4"
                                    class="input-reset form__input js-forminput-recovery-num"
                                    type="number"
                                    pattern="[0-9]*"
                                    inputtype="numeric"
                                    autocomplete="one-time-code"
                                    name=""
                                    required
                            >
                            <input
                                    id="recoveryFormValidationCode-5"
                                    class="input-reset form__input js-forminput-recovery-num"
                                    type="number"
                                    pattern="[0-9]*"
                                    inputtype="numeric"
                                    autocomplete="one-time-code"
                                    name=""
                                    required
                            >
                            <input
                                    id="recoveryFormValidationCode-6"
                                    class="input-reset form__input js-forminput-recovery-num"
                                    type="number"
                                    pattern="[0-9]*"
                                    inputtype="numeric"
                                    autocomplete="one-time-code"
                                    name=""
                                    required
                            >
                        </div>
                        <div class="form__field form__field-btn">
                            <button class="btn-reset btn btn--fill stepper-trigger js-stepper-trigger" data-index-next="3">
                                <span class="btn__text">Продолжить</span>
                            </button>
                            <a href="javascript:;" class="link">Отправить код ещё раз</a>
                        </div>
                    </form>
                </div>
			</div>

			<div id="step-3" class="content" role="tabpanel" aria-labelledby="step-3-trigger">
                <div class="authreg__header">
                    <div class="authreg__title h2">Задайте новый пароль</div>
                </div>
                <div class="authreg__body">
                    <form id="" class="form authreg-form" method="" action="javascript:;">
                        <div class="form__field">
                            <label for="recoveryFormPasswordNew" class="form__label-for">Новый пароль</label>
                            <input
                                    id="recoveryFormPasswordNew"
                                    class="input-reset form__input"
                                    type="password"
                                    name="recoveryFormPasswordNew"
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
                            <label for="recoveryFormRepeatPasswordNew" class="form__label-for">Повторите пароль</label>
                            <input
                                    id="recoveryFormRepeatPasswordNew"
                                    class="input-reset form__input"
                                    type="password"
                                    name="recoveryFormRepeatPasswordNew"
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
                            <button class="btn-reset btn btn--fill" type="submit">
                                <span class="btn__text">Сохранить пароль</span>
                            </button>
                        </div>
                    </form>
                </div>
			</div>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>