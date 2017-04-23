<?php

/*
 * @package     BelgianPHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        http://belgianphp.github.io
 * @copyright   2013 - 2016
 * 
*/


namespace Belgian\Filter\Word;

class SeparatorToCamelCase extends AbstractSeparator 
{

    public function filter($value) 
    {

        $word = array();
        $word = explode(parent::getSeparator(), $value);
        $count = count($word);
        for ($i = 0; $i < $count; ++$i) 
        {
            $word[$i] = ucfirst($word[$i]);
        }
        return implode('', $word);

    }

}
