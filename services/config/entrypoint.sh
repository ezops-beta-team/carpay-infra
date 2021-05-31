#!/bin/bash

aws configure set aws_access_key_id $AWS_ACCESS_KEY_ID
aws configure set aws_secret_access_key $AWS_SECRET_ACCESS_KEY
aws configure set default.region $DEFAULT_REGION

sed -i "s|ARG_APP_FOLDER|$APP_FOLDER|g" /etc/nginx/conf.d/default.conf

rm -r $APP_FOLDER/plugins $APP_FOLDER/src/CommonLib $APP_FOLDER/src/Database $APP_FOLDER/src/Log $APP_FOLDER/src/Model 
rm -r $APP_FOLDER/webroot/common $APP_FOLDER/tests/Fixture $APP_FOLDER/tests/TestCase/CommonLib $APP_FOLDER/tests/TestCase/Model $APP_FOLDER/tests/TestCase/Log
rm -r $APP_FOLDER/src/Controller/Component/Common $APP_FOLDER/src/Middleware/Common $APP_FOLDER/src/Template/Element/Common


ln -s ../CakeCommon/plugins $APP_FOLDER/plugins
ln -s ../../CakeCommon/src/CommonLib $APP_FOLDER/src/CommonLib
ln -s ../../CakeCommon/src/Database $APP_FOLDER/src/Database
ln -s ../../CakeCommon/src/Log $APP_FOLDER/src/Log
ln -s ../../CakeCommon/src/Model $APP_FOLDER/src/Model
ln -s ../../CakeCommon/webroot $APP_FOLDER/webroot/common
ln -s ../../CakeCommon/tests/Fixture $APP_FOLDER/tests/Fixture 
ln -s ../../../CakeCommon/tests/TestCase/CommonLib $APP_FOLDER/tests/TestCase/CommonLib
ln -s ../../../CakeCommon/tests/TestCase/Log $APP_FOLDER/tests/TestCase/Log
ln -s ../../../CakeCommon/tests/TestCase/Model $APP_FOLDER/tests/TestCase/Model
ln -s ../../../../CakeCommon/src/Controller/Component/Common $APP_FOLDER/src/Controller/Component/Common
ln -s ../../../CakeCommon/src/Middleware/Common $APP_FOLDER/src/Middleware/Common
ln -s ../../../../CakeCommon/src/Template/Element/Common $APP_FOLDER/src/Template/Element/Common

ln -s /home/cpsandbox/versions/dev /home/cpsandbox/versions/current
ln -s /home/cpsandbox/versions/current/CarPayCakeSites /home/cpsandbox/CarPayCakeSites

php composer_install_Single.php "$APP_FOLDER"

nginx

php-fpm