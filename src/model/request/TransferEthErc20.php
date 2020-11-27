<?php

namespace Tatum\model\request;

{
    Type}
from 'class-transformer';
<?php

namespace Tatum\model\request;

{
    IsIn,
    IsNotEmpty,
    IsNumberString,
    IsOptional,
    Length,
    Matches,
    MaxLength,
    Min,
    ValidateNested,
} from 'class-validator';
<?php

namespace Tatum\model\request;

{
    Currency, ETH_BASED_CURRENCIES}
from './Currency';
<?php

namespace Tatum\model\request;

{
    Fee}
from './Fee';

class TransferEthErc20 extends Model
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

@Assert\Length(min = 0, max = 130000, maxmessage = "maximal length is 130000")

    public $data;

@Assert\NotBlank()

    public currency: Currency;




    public $fee;

    @Assert\GreaterThanOrEqual(0)

    public $nonce;
}
