<?php

namespace Tatum\model\request;

{
    Type}
from 'class-transformer';
<?php

namespace Tatum\model\request;

{
    ArrayNotEmpty, IsNotEmpty, Length, Max, Min, Validate, ValidateIf, ValidateNested}
from 'class-validator';
<?php

namespace Tatum\model\request;

{
    TransferBtcValidator}
from '../validation/TransferBtcValidator';

class FromAddress extends Model
{
@Assert\NotBlank()
@Assert\Length(min = 30, max = 50, maxmessage = "maximal length is 50", minmessage = "minimal length is 30")
    public $address;

@Assert\NotBlank()
@Assert\Length(min = 52, max = 52, maxmessage = "maximal length is 52", minmessage = "minimal length is 52")
    public $privateKey;
}

class FromUTXO extends Model
{

@Assert\NotBlank()
@Assert\Length(min = 64, max = 64, maxmessage = "maximal length is 64", minmessage = "minimal length is 64")
    public $txHash;

@Assert\NotBlank()
@Assert\GreaterThanOrEqual(0)
    @Assert\LessThanOrEqual(4294967295)
    public index: number;

    @Assert\NotBlank()
    @Assert\Length(min=52, max=52,maxmessage="maximal length is 52",minmessage="minimal length is 52")
    public $privateKey;
}

class To extends Model
{
@Assert\NotBlank()
@Assert\Length(min = 30, max = 50, maxmessage = "maximal length is 50", minmessage = "minimal length is 30")
    public $address;

@Assert\NotBlank()
@Assert\GreaterThanOrEqual(0)
    public value: number;
}

class TransferBtcBasedBlockchain extends Model
{


@Assert\NotBlank()


    public $fromAddress;


@Assert\NotBlank()


    public $fromUTXO;

    @ArrayNotEmpty()


    public to: To[];
}
