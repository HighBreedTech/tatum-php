<?php

namespace Tatum\model\request;


use Tatum\model\Model;

class EstimateGasVet extends Model
{

    /**
     * @Assert\NotBlank()
     * @Assert\Length(min = 66, max = 66, maxmessage = "maximal length is 66", minmessage = "minimal length is 66")
     */
    public $from;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(min = 42, max = 42, maxmessage = "maximal length is 42", minmessage = "minimal length is 42")
     */
    public $to;

    /**
     * @Assert\NotBlank()
     * @Assert\Type(type = "numeric")
     * @Assert\Regex(pattern = "/^[+]?((\d+(\.\d*)?)|(\.\d+))$/")
     */
    public $value;


    /**
     * @Assert\Length(min = 0, max = 10000, maxmessage = "maximal length is 10000")
     */
    public $data;

    /**
     * @Assert\GreaterThanOrEqual(0)
     *
     * @Assert\Type(type = "integer")
     */
    public $nonce;
}
