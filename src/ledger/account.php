<?php




/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/getAccountByAccountId" target="_blank">Tatum API documentation</a>
 */
function getAccountById(id: string):Account {
    return Axios::get(Constants::TATUM_API_URL . "/v3/ledger/account/${id}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/createAccount" target="_blank">Tatum API documentation</a>
 */
function createAccount(account: CreateAccount):Account {
    await validateOrReject(account);
    return Axios::post(Constants::TATUM_API_URL . "/v3/ledger/account", account, [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/getBlockAmount" target="_blank">Tatum API documentation</a>
 */
function getBlockedAmountsByAccountId($id, pageSize: number = 50, offset = 0):Blockage[] {
    return Axios::get(Constants::TATUM_API_URL . "/v3/ledger/account/block/${id}?pageSize=${pageSize}&offset=${offset}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/blockAmount" target="_blank">Tatum API documentation</a>
 */
function blockAmount($id, block: BlockAmount):{ id: string } {
    await validateOrReject(block);
    return Axios::post(Constants::TATUM_API_URL . "/v3/ledger/account/block/${id}", block, [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/deleteBlockAmount" target="_blank">Tatum API documentation</a>
 */
function deleteBlockedAmount(id: string) {
    await axios.delete("${process.env.TATUM_API_URL || TATUM_API_URL}/v3/ledger/account/block/${id}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ];
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/deleteAllBlockAmount" target="_blank">Tatum API documentation</a>
 */
function deleteBlockedAmountForAccount(id: string) {
    await axios.delete("${process.env.TATUM_API_URL || TATUM_API_URL}/v3/ledger/account/block/account/${id}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ];
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/activateAccount" target="_blank">Tatum API documentation</a>
 */
function activateAccount(id: string) {
    await axios.put("${process.env.TATUM_API_URL || TATUM_API_URL}/v3/ledger/account/${id}/activate", undefined, [], [ 'x-api-key' => getenv('TATUM_API_KEY') ];
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/deactivateAccount" target="_blank">Tatum API documentation</a>
 */
function deactivateAccount(id: string) {
    await axios.put("${process.env.TATUM_API_URL || TATUM_API_URL}/v3/ledger/account/${id}/deactivate", undefined, [], [ 'x-api-key' => getenv('TATUM_API_KEY') ];
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/freezeAccount" target="_blank">Tatum API documentation</a>
 */
function freezeAccount(id: string) {
    await axios.put("${process.env.TATUM_API_URL || TATUM_API_URL}/v3/ledger/account/${id}/freeze", undefined, [], [ 'x-api-key' => getenv('TATUM_API_KEY') ];
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/unfreezeAccount" target="_blank">Tatum API documentation</a>
 */
function unfreezeAccount(id: string) {
    await axios.put("${process.env.TATUM_API_URL || TATUM_API_URL}/v3/ledger/account/${id}/unfreeze", undefined, [], [ 'x-api-key' => getenv('TATUM_API_KEY') ];
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/getAccountsByCustomerId" target="_blank">Tatum API documentation</a>
 */
function getAccountsByCustomerId($id, pageSize: number = 50, offset = 0):Account[] {
    return Axios::get(Constants::TATUM_API_URL . "/v3/ledger/account/customer/${id}?pageSize=${pageSize}&offset=${offset}",
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/getAllAccounts" target="_blank">Tatum API documentation</a>
 */
function getAllAccounts(pageSize: number = 50, offset = 0):Account[] {
    return Axios::get(Constants::TATUM_API_URL . "/v3/ledger/account?pageSize=${pageSize}&offset=${offset}",
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/getAccountBalance" target="_blank">Tatum API documentation</a>
 */
function getAccountBalance(id: string):AccountBalance {
    return Axios::get(Constants::TATUM_API_URL . "/v3/ledger/account/${id}/balance", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}