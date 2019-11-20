<?php

namespace App;

interface ServiceInterface
{

    public function update(ObservableInterface $observable);

    public function getPriority(): int;
}
