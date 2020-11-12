<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert;

class VetFee {
    @IsNotEmpty()
    @IsNumberString()
    @Matches(/^[+]?((\d+(\.\d*)?)|(\.\d+))$/)
    public gasLimit: string;
}

class TransferVet {

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

    @MaxLength(10000)
    @IsOptional()
    public data?: string;

    @IsOptional()
    public fee?: VetFee;
}
