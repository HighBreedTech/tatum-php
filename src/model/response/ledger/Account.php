<?php

namespace Tatum\model\response\ledger;


use Tatum\model\Model;
/**
 *
 * @export
 * @interface Account
 */


class Account extends Model {
    /**
     * For bookkeeping to distinct account purpose.
* @var string
     * @memberof Account
     */
    public $accountCode;
    /**
     * Account ID.
* @var string
     * @memberof Account
     */
    public $id;
    /**
     *
* @var AccountBalance
     * @memberof Account
     */
public $balance;
    /**
     * Time of account creation.
* @var string
     * @memberof Account
     */
    public $created;
    /**
     * Account currency. Supported values are BTC, LTC, BCH, ETH, XRP, Tatum Virtual Currencies started with VC_ prefix or ERC20 customer token created via Tatum Platform.
* @var string
     * @memberof Account
     */
    public $currency;
    /**
     * ID of newly created customer or existing customer associated with account.
* @var string
     * @memberof Account
     */
    public $customerId;
    /**
     * Indicates whether account is frozen or not.
* @var boolean
     * @memberof Account
     */
public $frozen;
    /**
     * Indicates whether account is active or not.
* @var boolean
     * @memberof Account
     */
public $active;
    /**
     * Extended public key to derive address from.
     * In case of XRP, this is account address, since address is defined as DestinationTag, which is address field.
     * In case of XLM, this is account address, since address is defined as message, which is address field.
* @var string
     * @memberof Account
     */
    public $xpub;
}