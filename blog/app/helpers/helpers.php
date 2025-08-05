<?php



function make_slug($text){
    return preg_replace('/\s+/u','-', $text);
}
