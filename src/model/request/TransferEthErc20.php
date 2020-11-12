<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {Type} from 'class-transformer';
<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {
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

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {Currency, ETH_BASED_CURRENCIES} from './Currency';
<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {Fee} from './Fee';

class TransferEthErc20 {

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

    @MaxLength(130000)
    @IsOptional()
    public data?: string;

    @IsNotEmpty()
    @IsIn(ETH_BASED_CURRENCIES)
    public currency: Currency;

    @IsOptional()
    @Type(() => Fee)
    @ValidateNested()
    public fee?: Fee;

    @Min(0)
    @IsOptional()
    public nonce?: number;
}
