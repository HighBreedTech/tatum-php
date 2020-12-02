<?php

namespace Tatum\model\response\offchain;


use Tatum\model\Model;

/**
 *
 * @export
 * @interface WithdrawalResponse
 */


class WithdrawalResponse extends Model {
    /**
     * Transaction reference of the transaction connected to this withdrawal.
* @var string
     * @memberof WithdrawalResponse
     */
    public $reference;
    /**
     *
* @var Array
<WithdrawalResponseData>
     * @memberof WithdrawalResponse
     */
public $data;
    /**
     * ID of withdrawal
    * @var string
     * @memberof WithdrawalResponse
     */
    public $id;
}

/**
 *
 * @export
 * @interface WithdrawalResponseData
 */
class WithdrawalResponseData extends Model {
    /**
     *
    * @var Address
     * @memberof WithdrawalResponseData
     */
public $address;
    /**
     * Amount of unprocessed transaction outputs, that can be used for withdrawal. Bitcoin, Litecoin, Bitcoin Cash only.
    * @var number
     * @memberof WithdrawalResponseData
     */
    public $amount;
    /**
     * Last used unprocessed transaction output, that can be used.
     * Bitcoin, Litecoin, Bitcoin Cash only. If -1, it indicates prepared vOut with amount to be transferred to pool address.
    * @var string
     * @memberof WithdrawalResponseData
     */
    public $vIn;
    /**
     * Index of last used unprocessed transaction output in raw transaction, that can be used. Bitcoin, Litecoin, Bitcoin Cash only.
    * @var number
     * @memberof WithdrawalResponseData
     */
    public $vInIndex;
    /**
     * Script of last unprocessed UTXO. Bitcoin SV only.
    * @var string
     * @memberof WithdrawalResponseData
     */
    public $scriptPubKey;
}