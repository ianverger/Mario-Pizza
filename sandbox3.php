<?php
    //file system
    // $quotes = readfile('readme.txt');
    // echo $quotes;

    $file = 'readme.txt';
    if (file_exists($file)) {
        echo readfile($file);
        copy($file, 'quotes.txt');
    } else {
        echo 'file does not exist';
    }
?>