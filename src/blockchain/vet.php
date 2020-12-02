<?php




/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/VetBroadcast" target="_blank">Tatum API documentation</a>
 */
function vetBroadcast($txData, signatureId?: string):TransactionHash {
    return Axios::post(Constants::TATUM_API_URL . "/v3/vet/broadcast",
        {txData, signatureId},
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/VetEstimateGas" target="_blank">Tatum API documentation</a>
 */
function vetEstimateGas(body: EstimateGasVet):VetEstimateGas {
    await validateOrReject(body);
    return Axios::post(Constants::TATUM_API_URL . "/v3/vet/broadcast/transaction/gas",
        body,
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/VetGetCurrentBlock" target="_blank">Tatum API documentation</a>
 */
function vetGetCurrentBlock(): number {
    return Axios::get(Constants::TATUM_API_URL . "/v3/vet/current", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/VetGetBlock" target="_blank">Tatum API documentation</a>
 */
function vetGetBlock($hash):VetBlock {
    return Axios::get(Constants::TATUM_API_URL . "/v3/vet/block/${hash}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/VetGetBalance" target="_blank">Tatum API documentation</a>
 */
function vetGetAccountBalance(address: string):number {
    return Axios::get(Constants::TATUM_API_URL . "/v3/vet/account/balance/${address}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/VetGetEnergy" target="_blank">Tatum API documentation</a>
 */
function vetGetAccountEnergy(address: string):number {
    return Axios::get(Constants::TATUM_API_URL . "/v3/vet/account/energy/${address}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/VetGetTransaction" target="_blank">Tatum API documentation</a>
 */
function vetGetTransaction($hash):VetTx {
    return Axios::get(Constants::TATUM_API_URL . "/v3/vet/transaction/${hash}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/VetGetTransactionReceipt" target="_blank">Tatum API documentation</a>
 */
function vetGetTransactionReceipt($hash):VetTxReceipt {
    return Axios::get(Constants::TATUM_API_URL . "/v3/vet/transaction/${hash}/receipt", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}
