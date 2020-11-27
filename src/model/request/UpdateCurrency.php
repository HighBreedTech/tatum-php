<?php

namespace Tatum\model\request;

{
    IsIn, IsNotEmpty, IsOptional, Length, Matches, Min}
from 'class-validator';
<?php

namespace Tatum\model\request;

{
    Fiat}
from '../response';
<?php

namespace Tatum\model\request;

{
    Currency}
from './Currency';

class UpdateCurrency extends Model
{

@Assert\NotBlank()
@Assert\Length(min = 1, max = 30, maxmessage = "maximal length is 30", minmessage = "minimal length is 1")
@Assert\Regex(pattern = "/^VC_[a-zA-Z0-9_]+$/")
    public $name;


@Assert\Length(min = 3, max = 5, maxmessage = "maximal length is 5", minmessage = "minimal length is 3")

    public $basePair;

@Assert\GreaterThanOrEqual(0)

    public $baseRate;
}
