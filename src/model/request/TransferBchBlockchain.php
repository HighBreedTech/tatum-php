<?php

namespace Tatum\model\request;


use Tatum\model\Model;

/**
 * Class FromUTXOBcash
 * @package Tatum\model\request
 */
class FromUTXOBcash extends FromUTXO
{
    /**
     * @Assert\NotBlank()
     * @Assert\Type(type = "numeric")
     * @Assert\GreaterThanOrEqual(0)
     */
    public $value;
}

class TransferBchBlockchain extends Model
{
    /**
     * @var FromUTXOBcash[]
     * @Assert\NotBlank()
     */
    public $fromUTXO;
    /**
     * @var To[]
     * @Assert\Count(min=1)
     */
    public $to;
}
