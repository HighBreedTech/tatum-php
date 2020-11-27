<?php

namespace Tatum\model\response\btc;


use Tatum\model\Model;
/**
 *
 * @export
 * @interface BtcInfo
 */
class BtcInfo extends Model {
    /**
     * Chain of the blockchain, main or test.
* @var string
     * @memberof BtcInfo
     */
    chain: string;
    /**
     * Last block.
* @var number
     * @memberof BtcInfo
     */
    blocks: number;
    /**
     * Last headers.
* @var number
     * @memberof BtcInfo
     */
    headers: number;
    /**
     * Hash of the last block.
* @var string
     * @memberof BtcInfo
     */
    bestblockhash: string;
    /**
     * Difficulty of the algorithm.
* @var number
     * @memberof BtcInfo
     */
    difficulty: number;
}