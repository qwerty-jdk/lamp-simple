<?php

function url_base(){
    $path = 'http://'.$_SERVER['HTTP_HOST'].'/';
    return $path;
}