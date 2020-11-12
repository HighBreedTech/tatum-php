<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {Type} from 'class-transformer';
<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {ArrayNotEmpty, IsNotEmpty, IsNumberString, Min, ValidateNested} from 'class-validator';
<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {FromUTXO, To} from './TransferBtcBasedBlockchain';

class FromUTXOBcash extends FromUTXO {
    @IsNotEmpty()
    @IsNumberString()
    @Min(0)
    public value: string;
}

class TransferBchBlockchain {

    @IsNotEmpty()
    @ValidateNested({each: true})
    @Type(() => FromUTXOBcash)
    public fromUTXO: FromUTXOBcash[];

    @ArrayNotEmpty()
    @ValidateNested({each: true})
    @Type(() => To)
    public to: To[];
}
