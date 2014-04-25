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
 
 
 	Project Name: validUrl.php
	Project Description: validUrl V1.0
	File Name: validUrl.php
	Author: Ulises Freitas
	Author URI: http://ulisesfreitas.com
	Version: 1.0.0
	
	
	Usage:
	
	<?php
	
	require_once('validUrl.php');
	
	$url = 'http://ulisesfreitas.com';
	
	$isValidUrl = validUrl($url);
	echo $isValidUrl; // return true
	
	$nourl = 'ulisesfreitas.com';
	$isValidUrl = validUrl($isValidUrl);
	echo $isValidUrl; // returns false
	
	?>
	
	
	
	
**************************************************************************/

function validUrl($text){
    
		$regex = "((https?|ftp)\:\/\/)?"; // SCHEME 
		$regex .= "([a-z0-9+!*(),;?&=\$_.-]+(\:[a-z0-9+!*(),;?&=\$_.-]+)?@)?"; // User and Pass 
		$regex .= "([a-z0-9-.]*)\.([a-z]{2,3})"; // Host or IP 
		$regex .= "(\:[0-9]{2,5})?"; // Port 
		$regex .= "(\/([a-z0-9+\$_-]\.?)+)*\/?"; // Path 
		$regex .= "(\?[a-z+&\$_.-][a-z0-9;:@&%=+\/\$_.-]*)?"; // GET Query 
		$regex .= "(#[a-z_.-][a-z0-9+\$_.-]*)?"; // Anchor
		
		if(preg_match("/^$regex$/", $text, $matches)){ 
				
				return $matches;	
        }else{
	           return false;
        }
        
    }
?>