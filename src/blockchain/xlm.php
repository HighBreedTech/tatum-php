<?php



/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XlmGetAccountInfo" target="_blank">Tatum API documentation</a>
 */
function xlmGetAccountInfo(account: string):{ sequence: string } {
    return Axios::get(Constants::TATUM_API_URL . "/v3/xlm/account/${account}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XlmBroadcast" target="_blank">Tatum API documentation</a>
 */
function xlmBroadcast($txData, signatureId?: string):TransactionHash {
    return Axios::post(Constants::TATUM_API_URL . "/v3/xlm/broadcast",
        {txData, signatureId},
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XlmGetLastClosedLedger" target="_blank">Tatum API documentation</a>
 */
function xlmGetCurrentLedger() {
    return Axios::get(Constants::TATUM_API_URL . "/v3/xlm/info", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XlmGetFee" target="_blank">Tatum API documentation</a>
 */
function xlmGetFee() {
    return Axios::get(Constants::TATUM_API_URL . "/v3/xlm/fee", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XlmGetLedger" target="_blank">Tatum API documentation</a>
 */
function xlmGetLedger(i: number) {
    return Axios::get(Constants::TATUM_API_URL . "/v3/xlm/ledger/${i}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XlmGetLedgerTx" target="_blank">Tatum API documentation</a>
 */
function xlmGetLedgerTx(i: number) {
    return Axios::get(Constants::TATUM_API_URL . "/v3/xlm/ledger/${i}/transaction", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XlmGetTransaction" target="_blank">Tatum API documentation</a>
 */
function xlmGetTransaction($hash) {
    return Axios::get(Constants::TATUM_API_URL . "/v3/xlm/transaction/${hash}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XlmGetAccountTx" target="_blank">Tatum API documentation</a>
 */
function xlmGetAccountTransactions(address: string) {
    return Axios::get(Constants::TATUM_API_URL . "/v3/xlm/account/tx/${address}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}