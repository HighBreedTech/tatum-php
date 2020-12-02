<?php
import { TATUM_API_URL } from '../constants'
import {Account, CreateSubscription, Subscription, Transaction} from '../model/response'

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/createSubscription" target="_blank">Tatum API documentation</a>
 */
function createNewSubscription(data: CreateSubscription):{ id: string } {
    return Axios::post(Constants::TATUM_API_URL . "/v3/subscription", data, [], [ 'x-api-key' => getenv('TATUM_API_KEY') ])->data;
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/getSubscriptions" target="_blank">Tatum API documentation</a>
 */
function listActiveSubscriptions(pageSize: number = 50, offset: number = 0):Subscription[] {
    return Axios::get(Constants::TATUM_API_URL . "/v3/subscription?pageSize=${pageSize}&offset=${offset}", { headers: { 'x-api-key': process.env.TATUM_API_KEY } })).data
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/deleteSubscription" target="_blank">Tatum API documentation</a>
 */
function cancelExistingSubscription(id: string) {
    await axios.delete("${process.env.TATUM_API_URL || TATUM_API_URL}/v3/subscription/${id}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ];
}

/**
 * For more details, see <a href="https://tatum.io/apidoc.html#operation/getSubscriptionReport" target="_blank">Tatum API documentation</a>
 */
function obtainReportForSubscription(id: string):Transaction[] | Account[] {
    return Axios::get(Constants::TATUM_API_URL . "/v3/subscription/report/${id}", [], [ 'x-api-key' => getenv('TATUM_API_KEY') ]).data
}



