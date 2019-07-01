<?php

return [
    'Getting Started' => [
        'url' => 'docs/getting-started',
    ],
    'Design' => [
        'url' => 'docs/design/design-overview',
        'children' => [
            //  membership
            //  events
            //  classes - payments, signoff processing
            //  sign offs
            //  SSO
            //  rights
            'Membership Design' => 'docs/design/design-membership',
        ],
    ],
    'Migration' => [
        'url' => 'docs/migration-overview',
        'children' => [
            // members
            // stripe
            //
            'Migrating Stripe' => 'docs/migration-stripe',

        ],
    ],
    'Implementation' => [
        'url' => 'docs/implementation-overview',
        'children' => [
            // data model
            // civicrm modules
            //

        ],
    ],
    'Procedures' => [
        'url' => 'docs/procedures-overview',
        'children' => [
            // user self
            // user management by admin
            //
        ],
    ],
    'Github for these docs' => 'https://github.com/nova-labs/civicrm-nl-docs',
];
