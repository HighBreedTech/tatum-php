<?php




/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/GetPendingTransactionToSign" target="_blank">Tatum API documentation</a>
 */
function getTransactionKMS($id):TransactionKMS {
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/kms/{$id}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/DeletePendingTransactionToSign" target="_blank">Tatum API documentation</a>
 */
function deleteTransactionKMS($id, revert = true) {
    return ApiRequest::delete(Constants::TATUM_API_URL . "/v3/kms/{$id}/${revert}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ];
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/CompletePendingSignature" target="_blank">Tatum API documentation</a>
 */
function completePendingTransactionKMS($id, txId: string) {
    return ApiRequest::put(Constants::TATUM_API_URL . "/v3/kms/{$id}/${txId}", undefined, [], [ 'x-api-key' => getenv('TATUM_API_KEY') ];
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/GetPendingTransactionsToSign" target="_blank">Tatum API documentation</a>
 */
function getPendingTransactionsKMSByChain(chain: Currency):TransactionKMS[] {
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/kms/pending/${chain}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}