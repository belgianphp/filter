<?php

/*
 * @package     BelgianPHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        http://belgianphp.github.io
 * @copyright   2016
 * 
 */


namespace Belgian\Filter\Preserve;

class Num
{
    private $search = '/[^0-9]/' ;

    public function filter($value) 
    {
        return (int) preg_replace($this->search, '', $value);
    }

}

