<?php

namespace App\ChainOfRes\Request\Handlers;

use App\ChainOfRes\Request\Contracts\BaseHandler;

class ErrorHandler extends BaseHandler
{

    public function handle($request)
    {

        if(!isset($request['error'])) {

            $request['error'] = "Something Went wrong";
        }

        return '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
        </head>
        <body>
        <p style="color:red;">
        ' . $request['error'] . '
        </p>
        </body>
        </html>
        ';
    }
}
