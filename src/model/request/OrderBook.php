<?php

namespace Tatum\model\request;

use Tatum\model\Model;


/**
 * Class OrderBookRequest
 * @package Tatum\model\request
 */
class OrderBookRequest extends Model
{
    /**
     * @var TradeType
     * @Assert\NotBlank()
     */
    public $type;
    /**
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="numeric")
     * @Assert\Regex(pattern="/^[+]?((\d+(\.\d*)?)|(\.\d+))$/")
     * @Assert\Length(min=0, max=38,maxmessage="maximal length is 38")
     */
    public $price;
    /**
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="numeric")
     * @Assert\Regex(pattern="/^[+]?((\d+(\.\d*)?)|(\.\d+))$/")
     * @Assert\Length(min=0, max=38,maxmessage="maximal length is 38")
     */
    public $amount;

    /**
     * @Assert\NotBlank()
     * @Assert\Type(type="string")
     * @Assert\Regex(pattern="/^[A-a-zZ0-9_\-]+\/[A-Za-z0-9_\-]+$/")
     * @MinLength(3)
     * @Assert\Length(min=0, max=30,maxmessage="maximal length is 30")
     */
    public $pair;

    /**
     * @Assert\NotBlank()
     * @Assert\Type(type="string")
     * @Assert\Length(min=24, max=24,maxmessage="maximal length is 24",minmessage="minimal length is 24")
     */
    public $currency1AccountId;

    /**
     * @Assert\NotBlank()
     * @Assert\Type(type="string")
     * @Assert\Length(min=24, max=24,maxmessage="maximal length is 24",minmessage="minimal length is 24")
     */
    public $currency2AccountId;
}
