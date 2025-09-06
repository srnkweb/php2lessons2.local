<?php

spl_autoload_register(function ($class_name) {
    include __DIR__ . '/' . str_replace('\\', '/',
                                                        $class_name) . '.php';
});
