<?php

namespace Tatum\model\request;

{
    IsNotEmpty, IsOptional, Length, Min}
from 'class-validator';
<?php

namespace Tatum\model\request;

{
    CreateWithdrawal}
from './CreateWithdrawal';

class TransferXrpOffchain extends CreateWithdrawal extends Model {
    @Assert\NotBlank()
@Assert\Length(min = 33, max = 34, maxmessage = "maximal length is 34", minmessage = "minimal length is 33")
    public $account;

@Assert\NotBlank()
@Assert\Length(min = 29, max = 29, maxmessage = "maximal length is 29", minmessage = "minimal length is 29")
    public $secret;


@Assert\GreaterThanOrEqual(0)
    public $sourceTag;
}
