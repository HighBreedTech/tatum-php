/**
 *
 * @export
 * @interface LtcInfo
 */
class LtcInfo extends Model {
    /**
     * Chain of the blockchain, main or test.
* @var string
     * @memberof LtcInfo
     */
    chain: string;
    /**
     * Last block.
* @var number
     * @memberof LtcInfo
     */
    blocks: number;
    /**
     * Last headers.
* @var number
     * @memberof LtcInfo
     */
    headers: number;
    /**
     * Hash of the last block.
* @var string
     * @memberof LtcInfo
     */
    bestblockhash: string;
    /**
     * Difficulty of the PoW algorithm.
* @var number
     * @memberof LtcInfo
     */
    difficulty: number;
}