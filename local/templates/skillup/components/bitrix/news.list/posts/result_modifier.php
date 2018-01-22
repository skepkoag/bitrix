<?php

$aSizePost = [
    'width'=>'400',
    'height'=>'250',
];
    foreach ($arResult['ITEMS'] as  &$aItem) {
    $aPicture =CFile::ResizeImageGet(
        $aItem['DETAIL_PICTURE'],
        $aSizePost,
        BX_RESIZE_IMAGE_EXACT);

    $aItems['DETAIL_PICTURE']['SRC'] = $aPicture['src'];
    }