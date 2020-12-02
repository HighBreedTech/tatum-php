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
    public $gasUsed;
    /**
     *
* @var string
     * @memberof VetTxReceipt
     */
    public $gasPayer;
    /**
     *
* @var string
     * @memberof VetTxReceipt
     */
    public $paid;
    /**
     *
* @var string
     * @memberof VetTxReceipt
     */
    public $reward;
    /**
     *
* @var boolean
     * @memberof VetTxReceipt
     */
public $reverted;
    /**
     *
* @var VetTxReceiptMeta
     * @memberof VetTxReceipt
     */
public $meta;
    /**
     *
* @var Array
<VetTxReceiptOutputs>
     * @memberof VetTxReceipt
     */
public $outputs;
    /**
     *
    * @var number
     * @memberof VetTxReceipt
     */
    public $blockNumber;
    /**
     *
    * @var string
     * @memberof VetTxReceipt
     */
    public $blockHash;
    /**
     *
    * @var string
     * @memberof VetTxReceipt
     */
    public $transactionHash;
    /**
     *
    * @var string
     * @memberof VetTxReceipt
     */
    public $status;
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
    public $blockID;
    /**
     *
    * @var number
     * @memberof VetTxReceiptMeta
     */
    public $blockNumber;
    /**
     *
    * @var number
     * @memberof VetTxReceiptMeta
     */
    public $blockTimestamp;
    /**
     *
    * @var string
     * @memberof VetTxReceiptMeta
     */
    public $txID;
    /**
     *
    * @var string
     * @memberof VetTxReceiptMeta
     */
    public $txOrigin;
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
public $events;
    /**
     *
        * @var Array
        <VetTxReceiptTransfers>
     * @memberof VetTxReceiptOutputs
     */
public $transfers;
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
    public $sender;
    /**
     *
            * @var string
     * @memberof VetTxReceiptTransfers
     */
    public $recipient;
    /**
     *
            * @var string
     * @memberof VetTxReceiptTransfers
     */
    public $amount;
}