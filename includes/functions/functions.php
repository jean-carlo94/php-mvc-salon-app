<?php

function debug($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizer el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}