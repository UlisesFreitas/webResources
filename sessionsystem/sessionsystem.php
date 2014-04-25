<?php
/**************************************************************************
                   The MIT License (MIT)

	Copyright (c) 2014 Ulises Freitas
	
	Permission is hereby granted, free of charge, to any person obtaining a copy
	of this software and associated documentation files (the "Software"), to deal
	in the Software without restriction, including without limitation the rights
	to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
	copies of the Software, and to permit persons to whom the Software is
	furnished to do so, subject to the following conditions:
	
	The above copyright notice and this permission notice shall be included in all
	copies or substantial portions of the Software.
	
	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
	IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
	FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
	AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
	LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
	OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
	SOFTWARE.
 
 
 	Project Name: sessionsystem.php
	Project Description: sessionsystem V1.0
	File Name: sessionsystem.php
	Author: Ulises Freitas
	Author URI: http://ulisesfreitas.com
	Version: 1.0.0
	
	Usage:
	
	<?php
	
	require_once('sessionsystem.php');	
	
	//Assign to a variable 
	$sessionHandler = new SessionSystem();
	$sessionHandler->SessionStart();
	
	//Store any value on session
	$storeThisValue = 'bigSecret';
	$sessionHandler->SetSessionVar('secret',$storeThisValue);	
		
	//Retrieve Value
	$sessionStoredValue = $sessionHandler->GetSessionVar('secret');
	echo $sessionStoredValue; // output - bigsecret
	
	//Remove Value
	$sessionHandler->DeleteSessionVar('secret');
	
	//Destroy entire session
	$sessionHandler->DestroySession();
		
	?>
	
	
**************************************************************************/

class SessionSystem {
	

	public static function SessionStart(){
		session_start();
	}	
	
	public static function SetSessionVar($name, $value){
	
		if(!$name || !$value){
			return false;
		}else{
			$_SESSION[$name] = $value;
		}
	
	}
	
	public static function GetSessionVar($name){
	
			if (isset($_SESSION[$name])) {
				 return $_SESSION[$name];
			} else {
				return false;
			}
				
	}
	
	public static function DeleteSessionVar($name){
	
		unset($_SESSION[$name]);
	
	}

	public static function DestroySession(){
	
	   $_SESSION = array(); 
	   	session_unset();
        session_destroy(); 
	}

}
?>