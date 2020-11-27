/**
 *
 * @export
 * @interface Blockage
 */
class Blockage extends Model {
    /**
     * ID of the blockage.
* @var string
     * @memberof Blockage
     */
    id: string;
    /**
     * ID of the account this blockage is for.
* @var string
     * @memberof Blockage
     */
    accountId: string;
    /**
     * Amount blocked on account.
* @var string
     * @memberof Blockage
     */
    amount: string;
    /**
     * Type of blockage.
* @var string
     * @memberof Blockage
     */
    type: string;
    /**
     * Description of blockage.
* @var string
     * @memberof Blockage
     */
    description?: string;
}