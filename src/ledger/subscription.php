<?php
import { TATUM_API_URL } from '../constants'
import {Account, CreateSubscription, Subscription, Transaction} from '../model/response'

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/createSubscription" target="_blank">Tatum API documentation</a>
 */
function createNewSubscription(data: CreateSubscription):{ $id } {
    return ApiRequest::post(Constants::TATUM_API_URL . "/v3/subscription", data, [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/getSubscriptions" target="_blank">Tatum API documentation</a>
 */
function listActiveSubscriptions($pageSize = 50, $offset = 0): Subscription[] {
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/subscription?pageSize={$pageSize}&offset={$offset}", { headers: { 'x-api-key': process.env.TATUM_API_KEY } })).data
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/deleteSubscription" target="_blank">Tatum API documentation</a>
 */
function cancelExistingSubscription($id) {
    return ApiRequest::delete(Constants::TATUM_API_URL . "/v3/subscription/{$id}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ];
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/getSubscriptionReport" target="_blank">Tatum API documentation</a>
 */
function obtainReportForSubscription($id):Transaction[] | Account[] {
    return ApiRequest::get(Constants::TATUM_API_URL . "/v3/subscription/report/{$id}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ]).data
}



