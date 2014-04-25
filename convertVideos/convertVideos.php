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
 
 
 
 	Project Name: convertVideos.php
	Project Description: convertVideos V1.0
	File Name: convertVideos.php
	Author: Ulises Freitas
	Author URI: http://ulisesfreitas.com
	Version: 1.0.0
	
	
	Usage:
	<?php
	
	require_once('convertVideos.php');
	
	$video = 'https://www.youtube.com/watch?v=w7g5WVS25M4';
	$width = '960';
	$height = '640';
	
	echo '<div>'.convertVideos($video,$width,$height);.'</div>';
	
	?>
	
**************************************************************************/

function convertVideos($string, $width, $height) {
		
	$rules = array(
		'#http://(www\.)?youtube\.com/watch\?v=([^ &\n]+)(&.*?(\n|\s))?#i' => '<object width="'.$width.'" height="'.$height.'"><param name="movie" value="http://www.youtube.com/v/$2"></param><embed src="http://www.youtube.com/v/$2" type="application/x-shockwave-flash" width="'.$width.'" height="'.$height.'"></embed></object>',
 
		'#http://(www\.)?vimeo\.com/([^ ?\n/]+)((\?|/).*?(\n|\s))?#i' => '<object width="'.$width.'" height="'.$height.'"><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="movie" value="http://vimeo.com/moogaloop.swf?clip_id=$2&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1" /><embed src="http://vimeo.com/moogaloop.swf?clip_id=$2&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="'.$width.'" height="'.$height.'"></embed></object>',
		
		'#https://(www\.)?youtube\.com/watch\?v=([^ &\n]+)(&.*?(\n|\s))?#i' => '<object width="'.$width.'" height="'.$height.'"><param name="movie" value="https://www.youtube.com/v/$2"></param><embed src="https://www.youtube.com/v/$2" type="application/x-shockwave-flash" width="'.$width.'" height="'.$height.'"></embed></object>',
		
		'#http://(?:www\.)?youtu(?:be\.com/watch\?v=|\.be/)(\w*)(&(amp;)?[\w\?=]*)?#i' => '<object width="'.$width.'" height="'.$height.'"><param name="movie" value="https://www.youtube.com/v/$1"></param><embed src="https://www.youtube.com/v/$1" type="application/x-shockwave-flash" width="'.$width.'" height="'.$height.'"></embed></object>',
 
		'#https://(www\.)?vimeo\.com/([^ ?\n/]+)((\?|/).*?(\n|\s))?#i' => '<object width="'.$width.'" height="'.$height.'"><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="movie" value="https://vimeo.com/moogaloop.swf?clip_id=$2&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1" /><embed src="https://vimeo.com/moogaloop.swf?clip_id=$2&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="'.$width.'" height="'.$height.'"></embed></object>'
	
	);
 
	foreach ($rules as $link => $player)
		$string = preg_replace($link, $player, $string);
 
	return $string;

}
?>