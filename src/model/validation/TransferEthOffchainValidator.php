<?php

namespace Tatum\model\response\validation;


use Tatum\model\Model;


//
//
//@ValidatorConstraint({name: 'mnemonicIndexPrivateKey', async: false})
//export class TransferEthOffchainValidator implements ValidatorConstraintInterface extends Model {
//    public defaultMessage(validationArguments?: ValidationArguments) {
//        return 'Either mnemonic and index, or privateKey a must be present.';
//    }
//
//    public validate(value: any, validationArguments?: ValidationArguments) {
//        const data = validationArguments?.object as any;
//        return !(data.mnemonic && data.index >= 0 && data.privateKey);
//    }
//
//}
