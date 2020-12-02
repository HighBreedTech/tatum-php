<?php

namespace Tatum\model\response\ltc;


use Tatum\model\Model;

/**
 *
 * @export
 * @interface LtcBlock
 */


class LtcBlock extends Model {
    /**
     * Hash of block.
* @var string
     * @memberof LtcBlock
     */
    public $hash;
    /**
     * The number of blocks preceding a particular block on a block chain.
* @var number
     * @memberof LtcBlock
     */
    public $height;
    /**
     * Block version.
* @var number
     * @memberof LtcBlock
     */
    public $version;
    /**
     * Hash of the previous block.
* @var string
     * @memberof LtcBlock
     */
    public $prevBlock;
    /**
     * The root node of a merkle tree, a descendant of all the hashed pairs in the tree.
* @var string
     * @memberof LtcBlock
     */
    public $merkleRoot;
    /**
     * Time of the block.
* @var number
     * @memberof LtcBlock
     */
    public $ts;
    /**
     *
* @var number
     * @memberof LtcBlock
     */
    public $bits;
    /**
     * Arbitrary number that is used in Litecoin's proof of work consensus algorithm.
* @var number
     * @memberof LtcBlock
     */
    public $nonce;
    /**
     *
* @var Array
<LtcTx>
     * @memberof LtcBlock
     */
public $txs;
}