<?php

namespace Tatum\model\response\kms;


use Tatum\model\Model;



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
