<?php

namespace Tatum\model\response\validation;


use Tatum\model\Model;


import {ValidationArguments, ValidatorConstraint, ValidatorConstraintInterface} from 'class-validator';
import {TransferBtcBasedBlockchain} from '../index';

@ValidatorConstraint({name: 'fromAddressFromUTXO', async: false})
export class TransferBtcValidator implements ValidatorConstraintInterface extends Model {
    public defaultMessage(validationArguments?: ValidationArguments) {
        return 'Either fromAddress, or fromUTXO must be present.';
    }

    public validate(value: any, validationArguments?: ValidationArguments) {
        const data = validationArguments?.object as TransferBtcBasedBlockchain;
        return !(data.fromAddress && data.fromUTXO);
    }

}
