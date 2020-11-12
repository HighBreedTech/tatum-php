<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {Type} from 'class-transformer';
<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {
    IsNotEmpty,
    IsNumberString,
    IsOptional,
    Length,
    Matches,
    Max,
    MaxLength,
    Min,
    ValidateNested,
} from 'class-validator';
<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {Fee} from './Fee';

class DeployEthErc20 {

    @IsNotEmpty()
    @Length(1, 100)
    @Matches(/^[a-zA-Z0-9_]+$/)
    public name: string;

    @IsNotEmpty()
    @Length(1, 30)
    public symbol: string;

    @IsNotEmpty()
    @Length(42, 42)
    public address: string;

    @IsNotEmpty()
    @IsNumberString()
    @MaxLength(38)
    @Matches(/^[+]?((\d+(\.\d*)?)|(\.\d+))$/)
    public supply: string;

    @Min(1)
    @Max(30)
    public digits: number;

    @IsNotEmpty()
    @Length(66, 66)
    public fromPrivateKey: string;

    @IsOptional()
    @Min(0)
    public nonce?: number;

    @IsOptional()
    @ValidateNested()
    @Type(() => Fee)
    public fee?: Fee;
}
