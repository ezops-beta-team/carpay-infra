<?php

/**
 * .CAKE-ENV.PHP - Sets Environment Variables for use by CakePHP
 * 
 * This file is in the web user's home folder, like "/home/cpio".
 * 
 * The purpose is to put sensitive info, like database info, in a
 * common file, but it can be shared by all the CakePHP installations
 * for a specific domain.
 * 
 * This is useful to define coding environment specific variables.
 * 
 * This script should get called in each CakePHP's config/bootstrap.php file
 * These variables should be used in each CakePHP's config/app.php file
 * 
 * WARNING: Do NOT put this file or any of its values in version control or logs
 * 
 * WARNING: If you add/remove vars, update the EnvironmentSecurity.php file!
 * 
 * ===============================================================
 * 
 * ENVIRONMENT: cpdev3
 * DOMAIN:      carpaydev3.com
 * DESCRIPTION: Developer #3's testing environment
 */

// UNIT TESTING COMMUNICATIONS

// FIRST & LAST NAME
putenv('CAKE_ENV_FIRST_NAME_FOR_TESTS=ENV_CAKE_ENV_FIRST_NAME_FOR_TESTS');
putenv('CAKE_ENV_LAST_NAME_FOR_TESTS=ENV_CAKE_ENV_LAST_NAME_FOR_TESTS');

// EMAIL ADDRESS (receives test emails)
putenv('CAKE_ENV_EMAIL_ADDRESS_FOR_TESTS=ENV_CAKE_ENV_EMAIL_ADDRESS_FOR_TESTS');

// PHONE NUMBER (receives text messages, etc)
putenv('CAKE_ENV_PHONE_NUMBER_FOR_TESTS=ENV_CAKE_ENV_PHONE_NUMBER_FOR_TESTS');


/**
 * [ PHPUNIT DB HOST ] 
 * 
 * Amazon DB Cluster Endpoint
 * This DB can be used by all our environments
 */

// putenv('CAKE_ENV_PHPUNIT_DB_HOST=db01-my5p7-cluster.cluster-cfdfea6remb7.us-east-1.rds.amazonaws.com');
putenv('CAKE_ENV_PHPUNIT_DB_HOST=ENV_CAKE_ENV_PHPUNIT_DB_HOST');

// PHPUNIT DB USER NAME
putenv('CAKE_ENV_PHPUNIT_DB_USERNAME=ENV_CAKE_ENV_PHPUNIT_DB_USERNAME');

// PHPUNIT DB USER PASSWORD
putenv('CAKE_ENV_PHPUNIT_DB_PASSWORD=ENV_CAKE_ENV_PHPUNIT_DB_PASSWORD');

// PHPUNIT DB NAME  (actually, a prefix now)
putenv('CAKE_ENV_PHPUNIT_DB_NAME=ENV_CAKE_ENV_PHPUNIT_DB_NAME');

// CAKE DEBUG MODE - Only use for development environments!
putenv('CAKE_ENV_DEBUG=ENV_CAKE_ENV_DEBUG');  // 0=OFF, 1=ON


/**
 * [ DEV DB HOST ] 
 * 
 * Amazon DB Cluster Endpoint
 * This DB can be used by all our environments
 */

// putenv('CAKE_ENV_DB_HOST=db01-my5p7-cluster.cluster-cfdfea6remb7.us-east-1.rds.amazonaws.com');
putenv('CAKE_ENV_DB_HOST=ENV_CAKE_ENV_DB_HOST');
putenv('CAKE_ENV_DB_USERNAME=ENV_CAKE_ENV_DB_USERNAME');
putenv('CAKE_ENV_DB_PASSWORD=ENV_CAKE_ENV_DB_PASSWORD');
putenv('CAKE_ENV_DB_NAME=ENV_CAKE_ENV_DB_NAME');


/**
 * [ CAKE SECURITY COOKIE KEY ]
 * 
 * Let's use 64 hex chars (lower-case) - not sure if that's ideal though!
 * Used for encrypting cookie values
 * This is unique to each Linux account (cpio, cpdev1, etc)
 * EXCEPT staging & production should be the same values
 */

putenv('CAKE_ENV_SECURITY_COOKIE_KEY=ENV_CAKE_ENV_SECURITY_COOKIE_KEY');


/** 
 * [ CAKE SECURITY SALT ]
 * 
 * Let's use 64 hex chars (lower-case)
 * This is unique to each Linux account (cpio, cpdev1, etc)
 * EXCEPT staging & production should be the same values
 */

putenv('CAKE_ENV_SECURITY_SALT=ENV_CAKE_ENV_SECURITY_SALT');


/**
 * [ COMMON ENCRYPTION ]
 * 
 * These are unique to each Linux account (cpio, cpdev1, etc)
 * EXCEPT staging & production should be the same values
 * 
 * Scrypt Salt Tail - Gets appended to a User ID, to be used for that user's salt
 * Let's use 6 random letters (lower-case), different in each environment
 */

putenv('CAKE_ENV_COMMON_ENCRYPTION_SCRYPT_SALT_TAIL=ENV_CAKE_ENV_COMMON_ENCRYPTION_SCRYPT_SALT_TAIL');


/**
 * OpenSSL Parameters Raw Key & IV for DB/Files/Forms
 * Let's use 16 random numbers and letters (upper- and lower-case)
 */

putenv('CAKE_ENV_COMMON_ENCRYPTION_OPEN_PARAMS_RAW_KEY_FOR_DB=ENV_CAKE_ENV_COMMON_ENCRYPTION_OPEN_PARAMS_RAW_KEY_FOR_DB');
putenv('CAKE_ENV_COMMON_ENCRYPTION_OPEN_PARAMS_RAW_KEY_FOR_FILES=ENV_CAKE_ENV_COMMON_ENCRYPTION_OPEN_PARAMS_RAW_KEY_FOR_FILES');
putenv('CAKE_ENV_COMMON_ENCRYPTION_OPEN_PARAMS_RAW_KEY_FOR_FORMS=ENV_CAKE_ENV_COMMON_ENCRYPTION_OPEN_PARAMS_RAW_KEY_FOR_FORMS');


/**
 * [ CARD CONNECT MERCHANT TEST ACCOUNT ]
 * This mainly for unit testing; no real accounts are needed here
 * Note: These are the API credentials, not the website credentials
 * All environments use this same account
 */

putenv('CAKE_ENV_CARD_CONNECT_TEST_MERCHANT_USERNAME=ENV_CAKE_ENV_CARD_CONNECT_TEST_MERCHANT_USERNAME');
putenv('CAKE_ENV_CARD_CONNECT_TEST_MERCHANT_PASSWORD=ENV_CAKE_ENV_CARD_CONNECT_TEST_MERCHANT_PASSWORD');
putenv('CAKE_ENV_CARD_CONNECT_TEST_MERCHANT_ID=ENV_CAKE_ENV_CARD_CONNECT_TEST_MERCHANT_ID');


/**
 * [ DEALER SIGNUP TOKEN FOR AUTOMANAGER & WAYNE REAVES ]
 * This is when a dealer's DMS sends him to our website to sign up using URL params
 * The same value is used for all dealers, but it is different for each environment; 16 random hex chars
 */

putenv('CAKE_ENV_DEALER_SIGNUP_TOKEN_THIS_ENV_FOR_AM=ENV_CAKE_ENV_DEALER_SIGNUP_TOKEN_THIS_ENV_FOR_AM');
putenv('CAKE_ENV_DEALER_SIGNUP_TOKEN_THIS_ENV_FOR_WR=ENV_CAKE_ENV_DEALER_SIGNUP_TOKEN_THIS_ENV_FOR_WR');


/**
 * [ CARPAY DMS API KEYS FOR THIS ENVIRONMENT ]
 * 
 * API v1.4: (can be deleted around Sept 2020)
 * KEY NAME (can change in each version)
 */

putenv('CAKE_ENV_CARPAY_DMS_API_V1dot4__API_KEY_HEADER_NAME=ENV_CAKE_ENV_CARPAY_DMS_API_V1dot4__API_KEY_HEADER_NAME');

// AUTOMANAGER & WAYNE REAVES KEY 1 (primary key; 32 hex chars, randomly generated)
putenv('CAKE_ENV_CARPAY_DMS_API_V1dot4__API_KEY_1_THIS_ENV_FOR_AM=ENV_CAKE_ENV_CARPAY_DMS_API_V1dot4__API_KEY_1_THIS_ENV_FOR_AM');
putenv('CAKE_ENV_CARPAY_DMS_API_V1dot4__API_KEY_1_THIS_ENV_FOR_WR=ENV_CAKE_ENV_CARPAY_DMS_API_V1dot4__API_KEY_1_THIS_ENV_FOR_WR');

// AUTOMANAGER & WAYNE REAVES KEY 2 (previous key)
// Leave old key here for 24 hours after creating a new key, then set this to the new key
putenv('CAKE_ENV_CARPAY_DMS_API_V1dot4__API_KEY_2_THIS_ENV_FOR_AM=ENV_CAKE_ENV_CARPAY_DMS_API_V1dot4__API_KEY_2_THIS_ENV_FOR_AM');
putenv('CAKE_ENV_CARPAY_DMS_API_V1dot4__API_KEY_2_THIS_ENV_FOR_WR=ENV_CAKE_ENV_CARPAY_DMS_API_V1dot4__API_KEY_2_THIS_ENV_FOR_WR');

// API v1.5:
// KEY NAME (can change in each version)
putenv('CAKE_ENV_CARPAY_DMS_API_V1dot5__API_KEY_HEADER_NAME=ENV_CAKE_ENV_CARPAY_DMS_API_V1dot5__API_KEY_HEADER_NAME');

// AUTOMANAGER & WAYNE REAVES KEY 1 (primary key; 32 hex chars, randomly generated)
putenv('CAKE_ENV_CARPAY_DMS_API_V1dot5__API_KEY_HEADER_NAME=ENV_CAKE_ENV_CARPAY_DMS_API_V1dot5__API_KEY_HEADER_NAME');
putenv('CAKE_ENV_CARPAY_DMS_API_V1dot5__API_KEY_1_THIS_ENV_FOR_WR=ENV_CAKE_ENV_CARPAY_DMS_API_V1dot5__API_KEY_1_THIS_ENV_FOR_WR');

// AUTOMANAGER & WAYNE REAVES KEY 2 (previous key)
// Leave old key here for 24 hours after creating a new key, then set this to the new key
putenv('CAKE_ENV_CARPAY_DMS_API_V1dot5__API_KEY_2_THIS_ENV_FOR_AM=ENV_CAKE_ENV_CARPAY_DMS_API_V1dot5__API_KEY_2_THIS_ENV_FOR_AM');
putenv('CAKE_ENV_CARPAY_DMS_API_V1dot5__API_KEY_2_THIS_ENV_FOR_WR=ENV_CAKE_ENV_CARPAY_DMS_API_V1dot5__API_KEY_2_THIS_ENV_FOR_WR');


/**
 * [ WEBHOOKS: ]
 * 
 * These are simple calls we make to the DMS company when something happens on our end; no version attached
 * We are including 3 versions of each, so we can pick and choose during testing
 */

// AUTOMANAGER (can change at any time)
putenv('CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_KEY_HEADER_NAME_FOR_AM=ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_KEY_HEADER_NAME_FOR_AM');

// Note: Devs use AM's sandbox keys and URLs
putenv('CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_KEY_THIS_ENV_FOR_AM=' . 'ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_KEY_THIS_ENV_FOR_AM');
putenv('CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_DEALERS_THIS_ENV_FOR_AM=' . 'ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_DEALERS_THIS_ENV_FOR_AM');
putenv('CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_PAYMENTS_THIS_ENV_FOR_AM=' . 'ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_PAYMENTS_THIS_ENV_FOR_AM');

// WAYNE REAVES (can change at any time)
putenv('CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_KEY_HEADER_NAME_FOR_WR=ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_KEY_HEADER_NAME_FOR_WR');

putenv('CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_KEY_SANDBOX_FOR_WR='    . 'ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_KEY_SANDBOX_FOR_WR');
putenv('CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_KEY_PRODUCTION_FOR_WR=' . 'ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_KEY_PRODUCTION_FOR_WR');
putenv('CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_KEY_THIS_ENV_FOR_WR='   . 'ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_KEY_THIS_ENV_FOR_WR');  // different for each developer

putenv('CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_CUSTOMERS_SANDBOX_FOR_WR='    . 'ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_CUSTOMERS_SANDBOX_FOR_WR');
putenv('CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_CUSTOMERS_PRODUCTION_FOR_WR=' . 'ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_CUSTOMERS_PRODUCTION_FOR_WR');
putenv('CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_CUSTOMERS_THIS_ENV_FOR_WR='   . 'ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_CUSTOMERS_THIS_ENV_FOR_WR');

putenv('CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_DEALERS_SANDBOX_FOR_WR='    . 'ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_DEALERS_SANDBOX_FOR_WR');
putenv('CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_DEALERS_PRODUCTION_FOR_WR=' . 'ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_DEALERS_PRODUCTION_FOR_WR');
putenv('CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_DEALERS_THIS_ENV_FOR_WR='   . 'ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_DEALERS_THIS_ENV_FOR_WR');

putenv('CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_PAYMENTS_SANDBOX_FOR_WR='    . 'ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_PAYMENTS_SANDBOX_FOR_WR');
putenv('CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_PAYMENTS_PRODUCTION_FOR_WR=' . 'ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_PAYMENTS_PRODUCTION_FOR_WR');
putenv('CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_PAYMENTS_THIS_ENV_FOR_WR='   . 'ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_PAYMENTS_THIS_ENV_FOR_WR');

// CHARGIFY API KEY & SUBDOMAIN (this is the sandbox one - used for dev too)
putenv('CAKE_ENV_CHARGIFY_API_KEY=ENV_CAKE_ENV_CHARGIFY_API_KEY');
putenv('CAKE_ENV_CHARGIFY_API_SUBDOMAIN=ENV_CAKE_ENV_CHARGIFY_API_SUBDOMAIN');

// EXAVAULT SFTP & API CREDENTIALS (unique to each Linux account)
putenv('CAKE_ENV_EXAVAULT_SFTP_USERNAME=ENV_CAKE_ENV_EXAVAULT_SFTP_USERNAME');
putenv('CAKE_ENV_EXAVAULT_SFTP_PASSWORD=ENV_CAKE_ENV_EXAVAULT_SFTP_PASSWORD');
putenv('CAKE_ENV_EXAVAULT_API_KEY=ENV_CAKE_ENV_EXAVAULT_API_KEY');
putenv('CAKE_ENV_EXAVAULT_API_URL=ENV_CAKE_ENV_EXAVAULT_API_URL');
putenv('CAKE_ENV_EXAVAULT_ACCESS_TOKEN=ENV_CAKE_ENV_EXAVAULT_ACCESS_TOKEN');

// EZ TEXTING API USERNAME & KEY
putenv('CAKE_ENV_EZ_TEXTING_API_USERNAME=ENV_CAKE_ENV_EZ_TEXTING_API_USERNAME');
putenv('CAKE_ENV_EZ_TEXTING_API_KEY=ENV_CAKE_ENV_EZ_TEXTING_API_KEY');


/**
 * [ GITHUB REPO READ-ONLY TOKEN ]
 * 
 * This is a Personal Access Token for our GitHub servers account
 * It is used for cloning releases from GitHub to our server
 * Therefore, dev users do NOT need this right now, but we'll add it for unit testing
 */

putenv('CAKE_ENV_GITHUB_REPO_READ_ONLY_TOKEN=ENV_CAKE_ENV_GITHUB_REPO_READ_ONLY_TOKEN');


/**
 * [ IP BLOCKER WHITE LIST ]
 * 
 * These values are the same in each environment
 * Allow Detectify as many page views as they want, using a special HTTP header
 */

putenv('CAKE_ENV_IP_BLOCKER_WHITELIST_FOR_DETECTIFY_HTTP_HEADER_NAME=ENV_CAKE_ENV_IP_BLOCKER_WHITELIST_FOR_DETECTIFY_HTTP_HEADER_NAME');
putenv('CAKE_ENV_IP_BLOCKER_WHITELIST_FOR_DETECTIFY_HTTP_HEADER_VALUE=ENV_CAKE_ENV_IP_BLOCKER_WHITELIST_FOR_DETECTIFY_HTTP_HEADER_VALUE');

// IVR "API" PASSWORD (for verifying requests from Plum)
// It's the same in all environments for now, so update all of them!
putenv('CAKE_ENV_IVR_API_PASSWORD=ENV_CAKE_ENV_IVR_API_PASSWORD');

// LAMBDA API PASSWORD (for verifying requests from Lambda.)
// It's the same in all environments for now, so update all of them!
putenv('CAKE_ENV_LAMBDA_PW_8194=ENV_CAKE_ENV_LAMBDA_PW_8194');

// MANDRILL EMAIL API KEY
putenv('CAKE_ENV_MANDRILL_EMAIL_API_KEY=ENV_CAKE_ENV_MANDRILL_EMAIL_API_KEY');

// SUPPORT EMAIL PASSWORD (for use with imap)
putenv('CAKE_ENV_SUPPORT_EMAIL_PASSWORD=ENV_CAKE_ENV_SUPPORT_EMAIL_PASSWORD');


/**
 * [ PAYLINE MERCHANT TEST ACCOUNT ]
 * 
 * This mainly for unit testing; no real accounts are needed here
 * All environments use this same account
 */

putenv('CAKE_ENV_PAYLINE_TEST_MERCHANT_USERNAME=ENV_CAKE_ENV_PAYLINE_TEST_MERCHANT_USERNAME');
putenv('CAKE_ENV_PAYLINE_TEST_MERCHANT_PASSWORD=ENV_CAKE_ENV_PAYLINE_TEST_MERCHANT_PASSWORD');
putenv('CAKE_ENV_PAYLINE_TEST_MERCHANT_API_KEY=ENV_CAKE_ENV_PAYLINE_TEST_MERCHANT_API_KEY');


// TWILIO API KEY AND SECRET (same on every environment)
putenv('CAKE_ENV_TWILIO_API_KEY=ENV_CAKE_ENV_TWILIO_API_KEY');
putenv('CAKE_ENV_TWILIO_API_SECRET=ENV_CAKE_ENV_TWILIO_API_SECRET');

// TWILIO USERNAME, PASSWORD, AND FROM PHONE NUMBER (different on every environment)
putenv('CAKE_ENV_TWILIO_USERNAME=ENV_CAKE_ENV_TWILIO_USERNAME');
putenv('CAKE_ENV_TWILIO_PASSWORD=ENV_CAKE_ENV_TWILIO_PASSWORD');
putenv('CAKE_ENV_TWILIO_BASE_PHONE_NUMBER=ENV_CAKE_ENV_TWILIO_BASE_PHONE_NUMBER');

// REMINDER: If you add/remove vars, update the EnvironmentSecurity.php file!