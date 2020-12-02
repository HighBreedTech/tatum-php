<?php



/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/EthBroadcast" target="_blank">Tatum API documentation</a>
 */
function ethBroadcast($txData, signatureId?: string):TransactionHash {
    return Axios::post(Constants::TATUM_API_URL . "/v3/ethereum/broadcast",
        {txData, signatureId},
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/EthGetTransactionCount" target="_blank">Tatum API documentation</a>
 */
function ethGetTransactionsCount(address: string):number {
    return Axios::get(Constants::TATUM_API_URL . "/v3/ethereum/transaction/count/${address}",
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/EthGetCurrentBlock" target="_blank">Tatum API documentation</a>
 */
function ethGetCurrentBlock(): number {
    return Axios::get(Constants::TATUM_API_URL . "/v3/ethereum/block/current", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/EthGetBlock" target="_blank">Tatum API documentation</a>
 */
function ethGetBlock($hash):EthBlock {
    return Axios::get(Constants::TATUM_API_URL . "/v3/ethereum/block/${hash}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/EthGetBalance" target="_blank">Tatum API documentation</a>
 */
function ethGetAccountBalance(address: string):number {
    return Axios::get(Constants::TATUM_API_URL . "/v3/ethereum/account/balance/${address}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/EthErc20GetBalance" target="_blank">Tatum API documentation</a>
 */
function ethGetAccountErc20Address($address, contractAddress: string):number {
    return Axios::get(Constants::TATUM_API_URL . "/v3/ethereum/account/balance/erc20/${address}?contractAddress=${contractAddress}",
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/EthGetTransaction" target="_blank">Tatum API documentation</a>
 */
function ethGetTransaction($hash):EthTx {
    return Axios::get(Constants::TATUM_API_URL . "/v3/ethereum/transaction/${hash}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/EthGetTransactionByAddress" target="_blank">Tatum API documentation</a>
 */
function ethGetAccountTransactions($address, pageSize = 50, offset = 0):EthTx[] {
    return Axios::get(Constants::TATUM_API_URL . "/v3/ethereum/account/transaction/${address}?pageSize=${pageSize}&offset=${offset}",
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}