<?php

namespace Tatum\model\response\ledger;


use Tatum\model\Model;

/**
 * @export
 * @enum {string}
 */
export enum OperationType {
    PAYMENT = 'PAYMENT',
    WITHDRAWAL = 'WITHDRAWAL',
    BLOCKCHAIN_TRANSACTION = 'BLOCKCHAIN_TRANSACTION',
    EXCHANGE = 'EXCHANGE',
    FAILED = 'FAILED',
    DEPOSIT = 'DEPOSIT',
    MINT = 'MINT',
    REVOKE = 'REVOKE'
}
