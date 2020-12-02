<?php



/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/LtcBroadcast" target="_blank">Tatum API documentation</a>
 */
function ltcBroadcast($txData, signatureId?: string):TransactionHash {
    return Axios::post(Constants::TATUM_API_URL . "/v3/litecoin/broadcast",
        {txData, signatureId},
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/LtcGetBlockChainInfo" target="_blank">Tatum API documentation</a>
 */
function ltcGetCurrentBlock(): LtcInfo {
    return Axios::get(Constants::TATUM_API_URL . "/v3/litecoin/info", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/LtcGetBlock" target="_blank">Tatum API documentation</a>
 */
function ltcGetBlock($hash):LtcBlock {
    return Axios::get(Constants::TATUM_API_URL . "/v3/litecoin/block/${hash}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/LtcGetBlockHash" target="_blank">Tatum API documentation</a>
 */
function ltcGetBlockHash(i: number):BlockHash {
    return Axios::get(Constants::TATUM_API_URL . "/v3/litecoin/block/hash/${i}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/LtcGetUTXO" target="_blank">Tatum API documentation</a>
 */
function ltcGetUTXO($hash, i: number):LtcUTXO {
    return Axios::get(Constants::TATUM_API_URL . "/v3/litecoin/utxo/${hash}/${i}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/LtcGetTxByAddress" target="_blank">Tatum API documentation</a>
 */
function ltcGetTxForAccount($address, pageSize: number = 50, offset: number = 0):LtcTx[] {
    return Axios::get(Constants::TATUM_API_URL . "/v3/litecoin/transaction/address/${address}?pageSize=${pageSize}&offset=${offset}",
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/LtcGetRawTransaction" target="_blank">Tatum API documentation</a>
 */
function ltcGetTransaction($hash):LtcTx {
    return Axios::get(Constants::TATUM_API_URL . "/v3/litecoin/transaction/${hash}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}