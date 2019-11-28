<?php

namespace App\Composite\Box\Container;

use App\Composite\Box\Contracts\Component;

class Composite extends Component
{

    protected $children;

    public function add(Component ...$components)
    {

        foreach ($components as $component) {
            $this->children[] = $component;

            $component->setParent($this);
        }

        return $this;
    }

    public function remove(Component $component)
    {

        $this->children = array_filter($this->children, function ($child) use ($component) {

            return $child == $component;
        });

        $component->unsetParent();
    }

    public function execute()
    {

        $results = [];

        foreach ($this->children as $child) {

            $results[] = $child->execute();
        }

        return sprintf("Branch ( %s )", join(" + ", $results));
    }
}
