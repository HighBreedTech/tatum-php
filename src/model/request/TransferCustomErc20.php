<?php

namespace Tatum\model\request;

{
    Type}
from 'class-transformer';
<?php

namespace Tatum\model\request;

{
    IsNotEmpty, IsNumberString, IsOptional, Length, Matches, Max, Min, ValidateNested}
from 'class-validator';
<?php

namespace Tatum\model\request;

{
    Fee}
from './Fee';

class TransferCustomErc20 extends Model
{

@Assert\NotBlank()
@Assert\Length(min = 66, max = 66, maxmessage = "maximal length is 66", minmessage = "minimal length is 66")
    public $fromPrivateKey;

@Assert\NotBlank()
@Assert\Length(min = 42, max = 42, maxmessage = "maximal length is 42", minmessage = "minimal length is 42")
    public $to;

@Assert\NotBlank()
@Assert\Type(type = "numeric")
@Assert\Regex(pattern = "/^[+]?((\d+(\.\d*)?)|(\.\d+))$/")
    public $amount;

@Assert\NotBlank()
@Assert\Length(min = 42, max = 42, maxmessage = "maximal length is 42", minmessage = "minimal length is 42")
    public $contractAddress;




    public $fee;

@Assert\GreaterThanOrEqual(1)
    @Assert\LessThanOrEqual(30)
    public public $digits;

    @Assert\GreaterThanOrEqual(0)

    public $nonce;
}
