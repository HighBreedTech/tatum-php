<?php

namespace Tatum\model\response\offchain;


use Tatum\model\Model;

/**
 *
 * @export
 * @interface WithdrawalResponse
 */
import {Address} from './Address';

class WithdrawalResponse extends Model {
    /**
     * Transaction reference of the transaction connected to this withdrawal.
* @var string
     * @memberof WithdrawalResponse
     */
    reference: string;
    /**
     *
* @var Array
<WithdrawalResponseData>
     * @memberof WithdrawalResponse
     */
    data: WithdrawalResponseData[];
    /**
     * ID of withdrawal
    * @var string
     * @memberof WithdrawalResponse
     */
    id: string;
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
    address: Address;
    /**
     * Amount of unprocessed transaction outputs, that can be used for withdrawal. Bitcoin, Litecoin, Bitcoin Cash only.
    * @var number
     * @memberof WithdrawalResponseData
     */
    amount: number;
    /**
     * Last used unprocessed transaction output, that can be used.
     * Bitcoin, Litecoin, Bitcoin Cash only. If -1, it indicates prepared vOut with amount to be transferred to pool address.
    * @var string
     * @memberof WithdrawalResponseData
     */
    vIn: string;
    /**
     * Index of last used unprocessed transaction output in raw transaction, that can be used. Bitcoin, Litecoin, Bitcoin Cash only.
    * @var number
     * @memberof WithdrawalResponseData
     */
    vInIndex: number;
    /**
     * Script of last unprocessed UTXO. Bitcoin SV only.
    * @var string
     * @memberof WithdrawalResponseData
     */
    scriptPubKey: string;
}