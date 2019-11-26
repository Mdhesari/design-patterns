<?php

namespace App\Proxy\File;

use App\Proxy\File\Contracts\FileHandlerAbstract;

/**
 * 
 * Here the performance of the application is slow when instantiating (I know we can put file_get_contents) to the getContetn() @method instead but this is only for practice.
 * 
 */
class FileHandler extends FileHandlerAbstract
{


    const ROOT_PATH = __DIR__;

    public function __construct($fileName)
    {
        parent::__construct($fileName);

        $this->content = file_get_contents(self::ROOT_PATH . "/$fileName");
    }
}
