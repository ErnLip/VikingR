<?php

session_start();

require get_languages_file();

function get_languages_file(){
    // $_SESSION['lang'] = $_SESSION['lang'] ?? 'ru';
    $_SESSION['lang'] = $_GET['lang'] ?? 'ru';

    return "languages/".$_SESSION['lang'].".php";
};

function __($str){

    global $lang;
    if(!empty($lang[$str])){
        return $lang[$str];
    }
    return $str;
}

function getURL($path){     

    $curennt_lang = isset($_GET['lang']) && is_string($_GET['lang']) ? $_GET['lang'] : 'ru';
    
    return $path."?lang=" . $curennt_lang;
}