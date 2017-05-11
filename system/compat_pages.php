<?php
/**
 * Compat pages (backward support for Gesior AAC)
 *
 * @package   MyAAC
 * @author    Slawkens <slawkens@gmail.com>
 * @copyright 2017 MyAAC
 * @version   0.0.6
 * @link      http://my-aac.org
 */
defined('MYAAC') or die('Direct access not allowed!');
switch($page)
{
	case 'whoisonline':
		$page = 'online';
		break;

	case 'latestnews':
		$page = 'news';
		break;

	case 'tibiarules':
		$page = 'rules';
		break;

	case 'killstatistics':
		$page = 'lastkills';
		break;

	case 'buypoints':
		$page = 'points';
		break;

	case 'shopsystem':
		$page = 'gifts';
		break;

	default:
		break;
}
?>