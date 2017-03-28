<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$reviews = \Local\Catalog\Reviews::getList(0, 0, 1, 2);
?>

<div id="comments">
    <div class="engBox-body">
        <div class="title">
            Отзывы
        </div><?

	    foreach ($reviews['ITEMS'] as $item)
	    {
		    $date = '';
		    if ($item['DATE'])
			    $date = \CIBlockFormatProperties::DateFormat('j F Y года', MakeTimeStamp($item['DATE']));
		    ?>
            <div class="item mobile icon-comment-full">
                <div class="date icon-comment"><?= $date ?></div>
                <div class="title"><?= $item['NAME'] ?></div>
                <div class="city"><?= $item['CITY'] ?></div>
                <div class="text"><?= $item['TEXT'] ?></div>
                <div class="btn"><a href="#">Читать далее</a></div>
            </div><?
	    }

	    ?>
        <div class="btn">
            <a href="/reviews/">Все отзывы</a>
        </div>
    </div>
</div>