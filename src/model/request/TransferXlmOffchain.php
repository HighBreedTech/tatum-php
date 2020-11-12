<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {IsNotEmpty, Length} from 'class-validator';
<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {CreateWithdrawal} from './CreateWithdrawal';

class TransferXlmOffchain extends CreateWithdrawal {

    @IsNotEmpty()
    @Length(56, 56)
    public secret: string;
}
