<?php

namespace Tatum\Model;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class BlockAmount
 * @package Tatum\Model
 */
class BlockAmount
{

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(1, 38)
     * @Assert\Regex(/^[+]?((\d+(\.\d*)?)|(\.\d+))$/)
     */
    public $amount;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(1, 100)
     */
    public $type;

    /**
     * @var string|null
     * @Assert\Length(1, 300)
     */
    public $description;
}
