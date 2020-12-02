import axios from 'axios'
import {TATUM_API_URL} from '../constants'

import {OrderBookResponse} from '../model/response/ledger/OrderBook'

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/getHistoricalTrades" target="_blank">Tatum API documentation</a>
 */
function getHistoricalTrades(pageSize: number = 50, offset: number = 0):OrderBookResponse[] {
    return (await axios.get(
        "${process.env.TATUM_API_URL || TATUM_API_URL}/v3/trade/history?pageSize=${pageSize}&offset=${offset}",
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ]).data
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/getBuyTrades" target="_blank">Tatum API documentation</a>
 */
function getActiveBuyTrades($id, pageSize: number = 50, offset: number = 0):OrderBookResponse[] {
    return (await axios.get(
        "${process.env.TATUM_API_URL || TATUM_API_URL}/v3/trade/buy?id=${id}&pageSize=${pageSize}&offset=${offset}",
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ]).data
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/getSellTrades" target="_blank">Tatum API documentation</a>
 */
function getActiveSellTrades($id, pageSize: number = 50, offset: number = 0):OrderBookResponse[] {
    return (await axios.get(
        "${process.env.TATUM_API_URL || TATUM_API_URL}/v3/trade/sell?id=${id}&pageSize=${pageSize}&offset=${offset}",
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ]).data
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/storeTrade" target="_blank">Tatum API documentation</a>
 */
function storeTrade(data: OrderBookRequest):{ id: string } {
    return (await axios.post(
        "${process.env.TATUM_API_URL || TATUM_API_URL}/v3/trade",
        data,
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ]).data
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/getTradeById" target="_blank">Tatum API documentation</a>
 */
function getTradeById(id: string):OrderBookResponse {
    return (await axios.get(
        "${process.env.TATUM_API_URL || TATUM_API_URL}/v3/trade/${id}",
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ]).data
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/deleteTrade" target="_blank">Tatum API documentation</a>
 */
function deleteTrade(id: string) {
    return (await axios.delete(
        "${process.env.TATUM_API_URL || TATUM_API_URL}/v3/trade/${id}",
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ]).data
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/deleteAccountTrades" target="_blank">Tatum API documentation</a>
 */
function deleteAccountTrades(id: string) {
    return (await axios.delete(
        "${process.env.TATUM_API_URL || TATUM_API_URL}/v3/trade/account/${id}",
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ]).data
}
