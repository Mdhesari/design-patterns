<?php

namespace App\Bridge\Shape\Helpers;

class Style
{

    protected $style = [];

    public function __call($name, $arguments)
    {

        $this->style[] = "{$name}:" . join(" ", $arguments);

        return $this;
    }

    public function single($key, $value)
    {

        $this->style[] = "$key:$value";

        return $this;
    }

    public function add(...$styles)
    {

        foreach ($styles as $style) {
            $this->style[] = $style;
        }

        return $this;
    }

    public function get()
    {

        $style = $this->getFormattedStyle();

        $this->clear();

        return $style;
    }

    public function getFormattedStyle()
    {

        return join(";", $this->style);
    }

    public function getWithStyle()
    {

        $style = $this->getFormattedStyle();

        $style = 'style="' . $style . '"';

        $this->clear();

        return $style;
    }

    public function clear()
    {

        $this->style = [];
    }
}
