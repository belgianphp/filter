<?php

/*
 * @package     BelgianPHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        http://belgianphp.github.io
 * @copyright   2013 - 2017
 * 
*/


namespace Belgian\Filter\Word;


abstract class AbstractSeparator implements IGetSeparator
{

    protected $separator = null;

    
    public function __construct($separator = ' ') 
    {
        self::setSeparator($separator);
    }

    



    public function setSeparator($separator)
    {
        if (!is_string($separator)) {
            throw new \Exception('"' 
                . $separator 
                . '" is not a valid separator.'
            );
        }

        $this->separator = $separator;
        return $this;
    }

    
    public function getSeparator()
    {
        return $this->separator;
    }


}
