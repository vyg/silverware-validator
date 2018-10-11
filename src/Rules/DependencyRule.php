<?php

namespace SilverWare\Validator\Rules;

use SilverWare\Validator\Rule;

class DependencyRule extends Rule
{
    /**
     * Defines the default type for the rule.
     *
     * @var string
     * @config
     */
    private static $default_type = 'dependent';

    private static $default_format = '{password1}';

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
     * Answers the test result of the validator rule on the given value.
     *
     * @param mixed $value
     *
     * @return boolean
     */
    public function test($value)
    {
        return true;
    }

    /**
     * Answers the default message for the rule.
     *
     * @return string
     */
    public function getDefaultMessage()
    {
        return _t(__CLASS__ . '.DEFAULTMESSAGE', 'Dependent rule');
    }
}
