import {BtcTx} from './BtcTx';

/**
 *
 * @export
 * @interface BtcBlock
 */
class BtcBlock extends Model {
    /**
     * Hash of block.
* @var string
     * @memberof BtcBlock
     */
    hash: string;
    /**
     * The number of blocks preceding a particular block on a block chain.
* @var number
     * @memberof BtcBlock
     */
    height: number;
    /**
     * The number of blocks following a particular block on a block chain, including current one.
* @var number
     * @memberof BtcBlock
     */
    depth: number;
    /**
     * Block version.
* @var number
     * @memberof BtcBlock
     */
    version: number;
    /**
     * Hash of the previous block.
* @var string
     * @memberof BtcBlock
     */
    prevBlock: string;
    /**
     * The root node of a merkle tree, a descendant of all the hashed pairs in the tree.
* @var string
     * @memberof BtcBlock
     */
    merkleRoot: string;
    /**
     * Time of the block.
* @var number
     * @memberof BtcBlock
     */
    time: number;
    /**
     *
* @var number
     * @memberof BtcBlock
     */
    bits: number;
    /**
     * Arbitrary number that is used in Bitcoin's proof of work consensus algorithm.
* @var number
     * @memberof BtcBlock
     */
    nonce: number;
    /**
     *
* @var Array
<BtcTx>
     * @memberof BtcBlock
     */
    txs: BtcTx[];
}