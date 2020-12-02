<?php



/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XrpGetFee" target="_blank">Tatum API documentation</a>
 */
function xrpGetFee(): { drops: { base_fee: number } } {
    return Axios::get(Constants::TATUM_API_URL . "/v3/xrp/fee", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XrpGetAccountInfo" target="_blank">Tatum API documentation</a>
 */
function xrpGetAccountInfo(account: string):{ ledger_current_index: number, account_data: { Sequence: number } } {
    return Axios::get(Constants::TATUM_API_URL . "/v3/xrp/account/${account}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XrpBroadcast" target="_blank">Tatum API documentation</a>
 */
function xrpBroadcast($txData, signatureId?: string):TransactionHash {
    return Axios::post(Constants::TATUM_API_URL . "/v3/xrp/broadcast",
        {txData, signatureId},
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}


/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XrpGetLastClosedLedger" target="_blank">Tatum API documentation</a>
 */
function xrpGetCurrentLedger(): number {
    return Axios::get(Constants::TATUM_API_URL . "/v3/xrp/info", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XrpGetLedger" target="_blank">Tatum API documentation</a>
 */
function xrpGetLedger(i: number) {
    return Axios::get(Constants::TATUM_API_URL . "/v3/xrp/ledger/${i}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XrpGetAccountBalance" target="_blank">Tatum API documentation</a>
 */
function xrpGetAccountBalance(address: string) {
    return Axios::get(Constants::TATUM_API_URL . "/v3/xrp/account/${address}/balance", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XrpGetTransaction" target="_blank">Tatum API documentation</a>
 */
function xrpGetTransaction($hash) {
    return Axios::get(Constants::TATUM_API_URL . "/v3/xrp/transaction/${hash}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/XrpGetAccountTx" target="_blank">Tatum API documentation</a>
 */
function xrpGetAccountTransactions($address, min?: number, marker?: string) {
    return Axios::get(Constants::TATUM_API_URL . "/v3/xrp/account/tx/${address}?min=${min}&marker=${marker}",
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}