<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {Type} from 'class-transformer';
<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {IsBoolean, IsIn, IsNotEmpty, IsOptional, Length, MaxLength, ValidateNested} from 'class-validator';
<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {Fiat} from '../response';
<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {CustomerUpdate} from './CustomerUpdate';

class CreateAccount {

    @IsNotEmpty()
    @Length(2, 40)
    public currency: string;

    @MaxLength(150)
    @IsOptional()
    public xpub?: string;

    @IsOptional()
    @IsBoolean()
    public compliant?: boolean;

    @Length(3, 3)
    @IsOptional()
    @IsIn(Object.keys(Fiat))
    public accountingCurrency?: Fiat;

    @Length(1, 50)
    @IsOptional()
    public accountCode?: string;

    @Length(1, 30)
    @IsOptional()
    public accountNumber?: string;

    @IsOptional()
    @ValidateNested()
    @Type(() => CustomerUpdate)
    public customer?: CustomerUpdate;
}
