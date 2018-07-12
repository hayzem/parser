<?php
namespace Hayzem;

use Hayzem\Element\HtmlElement;
use Parsedown;

/**
 * @author Ali Atasever <aliatasever@gmail.com>
 */
class Parser extends Parsedown
{
    public function parse($text)
    {
        return $this->text($text);
    }

    public function createElement($name, $value = '', array $attributes = [], $elements = [])
    {
        $element = new HtmlElement();
        $element
            ->setName($name)
            ->setValue($value)
            ->setAttributes($attributes)
            ->setElements($elements)
        ;

        return $element;
    }
}