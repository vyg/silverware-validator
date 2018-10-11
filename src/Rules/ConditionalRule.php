<?php

namespace SilverWare\Validator\Rules;

use SilverWare\Validator\Rule;
use SilverWare\Validator\Rules\TargetRule;

/**
 * An extension of a conditional
 */
class ConditionalRule extends Rule
{
    /**
     * Defines the default type for the rule.
     *
     * @var string
     * @config
     */
    private static $default_type = 'conditional';

    private static $default_format = '[{password1}, {password2}]';

    protected $password1;

    protected $password2;

    public function setPassword1($password1)
    {
        $this->password1 = (string) $password1;

        return $this;
    }

    public function getPassword1()
    {
        return $this->password1;
    }


    public function setPassword2($password2)
    {
        $this->password2 = (string) $password2;

        return $this;
    }

    public function getPassword2()
    {
        return $this->password2;
    }

    /**
     * Constructs the object upon instantiation.
     *
     * @param string $pattern
     */
    public function __construct($password1 = null, $password2 = null)
    {
        // Construct Parent:

        parent::__construct();

        // Construct Object:
        $this->password1 = $password1;
        $this->password2 = $password2;
    }

    /**
     * Defines the value of the pattern attribute.
     *
     * @param string $pattern
     *
     * @return $this
     */
    // public function setConditionalFields($fields)
    // {
    //     $this->conditional_fields = (array) $fields;

    //     return $this;
    // }

    /**
     * Answers the test result of the validator rule on the given value.
     *
     * @param mixed $value
     *
     * @return boolean
     */
    public function test($value)
    {
        // var_dump($this->conditional_fields);
        // die;
        return false;
    }

    /**
     * Answers the default message for the rule.
     *
     * @return string
     */
    public function getDefaultMessage()
    {
        return 'This value is conditional';
    }
}
