<?php

error_reporting(-1);

//var_dump(copy('file_new.txt', 'folder/file_new.txt'));

/*if (file_exists(__DIR__ . '/folder/file3.txt')) {
    echo 'File exists';
} else {
    echo 'File not exists';
}*/

//echo nl2br(file_get_contents('folder/file2.txt'));

//echo file_get_contents('https://howto.by/');

//$file = file_get_contents('file.txt');
//var_dump(file_put_contents('file2.txt', $file, FILE_APPEND));

/*function debug($data): void
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

debug(file('file2.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES));*/

//var_dump((rename('file_new.txt', 'folder/new_name2.txt')));

//var_dump(mkdir('test_dir'));

//var_dump(rmdir('test_dir'));

//var_dump(mkdir('1/2/3', 0644, true));

var_dump(unlink('folder/file_new.txt'));
