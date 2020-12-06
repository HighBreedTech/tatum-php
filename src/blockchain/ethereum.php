<?php
/**
 * @author Juraj Puchký <puchky@scenario.cz>
 */

namespace Tatum\blockchain;

use Tatum\ApiRequest;
use Tatum\Constants;
use Tatum\model\response\common\TransactionHash;
use Tatum\model\response\eth\EthBlock;
use Tatum\model\response\eth\EthTx;


/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/EthBroadcast" target="_blank">Tatum API documentation</a>
 * @param $txData
 * @param null $signatureId
 * @return TransactionHash
 */
function ethBroadcast($txData, $signatureId = null): TransactionHash
{
    return ApiRequest::post(Constants::TATUM_API_URL . "/v3/ethereum/broadcast",
        (object)func_get_args(),
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/EthGetTransactionCount" target="_blank">Tatum API documentation</a>
 * @param $address
 * @return
 */
function ethGetTransactionsCount($address)
{
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/ethereum/transaction/count/{$address}",
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/EthGetCurrentBlock" target="_blank">Tatum API documentation</a>
 */
function ethGetCurrentBlock()
{
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/ethereum/block/current", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/EthGetBlock" target="_blank">Tatum API documentation</a>
 * @param $hash
 * @return EthBlock
 */
function ethGetBlock($hash):EthBlock {
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/ethereum/block/{$hash}", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/EthGetBalance" target="_blank">Tatum API documentation</a>
 * @param $address
 * @return number
 */
function ethGetAccountBalance($address)
{
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/ethereum/account/balance/{$address}", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/EthErc20GetBalance" target="_blank">Tatum API documentation</a>
 */
function ethGetAccountErc20Address($address, $contractAddress)
{
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/ethereum/account/balance/erc20/{$address}?contractAddress={$contractAddress}",
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/EthGetTransaction" target="_blank">Tatum API documentation</a>
 */
function ethGetTransaction($hash):EthTx {
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/ethereum/transaction/{$hash}", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/EthGetTransactionByAddress" target="_blank">Tatum API documentation</a>
 * @param $address
 * @param int $pageSize
 * @param int $offset
 * @return EthTx
 */
function ethGetAccountTransactions($address, $pageSize = 50, $offset = 0)
{
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/ethereum/account/transaction/{$address}?pageSize={$pageSize}&offset={$offset}",
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}