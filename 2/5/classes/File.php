<?php

class File
{
    public $fp;
    public $file;

    public function __construct($file)
    {
        $this->file = $file;
        if (!is_writable($this->file)) {
            echo "File {$this->file} not writable";
            exit;
        }
        $this->fp = fopen($file, 'a');
    }

    public function __destruct()
    {
        fclose($this->$fp);
    }

    public function write($text)
    {
            if (fwrite($this->fp, $text) === FALSE) {
                echo "File {$this->file} not writable";
                exit;
            }

    }
}