<?php

/*
 * @package     BelgianPHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        http://belgianphp.github.io
 * @copyright   2013 - 2016
 * 
*/


namespace Belgian\Filter\Word;

class CamelCaseToSeparator extends AbstractSeparator 
{

    public function filter($value) 
    {

        $word = array();
        $word = preg_split('/(?<=[a-z])(?=[A-Z])/x', $value);
        $count = count($word);

        for ($i = 0; $i < $count; ++$i) 
        {
            $word[$i];
        }

        return implode(parent::getSeparator(), $word);

    }

}
