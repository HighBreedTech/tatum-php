<?php
/**
 * @author Juraj Puchký <puchky@scenario.cz>
 */

namespace Tatum\blockchain;

use Tatum\ApiRequest;
use Tatum\Constants;
use Tatum\model\response\common\TransactionHash;
use Tatum\model\response\ltc\LtcBlock;
use Tatum\model\response\ltc\LtcInfo;
use Tatum\model\response\ltc\LtcUTXO;


/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/LtcBroadcast" target="_blank">Tatum API documentation</a>
 * @param $txData
 * @param null $signatureId
 * @return TransactionHash
 */
function ltcBroadcast($txData, $signatureId = null): TransactionHash
{
    return ApiRequest::post(Constants::TATUM_API_URL . "/v3/litecoin/broadcast",
        (object)func_get_args(),
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/LtcGetBlockChainInfo" target="_blank">Tatum API documentation</a>
 */
function ltcGetCurrentBlock(): LtcInfo {
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/litecoin/info", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/LtcGetBlock" target="_blank">Tatum API documentation</a>
 * @param $hash
 * @return LtcBlock
 */
function ltcGetBlock($hash):LtcBlock {
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/litecoin/block/{$hash}", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/LtcGetBlockHash" target="_blank">Tatum API documentation</a>
 */
function ltcGetBlockHash($i): BlockHash
{
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/litecoin/block/hash/{$i}", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/LtcGetUTXO" target="_blank">Tatum API documentation</a>
 * @param $hash
 * @param $i
 * @return LtcUTXO
 */
function ltcGetUTXO($hash, $i): LtcUTXO
{
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/litecoin/utxo/{$hash}/{$i}", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/LtcGetTxByAddress" target="_blank">Tatum API documentation</a>
 * @param $address
 * @param int $pageSize
 * @param int $offset
 * @return
 */
function ltcGetTxForAccount($address, $pageSize = 50, $offset = 0)
{
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/litecoin/transaction/address/{$address}?pageSize={$pageSize}&offset={$offset}",
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/LtcGetRawTransaction" target="_blank">Tatum API documentation</a>
 */
function ltcGetTransaction($hash):LtcTx {
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/litecoin/transaction/{$hash}", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}