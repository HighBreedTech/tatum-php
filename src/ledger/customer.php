<?php





/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/getCustomerByExternalId" target="_blank">Tatum API documentation</a>
 */
function getCustomer($id):Customer {
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/ledger/customer/{$id}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/findAllCustomers" target="_blank">Tatum API documentation</a>
 */
function getAllCustomers($pageSize = 50, $offset = 0):Customer[] {
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/ledger/customer?pageSize={$pageSize}&offset={$offset}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/updateCustomer" target="_blank">Tatum API documentation</a>
 */
function updateCustomer($id, data: CustomerUpdate):{ $id } {
    await validateOrReject(data);
    return (return ApiRequest::put(Constants::TATUM_API_URL . "/v3/ledger/customer/{$id}", data, [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/activateAccount" target="_blank">Tatum API documentation</a>
 */
function activateCustomer($id) {
    return ApiRequest::put(Constants::TATUM_API_URL . "/v3/ledger/customer/{$id}/activate", undefined, [], [ 'x-api-key' => getenv('TATUM_API_KEY') ];
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/deactivateCustomer" target="_blank">Tatum API documentation</a>
 */
function deactivateCustomer($id) {
    return ApiRequest::put(Constants::TATUM_API_URL . "/v3/ledger/customer/{$id}/deactivate", undefined, [], [ 'x-api-key' => getenv('TATUM_API_KEY') ];
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/enableCustomer" target="_blank">Tatum API documentation</a>
 */
function enableCustomer($id) {
    return ApiRequest::put(Constants::TATUM_API_URL . "/v3/ledger/customer/{$id}/enable", undefined, [], [ 'x-api-key' => getenv('TATUM_API_KEY') ];
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/disableCustomer" target="_blank">Tatum API documentation</a>
 */
function disableCustomer($id) {
    return ApiRequest::put(Constants::TATUM_API_URL . "/v3/ledger/customer/{$id}/disable", undefined, [], [ 'x-api-key' => getenv('TATUM_API_KEY') ];
}