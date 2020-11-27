<?php

namespace Tatum\model\request;


use Tatum\model\Model;

class CreateWithdrawal extends Model
{

    /**
     * @Assert\NotBlank()
     * @Assert\Length(min = 24, max = 24, maxmessage = "maximal length is 24", minmessage = "minimal length is 24")
     */
    public $senderAccountId;
    /**
     * @Assert\NotBlank()
     * @Assert\Length(min = 1, max = 100, maxmessage = "maximal length is 100", minmessage = "minimal length is 1")
     */
    public $address;
    /**
     * @Assert\NotBlank()
     * @Assert\Type(type = "numeric")
     * @Assert\Length(min = 0, max = 38, maxmessage = "maximal length is 38")
     * @Assert\Regex(pattern = "/^[+]?((\d+(\.\d*)?)|(\.\d+))$/")
     */
    public $amount;
    /**
     * @Assert\Type(type = "numeric")
     *
     * @Assert\Regex(pattern = "/^[+]?((\d+(\.\d*)?)|(\.\d+))$/")
     */
    public $fee;

    /**
     */
    public $compliant;
    /**
     * @Assert\Length(min = 1, max = 100, maxmessage = "maximal length is 100", minmessage = "minimal length is 1")
     */
    public $paymentId;
    /**
     * @Assert\Length(min = 1, max = 500, maxmessage = "maximal length is 500", minmessage = "minimal length is 1")
     */
    public $senderNote;
    /**
     * @Assert\Length(min = 0, max = 64, maxmessage = "maximal length is 64")
     * @Assert\Regex(pattern = "/^[ -~]{0,64}$/")
     */
    public $attr;
}
