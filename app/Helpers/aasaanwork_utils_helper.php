<?php

function name_to_url($name) {
    $orig_name = $name;
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $name = preg_replace('#\s#', '_', $name);
    $name = strtolower($name);
    log_message('debug', "name_to_url: [$orig_name] -> [$name]");
    return $name;
}