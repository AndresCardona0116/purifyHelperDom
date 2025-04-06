<?php
namespace Domina\PurifyHelper;

use Domina\PurifyHelper\Helper\PurifyHelper;

class PurifyDom 
{
    public function voidPurifyRequest($request,$arrExceptions){
        $response = [];
        if(!empty($request)){
            $objPurify = PurifyHelper::getInstance();
            $objPurify->setArrWhiteListInputs($arrExceptions);
            $response  = $objPurify->voidPurifyRequest($request);
        }
        return $response;
    }

}