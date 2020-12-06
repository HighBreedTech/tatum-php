<?php



/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/generateDepositAddress" target="_blank">Tatum API documentation</a>
 */
function generateDepositAddress($id, index?):Address {
    const url = Constants::TATUM_API_URL . "/v3/offchain/account/{$id}/address";
    return (await axios.post(index === undefined ? url : "${url}?index=${index}",
        undefined,
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/addressExists" target="_blank">Tatum API documentation</a>
 */
function checkAddressExists($address, $currency, index?):Account {
    const url = Constants::TATUM_API_URL . "/v3/offchain/account/address/{$address}/${currency}";
    return (await axios.get(index === undefined ? url : "${url}?index=${index}",
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/assignAddress" target="_blank">Tatum API documentation</a>
 */
function assignDepositAddress($id, $address): Address
{
    return ApiRequest::post(Constants::TATUM_API_URL . "/v3/offchain/account/{$id}/address/{$address}",
        undefined,
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/removeAddress" target="_blank">Tatum API documentation</a>
 */
function removeDepositAddress($id, $address)
{
    await axios . delete(Constants::TATUM_API_URL . "/v3/offchain/account/{$id}/address/{$address}",
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ];
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/getAllDepositAddresses" target="_blank">Tatum API documentation</a>
 */
function getDepositAddressesForAccount($id):Address[] {
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/offchain/account/{$id}/address",
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/broadcastBlockchainTransaction" target="_blank">Tatum API documentation</a>
 */
function offchainBroadcast(data: BroadcastWithdrawal):TxHash {
    return ApiRequest::post(Constants::TATUM_API_URL . "/v3/offchain/withdrawal/broadcast",
        data,
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/storeWithdrawal" target="_blank">Tatum API documentation</a>
 */
function offchainStoreWithdrawal(data: any):WithdrawalResponse {
    return ApiRequest::post(Constants::TATUM_API_URL . "/v3/offchain/withdrawal",
        data,
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/cancelInProgressWithdrawal" target="_blank">Tatum API documentation</a>
 */
function offchainCancelWithdrawal($id, revert = true) {
    return ApiRequest::delete(Constants::TATUM_API_URL . "/v3/offchain/withdrawal/{$id}?revert=${revert}",
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ];
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/completeWithdrawal" target="_blank">Tatum API documentation</a>
 */
function offchainCompleteWithdrawal($id, txId: string) {
    return ApiRequest::put(Constants::TATUM_API_URL . "/v3/offchain/withdrawal/{$id}/${txId}",
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ];
}
