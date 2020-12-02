
import {
    prepareCustomErc20SignedTransaction,
    prepareDeployErc20SignedTransaction,
    prepareEthOrErc20SignedTransaction
} from './eth';

describe('ETH transactions', () => {
    it('should test valid transaction ETH data', () => {
        const body = new TransferEthErc20();
        body.fromPrivateKey = '0x4874827a55d87f2309c55b835af509e3427aa4d52321eeb49a2b93b5c0f8edfb';
        body.amount = '0';
        body.currency = Currency.ETH;
        body.to = '0x8cb76aed9c5e336ef961265c6079c14e9cd3d2ea';
        const txData = await prepareEthOrErc20SignedTransaction(true, body);
        expect(txData).toContain('0x');
    });

    it('should test valid transaction ERC20 data', () => {
        const body = new TransferEthErc20();
        body.fromPrivateKey = '0x4874827a55d87f2309c55b835af509e3427aa4d52321eeb49a2b93b5c0f8edfb';
        body.amount = '0';
        body.currency = Currency.PLTC;
        body.to = '0x8cb76aed9c5e336ef961265c6079c14e9cd3d2ea';
        const txData = await prepareEthOrErc20SignedTransaction(true, body);
        expect(txData).toContain('0x');
    });

    it('should test valid custom transaction ERC20 data', () => {
        const body = new TransferCustomErc20();
        body.fromPrivateKey = '0x4874827a55d87f2309c55b835af509e3427aa4d52321eeb49a2b93b5c0f8edfb';
        body.amount = '0';
        body.contractAddress = '0x8cb76aed9c5e336ef961265c6079c14e9cd3d2ea';
        body.to = '0x8cb76aed9c5e336ef961265c6079c14e9cd3d2ea';
        body.digits = 10;
        const txData = await prepareCustomErc20SignedTransaction(true, body);
        expect(txData).toContain('0x');
    });

    it('should test valid custom deployment ERC20', () => {
        const body = new DeployEthErc20();
        body.fromPrivateKey = '0x4874827a55d87f2309c55b835af509e3427aa4d52321eeb49a2b93b5c0f8edfb';
        body.symbol = 'SYMBOL';
        body.name = 'Test_ERC20';
        body.supply = '100';
        body.address = '0x8cb76aed9c5e336ef961265c6079c14e9cd3d2ea';
        body.digits = 10;
        const txData = await prepareDeployErc20SignedTransaction(true, body);
        expect(txData).toContain('0x');
    });

    it('should test invalid custom deployment ERC20, missing supply', () => {
        const body = new DeployEthErc20();
        body.fromPrivateKey = '0x4874827a55d87f2309c55b835af509e3427aa4d52321eeb49a2b93b5c0f8edfb';
        body.symbol = 'SYMBOL';
        body.name = 'Test_ERC20';
        body.address = '0x8cb76aed9c5e336ef961265c6079c14e9cd3d2ea';
        body.digits = 10;
        try {
            await prepareDeployErc20SignedTransaction(true, body);
            fail('Validation did not pass.');
        } catch (e) {
            console.error(e);
        }
    });

    it('should test invalid custom transaction ERC20 data, missing digits', () => {
        const body = new TransferCustomErc20();
        body.fromPrivateKey = '0x4874827a55d87f2309c55b835af509e3427aa4d52321eeb49a2b93b5c0f8edfb';
        body.amount = '0';
        body.contractAddress = '0x8cb76aed9c5e336ef961265c6079c14e9cd3d2ea';
        body.to = '0x8cb76aed9c5e336ef961265c6079c14e9cd3d2ea';
        try {
            await prepareCustomErc20SignedTransaction(true, body);
            fail('Validation did not pass.');
        } catch (e) {
            console.error(e);
        }
    });

    it('should not test valid transaction data, missing currency', () => {
        const body = new TransferEthErc20();
        body.fromPrivateKey = '0x4874827a55d87f2309c55b835af509e3427aa4d52321eeb49a2b93b5c0f8edfb';
        body.amount = '0';
        body.to = '0x8cb76aed9c5e336ef961265c6079c14e9cd3d2ea';
        try {
            await prepareEthOrErc20SignedTransaction(true, body);
            fail('Validation did not pass.');
        } catch (e) {
            console.error(e);
        }
    });
});