<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** @var array $arResult */

ob_start();

$l = count($arResult);
if ($l > 1)
{
	$l--;
	?>
	<div id="cron-crox"><?
		foreach ($arResult as $i => $item)
		{
			if ($i < $l)
			{
			    $child = ($i) ? ' itemprop="child"' : '';
			    $ref = ($i < $l - 1) ? ' itemref="breadcrumb-' . ($i+1) . '"' : '';
				?>
                <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"<?= $child ?><?= $ref ?>
                      id="breadcrumb-<?= ($i) ?>"><a itemprop="url" href="<?= P_HREF ?><?= $item['LINK'] ?>"><span itemprop="title"><?= $item['TITLE'] ?></span></a></span> <span class="divider">/</span><?
			}
			else
			{
				?>
				<span><?= $item['TITLE'] ?></span><?
			}
		}

	?>
	</div><?
}

$strReturn = ob_get_contents();
ob_end_clean();

return $strReturn;
