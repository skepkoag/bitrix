<?php
/*@var CBitrixComponentTemplate $this */
//echo '<pre>';
print_r($arResult);
$this->addExternalCss('');
//$this->setFrameMode(true);
$this->addExternalJs('');
?>

<? if (count($arResult['ITEMS'])>0): ?>
    <div>
        <? foreach ($arResult as $aItems): ?>

            <? $aItems['PROPERTIES']['AUTHOR']['VALUE']; ?>
            <? $aItems['PROPERTIES']['DATA PUBLIC']['VALUE']; ?>
            <? $aItems['DISPLAY_PROPERTIES']['AVATAR']['FILE_VALUE']['SRC']; ?>

            <? $aItems['DETAIL_PICTURE']['SRC']; ?>
            <? $aItems['PROPERTIES']['LIKES']['VALUE']; ?>
            <? $aItems['PROPERTIES']['COMMENT']['VALUE']; ?>

            <? foreach ($aItems['PROPERTIES']['TAGS']['VALUE'] as $aValue): ?>
               <?= $aValue; ?>
            <? endforeach; ?>

        <? endforeach; ?>
    </div>

<? endif; ?>