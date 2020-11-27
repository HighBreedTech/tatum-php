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
    chain: string;
    /**
     * Last block.
* @var number
     * @memberof BchInfo
     */
    blocks: number;
    /**
     * Hash of the last block.
* @var string
     * @memberof BchInfo
     */
    bestblockhash: string;
    /**
     * Difficulty of the PoW algorithm.
* @var number
     * @memberof BchInfo
     */
    difficulty: number;
}