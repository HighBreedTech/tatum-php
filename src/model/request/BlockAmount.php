<?php

namespace Tatum\model\request;

use Symfony\Component\Validator\Constraints as Assert;
use Tatum\model\Model;


/**
 * Class BlockAmount
 * @package Tatum\model\request
 */
class BlockAmount extends Model
{

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(min=1, max=38,maxMessage="",minMessage="Minimal length is 1 character")
     * @Assert\Regex(pattern="/^[+]?((\d+(\.\d*)?)|(\.\d+))$/")
     */
    public $amount;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(min=1, max=100,maxMessage="",minMessage="Minimal length is 1 character")
     */
    public $type;

    /**
     * @var string|null
     * @Assert\Length(min=1, max=300,maxMessage="",minMessage="Minimal length is 1 character")
     */
    public $description;

    public function __toString()
    {
        return json_encode(get_object_vars($this));
    }
}

