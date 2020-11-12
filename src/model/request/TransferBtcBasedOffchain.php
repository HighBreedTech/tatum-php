<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {Type} from 'class-transformer';
<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {IsNotEmpty, Length, Validate, ValidateIf, ValidateNested} from 'class-validator';
<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {TransferBtcOffchainValidator} from '../validation/TransferBtcOffchainValidator';
<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert; {CreateWithdrawal} from './CreateWithdrawal';

class KeyPair {

    @IsNotEmpty()
    @Length(30, 50)
    public address: string;

    @IsNotEmpty()
    @Length(52, 52)
    public privateKey: string;
}

class TransferBtcBasedOffchain extends CreateWithdrawal {

    @Length(1, 500)
    @Validate(TransferBtcOffchainValidator)
    @ValidateIf(o => (o.mnemonic && o.keyPair) || !o.keyPair)
    @IsNotEmpty()
    public mnemonic?: string;

    @ValidateIf(o => (o.mnemonic && o.keyPair) || !o.mnemonic)
    @Validate(TransferBtcOffchainValidator)
    @IsNotEmpty()
    @Type(() => KeyPair)
    @ValidateNested({each: true})
    public keyPair?: KeyPair[];
}
