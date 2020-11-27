<?php

namespace Tatum\model\request;

use Tatum\model\Model;

/**
 *
 * @export
 * @interface BroadcastWithdrawal
 */
class BroadcastWithdrawal extends Model
{
    /**
     * Currency of signed transaction to be broadcast, BTC, LTC, BCH, ETH, XRP, ERC20
     * @var string
     * @memberof BroadcastWithdrawal
     */
    public $currency;
    /**
     * Raw signed transaction to be published to network.
     * @var string
     * @memberof BroadcastWithdrawal
     */
    public $txData;
    /**
     * Withdrawal ID to be completed by transaction broadcast
     * @var string|null
     * @memberof BroadcastWithdrawal
     */
    public $withdrawalId;
    /**
     * Signature ID to be completed by transaction broadcast
     * @var string|null
     * @memberof BroadcastWithdrawal
     */
    public $signatureId;

}

