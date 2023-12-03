<?php

// These are permanent values that should not be overwritten during execution.
// If you need configuration values that can be potentially changed, use the .conf.php file.
// These are typically uppercase to emphasize their permanence.

if(is_file(__DIR__ . DIRECTORY_SEPARATOR . '.keys.php')) {
    $keys = require __DIR__ . DIRECTORY_SEPARATOR . '.keys.php';
} else {
    $keys = [];
}

// No closing slash on the directories or urls.
return [
    // App
    'APP_NAME' => 'NumbersQ', 
    'APP_ENV' => 'dev',
    'APP_HOST' => 'www.example.com',
    'APP_SITE' => 'https://www.example.com',
    // Author information used on Terms and Privacy pages.
    'APP_AUTHOR' => 'Organization', 
    'APP_AUTHOR_EMAIL' => 'support@example.com', 
    'APP_AUTHOR_ADDRESS' => "123 Main Street\nNashville, TN 37203", 
    // Terms and Privacy info
    'APP_PRIVACY_UPDATED' => 'July 15, 2022',
    'APP_TERMS_UPDATED' => 'July 15, 2022',

    'APP_ANALYTICS' => '<script></script>',

    // The 'list' option is only used for simple, non-database sites.
    'APP_LOGIN_TYPE' => 'db', // Options: list, db
    // If 'list' is chosen, these users will be available for login. The number is the user_id.
    'APP_LOGIN_USERS' => [
        1 => ['email' => 'user@example.com', 'password' => 'example'],
    ],
    // APP_LOGIN needs to be 'db' in order for true to turn on registrations.
    'APP_REGISTER_ALLOW' => true,

    // How long the session cookie should be saved. Note this can also be affected by the
    // PHP session.gc_maxlifetime configuration.
    'APP_SESSION_SECONDS' => 60 * 60 * 24 * 45,

    'APP_PRIVATE_HOME' => '/numbers',
    'APP_PUBLIC_HOME' => '/login',

	// Encryption key locations
    'APP_KEYS' => $keys, 
    'APP_ENCRYPT_CONNECTIONS' => 'CONNECTIONS_1',
    'APP_ENCRYPT_NUMBERS' => 'NUMBERS_1',

    // Mavoc
    'AO_MAINTENANCE' => false, 
    'AO_MAINTENANCE_EXCLUDE' => ['256.256.0.1'], // Enter a valid IP address that should be able to skip the maintenance page.
    'AO_MAINTENANCE_STARTED' => '2022-07-15 10:00:00 UTC', 
    'AO_MAINTENANCE_ENDING' => '2022-07-15 11:00:00 UTC', // Use a datetime
    'AO_MAINTENANCE_ENDING' => '2 hours', // Or use a relative value
    'AO_MAINTENANCE_VIEW' => 'alt/maintenance',

    'AO_APP_DIR' => __DIR__ . DIRECTORY_SEPARATOR . 'app',
    'AO_BASE_DIR' => __DIR__,
    'AO_DB_DIR' => __DIR__ . DIRECTORY_SEPARATOR . 'db',
    'AO_PLUGIN_DIR' => __DIR__ . DIRECTORY_SEPARATOR . 'plugins',
    'AO_SETTINGS_DIR' => __DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'settings',
    'AO_MAVOC_DIR' => __DIR__ . DIRECTORY_SEPARATOR . 'mavoc',
    'AO_MAVOC_CONSOLE_DIR' => __DIR__ . DIRECTORY_SEPARATOR . 'mavoc' . DIRECTORY_SEPARATOR . 'console',
    'AO_MAVOC_CORE_DIR' => __DIR__ . DIRECTORY_SEPARATOR . 'mavoc' . DIRECTORY_SEPARATOR . 'core',

    'AO_OUTPUT_HOOKS' => false,

    // DB
    'DB_USE' => true,
    'DB_INSTALL' => true, // This is used to run the migrations from the home page. If you are using the command line, set this to false.
    'DB_TYPE' => 'mysql',
    'DB_HOST' => 'localhost',
    'DB_NAME' => 'example_com',
    'DB_USER' => 'example_com',
    'DB_PASS' => '',
    'DB_CHARSET' => 'utf8mb4',

    // Email
    'EMAIL_ADMIN' => 'admin@example.com',
    'EMAIL_FROM' => 'Sender Name <sender@example.com>',
    'EMAIL_SEND' => true, // null pretends to send, true sends, false errors and does not send
    'EMAIL_OVERRIDE_TO' => false, // if set to an email address and EMAIL_SEND is true, all emails will only be sent to this email address

    // OAuth Services
	'GITHUB_URL' => 'https://api.github.com',
    'GITHUB_URL_AUTHORIZE' => 'https://github.com/login/oauth/authorize',
    'GITHUB_URL_REDIRECT' => 'http://dev.tempq.com/oauth/github/redirect',
    'GITHUB_URL_TOKEN' => 'https://github.com/login/oauth/access_token',
    'GITHUB_CLIENT_ID' => 'PUT_YOUR_CLIENT_ID_HERE',
    'GITHUB_CLIENT_SECRET' => 'PUT_YOUR_CLIENT_SECRET_HERE',
    'GITHUB_USER_AGENT' => 'PUT_YOUR_GITHUB_USERNAME_HERE', // Your username

    // Other Services
    'SCREENSHOTONE_URL' => 'https://api.screenshotone.com',
    'SCREENSHOTONE_API_KEY' => 'PUT_YOUR_API_KEY_HERE',

    'GOOGLE_ANALYTICS_CONFIG' => 'GOOGLE_APPLICATION_CREDENTIALS=/var/www/numbersq/.path-to-the-json-credentials-downloaded-from-google.json',
    'GOOGLE_ANALYTICS_EMAIL' => 'email-provided-by-api@google.com',
];

