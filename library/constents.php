<?php 

/*
*
* This class contain all methods that describes all the functionality that how the certificate will be generated to the user....

* @package              Zend_Magic

* @author               praveen pandey
* @date                 09-04-2013
* @version              version - 2
* @modified-by          praveen pandey
* @modification-date    12-04-2013
* ...
*/

define('DOC_ROOT',$_SERVER['DOCUMENT_ROOT']);  				//output-->   /var/www

define('SITE_ROOT',DOC_ROOT.'/main_project/');           //output-->  /var/www/main_project/
define('SITE_PATH','http://'.$_SERVER['HTTP_HOST'].'/main_project/');   //output-->    http://localhost/main_project/
define('IMAGE_PATH',SITE_PATH.'images/');    		//output-->                http://localhost/main_project/images/
define('CSS_PATH',SITE_PATH.'css/');         		//output-->                http://localhost/main_project/css/
define('JS_PATH',SITE_PATH.'js/');           		//output-->                http://localhost/main_project/js/
define('LIBRARY_ROOT',SITE_ROOT.'library/'); 		//output-->                /var/wwwmvc/library/
define('VIEW_PATH',SITE_ROOT.'view/');       		//output-->                /var/wwwmvc/view/
define('MODEL_PATH',SITE_ROOT.'model/');     		//output-->                /var/wwwmvc/model/
// define('username',$_REQUEST['username']);
// define('password',$_REQUEST['passwd']);
define('ip_address',$_SERVER['SERVER_ADDR']);
define('access_date',date('l jS \of F Y h:i:s A'));
define('browser_details',$_SERVER['HTTP_USER_AGENT']);
define('port_number',$_SERVER['REMOTE_PORT']) ;
define('machine_name' ,@getHostByAddr($ip_address));
define('PDO_PATH',SITE_ROOT.'pdo_lib/cxpdo');
define('PHPMAILER_CLASS_ROOT',SITE_ROOT.'PHPmailer/');
define('PHPMAILER_CLASS_ROOT_CLASS',PHPMAILER_CLASS_ROOT.'trunk/');

/* View folder/testquestion.php constents */
define('WELCOME','Wellcome Player');
define('ENTER_NAME','Enter Your name :');
define('SIGNUP_BACK','Click to close tab');



?>
