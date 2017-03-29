<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

/** @var CMain $APPLICATION */

?><!doctype html>
<html lang="<?= LANGUAGE_ID ?>">
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,300i,400,400i,500,500i,700,700i&amp;subset=cyrillic" rel="stylesheet">
    <title><? $APPLICATION->ShowTitle(); ?></title><?
	
    $assets = \Bitrix\Main\Page\Asset::getInstance();

	 CJSCore::init(array('jquery2'));

	$assets->addJs(SITE_DIR . 'js/jquery-ui/jquery-ui.min.js');
    $assets->addJs(SITE_DIR . 'js/fancybox/jquery.fancybox.js');
	$assets->addJs(SITE_DIR . 'js/owl/owl.carousel.min.js');
	$assets->addJs(SITE_DIR . 'js/readmore.min.js');

    $assets->addJs(SITE_DIR . 'js/scripts.js');
    $assets->addJs(SITE_DIR . 'js/catalog.js');


    $assets->addCss(SITE_DIR . 'js/jquery-ui/jquery-ui.min.css');
    $assets->addCss(SITE_DIR . 'js/fancybox/jquery.fancybox.css');
	$assets->addCss(SITE_DIR . 'js/owl/owl.carousel.css');

	$assets->addCss(SITE_DIR . 'css/style.css');
    $assets->addCss(SITE_DIR . 'css/media.css');
	
	$APPLICATION->ShowHead();
    ?>
    <script>
        //  Перевод
        ( function( factory ) {
            factory( jQuery.datepicker );
        }( function( datepicker ) {

            datepicker.regional.ru = {
                closeText: "Закрыть",
                prevText: "&#x3C;Пред",
                nextText: "След&#x3E;",
                currentText: "Сегодня",
                monthNames: [ "Январь","Февраль","Март","Апрель","Май","Июнь",
                    "Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь" ],
                monthNamesShort: [ "Янв","Фев","Мар","Апр","Май","Июн",
                    "Июл","Авг","Сен","Окт","Ноя","Дек" ],
                dayNames: [ "воскресенье","понедельник","вторник","среда","четверг","пятница","суббота" ],
                dayNamesShort: [ "вск","пнд","втр","срд","чтв","птн","сбт" ],
                dayNamesMin: [ "Вс","Пн","Вт","Ср","Чт","Пт","Сб" ],
                weekHeader: "Нед",
                dateFormat: "dd.mm.yy",
                firstDay: 1,
                isRTL: false,
                showMonthAfterYear: false,
                yearSuffix: "" };
            datepicker.setDefaults( datepicker.regional.ru );

            return datepicker.regional.ru;

        } ) );
        //  Перевод Конец
    </script>

</head>
<body>
<? $APPLICATION->ShowPanel(); ?>
<header class="header">
	<div class="header-line_wbg engBox-body">
		<div class="header-logo"><?$APPLICATION->IncludeFile(SITE_DIR."include/logo.php",array(),array("MODE"=>"html"));?></div>
		<div class="header-time-work"><?$APPLICATION->IncludeFile(SITE_DIR."include/timeWork.php",array(),array("MODE"=>"text"));?></div>
		<div class="header-adress"><?$APPLICATION->IncludeFile(SITE_DIR."include/site-address.php",array(),array("MODE"=>"text"));?></div>
		<div class="header-account"><a href="#">Личный кабинет</a></div>
		<div class="header-phone">
			<?$APPLICATION->IncludeFile(SITE_DIR."include/site-phone.php",array(),array("MODE"=>"html"));?>
		</div>
	</div>
	<div class="head_full">
		<nav class="engBox-body main-menu p-head">
			<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"topHor", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "bottom",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "topHor"
	),
	false
);

			?>
			<div class="nav_search">
				<form class="searchbox" action="/sanatorium/">
					<input type="search" placeholder="Введите название санатория......" name="q"
					       class="searchbox-input" onkeyup="buttonUp();" required>
					<input type="submit" class="searchbox-submit" value="Найти">
					<span class="searchbox-icon"><img src="/images/icon_serch_btn.jpg"></span>
				</form>
				<div class="searchbox-close"></div>
			</div>
			<a href="#" id="pull">Меню</a>
		</nav>
	</div>
	<div class="head_pun_full">
		<ul class="engBox-body clearfix bl head_pun">
			<li><a class="icon1" href="#">Официальные цены санаториев</a></li>
			<li><a class="icon2" href="#">Бесплатный трансфер</a></li>
			<li class="sale">
				<p class="sale-text">
					<b>Нашли дешевле?</b>
					<span>Мы предложим вам СКИДКУ!</span>
				</p>
				<a class="sale-link" href="#" id="haad_pun-bnt">подробнее</a>
			</li>
		</ul>
	</div>
</header>
