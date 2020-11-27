<?php

namespace Tatum\model\request;

{
    IsInt, IsNotEmpty, IsNumberString, IsOptional, Length, Matches, Min}
from 'class-validator';

class TransferXrp extends Model
{

@Assert\NotBlank()
@Assert\Length(min = 33, max = 34, maxmessage = "maximal length is 34", minmessage = "minimal length is 33")
    public $fromAccount;

@Assert\NotBlank()
@Assert\Length(min = 29, max = 29, maxmessage = "maximal length is 29", minmessage = "minimal length is 29")
    public $fromSecret;

@Assert\NotBlank()
@Assert\Length(min = 33, max = 34, maxmessage = "maximal length is 34", minmessage = "minimal length is 33")
    public $to;

@Assert\NotBlank()
@Assert\Type(type = "numeric")
@Assert\Regex(pattern = "/^[+]?((\d+(\.\d*)?)|(\.\d+))$/")
    public $amount;

@Assert\Type(type = "numeric")

@Assert\Regex(pattern = "/^[+]?((\d+(\.\d*)?)|(\.\d+))$/")
    public $fee;

@Assert\GreaterThanOrEqual(0)

@Assert\Type(type = "integer")
    public $sourceTag;

@Assert\GreaterThanOrEqual(0)

@Assert\Type(type = "integer")
    public $destinationTag;
}
