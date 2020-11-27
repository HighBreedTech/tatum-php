<?php

namespace Tatum\model\request;

/**
 * Interface Currency
 * 
 * Currencies
 *
 * @package Tatum\model\request
 * 
 */
interface Currency
{
    const BTC = 'BTC';
    const BCH = 'BCH';
    const LTC = 'LTC';
    const ETH = 'ETH';
    const XRP = 'XRP';
    const XLM = 'XLM';
    const VET = 'VET';
    const NEO = 'NEO';
    const BNB = 'BNB';
    const USDT = 'USDT';
    const LEO = 'LEO';
    const LINK = 'LINK';
    const UNI = 'UNI';
    const FREE = 'FREE';
    const MKR = 'MKR';
    const USDC = 'USDC';
    const BAT = 'BAT';
    const TUSD = 'TUSD';
    const PAX = 'PAX';
    const PLTC = 'PLTC';
    const XCON = 'XCON';
    const MMY = 'MMY';
    const PAXG = 'PAXG';
}

/**
 * Eth based currencies
 */
const ETH_BASED_CURRENCIES = [
    Currency::USDT,
    Currency::LEO,
    Currency::LINK,
    Currency::UNI,
    Currency::FREE,
    Currency::MKR,
    Currency::USDC,
    Currency::BAT,
    Currency::TUSD,
    Currency::PAX,
    Currency::PAXG,
    Currency::PLTC,
    Currency::XCON,
    Currency::ETH,
    Currency::MMY
];