#!/bin/bash

sed -i "s|ENV_CAKE_ENV_FIRST_NAME_FOR_TESTS|${CAKE_ENV_FIRST_NAME_FOR_TESTS}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_LAST_NAME_FOR_TESTS|${CAKE_ENV_LAST_NAME_FOR_TESTS}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_EMAIL_ADDRESS_FOR_TESTS|${CAKE_ENV_EMAIL_ADDRESS_FOR_TESTS}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_PHONE_NUMBER_FOR_TESTS|${CAKE_ENV_PHONE_NUMBER_FOR_TESTS}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_PHPUNIT_DB_HOST|${CAKE_ENV_PHPUNIT_DB_HOST}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_PHPUNIT_DB_USERNAME|${CAKE_ENV_PHPUNIT_DB_USERNAME}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_PHPUNIT_DB_PASSWORD|${CAKE_ENV_PHPUNIT_DB_PASSWORD}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_PHPUNIT_DB_NAME|${CAKE_ENV_PHPUNIT_DB_NAME}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_DEBUG|${CAKE_ENV_DEBUG}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_DB_HOST|${CAKE_ENV_DB_HOST}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_DB_USERNAME|${CAKE_ENV_DB_USERNAME}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_DB_PASSWORD|${CAKE_ENV_DB_PASSWORD}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_DB_NAME|${CAKE_ENV_DB_NAME}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_SECURITY_COOKIE_KEY|${CAKE_ENV_SECURITY_COOKIE_KEY}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_SECURITY_SALT|${CAKE_ENV_SECURITY_SALT}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_COMMON_ENCRYPTION_SCRYPT_SALT_TAIL|${CAKE_ENV_COMMON_ENCRYPTION_SCRYPT_SALT_TAIL}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_COMMON_ENCRYPTION_OPEN_PARAMS_RAW_KEY_FOR_DB|${CAKE_ENV_COMMON_ENCRYPTION_OPEN_PARAMS_RAW_KEY_FOR_DB}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_COMMON_ENCRYPTION_OPEN_PARAMS_RAW_KEY_FOR_FILES|${CAKE_ENV_COMMON_ENCRYPTION_OPEN_PARAMS_RAW_KEY_FOR_FILES}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_COMMON_ENCRYPTION_OPEN_PARAMS_RAW_KEY_FOR_FORMS|${CAKE_ENV_COMMON_ENCRYPTION_OPEN_PARAMS_RAW_KEY_FOR_FORMS}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CARD_CONNECT_TEST_MERCHANT_USERNAME|${CAKE_ENV_CARD_CONNECT_TEST_MERCHANT_USERNAME}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CARD_CONNECT_TEST_MERCHANT_PASSWORD|${CAKE_ENV_CARD_CONNECT_TEST_MERCHANT_PASSWORD}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CARD_CONNECT_TEST_MERCHANT_ID|${CAKE_ENV_CARD_CONNECT_TEST_MERCHANT_ID}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_DEALER_SIGNUP_TOKEN_THIS_ENV_FOR_AM|${CAKE_ENV_DEALER_SIGNUP_TOKEN_THIS_ENV_FOR_AM}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_DEALER_SIGNUP_TOKEN_THIS_ENV_FOR_WR|${CAKE_ENV_DEALER_SIGNUP_TOKEN_THIS_ENV_FOR_WR}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CARPAY_DMS_API_V1dot4__API_KEY_HEADER_NAME|${CAKE_ENV_CARPAY_DMS_API_V1dot4__API_KEY_HEADER_NAME}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CARPAY_DMS_API_V1dot4__API_KEY_1_THIS_ENV_FOR_AM|${CAKE_ENV_CARPAY_DMS_API_V1dot4__API_KEY_1_THIS_ENV_FOR_AM}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CARPAY_DMS_API_V1dot4__API_KEY_1_THIS_ENV_FOR_WR|${CAKE_ENV_CARPAY_DMS_API_V1dot4__API_KEY_1_THIS_ENV_FOR_WR}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CARPAY_DMS_API_V1dot4__API_KEY_2_THIS_ENV_FOR_AM|${CAKE_ENV_CARPAY_DMS_API_V1dot4__API_KEY_2_THIS_ENV_FOR_AM}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CARPAY_DMS_API_V1dot4__API_KEY_2_THIS_ENV_FOR_WR|${CAKE_ENV_CARPAY_DMS_API_V1dot4__API_KEY_2_THIS_ENV_FOR_WR}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CARPAY_DMS_API_V1dot5__API_KEY_HEADER_NAME|${CAKE_ENV_CARPAY_DMS_API_V1dot5__API_KEY_HEADER_NAME}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CARPAY_DMS_API_V1dot5__API_KEY_1_THIS_ENV_FOR_AM|${CAKE_ENV_CARPAY_DMS_API_V1dot5__API_KEY_1_THIS_ENV_FOR_AM}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CARPAY_DMS_API_V1dot5__API_KEY_1_THIS_ENV_FOR_WR|${CAKE_ENV_CARPAY_DMS_API_V1dot5__API_KEY_1_THIS_ENV_FOR_WR}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CARPAY_DMS_API_V1dot5__API_KEY_2_THIS_ENV_FOR_AM|${CAKE_ENV_CARPAY_DMS_API_V1dot5__API_KEY_2_THIS_ENV_FOR_AM}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CARPAY_DMS_API_V1dot5__API_KEY_2_THIS_ENV_FOR_WR|${CAKE_ENV_CARPAY_DMS_API_V1dot5__API_KEY_2_THIS_ENV_FOR_WR}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_KEY_HEADER_NAME_FOR_AM|${CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_KEY_HEADER_NAME_FOR_AM}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_KEY_THIS_ENV_FOR_AM|${CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_KEY_THIS_ENV_FOR_AM}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_DEALERS_THIS_ENV_FOR_AM|${CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_DEALERS_THIS_ENV_FOR_AM}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_PAYMENTS_THIS_ENV_FOR_AM|${CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_PAYMENTS_THIS_ENV_FOR_AM}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_KEY_HEADER_NAME_FOR_WR|${CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_KEY_HEADER_NAME_FOR_WR}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_KEY_SANDBOX_FOR_WR|${CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_KEY_SANDBOX_FOR_WR}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_KEY_PRODUCTION_FOR_WR|${CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_KEY_PRODUCTION_FOR_WR}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_KEY_THIS_ENV_FOR_WR|${CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_KEY_THIS_ENV_FOR_WR}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_CUSTOMERS_SANDBOX_FOR_WR|${CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_CUSTOMERS_SANDBOX_FOR_WR}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_CUSTOMERS_PRODUCTION_FOR_WR|${CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_CUSTOMERS_PRODUCTION_FOR_WR}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_CUSTOMERS_THIS_ENV_FOR_WR|${CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_CUSTOMERS_THIS_ENV_FOR_WR}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_DEALERS_SANDBOX_FOR_WR|${CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_DEALERS_SANDBOX_FOR_WR}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_DEALERS_PRODUCTION_FOR_WR|${CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_DEALERS_PRODUCTION_FOR_WR}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_DEALERS_THIS_ENV_FOR_WR|${CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_DEALERS_THIS_ENV_FOR_WR}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_PAYMENTS_SANDBOX_FOR_WR|${CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_PAYMENTS_SANDBOX_FOR_WR}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_PAYMENTS_PRODUCTION_FOR_WR|${CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_PAYMENTS_PRODUCTION_FOR_WR}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_PAYMENTS_THIS_ENV_FOR_WR|${CAKE_ENV_CARPAY_DMS_API__WEBHOOKS_URL_PAYMENTS_THIS_ENV_FOR_WR}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CHARGIFY_API_KEY|${CAKE_ENV_CHARGIFY_API_KEY}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_CHARGIFY_API_SUBDOMAIN|${CAKE_ENV_CHARGIFY_API_SUBDOMAIN}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_EXAVAULT_SFTP_USERNAME|${CAKE_ENV_EXAVAULT_SFTP_USERNAME}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_EXAVAULT_SFTP_PASSWORD|${CAKE_ENV_EXAVAULT_SFTP_PASSWORD}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_EXAVAULT_API_KEY|${CAKE_ENV_EXAVAULT_API_KEY}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_EXAVAULT_API_URL|${CAKE_ENV_EXAVAULT_API_URL}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_EXAVAULT_ACCESS_TOKEN|${CAKE_ENV_EXAVAULT_ACCESS_TOKEN}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_EZ_TEXTING_API_USERNAME|${CAKE_ENV_EZ_TEXTING_API_USERNAME}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_EZ_TEXTING_API_KEY|${CAKE_ENV_EZ_TEXTING_API_KEY}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_GITHUB_REPO_READ_ONLY_TOKEN|${CAKE_ENV_GITHUB_REPO_READ_ONLY_TOKEN}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_IP_BLOCKER_WHITELIST_FOR_DETECTIFY_HTTP_HEADER_NAME|${CAKE_ENV_IP_BLOCKER_WHITELIST_FOR_DETECTIFY_HTTP_HEADER_NAME}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_IP_BLOCKER_WHITELIST_FOR_DETECTIFY_HTTP_HEADER_VALUE|${CAKE_ENV_IP_BLOCKER_WHITELIST_FOR_DETECTIFY_HTTP_HEADER_VALUE}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_IVR_API_PASSWORD|${CAKE_ENV_IVR_API_PASSWORD}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_LAMBDA_PW_8194|${CAKE_ENV_LAMBDA_PW_8194}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_MANDRILL_EMAIL_API_KEY|${CAKE_ENV_MANDRILL_EMAIL_API_KEY}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_SUPPORT_EMAIL_PASSWORD|${CAKE_ENV_SUPPORT_EMAIL_PASSWORD}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_PAYLINE_TEST_MERCHANT_USERNAME|${CAKE_ENV_PAYLINE_TEST_MERCHANT_USERNAME}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_PAYLINE_TEST_MERCHANT_PASSWORD|${CAKE_ENV_PAYLINE_TEST_MERCHANT_PASSWORD}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_PAYLINE_TEST_MERCHANT_API_KEY|${CAKE_ENV_PAYLINE_TEST_MERCHANT_API_KEY}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_TWILIO_API_KEY|${CAKE_ENV_TWILIO_API_KEY}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_TWILIO_API_SECRET|${CAKE_ENV_TWILIO_API_SECRET}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_TWILIO_USERNAME|${CAKE_ENV_TWILIO_USERNAME}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_TWILIO_PASSWORD|${CAKE_ENV_TWILIO_PASSWORD}|g" ./.cake-env.php
sed -i "s|ENV_CAKE_ENV_TWILIO_BASE_PHONE_NUMBER|${CAKE_ENV_TWILIO_BASE_PHONE_NUMBER}|g" ./.cake-env.php