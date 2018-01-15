<?php

return [
    'name'        => 'Barnebys Simple Email',
    'description' => 'Adds api and functions regarding email',
    'version'     => '1.0',
    'author'      => 'Barnebys',
    'routes'      => [
        'api' => [
            'mautic_api_sendcontactemailcontent' => [
                'path'       => '/emails/{id}/contact/{leadId}/send-content',
                'controller' => 'MauticSimpleEmailBundle:Api\EmailContentApi:sendLeadContent',
                'method'     => 'POST',
            ],
        ],
    ],
];
