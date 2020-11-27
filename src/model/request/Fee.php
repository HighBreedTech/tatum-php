<?php

namespace Tatum\model\request;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Fee
 * @package Tatum\Model
 *
 * Model class of Fee with validation
 *
 */
class Fee
{

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Regex(/^[+]?((\d+(\.\d*)?)|(\.\d+))$/)
     */
    public $gasLimit;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Regex(/^[+]?((\d+(\.\d*)?)|(\.\d+))$/)
     */
    public $gasPrice;
}
