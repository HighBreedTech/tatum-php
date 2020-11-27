<?php

namespace Tatum\model\request;


use Tatum\model\Model;

class CreateRecord extends Model
{

    /**
     * @Assert\NotBlank()
     * @Assert\Length(min = 1, max = 130000, maxmessage = "maximal length is 130000", minmessage = "minimal length is 1")
     */
    public $data;
    /**
     * @Assert\NotBlank()
     * @Assert\Length(min = 32, max = 66, maxmessage = "maximal length is 66", minmessage = "minimal length is 32")
     */
    public $fromPrivateKey;

    /**
     * @Assert\GreaterThanOrEqual(0)
     */
    public $nonce;


    /**
     * @var Fee
     */
    public $ethFee;
}
