<?php

namespace App\Decorator\Html\Illuminate;

abstract class HTMLDecorator extends HTMLElement implements HTMLDomInterface
{

    protected $element = null;

    public function __construct(HTMLDomInterface $element, $id = null)
    {
        parent::__construct($id);

        $this->element = $element;
    }

    abstract public function toHtml();
}
