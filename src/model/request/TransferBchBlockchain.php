<?php

namespace Tatum\model\request;

{
    Type}
from 'class-transformer';
<?php

namespace Tatum\model\request;

{
    ArrayNotEmpty, IsNotEmpty, IsNumberString, Min, ValidateNested}
from 'class-validator';
<?php

namespace Tatum\model\request;

{
    FromUTXO, To}
from './TransferBtcBasedBlockchain';

class FromUTXOBcash extends FromUTXO extends Model {
    @Assert\NotBlank()
@Assert\Type(type = "numeric")
@Assert\GreaterThanOrEqual(0)
    public $value;
}

class TransferBchBlockchain extends Model
{

@Assert\NotBlank()

@Type(() => FromUTXOBcash)
    public fromUTXO: FromUTXOBcash[];

    @ArrayNotEmpty()

    @Type(() => To)
    public to: To[];
}
