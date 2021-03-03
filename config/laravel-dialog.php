<?php

return [

    'slack' => [
        'newsletter' => env('SLACK_NEWSLETTER', 'https://hooks.slack.com/services/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'),
        'recruitment' => env('SLACK_RECRUITMENT', 'https://hooks.slack.com/services/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'),
        'lead' => env('SLACK_LEAD', 'https://hooks.slack.com/services/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'),
    ],

    'markdown' => [
        'variables' => [
            'host' => env('APP_URL', null),
//            'account_uuid' => currentAccount(),
            'tugudu' => 'La variable tugudu',
            'frout' => 'La variable frout',
//            'date' => \Carbon\Carbon::now()->format('Y'),
        ]
    ]
];
