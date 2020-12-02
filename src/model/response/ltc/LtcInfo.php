<?php

namespace Tatum\model\response\ltc;


use Tatum\model\Model;

/**
 *
 * @export
 * @interface LtcInfo
 */
class LtcInfo extends Model {
    /**
     * Chain of the blockchain, main or test.
* @var string
     * @memberof LtcInfo
     */
    public $chain;
    /**
     * Last block.
* @var number
     * @memberof LtcInfo
     */
    public $blocks;
    /**
     * Last headers.
* @var number
     * @memberof LtcInfo
     */
    public $headers;
    /**
     * Hash of the last block.
* @var string
     * @memberof LtcInfo
     */
    public $bestblockhash;
    /**
     * Difficulty of the PoW algorithm.
* @var number
     * @memberof LtcInfo
     */
    public $difficulty;
}