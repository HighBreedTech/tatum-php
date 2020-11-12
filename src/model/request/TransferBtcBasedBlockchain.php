<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {Type} from 'class-transformer';
<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {ArrayNotEmpty, IsNotEmpty, Length, Max, Min, Validate, ValidateIf, ValidateNested} from 'class-validator';
<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {TransferBtcValidator} from '../validation/TransferBtcValidator';

class FromAddress {
    @IsNotEmpty()
    @Length(30, 50)
    public address: string;

    @IsNotEmpty()
    @Length(52, 52)
    public privateKey: string;
}

class FromUTXO {

    @IsNotEmpty()
    @Length(64, 64)
    public txHash: string;

    @IsNotEmpty()
    @Min(0)
    @Max(4294967295)
    public index: number;

    @IsNotEmpty()
    @Length(52, 52)
    public privateKey: string;
}

class To {
    @IsNotEmpty()
    @Length(30, 50)
    public address: string;

    @IsNotEmpty()
    @Min(0)
    public value: number;
}

class TransferBtcBasedBlockchain {

    @ValidateIf(o => (o.fromUTXO && o.fromAddress) || !o.fromUTXO)
    @Validate(TransferBtcValidator)
    @IsNotEmpty()
    @ValidateNested({each: true})
    @Type(() => FromAddress)
    public fromAddress?: FromAddress[];

    @ValidateIf(o => (o.fromUTXO && o.fromAddress) || !o.fromAddress)
    @Validate(TransferBtcValidator)
    @IsNotEmpty()
    @ValidateNested({each: true})
    @Type(() => FromUTXO)
    public fromUTXO?: FromUTXO[];

    @ArrayNotEmpty()
    @ValidateNested({each: true})
    @Type(() => To)
    public to: To[];
}
