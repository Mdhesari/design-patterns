<?php

namespace App\Proxy\File\Contracts;

abstract class FileHandlerAbstract
{


    protected $fileName;

    protected $content;

    public function __construct($fileName)
    {

        $this->fileName = $fileName;
    }

    public function getFileName()
    {

        return $this->fileName;
    }

    public function setFileName($fileName)
    {

        return $this->fileName = $fileName;
    }

    public function getContent()
    {

        return $this->content;
    }

    public function setContent($content)
    {

        return $this->content = $content;
    }
}
