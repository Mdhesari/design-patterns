<?php

namespace App\Composite\Html\Contracts;

abstract class Composite extends FormElement
{

    protected $children = [];

    public function add(Element ...$children)
    {

        foreach ($children as $element)
            $this->children[] = $element;

        return $this;
    }

    public function remove(Element $element)
    {

        $this->children = array_filter($this->children, function ($child) use ($element) {

            return $child != $element;
        });

        return $this;
    }

    public function render()
    {

        $result = [];

        foreach ($this->children as $element) {

            $result[] = $element->render();
        }

        return join("</br>", $result);
    }
}
