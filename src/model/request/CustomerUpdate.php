<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {IsIn, IsOptional, Length} from 'class-validator';
<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {Fiat} from '../response';
<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {Country} from './Country';

class CustomerUpdate {

    @Length(2, 2)
    @IsOptional()
    @IsIn(Object.keys(Country))
    public customerCountry?: Country;

    @Length(3, 3)
    @IsOptional()
    @IsIn(Object.keys(Fiat))
    public accountingCurrency?: Fiat;

    @Length(2, 2)
    @IsOptional()
    @IsIn(Object.keys(Country))
    public providerCountry?: Country;

    @Length(1, 100)
    public externalId: string;
}
