<?php


/**
* This is the captcha implementatin 
*
* This is to to prevent bot to register
*
* LICENSE: Some license information
*
* @category   Zend
* @package    Zend_Magic
* @subpackage Wand
* @copyright  Copyright (c) 2005-2011 Zend Technologies USA Inc. (http://www.zend.com)
* @license    http://framework.zend.com/license   BSD License
* @version    $Id:$
* @link       http://framework.zend.com/package/PackageName
* @since      File available since Release 1.5.0
*/





?>

<html>
		<head>
				
				<script type="text/javascript" src="<?php echo SITE_PATH;?>js/jquery.js"></script>
                <link href="<?php echo SITE_PATH;?>css/style_element.css" rel="stylesheet" type="text/css" />
                               
		</head>
		<body id="captcha_body" >
				
				
				
				<div class="background">
				<div class="transbox">
						<form name='f1'>  
						<p>
							<table><tr><td><?php echo WELCOME;?></td></tr>
							       <tr><td></td></tr>
							       <tr><td><?php echo ENTER_NAME;?></td></tr>
							       <tr><td></td></tr>
						        </table>
							<center>
							<table border="1">
							        <tr><td ><input class="captcha_button" size="9" id ="captcha" type="text" name="captcha"/></td></tr>
								<tr><td><input type="button" id ="sub" name="sub" value="submit"/><input type="reset" value="reset"/></td></tr>
							</table>
							</center>
							     
								
								
								
						</p>
						</form>
				</div>
				</div>
		</body>
		
	<script>
		$(document).ready(function() {
		    $("#sub").click(function() {
				captcha= $("#captcha").val();
			$.ajax({
			    type: "POST",
			     url: 'index.php?controller=signup&function=captchaProcessing',
			    data: "captcha="+captcha+"&rand="+"<?php echo $rand?>",
			     success: function(result) {
				//$("div").html(result);
				var response = result;
				if(response == 1)
				{
						
				    window.location = "index.php?controller=signup&function=load_signup";		
				}else{
				    
				    window.location = "index.php?controller=signup&function=captcha&flag=1";
				}
				
			    }
			});  
			
		    });
		});
	</script>
	<center> <a href="index.php?controller=login" ><?php echo SIGNUP_BACK;?></a>  </center>
		
</html>


