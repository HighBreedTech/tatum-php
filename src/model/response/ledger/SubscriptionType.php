<?php

namespace Tatum\model\response\ledger;


use Tatum\model\Model;

export enum SubscriptionType {
  ACCOUNT_BALANCE_LIMIT = 'ACCOUNT_BALANCE_LIMIT',
  OFFCHAIN_WITHDRAWAL = 'OFFCHAIN_WITHDRAWAL',
  TRANSACTION_HISTORY_REPORT = 'TRANSACTION_HISTORY_REPORT',
  ACCOUNT_INCOMING_BLOCKCHAIN_TRANSACTION = 'ACCOUNT_INCOMING_BLOCKCHAIN_TRANSACTION'
}
