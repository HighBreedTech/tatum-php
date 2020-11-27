<?php

namespace Tatum\model\request;

use Tatum\model\Model;

class CreateCurrency extends Model
{

    /**
     * @Assert\NotBlank()
     * @Assert\Length(min=1, max=30,maxmessage="maximal length is 30",minmessage="minimal length is 1")
     * @Assert\Regex(pattern="/^VC_[a-zA-Z0-9_]+$/")
     */
    public $name;

    /**
     * @Assert\NotBlank()
     * @Assert\Type(type="numeric")
     * @Assert\Length(min=0, max=38,maxmessage="maximal length is 38")
     * @Assert\Regex(pattern="/^[+]?((\d+(\.\d*)?)|(\.\d+))$/")
     */
    public $supply;

    /**
     * @Assert\Length(min=1, max=100,maxmessage="maximal length is 100",minmessage="minimal length is 1")
     *
     */
    public $description;

    /**
     * @Assert\Length(min=1, max=50,maxmessage="maximal length is 50",minmessage="minimal length is 1")
     *
     */
    public $accountCode;

    /**
     * @Assert\NotBlank()
     *
     * @Assert\Length(min=3, max=5,maxmessage="maximal length is 5",minmessage="minimal length is 3")
     */
    public $basePair;

    /**
     * @Assert\GreaterThanOrEqual(0)
     *
     */
    public $baseRate;

    /**
     * @Assert\Length(min=3, max=3,maxmessage="maximal length is 3",minmessage="minimal length is 3")
     *
     *
     */
    public $accountingCurrency;

    /**
     *
     *
     */
    public $customer;
}
