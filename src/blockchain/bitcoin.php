<?php
namespace Tatum\blockchain;

use Tatum\ApiRequest;
use Tatum\Constants;
use Tatum\model\response\btc\BtcBlock;
use Tatum\model\response\btc\BtcInfo;
use Tatum\model\response\btc\BtcTx;
use Tatum\model\response\btc\BtcUTXO;
use Tatum\model\response\common\BlockHash;
use Tatum\model\response\common\TransactionHash;


/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/BtcBroadcast" target="_blank">Tatum API documentation</a>
 */
function btcBroadcast($txData, $signatureId): TransactionHash
{
    return ApiRequest::post(Constants::TATUM_API_URL . "/v3/bitcoin/broadcast",
        func_get_args(),
        [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/BtcGetBlockChainInfo" target="_blank">Tatum API documentation</a>
 */
function btcGetCurrentBlock(): BtcInfo
{
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/bitcoin/info", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/BtcGetBlock" target="_blank">Tatum API documentation</a>
 */
function btcGetBlock($hash): BtcBlock
{
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/bitcoin/block/{$hash}", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/BtcGetBlockHash" target="_blank">Tatum API documentation</a>
 */
function btcGetBlockHash($i): BlockHash
{
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/bitcoin/block/hash/{$i}", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/BtcGetUTXO" target="_blank">Tatum API documentation</a>
 */
function btcGetUTXO($hash, $i): BtcUTXO
{
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/bitcoin/utxo/{$hash}/{$i}", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/BtcGetTxByAddress" target="_blank">Tatum API documentation</a>
 * @return BtcTx[]
 */
function btcGetTxForAccount($address, $pageSize = 50, $offset = 0)
{
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/bitcoin/transaction/address/{$address}?pageSize=${pageSize}&offset=${offset}",
        [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/BtcGetRawTransaction" target="_blank">Tatum API documentation</a>
 */
function btcGetTransaction($hash): BtcTx
{
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/bitcoin/transaction/{$hash}", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}