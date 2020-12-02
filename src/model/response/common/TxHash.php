<?php

namespace Tatum\model\response\common;


use Tatum\model\Model;

/**
 *
 * @export
 * @interface TxHash
 */
class TxHash extends Model {
    /**
     * TX hash of successful transaction.
* @var string
     * @memberof TxHash
     */
    public $txId;
    /**
     * Whethet withdrawal was completed in Tatum's internal ledger. If not, it must be done manually.
* @var boolean
     * @memberof TxHash
     */
public $completed;
}