<?php

namespace SilverWare\Validator\Rules;

use SilverWare\Validator\Rule;

class IfEmptyRule extends Rule
{
    /**
     * Defines the default type for the rule.
     *
     * @var string
     * @config
     */
    private static $default_type = 'true';

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
        return _t(__CLASS__ . '.DEFAULTMESSAGE', 'If empty rule');
    }
}
