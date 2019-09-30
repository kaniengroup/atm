<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



if ( ! function_exists('css_url'))
{
	function css_url ($chemin, $nom)
	{
		return base_url() . $chemin . $nom . '.css';
	}
}

if ( ! function_exists('js_url'))
{
	function js_url($chemin, $nom)
	{
	    return base_url() . $chemin . $nom . '.js';
	}
}

if ( ! function_exists('img_url'))
{
	function img_url($chemin, $nom)
	{
	    return base_url() . $chemin . $nom;
	}
}

if ( ! function_exists('img'))
{
	function img($chemin, $nom, $alt = '')
	{
	    return '<img src="' . img_url($chemin, $nom) . '" alt="' . $alt . '" />';
	}
}





?>