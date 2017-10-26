<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$items = \Local\Catalog\Sanatorium::get(
	array('PROPERTY_RATING' => 'desc'),
	array(),
	array('nPageSize' => 12, 'iNumPage' => 1)
);

$file = new \CFile();

?>



<div class="el-full-bg-ser">
    <div class="engBox-body prices index">
        <div class="index-title">
            Санатории - ТОП 12
            <span>Кавказские Минеральные Воды</span>
        </div>
		<div class="el-sanat-list"><?

			foreach ($items['ITEMS'] as $item)
			{
				$city = \Local\Catalog\City::getById($item['CITY']);
				$alt = $alt = 'Санаторий ' . $item['NAME'] . ' ' . $city['NAME'];
				$img = $file->ResizeImageGet(
					$item['PREVIEW_PICTURE'],
					array(
						'width' => 261,
						'height' => 1000
					),
					BX_RESIZE_IMAGE_PROPORTIONAL,
					true
				);
				$actions = \Local\Catalog\Action::getBySanatorium($item['ID']);

				?><div class="prices-item">
					<a href="<?= $item['DETAIL_PAGE_URL'] ?>" class="item">
						<div class="img"><img src="<?= $img['src'] ?>" alt="<?= $alt ?>" title="<?= $alt ?>" ></div>
						<div class="text eng-animations">
							<b>Санаторий <?= $item['NAME'] ?></b>
							<span>КМВ, <?= $city['NAME'] ?></span>
							<i>Заказать</i>
						</div>
						<div class="money"><b>от <?= $item['PRICE'] ?> р.</b><span>СУТКИ</span></div>
					</a><?

					if ($actions)
					{
						?>
						<a href="<?= $item['DETAIL_PAGE_URL'] ?>action/" class="action-mark"><b class="action-mark__text">Акция!</b></a><?
					}

					?>
				</div><?
			}

			?>
		</div>
        <div class="top-s-searchbox">
            <div class="btn btn-all">
                <a href="/sanatorium/">смотреть все санатории</a>
            </div>
            <form class="s-searchbox" action="/sanatorium/">
                <input type="search" placeholder="Введите название санатория......" name="q"
                       class="s-searchbox-input">
                <input type="submit" class="s-searchbox-submit" value="Найти">
            </form>
        </div>
    </div>
</div>
