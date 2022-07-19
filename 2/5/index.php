<?php

error_reporting(-1);

require_once 'classes/File.php';

function debug(object $data): void
{
    echo '<pre>' . print_r($data, true) . '</pre>';
}


//$file = new File(__DIR__ . '/file.txt');
// $file->write('Stroke1');
// $file->write('Stroke2');
// $file->write('Stroke3');
// $file->write('Stroke4');