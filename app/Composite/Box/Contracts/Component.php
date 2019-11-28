<?php

namespace App\Composite\Box\Contracts;

abstract class Component
{

    protected $parent;

    public function setParent(Component $parent)
    {

        $this->parent = $parent;
    }

    public function getParent()
    {

        return $this->parent;
    }

    public function unsetParent()
    {

        $this->parent = null;
    }

    abstract public function execute();
}
