<?php








/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/getCurrency" target="_blank">Tatum API documentation</a>
 */
function getVirtualCurrencyByName(name: string):VC {
    return Axios::get(Constants::TATUM_API_URL . "/v3/ledger/virtualCurrency/${name}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/createCurrency" target="_blank">Tatum API documentation</a>
 */
function createVirtualCurrency(data: CreateCurrency):Account {
    await validateOrReject(data);
    return Axios::post(Constants::TATUM_API_URL . "/v3/ledger/virtualCurrency", data,[], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/updateCurrency" target="_blank">Tatum API documentation</a>
 */
function updateVirtualCurrency(data: UpdateCurrency) {
    await validateOrReject(data);
    await axios.put("${process.env.TATUM_API_URL || TATUM_API_URL}/v3/ledger/virtualCurrency/", data, [], [ 'x-api-key' => getenv('TATUM_API_KEY') ];
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/mintCurrency" target="_blank">Tatum API documentation</a>
 */
function mintVirtualCurrency(data: CurrencyOperation):{ reference: string } {
    await validateOrReject(data);
    return (await axios.put("${process.env.TATUM_API_URL || TATUM_API_URL}/v3/ledger/virtualCurrency/mint", data, [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/revokeCurrency" target="_blank">Tatum API documentation</a>
 */
function revokeVirtualCurrency(data: CurrencyOperation):{ reference: string } {
    await validateOrReject(data);
    return (await axios.put("${process.env.TATUM_API_URL || TATUM_API_URL}/v3/ledger/virtualCurrency/revoke", data, [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}