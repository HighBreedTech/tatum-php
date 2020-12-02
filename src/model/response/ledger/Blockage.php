<?php

namespace Tatum\model\response\ledger;


use Tatum\model\Model;

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
    public $id;
    /**
     * ID of the account this blockage is for.
* @var string
     * @memberof Blockage
     */
    public $accountId;
    /**
     * Amount blocked on account.
* @var string
     * @memberof Blockage
     */
    public $amount;
    /**
     * Type of blockage.
* @var string
     * @memberof Blockage
     */
    public $type;
    /**
     * Description of blockage.
* @var string
     * @memberof Blockage
     */
    public $description;
}