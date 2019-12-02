<?php

namespace App\Builder\Car\Contracts;

abstract class ACar
{

    protected $features = [];

    protected $type = "simple";

    public function setType($type)
    {

        $this->type = $type;

        return $this;
    }

    public function addFeatures(Feature ...$features)
    {

        $this->features = array_merge($this->features, $features);

        return $this;
    }

    public function setFeature(array $features)
    {

        $this->features = $features;

        return $this;
    }

    abstract public function getInfo();
}
