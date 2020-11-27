<?php

namespace Tatum\model\response\ledger;


use Tatum\model\Model;

import {Country} from '../../request/Country';
import {Fiat} from './Fiat';

export class Customer extends Model {

public $id;

public $externalId;

public $customerCountry;

public $accountingCurrency;

public $providerCountry;

    public active: boolean;

    public enabled: boolean;
}
