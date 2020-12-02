<?php

namespace Tatum\model\response\bch;


use Tatum\model\Model;
/**
 *
 * @export
 * @interface BchInfo
 */
class BchInfo extends Model {
    /**
     * Chain of the blockchain, main or test.
* @var string
     * @memberof BchInfo
     */
    public $chain;
    /**
     * Last block.
* @var number
     * @memberof BchInfo
     */
    public $blocks;
    /**
     * Hash of the last block.
* @var string
     * @memberof BchInfo
     */
    public $bestblockhash;
    /**
     * Difficulty of the PoW algorithm.
* @var number
     * @memberof BchInfo
     */
    public $difficulty;
}