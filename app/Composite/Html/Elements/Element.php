<?php

namespace App\Composite\Html\Elements;

use App\Composite\Html\Contracts\Composite;

class Element extends Composite
{

    protected $tag = "div";

    protected $hasComplete = true;

    public function __construct($tag = "div", $hasComplete = true)
    {

        $this->tag = $tag;
        $this->hasComplete = $hasComplete;
    }

    public function render()
    {
        $output = parent::render();

        $start = "<{$this->tag}>";

        $end = $this->hasComplete ? "</{$this->tag}>" : "";

        return "
            {$start}

            {$output}

            {$end}
        ";
    }
}
