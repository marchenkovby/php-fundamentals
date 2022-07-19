<?php

class File
{
    public $fp;
    public $file;

    public function __construct($file)
    {
        echo $this->file = $file;

    }

    public function __destruct()
    {

    }

    public function write($text)
    {

    }
}