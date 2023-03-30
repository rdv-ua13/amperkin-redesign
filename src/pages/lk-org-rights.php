<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="block-mb">
	<div class="page-content">
		<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/page-content-header.php"); ?>

		<div class="page-content__body">
			<div class="block-mb-md">
				<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/page-content-tabs.php"); ?>
			</div>

			<div class="container">
				<div class="page-content__container">
					<div class="page-content__main">
                        <div class="request-cards">
                            <div class="request-card">
                                <div class="request-card__header">
                                    <div class="request-card__header-descr">
                                        <div class="request-card__header-preview">
                                            <div class="request-card__header-view">
                                                <picture>
                                                    <source srcset="img/card-photo-volunteer.webp" type="image/webp">
                                                    <img loading="lazy" src="img/card-photo-volunteer.png" class="image" width="42" height="42" alt="Фото карточки">
                                                </picture>
                                            </div>
                                            <div class="request-card__header-heading">
                                                <div class="request-card__header-title">Третьяков Авраам Романович</div>
                                                <div class="request-card__header-subtitle">Голосование за благоустройство общественных пространств</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="request-card__header-action">
                                        <div class="request-card__header-action-menu-trigger" data-popup-menu-call data-overlay>
                                            <svg class="icon">
                                                <use href="img/sprite.svg#menu-more"></use>
                                            </svg>
                                        </div>

                                        <div class="popup-menu popup-menu-mobile" data-popup-menu>
                                            <div class="popup-menu__row">
                                                <button class="btn-reset btn btn--fill btn--midi btn--gray flex-1">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#refresh"></use>
                                                    </svg>
                                                    <span class="btn__text">Сменить роль</span>
                                                </button>
                                            </div>
                                            <div class="popup-menu__row">
                                                <button class="btn-reset btn btn--fill btn--midi btn--gray flex-1">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#cross"></use>
                                                    </svg>
                                                    <span class="btn__text">Лишить прав</span>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="request-card__header-action-menu">
                                            <button class="btn-reset btn btn--fill btn--mini btn--gray">
                                                <svg class="icon btn__icon">
                                                    <use href="img/sprite.svg#refresh"></use>
                                                </svg>
                                                <span class="btn__text">Сменить роль</span>
                                            </button>
                                            <button class="btn-reset btn btn--fill btn--mini btn--gray">
                                                <svg class="icon btn__icon">
                                                    <use href="img/sprite.svg#cross"></use>
                                                </svg>
                                                <span class="btn__text">Лишить прав</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="request-card">
                                <div class="request-card__header">
                                    <div class="request-card__header-descr">
                                        <div class="request-card__header-preview">
                                            <div class="request-card__header-view">
                                                <picture>
                                                    <source srcset="img/card-photo-volunteer.webp" type="image/webp">
                                                    <img loading="lazy" src="img/card-photo-volunteer.png" class="image" width="42" height="42" alt="Фото карточки">
                                                </picture>
                                            </div>
                                            <div class="request-card__header-heading">
                                                <div class="request-card__header-title">Третьяков Авраам Романович</div>
                                                <div class="request-card__header-subtitle">Голосование за благоустройство общественных пространств</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="request-card__header-action">
                                        <div class="request-card__header-action-menu-trigger" data-popup-menu-call data-overlay>
                                            <svg class="icon">
                                                <use href="img/sprite.svg#menu-more"></use>
                                            </svg>
                                        </div>

                                        <div class="popup-menu popup-menu-mobile" data-popup-menu>
                                            <div class="popup-menu__row">
                                                <button class="btn-reset btn btn--fill btn--midi btn--gray flex-1">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#refresh"></use>
                                                    </svg>
                                                    <span class="btn__text">Сменить роль</span>
                                                </button>
                                            </div>
                                            <div class="popup-menu__row">
                                                <button class="btn-reset btn btn--fill btn--midi btn--gray flex-1">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#cross"></use>
                                                    </svg>
                                                    <span class="btn__text">Лишить прав</span>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="request-card__header-action-menu">
                                            <button class="btn-reset btn btn--fill btn--mini btn--gray">
                                                <svg class="icon btn__icon">
                                                    <use href="img/sprite.svg#refresh"></use>
                                                </svg>
                                                <span class="btn__text">Сменить роль</span>
                                            </button>
                                            <button class="btn-reset btn btn--fill btn--mini btn--gray">
                                                <svg class="icon btn__icon">
                                                    <use href="img/sprite.svg#cross"></use>
                                                </svg>
                                                <span class="btn__text">Лишить прав</span>
                                            </button>
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