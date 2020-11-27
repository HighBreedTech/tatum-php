import {TradeType} from '../../request/TradeType';

class OrderBookResponse extends Model {

    /**
     * ID of the trade.
* @var string
     * @memberof OrderBook
     */
    id: string,

    /**
     * Type of the trade, BUY or SELL.
* @var string
     * @memberof OrderBook
     */
    type: TradeType,

    /**
     * Price to buy / sell.
* @var string
     * @memberof OrderBook
     */
    price: string,

    /**
     * Amount of the trade to be bought / sold.
* @var string
     * @memberof OrderBook
     */
    amount: string,

    /**
     * Trading pair.
* @var string
     * @memberof OrderBook
     */
    pair: string,

    /**
     * How much of the trade was already filled.
* @var string
     * @memberof OrderBook
     */
    fill: string,

    /**
     * ID of the account of the currency 1 trade currency.
* @var string
     * @memberof OrderBook
     */
    currency1AccountId: string,

    /**
     * ID of the account of the currency 2 trade currency.
* @var string
     * @memberof OrderBook
     */
    currency2AccountId: string,

    /**
     * Creation date, UTC millis.
* @var string
     * @memberof OrderBook
     */
    created: number,
}
