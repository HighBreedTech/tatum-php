<?php

namespace Tatum\blockchain;


use BABA\Utils\ObjectCopier;
use ReflectionException;
use Tatum\ApiRequest;
use Tatum\Constants;
use Tatum\model\response\bch\BchBlock;
use Tatum\model\response\bch\BchInfo;
use Tatum\model\response\bch\BchTx;
use Tatum\model\response\common\BlockHash;
use Tatum\model\response\common\TransactionHash;

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/BchBroadcast" target="_blank">Tatum API documentation</a>
 * @param $txData
 * @param $signatureId
 * @return TransactionHash
 * @throws ReflectionException
 */
function bcashBroadcast($txData, $signatureId): TransactionHash
{
    $ret = new TransactionHash();
    ObjectCopier::copyProperties(ApiRequest::post(Constants::TATUM_API_URL . "/v3/bcash/broadcast",
        (object)func_get_args(),
        [], ['x-api-key' => getenv('TATUM_API_KEY')])->data, $ret);
    return $ret;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/BchGetBlockChainInfo" target="_blank">Tatum API documentation</a>
 */
function bcashGetCurrentBlock():BchInfo {
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/bcash/info", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/BchGetBlock" target="_blank">Tatum API documentation</a>
 * @param $hash
 * @return BchBlock
 */
function bcashGetBlock($hash):BchBlock {
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/bcash/block/{$hash}", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/BchGetBlockHash" target="_blank">Tatum API documentation</a>
 * @param $i
 * @return BlockHash
 */
function bcashGetBlockHash($i): BlockHash
{
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/bcash/block/hash/{$i}", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/BchGetTxByAddress" target="_blank">Tatum API documentation</a>
 * @param $address
 * @param int $skip
 * @return BchTx[]
 */
function bcashGetTxForAccount($address, $skip = 0) {
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/bcash/transaction/address/{$address}?skip={$skip}", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/BchGetRawTransaction" target="_blank">Tatum API documentation</a>
 * @param $hash
 * @return BchTx
 */
function bcashGetTransaction($hash): BchTx
{
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/bcash/transaction/{$hash}", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}