<?php

namespace App\State\Audio;

use App\State\Audio\Contracts\AudioAbstract;

class Song extends AudioAbstract
{

    protected $singer = "";

    public function __construct($name, $duration, $singer = null, $description = "")
    {
        parent::__construct($name, $duration, $description);

        $this->singer = is_null($singer) ? "No Singer" : $singer;
    }

    public function play()
    {

        echo "
                {$this->name} by {$this->singer} : {$this->duration} \n
    
                {$this->description}
            ";
    }
}
