<?php

namespace Tatum\model\request;

{
    IsNotEmpty, Length}
from 'class-validator';
<?php

namespace Tatum\model\request;

{
    CreateWithdrawal}
from './CreateWithdrawal';

class TransferXlmOffchain extends CreateWithdrawal extends Model {

    @Assert\NotBlank()
@Assert\Length(min = 56, max = 56, maxmessage = "maximal length is 56", minmessage = "minimal length is 56")
    public $secret;
}
