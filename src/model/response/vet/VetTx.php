<?php

namespace Tatum\model\response\vet;


use Tatum\model\Model;

/**
 *
 * @export
 * @interface VetTx
 */
class VetTx extends Model {
    /**
     *
* @var string
     * @memberof VetTx
     */
    public $id;
    /**
     *
* @var string
     * @memberof VetTx
     */
    public $chainTag;
    /**
     *
* @var string
     * @memberof VetTx
     */
    public $blockRef;
    /**
     *
* @var number
     * @memberof VetTx
     */
    public $expiration;
    /**
     *
* @var Array
<VetTxClauses>
     * @memberof VetTx
     */
public $clauses;
    /**
     *
    * @var number
     * @memberof VetTx
     */
    public $gasPriceCoef;
    /**
     *
    * @var number
     * @memberof VetTx
     */
    public $gas;
    /**
     *
    * @var string
     * @memberof VetTx
     */
    public $origin;
    /**
     *
    * @var string
     * @memberof VetTx
     */
    public $nonce;
    /**
     *
    * @var number
     * @memberof VetTx
     */
    public $size;
    /**
     *
    * @var VetTxMeta
     * @memberof VetTx
     */
public $meta;
    /**
     *
    * @var number
     * @memberof VetTx
     */
    public $blockNumber;
}

/**
 *
 * @export
 * @interface VetTxClauses
 */
class VetTxClauses extends Model {
    /**
     *
    * @var string
     * @memberof VetTxClauses
     */
    public $to;
    /**
     *
    * @var string
     * @memberof VetTxClauses
     */
    public $value;
    /**
     *
    * @var string
     * @memberof VetTxClauses
     */
    public $data;
}

/**
 *
 * @export
 * @interface VetTxMeta
 */
class VetTxMeta extends Model {
    /**
     *
    * @var string
     * @memberof VetTxMeta
     */
    public $blockID;
    /**
     *
    * @var number
     * @memberof VetTxMeta
     */
    public $blockNumber;
    /**
     *
    * @var number
     * @memberof VetTxMeta
     */
    public $blockTimestamp;
}