<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-27 03:42:59 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH/classes/Controller/Bidule.php [ 8 ] in file:line
2014-11-27 03:42:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 03:43:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH/classes/Controller/Bidule.php [ 8 ] in file:line
2014-11-27 03:43:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 05:02:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$options' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Posts.php [ 4 ] in file:line
2014-11-27 05:02:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 05:03:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$options' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Posts.php [ 4 ] in file:line
2014-11-27 05:03:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 05:03:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$options' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Posts.php [ 4 ] in file:line
2014-11-27 05:03:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 05:05:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$options' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Posts.php [ 4 ] in file:line
2014-11-27 05:05:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 05:05:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'show' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH/classes/Controller/Posts.php [ 45 ] in file:line
2014-11-27 05:05:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 05:06:02 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$loginString' (T_VARIABLE) ~ APPPATH/classes/Controller/Posts.php [ 49 ] in file:line
2014-11-27 05:06:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 05:06:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Helper_Database' not found ~ APPPATH/classes/Model/BlogOptions.php [ 8 ] in file:line
2014-11-27 05:06:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 05:07:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Helper_Database' not found ~ APPPATH/classes/Model/BlogOptions.php [ 8 ] in file:line
2014-11-27 05:07:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 05:07:08 --- EMERGENCY: ErrorException [ 1 ]: Class 'Helper_Database' not found ~ APPPATH/classes/Model/BlogOptions.php [ 8 ] in file:line
2014-11-27 05:07:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 05:07:34 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, null given ~ APPPATH/classes/Helper/Config.php [ 33 ] in file:line
2014-11-27 05:07:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/home/wap20/sit...', 33, Array)
#1 /home/wap20/sites/kohana/application/classes/Helper/Config.php(33): array_key_exists('database', NULL)
#2 /home/wap20/sites/kohana/application/classes/Helper/Database.php(8): Helper_Config->get('dbname', 'database')
#3 /home/wap20/sites/kohana/application/classes/Model/BlogOptions.php(8): Helper_Database->__construct('config.ini')
#4 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(14): Model_BlogOptions->__construct()
#5 [internal function]: Controller_Posts->__construct(Object(Request), Object(Response))
#6 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#7 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-11-27 05:14:01 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, null given ~ APPPATH/classes/Helper/Config.php [ 33 ] in file:line
2014-11-27 05:14:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/home/wap20/sit...', 33, Array)
#1 /home/wap20/sites/kohana/application/classes/Helper/Config.php(33): array_key_exists('database', NULL)
#2 /home/wap20/sites/kohana/application/classes/Helper/Database.php(8): Helper_Config->get('dbname', 'database')
#3 /home/wap20/sites/kohana/application/classes/Model/BlogOptions.php(8): Helper_Database->__construct('/kohana/applica...')
#4 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(14): Model_BlogOptions->__construct()
#5 [internal function]: Controller_Posts->__construct(Object(Request), Object(Response))
#6 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#7 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-11-27 05:14:02 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, null given ~ APPPATH/classes/Helper/Config.php [ 33 ] in file:line
2014-11-27 05:14:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/home/wap20/sit...', 33, Array)
#1 /home/wap20/sites/kohana/application/classes/Helper/Config.php(33): array_key_exists('database', NULL)
#2 /home/wap20/sites/kohana/application/classes/Helper/Database.php(8): Helper_Config->get('dbname', 'database')
#3 /home/wap20/sites/kohana/application/classes/Model/BlogOptions.php(8): Helper_Database->__construct('/kohana/applica...')
#4 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(14): Model_BlogOptions->__construct()
#5 [internal function]: Controller_Posts->__construct(Object(Request), Object(Response))
#6 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#7 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-11-27 05:14:47 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, null given ~ APPPATH/classes/Helper/Config.php [ 33 ] in file:line
2014-11-27 05:14:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/home/wap20/sit...', 33, Array)
#1 /home/wap20/sites/kohana/application/classes/Helper/Config.php(33): array_key_exists('database', NULL)
#2 /home/wap20/sites/kohana/application/classes/Helper/Database.php(8): Helper_Config->get('dbname', 'database')
#3 /home/wap20/sites/kohana/application/classes/Model/BlogOptions.php(8): Helper_Database->__construct('/kohana/applica...')
#4 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(14): Model_BlogOptions->__construct()
#5 [internal function]: Controller_Posts->__construct(Object(Request), Object(Response))
#6 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#7 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-11-27 05:17:31 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, null given ~ APPPATH/classes/Helper/Config.php [ 33 ] in file:line
2014-11-27 05:17:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/home/wap20/sit...', 33, Array)
#1 /home/wap20/sites/kohana/application/classes/Helper/Config.php(33): array_key_exists('database', NULL)
#2 /home/wap20/sites/kohana/application/classes/Helper/Database.php(8): Helper_Config->get('dbname', 'database')
#3 /home/wap20/sites/kohana/application/classes/Model/BlogOptions.php(8): Helper_Database->__construct('/kohana/applica...')
#4 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(14): Model_BlogOptions->__construct()
#5 [internal function]: Controller_Posts->__construct(Object(Request), Object(Response))
#6 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#7 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-11-27 05:18:53 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, null given ~ APPPATH/classes/Helper/Config.php [ 33 ] in file:line
2014-11-27 05:18:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/home/wap20/sit...', 33, Array)
#1 /home/wap20/sites/kohana/application/classes/Helper/Config.php(33): array_key_exists('database', NULL)
#2 /home/wap20/sites/kohana/application/classes/Helper/Database.php(8): Helper_Config->get('dbname', 'database')
#3 /home/wap20/sites/kohana/application/classes/Model/BlogOptions.php(8): Helper_Database->__construct('/kohana/index.p...')
#4 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(14): Model_BlogOptions->__construct()
#5 [internal function]: Controller_Posts->__construct(Object(Request), Object(Response))
#6 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#7 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-11-27 05:18:58 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, null given ~ APPPATH/classes/Helper/Config.php [ 33 ] in file:line
2014-11-27 05:18:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/home/wap20/sit...', 33, Array)
#1 /home/wap20/sites/kohana/application/classes/Helper/Config.php(33): array_key_exists('database', NULL)
#2 /home/wap20/sites/kohana/application/classes/Helper/Database.php(8): Helper_Config->get('dbname', 'database')
#3 /home/wap20/sites/kohana/application/classes/Model/BlogOptions.php(8): Helper_Database->__construct('/kohana/index.p...')
#4 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(14): Model_BlogOptions->__construct()
#5 [internal function]: Controller_Posts->__construct(Object(Request), Object(Response))
#6 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#7 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-11-27 05:20:11 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, null given ~ APPPATH/classes/Helper/Config.php [ 33 ] in file:line
2014-11-27 05:20:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/home/wap20/sit...', 33, Array)
#1 /home/wap20/sites/kohana/application/classes/Helper/Config.php(33): array_key_exists('database', NULL)
#2 /home/wap20/sites/kohana/application/classes/Helper/Database.php(8): Helper_Config->get('dbname', 'database')
#3 /home/wap20/sites/kohana/application/classes/Model/BlogOptions.php(8): Helper_Database->__construct('localhost//koha...')
#4 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(14): Model_BlogOptions->__construct()
#5 [internal function]: Controller_Posts->__construct(Object(Request), Object(Response))
#6 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#7 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-11-27 05:20:12 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, null given ~ APPPATH/classes/Helper/Config.php [ 33 ] in file:line
2014-11-27 05:20:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/home/wap20/sit...', 33, Array)
#1 /home/wap20/sites/kohana/application/classes/Helper/Config.php(33): array_key_exists('database', NULL)
#2 /home/wap20/sites/kohana/application/classes/Helper/Database.php(8): Helper_Config->get('dbname', 'database')
#3 /home/wap20/sites/kohana/application/classes/Model/BlogOptions.php(8): Helper_Database->__construct('localhost//koha...')
#4 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(14): Model_BlogOptions->__construct()
#5 [internal function]: Controller_Posts->__construct(Object(Request), Object(Response))
#6 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#7 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-11-27 05:20:18 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, null given ~ APPPATH/classes/Helper/Config.php [ 33 ] in file:line
2014-11-27 05:20:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/home/wap20/sit...', 33, Array)
#1 /home/wap20/sites/kohana/application/classes/Helper/Config.php(33): array_key_exists('database', NULL)
#2 /home/wap20/sites/kohana/application/classes/Helper/Database.php(8): Helper_Config->get('dbname', 'database')
#3 /home/wap20/sites/kohana/application/classes/Model/BlogOptions.php(8): Helper_Database->__construct('localhost/kohan...')
#4 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(14): Model_BlogOptions->__construct()
#5 [internal function]: Controller_Posts->__construct(Object(Request), Object(Response))
#6 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#7 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-11-27 05:21:26 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, null given ~ APPPATH/classes/Helper/Config.php [ 33 ] in file:line
2014-11-27 05:21:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/home/wap20/sit...', 33, Array)
#1 /home/wap20/sites/kohana/application/classes/Helper/Config.php(33): array_key_exists('database', NULL)
#2 /home/wap20/sites/kohana/application/classes/Helper/Database.php(8): Helper_Config->get('dbname', 'database')
#3 /home/wap20/sites/kohana/application/classes/Model/BlogOptions.php(8): Helper_Database->__construct('/kohana/applica...')
#4 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(14): Model_BlogOptions->__construct()
#5 [internal function]: Controller_Posts->__construct(Object(Request), Object(Response))
#6 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#7 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-11-27 05:24:57 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, null given ~ APPPATH/classes/Helper/Config.php [ 33 ] in file:line
2014-11-27 05:24:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/home/wap20/sit...', 33, Array)
#1 /home/wap20/sites/kohana/application/classes/Helper/Config.php(33): array_key_exists('database', NULL)
#2 /home/wap20/sites/kohana/application/classes/Helper/Database.php(8): Helper_Config->get('dbname', 'database')
#3 /home/wap20/sites/kohana/application/classes/Model/PostManager.php(15): Helper_Database->__construct('/kohana/applica...')
#4 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(17): Model_PostManager->__construct(5)
#5 [internal function]: Controller_Posts->__construct(Object(Request), Object(Response))
#6 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#7 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-11-27 05:25:03 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, null given ~ APPPATH/classes/Helper/Config.php [ 33 ] in file:line
2014-11-27 05:25:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/home/wap20/sit...', 33, Array)
#1 /home/wap20/sites/kohana/application/classes/Helper/Config.php(33): array_key_exists('database', NULL)
#2 /home/wap20/sites/kohana/application/classes/Helper/Database.php(8): Helper_Config->get('dbname', 'database')
#3 /home/wap20/sites/kohana/application/classes/Model/PostManager.php(15): Helper_Database->__construct('/kohana/applica...')
#4 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(17): Model_PostManager->__construct(5)
#5 [internal function]: Controller_Posts->__construct(Object(Request), Object(Response))
#6 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#7 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-11-27 05:25:53 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2014-11-27 05:25:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 05:27:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH/classes/Controller/Posts.php [ 27 ] in /home/wap20/sites/kohana/application/classes/Controller/Posts.php:27
2014-11-27 05:27:01 --- DEBUG: #0 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap20/sit...', 27, Array)
#1 /home/wap20/sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Posts->action_page()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Posts))
#4 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap20/sites/kohana/application/classes/Controller/Posts.php:27
2014-11-27 05:27:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: templateName ~ APPPATH/classes/Controller/Posts.php [ 48 ] in /home/wap20/sites/kohana/application/classes/Controller/Posts.php:48
2014-11-27 05:27:19 --- DEBUG: #0 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap20/sit...', 48, Array)
#1 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(28): Controller_Posts->show()
#2 /home/wap20/sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Posts->action_page()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Posts))
#5 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/wap20/sites/kohana/application/classes/Controller/Posts.php:48
2014-11-27 05:27:38 --- EMERGENCY: View_Exception [ 0 ]: The requested view templates/default/body.php could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/wap20/sites/kohana/system/classes/Kohana/View.php:137
2014-11-27 05:27:38 --- DEBUG: #0 /home/wap20/sites/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('templates/defau...')
#1 /home/wap20/sites/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('templates/defau...', NULL)
#2 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(48): Kohana_View::factory('templates/defau...')
#3 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(28): Controller_Posts->show()
#4 /home/wap20/sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Posts->action_page()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Posts))
#7 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /home/wap20/sites/kohana/system/classes/Kohana/View.php:137
2014-11-27 05:28:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/templates/default/body.php [ 1 ] in file:line
2014-11-27 05:28:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 05:28:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: templateName ~ APPPATH/views/templates/default/body.php [ 1 ] in /home/wap20/sites/kohana/application/views/templates/default/body.php:1
2014-11-27 05:28:38 --- DEBUG: #0 /home/wap20/sites/kohana/application/views/templates/default/body.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap20/sit...', 1, Array)
#1 /home/wap20/sites/kohana/system/classes/Kohana/View.php(61): include('/home/wap20/sit...')
#2 /home/wap20/sites/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap20/sit...', Array)
#3 /home/wap20/sites/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap20/sites/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(67): Kohana_Response->body(Object(View))
#6 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(28): Controller_Posts->show()
#7 /home/wap20/sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Posts->action_page()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Posts))
#10 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#13 {main} in /home/wap20/sites/kohana/application/views/templates/default/body.php:1
2014-11-27 05:29:03 --- EMERGENCY: ErrorException [ 2 ]: include(content/templates/default/header.phtml): failed to open stream: No such file or directory ~ APPPATH/views/templates/default/body.php [ 1 ] in /home/wap20/sites/kohana/application/views/templates/default/body.php:1
2014-11-27 05:29:03 --- DEBUG: #0 /home/wap20/sites/kohana/application/views/templates/default/body.php(1): Kohana_Core::error_handler(2, 'include(content...', '/home/wap20/sit...', 1, Array)
#1 /home/wap20/sites/kohana/application/views/templates/default/body.php(1): include()
#2 /home/wap20/sites/kohana/system/classes/Kohana/View.php(61): include('/home/wap20/sit...')
#3 /home/wap20/sites/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap20/sit...', Array)
#4 /home/wap20/sites/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/wap20/sites/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#6 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(68): Kohana_Response->body(Object(View))
#7 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(28): Controller_Posts->show()
#8 /home/wap20/sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Posts->action_page()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Posts))
#11 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /home/wap20/sites/kohana/application/views/templates/default/body.php:1
2014-11-27 05:37:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: options ~ APPPATH/views/templates/default/body.php [ 12 ] in /home/wap20/sites/kohana/application/views/templates/default/body.php:12
2014-11-27 05:37:25 --- DEBUG: #0 /home/wap20/sites/kohana/application/views/templates/default/body.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap20/sit...', 12, Array)
#1 /home/wap20/sites/kohana/system/classes/Kohana/View.php(61): include('/home/wap20/sit...')
#2 /home/wap20/sites/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap20/sit...', Array)
#3 /home/wap20/sites/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap20/sites/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(68): Kohana_Response->body(Object(View))
#6 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(28): Controller_Posts->show()
#7 /home/wap20/sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Posts->action_page()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Posts))
#10 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#13 {main} in /home/wap20/sites/kohana/application/views/templates/default/body.php:12
2014-11-27 05:37:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Posts::$option ~ APPPATH/classes/Controller/Posts.php [ 68 ] in /home/wap20/sites/kohana/application/classes/Controller/Posts.php:68
2014-11-27 05:37:35 --- DEBUG: #0 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(68): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/wap20/sit...', 68, Array)
#1 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(28): Controller_Posts->show()
#2 /home/wap20/sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Posts->action_page()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Posts))
#5 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/wap20/sites/kohana/application/classes/Controller/Posts.php:68
2014-11-27 05:37:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: postManager ~ APPPATH/views/templates/default/body.php [ 27 ] in /home/wap20/sites/kohana/application/views/templates/default/body.php:27
2014-11-27 05:37:45 --- DEBUG: #0 /home/wap20/sites/kohana/application/views/templates/default/body.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap20/sit...', 27, Array)
#1 /home/wap20/sites/kohana/system/classes/Kohana/View.php(61): include('/home/wap20/sit...')
#2 /home/wap20/sites/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap20/sit...', Array)
#3 /home/wap20/sites/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap20/sites/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(69): Kohana_Response->body(Object(View))
#6 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(28): Controller_Posts->show()
#7 /home/wap20/sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Posts->action_page()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Posts))
#10 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#13 {main} in /home/wap20/sites/kohana/application/views/templates/default/body.php:27
2014-11-27 05:38:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: tagManager ~ APPPATH/views/templates/default/body.php [ 43 ] in /home/wap20/sites/kohana/application/views/templates/default/body.php:43
2014-11-27 05:38:10 --- DEBUG: #0 /home/wap20/sites/kohana/application/views/templates/default/body.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap20/sit...', 43, Array)
#1 /home/wap20/sites/kohana/system/classes/Kohana/View.php(61): include('/home/wap20/sit...')
#2 /home/wap20/sites/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap20/sit...', Array)
#3 /home/wap20/sites/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap20/sites/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(70): Kohana_Response->body(Object(View))
#6 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(28): Controller_Posts->show()
#7 /home/wap20/sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Posts->action_page()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Posts))
#10 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#13 {main} in /home/wap20/sites/kohana/application/views/templates/default/body.php:43
2014-11-27 05:39:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: tagManager ~ APPPATH/views/templates/default/body.php [ 43 ] in /home/wap20/sites/kohana/application/views/templates/default/body.php:43
2014-11-27 05:39:02 --- DEBUG: #0 /home/wap20/sites/kohana/application/views/templates/default/body.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap20/sit...', 43, Array)
#1 /home/wap20/sites/kohana/system/classes/Kohana/View.php(61): include('/home/wap20/sit...')
#2 /home/wap20/sites/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap20/sit...', Array)
#3 /home/wap20/sites/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap20/sites/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(70): Kohana_Response->body(Object(View))
#6 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(28): Controller_Posts->show()
#7 /home/wap20/sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Posts->action_page()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Posts))
#10 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#13 {main} in /home/wap20/sites/kohana/application/views/templates/default/body.php:43
2014-11-27 05:39:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: commentManager ~ APPPATH/views/templates/default/body.php [ 53 ] in /home/wap20/sites/kohana/application/views/templates/default/body.php:53
2014-11-27 05:39:05 --- DEBUG: #0 /home/wap20/sites/kohana/application/views/templates/default/body.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap20/sit...', 53, Array)
#1 /home/wap20/sites/kohana/system/classes/Kohana/View.php(61): include('/home/wap20/sit...')
#2 /home/wap20/sites/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap20/sit...', Array)
#3 /home/wap20/sites/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap20/sites/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(72): Kohana_Response->body(Object(View))
#6 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(28): Controller_Posts->show()
#7 /home/wap20/sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Posts->action_page()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Posts))
#10 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#13 {main} in /home/wap20/sites/kohana/application/views/templates/default/body.php:53
2014-11-27 07:07:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/classes/Controller/Posts.php [ 34 ] in /home/wap20/sites/kohana/application/classes/Controller/Posts.php:34
2014-11-27 07:07:50 --- DEBUG: #0 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(34): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap20/sit...', 34, Array)
#1 /home/wap20/sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Posts->action_id()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Posts))
#4 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap20/sites/kohana/application/classes/Controller/Posts.php:34
2014-11-27 07:08:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/views/templates/default/body.php [ 86 ] in /home/wap20/sites/kohana/application/views/templates/default/body.php:86
2014-11-27 07:08:32 --- DEBUG: #0 /home/wap20/sites/kohana/application/views/templates/default/body.php(86): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap20/sit...', 86, Array)
#1 /home/wap20/sites/kohana/system/classes/Kohana/View.php(61): include('/home/wap20/sit...')
#2 /home/wap20/sites/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap20/sit...', Array)
#3 /home/wap20/sites/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap20/sites/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(74): Kohana_Response->body(Object(View))
#6 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(35): Controller_Posts->show()
#7 /home/wap20/sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Posts->action_id()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Posts))
#10 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#13 {main} in /home/wap20/sites/kohana/application/views/templates/default/body.php:86
2014-11-27 07:52:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::header() ~ APPPATH/classes/Controller/Ajax.php [ 11 ] in file:line
2014-11-27 07:52:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 07:53:52 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function sendBack() ~ APPPATH/classes/Controller/Ajax.php [ 17 ] in file:line
2014-11-27 07:53:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 08:49:59 --- EMERGENCY: View_Exception [ 0 ]: The requested view loginform could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/wap20/sites/kohana/system/classes/Kohana/View.php:137
2014-11-27 08:49:59 --- DEBUG: #0 /home/wap20/sites/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('loginform')
#1 /home/wap20/sites/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('loginform', NULL)
#2 /home/wap20/sites/kohana/application/classes/Controller/User.php(64): Kohana_View::factory('loginform')
#3 /home/wap20/sites/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap20/sites/kohana/system/classes/Kohana/View.php:137
2014-11-27 08:56:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/Admin.php [ 15 ] in file:line
2014-11-27 08:56:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 08:57:26 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Admin.php [ 16 ] in file:line
2014-11-27 08:57:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 08:58:00 --- EMERGENCY: ErrorException [ 2 ]: scandir(content/images/): failed to open dir: No such file or directory ~ APPPATH/classes/Controller/Admin.php [ 26 ] in file:line
2014-11-27 08:58:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'scandir(content...', '/home/wap20/sit...', 26, Array)
#1 /home/wap20/sites/kohana/application/classes/Controller/Admin.php(26): scandir('content/images/', 0)
#2 /home/wap20/sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin->action_main()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-11-27 08:58:23 --- EMERGENCY: ErrorException [ 2 ]: scandir(content/images/): failed to open dir: No such file or directory ~ APPPATH/classes/Controller/Admin.php [ 26 ] in file:line
2014-11-27 08:58:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'scandir(content...', '/home/wap20/sit...', 26, Array)
#1 /home/wap20/sites/kohana/application/classes/Controller/Admin.php(26): scandir('content/images/', 0)
#2 /home/wap20/sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin->action_main()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-11-27 08:59:35 --- EMERGENCY: ErrorException [ 2 ]: scandir(/kohana/assets/images/posts/): failed to open dir: No such file or directory ~ APPPATH/classes/Controller/Admin.php [ 26 ] in file:line
2014-11-27 08:59:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'scandir(/kohana...', '/home/wap20/sit...', 26, Array)
#1 /home/wap20/sites/kohana/application/classes/Controller/Admin.php(26): scandir('/kohana/assets/...', 0)
#2 /home/wap20/sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin->action_main()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-11-27 09:00:24 --- EMERGENCY: ErrorException [ 2 ]: scandir(content/templates): failed to open dir: No such file or directory ~ APPPATH/classes/Controller/Admin.php [ 33 ] in file:line
2014-11-27 09:00:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'scandir(content...', '/home/wap20/sit...', 33, Array)
#1 /home/wap20/sites/kohana/application/classes/Controller/Admin.php(33): scandir('content/templat...', 0)
#2 /home/wap20/sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin->action_main()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-11-27 09:01:16 --- EMERGENCY: ErrorException [ 2 ]: scandir(content/templates): failed to open dir: No such file or directory ~ APPPATH/classes/Controller/Admin.php [ 33 ] in file:line
2014-11-27 09:01:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'scandir(content...', '/home/wap20/sit...', 33, Array)
#1 /home/wap20/sites/kohana/application/classes/Controller/Admin.php(33): scandir('content/templat...', 0)
#2 /home/wap20/sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin->action_main()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-11-27 09:02:36 --- EMERGENCY: ErrorException [ 2 ]: include(admin/admin.phtml): failed to open stream: No such file or directory ~ APPPATH/classes/Controller/Admin.php [ 70 ] in /home/wap20/sites/kohana/application/classes/Controller/Admin.php:70
2014-11-27 09:02:36 --- DEBUG: #0 /home/wap20/sites/kohana/application/classes/Controller/Admin.php(70): Kohana_Core::error_handler(2, 'include(admin/a...', '/home/wap20/sit...', 70, Array)
#1 /home/wap20/sites/kohana/application/classes/Controller/Admin.php(70): Controller_Admin::action_main()
#2 /home/wap20/sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin->action_main()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/wap20/sites/kohana/application/classes/Controller/Admin.php:70
2014-11-27 09:06:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: postId ~ APPPATH/views/admin/admin.php [ 10 ] in /home/wap20/sites/kohana/application/views/admin/admin.php:10
2014-11-27 09:06:01 --- DEBUG: #0 /home/wap20/sites/kohana/application/views/admin/admin.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap20/sit...', 10, Array)
#1 /home/wap20/sites/kohana/system/classes/Kohana/View.php(61): include('/home/wap20/sit...')
#2 /home/wap20/sites/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap20/sit...', Array)
#3 /home/wap20/sites/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap20/sites/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap20/sites/kohana/application/classes/Controller/Admin.php(71): Kohana_Response->body(Object(View))
#6 /home/wap20/sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin->action_main()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#9 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap20/sites/kohana/application/views/admin/admin.php:10
2014-11-27 09:06:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: loginString ~ APPPATH/views/admin/admin.php [ 19 ] in /home/wap20/sites/kohana/application/views/admin/admin.php:19
2014-11-27 09:06:17 --- DEBUG: #0 /home/wap20/sites/kohana/application/views/admin/admin.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap20/sit...', 19, Array)
#1 /home/wap20/sites/kohana/system/classes/Kohana/View.php(61): include('/home/wap20/sit...')
#2 /home/wap20/sites/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap20/sit...', Array)
#3 /home/wap20/sites/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap20/sites/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap20/sites/kohana/application/classes/Controller/Admin.php(73): Kohana_Response->body(Object(View))
#6 /home/wap20/sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin->action_main()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#9 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap20/sites/kohana/application/views/admin/admin.php:19
2014-11-27 09:06:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: tagsString ~ APPPATH/views/admin/admin.php [ 62 ] in /home/wap20/sites/kohana/application/views/admin/admin.php:62
2014-11-27 09:06:40 --- DEBUG: #0 /home/wap20/sites/kohana/application/views/admin/admin.php(62): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap20/sit...', 62, Array)
#1 /home/wap20/sites/kohana/system/classes/Kohana/View.php(61): include('/home/wap20/sit...')
#2 /home/wap20/sites/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap20/sit...', Array)
#3 /home/wap20/sites/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap20/sites/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap20/sites/kohana/application/classes/Controller/Admin.php(74): Kohana_Response->body(Object(View))
#6 /home/wap20/sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin->action_main()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#9 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap20/sites/kohana/application/views/admin/admin.php:62
2014-11-27 09:06:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: imagesString ~ APPPATH/views/admin/admin.php [ 72 ] in /home/wap20/sites/kohana/application/views/admin/admin.php:72
2014-11-27 09:06:56 --- DEBUG: #0 /home/wap20/sites/kohana/application/views/admin/admin.php(72): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap20/sit...', 72, Array)
#1 /home/wap20/sites/kohana/system/classes/Kohana/View.php(61): include('/home/wap20/sit...')
#2 /home/wap20/sites/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap20/sit...', Array)
#3 /home/wap20/sites/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap20/sites/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap20/sites/kohana/application/classes/Controller/Admin.php(75): Kohana_Response->body(Object(View))
#6 /home/wap20/sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin->action_main()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#9 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap20/sites/kohana/application/views/admin/admin.php:72
2014-11-27 09:07:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: postsString ~ APPPATH/views/admin/admin.php [ 91 ] in /home/wap20/sites/kohana/application/views/admin/admin.php:91
2014-11-27 09:07:04 --- DEBUG: #0 /home/wap20/sites/kohana/application/views/admin/admin.php(91): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap20/sit...', 91, Array)
#1 /home/wap20/sites/kohana/system/classes/Kohana/View.php(61): include('/home/wap20/sit...')
#2 /home/wap20/sites/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap20/sit...', Array)
#3 /home/wap20/sites/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap20/sites/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap20/sites/kohana/application/classes/Controller/Admin.php(75): Kohana_Response->body(Object(View))
#6 /home/wap20/sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin->action_main()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#9 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap20/sites/kohana/application/views/admin/admin.php:91
2014-11-27 09:07:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: usersString ~ APPPATH/views/admin/admin.php [ 114 ] in /home/wap20/sites/kohana/application/views/admin/admin.php:114
2014-11-27 09:07:12 --- DEBUG: #0 /home/wap20/sites/kohana/application/views/admin/admin.php(114): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap20/sit...', 114, Array)
#1 /home/wap20/sites/kohana/system/classes/Kohana/View.php(61): include('/home/wap20/sit...')
#2 /home/wap20/sites/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap20/sit...', Array)
#3 /home/wap20/sites/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap20/sites/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap20/sites/kohana/application/classes/Controller/Admin.php(76): Kohana_Response->body(Object(View))
#6 /home/wap20/sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin->action_main()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#9 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap20/sites/kohana/application/views/admin/admin.php:114
2014-11-27 09:07:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: templatesString ~ APPPATH/views/admin/admin.php [ 119 ] in /home/wap20/sites/kohana/application/views/admin/admin.php:119
2014-11-27 09:07:26 --- DEBUG: #0 /home/wap20/sites/kohana/application/views/admin/admin.php(119): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap20/sit...', 119, Array)
#1 /home/wap20/sites/kohana/system/classes/Kohana/View.php(61): include('/home/wap20/sit...')
#2 /home/wap20/sites/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap20/sit...', Array)
#3 /home/wap20/sites/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap20/sites/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap20/sites/kohana/application/classes/Controller/Admin.php(77): Kohana_Response->body(Object(View))
#6 /home/wap20/sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin->action_main()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#9 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap20/sites/kohana/application/views/admin/admin.php:119
2014-11-27 09:38:57 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function sendBack() ~ APPPATH/classes/Controller/Ajax.php [ 49 ] in file:line
2014-11-27 09:38:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 09:39:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function sendBack() ~ APPPATH/classes/Controller/Ajax.php [ 49 ] in file:line
2014-11-27 09:39:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line