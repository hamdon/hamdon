<?php

namespace Hamdon;


/**
 * Class PagingInfo
 *
 * @package Hamdon
 * @author hamdon created at 2016/2/25 14:04
 */
class PagingInfo
{
    //当前页
    public $pIndex = 1;
    //显示条数
    public $pSize = 20;

    public function pIndex(){
        return empty($this->pIndex)||!is_numeric($this->pIndex)?1:$this->pIndex;
    }

    public function pSize(){
        return empty($this->pSize)||!is_numeric($this->pSize)?20:$this->pSize;
    }
}

 