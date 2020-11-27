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
    txid: string;
    /**
     *
* @var number
     * @memberof BchTx
     */
    version: number;
    /**
     *
* @var number
     * @memberof BchTx
     */
    locktime: number;
    /**
     *
* @var Array
<BchTxVin>
     * @memberof BchTx
     */
    vin: BchTxVin[];
    /**
     *
    * @var Array
    <BchTxVout>
     * @memberof BchTx
     */
    vout: BchTxVout[];
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
    hex: string;
    /**
     *
        * @var string
     * @memberof BchTxScriptPubKey
     */
    asm: string;
    /**
     *
        * @var Array
        <string>
     * @memberof BchTxScriptPubKey
     */
    addresses: string[];
    /**
     *
            * @var string
     * @memberof BchTxScriptPubKey
     */
    type: string;
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
    hex: string;
    /**
     *
            * @var string
     * @memberof BchTxScriptSig
     */
    asm: string;
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
    txid: string;
    /**
     *
            * @var number
     * @memberof BchTxVin
     */
    vout: number;
    /**
     *
            * @var BchTxScriptSig
     * @memberof BchTxVin
     */
    scriptSig: BchTxScriptSig;
    /**
     *
            * @var string
     * @memberof BchTxVin
     */
    coinbase: string;
    /**
     *
            * @var number
     * @memberof BchTxVin
     */
    sequence: number;
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
    value: string;
    /**
     *
            * @var number
     * @memberof BchTxVout
     */
    n: number;
    /**
     *
            * @var BchTxScriptPubKey
     * @memberof BchTxVout
     */
    scriptPubKey: BchTxScriptPubKey;
}