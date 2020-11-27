<?php

namespace Tatum\model\request;

class TransferXlm extends Model
{

@Assert\NotBlank()
@Assert\Length(min = 56, max = 56, maxmessage = "maximal length is 56", minmessage = "minimal length is 56")
    public $fromSecret;

@Assert\NotBlank()
@Assert\Length(min = 56, max = 56, maxmessage = "maximal length is 56", minmessage = "minimal length is 56")
    public $to;

@Assert\NotBlank()
@Assert\Type(type = "numeric")
@Assert\Regex(pattern = "/^[+]?((\d+(\.\d*)?)|(\.\d+))$/")
    public $amount;


    public initialize: boolean;

    @Assert\Length(min=0, max=64,maxmessage="maximal length is 64")
    @Assert\Regex(pattern="/^[ -~]{0,64}$/")

    public $message;
}
