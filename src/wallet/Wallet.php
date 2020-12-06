<?php

namespace Tatum\wallet;


class Wallet
{

    /**
     * mnemonic seed
     */
    public $mnemonic;

    /**
     * extended public key to derive addresses from
     */
    public $xpub;
}

/**
 * Generate BnB wallet
 * @param testnet testnet or mainnet version of address
 * @returns wallet
 */
function generateBnbWallet(testnet: boolean) {
    const privateKey = generatePrivateKey();
    const prefix = testnet ? 'tbnb' : 'bnb';
    return {
        address: getAddressFromPrivateKey(privateKey, prefix),
        privateKey,
    }
}

/**
 * Generate VeChain wallet
 * @param testnet testnet or mainnet version of address
 * @param mnem mnemonic seed to use
 * @returns wallet
 */
function generateVetWallet(testnet: boolean, mnem: string):Wallet {
    const path = testnet ? TESTNET_DERIVATION_PATH : VET_DERIVATION_PATH;
    const hdwallet = ethHdKey.fromMasterSeed(await mnemonicToSeed(mnem));
    const derivePath = hdwallet.derivePath(path);
    return {
        xpub: derivePath.publicExtendedKey().toString(),
        mnemonic: mnem
    }
}

/**
 * Generate Ethereum or any other ERC20 wallet
 * @param testnet testnet or mainnet version of address
 * @param mnem mnemonic seed to use
 * @returns wallet
 */
function generateEthWallet(testnet: boolean, mnem: string):Wallet {
    const path = testnet ? TESTNET_DERIVATION_PATH : ETH_DERIVATION_PATH;
    const hdwallet = ethHdKey.fromMasterSeed(await mnemonicToSeed(mnem));
    const derivePath = hdwallet.derivePath(path);
    return {
        xpub: derivePath.publicExtendedKey().toString(),
        mnemonic: mnem
    }
}

/**
 * Generate Bitcoin Cash wallet
 * @param testnet testnet or mainnet version of address
 * @param mnem mnemonic seed to use
 * @returns wallet
 */
export const generateBchWallet = (testnet: boolean, mnem: string): Wallet => {
    const m = new Mnemonic();
    const node = new HDNode();
    const rootSeedBuffer = m.toSeed(mnem);
    const hdNode = node.fromSeed(rootSeedBuffer, testnet ? 'testnet' : 'mainnet');
    const path = node.derivePath(hdNode, BCH_DERIVATION_PATH);
    return {
        mnemonic: mnem,
        xpub: node.toXPub(path),
    }
}

/**
 * Generate Bitcoin wallet
 * @param testnet testnet or mainnet version of address
 * @param mnem mnemonic seed to use
 * @returns wallet
 */
function generateBtcWallet(testnet: boolean, mnem: string):Wallet {
    const hdwallet = hdkey.fromMasterSeed(await mnemonicToSeed(mnem), testnet ? networks.testnet.bip32 : networks.bitcoin.bip32);
    return {mnemonic: mnem, xpub: hdwallet.derive(testnet ? TESTNET_DERIVATION_PATH : BTC_DERIVATION_PATH).toJSON().xpub}
}

/**
 * Generate Litecoin wallet
 * @param testnet testnet or mainnet version of address
 * @param mnem mnemonic seed to use
 * @returns wallet
 */
function generateLtcWallet(testnet: boolean, mnem: string):Wallet {
    const hdwallet = hdkey.fromMasterSeed(await mnemonicToSeed(mnem), testnet ? LTC_TEST_NETWORK.bip32 : LTC_NETWORK.bip32);
    return {mnemonic: mnem, xpub: hdwallet.derive(testnet ? TESTNET_DERIVATION_PATH : LTC_DERIVATION_PATH).toJSON().xpub}
}

/**
 * Generate Neo address and private key.
 */
function generateNeoWallet() {
    const privateKey = Neon.create.privateKey();
    return {privateKey, address: new wallet.Account(privateKey).address}
}

/**
 * Generate Xrp address and secret.
 */
function generateXrpWallet() {
    const {address, secret} = new RippleAPI().generateAddress();
    return {address, secret}
}

/**
 * Generate Stellar address and secret.
 * @param secret secret of the account to generate address
 */
function generateXlmWallet(secret?: string) {
    const keypair = secret ? Keypair.fromSecret(secret) : Keypair.random();
    return {address: keypair.publicKey(), secret: keypair.secret()}
}

/**
 * Generate wallet
 * @param currency blockchain to generate wallet for
 * @param testnet testnet or mainnet version of address
 * @param mnemonic mnemonic seed to use. If not present, new one will be generated
 * @returns wallet or a combination of address and private key
 */
function generateWallet(currency: Currency, testnet: boolean, mnemonic?: string) {
    const mnem = mnemonic ? mnemonic : generateMnemonic(256);
    switch (currency) {
        case Currency.BTC:
            return generateBtcWallet(testnet, mnem);
        case Currency.LTC:
            return generateLtcWallet(testnet, mnem);
        case Currency.BCH:
            return generateBchWallet(testnet, mnem);
        case Currency.USDT:
        case Currency.LEO:
        case Currency.LINK:
        case Currency.UNI:
        case Currency.FREE:
        case Currency.MKR:
        case Currency.USDC:
        case Currency.BAT:
        case Currency.TUSD:
        case Currency.PAX:
        case Currency.PAXG:
        case Currency.PLTC:
        case Currency.XCON:
        case Currency.ETH:
        case Currency.MMY:
            return generateEthWallet(testnet, mnem);
        case Currency.XRP:
            return generateXrpWallet();
        case Currency.XLM:
            return generateXlmWallet();
        case Currency.VET:
            return generateVetWallet(testnet, mnem);
        case Currency.NEO:
            return generateNeoWallet();
        case Currency.BNB:
            return generateBnbWallet(testnet);
        default:
            throw new Error('Unsupported blockchain.');
    }
}