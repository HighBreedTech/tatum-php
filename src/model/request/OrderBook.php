<?php

namespace Tatum\model\request;

{
    IsIn, IsNotEmpty, IsNumberString, IsString, Length, Matches, MaxLength, MinLength}
from 'class-validator';
<?php

namespace Tatum\model\request;

{
    TradeType}
from './TradeType';

class OrderBookRequest extends Model
{

@Assert\NotBlank()

    public type: TradeType;

    @Assert\NotBlank()
    @Assert\Type(type="numeric")
    @Assert\Regex(pattern="/^[+]?((\d+(\.\d*)?)|(\.\d+))$/")
    @Assert\Length(min=0, max=38,maxmessage="maximal length is 38")
    public $price;

    @Assert\NotBlank()
    @Assert\Type(type="numeric")
    @Assert\Regex(pattern="/^[+]?((\d+(\.\d*)?)|(\.\d+))$/")
    @Assert\Length(min=0, max=38,maxmessage="maximal length is 38")
    public $amount;

    @Assert\NotBlank()
    @IsString()
    @Assert\Regex(pattern="/^[A-a-zZ0-9_\-]+\/[A-Za-z0-9_\-]+$/")
    @MinLength(3)
    @Assert\Length(min=0, max=30,maxmessage="maximal length is 30")
    public $pair;

    @Assert\NotBlank()
    @IsString()
    @Assert\Length(min=24, max=24,maxmessage="maximal length is 24",minmessage="minimal length is 24")
    public $currency1AccountId;

    @Assert\NotBlank()
    @IsString()
    @Assert\Length(min=24, max=24,maxmessage="maximal length is 24",minmessage="minimal length is 24")
    public $currency2AccountId;
}
