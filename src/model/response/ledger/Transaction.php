<?php

namespace Tatum\model\response\ledger;


use Tatum\model\Model;

/**
 *
 * @export
 * @interface Transaction
 */




class Transaction extends Model {
    /**
     * Source account - source of transaction(s)
* @var string
     * @memberof Transaction
     */
    public $accountId;
    /**
     * Amount in account's currency
* @var string
     * @memberof Transaction
     */
    public $amount;
    /**
     * Whether the transaction is anonymous. If true, counter account owner does not see source account.
* @var boolean
     * @memberof Transaction
     */
public $anonymous;
    /**
     * Counter account - transaction(s) destination account. In case of blockchain recipient, this is addess of blockchain account.
* @var string
     * @memberof Transaction
     */
    public $counterAccountId;
    /**
     * Transaction currency
* @var string
     * @memberof Transaction
     */
    public $currency;
    /**
     * Time in UTC of transaction.
* @var number
     * @memberof Transaction
     */
    public $created;
    /**
     * List of market values of given transaction with all supported base pairs.
* @var Array
<MarketValue>
     * @memberof Transaction
     */
public $marketValue;
    /**
     * Type of operation.
    * @var string
     * @memberof Transaction
     */
public $operationType;
    /**
     * Payment ID defined in payment order by sender.
    * @var string
     * @memberof Transaction
     */
    public $paymentId;
    /**
     * Present only for operationType WITHDRAWAL and XLM / XRP based accounts it represents message or destinationTag of the recipient, if present.
    * @var string
     * @memberof Transaction
     */
    public $attr;
    /**
     * For operationType DEPOSIT it represents address, on which was deposit credited for the account.
    * @var string
     * @memberof Transaction
     */
    public $address;
    /**
     * Note visible for both sender and recipient.
    * @var string
     * @memberof Transaction
     */
    public $recipientNote;
    /**
     * Transaction internal reference - unique identifier within Tatum ledger. In order of failure, use this value to search for problems.
    * @var string
     * @memberof Transaction
     */
    public $reference;
    /**
     * For operationType DEPOSIT, BLOCKCHAIN_TRANSACTION it represents transaction id, for which deposit occured.
    * @var string
     * @memberof Transaction
     */
    public $txId;
    /**
     * Note visible for sender.
    * @var string
     * @memberof Transaction
     */
    public $senderNote;
    /**
     * For bookkeeping to distinct transaction purpose.
    * @var string
     * @memberof Transaction
     */
    public $transactionCode;
    /**
     * Type of payment.
    * @var string
     * @memberof Transaction
     */
public $transactionType;
}
