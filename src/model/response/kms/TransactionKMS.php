import {Currency} from '../../request';
import {WithdrawalResponseData} from '../offchain/WithdrawalResponse';

export class TransactionKMS extends Model {
public $id;

    public chain: Currency;

public $serializedTransaction;

    public hashes: string[];

public $txId;

public $withdrawalId;

public $index;

public $withdrawalResponses;
}
