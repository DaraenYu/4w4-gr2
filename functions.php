<?php
    wp_enqueue_style(
        'style-principal'/* $handle */,
        get_template_directory_uri() . '/style.css'/* $src */,
        array() /* $deps */,
        filemtime(get_template_directory() . '/style.css') /* $ver */,
    );
?>