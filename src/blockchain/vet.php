<?php

namespace Tatum\blockchain;


use Tatum\ApiRequest;
use Tatum\Constants;
use Tatum\model\request\EstimateGasVet;
use Tatum\model\response\common\TransactionHash;
use Tatum\model\response\vet\VetBlock;
use Tatum\model\response\vet\VetTx;
use Tatum\model\response\vet\VetTxReceipt;

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/VetBroadcast" target="_blank">Tatum API documentation</a>
 * @param $txData
 * @param null $signatureId
 * @return TransactionHash
 */
function vetBroadcast($txData, $signatureId = null): TransactionHash
{
    return ApiRequest::post(Constants::TATUM_API_URL . "/v3/vet/broadcast",
        (object)func_get_args(),
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/VetEstimateGas" target="_blank">Tatum API documentation</a>
 * @param $body EstimateGasVet
 * @return EstimateGasVet
 */
function vetEstimateGas($body): VetEstimateGas
{
    $body->__validate(true);

    return ApiRequest::post(Constants::TATUM_API_URL . "/v3/vet/broadcast/transaction/gas",
        $body,
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/VetGetCurrentBlock" target="_blank">Tatum API documentation</a>
 */
function vetGetCurrentBlock() {
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/vet/current", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/VetGetBlock" target="_blank">Tatum API documentation</a>
 * @param $hash
 * @return VetBlock
 */
function vetGetBlock($hash):VetBlock {
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/vet/block/{$hash}", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/VetGetBalance" target="_blank">Tatum API documentation</a>
 * @param $address
 * @return
 */
function vetGetAccountBalance($address)
{
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/vet/account/balance/{$address}", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/VetGetEnergy" target="_blank">Tatum API documentation</a>
 * @param $address
 * @return
 */
function vetGetAccountEnergy($address)
{
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/vet/account/energy/{$address}", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/VetGetTransaction" target="_blank">Tatum API documentation</a>
 * @param $hash
 * @return VetTx
 */
function vetGetTransaction($hash):VetTx {
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/vet/transaction/{$hash}", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/VetGetTransactionReceipt" target="_blank">Tatum API documentation</a>
 * @param $hash
 * @return VetTxReceipt
 */
function vetGetTransactionReceipt($hash):VetTxReceipt {
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/vet/transaction/{$hash}/receipt", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}
