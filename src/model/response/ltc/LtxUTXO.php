/**
 *
 * @export
 * @interface LtcUTXO
 */
class LtcUTXO extends Model {
    /**
     * Version of the UTXO.
* @var number
     * @memberof LtcUTXO
     */
    version: number;
    /**
     *
* @var number
     * @memberof LtcUTXO
     */
    height: number;
    /**
     * Amount of UTXO in satoshis.
* @var string
     * @memberof LtcUTXO
     */
    value: string;
    /**
     * Data generated by a spender which is almost always used as variables to satisfy a pubkey script.
* @var string
     * @memberof LtcUTXO
     */
    script: string;
    /**
     * Address of the owner of the UTXO.
* @var string
     * @memberof LtcUTXO
     */
    address: string;
    /**
     * Coinbase transaction - miner fee.
* @var boolean
     * @memberof LtcUTXO
     */
    coinbase: boolean;
    /**
     * Transaction hash.
* @var string
     * @memberof LtcUTXO
     */
    hash: string;
    /**
     * Transaction index of the output.
* @var number
     * @memberof LtcUTXO
     */
    index: number;
}