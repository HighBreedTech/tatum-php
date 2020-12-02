<?php

namespace Tatum\model\response\btc;


use Tatum\model\Model;

/**
 *
 * @export
 * @interface BtcUTXO
 */
class BtcUTXO extends Model {
    /**
     * Version of the UTXO.
* @var number
     * @memberof BtcUTXO
     */
    public $version;
    /**
     *
* @var number
     * @memberof BtcUTXO
     */
    public $height;
    /**
     * Amount of UTXO in satoshis.
* @var number
     * @memberof BtcUTXO
     */
    public $value;
    /**
     * Data generated by a spender which is almost always used as variables to satisfy a pubkey script.
* @var string
     * @memberof BtcUTXO
     */
    public $script;
    /**
     * Address of the owner of the UTXO.
* @var string
     * @memberof BtcUTXO
     */
    public $address;
    /**
     * Coinbase transaction - miner fee.
* @var boolean
     * @memberof BtcUTXO
     */
public $coinbase;
    /**
     * Transaction hash.
* @var string
     * @memberof BtcUTXO
     */
    public $hash;
    /**
     * Transaction index of the output.
* @var number
     * @memberof BtcUTXO
     */
    public $index;
}