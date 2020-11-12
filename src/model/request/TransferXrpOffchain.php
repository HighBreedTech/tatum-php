<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {IsNotEmpty, IsOptional, Length, Min} from 'class-validator';
<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {CreateWithdrawal} from './CreateWithdrawal';

class TransferXrpOffchain extends CreateWithdrawal {
    @IsNotEmpty()
    @Length(33, 34)
    public account: string;

    @IsNotEmpty()
    @Length(29, 29)
    public secret: string;

    @IsOptional()
    @Min(0)
    public sourceTag?: number;
}
