<?php

namespace Tatum\model\request;

class VetFee extends Model
{
@Assert\NotBlank()
@Assert\Type(type = "numeric")
@Assert\Regex(pattern = "/^[+]?((\d+(\.\d*)?)|(\.\d+))$/")
    public $gasLimit;
}

class TransferVet extends Model
{

@Assert\NotBlank()
@Assert\Length(min = 66, max = 66, maxmessage = "maximal length is 66", minmessage = "minimal length is 66")
    public $fromPrivateKey;

@Assert\NotBlank()
@Assert\Length(min = 42, max = 42, maxmessage = "maximal length is 42", minmessage = "minimal length is 42")
    public $to;

@Assert\NotBlank()
@Assert\Type(type = "numeric")
@Assert\Regex(pattern = "/^[+]?((\d+(\.\d*)?)|(\.\d+))$/")
    public $amount;

@Assert\Length(min = 0, max = 10000, maxmessage = "maximal length is 10000")

    public $data;


    public $fee;
}
