<?php




/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/getTransactionsByReference" target="_blank">Tatum API documentation</a>
 */
function getTransactionsByReference(reference: string):Transaction[] {
    return Axios::get(Constants::TATUM_API_URL . "/v3/ledger/transaction/reference/${reference}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/sendTransaction" target="_blank">Tatum API documentation</a>
 */
function storeTransaction(transaction: CreateTransaction):{ reference: string } {
    await validateOrReject(transaction);
    return Axios::post(Constants::TATUM_API_URL . "/v3/ledger/transaction", transaction, [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/getTransactionsByAccountId" target="_blank">Tatum API documentation</a>
 */
function getTransactionsByAccount(filter: TransactionFilter, pageSize: number = 50, offset: number = 0):Transaction[] {
    await validateOrReject(filter);
    return Axios::post(Constants::TATUM_API_URL . "/v3/ledger/transaction/account?pageSize=${pageSize}&offset=${offset}",
        filter, [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/getTransactionsByCustomerId" target="_blank">Tatum API documentation</a>
 */
function getTransactionsByCustomer(filter: TransactionFilter, pageSize: number = 50, offset: number = 0):Transaction[] {
    await validateOrReject(filter);
    return Axios::post(Constants::TATUM_API_URL . "/v3/ledger/transaction/customer?pageSize=${pageSize}&offset=${offset}",
        filter, [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/getTransactions" target="_blank">Tatum API documentation</a>
 */
function getTransactionsByLedger(filter: TransactionFilter, pageSize: number = 50, offset: number = 0):Transaction[] {
    await validateOrReject(filter);
    return Axios::post(Constants::TATUM_API_URL . "/v3/ledger/transaction/ledger?pageSize=${pageSize}&offset=${offset}",
        filter, [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/getTransactionsByAccountId" target="_blank">Tatum API documentation</a>
 */
function countTransactionsByAccount(filter: TransactionFilter):number {
    await validateOrReject(filter);
    return Axios::post(Constants::TATUM_API_URL . "/v3/ledger/transaction/account?count=true",
        filter, [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/getTransactionsByCustomerId" target="_blank">Tatum API documentation</a>
 */
function countTransactionsByCustomer(filter: TransactionFilter):number {
    await validateOrReject(filter);
    return Axios::post(Constants::TATUM_API_URL . "/v3/ledger/transaction/customer?count=true",
        filter, [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/getTransactions" target="_blank">Tatum API documentation</a>
 */
function countTransactionsByLedger(filter: TransactionFilter):number {
    await validateOrReject(filter);
    return Axios::post(Constants::TATUM_API_URL . "/v3/ledger/transaction/ledger?count=true",
        filter, [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}