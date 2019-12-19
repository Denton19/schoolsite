<?php

session_name('school');
// session_set_cookie_params(604800, '/school/');
session_start();

function quote($string) {
    return "`".str_replace("`","``",trim($string))."`";
}

function escape($string) {
    return htmlentities(trim($string), ENT_QUOTES, 'utf-8');
}

spl_autoload_register(function($class) {
    require_once 'classes/' . $class . '.php';
});
