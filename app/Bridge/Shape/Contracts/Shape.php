<?php

namespace App\Bridge\Shape\Contracts;

use App\Bridge\Shape\Helpers\Style;

abstract class Shape
{

    protected $width = 100;
    protected $height = 100;
    protected $color = "transparent";

    protected $style;

    protected $styler;

    public function __construct(Color $color, Style $styler = null)
    {

        $this->color = $color;

        $this->styler = is_null($styler) ? new Style : $styler;

        $this->style = $this->getStyles();
    }

    public function setWidth($size)
    {

        $this->width = $size;
    }


    public function setHeight($size)
    {

        $this->height = $size;
    }

    public function renderStyle()
    {


        $style = $this->styler
            ->margin('10px')
            ->padding(0)
            ->width("{$this->width}px")
            ->height("{$this->height}px")
            ->single("background-color", $this->color->getColor())
            ->add($this->style)->getWithStyle();

        return $style;
    }

    public function draw()
    {
        return "<p {$this->renderStyle()} ></p>";
    }

    public function style($styles)
    {

        $this->style = $this->styler->add($this->style, $styles)->get();
    }

    abstract public function getStyles(): string;
}
