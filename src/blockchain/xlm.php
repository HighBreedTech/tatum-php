<?php
/**
 * @author Juraj Puchký <puchky@scenario.cz>
 */

namespace Tatum\blockchain;
use Tatum\ApiRequest;
use Tatum\Constants;
use Tatum\model\response\common\TransactionHash;


/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XlmGetAccountInfo" target="_blank">Tatum API documentation</a>
 * @param $account
 * @return object
 */
function xlmGetAccountInfo($account)
{
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/xlm/account/{$account}", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XlmBroadcast" target="_blank">Tatum API documentation</a>
 * @param $txData
 * @param null $signatureId
 * @return TransactionHash
 */
function xlmBroadcast($txData, $signatureId = null): TransactionHash
{
    return ApiRequest::post(Constants::TATUM_API_URL . "/v3/xlm/broadcast",
        (object)func_get_args(),
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XlmGetLastClosedLedger" target="_blank">Tatum API documentation</a>
 */
function xlmGetCurrentLedger() {
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/xlm/info", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XlmGetFee" target="_blank">Tatum API documentation</a>
 */
function xlmGetFee() {
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/xlm/fee", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XlmGetLedger" target="_blank">Tatum API documentation</a>
 */
function xlmGetLedger($i)
{
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/xlm/ledger/{$i}", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XlmGetLedgerTx" target="_blank">Tatum API documentation</a>
 */
function xlmGetLedgerTx($i)
{
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/xlm/ledger/{$i}/transaction", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XlmGetTransaction" target="_blank">Tatum API documentation</a>
 * @param $hash
 * @return
 */
function xlmGetTransaction($hash) {
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/xlm/transaction/{$hash}", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XlmGetAccountTx" target="_blank">Tatum API documentation</a>
 * @param $address
 * @return
 */
function xlmGetAccountTransactions($address)
{
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/xlm/account/tx/{$address}", [], ['x-api-key' => getenv('TATUM_API_KEY')])->data;
}