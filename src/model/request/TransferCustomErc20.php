<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {Type} from 'class-transformer';
<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {IsNotEmpty, IsNumberString, IsOptional, Length, Matches, Max, Min, ValidateNested} from 'class-validator';
<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {Fee} from './Fee';

class TransferCustomErc20 {

    @IsNotEmpty()
    @Length(66, 66)
    public fromPrivateKey: string;

    @IsNotEmpty()
    @Length(42, 42)
    public to: string;

    @IsNotEmpty()
    @IsNumberString()
    @Matches(/^[+]?((\d+(\.\d*)?)|(\.\d+))$/)
    public amount: string;

    @IsNotEmpty()
    @Length(42, 42)
    public contractAddress: string;

    @IsOptional()
    @Type(() => Fee)
    @ValidateNested()
    public fee?: Fee;

    @Min(1)
    @Max(30)
    public digits: number;

    @Min(0)
    @IsOptional()
    public nonce?: number;
}
