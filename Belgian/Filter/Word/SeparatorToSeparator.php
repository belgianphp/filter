<?php

/*
 * @package     BelgianPHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        http://belgianphp.github.io
 * @copyright   2013 - 2016
 * 
 */


namespace Belgian\Filter\Word;

class SeparatorToSeparator extends AbstractSeparator 
{

    protected $_replaceSeparator = NULL;

    public function __construct(
        $searchSeparator = ' ', 
        $replacementSeparator = '-'
    ) 
    {
        parent::__construct($searchSeparator);
        $this->_replaceSeparator = $replacementSeparator;
    }

    public function filter($value) 
    {

        if (!is_string($this->_replaceSeparator))
            throw new \Exception('"' 
            . $this->_replaceSeparator 
            . '" is not a valid replaceSeparator.'
        );

        return str_replace(
            parent::getSeparator(), 
            $this->_replaceSeparator, $value
        );

    }

}
