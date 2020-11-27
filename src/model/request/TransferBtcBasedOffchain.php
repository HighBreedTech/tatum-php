<?php

namespace Tatum\model\request;


use Tatum\model\Model;

/**
 * Class KeyPair
 * @package Tatum\model\request
 */
class KeyPair extends Model
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

class TransferBtcBasedOffchain extends CreateWithdrawal
{

    /**
     * @Assert\Length(min = 1, max = 500, maxmessage = "maximal length is 500", minmessage = "minimal length is 1")
     *
     *
     * @Assert\NotBlank()
     */
    public $mnemonic;


    /**
     * @Assert\NotBlank()
     */
    public $keyPair;
}
