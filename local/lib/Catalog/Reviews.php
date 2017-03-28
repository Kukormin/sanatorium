<?
namespace Local\Catalog;
use Local\System\ExtCache;


/**
 * Class Reviews Отзывы
 * @package Local\Catalog
 */
class Reviews
{
	/**
	 * Количество отзывов на странице
	 */
	const PAGE_SIZE = 12;

	/**
	 * ID инфоблока
	 */
	const IBLOCK_ID = 7;

	/**
	 * ID первого звездного варианта
	 */
	const STARS_ID = 132;

	/**
	 * Время кеширования
	 */
	const CACHE_TIME = 864000;

	/**
	 * Путь для кеширования
	 */
	const CACHE_PATH = 'Local/Catalog/Reviews/';

	/**
	 * Возвращает отзывы
	 * @param $isService
	 * @param $cityId
	 * @param $page
	 * @param $size
	 * @param bool $refreshCache
	 * @return array|mixed
	 */
	public static function getList($isService, $cityId, $page, $size = 0, $refreshCache = false)
	{
		$return = array();

		$isService = intval($isService);

		$cityId = intval($cityId);

		$page = intval($page);
		if ($page < 1)
			$page = 1;

		if (!$size)
			$size = self::PAGE_SIZE;

		$extCache = new ExtCache(
			array(
				__FUNCTION__,
				$isService,
				$cityId,
				$page,
				$size,
			),
			static::CACHE_PATH . __FUNCTION__ . '/',
			static::CACHE_TIME
		);
		if(!$refreshCache && $extCache->initCache()) {
			$return = $extCache->getVars();
		} else {
			$extCache->startDataCache();

			$nav = array(
				'nPageSize' => $size,
				'iNumPage' => $page,
			);

			$filter = array(
				'IBLOCK_ID' => self::IBLOCK_ID,
				'ACTIVE' => 'Y',
				'PROPERTY_SERVICE' => $isService,
			);
			if ($cityId)
				$filter['PROPERTY_SANATORIUM_CITY'] = $cityId;

			$iblockElement = new \CIBlockElement();
			$rsItems = $iblockElement->GetList(array('SORT' => 'ASC'), $filter, false, $nav, array(
				'ID',
				'NAME',
				'PREVIEW_TEXT',
				'PROPERTY_SANATORIUM_ID',
				'PROPERTY_CITY',
				'PROPERTY_STARS',
				'PROPERTY_DATE',
			));
			while ($item = $rsItems->Fetch())
			{
				$return['ITEMS'][] = array(
					'ID' => $item['ID'],
					'NAME' => $item['NAME'],
                    'TEXT' => $item['PREVIEW_TEXT'],
                    'SANATORIUM' => $item['PROPERTY_SANATORIUM_ID_VALUE'],
                    'CITY' => $item['PROPERTY_CITY_VALUE'],
                    'STARS' => $item['PROPERTY_STARS_VALUE'],
                    'DATE' => $item['PROPERTY_DATE_VALUE'],
				);
			}
			$return['NAV'] = $rsItems->GetPageNavStringEx($navComponentObject, '', 'reviews');

			$extCache->endDataCache($return);
		}

		return $return;
	}

	/**
	 * Добавление отзыва
	 * @return bool|int
	 */
	public static function add()
	{
		$id = 0;

		$name = $_POST['name'];
		$txt = $_POST['txt'];
		$city = $_POST['city'];
		$mail = $_POST['mail'];
		$mark = intval($_POST['mark']);
		$service = $_POST['service'];
		$san = $_POST['san'];

		if ($name && $txt && $mail)
		{
			if ($mark >= 1 && $mark <= 5)
				$mark += self::STARS_ID - 1;
			$el = new \CIBlockElement();

			$fields = array(
				'IBLOCK_ID' => self::IBLOCK_ID,
				'NAME' => $name,
				'ACTIVE' => 'N',
				'PREVIEW_TEXT' => $txt,
				'PROPERTY_VALUES' => array(
					'CITY' => $city,
					'EMAIL' => $mail,
					'STARS' => $mark,
					'DATE' => ConvertTimeStamp(),
					'SERVICE' => $service,
					'SANATORIUM' => $san,
				),
			);
			$id = $el->Add($fields);
		}

		return $id;
	}

	/**
	 * обработчик изменения элемента - нужно обновить город санатория
	 * @param $id
	 */
	public static function onUpdate($id)
	{
		$iblockElement = new \CIBlockElement();
		$rsItems = $iblockElement->GetList(array('SORT' => 'ASC'), array(
			'IBLOCK_ID' => self::IBLOCK_ID,
			'ID' => $id
		), false, false, array(
			'ID',
			'PROPERTY_SANATORIUM_ID',
			'PROPERTY_SANATORIUM_CITY',
		));
		if ($item = $rsItems->Fetch())
		{
			$sanId = $item['PROPERTY_SANATORIUM_ID_VALUE'];
			$cityId = 0;
			if ($sanId)
			{
				$san = Sanatorium::getSimpleById($sanId);
				$cityId = intval($san['CITY']);
			}

			if ($cityId != $item['PROPERTY_SANATORIUM_CITY_VALUE'])
			{
				$iblockElement->SetPropertyValuesEx($id, self::IBLOCK_ID, array(
					'SANATORIUM_CITY' => $cityId,
				));
			}

		}
	}
}

