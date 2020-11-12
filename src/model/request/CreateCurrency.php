<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {IsIn, IsNotEmpty, IsNumberString, IsOptional, Length, Matches, MaxLength, Min} from 'class-validator';
<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {Fiat} from '../response';
<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {Currency} from './Currency';
<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; { CustomerUpdate } from './CustomerUpdate';

class CreateCurrency {

    @IsNotEmpty()
    @Length(1, 30)
    @Matches(/^VC_[a-zA-Z0-9_]+$/)
    public name: string;

    @IsNotEmpty()
    @IsNumberString()
    @MaxLength(38)
    @Matches(/^[+]?((\d+(\.\d*)?)|(\.\d+))$/)
    public supply: string;

    @Length(1, 100)
    @IsOptional()
    public description?: string;

    @Length(1, 50)
    @IsOptional()
    public accountCode?: string;

    @IsNotEmpty()
    @IsIn([...Object.keys(Currency), ...Object.keys(Fiat)])
    @Length(3, 5)
    public basePair: Currency | Fiat;

    @Min(0)
    @IsOptional()
    public baseRate?: number;

    @Length(3, 3)
    @IsOptional()
    @IsIn(Object.keys(Fiat))
    public accountingCurrency?: Fiat;

    @IsOptional()
    public customer?: CustomerUpdate;
}
