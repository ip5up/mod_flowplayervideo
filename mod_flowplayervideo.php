<?php
// no direct access
defined('_JEXEC') or die;
jimport( 'joomla.application.component.view');

$app		= JFactory::getApplication();

// Get Param
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$videoname = htmlspecialchars($params->get('videoname'));
$width = htmlspecialchars($params->get('width'));
$ratio = htmlspecialchars($params->get('ratio'));
require JModuleHelper::getLayoutPath('mod_flowplayervideo', $params->get('layout', 'default'));