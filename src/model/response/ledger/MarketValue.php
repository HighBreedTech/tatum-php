<?php

namespace Tatum\model\response\ledger;


use Tatum\model\Model;

/**
 *
 * @export
 * @interface MarketValue
 */
import {Fiat} from './Fiat';

class MarketValue extends Model {
    /**
     * Value of transaction in given base pair.
* @var string
     * @memberof MarketValue
     */
    amount?: string;
    /**
     * Base pair.
* @var string
     * @memberof MarketValue
     */
    currency?: Fiat;
    /**
     * Date of validity of rate in UTC.
* @var number
     * @memberof MarketValue
     */
    sourceDate?: number;
    /**
     * Source of base pair.
* @var string
     * @memberof MarketValue
     */
    source?: string;
}