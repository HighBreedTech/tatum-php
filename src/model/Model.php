<?php /** @noinspection SpellCheckingInspection */

namespace Tatum\model;

use Symfony\Component\Validator\ConstraintViolation;
use Symfony\Component\Validator\ConstraintViolationListInterface;
use Symfony\Component\Validator\Exception\ValidationFailedException;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\ValidatorInterface;

class Model
{
    public function __toString()
    {
        return json_encode($this->__serialize());
    }

    public function __serialize()
    {
        return get_object_vars($this);
    }

    public function __validate($exception = false)
    {

        /** @var ValidatorInterface $validator */
        $validator = Validation::createValidatorBuilder()
            ->enableAnnotationMapping()
            ->getValidator();

        /** @var ConstraintViolationListInterface $errors */
        $errors = $validator->validate($this);


        foreach (get_object_vars($this) as $var) {
            if($var instanceof Model) {
               $varErrors = $validator->validate($var);
               $errors = array_merge($errors, $varErrors);
            }
        }

        if (count($errors)) {
            if ($exception) {
                throw new ValidationFailedException(self::class, $errors);
            } else {
                /** @var ConstraintViolation $error */
                foreach ($errors as $error) {
                    echo "Validation Error on " . get_class($this) . ":{$error->getPropertyPath()} {$error->getMessage()}\n";
                }
            }
        }

    }
}