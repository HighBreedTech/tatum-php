<?php

namespace Tatum\model\response\bch;


use Tatum\model\Model;
/**
 *
 * @export
 * @interface BchTx
 */
class BchTx extends Model {
    /**
     *
* @var string
     * @memberof BchTx
     */
    public $txid;
    /**
     *
* @var number
     * @memberof BchTx
     */
    public $version;
    /**
     *
* @var number
     * @memberof BchTx
     */
    public $locktime;
    /**
     *
* @var Array
<BchTxVin>
     * @memberof BchTx
     */
public $vin;
    /**
     *
    * @var Array
    <BchTxVout>
     * @memberof BchTx
     */
public $vout;
}

/**
 *
 * @export
 * @interface BchTxScriptPubKey
 */
class BchTxScriptPubKey extends Model {
    /**
     *
        * @var string
     * @memberof BchTxScriptPubKey
     */
    public $hex;
    /**
     *
        * @var string
     * @memberof BchTxScriptPubKey
     */
    public $asm;
    /**
     *
        * @var Array
        <string>
     * @memberof BchTxScriptPubKey
     */
public $addresses;
    /**
     *
            * @var string
     * @memberof BchTxScriptPubKey
     */
    public $type;
}

/**
 *
 * @export
 * @interface BchTxScriptSig
 */
class BchTxScriptSig extends Model {
    /**
     *
            * @var string
     * @memberof BchTxScriptSig
     */
    public $hex;
    /**
     *
            * @var string
     * @memberof BchTxScriptSig
     */
    public $asm;
}

/**
 *
 * @export
 * @interface BchTxVin
 */
class BchTxVin extends Model {
    /**
     *
            * @var string
     * @memberof BchTxVin
     */
    public $txid;
    /**
     *
            * @var number
     * @memberof BchTxVin
     */
    public $vout;
    /**
     *
            * @var BchTxScriptSig
     * @memberof BchTxVin
     */
public $scriptSig;
    /**
     *
            * @var string
     * @memberof BchTxVin
     */
    public $coinbase;
    /**
     *
            * @var number
     * @memberof BchTxVin
     */
    public $sequence;
}

/**
 *
 * @export
 * @interface BchTxVout
 */
class BchTxVout extends Model {
    /**
     *
            * @var string
     * @memberof BchTxVout
     */
    public $value;
    /**
     *
            * @var number
     * @memberof BchTxVout
     */
    public $n;
    /**
     *
            * @var BchTxScriptPubKey
     * @memberof BchTxVout
     */
public $scriptPubKey;
}