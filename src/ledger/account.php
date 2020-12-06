<?php

namespace Tatum\ledger;

use Tatum\ApiRequest;
use Tatum\Constants;
use Tatum\model\request\BlockAmount;
use Tatum\model\request\CreateAccount;
use Tatum\model\response\ledger\Account;
use Tatum\model\response\ledger\AccountBalance;
use Tatum\model\response\ledger\Blockage;


/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/getAccountByAccountId" target="_blank">Tatum API documentation</a>
 */
function getAccountById($id):Account {
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/ledger/account/{$id}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/createAccount" target="_blank">Tatum API documentation</a>
 * @param $account CreateAccount
 * @return Account
 */
function createAccount($account):Account {
    $account->__validate(true);
    return ApiRequest::post(Constants::TATUM_API_URL . "/v3/ledger/account", account, [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/getBlockAmount" target="_blank">Tatum API documentation</a>
 * @param $id
 * @param int $pageSize
 * @param int $offset
 * @return Blockage[]
 */
function getBlockedAmountsByAccountId($id, $pageSize = 50, $offset = 0) {
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/ledger/account/block/{$id}?pageSize={$pageSize}&offset={$offset}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/blockAmount" target="_blank">Tatum API documentation</a>
 * @param $id
 * @param $block BlockAmount
 * @return object
 */
function blockAmount($id, $block) {
    $block->__validate(true);
    return ApiRequest::post(Constants::TATUM_API_URL . "/v3/ledger/account/block/{$id}", $block, [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/deleteBlockAmount" target="_blank">Tatum API documentation</a>
 */
function deleteBlockedAmount($id) {
    return ApiRequest::delete(Constants::TATUM_API_URL . "/v3/ledger/account/block/{$id}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ];
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/deleteAllBlockAmount" target="_blank">Tatum API documentation</a>
 */
function deleteBlockedAmountForAccount($id) {
    return ApiRequest::delete(Constants::TATUM_API_URL . "/v3/ledger/account/block/account/{$id}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ];
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/activateAccount" target="_blank">Tatum API documentation</a>
 */
function activateAccount($id) {
    return ApiRequest::put(Constants::TATUM_API_URL . "/v3/ledger/account/{$id}/activate", undefined, [], [ 'x-api-key' => getenv('TATUM_API_KEY') ];
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/deactivateAccount" target="_blank">Tatum API documentation</a>
 */
function deactivateAccount($id) {
    return ApiRequest::put(Constants::TATUM_API_URL . "/v3/ledger/account/{$id}/deactivate", undefined, [], [ 'x-api-key' => getenv('TATUM_API_KEY') ];
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/freezeAccount" target="_blank">Tatum API documentation</a>
 */
function freezeAccount($id) {
    return ApiRequest::put(Constants::TATUM_API_URL . "/v3/ledger/account/{$id}/freeze", undefined, [], [ 'x-api-key' => getenv('TATUM_API_KEY') ];
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/unfreezeAccount" target="_blank">Tatum API documentation</a>
 */
function unfreezeAccount($id) {
    return ApiRequest::put(Constants::TATUM_API_URL . "/v3/ledger/account/{$id}/unfreeze", undefined, [], [ 'x-api-key' => getenv('TATUM_API_KEY') ];
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/getAccountsByCustomerId" target="_blank">Tatum API documentation</a>
 * @param $id
 * @param int $pageSize
 * @param int $offset
 * @return Account[]
 */
function getAccountsByCustomerId($id, $pageSize = 50, $offset = 0) {
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/ledger/account/customer/{$id}?pageSize={$pageSize}&offset={$offset}",
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/getAllAccounts" target="_blank">Tatum API documentation</a>
 * @param int $pageSize
 * @param int $offset
 * @return Account[]
 */
function getAllAccounts($pageSize = 50, $offset = 0) {
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/ledger/account?pageSize={$pageSize}&offset={$offset}",
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/getAccountBalance" target="_blank">Tatum API documentation</a>
 */
function getAccountBalance($id):AccountBalance {
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/ledger/account/{$id}/balance", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}