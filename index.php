<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/Bollywood/trunk/library/common.inc.php');
//echo $_SERVER['DOCUMENT_ROOT'];
include_once($_SERVER['DOCUMENT_ROOT'].'/Bollywood/trunk/library/constents.php');
if(isset($_GET['controller']) && !empty($_GET['controller'])){
      $controller =$_GET['controller'];
}else{
      $controller ='login';  //default controller
//echo "hi";
}

if(isset($_GET['function']) && !empty($_GET['function'])){
      $function =$_GET['function'];
	  //die("dfdsfdsfdsfsd".$function);
}else{
      $function ='execute_process';    //default function
     // echo 'func';
}

$controller=strtolower($controller);

$fn = SITE_ROOT.'/controller/'.$controller . '.php';
//echo $fn;
//echo SITE_ROOT.'controller/'.$controller . '.php';

if(file_exists($fn)){
      require_once($fn);
      $controllerClass=$controller.'Controller';
      if(!method_exists($controllerClass,$function)){
          die($function .' function not found');
      }

      $obj=new $controllerClass;
      $obj-> $function();

}else{
      die($controller .' controller not found');
}
?>
