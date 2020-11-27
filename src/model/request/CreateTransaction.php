<?php

namespace Tatum\model\request;


class CreateTransaction extends Model
{

    /**
     * @Assert\NotBlank()
     * @Assert\Length(min = 24, max = 24, maxmessage = "maximal length is 24", minmessage = "minimal length is 24")
     */
    public $senderAccountId;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(min = 24, max = 24, maxmessage = "maximal length is 24", minmessage = "minimal length is 24")
     */
    public $recipientAccountId;

    /**
     * @Assert\NotBlank()
     * @Assert\Type(type = "numeric")
     * @Assert\Length(min = 0, max = 38, maxmessage = "maximal length is 38")
     * @Assert\Regex(pattern = "/^[+]?((\d+(\.\d*)?)|(\.\d+))$/")
     */
    public $amount;
    /**
     * @Assert\Length(min = 1, max = 100, maxmessage = "maximal length is 100", minmessage = "minimal length is 1")
     */
    public $paymentId;
    /**
     * @Assert\Length(min = 1, max = 100, maxmessage = "maximal length is 100", minmessage = "minimal length is 1")
     */
    public $transactionCode;
    /**
     * @Assert\Length(min = 1, max = 500, maxmessage = "maximal length is 500", minmessage = "minimal length is 1")
     */
    public $senderNote;
    /**
     * @Assert\Length(min = 1, max = 500, maxmessage = "maximal length is 500", minmessage = "minimal length is 1")
     */

    public $recipientNote;
    /**
    @Assert\Type(type="numeric")
    @Assert\GreaterThanOrEqual(0)
     */
    public $baseRate;

    /**
     */
    public $anonymous;


    public $compliant;
}
