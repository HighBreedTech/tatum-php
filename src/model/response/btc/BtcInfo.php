<?php

namespace Tatum\model\response\btc;


use Tatum\model\Model;

/**
 *
 * @export
 * @interface BtcInfo
 */
class BtcInfo extends Model
{
    /**
     * Chain of the blockchain, main or test.
     * @var string
     * @memberof BtcInfo
     */
    public $chain;
    /**
     * Last block.
     * @var number
     * @memberof BtcInfo
     */
    public $blocks;
    /**
     * Last headers.
     * @var number
     * @memberof BtcInfo
     */
    public $headers;
    /**
     * Hash of the last block.
     * @var string
     * @memberof BtcInfo
     */
    public $bestblockhash;
    /**
     * Difficulty of the algorithm.
     * @var number
     * @memberof BtcInfo
     */
    public $difficulty;
}