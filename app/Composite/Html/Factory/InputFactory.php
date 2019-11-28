<?php

namespace App\Composite\Html\Factory;

use App\Composite\Html\Elements\Label;
use App\Composite\Html\Elements\Input;

class InputFactory
{

    public static function getNew()
    {

        return new Input;
    }

    public static function labeled($id = "", $labelText = "", $placeholder = "")
    {

        $input = self::getNew();

        $label = new Label;

        $label
            ->setLabel($labelText)
            ->for($id);

        $input
            ->placeholder($placeholder)
            ->id($id)
            ->name($id);

        $input->addLabel($label);

        return $input;
    }

    public static function emailLabeled($id = "", $labelText = "", $placeholder = "")
    {

        $input = self::labeled($id, $labelText, $placeholder);

        $input->type('email');

        return $input;
    }

    public static function submit($text = "Submit")
    {

        $input = self::getNew();

        $input->type("submit");

        $input->value($text);

        return $input;
    }
}
