<?php
namespace Rebing0512\Ocr\Libraries;


use Rebing0512\Ocr\Controllers\AipOcr;


class Helper
{
    /**
     * @return AipOcr
     *
     * OCR CONFIG 文字识别【百度云】
     */
    function aipOcr(){
        $APP_ID = config('ocr.id'); //YOUR APP_ID
        $API_KEY = config('ocr.ak'); //YOUR API_KEY
        $SECRET_KEY = config('ocr.sk'); //YOUR SECRET_KEY
        $aipOcr = new AipOcr($APP_ID, $API_KEY, $SECRET_KEY);
        return $aipOcr;
    }
}