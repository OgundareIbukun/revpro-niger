<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'role_id'=>[
               'super_admin'=> env('SUPER_ADMIN',1),
                'agent'=> env('AGENT',2),
                 'dir_revenue'=> env('DIR_REVENUE',3),
                    'hod'=> env('HOD',4),
        'chairman'=> env('CHAIRMAN',5),
                     'commissioner'=> env('COMMISSIONER',6),
                         'desk_officer'=> env('DESK_OFFICER',7),
                        'governor'=> env('GOVERNOR',8),

            ],



      'variable' =>[
              'QuickPrintInvoice' => env('QUICK_PRINT','Quick Print')
]




];