<?php

namespace App\Proxy\File\Proxy;

use App\Proxy\File\Contracts\FileHandlerAbstract;
use App\Proxy\File\FileHandler as AppFileHandler;

class FileHandler extends FileHandlerAbstract
{

    private $file;

    public function lazyLoad()
    {

        if (!isset($this->file)) {

            $this->file = new AppFileHandler($this->fileName);

            $this->setContent($this->file->getContent());
        }

        return $this->file;
    }
}
