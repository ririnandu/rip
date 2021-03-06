<?php defined('SYSPATH') or die('No direct script access.');

if ( ! defined('KOHANA_START_TIME'))
{
	/**
	 * Define the start time of the application, used for profiling.
	 */
	define('KOHANA_START_TIME', microtime(TRUE));
}

if ( ! defined('KOHANA_START_MEMORY'))
{
	/**
	 * Define the memory usage at the start of the application, used for profiling.
	 */
	define('KOHANA_START_MEMORY', memory_get_usage());
}

/**
 * Kohana translation/internationalization function.
 *
 *    __('Welcome back, :user', array(':user' => $username));
 *
 * @param   string  text to translate
 * @param   array   values to replace in the translated text
 * @return  string
 */
function __($string, array $values = NULL, $lang = 'en-us')
{
	$string = I18n::get($string);

	return empty($values) ? $string : strtr($string, $values);
}