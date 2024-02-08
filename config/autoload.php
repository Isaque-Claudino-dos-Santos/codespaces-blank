<?php

spl_autoload_register(function ($class) {
    $toggleBars = str_replace("\\","/", $class);
    $path = __DIR__ . $toggleBars . ".php";
    
    require_once $path;
});