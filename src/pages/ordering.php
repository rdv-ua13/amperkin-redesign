<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="gap-xl">
	<div class="container">
		<div class="gap-xl">
			<form action="" method="" class="order">
				<div class="order-content">
					<div class="gap-xl">
						<div class="catalog-heading">
							<div class="catalog-heading__back">
								<a class="catalog-heading__back-link" href="javascript:;">
									<svg class="icon icon-xs">
										<use href="img/sprite.svg#chevron-left"></use>
									</svg>
									<span>Вернуться в корзину</span>
								</a>
							</div>
							<div class="h1 catalog-heading__title">Оформление заказа</div>
						</div>
					</div>
                    <div class="gap-xl">
                        <div class="order-step">
                            <div class="order-step__title"></div>
                            <div class="order-step__action"></div>
                            <div class="order-step__data"></div>
                        </div>
                    </div>
				</div>
				<div class="order-sidebar">
					<div class="order-sidebar-gap">
						<div class="order-sidebar__item">
                            <div class="order-sidebar__item-part">
                                <div class="gap-xs">
                                    <table class="table-descr table-descr-sb">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <span class="h5">Итого</span>
                                            </td>
                                            <td>
                                                <span class="h4">14 263 ₽</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="gap-md">
                                    <table class="table-descr table-descr-sb">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <span>4 товара</span>
                                            </td>
                                            <td>
                                                <span class="semi-bold">18 276 ₽</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>Доставка</span>
                                            </td>
                                            <td>
                                                <span class="semi-bold">560 ₽</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>Вес заказа</span>
                                            </td>
                                            <td>
                                                <span class="semi-bold">3,4 кг</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="order-sidebar-ordering">
                                    <button class="btn-reset btn btn-primary">
                                        <span class="btn__text">Подтвердить заказ</span>
                                    </button>
                                </div>
                            </div>

							<div class="order-sidebar__item-part">
                                <div class="order-final">
                                    <div class="order-final__title h5">Ваш заказ</div>
                                    <div class="order-final__content">
                                        <div class="card-product">
                                            <span class="card-product-view">
                                                <picture>
                                                    <source srcset="img/product.webp" type="image/webp">
                                                    <img
                                                            loading="lazy"
                                                            src="img/product.png"
                                                            class="image"
                                                            width="40"
                                                            height="40"
                                                            alt="Изображение блока"
                                                    >
                                                </picture>
                                            </span>
                                            <span class="card-product-descr">
                                                <span class="card-product-descr__title">
                                                    <a href="javascript:;">SE Unica System+ Антрацит Блок розеточный (2к+з)+usb тип А</a>
                                                </span>
                                                <span class="card-product-descr__price">2 956,80 ₽</span>
                                            </span>
                                        </div>
                                        <div class="card-product">
                                            <span class="card-product-view">
                                                <picture>
                                                    <source srcset="img/product.webp" type="image/webp">
                                                    <img
                                                            loading="lazy"
                                                            src="img/product.png"
                                                            class="image"
                                                            width="40"
                                                            height="40"
                                                            alt="Изображение блока"
                                                    >
                                                </picture>
                                            </span>
                                            <span class="card-product-descr">
                                                <span class="card-product-descr__title">
                                                    <a href="javascript:;">SE Удлинитель катушечный Thorsman 4 роз 15м </a>
                                                </span>
                                                <span class="card-product-descr__price">7 956,80 ₽</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>

		<div class="gap-xl product-card-mobile-section">
			<div class="product-card-mobile-section-container">
				<div class="gap-lg">
					<div class="h2">отсюда поля для мобилы</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>