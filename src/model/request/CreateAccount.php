<?php

namespace Tatum\model\request;

use Tatum\Model\CustomerUpdate;
use Tatum\Model\Model;

class CreateAccount extends Model
{

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(min=2, max=40,maxmessage="maximal length is 40",minmessage="minimal length is 2")
     */
    public $currency;

    /**
     * @var string|null
     * @Assert\Length(min=0, max=150,maxmessage="maximal length is 150")
     *
     */
    public $xpub;

    /**
     * @var boolean|null
     *
     *
     */
    public $compliant;

    /**
     * @var Fiat|null
     * @Assert\Length(min=3, max=3,maxmessage="maximal length is 3",minmessage="minimal length is 3")
     *
     *
     */
    public $accountingCurrency;

    /**
     * @var string|null
     * @Assert\Length(min=1, max=50,maxmessage="maximal length is 50",minmessage="minimal length is 1")
     *
     */
    public $accountCode;

    /**
     * @var string|null
     * @Assert\Length(min=1, max=30,maxmessage="maximal length is 30",minmessage="minimal length is 1")
     *
     */
    public $accountNumber;

    /**
     * @var CustomerUpdate|null
     *
     *
     */
    public $customer;
}
