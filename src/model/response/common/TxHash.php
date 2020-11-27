/**
 *
 * @export
 * @interface TxHash
 */
class TxHash extends Model {
    /**
     * TX hash of successful transaction.
* @var string
     * @memberof TxHash
     */
    txId: string;
    /**
     * Whethet withdrawal was completed in Tatum's internal ledger. If not, it must be done manually.
* @var boolean
     * @memberof TxHash
     */
    completed: boolean;
}