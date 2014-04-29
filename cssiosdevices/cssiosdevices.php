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
 
 
 	Project Name: cssiosdevices.css
	Project Description: cssiosdevices V1.0
	File Name: cssiosdevices.css
	Author: Ulises Freitas
	Author URI: http://ulisesfreitas.com
	Version: 1.0.0
	
**************************************************************************/
/** iPhone **/
/** Landscape **/
@media screen and (max-device-width: 480px) {}
/** Portrait **/
@media screen and (max-device-width: 320px) {}

/** iPhone 4 **/
@media only screen and (-webkit-min-device-pixel-ratio : 1.5), only screen and (min-device-pixel-ratio : 1.5) {}

/** iPhone 5 **/
@media screen and (device-aspect-ratio: 40/71) {}
/** or **/
@media screen and (device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2){}

/*** Tablets ***/

/** iPad Mini **/
@media screen and (device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 1) {}

/** iPad 2 **/
/** Landscape **/
@media (max-device-width: 1024px) and (orientation: landscape) { }
/** Portrait **/
@media (max-device-width: 768px) and (orientation: portrait) { }

/** iPad 3 **/
/** Landscape **/
@media (max-device-width: 1024px) and (orientation: landscape) { }

/** Portrait **/
@media (max-device-width: 768px) and (orientation: portrait) { }

/** iPad 4 **/
@media screen and (device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2) {}