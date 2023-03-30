<div class="main-section-tabs swiper js-main-section-tabs">
	<div class="swiper-wrapper">
		<? $arMenu = array (
			"ms-ecodela.php" => "Экодела",
			"ms-petitions.php" => "Петиции",
			"ms-fundraising.php" => "Сбор средств",
			"ms-projects.php" => "Проекты",
			"ms-volunteer.php" => "Эковолонтеры",
			"ms-organizer.php" => "Организаторы",
		);
		foreach ($arMenu as $arItem => $value) : ?>
			<div class="swiper-slide">
				<a
					href="<?= $arItem ?>"
					class="main-section-tabs__link<? if(strpos($_SERVER["REQUEST_URI"], $arItem)) : ?> selected<? endif; ?>"
				><?= $value ?></a>
			</div>
		<? endforeach; ?>
	</div>
</div>