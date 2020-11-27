/**
 *
 * @export
 * @interface BchBlock
 */
import {BchTx} from './BchTx';

class BchBlock extends Model {
    /**
     * Hash of block.
* @var string
     * @memberof BchBlock
     */
    hash: string;
    /**
     * Block size.
* @var number
     * @memberof BchBlock
     */
    size: number;
    /**
     * The number of blocks preceding a particular block on a block chain.
* @var number
     * @memberof BchBlock
     */
    height: number;
    /**
     * Block version.
* @var number
     * @memberof BchBlock
     */
    version: number;
    /**
     * The root node of a merkle tree, a descendant of all the hashed pairs in the tree.
* @var string
     * @memberof BchBlock
     */
    merkleroot: string;
    /**
     * List of transactions present in the block.
* @var Array
<BchTx>
     * @memberof BchBlock
     */
    tx: BchTx[];
    /**
     * Time of the block.
    * @var number
     * @memberof BchBlock
     */
    time: number;
    /**
     * Arbitrary number that is used in Bitcoin's proof of work consensus algorithm.
    * @var number
     * @memberof BchBlock
     */
    nonce: number;
    /**
     *
    * @var number
     * @memberof BchBlock
     */
    difficulty: number;
    /**
     * Number of blocks mined after this block.
    * @var number
     * @memberof BchBlock
     */
    confirmations: number;
    /**
     * Hash of the previous block.
    * @var string
     * @memberof BchBlock
     */
    previousblockhash: string;
    /**
     * Hash of the next block.
    * @var string
     * @memberof BchBlock
     */
    nextblockhash: string;
}