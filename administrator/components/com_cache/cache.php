<?php
/**
 * @version		$Id$
 * @package		Joomla.Administrator
 * @subpackage	Cache
 * @copyright	Copyright (C) 2005 - 2009 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License, see LICENSE.php
  */

// no direct access
defined('_JEXEC') or die('Restricted access');

$user = & JFactory::getUser();
if (!$user->authorize('core', 'cache.manage')) {
	JFactory::getApplication()->redirect('index.php', JText::_('ALERTNOTAUTH'));
}

jimport('joomla.application.component.controller');

$controller	= JController::getInstance('Cache');
$controller->execute(JRequest::getCmd('task'));
$controller->redirect();