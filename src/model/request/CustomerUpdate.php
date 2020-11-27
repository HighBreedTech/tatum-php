<?php

namespace Tatum\model\request;


use Tatum\model\Model;

class CustomerUpdate extends Model
{

    /**
     * @Assert\Length(min = 2, max = 2, maxmessage = "maximal length is 2", minmessage = "minimal length is 2")
     */
    public $customerCountry;
    /**
     * @Assert\Length(min = 3, max = 3, maxmessage = "maximal length is 3", minmessage = "minimal length is 3")
     */
    public $accountingCurrency;
    /**
     * @Assert\Length(min = 2, max = 2, maxmessage = "maximal length is 2", minmessage = "minimal length is 2")
     */
    public $providerCountry;
    /**
     * @Assert\Length(min = 1, max = 100, maxmessage = "maximal length is 100", minmessage = "minimal length is 1")
     */
    public $externalId;
}
