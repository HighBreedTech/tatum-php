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
    id: string;
    /**
     *
* @var string
     * @memberof VetTx
     */
    chainTag: string;
    /**
     *
* @var string
     * @memberof VetTx
     */
    blockRef: string;
    /**
     *
* @var number
     * @memberof VetTx
     */
    expiration: number;
    /**
     *
* @var Array
<VetTxClauses>
     * @memberof VetTx
     */
    clauses: VetTxClauses[];
    /**
     *
    * @var number
     * @memberof VetTx
     */
    gasPriceCoef: number;
    /**
     *
    * @var number
     * @memberof VetTx
     */
    gas: number;
    /**
     *
    * @var string
     * @memberof VetTx
     */
    origin: string;
    /**
     *
    * @var string
     * @memberof VetTx
     */
    nonce: string;
    /**
     *
    * @var number
     * @memberof VetTx
     */
    size: number;
    /**
     *
    * @var VetTxMeta
     * @memberof VetTx
     */
    meta: VetTxMeta;
    /**
     *
    * @var number
     * @memberof VetTx
     */
    blockNumber: number;
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
    to: string;
    /**
     *
    * @var string
     * @memberof VetTxClauses
     */
    value: string;
    /**
     *
    * @var string
     * @memberof VetTxClauses
     */
    data: string;
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
    blockID: string;
    /**
     *
    * @var number
     * @memberof VetTxMeta
     */
    blockNumber: number;
    /**
     *
    * @var number
     * @memberof VetTxMeta
     */
    blockTimestamp: number;
}