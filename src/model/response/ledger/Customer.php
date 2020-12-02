<?php

namespace Tatum\model\response\ledger;


use Tatum\model\Model;




export class Customer extends Model {

public $id;

public $externalId;

public $customerCountry;

public $accountingCurrency;

public $providerCountry;

    public active: boolean;

    public enabled: boolean;
}
