/**
 *
 * @export
 * @interface LtcBlock
 */
import {LtcTx} from './LtcTx';

class LtcBlock extends Model {
    /**
     * Hash of block.
* @var string
     * @memberof LtcBlock
     */
    hash: string;
    /**
     * The number of blocks preceding a particular block on a block chain.
* @var number
     * @memberof LtcBlock
     */
    height: number;
    /**
     * Block version.
* @var number
     * @memberof LtcBlock
     */
    version: number;
    /**
     * Hash of the previous block.
* @var string
     * @memberof LtcBlock
     */
    prevBlock: string;
    /**
     * The root node of a merkle tree, a descendant of all the hashed pairs in the tree.
* @var string
     * @memberof LtcBlock
     */
    merkleRoot: string;
    /**
     * Time of the block.
* @var number
     * @memberof LtcBlock
     */
    ts: number;
    /**
     *
* @var number
     * @memberof LtcBlock
     */
    bits: number;
    /**
     * Arbitrary number that is used in Litecoin's proof of work consensus algorithm.
* @var number
     * @memberof LtcBlock
     */
    nonce: number;
    /**
     *
* @var Array
<LtcTx>
     * @memberof LtcBlock
     */
    txs: LtcTx[];
}