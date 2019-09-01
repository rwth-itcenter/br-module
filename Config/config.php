<?php

return [
    'name' => 'BackupRestore',
    'visibility' => (function () {
        if (env('BR_ENABLE', false) === true) {
            if (env('BR_ADMINONLY', false) === true) {
                return [
                    'specialentitlements' => [
                        config('entitlements.admin'),
                    ]
                ];
            } elseif (env('BR_INSTFILTER', false) === true) {
                return [
                    'sids' => [
                        env('BR_SID_1'),
                        env('BR_SID_2'),
                        env('BR_SID_3'),
                        env('BR_SID_4'),
                        env('BR_SID_5'),
                        env('BR_SID_6'),
                        env('BR_SID_7'),
                        env('BR_SID_8'),
                    ]
                ];
            } elseif (env('BR_USERFILTER', false) === true) {
                return [
                    'userids' => [
                        env('BR_USERID_1'),
                        env('BR_USERID_2'),
                        env('BR_USERID_3'),
                        env('BR_USERID_4'),
                        env('BR_USERID_5'),
                        env('BR_USERID_6'),
                        env('BR_USERID_7'),
                        env('BR_USERID_8'),
                        env('BR_USERID_9'),
                        env('BR_USERID_10'),
                        env('BR_USERID_11'),
                        env('BR_USERID_12'),
                        env('BR_USERID_13'),
                        env('BR_USERID_14'),
                    ]
                ];
            } else {
                return null;
            }
        } else {
            return [];
        }
    })(),

    'beta' => true,

    'OperationCenter' => [
        'host'          =>  env('OC_HOST'),
        'port'          =>  env('OC_PORT', 443),
        'scheme'        =>  env('OC_SCHEME', 'https'),
        'username'      =>  env('OC_USERNAME'),
        'password'      =>  env('OC_PASSWORD'),
        'tls_verify'    =>  env('OC_TLS_VERIFY', true),
        'timeout'       =>  env('OC_TIMEOUT', 10),
    ],
];
