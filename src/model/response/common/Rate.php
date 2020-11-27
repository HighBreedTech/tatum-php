<?php

namespace Tatum\model\response\common;


use Tatum\model\Model;


import {Currency} from '../../request';
import {Fiat} from '../ledger/Fiat';

export class Rate extends Model {

    public id: Fiat | Currency;

public $value;

    public basePair: Fiat;

    public timestamp: number;

public $source;
}
