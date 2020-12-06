<?php

namespace Tatum\model\response\ledger;


use Tatum\model\Model;



class OrderBookResponse extends Model {

    /**
     * ID of the trade.
* @var string
     * @memberof OrderBook
     */
public $id;

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
public $price;

    /**
     * Amount of the trade to be bought / sold.
* @var string
     * @memberof OrderBook
     */
public $amount;

    /**
     * Trading pair.
* @var string
     * @memberof OrderBook
     */
public $pair;

    /**
     * How much of the trade was already filled.
* @var string
     * @memberof OrderBook
     */
public $fill;

    /**
     * ID of the account of the currency 1 trade currency.
* @var string
     * @memberof OrderBook
     */
public $currency1AccountId;

    /**
     * ID of the account of the currency 2 trade currency.
* @var string
     * @memberof OrderBook
     */
public $currency2AccountId;

    /**
     * Creation date, UTC millis.
* @var string
     * @memberof OrderBook
     */
    created,
}
