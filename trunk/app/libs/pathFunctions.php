<?php //@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@\\

function getPath($path){
    $path = str_replace('/', DIRECTORY_SEPARATOR, $path);
    return $path;
}
