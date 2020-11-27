<?php

namespace Tatum\model\response\ledger;


use Tatum\model\Model;

/**
 *
 * @export
 * @interface Transaction
 */
import {MarketValue} from './MarketValue';
import {OperationType} from './OperationType';
import {TransactionType} from './TransactionType';

class Transaction extends Model {
    /**
     * Source account - source of transaction(s)
* @var string
     * @memberof Transaction
     */
    accountId: string;
    /**
     * Amount in account's currency
* @var string
     * @memberof Transaction
     */
    amount: string;
    /**
     * Whether the transaction is anonymous. If true, counter account owner does not see source account.
* @var boolean
     * @memberof Transaction
     */
    anonymous: boolean;
    /**
     * Counter account - transaction(s) destination account. In case of blockchain recipient, this is addess of blockchain account.
* @var string
     * @memberof Transaction
     */
    counterAccountId?: string;
    /**
     * Transaction currency
* @var string
     * @memberof Transaction
     */
    currency: string;
    /**
     * Time in UTC of transaction.
* @var number
     * @memberof Transaction
     */
    created: number;
    /**
     * List of market values of given transaction with all supported base pairs.
* @var Array
<MarketValue>
     * @memberof Transaction
     */
    marketValue: MarketValue[];
    /**
     * Type of operation.
    * @var string
     * @memberof Transaction
     */
    operationType: OperationType;
    /**
     * Payment ID defined in payment order by sender.
    * @var string
     * @memberof Transaction
     */
    paymentId?: string;
    /**
     * Present only for operationType WITHDRAWAL and XLM / XRP based accounts it represents message or destinationTag of the recipient, if present.
    * @var string
     * @memberof Transaction
     */
    attr?: string;
    /**
     * For operationType DEPOSIT it represents address, on which was deposit credited for the account.
    * @var string
     * @memberof Transaction
     */
    address?: string;
    /**
     * Note visible for both sender and recipient.
    * @var string
     * @memberof Transaction
     */
    recipientNote?: string;
    /**
     * Transaction internal reference - unique identifier within Tatum ledger. In order of failure, use this value to search for problems.
    * @var string
     * @memberof Transaction
     */
    reference: string;
    /**
     * For operationType DEPOSIT, BLOCKCHAIN_TRANSACTION it represents transaction id, for which deposit occured.
    * @var string
     * @memberof Transaction
     */
    txId?: string;
    /**
     * Note visible for sender.
    * @var string
     * @memberof Transaction
     */
    senderNote?: string;
    /**
     * For bookkeeping to distinct transaction purpose.
    * @var string
     * @memberof Transaction
     */
    transactionCode?: string;
    /**
     * Type of payment.
    * @var string
     * @memberof Transaction
     */
    transactionType: TransactionType;
}
