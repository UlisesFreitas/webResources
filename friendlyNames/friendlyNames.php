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
 
 
 	Project Name: friendlyNames.php
	Project Description: friendlyNames V1.0
	File Name: friendlyNames.php
	Author: Ulises Freitas
	Author URI: http://ulisesfreitas.com
	Version: 1.0.0
	
**************************************************************************/
function NameFriendly ($str = '') {

	    $friendlyURL = htmlentities($str, ENT_COMPAT, "UTF-8", false); 
	    $friendlyURL = preg_replace('/&([a-z]{1,2})(?:acute|lig|grave|ring|tilde|uml|cedil|caron);/i','\1',$friendlyURL);
	    $friendlyURL = html_entity_decode($friendlyURL,ENT_COMPAT, "UTF-8"); 
	    $friendlyURL = preg_replace('/[^a-z0-9-]+/i', '-', $friendlyURL);
	    $friendlyURL = preg_replace('/-+/', '-', $friendlyURL);
	    $friendlyURL = trim($friendlyURL, '-');
	    $friendlyURL = strtolower($friendlyURL);
	    return $friendlyURL;
}
?>