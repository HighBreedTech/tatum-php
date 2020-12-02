<?php

namespace Tatum\model\response\ledger;


use Tatum\model\Model;

/**
 *
 * @export
 * @interface AccountBalance
 */
class AccountBalance extends Model {
    /**
     * Account balance represents all assets on the account, available and blocked.
* @var string
     * @memberof AccountBalance
     */
    public $accountBalance;
    /**
     * Available balance on the account represents account balance minus blocked amount on the account.
     * If the account is frozen or customer is disabled, the available balance will be 0.
     * Available balance should be user do determine how much can customer send or withdraw from the account.
* @var string
     * @memberof AccountBalance
     */
    public $availableBalance;
}