<?php
namespace Rebing0512\Ocr\Libraries;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Rebing0512\Ocr\Controllers\AipOcr;

use MBCore\Wechat\Libraries\Helper as Wechat;


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