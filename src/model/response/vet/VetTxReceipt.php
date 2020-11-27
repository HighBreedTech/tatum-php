<?php

namespace Tatum\model\response\vet;


use Tatum\model\Model;

/**
 *
 * @export
 * @interface VetTxReceipt
 */
class VetTxReceipt extends Model {
    /**
     *
* @var number
     * @memberof VetTxReceipt
     */
    gasUsed: number;
    /**
     *
* @var string
     * @memberof VetTxReceipt
     */
    gasPayer: string;
    /**
     *
* @var string
     * @memberof VetTxReceipt
     */
    paid: string;
    /**
     *
* @var string
     * @memberof VetTxReceipt
     */
    reward: string;
    /**
     *
* @var boolean
     * @memberof VetTxReceipt
     */
    reverted: boolean;
    /**
     *
* @var VetTxReceiptMeta
     * @memberof VetTxReceipt
     */
    meta: VetTxReceiptMeta;
    /**
     *
* @var Array
<VetTxReceiptOutputs>
     * @memberof VetTxReceipt
     */
    outputs: VetTxReceiptOutputs[];
    /**
     *
    * @var number
     * @memberof VetTxReceipt
     */
    blockNumber: number;
    /**
     *
    * @var string
     * @memberof VetTxReceipt
     */
    blockHash: string;
    /**
     *
    * @var string
     * @memberof VetTxReceipt
     */
    transactionHash: string;
    /**
     *
    * @var string
     * @memberof VetTxReceipt
     */
    status: string;
}

/**
 *
 * @export
 * @interface VetTxReceiptMeta
 */
class VetTxReceiptMeta extends Model {
    /**
     *
    * @var string
     * @memberof VetTxReceiptMeta
     */
    blockID: string;
    /**
     *
    * @var number
     * @memberof VetTxReceiptMeta
     */
    blockNumber: number;
    /**
     *
    * @var number
     * @memberof VetTxReceiptMeta
     */
    blockTimestamp: number;
    /**
     *
    * @var string
     * @memberof VetTxReceiptMeta
     */
    txID: string;
    /**
     *
    * @var string
     * @memberof VetTxReceiptMeta
     */
    txOrigin: string;
}

/**
 *
 * @export
 * @interface VetTxReceiptOutputs
 */
class VetTxReceiptOutputs extends Model {
    /**
     *
    * @var Array
    <any>
     * @memberof VetTxReceiptOutputs
     */
    events: any[];
    /**
     *
        * @var Array
        <VetTxReceiptTransfers>
     * @memberof VetTxReceiptOutputs
     */
    transfers: VetTxReceiptTransfers[];
}

/**
 *
 * @export
 * @interface VetTxReceiptTransfers
 */
class VetTxReceiptTransfers extends Model {
    /**
     *
            * @var string
     * @memberof VetTxReceiptTransfers
     */
    sender: string;
    /**
     *
            * @var string
     * @memberof VetTxReceiptTransfers
     */
    recipient: string;
    /**
     *
            * @var string
     * @memberof VetTxReceiptTransfers
     */
    amount: string;
}