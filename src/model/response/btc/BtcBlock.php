<?php

namespace Tatum\model\response\btc;


use Tatum\model\Model;


/**
 *
 * @export
 * @interface BtcBlock
 */
class BtcBlock extends Model
{
    /**
     * Hash of block.
     * @var string
     * @memberof BtcBlock
     */
    public $hash;
    /**
     * The number of blocks preceding a particular block on a block chain.
     * @var number
     * @memberof BtcBlock
     */
    public $height;
    /**
     * The number of blocks following a particular block on a block chain, including current one.
     * @var number
     * @memberof BtcBlock
     */
    public $depth;
    /**
     * Block version.
     * @var number
     * @memberof BtcBlock
     */
    public $version;
    /**
     * Hash of the previous block.
     * @var string
     * @memberof BtcBlock
     */
    public $prevBlock;
    /**
     * The root node of a merkle tree, a descendant of all the hashed pairs in the tree.
     * @var string
     * @memberof BtcBlock
     */
    public $merkleRoot;
    /**
     * Time of the block.
     * @var number
     * @memberof BtcBlock
     */
    public $time;
    /**
     *
     * @var number
     * @memberof BtcBlock
     */
    public $bits;
    /**
     * Arbitrary number that is used in Bitcoin's proof of work consensus algorithm.
     * @var number
     * @memberof BtcBlock
     */
    public $nonce;
    /**
     *
     * @var Array
     * <BtcTx>
     * @memberof BtcBlock
     */
    public $txs;
}