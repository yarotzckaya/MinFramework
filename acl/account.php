<?php
/**
 * Created by PhpStorm.
 * User: yarot
 * Date: 05.07.2018
 * Time: 12:39
 *
 * Returns list of page types by ACL
 */

return [

    'all' => [
        // pages available for all users
        'login',
        'register'
    ],

    'authorize' => [
        //pages available only for authenticated users

    ],

    'guest' => [
        // pages available for guests
    ],

    'admin' => [
        // pages available only for admins
    ]
];