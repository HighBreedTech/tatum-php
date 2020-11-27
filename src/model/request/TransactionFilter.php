<?php

namespace Tatum\model\request;

{
    TransactionType}
from '../response/ledger/TransactionType';

class TransactionFilter extends Model
{

@Assert\Length(min = 1, max = 50, maxmessage = "maximal length is 50", minmessage = "minimal length is 1")
    @IsString()

    public $id;

@Assert\GreaterThanOrEqual(0)
    @Assert\Type(type="numeric")

    public $from;

@Assert\GreaterThanOrEqual(0)
    @Assert\Type(type="numeric")

    public $to;

@Assert\Length(min = 1, max = 50, maxmessage = "maximal length is 50", minmessage = "minimal length is 1")
    @IsString()

    public $account;

@Assert\Length(min = 1, max = 50, maxmessage = "maximal length is 50", minmessage = "minimal length is 1")
    @IsString()

    public $counterAccount;

@Assert\Length(min = 1, max = 50, maxmessage = "maximal length is 50", minmessage = "minimal length is 1")
    @IsString()

    public $currency;

@Assert\Length(min = 1, max = 100, maxmessage = "maximal length is 100", minmessage = "minimal length is 1")
    @IsString()

    public $paymentId;

@Assert\Length(min = 1, max = 100, maxmessage = "maximal length is 100", minmessage = "minimal length is 1")
    @IsString()

    public $transactionCode;

@Assert\Length(min = 1, max = 500, maxmessage = "maximal length is 500", minmessage = "minimal length is 1")
    @IsString()

    public $senderNote;

@Assert\Length(min = 1, max = 500, maxmessage = "maximal length is 500", minmessage = "minimal length is 1")
    @IsString()

    public $recipientNote;

    @IsString()
@Assert\Length(min = 4, max = 22, maxmessage = "maximal length is 22", minmessage = "minimal length is 4")


    public $opType;


@Assert\Length(min = 6, max = 23, maxmessage = "maximal length is 23", minmessage = "minimal length is 6")

@IsString()
    public $transactionType;
}
