<?php
namespace Hayzem\Element;

/**
 * @author Ali Atasever <aliatasever@gmail.com>
 */
class HtmlElement
{
    const DEFAULT_MULTI_ELEMENT_HANDLER = 'elements';

    const DEFAULT_SINGLE_ELEMENT_HANDLER = 'element';

    private $name;

    private $value;

    private $attributes = [];

    private $handler = self::DEFAULT_SINGLE_ELEMENT_HANDLER;

    private $elements = [];

    /**
     * @param mixed $name
     * @return HtmlElement
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $value
     * @return HtmlElement
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param array $attributes
     * @return HtmlElement
     */
    public function setAttributes(array $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param mixed $handler
     * @return HtmlElement
     */
    public function setHandler($handler)
    {
        $this->handler = $handler;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHandler()
    {
        return $this->handler;
    }

    /**
     * @param array $elements
     * @return HtmlElement
     */
    public function setElements($elements)
    {
        if(count($elements)){
            $this->setHandler(self::DEFAULT_MULTI_ELEMENT_HANDLER);
        }

        $this->elements = $elements;

        return $this;
    }

    /**
     * @return array
     */
    public function getElements()
    {
        return $this->elements;
    }
}