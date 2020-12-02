<?php


/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/CheckMalicousAddress" target="_blank">Tatum API documentation</a>
 */
function checkMaliciousAddress(address: string):{ status: string } {
    return Axios::get(Constants::TATUM_API_URL . "/v3/security/address/${address}",
        [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}
