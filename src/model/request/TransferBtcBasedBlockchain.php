<?php

namespace Tatum\model\request;


use Tatum\model\Model;

/**
 * Class FromAddress
 * @package Tatum\model\request
 */
class FromAddress extends Model
{
    /**
     * @Assert\NotBlank()
     * @Assert\Length(min = 30, max = 50, maxmessage = "maximal length is 50", minmessage = "minimal length is 30")
     */
    public $address;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(min = 52, max = 52, maxmessage = "maximal length is 52", minmessage = "minimal length is 52")
     */
    public $privateKey;
}

class FromUTXO extends Model
{

    /**
     * @Assert\NotBlank()
     * @Assert\Length(min = 64, max = 64, maxmessage = "maximal length is 64", minmessage = "minimal length is 64")
     */
    public $txHash;

    /**
     * @Assert\NotBlank()
     * @Assert\GreaterThanOrEqual(0)
     * @Assert\LessThanOrEqual(4294967295)
     */
    public $index;
    /**
     *
     * @Assert\NotBlank()
     * @Assert\Length(min=52, max=52,maxmessage="maximal length is 52",minmessage="minimal length is 52")
     */
    public $privateKey;
}

class To extends Model
{
    /**
     * @Assert\NotBlank()
     * @Assert\Length(min = 30, max = 50, maxmessage = "maximal length is 50", minmessage = "minimal length is 30")
     */
    public $address;

    /**
     * @var number
     * @Assert\NotBlank()
     * @Assert\GreaterThanOrEqual(0)
     */
    public $value;
}

class TransferBtcBasedBlockchain extends Model
{

    /**
     *
     * @Assert\NotBlank()
     */

    public $fromAddress;

    /**
     *
     * @Assert\NotBlank()
     */
    public $fromUTXO;

    /**
     * @var To[]
     * @Assert\Count(min=1)
     */

    public $to;
}
