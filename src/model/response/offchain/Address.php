<?php

namespace Tatum\model\response\offchain;


use Tatum\model\Model;

class Address extends Model {
    /**
     * Blockchain address.
* @var string
     * @memberof Address
     */
    public $address;
    /**
     * Currency of generated address. BTC, LTC, BCH, ETH, XRP, ERC20.
* @var string
     * @memberof Address
     */
    public $currency;
    /**
     * Derivation key index for given address.
* @var number
     * @memberof Address
     */
    public $derivationKey;
    /**
     * Extended public key to derive address from. In case of XRP, this is account address,
     * since address is defined as DestinationTag, which is address field. In case of XLM, this is account address, since address is defined as message, which is address field.
* @var string
     * @memberof Address
     */
    public $xpub;
    /**
     * In case of XRP, destinationTag is the distinguisher of the account.
* @var number
     * @memberof Address
     */
    public $destinatinTag;
    /**
     * In case of XLM, message is the distinguisher of the account.
* @var string
     * @memberof Address
     */
    public $message;
}