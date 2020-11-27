<?php

namespace Tatum\model\request;

{
    IsBoolean,
    IsInt,
    IsNotEmpty,
    IsNumberString,
    IsOptional,
    Length,
    Matches,
    MaxLength,
    Min,
    Validate,
    ValidateIf,
} from 'class-validator';
<?php

namespace Tatum\model\request;

{
    TransferEthOffchainValidator}
from '../validation/TransferEthOffchainValidator';

class TransferEthOffchain extends Model
{

@Assert\NotBlank()
@Assert\Length(min = 24, max = 24, maxmessage = "maximal length is 24", minmessage = "minimal length is 24")
    public $senderAccountId;

@Assert\NotBlank()
@Assert\Length(min = 42, max = 42, maxmessage = "maximal length is 42", minmessage = "minimal length is 42")
    public $address;

@Assert\NotBlank()
@Assert\Type(type = "numeric")
@Assert\Regex(pattern = "/^[+]?((\d+(\.\d*)?)|(\.\d+))$/")
    public $amount;


    public $compliant;

@Assert\Length(min = 1, max = 100, maxmessage = "maximal length is 100", minmessage = "minimal length is 1")

    public $paymentId;

@Assert\Length(min = 1, max = 500, maxmessage = "maximal length is 500", minmessage = "minimal length is 1")

    public $senderNote;

@Assert\Length(min = 1, max = 500, maxmessage = "maximal length is 500", minmessage = "minimal length is 1")


@Assert\NotBlank()
    public $mnemonic;


@Assert\GreaterThanOrEqual(0)
@Assert\NotBlank()
@Assert\Type(type = "integer")
    public $index;


@Assert\Length(min = 66, max = 66, maxmessage = "maximal length is 66", minmessage = "minimal length is 66")
@Assert\NotBlank()
    public $privateKey;

@Assert\GreaterThanOrEqual(0)

@Assert\Type(type = "integer")
    public $nonce;

@Assert\Length(min = 0, max = 50000, maxmessage = "maximal length is 50000")

    public $data;
}
