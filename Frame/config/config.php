<?php

define('CONFIG', [
    'host' => 'phplocal.lt',
    'database' => 'ba_extra',
    'username' => 'root',
    'password' => ''
]);

define('INPUT_TYPES', [
    'color',
    'date',
    'datetime-local',
    'email',
    'file', // set extra => ['attr' =>['multiple']]
    'hidden',
    'image', // set extra => ['attr' =>['src' => '', 'alt' => '']]
    'month',
    'number', // set extra => ['attr' =>['min' => '', 'max' => '']]
    'password',
    'range', // set extra => ['attr' =>['min' => '', 'max' => '', 'step' => '']]
    'reset',
    'search',
    'tel',
    'text',
    'time',
    'url',
    'week',
]);