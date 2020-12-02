<?php

namespace Tatum\model\response\bch;


use Tatum\model\Model;

/**
 *
 * @export
 * @interface BchBlock
 */


class BchBlock extends Model {
    /**
     * Hash of block.
* @var string
     * @memberof BchBlock
     */
    public $hash;
    /**
     * Block size.
* @var number
     * @memberof BchBlock
     */
    public $size;
    /**
     * The number of blocks preceding a particular block on a block chain.
* @var number
     * @memberof BchBlock
     */
    public $height;
    /**
     * Block version.
* @var number
     * @memberof BchBlock
     */
    public $version;
    /**
     * The root node of a merkle tree, a descendant of all the hashed pairs in the tree.
* @var string
     * @memberof BchBlock
     */
    public $merkleroot;
    /**
     * List of transactions present in the block.
* @var Array
<BchTx>
     * @memberof BchBlock
     */
public $tx;
    /**
     * Time of the block.
    * @var number
     * @memberof BchBlock
     */
    public $time;
    /**
     * Arbitrary number that is used in Bitcoin's proof of work consensus algorithm.
    * @var number
     * @memberof BchBlock
     */
    public $nonce;
    /**
     *
    * @var number
     * @memberof BchBlock
     */
    public $difficulty;
    /**
     * Number of blocks mined after this block.
    * @var number
     * @memberof BchBlock
     */
    public $confirmations;
    /**
     * Hash of the previous block.
    * @var string
     * @memberof BchBlock
     */
    public $previousblockhash;
    /**
     * Hash of the next block.
    * @var string
     * @memberof BchBlock
     */
    public $nextblockhash;
}