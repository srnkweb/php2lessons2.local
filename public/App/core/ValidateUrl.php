<?php

function sanitizeInput($input) {
    return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES, 'UTF-8');
}

function validateId($id) {
    if (!ctype_digit($id)) return false;
    $id = (int)$id;
    return $id > 0 ? $id : false;
}