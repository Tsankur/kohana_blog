<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-28 04:24:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH/classes/Controller/Posts.php [ 47 ] in /home/wap20/sites/kohana/application/classes/Controller/Posts.php:47
2014-11-28 04:24:44 --- DEBUG: #0 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap20/sit...', 47, Array)
#1 /home/wap20/sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Posts->action_tag()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Posts))
#4 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap20/sites/kohana/application/classes/Controller/Posts.php:47
2014-11-28 04:24:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: tag ~ APPPATH/classes/Controller/Posts.php [ 48 ] in /home/wap20/sites/kohana/application/classes/Controller/Posts.php:48
2014-11-28 04:24:59 --- DEBUG: #0 /home/wap20/sites/kohana/application/classes/Controller/Posts.php(48): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap20/sit...', 48, Array)
#1 /home/wap20/sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Posts->action_tag()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Posts))
#4 /home/wap20/sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap20/sites/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap20/sites/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap20/sites/kohana/application/classes/Controller/Posts.php:48
2014-11-28 07:36:50 --- EMERGENCY: ErrorException [ 2 ]: move_uploaded_file(/kohana_blog/assets/images/posts/54787a72270ad.png): failed to open stream: No such file or directory ~ APPPATH/classes/Controller/Ajax.php [ 182 ] in file:line
2014-11-28 07:36:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', '/home/wap20/sit...', 182, Array)
#1 /home/wap20/sites/kohana_blog/application/classes/Controller/Ajax.php(182): move_uploaded_file('/tmp/phpwl9CMe', '/kohana_blog/as...')
#2 /home/wap20/sites/kohana_blog/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_uploadimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap20/sites/kohana_blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /home/wap20/sites/kohana_blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap20/sites/kohana_blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap20/sites/kohana_blog/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-11-28 07:37:15 --- EMERGENCY: ErrorException [ 2 ]: move_uploaded_file(/kohana_blog/assets/images/posts/54787a8b1620d.png): failed to open stream: No such file or directory ~ APPPATH/classes/Controller/Ajax.php [ 182 ] in file:line
2014-11-28 07:37:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', '/home/wap20/sit...', 182, Array)
#1 /home/wap20/sites/kohana_blog/application/classes/Controller/Ajax.php(182): move_uploaded_file('/tmp/phpe9Mknn', '/kohana_blog/as...')
#2 /home/wap20/sites/kohana_blog/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_uploadimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap20/sites/kohana_blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /home/wap20/sites/kohana_blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap20/sites/kohana_blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap20/sites/kohana_blog/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-11-28 07:45:07 --- EMERGENCY: ErrorException [ 2 ]: move_uploaded_file(/kohana_blog/assets/images/posts/54787c63b88a4.png): failed to open stream: No such file or directory ~ APPPATH/classes/Controller/Ajax.php [ 182 ] in file:line
2014-11-28 07:45:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', '/home/wap20/sit...', 182, Array)
#1 /home/wap20/sites/kohana_blog/application/classes/Controller/Ajax.php(182): move_uploaded_file('/tmp/php1u7ILX', '/kohana_blog/as...')
#2 /home/wap20/sites/kohana_blog/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_uploadimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap20/sites/kohana_blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /home/wap20/sites/kohana_blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap20/sites/kohana_blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap20/sites/kohana_blog/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-11-28 08:03:29 --- EMERGENCY: ErrorException [ 2 ]: move_uploaded_file(/kohana_blog/assets/images/posts/547880b12daa1.png): failed to open stream: No such file or directory ~ APPPATH/classes/Controller/Ajax.php [ 183 ] in file:line
2014-11-28 08:03:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', '/home/wap20/sit...', 183, Array)
#1 /home/wap20/sites/kohana_blog/application/classes/Controller/Ajax.php(183): move_uploaded_file('/tmp/phpw2m3yg', '/kohana_blog/as...')
#2 /home/wap20/sites/kohana_blog/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_uploadimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap20/sites/kohana_blog/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /home/wap20/sites/kohana_blog/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap20/sites/kohana_blog/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap20/sites/kohana_blog/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-11-28 09:30:01 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH/views/templates/default/body.php [ 39 ] in file:line
2014-11-28 09:30:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line