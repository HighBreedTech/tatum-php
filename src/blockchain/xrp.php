<?php
namespace Tatum\blockchain;
use Tatum\ApiRequest;
use Tatum\Constants;
use Tatum\model\response\common\TransactionHash;


/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XrpGetFee" target="_blank">Tatum API documentation</a>
 */
function xrpGetFee() {
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/xrp/fee", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XrpGetAccountInfo" target="_blank">Tatum API documentation</a>
 * @param $account
 * @return
 */
function xrpGetAccountInfo($account)
{
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/xrp/account/{$account}", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XrpBroadcast" target="_blank">Tatum API documentation</a>
 * @param $txData
 * @param null $signatureId
 * @return TransactionHash
 */
function xrpBroadcast($txData, $signatureId = null): TransactionHash
{
    return ApiRequest::post(Constants::TATUM_API_URL . "/v3/xrp/broadcast",
        (object)func_get_args(),
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}


/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XrpGetLastClosedLedger" target="_blank">Tatum API documentation</a>
 */
function xrpGetCurrentLedger() {
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/xrp/info", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XrpGetLedger" target="_blank">Tatum API documentation</a>
 * @param $i
 * @return
 */
function xrpGetLedger($i)
{
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/xrp/ledger/{$i}", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XrpGetAccountBalance" target="_blank">Tatum API documentation</a>
 * @param $address
 * @return
 */
function xrpGetAccountBalance($address)
{
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/xrp/account/{$address}/balance", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XrpGetTransaction" target="_blank">Tatum API documentation</a>
 * @param $hash
 * @return
 */
function xrpGetTransaction($hash) {
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/xrp/transaction/{$hash}", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XrpGetAccountTx" target="_blank">Tatum API documentation</a>
 * @param $address
 * @param null $min
 * @param null $marker
 * @return
 */
function xrpGetAccountTransactions($address, $min = null, $marker = null) {
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/xrp/account/tx/{$address}?min=${min}&marker=${marker}",
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}