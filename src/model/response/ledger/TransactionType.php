<?php

namespace Tatum\model\response\ledger;


use Tatum\model\Model;



interface TransactionType
{
    const     FAILED = 'FAILED';
    const     DEBIT_PAYMENT = 'DEBIT_PAYMENT';
    const     CREDIT_PAYMENT = 'CREDIT_PAYMENT';
    const     CREDIT_DEPOSIT = 'CREDIT_DEPOSIT';
    const     DEBIT_WITHDRAWAL = 'DEBIT_WITHDRAWAL';
    const     CANCEL_WITHDRAWAL = 'CANCEL_WITHDRAWAL';
    const     DEBIT_OUTGOING_PAYMENT = 'DEBIT_OUTGOING_PAYMENT';
    const     CREDIT_INCOMING_PAYMENT = 'CREDIT_INCOMING_PAYMENT';
    const     EXCHANGE_BUY = 'EXCHANGE_BUY';
    const     EXCHANGE_SELL = 'EXCHANGE_SELL';
}