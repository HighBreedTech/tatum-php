<?php

namespace Tatum\model\response\common;


use Tatum\model\Model;

/**
 *
 * @export
 * @interface TransactionHash
 */
class TransactionHash extends Model {
    /**
     * TX hash of successful transaction.
* @var string
     * @memberof TransactionHash
     */
    txId: string;
}