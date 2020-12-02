<?php

namespace Tatum\model\response\ledger;


use Tatum\model\Model;

/**
 *
 * @export
 * @interface MarketValue
 */


class MarketValue extends Model {
    /**
     * Value of transaction in given base pair.
* @var string
     * @memberof MarketValue
     */
    public $amount;
    /**
     * Base pair.
* @var string
     * @memberof MarketValue
     */
public $currency;
    /**
     * Date of validity of rate in UTC.
* @var number
     * @memberof MarketValue
     */
    public $sourceDate;
    /**
     * Source of base pair.
* @var string
     * @memberof MarketValue
     */
    public $source;
}