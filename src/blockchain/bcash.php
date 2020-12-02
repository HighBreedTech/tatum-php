<?php

namespace Tatum\blockchain;


use Tatum\Axios;
use Tatum\Constants;
use Tatum\model\response\bch\BchBlock;
use Tatum\model\response\bch\BchInfo;
use Tatum\model\response\bch\BchTx;
use Tatum\model\response\common\TransactionHash;

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/BchBroadcast" target="_blank">Tatum API documentation</a>
 * @param $txData
 * @param $signatureId
 * @return TransactionHash
 */
function bcashBroadcast($txData, $signatureId): TransactionHash
{
    return Axios::post(Constants::TATUM_API_URL . "/v3/bcash/broadcast",
        (object)func_get_args(),
        [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/BchGetBlockChainInfo" target="_blank">Tatum API documentation</a>
 */
function bcashGetCurrentBlock():BchInfo {
    return Axios::get(Constants::TATUM_API_URL . "/v3/bcash/info", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/BchGetBlock" target="_blank">Tatum API documentation</a>
 */
function bcashGetBlock($hash):BchBlock {
    return Axios::get(Constants::TATUM_API_URL . "/v3/bcash/block/${hash}", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/BchGetBlockHash" target="_blank">Tatum API documentation</a>
 */
function bcashGetBlockHash((i: number)):BlockHash {
    return Axios::get(Constants::TATUM_API_URL . "/v3/bcash/block/hash/${i}", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/BchGetTxByAddress" target="_blank">Tatum API documentation</a>
 * @return BchTx[]
 */
function bcashGetTxForAccount($address, $skip = 0) {
    return Axios::get(Constants::TATUM_API_URL . "/v3/bcash/transaction/address/{$address}?skip={$skip}", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/BchGetRawTransaction" target="_blank">Tatum API documentation</a>
 */
function bcashGetTransaction(($hash)):BchTx {
    return Axios::get(Constants::TATUM_API_URL . "/v3/bcash/transaction/${hash}", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}