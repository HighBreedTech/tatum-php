/**
 *
 * @export
 * @interface VetEstimateGas
 */
class VetEstimateGas extends Model {
    /**
     * Sender
* @var string
     * @memberof VetEstimateGas
     */
    from: string;
    /**
     * Recipient
* @var string
     * @memberof VetEstimateGas
     */
    to: string;
    /**
     * Amount to send
* @var string
     * @memberof VetEstimateGas
     */
    value: string;
    /**
     * Data to send to Smart Contract
* @var string
     * @memberof VetEstimateGas
     */
    data: string;
    /**
     * Nonce
* @var number
     * @memberof VetEstimateGas
     */
    nonce: number;
}