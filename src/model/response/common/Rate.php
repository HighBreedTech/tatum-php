<?php

namespace Tatum\model\response\common;


use Tatum\model\Model;

class Rate extends Model
{

    public $id;
    public $value;
    public $basePair;
    public $timestamp;
    public $source;
}
