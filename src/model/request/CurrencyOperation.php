<?php

namespace Tatum\model\request;

use Tatum\model\Model;

class CurrencyOperation extends Model
{

    /**
     * @Assert\NotBlank()
     * @Assert\Length(min = 24, max = 24, maxmessage = "maximal length is 24", minmessage = "minimal length is 24")
     */
    public $accountId;
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
     * @Assert\Length(min = 24, max = 24, maxmessage = "maximal length is 24", minmessage = "minimal length is 24")
     */
    public $counterAccount;
    /**
     * @Assert\Length(min = 1, max = 50, maxmessage = "maximal length is 50", minmessage = "minimal length is 1")
     */
    public $reference;
}
