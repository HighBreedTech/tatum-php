<?php

namespace Tatum\model\response\vet;


use Tatum\model\Model;

/**
 *
 * @export
 * @interface VetEstimateGas
 */
class VetEstimateGas extends Model {
    /**
     * Sender
* @var string
     * @memberof VetEstimateGas
     */
    public $from;
    /**
     * Recipient
* @var string
     * @memberof VetEstimateGas
     */
    public $to;
    /**
     * Amount to send
* @var string
     * @memberof VetEstimateGas
     */
    public $value;
    /**
     * Data to send to Smart Contract
* @var string
     * @memberof VetEstimateGas
     */
    public $data;
    /**
     * Nonce
* @var number
     * @memberof VetEstimateGas
     */
    public $nonce;
}