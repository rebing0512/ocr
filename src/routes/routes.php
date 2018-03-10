<?php

/*
 * OCR 图文识别
 */
Route::group([
    'prefix' =>'ocr'
],function(){
    // test
    Route::get('test', function(){
        return 'ocr';

    });


});