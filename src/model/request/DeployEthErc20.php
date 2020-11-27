<?php

namespace Tatum\model\request;

use Tatum\model\Model;

class DeployEthErc20 extends Model
{

    /**
     * @Assert\NotBlank()
     * @Assert\Length(min = 1, max = 100, maxmessage = "maximal length is 100", minmessage = "minimal length is 1")
     * @Assert\Regex(pattern = "/^[a-zA-Z0-9_]+$/")
     */
    public $name;
    /**
     *
     * @Assert\NotBlank()
     * @Assert\Length(min = 1, max = 30, maxmessage = "maximal length is 30", minmessage = "minimal length is 1")
     */
    public $symbol;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(min = 42, max = 42, maxmessage = "maximal length is 42", minmessage = "minimal length is 42")
     */
    public $address;

    /**
     * @Assert\NotBlank()
     * @Assert\Type(type = "numeric")
     * @Assert\Length(min = 0, max = 38, maxmessage = "maximal length is 38")
     * @Assert\Regex(pattern = "/^[+]?((\d+(\.\d*)?)|(\.\d+))$/")
     */
    public $supply;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(min=66, max=66,maxmessage="maximal length is 66",minmessage="minimal length is 66")
     */
    public $fromPrivateKey;


    /**
     * @Assert\GreaterThanOrEqual(0)
     */
    public $nonce;


    /**
     *
     */

    public $fee;

}
