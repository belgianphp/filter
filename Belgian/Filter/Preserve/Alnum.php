<?php

/*
 * @package     BelgianPHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        http://belgianphp.github.io
 * @copyright   2016
 * 
 */


namespace Belgian\Filter\Preserve;

class Alnum
{
    private $search = '/[^a-zA-Z\]0-9]/' ;

    public function filter($value) 
    {
        return (string) preg_replace($this->search, '', $value);
    }

}

